# Writing AI-agent-friendly web service functions

This guide is for developers of Moodle plugins (any type) that expose web service functions. The AI agent plugin converts web service functions into tools that LLMs can call, and certain conventions make a function much more usable — or unusable — in this context.

If you follow these recommendations, your plugin's functions will work well with the AI agent out of the box and won't need correction overrides.

## Test with the AI agent

The single most valuable thing you can do is **actually test your functions with an AI agent**. Install the `tool_aiagent` plugin, enable your functions, and try asking the agent to perform realistic tasks. You will immediately see what confuses the LLM, what is missing, and what descriptions are ambiguous. Most issues in this guide are only obvious after you watch an LLM misuse a function.

If you do not have access to the AI agent plugin, you can use [Moodle MCP](https://lmscloud.io/products/moodle-mcp/) or `webservice_mcp` from the Moodle plugins directory instead — both take the same approach of exposing web service functions as tools. Note that using MCP requires some extra setup: you need to enable web services, create a service that includes the functions you want to expose, and generate an access token for it. File upload support is also limited in Moodle MCP and missing entirely from `webservice_mcp`. For more on the advantages of using the AI agent directly, see <https://lmscloud.io/products/ai-agent>.

## Function design

### Avoid deep nesting in input parameters

(This applies to input parameters only — see below for why nesting in return values is fine, and often a good idea.)

LLMs handle flat parameter lists much better than deeply nested structures. For example, `core_cohort_create_cohorts` takes this shape (simplified):

```php
'cohorts' => new external_multiple_structure(
    new external_single_structure([
        'categorytype' => new external_single_structure([
            'type' => new external_value(PARAM_TEXT, 'id / idnumber / system'),
            'value' => new external_value(PARAM_RAW, 'the value of the categorytype'),
        ]),
        'name' => new external_value(PARAM_RAW, 'cohort name'),
        // ...
    ])
),
```

To create one cohort, the LLM must produce a 3-level nested payload with a `categorytype` wrapper that only holds a `{type, value}` pair. LLMs regularly omit the wrapper, swap `type` and `value`, or flatten `categorytype.value` into a top-level field. A flat design (`categoryid`, `categoryidnumber`, `issystemcategory`) would be trivially correct every time.

Two levels of nesting (e.g. a list of items, or a single `options` object with flat fields inside) generally works fine. The third level is where things break — some LLMs, notably Ollama models, consistently ignore anything beyond the second level.

### Avoid conditional parameter types

Do not design a function where one parameter's type depends on another parameter's value. For example:

```
type: 'user' | 'cohort'
target: string | int  // user email if type=user, cohort id if type=cohort
```

Even with clear documentation, LLMs will mix these up. Use separate parameters instead:

```
useremail: string (optional)
cohortid: int (optional)
```

### Chaining is cheap — prefer several small functions over one complex one

When you design a UI for humans, you want to minimise back-and-forth: one screen that does everything, with conditional fields that appear only when needed. For an AI agent this tradeoff is reversed. Chaining several tool calls in sequence costs the agent almost nothing — it can do ten calls before the user notices — but a single function with conditional parameters, branches, and modes confuses the LLM and causes subtle errors.

For example, in the quiz module you could design either:

- **One complex function** that creates a question *and* optionally adds it to a quiz *and* optionally sets its grade weight and position, based on which parameters are provided.
- **Three simple focused functions**: one to create a question, one to add an existing question to a quiz, one to set the grade/position.

The second design is much more reliable with an AI agent. Each function has a narrow purpose, few parameters, and no conditional behaviour. The agent chains them when it needs all three, and calls just one when it doesn't. Don't over-engineer the single-function case.

### Keep responses small — every token costs money and time

Every byte a function returns ends up in the LLM's context window, eating into the token budget and slowing down the next turn. Functions that dump hundreds of records, or that include huge HTML blobs by default, can single-handedly exhaust the context of a long conversation. A few habits to avoid this:

- **Allow the caller to select which fields to return.** A `fields` parameter listing allowed field names lets the agent fetch only what it needs. This is especially important for objects with large text fields (`summary`, `description`, `content`, `intro`) — the agent usually only needs them in follow-up calls.
- **Paginate long lists.** Any function that can return more than a handful of results should accept `limit` and `offset` (or a cursor) and return a total count. Without pagination, a "list all users" call on a large site will blow out the context on the first response. Pick a sensible default limit — maybe 25 — rather than returning everything.
- **Consider a separate "detail" function for heavy fields.** If your list function returns course or activity records, return the IDs, names, and a handful of identifiers by default; provide a separate `get_X_details` for the full record with descriptions, settings, and HTML content. The agent will fetch details only for the specific entity the user asked about.
- **Don't embed binary or base64 blobs.** Return file URLs or draft area references instead. A base64-encoded PDF in a response will destroy token budgets for no gain.

### Provide paired create/update and read/write functions

If you expose a `create_X` function, also expose an `update_X` function. Users trust the AI agent more over time and will ask it to modify things they previously asked it to create — if `update` is missing, the agent will either give up or delete-and-recreate, which is much more destructive.

Similarly, if you reference something by ID in your write functions, make sure there is a read function that can resolve IDs from human-readable names (e.g. a `search_X_by_name` or `get_X_by_shortname` alongside `update_X`). The LLM will not know internal numeric IDs otherwise.

Update flows also need a **raw read-back** function that returns text fields exactly as stored. Display-oriented read functions apply filters (multilang, autolink) whose output must never be written back through an update, so a lossless read-modify-write needs an unfiltered source. Name the returned fields the same as the update function's parameters so the caller can copy, modify and send them back.

### Enumerate all valid values in descriptions

If a parameter accepts a specific set of string values (e.g. `'ASC' | 'DESC'`, or a list of field names), **list every valid value in the description**. LLMs fabricate plausible-looking values that don't exist. Examples:

- Bad: `"Fields to return"` → LLM will invent field names.
- Good: `"Fields to return. Allowed values: 'id', 'fullname', 'shortname', 'summary', 'category'"`

Same applies for context levels (list numeric codes with their meanings: `10=system, 50=course, ...`), format codes, etc.

### Handle "all parameters" on update functions

LLMs tend to fill in **every parameter** of an `update_X` function, not just the ones that need to change. To counter this, spell out the "send only what you want to change" rule **in the description of the parameter the LLM is populating** — not in the function-level description, which is too far away to steer the model when it is generating the payload.

For example, if the input is `{"users": [{"id": 1, "field": "value"}]}`, the description on the `users` parameter itself should say something like:

> Users to update. Each entry must include the `id` plus only the fields that should change. Any field you omit will be left untouched.

The same applies to single-item updates: attach the guidance to the object or parameter the LLM is filling in, not to the function description as a whole.

The function then has to honour that contract:

- Treat an absent field as a no-op — don't re-validate it, don't overwrite it with a default, and don't trigger side effects on its behalf.
- Treat "absent" and "present with the existing value" as equivalent. Both mean "no change".
- Don't raise validation errors for fields the caller didn't include or did not intend to change.

### File support (inline attachments and file fields)

Any function that accepts or produces files should support the standard Moodle **draft file area** pattern.

In traditional web services, clients upload files by POSTing to `webservice/upload.php`, which places the files into a draft file area and returns the area ID. That ID is then passed to the actual web service function, which moves the files into permanent storage (e.g. into an activity, a user picture, a forum post).

A number of core functions already accept draft area IDs — for example `core_user_add_user_private_files`, `core_user_update_picture`, `mod_assign_save_submission`, `mod_forum_add_discussion`. The cleanest example is `mod_workshop_add_submission`. Here is how its parameters could be written, applying all of the recommendations in this guide:

```php
return new external_function_parameters([
    'workshopid' => new external_value(PARAM_INT,
        'Workshop id (this is an instance id of the workshop, not a course module id)'),
    'title' => new external_value(PARAM_TEXT, 'Submission title'),
    'content' => new external_value(PARAM_RAW,
        'Submission text content. Images and files from the inlineattachmentsid draft area can be ' .
        'embedded in the HTML using @@PLUGINFILE@@/filename.ext (assumes file is at filepath \'/\').',
        VALUE_DEFAULT, ''),
    'contentformat' => new external_value(PARAM_INT,
        'The format used for the content: 0 = Moodle auto-format, 1 = HTML, 2 = plain text, 4 = Markdown.',
        VALUE_DEFAULT, FORMAT_MOODLE),
    'inlineattachmentsid' => new external_value(PARAM_INT,
        'The draft file area id for inline attachments in the content', VALUE_DEFAULT, 0),
    'attachmentsid' => new external_value(PARAM_INT,
        'The draft file area id for attachments', VALUE_DEFAULT, 0),
]);
```

(The real core function uses shorter, vaguer descriptions; the example above is the AI-agent-friendly version.)

Two important details for AI agents specifically:

- The description of the content field must explain how to reference embedded files (the `@@PLUGINFILE@@/filename.ext` syntax). Without this, the LLM will not know to embed images even if it created the draft area.
- Separate inline attachments from regular attachments with distinct parameters (`inlineattachmentsid` vs `attachmentsid`).

The AI agent's built-in `create_draft_file_area` tool (`upload_files` in Moodle MCP) creates draft areas and returns IDs, so the pattern works out of the box — but only if your parameters are documented this way.

**However, many core functions that should accept files do not.** For example, `core_course_create_courses` accepts a course summary (HTML) but has no way to embed images, and no way to upload a course image. To work around this, the AI agent plugin modifies some core functions to add file support (the plugin's `create_draft_file_area` tool together with the corrections file patch the schema). This works, but it is a maintenance burden we would rather not carry.

**Plugin developers: please add draft-area file support to any write function that takes HTML content, or that logically produces a file-bearing entity, from day one.** Don't wait until someone asks. The pattern above is cheap to implement and makes your plugin immediately useful to the AI agent.

## Parameter and return descriptions

### Spell out internal jargon

Moodle has many internal terms that an LLM has no general knowledge of: `cmid`, `instance id`, `timesort`, `contextid`, `itemid`, `tagcollid`, etc. When a user asks "what homework is due this week?", the LLM needs to match that to your tool — but it won't find the word "timesort" anywhere in the user's query. **Write descriptions in user-facing language first, then mention the internal term if needed.**

- Bad: `"Get calendar action events by timesort"`
- Good: `"Get calendar action events by timesort, including activity completion due dates."`

### Distinguish instance ID from course module ID

This is the single most common source of AI agent errors. Many Moodle functions take a **module instance ID** (the row ID in the activity's own table, e.g. `mdl_forum.id`), but the parameter is described just as "id" or "forum id". The LLM almost always guesses this is the `cmid` (course module ID), which fails.

- Bad: `"Forum id"`
- Good: `"Forum id (this is an instance id of the forum, not a course module id)"`

If your function takes a course module ID, say so explicitly:

- Good: `"Course module id (cmid, the id from course_modules table)"`

### Explain non-obvious defaults

If a parameter has non-obvious behaviour around its edge values, document it:

- Bad: `"Time sort from"`
- Good: `"Time sort from. Pass 0 to include overdue events; passing the current timestamp will miss overdue events."`

### Make return field names self-explanatory

To save tokens, AI agent implementations often send only the function's input schema to the LLM, not the output schema. The LLM sees the raw response at runtime and has to interpret it without help from any descriptions you wrote. This means **the field names in your return structure must be understandable on their own**.

- Bad: `['id' => ..., 'name' => ..., 'num' => ...]` — which `id`? which `num`?
- Good: `['courseid' => ..., 'coursefullname' => ..., 'enrolledstudents' => ...]`

Some things to watch for:

- **Avoid bare `id`** — always prefix it with what it identifies (`courseid`, `userid`, `forumid`). If you return multiple IDs at the same level, the LLM will not be able to guess which is which.
- **Avoid abbreviations** the LLM can't resolve (`cid`, `fid`, `ts`). Either expand them or add a clarifying prefix.
- **When working with course modules, return both the instance id and the course module id.** Different functions need different ones — some accept `forumid`/`quizid`/`glossaryid` (the instance id), others require `cmid`. If your function returns course module data, include both fields (e.g. `forumid` and `cmid`) so the agent can chain into whichever function it needs next without a separate lookup.
- **Distinguish similar values**: don't return both `name` and `fullname` without clarifying what each is — use `shortname` / `fullname` / `displayname`.
- **Date fields should say so**: `timecreated`, `timemodified`, `duedate` — not just `time` or `date`.
- **Boolean fields should read as questions**: `isvisible`, `iscompleted`, `hasgrade` — not `flag` or `status`.

You should still write clear descriptions on every return field (they are valuable for developers reading your code, and some tools do include them), but assume the LLM will only ever see the field names.

### Nesting is fine in return values

Unlike input parameters, deeply nested **return** structures are often *helpful*: they show the LLM how the data relates. A course with a nested `sections` array, each containing a nested `modules` array, conveys the hierarchy much more clearly than a flat list would. The LLM only needs to read the returned JSON — it doesn't need to produce a matching schema — so the concerns that apply to inputs don't apply here. Nest freely if it reflects the real structure of your data.

## Metadata fields

### `capabilities` — list only hard requirements

In `db/services.php`, list only the capabilities that are **absolutely required in at least one context on the site** — meaning without this capability anywhere, the function will always fail regardless of other context. Do not list capabilities that are optional, context-dependent, or only needed for specific branches.

The AI agent plugin uses this field to decide whether a function is available to the current user. A user who has one of the listed capabilities (in at least one context) will see the tool; a user with none will not.

- Bad: `'moodle/course:create, moodle/course:visibility'` — visibility is optional, it filters the tool out for users who could actually call the function.
- Good: `'moodle/course:create'`

### `type` — `read` or `write`

Set this accurately. `read` functions are safer for AI agents and can be enabled more liberally; `write` functions typically need more careful review. Getting this wrong means the user's role/permission filters will not match what you intended.

## Common pitfalls we corrected in core

The AI agent plugin ships with a corrections file (`data/corrections.json`) that patches core Moodle function descriptions. Looking at these can save you from repeating the same mistakes:

- **Typos in descriptions** (e.g. `"tiemsort"`) — the LLM will happily invent parameters to match the misspelling.
- **Undocumented context level codes** — `core_cohort_search_cohorts` takes a `contextlevel` parameter as an int but didn't list what the integers mean.
- **Missing clarification on `id` parameters** — `mod_assign_get_grades`, `mod_forum_add_discussion`, `mod_glossary_add_entry` and many others expected instance IDs but just said "assignment id" / "forum id" / etc.
- **Optional capabilities listed as required** — `core_course_create_courses` had `moodle/course:visibility` in the list, blocking users who could actually create courses.
- **Empty required capability lists that imply restrictions** — `core_course_get_contents` listed capabilities as "required" that were really only needed for specific branches.
- **Complex instructions as giant paragraphs** — `mod_forum_add_discussion.options` originally had a multi-line description with tabs and ambiguous syntax; LLMs struggled to parse it. A clean list of `key (type) — description` entries works much better.

## Summary checklist

- [ ] Flat parameter structures where possible
- [ ] No conditional parameter types
- [ ] Paired create/update and read/write functions
- [ ] ID lookup functions exist for every ID you require
- [ ] All enum/allowed values listed in descriptions
- [ ] `update` function tolerates unchanged parameters being passed
- [ ] File upload via draft area documented if your function accepts HTML
- [ ] Plain-English function/parameter descriptions (no unexplained jargon)
- [ ] Instance IDs vs course module IDs explicitly distinguished
- [ ] `capabilities` lists only hard requirements
- [ ] `type`, `loginrequired`, `ajax` set accurately
- [ ] Tested with an actual AI agent

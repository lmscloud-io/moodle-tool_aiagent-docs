# Changelog

All notable changes to the tool_aiagent plugin are documented here. The format is based on
[Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

## [4.5.9] - 2026-10-26

### Added

- **Background chats**: the AI agent keeps working after the user leaves the page or closes the
  tab, and runs chains of functions faster. This needs the Path to PHP CLI to be set.
- **Stop button**: stops the AI agent while it thinks or runs functions.
- **Function rules for placements**: placements can now limit which functions are available.
- **Availability and capabilities in all reports**: the Functions, Skills and Placements reports
  show what this site cannot use and which capabilities a user needs, and now look the same.
- **File support for third-party web services**: web service functions of other plugins can now
  return files to the chat, see [AIAGENT_WS_GUIDE.md](AIAGENT_WS_GUIDE.md).
- **Catalan translation**: the interface, settings and privacy descriptions are now available in
  Català (ca).

### Changed

- More compact presentation of the function calls in the chat.
- New chats start in the "Read-only" auto-approve mode.
- The AI agent is not available while logged in as another user or with a switched role.
- Performance improvements when loading a big list of functions.
- A placement that matches every page now shows on all of them, also on pages where a more specific
  placement uses the same button location.
- Calls to `search_tools` are no longer shown in the chat.
- A skill can now be limited to being an initial skill of a placement, or to being loaded on demand
  by the AI agent during a chat.
- Loading a skill no longer asks for approval.
- The Functions report shows built-in functions that change only the files in the chat as "Safe".

### Fixed

- Fixed medium and low-severity issues reported by
  [MDL Shield](https://mdlshield.com); details are withheld until sites have had time to upgrade.
- A chat that lost its connection to the server kept showing the AI agent at work. It now says it
  stopped receiving updates, offers Refresh, and catches up by itself once the connection is back.
- With OpenAI, the AI agent could not read images. With the Chat Completions API, it could read only
  PDF files.
- With Google Gemini's Interactions API, the AI agent lost its instructions after its first reply or
  function call in a chat, so it could not load skills during the chat.
- Duplicating a course through the AI agent could fail with "setting_by_name_not_found".
- In a chat started with a skill, the AI agent sometimes tried to load that skill again under a
  made-up name.
- A placement whose initial skills a user cannot use is now hidden from that user, as its help text
  says, instead of starting a chat without them.
- When an extracted archive had files with the same name in different folders, the AI agent could
  read the wrong one.
- The image and file functions could sometimes fail with "Call to undefined function
  file_get_unused_draft_itemid()".
- Auto-approve no longer pauses with "Repeated call" when the AI agent checks its work again after
  each change, for example previewing a certificate after every edit.
- In the AI agent's replies, line breaks inside a table showed as "<br>", and headings were as large
  as the page's own.
- A chat title with "&" showed "&amp;" in Previous chats and in the offer to resume the last chat.
- Improved display in right-to-left languages such as Arabic.
- On Moodle 5.3, the floating AI agent button jumped into the page content on narrower windows or
  zoomed pages with the block drawer open, such as a book or a quiz attempt.

## [4.5.8] - 2026-10-12

### Added

- **Gradebook setup functions**: the AI agent can set up a course's gradebook: categories, items,
  weights, aggregation, order, calculations, grade settings, letters, scales and outcomes.
- **More activity settings**: the AI agent can set an activity's outcomes, ratings, competencies,
  forced language, download option and AI tools, quiz review options and due date, assignment late
  penalties and multiple marking, and the grade categories of LTI and workshop activities.
- **File reading on Mistral**: the AI agent can read PDF, Word, PowerPoint, Excel and image files on
  Mistral's API, including its EU endpoint.
- **Friendlier function call details**: the details dialog shows parameters and results as readable
  fields, lists and tables instead of raw JSON, with a switch back to the JSON.
- **Dark mode support**: in Moodle 5.3's dark colour mode, the chat and the AI agent's
  administration screens follow the dark theme.

### Changed

- When the AI agent cannot make the change you asked for, it tells you and asks before making a
  different change with a similar effect.
- A Kimi model served from anywhere other than Moonshot's own API now reads files like any other
  model on that service; Moonshot's file reading is used only on Moonshot's API.

### Fixed

- With OpenAI on the Responses API, the AI agent had to fill in every optional parameter of a
  function, so some changes failed, such as adding a question to a Feedback activity.
- Creating or editing an activity through the AI agent could unexpectedly reset some of its
  settings, or change the grading of an activity that already had grades.
- The OpenAI provider failed in the AI agent with another vendor's model, such as Mistral, unless
  the API type was switched to Chat Completions.
- Generating an image with Google Gemini failed in the AI agent with "revisedprompt: expected
  string, got null".
- Opening the chat offered to resume the last chat even when it was started from a different
  placement.
- When the AI model asked to read a PDF or an image as plain text, the chat showed a failed function
  call and the model had to ask for the file again.
- Small display fixes in the chat window.

## [4.5.7] - 2026-09-30

### Added

- **Conversation integrity**: a request keeps running if you refresh the page, close the tab or
  lose your connection mid-turn, and you can pick the conversation up where you left it.
- **Moodle 5.3 support**: the AI agent now runs on Moodle 5.3 and is tested against it.
- **Suggested prompts**: a placement can offer ready-made first messages as buttons on the chat's
  start screen. Clicking one sends it, unless it contains `...`, which puts it in the message box for
  the user to finish.
- **Skill tags**: give skills your own tags and filter the skills list by them.

### Changed

- Skills that came with the plugin are marked Bundled in the skills list. They can still be disabled
  and edited, but no longer deleted or renamed.
- A bundled skill you have changed is marked with an asterisk, and the AI agent can tell you what
  differs from the supplied version and put that version back.
- A bundled skill you have not changed now follows the supplied version when the plugin's materials
  are updated, so improvements to it reach your site.
- You can now change the short name of a skill you created yourself.
- The chat's start screen names the loaded skills and the page you came from on one line, in place of
  the row of chips.

### Fixed

- Opening the same conversation in two windows could break it. The windows are not kept in sync,
  but if you act in a window that is out of date you are offered to refresh it first.
- OpenAI's GPT-6 Sol and GPT-6 Luna failed on every message when the API type was Chat Completions.
  They now work there, with the model's reasoning turned off; GPT-6 Astra needs the Responses API.
- Google Gemini failed on every message when the Interactions API was chosen in the AI agent
  settings or in the provider's endpoint.
- Tokens spent on function discovery now count towards each chat's usage. The AI agent usage report
  source left them out, so a chat's token totals came out lower than what the AI provider billed.
- Denying a function call could leave two identical flag buttons under the same bubble.
- Opening the sidebar left the site navigation laid out for the full width, so its tabs wrapped onto
  a second line and were drawn over the page heading. The navigation now moves tabs into its More
  menu as the sidebar narrows the page, and brings them back when it closes.

## [4.5.6] - 2026-09-02

### Added

- **Current page awareness**: in the overlay and sidebar views the agent knows which page you are
  looking at, and can read that page and attach it to the chat as a Markdown snapshot.
- **Forum search**: the agent can find forum posts across one course or several, by words, phrase,
  subject, author, date range, tags or starred discussions.
- **Group and grouping editing**: the agent can now set a group's picture and its messaging, put
  images in a group or grouping description, and fill in the custom fields a site defines, reading
  either one exactly as stored before it edits.
- The agent can now read a forum post exactly as it was written before editing it, so rewording a
  post keeps its embedded images and its original formatting instead of quietly converting them.
- Listing a course's groups now includes their custom fields.

### Fixed

- Chats on OpenAI and Azure OpenAI could stop with a provider error as soon as the agent reached
  for certain functions, among them looking up assignments, searching courses and creating a course.
- Asking the agent to set up a marking guide or rubric either failed with an "Unexpected keys"
  parameter error or saved a form with no criteria in it, worth 0 points. Both are fixed.
- A marking guide or rubric could lose criteria without saying so, when the agent named a
  criterion that does not exist. That is now refused with an error the agent can correct.
- Asked to reword what students see for a marking guide criterion, the agent would edit the
  marker-only guidance instead. Each criterion field now says who reads it.
- Asking the agent to create a grouping failed outright unless it happened to set an ID number.
- Editing a group turned its group messaging off, so renaming a group quietly closed the group
  conversation its members were using.
- The agent no longer mistakes the format Moodle reports when it reads a forum post for the format
  the post is stored in, which could turn a plain text or Markdown post into raw HTML on saving.
- The agent could not open a file uploaded to a course unless you pasted its download link into the
  chat. It now finds the file itself.
- The agent could list a course's forums but had no way to open or link to any of them; every
  activity listing now reports that link, and all of them report it the same way.
- Asked to edit a course section that does not exist, the agent reported a database error instead
  of what was wrong. It now names the bad section id and says how to add a section.
- Setting a group's visibility was refused the first time and only went through after the agent
  retried it a different way.
- Setting a course image pointed the agent at a function that does not exist, so it had to find the
  right one for itself.
- Editing one detail of a group or grouping made the agent restate the ones it was not changing,
  which risked overwriting them with a stale copy.

## [4.5.5] - 2026-08-26

### Fixed

- The agent could lose access to an attached file right after reading it and then invent its
  contents. A file it has read now stays available for the rest of the chat.
- A connection error while the agent is working no longer wipes the message you are typing:
  the already-sent message and its attachments were being put back over your draft.
- The chat no longer jumps to the bottom on every function call when you have scrolled up;
  only a new function approval prompt still pulls you down to it.
- You no longer need to scroll after sending images: the chat stays at its end while their
  thumbnails render, and reopening a chat with images lands at its end.
- Error messages no longer show the Copy response and feedback buttons; they had nothing to
  act on there.

## [4.5.4] - 2026-08-24

### Added

- **Advanced grading**: create and edit rubrics and marking guides, switch an assignment's grading
  method and grade submissions with them.
- **Database activities**: create and configure databases, manage their fields and templates, and
  add entries with files and rich text.
- **Workshop activities**: create and configure peer-assessment workshops, define assessment forms
  for all four grading strategies, author example submissions with their reference assessments,
  and move workshops through their phases.
- **Feedback activities**: create and configure feedback surveys and their questions of all nine
  types, including conditional questions and page breaks.
- **H5P activities**: create H5P activities from an uploaded package or from the content bank, and
  configure their tracking, grading and display options.
- **External tool (LTI) activities**: list the external tools a course can launch, or every tool
  registered on the site, and add activities that launch them. Register new tools.
- **Glossary, wiki, choice, BigBlueButton, SCORM and subsections**: create and configure all of
  these, edit glossary entries and wiki pages without losing their formatting.

### Changed

- The image functions (resize, crop, PDF to image) now accept a public web address, not just a
  file attached to the chat.
- Generating an image now reports the pixel size of the result, so the agent can tell you how big
  the image is and resize it without having to inspect it first.
- The bundled "Create a lesson" skill is now named `mod_lesson_management`, to match the other
  per-activity skills.

### Fixed

- Addressed a security issue reported by mdlshield.com. Details are withheld until sites have had
  time to upgrade.
- Times you give the agent are no longer read in the wrong timezone, so activities and events are
  scheduled at the hour you asked for.
- Leaving the chat while the agent is working warns again: the warning went silent after
  approving a function batch, and the refresh/close warning never fired in overlay and sidebar.
- Users no longer see functions they lack the permissions to run: some teacher-only functions
  were listed for everyone (running them was always blocked).
- The agent no longer looks like it has stopped part-way through a long run of automatic function
  calls: the "thinking" indicator now stays up until the whole run finishes.
- A completed function call no longer stays stuck on the waiting or running icon when a status
  update was missed mid-chain.
- An open chat overlay or sidebar no longer appears a second time inside the H5P iframe of an
  activity, or inside any other framed page such as the file picker.

## [4.5.3] - 2026-08-05

### Added

- **Translations**: the interface, settings and privacy descriptions are now available in:
  - Dansk (da)
  - Deutsch (de)
  - eesti (et)
  - English (United States) (en_us)
  - Español - Colombia (es_co)
  - Español - Internacional (es)
  - Español - México (es_mx)
  - Français (fr)
  - Italiano (it)
  - Nederlands (nl)
  - Norsk (no)
  - Português - Brasil (pt_br)
  - Suomi (fi)
  - Svenska (sv)
  - Ελληνικά (el)
  - Русский (ru)
  - Українська (uk)
  - עברית (he)
  - العربية (ar)
  - 日本語 (ja)
- **Maximum function result size**: a new setting caps how much data a single function may return
  to the AI model.

### Changed

- Consistent wording throughout the interface: a conversation is now always a "chat" and has a
  "name" rather than a title, everything the agent runs is a "function" rather than a "tool", and
  the configuration tab is named "Placements" rather than "Button locations".
- Reading a course's contents and listing its activities now return far less data by default, so
  chats use fewer tokens; the agent still asks for the full detail when it needs it.
- The "Inline file content limit" setting is now entered as a size with a KB/MB selector, and is
  measured in bytes; sites using non-Latin alphabets may see inline file content truncated earlier.

### Fixed

- Addressed a security issue reported by mdlshield.com. Details are withheld until sites have had
  time to upgrade.
- The floating chat button now moves aside for an open block or message drawer instead of hiding
  behind it.
- The layout in right-to-left languages is fixed throughout the interface.
- On Moodle 5.0 and later, the "Previous chats" and view-switcher menus in the chat header open
  under their button instead of off the edge of the screen.
- A file's actions menu near the bottom of the "Attached files" dialog is no longer cut off.
- Approve and Deny buttons no longer appear on function calls an auto-approve mode is already
  running.
- In languages that wrap at any character, such as Japanese, the Functions table headers no longer
  collapse to one character per line.

## [4.5.2] - 2026-07-30

### Added

- **Course backups**: the agent can list a course's backups (when each was made, by whom, manual or
  automated, whether it holds participant data) and look inside one to report what it contains.
- **File reading on all AI providers**: files now work with OpenAI Chat Completions, Kimi
  (Moonshot) and other OpenAI-compatible services; where a provider cannot accept files, text
  file content is read directly into the conversation, with a configurable size limit.
- **Chat view types**: open the chat as a resizable corner overlay or a docked sidebar as well as
  the full-screen page, switching between them from the chat header. A setting chooses which views
  are available.
- **Context-aware chat access**: `tool/aiagent:usechat` can now be granted per category, course or
  activity, so it can be added to teacher roles; it controls where a chat can be started.
- **New chat chooser**: when there is more than one way to start a chat, "New chat" offers the page's
  chat buttons, a blank chat, or "Same as this chat" (keeping the chat's context, skills and custom
  welcome text).
- **Retention settings**: conversations are removed from the chat history (with their files, on
  this site and best effort on the AI provider) after a configurable period, and their message and
  usage logs are permanently deleted after a second, longer period.
- **Privacy registry**: now declares what is sent to the AI provider and to the plugin developers.

### Changed

- New installs now add a floating chat button on every page by default, instead of a link in the
  user menu (existing sites keep their current button placements).
- Clearer function parameter descriptions and tool-use guidance reduce cases where the agent misreads
  a field, invents an input it cannot know, or gives up on an action it can actually do.
- Requests to the AI provider now time out after 10 minutes instead of hanging indefinitely when
  the endpoint stalls; the chat surfaces the error and offers "Try again".

### Fixed

- Exported skill JSON no longer contains stray carriage returns, which every skill saved from the edit
  form picked up whatever operating system it was edited on.
- On OpenAI models that search for functions themselves (gpt-5.4 and later), most function calls failed
  with "does not exist or is no longer available" and the agent then reported it had no suitable
  function; the calls now run as intended.
- On those same models, loading a skill had no effect: its functions were hidden again along with the
  rest of the catalogue. A loaded skill's functions are now available to the agent straight away, and
  it finds the right function for a request more reliably.
- The chat now works on Microsoft SQL Server, where three queries used syntax those sites reject, so
  every conversation failed as soon as it had a message.
- Several chat error messages, and the Functions report's file-and-image function label, now follow the
  site language instead of always appearing in English.
- Addressed security warnings detected by mdlshield.com: TLS certificate verification is now enforced
  on the cloud API calls, and chat file uploads are virus-scanned and size-checked.
- Adding question-bank questions to a quiz now checks you may use each question and is refused once the
  quiz has attempts; chat attachments that would render inline (such as HTML or SVG) are sent as downloads.
- Uploading a file into a draft area now always asks for approval; in the "Safe" auto-approve mode it
  ran unconfirmed even though it can download a file from any address on the internet.
- Moving an activity to a different section now works instead of silently doing nothing.
- On sites that allow stealth activities, the agent can now make an activity available but hidden
  from the course page (stealth mode).
- Reading an activity's settings no longer errors when both its module id and instance id are given
  for the same activity.
- Reading a file whose URL has no item id no longer fails with "Malformed pluginfile URL".
- The "N files attached" summary card could lose its total size when attachments arrived while
  functions were still running; it now always shows it.
- A chat button or user first name containing "&", "<" or ">" showed the character's HTML code
  instead, on the injected buttons, the user menu, the new-chat chooser and the welcome greeting.

## [4.5.1] - 2026-07-13

### Added

- Setting to specify **custom Responses API endpoints**, for hosted or proxied OpenAI / Azure deployments.
- New capability `tool/aiagent:autoapproveall` (managers by default) restricts who can use the
  "All" auto-approve mode.
- **Pre-update functions**: the agent now preserves multilang tags and embedded files when editing
  existing activities, sections, courses, categories and questions.
- **Access restriction (availability) functions**: the agent can now read and edit the full restriction
  tree on any activity or course section, covering all installed availability plugins, guided by a
  new editable "availability_restrictions" skill.
- A **"Copy response" button** on each assistant message copies its text to the clipboard. Thanks to
  Michael Nodding (Murdoch University).
- **Course completion functions**: the agent can read and configure a course's completion criteria and
  aggregation.

### Changed

- Clearer chat error when the Responses API endpoint is wrong or unreachable.

### Fixed

- "Try again" after a failed reply now works on the OpenAI Responses and Gemini Interactions APIs.
- Missing artefacts are re-fetched on demand, so functions no longer silently disappear.
- Changing the auto-approve mode no longer hides Approve and Deny when the new mode still cannot
  run the pending function.
- Book chapters the agent reads for a student are now rendered, not shown as raw markup.
- Course files whose URL used the `webservice/pluginfile.php` endpoint could be reported as corrupt;
  the agent now reads them correctly. Thanks to Michael Nodding (Murdoch University).

## [4.5.0] - 2026-07-01

- First commercially licensed release of the AI agent plugin.

# Changelog

All notable changes to the tool_aiagent plugin are documented here. The format is based on
[Keep a Changelog](https://keepachangelog.com/en/1.1.0/); this project uses Moodle-style
`major.minor.patch` releases mirrored by the `$plugin->release` in `version.php`. The top entry must
match the release being cut (the deploy preflight enforces this).

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

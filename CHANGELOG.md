# Changelog

All notable changes to the tool_aiagent plugin are documented here. The format is based on
[Keep a Changelog](https://keepachangelog.com/en/1.1.0/); this project uses Moodle-style
`major.minor.patch` releases mirrored by the `$plugin->release` in `version.php`. The top entry must
match the release being cut (the deploy preflight enforces this).

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

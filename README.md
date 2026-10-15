# AI Agent for Moodle

> **This repository is a public issue tracker.** It carries no plugin source code; it mirrors the
> README and changelog of the AI Agent for Moodle plugin, which is distributed separately. Please use
> the issues here to report bugs and request features. It also carries the plugin's language packs in
> [`lang/`](lang) and a screenshot of every screen in every language in
> [`screenshots/`](screenshots), both refreshed at each release; translation fixes are welcome as pull
> requests.

**Describe the task in plain words. The agent does it in your Moodle site.**

Course content, databases, gradebooks, rubrics, dates, enrolments, reports: the AI agent works inside
Moodle through the same functions Moodle itself uses, as the user who asks, with that user's permissions.

[**Try the live demo**](https://demo.lmscloud.io/) · [Pricing and licensing](https://lmscloud.io/products/ai-agent/) · [Every screen in every language](https://github.com/lmscloud-io/moodle-tool_aiagent-docs/tree/main/screenshots) · [Changelog](CHANGELOG.md)

For Moodle 4.5 to 5.3. Works with the AI provider you already have.

## See what it does

Every result below was made by the agent on a standard Moodle site, from the prompt shown.

### Beautiful course content in one sentence

> Add a label to the General section: two colorful cards side by side, "What you will learn" and "Upon completion", each with a short list with colored bullet icons.

![A Moodle course page with two colorful cards created by the AI agent](https://lmscloud.io/images/aiagent/showcase/cards.jpg)

### A spreadsheet becomes a Database activity

> In Week 2 create a database activity from this file. Use radio/multi-select field types where applicable. Insert the first 5 records with images.

> I want the list view to look like the attached image.

![A Moodle Database activity with plant entries shown as photo cards](https://lmscloud.io/images/aiagent/showcase/database.jpg)

### A thousand clicks, one prompt

> The course now starts on Monday 2 November. Adjust all dates: each week starts on Monday at 8am, assignments are due on Friday at 6pm of the same week.

The course start, every section's availability and every assignment's due date, updated in one go.

![The Activities overview of a Moodle course with the new Friday 6 PM due dates](https://lmscloud.io/images/aiagent/showcase/dates.jpg)

### Gradebook setup without the gradebook jargon

> The course final grade should include 10% for attendance (to be filled in manually), and the last assignment should be worth twice as much as any other assignment. Organise grades into two categories: assignments and attendance.

![Moodle gradebook setup with Assignments at 90% and Attendance at 10%](https://lmscloud.io/images/aiagent/showcase/gradebook.jpg)

### A rubric from a PDF, ready to grade with

> Create an assignment where students have to hand me a physical paper. I want to use this rubric for assessment.

![An assignment's Advanced grading page with a four-criteria rubric created from a PDF](https://lmscloud.io/images/aiagent/showcase/rubric.jpg)

### Ask about your course, get a straight answer

> Is the course completion up to date? Check that every activity with completion tracking is included in the course completion criteria.

The agent reads the actual settings and tells you exactly what is missing. It changes nothing until you say so.

![The agent's answer listing two activities missing from the course completion criteria, next to Moodle's course completion settings](https://lmscloud.io/images/aiagent/showcase/completion.jpg)

### Your own launchers, welcome text and suggested prompts

Put task-specific buttons on the pages where the work happens. Each one opens the agent with its own
welcome text, suggested prompts and skills, so teachers start from a click instead of a blank box.
You can set all of this up in the admin screens, or just ask the agent to do it.

![A course page with a custom AI agent launcher menu and its welcome screen with suggested prompts](https://lmscloud.io/images/aiagent/showcase/launcher.jpg)

> Create an accordion explaining the four urban habitat types covered in Week 1

![An accordion on a Moodle course page, created from a suggested prompt](https://lmscloud.io/images/aiagent/showcase/accordion.jpg)

In this example we had a skill that instructs the agent how to create interactive elements. You can
create your own skills for UI elements, course structure, validation, gradebook configuration,
anything you need.

## What's inside

- **About 300 Moodle functions, ready to use.** We reviewed and rated more than 700 standard web service
  functions, enabled the useful ones, and rewrote descriptions and fixed behaviour where language models
  went wrong with them.
- **170+ functions written for the agent**, for jobs Moodle's built-in functions can't do:
  - working with files and images: read, resize, crop, convert, unpack archives, generate new images
  - creating and configuring 20+ types of activity
  - access restrictions on activities and sections
  - gradebook categories and weights
  - rubrics and marking guides
  - and more with every release
- **Extensible by any plugin.** Web service functions from other plugins are picked up automatically.
  See [AIAGENT_WS_GUIDE.md](AIAGENT_WS_GUIDE.md) for how to make yours work well with language models,
  or ask us to build the plugin you need: [support@lmscloud.io](mailto:support@lmscloud.io).
- **Skills.** Ten ready-made skills for multi-step jobs (gradebook setup, rubrics, Database, Lesson,
  Workshop, Feedback, access restrictions and more), plus your own for the way your institution works.
- **Launchers** on the pages you choose, with welcome text, suggested prompts and starting skills.
- **Attach your files.** PDFs, spreadsheets and images for the AI to read (on supported models), or to
  pass straight on to Moodle.
- **Your AI provider.** OpenAI, Azure OpenAI, Google Gemini, Claude (Anthropic) and OpenAI-compatible
  endpoints, through Moodle's own AI subsystem. You pay your provider directly; no per-message fees from us.
- **Translated into 20 languages**, with right-to-left support and Moodle 5.3 dark mode. Browse
  [every screen in every language](https://github.com/lmscloud-io/moodle-tool_aiagent-docs/tree/main/screenshots)
  before you install.
- **You stay in control.** Approve each action, or choose an auto-approve level (read-only, safe, all).
  Actions run as the current user with full Moodle capability checks, and every request is logged in
  Moodle's AI usage reports.
- **Thoroughly tested and actively maintained.** Over 2,000 automated unit tests and 200+ end-to-end
  scenarios run on every supported Moodle version with PostgreSQL and MariaDB before each release.

## Who builds it

AI Agent is built by Marina Glancy at [LMSCloud](https://lmscloud.io). Marina has worked with Moodle for
15 years, including at Moodle HQ, with seven years as a senior technical architect on the Moodle
Workplace team.

## Getting started

1. Install the plugin to `public/admin/tool/aiagent`.
2. Configure at least one AI provider in *Site administration > AI*. The AI agent uses the configuration for the "Generate text" action.
3. Visit *Site administration > Plugins > AI Agent settings* and enter your license key.
4. Visit *Site administration > AI > AI Agent configuration* and review skills, button placements, and enable functions.
5. Grant the `tool/aiagent:usechat` capability to the desired roles.
6. Open the chat with the **AI agent** button in the bottom right corner of any page (bottom left in right-to-left languages) and start asking! It comes from the default placement, which you can change in *AI Agent configuration*, for example to show the chat in the user menu instead.

The agent's longer tasks run for several minutes inside one request. If a reverse proxy, load
balancer or application gateway sits in front of Moodle, allow requests to `admin/tool/aiagent/ajax.php`
to run for at least 10 minutes (600 seconds). The chat survives a shorter timeout, but the reply
then arrives through the page's live updates instead of the request itself.

## Model support

Moodle core's AI subsystem is single-shot (no multi-turn conversation, tool calling, or file delivery), so the agent plugin needs a per-provider adapter for each AI provider. New providers won't work with the agent until that adapter is added, even if they already work elsewhere in Moodle.

Currently supported:

- **OpenAI**: `aiprovider_openai`, standard plugin in Moodle 4.5+.
- **Azure AI**: `aiprovider_azureai`, standard plugin in Moodle 4.5+.
- **Google Gemini**: `aiprovider_gemini`, standard plugin in Moodle 5.2+. On earlier versions (Moodle 4.5+), install the third-party [`aiprovider_gemini`](https://moodle.org/plugins/aiprovider_gemini).
- **Claude / Anthropic**: `aiprovider_anthropic`, standard plugin in Moodle 5.3+. On earlier versions, install the third-party [`aiprovider_anthropic`](https://moodle.org/plugins/aiprovider_anthropic) (Moodle 4.5+) or [`aiprovider_claude`](https://moodle.org/plugins/aiprovider_claude) (Moodle 5.0+).
- **OpenAI-compatible** endpoints: Ollama, DeepSeek, Groq, Open WebUI, etc. These haven't been explicitly tested but may work, except the ones listed below.

We recommend using modern models. Older models may not be capable enough to cope with Moodle's complexity and the large number of available tools. The set of available features also depends on the chosen model, for example, file handling, web search, and similar capabilities may or may not be supported. Review the *AI agent settings* before you start working.

AI file reading (for example, summarising a PDF) works on Claude models, OpenAI models via the Responses API, Gemini models (uploaded on demand to the Files API and reused across the conversation), and on the Kimi (Moonshot) and Mistral APIs. With any model, files attached to the chat can be passed through to Moodle web service functions, for example to set a user picture or attach a file to a forum post.

### Tested OpenAI-compatible endpoints

These services have been tested with the agent, including reading files. Use them with the OpenAI provider: in its "Generate text" action, set the endpoint to the URL below and the model to one the service offers.

| Service | Endpoint | Files the AI can read |
|---|---|---|
| **Mistral** | `https://api.mistral.ai/v1/chat/completions` or `https://api.eu.mistral.ai/v1/chat/completions` | PDF, Word (.docx), PowerPoint (.pptx), Excel (.xlsx), PNG, JPEG, GIF, WebP and text files. Images need a model with vision. |
| **Kimi** (Moonshot) | `https://api.moonshot.ai/v1/chat/completions` | Documents such as PDF and Office files (Moonshot extracts the text), images, and text files. |

Mistral keeps no files: a file the AI has read is sent with every request of the chat. Moonshot keeps no documents either: it extracts their text and the file is deleted straight away. Images read on Kimi stay in Moonshot's file storage until the chat is deleted, by the user or automatically after the chat retention period. Mistral does not commit to where requests to its global endpoint are processed, so sites that need processing in the EU should use the EU endpoint.

## For plugin developers

If you are developing a Moodle plugin that exposes web service functions and want them to work well with the AI agent, read [AIAGENT_WS_GUIDE.md](AIAGENT_WS_GUIDE.md), a short guide on function design, parameter descriptions, and metadata conventions that LLMs handle well.

## License

Proprietary and commercial. Copyright (C) LMSCloud Limited. All rights reserved.

This plugin is licensed, not sold, under the LMSCloud Commercial License. See the
[LICENSE](LICENSE) file for the full terms. Unauthorised redistribution or resale is prohibited.

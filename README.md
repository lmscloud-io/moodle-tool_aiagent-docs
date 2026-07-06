# AI Agent for Moodle

An AI-powered assistant that lives inside your Moodle site. Ask it to search courses, enrol students, create activities, check grades, and hundreds of other tasks, all through a friendly chat interface with full conversation history.

The AI proposes actions and **you approve them** before anything happens. Every action runs as the current user with full Moodle capability checks, so the agent can never do more than you could do yourself.

## Highlights

- **Works through Moodle's standard AI provider API**: supports OpenAI, Claude/Anthropic, Google Gemini, Azure OpenAI, and OpenAI-compatible providers, configured in *Site administration > AI*.
- **Tool use with approval flow**: the AI can call Moodle web service functions on your behalf, but only after you click Approve.
- **Curated function catalogue**: all core/standard web service functions have been reviewed and rated for suitability and relevance, with useful ones pre-selected out of the box. Descriptions have been refined where needed to reduce LLM confusion.
- **File attachments**: with any model, files attached to the chat can be passed through to Moodle web service functions (e.g. to set a user picture or attach to a forum post).
- **AI file reading on supported models**: if you want the AI itself to read attachment contents (for example, to summarise a PDF), this works on Claude models, OpenAI models via the Responses API, and Gemini models (uploaded on demand to the Files API and reused across the conversation).
- **Image generation**: generate images directly from the chat using any configured "Generate image" provider.
- **Smart function discovery**: with hundreds of functions available, the AI dynamically discovers only what it needs, keeping requests fast and affordable.
- **Usage logging**: every request is logged to Moodle's standard AI usage reports, as well as comprehensive plugin usage logging.
- **Configurable system instructions**: customise the AI's behaviour from the plugin settings.

## Model support

Moodle core's AI subsystem is single-shot (no multi-turn conversation, tool calling, or file delivery), so the agent plugin needs a per-provider adapter for each AI provider. New providers won't work with the agent until that adapter is added, even if they already work elsewhere in Moodle.

Currently supported:

- **OpenAI**: `aiprovider_openai`, standard plugin in Moodle 4.5+.
- **Azure AI**: `aiprovider_azureai`, standard plugin in Moodle 4.5+. OpenAI models only, not Azure AI Foundry's Llama / Mistral / DeepSeek (those sit on a different API surface).
- **Google Gemini**: `aiprovider_gemini`, standard plugin in Moodle 5.2+. On earlier versions (Moodle 4.5+), install the third-party [`aiprovider_gemini`](https://moodle.org/plugins/aiprovider_gemini).
- **Claude / Anthropic**: `aiprovider_anthropic`, standard plugin in Moodle 5.3+. On earlier versions, install the third-party [`aiprovider_anthropic`](https://moodle.org/plugins/aiprovider_anthropic) (Moodle 4.5+) or [`aiprovider_claude`](https://moodle.org/plugins/aiprovider_claude) (Moodle 5.0+).
- **OpenAI-compatible** endpoints: Ollama, DeepSeek, Groq, Open WebUI, etc. These haven't been explicitly tested but may work.

We recommend using modern models. Older models may not be capable enough to cope with Moodle's complexity and the large number of available tools. The set of available features also depends on the chosen model, for example, file handling, web search, and similar capabilities may or may not be supported. Review the *AI agent settings* before you start working.

## Getting started

1. Install the plugin to `public/admin/tool/aiagent`.
2. Configure at least one AI provider in *Site administration > AI*. The AI agent uses the configuration for the "Generate text" action.
3. Review enabled functions in *Site administration > AI > AI agent functions*.
4. Grant the `tool/aiagent:usechat` capability to the desired roles.
5. Open the chat from the **AI agent chat** link in your user menu and start asking!

## For plugin developers

If you are developing a Moodle plugin that exposes web service functions and want them to work well with the AI agent, read [AIAGENT_WS_GUIDE.md](AIAGENT_WS_GUIDE.md), a short guide on function design, parameter descriptions, and metadata conventions that LLMs handle well.

## License

Proprietary and commercial. Copyright (C) LMSCloud Limited. All rights reserved.

This plugin is licensed, not sold, under the LMSCloud Commercial License. See the
[LICENSE](LICENSE) file for the full terms. Unauthorised redistribution or resale is prohibited.

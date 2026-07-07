# AI Agent for Moodle

> **This repository is a public issue tracker.** It carries no plugin source code; it mirrors the
> README and changelog of the AI Agent for Moodle plugin, which is distributed separately. Please use
> the issues here to report bugs and request features.

An AI-powered assistant that lives inside your Moodle site. Ask it to search courses, enrol students, create activities, check grades, and hundreds of other tasks, all through a friendly chat interface with full conversation history.

The AI proposes actions and **you approve them** before anything happens. Every action runs as the current user with full Moodle capability checks, so the agent can never do more than you could do yourself.

> **Obtaining a license:** information about licensing and pricing is available at
> [lmscloud.io/products/ai-agent](https://lmscloud.io/products/ai-agent/).

## Highlights

- **Works through Moodle's standard AI provider API**: supports OpenAI, Claude/Anthropic, Google Gemini, Azure OpenAI, and OpenAI-compatible providers, configured in *Site administration > AI > AI providers*.
- **Tool use with approval flow**: the AI can call Moodle web service functions on your behalf, but only after you click Approve. Auto-approve is available and configurable from the chat composer, from asking before every call through to read-only, safe (non-modifying), or all actions.
- **Curated function catalogue**: all core/standard web service functions have been reviewed and rated for suitability and relevance, with useful ones pre-selected out of the box. Descriptions have been refined where needed to reduce LLM confusion. The plugin also bundles many extra functions that standard web services lack, for example creating activities.
- **File attachments**: with any model, files attached to the chat can be passed through to Moodle web service functions (e.g. to set a user picture or attach to a forum post).
- **AI file reading on supported models**: if you want the AI itself to read attachment contents (for example, to summarise a PDF), this works on Claude models, OpenAI models via the Responses API, and Gemini models (uploaded on demand to the Files API and reused across the conversation).
- **Image generation**: generate images directly from the chat using any configured "Generate image" provider.
- **Smart function discovery**: with hundreds of functions available, the AI dynamically discovers only what it needs, keeping requests fast and affordable.
- **Skills**: bundle specialised instructions with a recommended set of functions for a particular job. The agent loads a matching skill on its own for common multi-step tasks, and you can author your own for workflows specific to your organisation. Skills ship pre-seeded and are managed in *AI Agent configuration*.
- **Button placements**: add the AI agent button to pages whose URL matches a mask, and start the conversation with predefined initial skills and welcome text, so you can offer task-tailored agents where users need them.
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
3. Visit *Site administration > Plugins > AI Agent settings* and enter your license key.
4. Visit *Site administration > AI > AI Agent configuration* and review skills, button placements, and enable functions.
5. Grant the `tool/aiagent:usechat` capability to the desired roles.
6. Open the chat from the **AI agent chat** link in your user menu and start asking!

## For plugin developers

If you are developing a Moodle plugin that exposes web service functions and want them to work well with the AI agent, read [AIAGENT_WS_GUIDE.md](AIAGENT_WS_GUIDE.md), a short guide on function design, parameter descriptions, and metadata conventions that LLMs handle well.

## License

Proprietary and commercial. Copyright (C) LMSCloud Limited. All rights reserved.

This plugin is licensed, not sold, under the LMSCloud Commercial License. See the
[LICENSE](LICENSE) file for the full terms. Unauthorised redistribution or resale is prohibited.

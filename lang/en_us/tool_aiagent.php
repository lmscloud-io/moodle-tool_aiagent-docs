<?php
// phpcs:disable moodle.Files.BoilerplateComment
//
// This file is part of the tool_aiagent plugin for Moodle.
//
// This software is proprietary and is licensed, not sold. Use, copying,
// modification and distribution are governed by the LMSCloud Commercial
// License; see the LICENSE file in the plugin root for the full terms.
// Unauthorised redistribution or resale is prohibited.

/**
 * American English language pack for AI agent.
 * Last updated: 2026-08-31
 *
 * Only the strings whose American spelling differs from lang/en are listed. Everything else falls
 * back to lang/en, which is how core's own en_us pack works, so a string added to lang/en needs an
 * entry here only when it carries one of these spellings.
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['allowfeedback_desc'] = 'When enabled, users can rate assistant responses and flag failed function calls. Submissions are sent to the developers of the AI agent plugin (not to any LLM) so they can improve the Moodle function-calling behavior. Only the rated exchange is sent, not the full chat, and the user can edit the text before submitting. Disable this for sites with strict outbound-traffic policies.';
$string['dynamicdiscovery_desc'] = 'Optimize token usage by only discovering functions when needed. This is recommended if you have a large number of web service functions enabled. In automatic mode, this will be turned on if more than {$a} functions are available. Some AI providers have a limit on the number of functions (for example, OpenAI has a limit of 128).';
$string['feedback_modal_intro_negative'] = 'Thanks for letting us know. Your feedback will be sent to the developers of the AI agent plugin (not to the AI provider) so they can improve the Moodle function-calling behavior.';
$string['gemini_builtin_url_context_desc'] = 'Lets Gemini read and analyze content from public URLs the user mentions. Gemini 3+ models only; silently ignored on Gemini 2.5 and older because those models cannot combine built-in tools with custom function calling. URLs must be publicly accessible (no localhost, no authentication).';
$string['licenselocked_url_mismatch'] = 'This site\'s web address changed; the license holder must authorize it.';
$string['privacy:metadata:feedback'] = 'When feedback is enabled and a user rates a response or reports a failed function call, the rated exchange is sent to the developers of the AI agent plugin so that the agent\'s behavior can be improved. Nothing is sent unless the user chooses to submit feedback, and the feature can be turned off entirely with the "Allow feedback" setting.';
$string['skills_intro'] = '<p>A skill bundles specialized instructions for a particular job with a list of functions recommended for it. Use skills for common multi-step tasks where the AI agent tends to get confused or can\'t find the right functions, or for tasks specific to your organization.</p><p>The list of skills and their descriptions is always available to the AI agent, which loads a skill on its own whenever it decides one fits the user\'s request. A skill is only available to users who can access at least one of its main functions. For example, a skill built for teachers won\'t be visible to students.</p>';
$string['systeminstruction_desc'] = 'Custom instructions sent to the AI model with every request, defining its behavior, tone, and capabilities. Leave this empty to use the built-in default (shown below). You may use {siteurl} (site URL), {userid} (current user\'s ID) and {date} (today\'s date, ISO format) as placeholders; they are replaced at runtime. Default instructions:{$a->default}

Always appended to the system instructions (default or custom):{$a->context}';

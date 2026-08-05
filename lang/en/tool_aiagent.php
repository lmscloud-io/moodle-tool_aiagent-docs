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
 * English language pack for AI agent
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

// phpcs:disable moodle.Files.LangFilesOrdering.UnexpectedComment -- Strings carry a comment saying where they are used.

$string['addon'] = 'Add-on'; // Badge next to a function name in the Functions report, marking a function that comes from an add-on (third-party) plugin. Implies "Add-on function"; contrast with "Bundled".
$string['aiagent:autoapproveall'] = 'Choose the "All" auto-approve mode, which runs every function call without confirmation'; // Capability description, shown in Define roles and Check permissions.
$string['aiagent:usechat'] = 'Start AI agent chats (controls where a chat can be started; it does not restrict which data the chat can access once started)'; // Capability description, shown in Define roles and Check permissions.
$string['allowfeedback'] = 'Allow feedback'; // Name of a checkbox setting on the AI agent settings page.
$string['allowfeedback_desc'] = 'When enabled, users can rate assistant responses and flag failed function calls. Submissions are sent to the developers of the AI agent plugin (not to any LLM) so they can improve the Moodle function-calling behaviour. Only the rated exchange is sent, not the full chat, and the user can edit the text before submitting. Disable this for sites with strict outbound-traffic policies.';
$string['anthropic_heading'] = 'Anthropic (Claude)'; // Heading of the Anthropic section on the AI agent settings page.
$string['anthropic_web_fetch'] = 'Enable web fetch tool'; // Name of a checkbox setting under the Anthropic heading on the settings page. "web fetch tool" is the name of an Anthropic feature.
$string['anthropic_web_fetch_desc'] = 'Lets Claude fetch external URLs server-side via Anthropic\'s web_fetch tool. Useful when the chat references public web pages the model should read. Files on this Moodle site are handled separately via the read_file function (which uploads to Anthropic\'s Files API on demand), so disabling web_fetch does not affect access to course resources or attachments.';
$string['attachedfiles'] = 'Attached files'; // Title of the modal listing all files attached to a chat message.
$string['attachfile'] = 'Attach file'; // Tooltip and aria-label of the paperclip button in the chat composer.
$string['autoapprove'] = 'Auto-approve'; // Prefix of the auto-approve chip in the chat composer, followed by a colon and the current mode, e.g. "Auto-approve: Safe".
$string['autoapprove_all'] = 'All (use with caution)'; // Option in the auto-approve menu under the header "Auto-approve function calls". Implies "All function calls".
$string['autoapprove_all_desc'] = 'Skip every confirmation'; // Second line of the "All" option in the auto-approve menu.
$string['autoapprove_all_disabled'] = 'You do not have permission to use this mode.'; // Tooltip of the "All" option in the auto-approve menu when the user may not choose it.
$string['autoapprove_all_short'] = 'All'; // Short form of the "All" auto-approve mode, shown on the composer chip after "Auto-approve:". Implies "All function calls".
$string['autoapprove_header'] = 'Auto-approve function calls'; // Header of the auto-approve menu in the chat composer.
$string['autoapprove_none'] = 'None'; // Option in the auto-approve menu under the header "Auto-approve function calls". Implies "No function calls".
$string['autoapprove_none_desc'] = 'Ask before every function call'; // Second line of the "None" option in the auto-approve menu.
$string['autoapprove_readonly'] = 'Read-only'; // Option in the auto-approve menu under the header "Auto-approve function calls". Implies "Read-only function calls".
$string['autoapprove_readonly_desc'] = 'Auto-approve reads, ask for writes'; // Second line of the "Read-only" option in the auto-approve menu.
$string['autoapprove_safe'] = 'Safe'; // Option in the auto-approve menu under the header "Auto-approve function calls". Implies "Safe function calls".
$string['autoapprove_safe_desc'] = 'Auto-approve actions that don\'t modify the site'; // Second line of the "Safe" option in the auto-approve menu.
$string['autoapprove_safe_examples'] = 'Reads, plus resizing attachments, generating images, sending files to the LLM, etc.'; // Third line of the "Safe" option in the auto-approve menu, listing examples of what it covers.
$string['backtoconfiguration'] = 'Back to AI agent configuration'; // Link at the top of the AI agent settings page, preceded by a left arrow.
$string['builtinfunction'] = 'Bundled'; // Badge next to a function name in the Functions report, marking a function shipped with the AI agent plugin. Implies "Bundled function"; contrast with "Add-on".
$string['bulk_disabled'] = '{$a} function(s) disabled'; // Toast after a bulk action on the Functions tab of the configuration page.
$string['bulk_disableselected'] = 'Disable selected'; // Option of the bulk action menu on the Functions tab, under the label "With selected functions". Implies "Disable selected functions".
$string['bulk_enabled'] = '{$a} function(s) enabled'; // Toast after a bulk action on the Functions tab of the configuration page.
$string['bulk_enableselected'] = 'Enable selected'; // Option of the bulk action menu on the Functions tab, under the label "With selected functions". Implies "Enable selected functions".
$string['bulk_withselected'] = 'With selected functions'; // Label of the bulk action menu below the table on the Functions tab of the configuration page.
$string['capabilities'] = 'Capabilities'; // Heading of the capabilities section in the skill preview modal, and the header of the column listing the same thing in the Functions report.
$string['chat_namelink'] = 'Name with link'; // Name of the chats report column that shows the chat name as a link to the chat. The plain name column beside it is core's "name", and the created and deleted columns are core's "timecreated" and "deleted", so all four are read together.
$string['chatfrozen'] = 'This chat\'s skills are no longer available, so it can no longer be continued. Start a new chat instead.'; // Warning banner in place of the chat composer, so the user reads it where they would have typed.
$string['chathelpcontent'] = '<p>The AI agent can read and modify content on this site on your behalf. Most actions ask for your approval before they run. You can switch the auto-approve mode in the composer to relax or tighten that.</p>
<p>Attach files by dragging and dropping, pasting, or clicking the paperclip icon. Then type your request and press <strong>Send</strong>. Press Enter to send, or Shift and Enter for a new line.</p><p>AI can make mistakes. Verify results.</p>'; // Content of the help popover opened from the chat header. The bolded "Send" is the composer's send button, so it must match "sendmessage"; Enter and Shift are key names and follow the conventions of the language's own keyboards.
$string['chatnopermission'] = 'This chat was started in an area of the site where you no longer have access to the AI agent, so it cannot be continued.'; // Banner in place of the chat composer when a chat is open that the user may read but not continue, so it must not promise that anything can be retried here. Paired with "chatnostartpermission" below.
$string['chatnostartpermission'] = 'You do not have permission to start a chat here. Open the AI agent from a page where it is offered.'; // The same banner on the welcome screen, when the user may not start a chat here at all. Paired with "chatnopermission" above.
$string['chatretention'] = 'Keep chats for'; // Name of a duration setting on the AI agent settings page; the value follows the label, so it reads "Keep chats for 30 days".
$string['chatretention_desc'] = 'Chats with no activity for this long are removed from users\' chat history, their attached files are deleted from this site, and deletion of the chat data stored by the AI provider (stored responses and uploaded files) is requested. Deletion on the provider side is best effort and not guaranteed; configure a matching data retention policy in your provider account as well. Messages and usage records are kept for reporting until the log retention period below expires. Set to 0 to keep chats forever.'; // This setting and "logretention" below it refer to each other as "the setting above" and "the log retention period below", so the two descriptions have to name each other the way their labels read.
$string['closeconfirm_body'] = 'Closing the window does not delete the chat. You can reopen it any time from the Previous chats menu. Chats are deleted automatically after {$a} days.'; // Body of the "Close this chat?" dialog. "Previous chats" names the menu and must match "previouschats"; {$a} is the number of days configured in the chat retention setting.
$string['closeconfirm_body_noretention'] = 'Closing the window does not delete the chat. You can reopen it any time from the Previous chats menu.'; // The same body in the variant used when chats never expire, so it drops the sentence about automatic deletion.
$string['closeconfirm_close'] = 'Close chat'; // Confirmation button of the "Close this chat?" dialog.
$string['closeconfirm_dontshowagain'] = 'Don\'t show this again'; // Checkbox in the "Close this chat?" dialog.
$string['closeconfirm_title'] = 'Close this chat?'; // Title of the dialog shown when the user closes the chat panel.
$string['component'] = 'Component'; // Column header in the Functions report: the Moodle component the function belongs to.
$string['component_filesandimages'] = 'Files and images manipulations'; // Value of the "Component" column in the Functions report, grouping the bundled file and image functions, which belong to no Moodle component.
$string['configuration'] = 'AI agent configuration'; // Title of the AI agent configuration page (tabs: Skills, Placements, Functions) and of its entry in the site administration tree.
$string['confirmdeleteskill'] = 'Are you sure you want to delete this skill?';
$string['contextevent_opened'] = 'Opened from {$a}'; // Event line in the chat transcript. {$a} is the name of the course, activity or page the chat was opened from, shown next to a separate label for its level (e.g. "Course").
$string['contextevent_page'] = 'Page · {$a}'; // Event line in the chat transcript. {$a} is the URL of the page the chat was opened from; the word "Page" labels that URL.
$string['copyresponse'] = 'Copy response'; // Tooltip and aria-label of the copy button under an assistant message in the chat.
$string['copyurl'] = 'Copy URL'; // Item of the actions menu on a file in the chat; copies the file URL to the clipboard.
$string['datasource_chats'] = 'AI agent chats'; // Name of a report builder data source, listed when an admin creates a custom report; also the name of the folder holding the chats in the user's privacy data export.
$string['datasource_usage'] = 'AI agent usage'; // Name of a report builder data source, listed when an admin creates a custom report.
$string['deletechat_menu'] = 'Delete chat'; // Item of the "More actions" menu in the chat header.
$string['deletechat_named'] = 'Delete chat: {$a}'; // Aria-label of the delete button next to a chat in the Previous chats list. {$a} is the chat name.
$string['disablefunction'] = 'Disable this function'; // Tooltip of the toggle in the Functions report, shown while the function is enabled.
$string['dragtoresize'] = 'Drag to resize'; // Tooltip of the resize handles of the chat panel.
$string['dynamicdiscovery'] = 'Dynamic function discovery'; // Name of a setting on the AI agent settings page.
$string['dynamicdiscovery_automatic'] = 'Automatic'; // Option of the "Dynamic function discovery" setting.
$string['dynamicdiscovery_desc'] = 'Optimise token usage by only discovering functions when needed. This is recommended if you have a large number of web service functions enabled. In automatic mode, this will be turned on if more than {$a} functions are available. Some AI providers have a limit on the number of functions (for example, OpenAI has a limit of 128).';
$string['dynamicdiscovery_off'] = 'Off'; // Option of the "Dynamic function discovery" setting.
$string['dynamicdiscovery_on'] = 'On'; // Option of the "Dynamic function discovery" setting.
$string['enabled'] = 'Enabled'; // Checkbox label in the skill and placement forms, and a column header in the skills, placements and functions reports.
$string['enablefunction'] = 'Enable this function'; // Tooltip of the toggle in the Functions report, shown while the function is disabled.
$string['entity_aiagentfunction'] = 'AI agent function'; // Name of a report builder entity, listed in the column and filter pickers of a custom report.
$string['entity_chat'] = 'Chat'; // Name of a report builder entity, listed in the column and filter pickers of a custom report.
$string['entity_externalfunction'] = 'Web service function'; // Name of a report builder entity, listed in the column and filter pickers of a custom report.
$string['entity_message'] = 'Message'; // Name of a report builder entity, listed in the column and filter pickers of a custom report. Kept rather than reusing core's "message" because that key is not generic in every language: French renders it "Message personnel", a private message, which is a different thing entirely.
$string['entity_placement'] = 'Placement'; // Name of a report builder entity, listed in the column and filter pickers of a custom report.
$string['entity_skill'] = 'Skill'; // Name of a report builder entity, listed in the column and filter pickers of a custom report; also the type label on a skill pill in the chat.
$string['entity_usage'] = 'Token usage'; // Name of a report builder entity, listed in the column and filter pickers of a custom report.
$string['error_interrupted_function'] = 'A function call was interrupted before it finished. It may have partially applied changes; verify the state before retrying.';
$string['error_interrupted_llm'] = 'Communication with the AI provider was interrupted. Click "Try again" to retry the request.'; // The quoted label is the button below it, so it must match "tryagain" word for word.
$string['errordetail'] = '{$a}'; // Passthrough wrapper used when the exception message is already composed. Nothing to translate.
$string['erroremptymessage'] = 'Message cannot be empty.';
$string['errorfullscreendisabled'] = 'The full screen chat view is not enabled on this site.';
$string['errorinvalidchat'] = 'Chat not found or access denied.';
$string['errorinvalidname'] = 'Name cannot be empty.';
$string['errormissingfeedbackparams'] = 'Missing message or feedback type.';
$string['errornopendingfunction'] = 'There are no pending function calls.';
$string['errornoprovider'] = 'No AI provider is available. The AI agent uses the settings of the "Generate text" action, so you must make sure it is configured and enabled for at least one AI provider in Site administration.'; // Notice on the configuration page and in the chat when no provider handles the request. "Generate text" is the name of a core AI action (core's action_generate_text in lang/en/ai.php); render it the way core does so an admin can find it in Site administration.
$string['errornoprovider_link'] = 'Configure AI providers.'; // Link appended to the "No AI provider is available" notice on the configuration page.
$string['errornoretryresponse'] = 'There is no failed response to retry.';
$string['errorpendingfunctions'] = 'Please approve or deny the pending function calls first.'; // The two verbs name the buttons on the call: core's "approve" and this pack's "functiondeny".
$string['errorprovider_blocked_prompt'] = '{$a->provider} blocked the prompt: {$a->reason}'; // Shown in the chat when the provider blocked the request. {$a->provider} is the name of the AI provider plugin (core's own "pluginname" for it) and {$a->reason} is the provider's raw reason, which arrives in English and is not translated, so the sentence has to carry it as a quote.
$string['errorprovider_blocked_response'] = '{$a->provider} blocked the response: {$a->reason}'; // The same, for a reply the provider blocked after generating it.
$string['errorprovider_no_content'] = '{$a} returned no content.'; // The same case with no reason given, so {$a} is the provider name alone.
$string['errorprovider_no_content_with_reason'] = '{$a->provider} returned no content (finish reason: {$a->reason}).'; // The same with a finish reason, which is the provider's own English word (for example "length").
$string['errorresponses_endpoint_invalid'] = 'The endpoint for communicating with the AI provider is not valid or cannot be reached.'; // First of three paragraphs of one message in the chat, and the only one every user sees; the two below it are shown to site administrators only.
$string['errorresponses_endpoint_invalid_config'] = 'The plugin tried to use {$a->endpoint} as the OpenAI Responses API endpoint, but the request failed. Go to {$a->settingslink} and check the Responses API endpoint, or switch the API type to Chat Completions.'; // Second paragraph, administrators only. {$a->endpoint} is the URL that failed and {$a->settingslink} is a ready-made link whose text is the "settings" value above, so the sentence has to read with the name of the settings page dropped into it.
$string['errorresponses_endpoint_reply'] = 'The provider replied: {$a}'; // Third paragraph, administrators only. {$a} is the provider's own English error text.
$string['errorresponses_provider_switch'] = 'This chat cannot be continued under OpenAI\'s Responses API because it was started with a different AI provider. Start a new chat, or switch back to the original provider (or to OpenAI Chat Completions) to continue this one.';
$string['errorrootnotfound'] = 'Root message not found for this chat.';
$string['exportskill'] = 'Export'; // Row action in the skills table on the configuration page. Implies "Export skill".
$string['feedback_modal_freetextlabel'] = 'Anything else? (optional)'; // Label of the free-text field in the feedback modal.
$string['feedback_modal_freetextplaceholder_negative'] = 'What went wrong? Be as specific as you like.'; // Placeholder of the free-text field in the feedback modal opened from the thumbs-down button.
$string['feedback_modal_freetextplaceholder_positive'] = 'What worked well? (optional)'; // Placeholder of the free-text field in the feedback modal opened from the thumbs-up button.
$string['feedback_modal_freetextplaceholder_toolerror'] = 'What went wrong with this function call?'; // Placeholder of the free-text field in the feedback modal opened from the flag button on a function call. The "toolerror" in the key is the feedback type posted to the feedback backend and does not change.
$string['feedback_modal_intro_negative'] = 'Thanks for letting us know. Your feedback will be sent to the developers of the AI agent plugin (not to the AI provider) so they can improve the Moodle function-calling behaviour.';
$string['feedback_modal_intro_positive'] = 'Thanks! Your feedback will be sent to the developers of the AI agent plugin (not to the AI provider) so they can keep what works and improve what doesn\'t.';
$string['feedback_modal_intro_toolerror'] = 'Flag this function call as problematic. Your feedback will be sent to the developers of the AI agent plugin (not to the AI provider) so they can fix the underlying web service or improve how the AI uses it.';
$string['feedback_modal_send'] = 'Send feedback'; // Submit button of the feedback modal.
$string['feedback_modal_sending'] = 'Sending...'; // Label of the submit button of the feedback modal while the feedback is being sent.
$string['feedback_modal_snapshotlabel'] = 'What will be sent (you can edit)'; // Label of the editable transcript shown in the feedback modal.
$string['feedback_modal_title_positive'] = 'Tell us what worked'; // Title of the feedback modal opened from the thumbs-up button under an assistant message.
$string['feedbackcat_negative_misunderstood'] = 'Misunderstood my question'; // Category checkbox in the "Report a problem with this response" modal; the implied subject is the AI agent.
$string['feedbackcat_negative_notfollowed'] = 'Did not follow instructions'; // Category checkbox in the "Report a problem with this response" modal; the implied subject is the AI agent.
$string['feedbackcat_negative_other'] = 'Something else'; // Category checkbox in the "Report a problem with this response" modal, for a problem none of the other categories cover.
$string['feedbackcat_negative_wronginfo'] = 'Wrong or made-up information'; // Category checkbox in the "Report a problem with this response" modal, describing the response.
$string['feedbackcat_negative_wrongtoolused'] = 'Used the wrong function'; // Category checkbox in the "Report a problem with this response" modal; the implied subject is the AI agent. The "wrongtoolused" in the key is the value posted to the feedback backend and does not change.
$string['feedbackcat_positive_accurate'] = 'Accurate'; // Category checkbox in the "Tell us what worked" modal, describing the response.
$string['feedbackcat_positive_goodexplanation'] = 'Clear explanation'; // Category checkbox in the "Tell us what worked" modal, describing the response.
$string['feedbackcat_positive_helpful'] = 'Helpful'; // Category checkbox in the "Tell us what worked" modal, describing the response.
$string['feedbackcat_positive_other'] = 'Something else'; // Category checkbox in the "Tell us what worked" modal, for something none of the other categories cover.
$string['feedbackcat_positive_welltimed'] = 'Right function for the job'; // Category checkbox in the "Tell us what worked" modal; the function is the Moodle function the AI agent chose to call.
$string['feedbackcat_toolerror_misleadingresult'] = 'Result was misleading'; // Category checkbox in the "Flag this function call" modal, describing what the called function returned.
$string['feedbackcat_toolerror_other'] = 'Something else'; // Category checkbox in the "Flag this function call" modal, for a problem none of the other categories cover.
$string['feedbackcat_toolerror_toolerror'] = 'Function returned an error'; // Category checkbox in the "Flag this function call" modal, describing what the called function returned. The "toolerror" in the key is the value posted to the feedback backend and does not change.
$string['feedbackcat_toolerror_wrongargs'] = 'Wrong arguments'; // Category checkbox in the "Flag this function call" modal: the AI agent passed the wrong arguments to the function.
$string['feedbackcat_toolerror_wrongtool'] = 'Wrong function for the job'; // Category checkbox in the "Flag this function call" modal: the AI agent picked the wrong function for the task. The "wrongtool" in the key is the value posted to the feedback backend and does not change.
$string['feedbackdisabled'] = 'Feedback collection has been disabled by the site administrator.';
$string['feedbackfailed'] = 'Could not send feedback. Please try again later.';
$string['feedbackflagfunctioncall'] = 'Flag this function call'; // Tooltip and aria-label of the flag button on a function call in the chat, and the title of the modal it opens.
$string['feedbacksubmitted'] = 'Feedback submitted'; // Tooltip of the flag or rating button once feedback has been sent.
$string['feedbackthanks'] = 'Thanks for your feedback!'; // Toast shown after feedback has been sent.
$string['feedbackthumbdown'] = 'Report a problem with this response'; // Tooltip and aria-label of the thumbs-down button under an assistant message in the chat, and the title of the modal it opens.
$string['feedbackthumbup'] = 'This response was helpful'; // Tooltip and aria-label of the thumbs-up button under an assistant message in the chat.
$string['feedbackvalidation_categoryrequired'] = 'Please select at least one category.';
$string['functionapprovecount'] = 'Approve {$a} calls'; // Button under a batch of pending function calls in the chat. {$a} is their number, always two or more; a single pending call is labelled with core's "approve", so the two verbs are read together.
$string['functioncall_actions'] = 'Approve or deny function call'; // Aria-label of the group of Approve and Deny buttons under a pending function call.
$string['functioncall_chip_action'] = 'Change auto-approve mode'; // Tooltip of the auto-approve chip in the chat composer.
$string['functioncalldetails'] = 'Function call details'; // Tooltip and aria-label of the details button on a function call, and the title of the dialog it opens.
$string['functiondeny'] = 'Deny'; // Button under a single pending function call in the chat, beside the Approve button, which is core's "approve".
$string['functiondenyall'] = 'Deny all'; // Button under a batch of pending function calls in the chat.
$string['functionloopguardbody'] = 'This function has already run {$a} times with the same input. Auto-approve is paused for possible loops; approve to continue.'; // Notice on a function call the loop guard paused, shown after the "Repeated call." heading. {$a} is a number of repeats.
$string['functionloopguardheading'] = 'Repeated call.'; // Heading of the loop guard notice on a function call, immediately followed by the body text.
$string['functionname'] = 'Function name'; // Column header in the Functions report.
$string['functionparameters'] = 'Parameters'; // Section heading in the function call details dialog.
$string['functionresult'] = 'Result'; // Section heading in the function call details dialog.
$string['functionresultdiscarded'] = 'The result was too large ({$a}) and was discarded. Narrow the request by filtering it, asking for fewer fields, or using a more specific function. Repeating the same call will produce the same error.'; // Shown in the chat in place of a function result too large to send to the AI model, and read by the model itself as the result of that call. The function name is already shown above it. {$a} is a human-readable size, e.g. "6.1 KB".
$string['functions_intro'] = '<p><b>Not every web service function is a good fit for the AI agent.</b> Some were built for client-server communication (marked AJAX) or for unauthenticated users (Non-auth), and some have better alternatives. Some AJAX functions still work well with the AI agent, but most do not. The AI agent plugin assigns a relevance score (1-10) to core and standard functions and enables those scoring 5 or above. Functions from add-on plugins are not scored; instead, all of their non-AJAX functions are enabled automatically. Use this page to review the available functions and enable or disable individual ones.</p><p>When a function requires one or more capabilities, it is not available to users who do not have at least one of those capabilities in some context on the site. For core and standard plugins the AI agent plugin sets these capabilities correctly. For add-on plugins the capabilities are taken from the function definition, and because Moodle does not enforce this check itself, they may be wrong.</p>'; // Intro box at the top of the Functions tab of the configuration page.
$string['functions_report'] = 'AI agent functions'; // File name offered when the Functions report is downloaded.
$string['functionstatus_denied'] = 'Denied'; // Status of a function call in the chat, used as the alt text of its icon.
$string['functionstatus_failed'] = 'Failed'; // Status of a function call in the chat, used as the alt text of its icon.
$string['functionstatus_pending'] = 'Pending approval'; // Status of a function call in the chat, used as the alt text of its icon.
$string['functionstatus_processing'] = 'Executing...'; // Status of a function call in the chat, used as the alt text of its icon.
$string['functiontype'] = 'Type'; // Column header in the Functions report; its values are "Read" and "Write". Implies "Function type".
$string['functiontype_help'] = 'The type of the web service function and its properties:

* **Read**: retrieves data without modifying anything
* **Write**: creates or modifies data
* **AJAX**: used internally by Moodle for client-server requests, less likely to be suitable as an AI agent function
* **Non-auth**: available to non-authenticated users, also less likely to be suitable as an AI agent function'; // Help text of the "Type" column in the Functions report.
$string['functiontype_read'] = 'Read'; // Value of the "Type" column in the Functions report, and the badge on a function call in the chat that only reads data. Implies "Read function".
$string['functiontype_write'] = 'Write'; // Value of the "Type" column in the Functions report, and the badge on a function call in the chat that changes data. Implies "Write function".
$string['gemini_api_generatecontent'] = 'generateContent (stable)'; // Option of the "API type" setting under the Google Gemini heading. "generateContent" is an API name and stays untranslated.
$string['gemini_api_interactions'] = 'Interactions API (beta)'; // Option of the "API type" setting under the Google Gemini heading. "Interactions API" is an API name and stays untranslated.
$string['gemini_api_type'] = 'API type'; // Name of a setting under the Google Gemini heading on the AI agent settings page.
$string['gemini_api_type_desc'] = 'Which Gemini API to use for multi-turn chats. generateContent is the standard stateless endpoint and rebuilds the full message array each turn. The Interactions API is currently in beta; it stores conversation state on Google\'s side (so only new input is sent each turn) but its schema may change without notice.';
$string['gemini_builtin_code_execution'] = 'Enable Code Execution tool'; // Name of a checkbox setting under the Google Gemini heading. "Code Execution tool" is the name of a Gemini feature.
$string['gemini_builtin_code_execution_desc'] = 'Lets Gemini write and run Python code in a sandbox to solve math or process data. Gemini 3+ models only; silently ignored on Gemini 2.5 and older because those models cannot combine built-in tools with custom function calling.';
$string['gemini_builtin_google_search'] = 'Enable Google Search grounding'; // Name of a checkbox setting under the Google Gemini heading. "Google Search grounding" is the name of a Gemini feature.
$string['gemini_builtin_google_search_desc'] = 'Lets Gemini ground responses on current web search results. Gemini 3+ models only; silently ignored on Gemini 2.5 and older because those models cannot combine built-in tools with custom function calling. Each search query is billed separately.';
$string['gemini_builtin_url_context'] = 'Enable URL Context tool'; // Name of a checkbox setting under the Google Gemini heading. "URL Context tool" is the name of a Gemini feature.
$string['gemini_builtin_url_context_desc'] = 'Lets Gemini read and analyse content from public URLs the user mentions. Gemini 3+ models only; silently ignored on Gemini 2.5 and older because those models cannot combine built-in tools with custom function calling. URLs must be publicly accessible (no localhost, no authentication).';
$string['gemini_heading'] = 'Google Gemini'; // Heading of the Google Gemini section on the AI agent settings page.
$string['hint_splitview'] = 'Want to use this chat side by side with your site? Drag <a href="{$a}">{$a}</a> to a new window, or right-click it and use your browser\'s split view.'; // Tip on the chat welcome screen. {$a} is the chat URL, used both as the link target and as its text.
$string['imagedimensions'] = '{$a->width}×{$a->height} px'; // Width by height in pixels, shown in image previews and file listings.
$string['imagepreviewinfo'] = 'File {$a->size}, dimensions {$a->dimensions}. Preview {$a->preview} ({$a->scale}%).'; // Caption under an image preview in the chat. {$a->preview} is a dimensions string and {$a->scale} the percentage the image is displayed at.
$string['importskill'] = 'Import skills'; // Heading of the drop zone on the skills import screen.
$string['importskill_addmore'] = 'Add more...'; // Button under the list of selected files on the skills import screen.
$string['importskill_button'] = 'Import {$a} skills'; // Submit button of the skills import screen. {$a} is a number of skills, always two or more.
$string['importskill_buttonone'] = 'Import 1 skill'; // Submit button of the skills import screen when exactly one skill is selected.
$string['importskill_choose'] = 'Choose files...'; // File picker button on the skills import screen.
$string['importskill_drophint'] = 'Drag skill files here, or use the button.'; // Hint under the heading of the drop zone on the skills import screen.
$string['importskill_fileone'] = '1 file selected'; // Summary line of the skills import screen when exactly one file is selected.
$string['importskill_files'] = '{$a} files selected'; // Summary line of the skills import screen. {$a} is a number of files, always two or more.
$string['importskill_statusinvalid'] = 'Not a skill file'; // Status badge next to a selected file on the skills import screen.
$string['importskill_statusnew'] = 'New skill'; // Status badge next to a selected file on the skills import screen.
$string['importskill_statusupdate'] = 'Updates {$a}'; // Status badge next to a selected file on the skills import screen. {$a} is the short name of the existing skill the file would overwrite.
$string['importskill_summarynew'] = '{$a} new'; // One of the three parts of the summary line on the skills import screen, joined with " · " in the order new, to update, skipped. Each can open the line, so all three read as an opening; {$a} is a number of skills, e.g. "2 new · 1 to update".
$string['importskill_summaryskipped'] = '{$a} skipped'; // Part of that same summary line; see "importskill_summarynew".
$string['importskill_summaryupdate'] = '{$a} to update'; // Part of that same summary line; see "importskill_summarynew".
$string['importskill_toolarge'] = 'The skill data is too large (maximum {$a}).'; // Error on the skills import screen. {$a} is a human-readable file size.
$string['inlinefilecharlimit'] = 'Inline file content limit'; // Name of a setting on the AI agent settings page.
$string['inlinefilecharlimit_desc'] = 'Maximum amount of a text file that can be embedded directly into the chat when a file is read inline. Longer content is truncated. Inline delivery is used when the model requests it, and as the fallback for AI providers that cannot accept files. Embedded content is re-sent with the chat history on every turn, so a high limit increases token usage.';
$string['invalidparameter'] = 'Invalid parameter detected: {$a}'; // Wrapper for an argument validation error raised by one of the agent's functions. {$a} is an English message aimed at the AI model.
$string['isajax'] = 'AJAX'; // Badge next to a function name, and a column header and filter name, in the Functions report: the function is meant to be called by the browser.
$string['licenseactivate'] = 'Activate license'; // Button on the AI agent settings page and the title of the dialog it opens.
$string['licenseactivate_help'] = 'Enter the license key you received by email from LMSCloud. The license key may be activated on a limited number of sites (usually two). You can deactivate at any moment in order to use it on another site.';
$string['licensedeactivate'] = 'Deactivate'; // Button on the AI agent settings page and the title of its confirmation dialog. Implies "Deactivate license".
$string['licensedeactivate_help'] = 'Deactivate the license key on this site so it can be used on another site.'; // Body of the confirmation dialog of the "Deactivate" button.
$string['licenseerror_deactivate'] = 'Could not deactivate the license. The server may be temporarily unavailable; please try again later.';
$string['licenseerror_deactivate_forced'] = 'This license is set in the server configuration (config.php) and cannot be deactivated from this page.';
$string['licenseerror_invalid'] = 'The license key is invalid or could not be activated.';
$string['licenseerror_limit'] = 'No free slots for this license key. Deactivate another site first, then try again.';
$string['licenseerror_transport'] = 'Could not reach the license server. Please check the connection and try again.';
$string['licensekey'] = 'License key'; // Label of the text field in the license activation dialog.
$string['licenselocked_expired'] = 'This site has not validated its license for over 14 days. Re-check the license to restore access.'; // Body of the license notice: on the settings page it sits beside the Activate, Re-check and Deactivate buttons, and on the configuration and chat pages "licensemanageinsettings" is appended to it for administrators. "Re-check" names the button, so it must match "licenserecheck".
$string['licenselocked_key_rejected'] = 'This license key is no longer valid on this site.';
$string['licenselocked_url_mismatch'] = 'This site\'s web address changed; the license holder must authorise it.';
$string['licensemanageinsettings'] = 'Manage the license in the AI agent settings.'; // Link shown to admins in the license notice on the configuration and chat pages.
$string['licenserecheck'] = 'Re-check'; // Button on the AI agent settings page. Implies "Re-check the license".
$string['licensesetting'] = 'AI agent license'; // Name of the license section on the AI agent settings page.
$string['licensesetting_desc'] = 'Activate, re-check or deactivate the AI agent license for this site.';
$string['licensestatus_materialsmissing'] = 'AI agent license active, but its downloaded materials are missing, so no functions are available. Re-check to fetch them again.'; // Body of the same notice, in the state where a valid license has lost its downloaded materials. "Re-check" names the button, so it must match "licenserecheck".
$string['licensestatus_notactivated'] = 'A license is required to use the AI agent on this site.';
$string['licensestatus_valid'] = 'AI agent license active.';
$string['loginrequired'] = 'Require authenticated user'; // Column header and filter name in the Functions report: the function may only be called by a logged-in user.
$string['logretention'] = 'Keep chat logs for'; // Name of a duration setting on the AI agent settings page; the value follows the label, so it reads "Keep chat logs for 30 days".
$string['logretention_desc'] = 'Messages and token usage records of chats with no activity for this long are permanently deleted from the database. This applies only to chats that were already deleted from the chat history, either by the user or by the setting above. Set to 0 to keep logs forever.';
$string['maxfilesize'] = 'Maximum file size for the LLM'; // Name of a setting on the AI agent settings page.
$string['maxfilesize_desc'] = 'Prevent users from sending files that are too big to the LLM. Large files burn through tokens quickly and inflate costs. Files above this size are rejected with an error before any bytes leave the site.

AI providers will refuse files that exceed their own per-request limits anyway (Anthropic 32 MB, Gemini 50 MB inline, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Maximum function result size'; // Name of a setting on the AI agent settings page.
$string['maxfunctionresultsize_desc'] = 'Maximum amount of data a single function may return to the AI model. Some Moodle functions have no filter and return every user or every course on the site, which floods the model and burns tokens on every following turn. A result above this limit is discarded and the model is told to narrow the request instead. Set to zero for no limit. Reading a file inline is exempt; use "Inline file content limit" for that.';
$string['newchat'] = 'New chat'; // Tooltip and aria-label of the New chat button in the chat header, an item of its menu, and an option on the new chat chooser screen.
$string['newchatchooser_blank_sub'] = 'No context. General assistant.'; // Second line of the "New chat" option on the new chat chooser screen.
$string['newchatchooser_clone'] = 'Same as this chat'; // Option on the new chat chooser screen; starts a chat with the same context and skills as the current one.
$string['newchatchooser_continue'] = 'Continue where you were'; // Divider between the new chat options and the option that reopens the chat the user had before, rendered in small uppercase between two rules, so keep it short or it fills the line.
$string['newchatchooser_desc_default'] = 'Start a new chat on this page, or continue where you were.'; // Subtitle of the new chat chooser screen.
$string['newchatchooser_desc_full'] = 'Start a general chat, or continue where you were.'; // Subtitle of the new chat chooser screen.
$string['newchatchooser_desc_multi'] = 'This page has a few starting points. Pick one, or continue where you were.'; // Subtitle of the new chat chooser screen.
$string['newchatchooser_error'] = 'Could not start a new chat. Please try again.'; // Toast shown when starting a new chat fails.
$string['newchatchooser_none'] = 'There is no page here where you can start a new chat.'; // Toast shown when the page offers no chat to start.
$string['newchatchooser_onthispage'] = 'On this page:'; // Label above the page-specific options on the new chat chooser screen, followed by the page name.
$string['newchatchooser_title'] = 'Start a new chat'; // Title of the new chat chooser screen.
$string['nfilesattached'] = '{$a} files attached'; // Headline of the collapsed file card under a chat message. {$a} is a number of files.
$string['nonauth'] = 'Non-auth'; // Badge next to a function name in the Functions report: the function is available to users who are not logged in.
$string['numfiles'] = '{$a} files'; // Summary line of the attached files modal, where " · " and the total size follow it, and the per-folder count inside it. {$a} is a number of files.
$string['numimages'] = '{$a} images'; // Opens the meta line of the collapsed file card under a chat message, where ", " joins it to the count of other files and " · " and the total size follow. {$a} is a number of images.
$string['numotherfiles'] = '{$a} other'; // Closes that meta line, and is the whole of it when no file is an image, so it reads as an opening too. Implies "other files"; {$a} is their number.
$string['openai_api_chatcompletions'] = 'Chat Completions'; // Option of the "API type" setting under the OpenAI heading. This is an API name and stays untranslated.
$string['openai_api_responses'] = 'Responses API'; // Option of the "API type" setting under the OpenAI heading. This is an API name and stays untranslated.
$string['openai_api_type'] = 'API type'; // Name of a setting under the OpenAI heading on the AI agent settings page.
$string['openai_api_type_desc'] = 'Which OpenAI API to use for multi-turn chats. The Responses API maintains conversation state server-side, so only new input is sent each turn (lower cost, simpler history). Chat Completions rebuilds the full message array on every request (wider provider compatibility).<br><br>The Responses API is supported by: <strong>{$a}</strong>. Other providers will silently fall back to Chat Completions regardless of this setting.'; // The {$a} is a comma-separated list of AI provider plugin names, so the sentence has to introduce a list.
$string['openai_heading'] = 'OpenAI (or compatible)'; // Heading of the OpenAI section on the AI agent settings page.
$string['openlink'] = 'Open link'; // Tooltip of the link on a context pill and on a context event in the chat.
$string['placeholder'] = 'Type a message...'; // Placeholder and aria-label of the message box in the chat composer.
$string['placement_add'] = 'Add placement'; // Button above the table on the Placements tab of the configuration page, and the title of the dialog it opens.
$string['placement_confirmdelete'] = 'Are you sure you want to delete this placement?';
$string['placement_copyof'] = '{$a} (copy)'; // Name given to a duplicated placement. {$a} is the name of the original.
$string['placement_defaultname'] = 'AI agent'; // Name of the placement created on install, and the default name of a new one.
$string['placement_deleted'] = 'Placement deleted.'; // Toast shown after a placement is deleted.
$string['placement_duplicated'] = 'Placement duplicated.'; // Toast shown after a placement is duplicated.
$string['placement_edit'] = 'Edit placement'; // Title of the dialog opened from the edit action of a placement.
$string['placement_initialskills'] = 'Initial skills'; // Field label in the placement form.
$string['placement_initialskills_help'] = 'Skills loaded automatically when the chat starts. Optional; the agent can still load any skill when needed. The skills you set also control this placement: users with access to none of them won\'t see the button or menu item, and if every set skill is later removed or disabled the placement stops appearing.'; // Help text of the "Initial skills" field in the placement form.
$string['placement_intro'] = '<p>Placements let you offer agents tailored to a particular job. Each placement adds the AI agent button to pages whose URL matches one of its masks, and can start the chat with predefined initial skills and welcome text. If initial skills are set, users who have access to none of them won\'t see the button.</p><p>The initial skills only set the starting point of the chat; the agent can still access all enabled functions, not just those of the skills.</p>'; // Intro box at the top of the Placements tab of the configuration page.
$string['placement_location'] = 'Button location'; // Field label in the placement form and a column header in the placements table. Its options are the three placement_location_* strings below plus core's "usermenu", which has no key here.
$string['placement_location_floating'] = 'Floating button'; // Option of the "Button location" field in the placement form.
$string['placement_location_h1'] = 'Page heading (H1)'; // Option of the "Button location" field in the placement form.
$string['placement_location_h2'] = 'Secondary heading (H2)'; // Option of the "Button location" field in the placement form.
$string['placement_menuheading'] = 'Ask the AI agent'; // Heading of the AI agent section in the user menu.
$string['placement_name'] = 'Name'; // Field label in the placement form; the placements table's own name column is core's "name", so the two are read together. Kept rather than reusing the core string because it is an addHelpButton identifier and must resolve alongside placement_name_help.
$string['placement_name_help'] = 'Shown to users: in the user menu, as the button\'s tooltip, and (when several placements match the same page) in the button\'s menu.'; // Help text of the "Name" field in the placement form.
$string['placement_save'] = 'Save placement'; // Submit button of the placement dialog.
$string['placement_saved'] = 'Placement saved.'; // Toast shown after a placement is saved.
$string['placement_skillmissing'] = 'Skill not found'; // Shown in the placements table in place of a skill that no longer exists.
$string['placement_urlmask'] = 'URL masks'; // Field label in the placement form.
$string['placement_urlmask_help'] = 'One pattern per line. Use * as a wildcard, e.g. /course/view.php* or /mod/*/view.php*. Note: on pages where a more specific placement targets the same location, a broad placement that matches /* is hidden, so users see only the more relevant one.'; // Help text of the "URL masks" field in the placement form.
$string['placement_urlmask_invalid'] = 'Each URL mask must start with a slash: "{$a}" does not.'; // Validation error of the "URL masks" field. {$a} is the offending line.
$string['placement_welcome'] = 'Custom welcome text (optional)'; // Field label in the placement form.
$string['placement_welcome_help'] = 'Replaces the standard welcome message on the chat\'s start screen. Leave empty to use the default.'; // Help text of the "Custom welcome text" field in the placement form.
$string['pluginname'] = 'AI agent'; // Name of the plugin, shown in the plugins overview, in the site administration tree, in the chat header and as the title of the full screen chat page.
$string['previouschats'] = 'Previous chats'; // Tooltip and aria-label of the history button in the chat header, an item of its menu, and the heading of the list it opens.
$string['privacy:metadata:aiprovider'] = 'Chats are sent to the AI provider chosen by the site administrator, such as OpenAI, Azure OpenAI, Google Gemini or Anthropic, so that it can generate a reply. The plugin sends each request to the provider itself rather than through the Moodle AI subsystem. Which company receives the data, and how long it is kept there, depends on the provider the site has configured and on that provider\'s own terms.'; // This and the privacy:metadata strings below it describe what the plugin stores and sends. They are shown on the site's privacy policy pages and in the data registry, not in the AI agent interface itself. Their keys mirror the database tables, columns and user preferences they describe, so the keys keep saying "conversation" where the column does.
$string['privacy:metadata:aiprovider:files'] = 'Files the user attaches to a chat, and files the agent reads from the site on the user\'s behalf, uploaded so that the model can read their contents.';
$string['privacy:metadata:aiprovider:messages'] = 'The chat history, resent on every turn: the user\'s prompts, the assistant\'s replies, and the results of the Moodle functions the agent ran, which may include personal data about other users that those functions returned.';
$string['privacy:metadata:aiprovider:userid'] = 'The ID of the user holding the chat, included in the instructions given to the model so that it can act on that user\'s behalf.';
$string['privacy:metadata:core_files'] = 'Files attached to AI agent messages.';
$string['privacy:metadata:feedback'] = 'When feedback is enabled and a user rates a response or reports a failed function call, the rated exchange is sent to the developers of the AI agent plugin so that the agent\'s behaviour can be improved. Nothing is sent unless the user chooses to submit feedback, and the feature can be turned off entirely with the "Allow feedback" setting.';
$string['privacy:metadata:feedback:freetext'] = 'The comment the user optionally writes when submitting feedback, sent as entered.';
$string['privacy:metadata:feedback:snapshot'] = 'A transcript of the rated exchange: the user\'s question, the assistant\'s replies and the names of the functions it called. Email addresses are masked and the arguments and results of those functions are left out, apart from the agent\'s own function searches. The user can edit the text before submitting it.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'The preference not to show the close-confirmation dialog again.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'The size the user gave the overlay chat panel.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'The width the user gave the sidebar chat panel.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'The chat view type (overlay, sidebar or full screen) the user last used.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Chats between a user and the AI agent. Chats the user deletes are archived rather than removed, so that token usage can still be tracked.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'The time the chat was archived (deleted by the user), if applicable.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'The time the chat was created.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'When the last message was stored in the chat.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'The time the chat was last updated.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'The chat name, generated from the first message.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'The user who owns the chat.';
$string['privacy:metadata:tool_aiagent_message'] = 'Individual messages within a chat, including the user prompts and the AI responses.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'The message content.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Who sent the message: the user, the assistant, the system or a function.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'The time the message was created.';
$string['privacy:metadata:tool_aiagent_usage'] = 'Token usage recorded for each AI request, retained for usage tracking.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'The number of output (completion) tokens used.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'The AI model that handled the request.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'The number of input (prompt) tokens used.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'The AI provider that handled the request.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'The time the request was made.';
$string['relevancescore'] = 'Relevance score'; // Column header and filter name in the Functions report.
$string['relevancescore_help'] = 'Relevance score indicates how suitable a web service function is for the AI agent, on a scale of 1 to 10.

**High scores (7-10)** are given to functions that are clearly useful for an AI assistant, such as creating courses, enrolling users, searching for content, or retrieving grades.

**Mid-range scores (4-6)** are typical for destructive or irreversible operations (such as deleting courses or unenrolling users) which are useful but carry higher risk, as well as for niche functions with limited applicability.

**Low scores (1-3)** are given to functions designed for internal browser-to-server communication, functions that don\'t require authentication, deprecated functions, or functions that duplicate better alternatives.

**A score of 0** means the function has not been assessed yet. This is common for third-party plugin functions.

The relevance score was used to set the initial default for whether each function is enabled. Initial scores for core Moodle components were AI-generated and may need manual review.'; // Help text of the "Relevance score" column in the Functions report.
$string['removefilenamed'] = 'Remove file: {$a}'; // Aria-label of the remove button on a file staged in the chat composer. {$a} is the file name.
$string['renamechat'] = 'Rename chat'; // Tooltip and aria-label of the rename button in the chat header, and the fallback message of the toast shown when renaming fails.
$string['renamechat_label'] = 'New name for the chat'; // Aria-label of the text field shown while renaming the current chat.
$string['responses_endpoints'] = 'Custom Responses API endpoints'; // Name of a setting under the OpenAI heading on the AI agent settings page.
$string['responses_endpoints_desc'] = 'Overrides the Responses API endpoint when a hosted or proxied OpenAI or Azure OpenAI deployment serves it at a non-standard address. Leave empty to use the built-in defaults. Has no effect when the API type is Chat Completions.<br><br>
For example, https://your-resource.azure.com/api/responses?api-version=preview. The Files API endpoint is derived by replacing /responses with /files and keeping the query string, so uploads go to https://your-resource.azure.com/api/files?api-version=preview.<br><br>
If you use several provider instances, add one URL per line. Each provider uses the line which host matches its own API endpoint.';
$string['responses_endpoints_invalidline'] = 'Each line must be a full https URL whose path ends in /responses; http is only accepted for localhost. Invalid line: {$a}';
$string['resume_desc'] = 'You have a recent chat. Pick up where you left off, or start a new one.'; // Subtitle of the welcome screen shown when the user has a recent chat to resume.
$string['resume_lastmessage'] = 'Last message {$a} ago'; // Line under the resume button on the welcome screen. {$a} is a formatted duration, e.g. "5 mins".
$string['resume_resume'] = 'Resume last chat'; // Button on the welcome screen, next to the "New chat" one.
$string['resume_title'] = 'Welcome back'; // Title of the welcome screen shown when the user has a recent chat to resume.
$string['sendmessage'] = 'Send'; // Tooltip and aria-label of the send button in the chat composer.
$string['settings'] = 'AI agent settings'; // Title of the AI agent settings page and label of the buttons and links that open it.
$string['showallfiles'] = 'Show all'; // Button on the collapsed file card under a chat message; opens the attached files modal.
$string['skill_add'] = 'Add skill'; // Button above the skills table on the configuration page, and the title of the dialog it opens.
$string['skill_edit'] = 'Edit skill'; // Title of the dialog opened from the edit action of a skill.
$string['skill_save_close'] = 'Save and close'; // Submit button of the skill dialog.
$string['skill_save_preview'] = 'Save and preview'; // Submit button of the skill dialog; saves and then opens the skill preview.
$string['skill_saved'] = 'Skill saved.'; // Toast shown after a skill is saved.
$string['skilladd_aitip'] = 'Instead of filling this in by hand, you can ask the AI agent to build the skill for you: it can find the right functions and draft the instructions. <a href="{$a}">Open the AI agent</a>.'; // Tip at the top of the skill form. {$a} is the chat URL.
$string['skillcapabilities_help'] = 'Worked out from the skill\'s main functions: a user can only use the skill if they hold at least one of these capabilities in some context on the site. The list combines the required capabilities of every main function.'; // Help text under the "Capabilities" heading in the skill preview modal.
$string['skillcapabilities_none'] = 'None. The skill is available to all users.'; // Shown in place of the capability list in the skill preview modal, and as a warning on a skill.
$string['skillconfigured'] = 'Configured'; // Toggle button in the skill preview modal, switching the function list to the configured masks. Paired with "Matched ({$a})"; an empty mask list shows core's "none".
$string['skilldeleted'] = 'Deleted skill "{$a}".'; // Toast shown after a skill is deleted. {$a} is the skill name.
$string['skilldescription'] = 'Description'; // Field label in the skill form. Kept rather than reusing the core string because it is an addHelpButton identifier and must resolve alongside skilldescription_help.
$string['skilldescription_help'] = 'What the skill is for, so the assistant knows when to load it. Describe the task or activity it concerns, not the steps it performs. It appears both in the skills list (to people) and in the system prompt (to the assistant).'; // Help text of the "Description" field in the skill form.
$string['skillexists'] = 'A skill with the shortname "{$a}" already exists.'; // Validation error of the "Short name" field in the skill form. {$a} is the short name.
$string['skillimport_badmasks'] = 'The "mainfunctions" and "otherfunctions" fields must each be a list of mask strings.'; // The two quoted names are keys of the skill file and stay English, unlike the form labels for the same fields.
$string['skillimport_badshortname'] = 'Each skill needs a valid shortname (letters, numbers, hyphen, underscore).';
$string['skillimport_invalidjson'] = 'The uploaded file is not valid skill JSON.';
$string['skillimport_missingfield'] = 'Missing required field: {$a}.'; // Import error. {$a} is a field name from the skill file and is not translated.
$string['skillimported'] = 'Imported skill "{$a}".'; // Toast shown after a skill is imported. {$a} is the skill name.
$string['skillinstructions'] = 'Instructions'; // Field label in the skill form, and a heading in the skill preview modal.
$string['skillinstructions_help'] = 'Guidance loaded into the chat when the skill is loaded. Include only non-obvious guidance: the assistant already sees every loaded function and its description, so do not restate what a function does or remind it to pass obvious parameters. Capture the workflow order, decisions and gotchas the descriptions do not cover, and frame steps that only sometimes apply with "If ...".'; // Help text of the "Instructions" field in the skill form.
$string['skillloadedevent'] = 'Skill loaded · {$a}'; // Event line in the chat transcript when the AI agent loads a skill. {$a} is the skill name.
$string['skillmainfunctions'] = 'Main functions'; // Field label in the skill form, and a heading in the skill preview modal.
$string['skillmainfunctions_help'] = 'A narrow set of masks selecting the skill\'s core create and update functions. The capabilities of these functions decide who the skill is offered to: only users who can access at least one of them. Each mask matches a function name or a component/name glob ("*" is a wildcard; a "~" prefix removes matches). Leave empty to offer the skill to everyone.'; // Help text of the "Main functions" field in the skill form, also shown in the skill preview modal.
$string['skillmatched'] = 'Matched ({$a})'; // Toggle button in the skill preview modal, switching the function list to the functions the masks match. Paired with "Configured"; {$a} is their number.
$string['skillmisconfigured'] = 'Currently unavailable to everyone: none of its main functions resolve to an enabled function.'; // Warning on a skill in the skills table and in the skill preview modal.
$string['skillname'] = 'Name'; // Field label in the skill form; the skills table's own name column is core's "name", so the two are read together. Kept rather than reusing the core string because it is an addHelpButton identifier and must resolve alongside skillname_help.
$string['skillname_help'] = 'A short, human-readable display name for the skill, shown in the skills list.'; // Help text of the "Name" field in the skill form.
$string['skillnomatch'] = 'No enabled function matches these patterns.'; // Shown in place of the function list in the skill preview modal.
$string['skillnotfound'] = 'No skill found: {$a}.'; // Error raised when a skill id cannot be resolved. {$a} is that id.
$string['skillotherfunctions'] = 'Other functions'; // Field label in the skill form, and a heading in the skill preview modal.
$string['skillotherfunctions_help'] = 'Masks for the rest of the functions the skill brings: reads, helpers, or a whole component. Same syntax as the main functions, but these do not affect who the skill is offered to. Leave empty if the skill needs no extra functions.'; // Help text of the "Other functions" field in the skill form, also shown in the skill preview modal.
$string['skills_intro'] = '<p>A skill bundles specialised instructions for a particular job with a list of functions recommended for it. Use skills for common multi-step tasks where the AI agent tends to get confused or can\'t find the right functions, or for tasks specific to your organisation.</p><p>The list of skills and their descriptions is always available to the AI agent, which loads a skill on its own whenever it decides one fits the user\'s request. A skill is only available to users who can access at least one of its main functions. For example, a skill built for teachers won\'t be visible to students.</p>'; // Intro box at the top of the Skills tab of the configuration page.
$string['skillshortname'] = 'Short name'; // Field label in the skill form, and a column header in the skills table. Kept rather than reusing the core string because it is an addHelpButton identifier and must resolve alongside skillshortname_help.
$string['skillshortname_help'] = 'A stable machine name, unique across the site: letters, numbers, hyphen and underscore only. It cannot be changed after the skill is created.'; // Help text of the "Short name" field in the skill form.
$string['skilltoobroad'] = 'Matches {$a} functions, which may be too broad. Consider narrowing the function masks.'; // Warning in the skill preview modal. {$a} is a number of functions.
$string['skillunavailable'] = 'Unavailable'; // Badge at the top of the skill preview modal when no user can access the skill.
$string['skillupdated'] = 'Updated skill "{$a}".'; // Toast shown after an existing skill is overwritten by an import. {$a} is the skill name.
$string['switchview'] = 'Switch view'; // Tooltip and aria-label of the view switcher button in the chat header (overlay, sidebar, full screen).
$string['systeminstruction'] = 'Custom system instructions'; // Name of a setting on the AI agent settings page.
$string['systeminstruction_desc'] = 'Custom instructions sent to the AI model with every request, defining its behaviour, tone, and capabilities. Leave this empty to use the built-in default (shown below). You may use {siteurl} (site URL), {userid} (current user\'s ID) and {date} (today\'s date, ISO format) as placeholders; they are replaced at runtime. Default instructions:{$a->default}

Always appended to the system instructions (default or custom):{$a->context}'; // The placeholders {$a->default} and {$a->context} are the built-in prompts, dropped in as preformatted blocks, so each sentence introducing one has to end at its colon. They are model-facing text and stay English. {siteurl}, {userid} and {date} are literal placeholders an admin types into the field, so translate the description of each but never the placeholder itself.
$string['tab_functions'] = 'Functions'; // Tab of the AI agent configuration page.
$string['tab_placements'] = 'Placements'; // Tab of the AI agent configuration page.
$string['tab_skills'] = 'Skills'; // Tab of the AI agent configuration page.
$string['tagarea_tool_aiagent_functions'] = 'AI agent function tags'; // Name of the tag area, listed in Site administration > Appearance > Manage tags.
$string['task_cleanup_chats'] = 'Delete old AI agent chats'; // Name of a scheduled task, listed in Site administration > Server > Scheduled tasks.
$string['task_purge_provider_data'] = 'Delete AI agent chat data from the AI provider'; // Name of an ad hoc task, shown in the tasks running report.
$string['task_revalidate_license'] = 'Revalidate AI agent license'; // Name of a scheduled task, listed in Site administration > Server > Scheduled tasks.
$string['thinking'] = 'AI agent is thinking...'; // Aria-label of the animated bubble shown while the chat waits for the AI provider.
$string['timecreated'] = 'Time created'; // Column header and filter name in the chats, messages and usage reports, read together with "timemodified" below it. Kept rather than reusing core's "timecreated" because that key is not generic in every language: Spanish renders it "Fecha de matriculación al curso", a course enrolment date, which is meaningless here.
$string['timelastactivity'] = 'Last activity'; // Column header and filter name in the AI agent chats report: when the last message was stored.
$string['timemodified'] = 'Time modified'; // Column header and filter name in the AI agent chats report.
$string['tryagain'] = 'Try again'; // Button under a failed response in the chat.
$string['usage_completiontokens'] = 'Output tokens'; // Column header in the AI agent usage report.
$string['usage_model'] = 'Model'; // Column header and filter name in the AI agent usage report: the AI model that handled the request.
$string['usage_prompttokens'] = 'Input tokens'; // Column header in the AI agent usage report.
$string['usage_provider'] = 'Provider'; // Column header and filter name in the AI agent usage report: the AI provider that handled the request.
$string['usage_totaltokens'] = 'Total tokens'; // Column header in the AI agent usage report.
$string['viewdetails'] = 'View details'; // Row action in the skills table on the configuration page; opens the skill preview modal.
$string['viewtype_fullscreen'] = 'Full screen'; // One of the three chat views, named both as an option of the "Available view types" setting and as an item of the Switch view menu in the chat header, so it has to work as a label and as a choice.
$string['viewtype_overlay'] = 'Overlay'; // One of the three chat views; see "viewtype_fullscreen".
$string['viewtype_sidebar'] = 'Sidebar'; // One of the three chat views; see "viewtype_fullscreen".
$string['viewtypes'] = 'Available view types'; // Name of a checkbox group setting on the AI agent settings page.
$string['viewtypes_alldisabled_warning'] = 'The AI agent is not available to anyone because all view types are disabled in the <a href="{$a}">settings</a>.'; // Warning at the top of the configuration page when every view type is unchecked. {$a} is the URL of the settings page.
$string['viewtypes_desc'] = 'The chat views users can open: a small overlay in the corner of the page, a sidebar next to the page content, and the full screen chat page. Uncheck all to temporarily disable the AI agent for all users.';
$string['viewtypes_unavailable'] = 'The AI agent is currently unavailable.';
$string['welcomedesc'] = 'Ask the AI agent about your site, courses, users or content. It can read and, with your approval, make changes.'; // Text under the greeting on the chat welcome screen; a placement can replace it with its own.
$string['welcometitle'] = 'Welcome, {$a}'; // Greeting on the chat welcome screen. {$a} is the user's first name.

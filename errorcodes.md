# AI Agent error messages

A short guide to the few AI Agent errors that need explaining, with what they mean and what to do
about them. Most errors are self-explanatory and are not listed here.

## Could not retrieve the file

The agent tried to read a file that lives in your Moodle site (a course resource, a forum
attachment, and so on) but Moodle did not return the file.

The usual reasons are that the file no longer exists, you do not have access to it, or the server
returned an error instead of the file.

**What to do:** download the file yourself and attach it to the conversation. Attached files are
read directly, so they are not affected by whatever stopped the internal read.

## Provider "Responses API" error

The AI provider (for example Azure OpenAI or OpenAI) rejected the request. Common wording includes
"badly formatted or corrupted file", a quota or rate limit, or a temporary server error (a 5xx).

If this happened **right after the agent read a file from your site**, the file was most likely
retrieved incorrectly: see [Could not retrieve the file](#could-not-retrieve-the-file) above and
try downloading and attaching it instead.

Otherwise it is a limit or outage on the provider side. Check your provider quota and try again in
a few minutes.

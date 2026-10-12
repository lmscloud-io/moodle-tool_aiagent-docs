# Screenshots

Every screen of the AI Agent plugin, captured in each language the plugin ships and on each Moodle
version it supports. They are here for two reasons: so that a release can be checked without
installing it, and so that a translation can be read in the place it appears rather than as a list
of strings.

## Layout

```
screenshots/<moodle version>/<language>/<screen>.png
```

The version directory is the Moodle branch number: `405` is Moodle 4.5, `500` is 5.0, `501` is 5.1,
`502` is 5.2 and `503` is 5.3. The language directory is the Moodle language code, the same code the
packs in [`lang/`](../lang) use.

Moodle 5.3 added a dark colour mode, so from `503` on there is one more directory, `en__dark`: the
same English tour with the site in dark mode. It is there to show how the plugin looks in that mode,
not to review a translation, so it is in English only.

Filenames are fixed, so the same file name is the same screen in every language and on every
version. That is what makes them worth comparing: open `405/en/chat.png` next to `405/de/chat.png`
to see how a translation sits in its buttons, or next to `503/en/chat.png` to see what the newer
Moodle theme does to the same page. `503/en__dark/chat.png` is the same page again in dark mode.

## What you are looking at

A demo site with test data, driven end to end by an automated tour, so the conversations and course
content in the pictures are fixture material rather than anything real. The whole set is regenerated
from the released code at every release, so it always shows the current version. The version and
release number are visible in `aiagent.png`, which is the plugin's row on the site's plugin
overview page.

Some text stays in English on purpose. The names and descriptions of the bundled skills, and the
descriptions of the functions listed in the Functions report, are data shipped with the plugin
rather than interface strings, and they are read by the AI model as much as by people.

The test site has no AI provider configured, so a few pages carry the plugin's "no AI provider is
available" warning. That is the warning doing its job, not a fault in the release.

## Found something wrong?

Translation fixes are welcome. The language packs live in [`lang/`](../lang), one file per language:

- A label that is mistranslated, ambiguous, or wrong for the widget it sits in: edit the value in
  `lang/<code>/tool_aiagent.php` and open a pull request.
- A label that overflows or is cut off: say which screenshot shows it. The fix is often a shorter
  wording rather than a change to the code.
- Text still in English where the rest of the screen is translated: open an issue with the
  screenshot name. It usually means a string is missing from the pack, or hardcoded in the plugin.
- A new language: open an issue first, so we can tell you whether one is already in progress.

Please do not send pull requests for the images themselves. They are generated, and any edit to them
is overwritten by the next release.

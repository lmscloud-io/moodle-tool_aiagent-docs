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
 * German language pack for AI agent.
 * Last updated: 2026-08-31
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'Zusatzplugin';
$string['aiagent:autoapproveall'] = 'Den Modus „Alle“ für die automatische Bestätigung wählen, bei dem jeder Funktionsaufruf ohne Rückfrage ausgeführt wird';
$string['aiagent:usechat'] = 'Chats mit dem KI-Agenten beginnen (legt fest, wo ein Chat begonnen werden kann; schränkt nicht ein, auf welche Daten der Chat danach zugreifen kann)';
$string['allowfeedback'] = 'Rückmeldungen erlauben';
$string['allowfeedback_desc'] = 'Wenn aktiviert, können Nutzer/innen Antworten des Assistenten bewerten und fehlgeschlagene Funktionsaufrufe melden. Die Rückmeldungen gehen an die Entwickler/innen des KI-Agent-Plugins (nicht an ein LLM), damit diese den Umgang mit Moodle-Funktionen verbessern können. Übertragen wird nur der bewertete Wortwechsel, nicht der gesamte Chat, und der Text kann vor dem Absenden bearbeitet werden. Deaktivieren Sie diese Einstellung auf Websites mit strengen Richtlinien für ausgehenden Datenverkehr.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Tool „web fetch“ aktivieren';
$string['anthropic_web_fetch_desc'] = 'Erlaubt Claude, externe URLs serverseitig über das Anthropic-Tool web_fetch abzurufen. Nützlich, wenn im Chat öffentliche Webseiten erwähnt werden, die das Modell lesen soll. Dateien dieser Moodle-Website werden getrennt davon über die Funktion read_file verarbeitet (die sie bei Bedarf in die Files API von Anthropic hochlädt), das Deaktivieren von web_fetch wirkt sich daher nicht auf den Zugriff auf Kursmaterialien oder Anhänge aus.';
$string['attachedfiles'] = 'Angehängte Dateien';
$string['attachfile'] = 'Datei anhängen';
$string['autoapprove'] = 'Autom. Bestätigung';
$string['autoapprove_all'] = 'Alle (mit Vorsicht verwenden)';
$string['autoapprove_all_desc'] = 'Jede Rückfrage überspringen';
$string['autoapprove_all_disabled'] = 'Sie haben keine Berechtigung, diesen Modus zu verwenden.';
$string['autoapprove_all_short'] = 'Alle';
$string['autoapprove_header'] = 'Funktionsaufrufe automatisch bestätigen';
$string['autoapprove_none'] = 'Keine';
$string['autoapprove_none_desc'] = 'Vor jedem Funktionsaufruf nachfragen';
$string['autoapprove_readonly'] = 'Nur lesen';
$string['autoapprove_readonly_desc'] = 'Lesende Aufrufe bestätigen, bei schreibenden nachfragen';
$string['autoapprove_safe'] = 'Sicher';
$string['autoapprove_safe_desc'] = 'Aktionen bestätigen, die die Website nicht verändern';
$string['autoapprove_safe_examples'] = 'Lesen sowie Größenänderung von Anhängen, Bildgenerierung, Senden von Dateien an das LLM usw.';
$string['backtoconfiguration'] = 'Zurück zur Konfiguration des KI-Agenten';
$string['builtinfunction'] = 'Mitgeliefert';
$string['bulk_disabled'] = '{$a} Funktion(en) deaktiviert';
$string['bulk_disableselected'] = 'Ausgewählte deaktivieren';
$string['bulk_enabled'] = '{$a} Funktion(en) aktiviert';
$string['bulk_enableselected'] = 'Ausgewählte aktivieren';
$string['bulk_withselected'] = 'Mit ausgewählten Funktionen';
$string['capabilities'] = 'Fähigkeiten';
$string['chat_namelink'] = 'Name mit Link';
$string['chatfrozen'] = 'Die Skills dieses Chats sind nicht mehr verfügbar, daher kann er nicht fortgesetzt werden. Beginnen Sie stattdessen einen neuen Chat.';
$string['chathelpcontent'] = '<p>Der KI-Agent kann Inhalte dieser Website in Ihrem Namen lesen und ändern. Die meisten Aktionen werden erst nach Ihrer Bestätigung ausgeführt. Den Modus der automatischen Bestätigung können Sie im Eingabefeld lockern oder verschärfen.</p>
<p>Hängen Sie Dateien per Ziehen und Ablegen, durch Einfügen aus der Zwischenablage oder über das Büroklammer-Symbol an. Geben Sie dann Ihre Anfrage ein und klicken Sie auf <strong>Senden</strong>. Die Eingabetaste sendet die Nachricht, Umschalt und Eingabe fügen eine neue Zeile ein.</p><p>KI kann Fehler machen. Prüfen Sie die Ergebnisse.</p>';
$string['chatnopermission'] = 'Dieser Chat wurde in einem Bereich der Website begonnen, in dem Sie keinen Zugriff mehr auf den KI-Agenten haben, daher kann er nicht fortgesetzt werden.';
$string['chatnostartpermission'] = 'Sie haben keine Berechtigung, hier einen Chat zu beginnen. Öffnen Sie den KI-Agenten auf einer Seite, auf der er angeboten wird.';
$string['chatretention'] = 'Aufbewahrungsdauer für Chats';
$string['chatretention_desc'] = 'Chats ohne Aktivität über diesen Zeitraum werden aus dem Chatverlauf der Nutzer/innen entfernt, ihre angehängten Dateien werden von dieser Website gelöscht und die Löschung der beim KI-Provider gespeicherten Chatdaten (gespeicherte Antworten und hochgeladene Dateien) wird angefordert. Die Löschung aufseiten des Providers erfolgt nach bestem Bemühen und ist nicht garantiert; richten Sie zusätzlich eine passende Aufbewahrungsrichtlinie in Ihrem Konto beim Provider ein. Nachrichten und Nutzungsdaten bleiben für Berichte erhalten, bis die unten stehende Aufbewahrungsdauer für Chatprotokolle abgelaufen ist. Der Wert 0 bewahrt Chats unbegrenzt auf.';
$string['closeconfirm_body'] = 'Das Schließen des Fensters löscht den Chat nicht. Sie können ihn jederzeit über das Menü „Frühere Chats“ wieder öffnen. Chats werden nach {$a} Tagen automatisch gelöscht.';
$string['closeconfirm_body_noretention'] = 'Das Schließen des Fensters löscht den Chat nicht. Sie können ihn jederzeit über das Menü „Frühere Chats“ wieder öffnen.';
$string['closeconfirm_close'] = 'Chat schließen';
$string['closeconfirm_dontshowagain'] = 'Nicht mehr anzeigen';
$string['closeconfirm_title'] = 'Diesen Chat schließen?';
$string['component'] = 'Komponente';
$string['component_filesandimages'] = 'Datei- und Bildbearbeitung';
$string['configuration'] = 'Konfiguration des KI-Agenten';
$string['confirmdeleteskill'] = 'Möchten Sie diesen Skill wirklich löschen?';
$string['contextevent_opened'] = 'Geöffnet aus {$a}';
$string['contextevent_page'] = 'Seite · {$a}';
$string['copyresponse'] = 'Antwort kopieren';
$string['copyurl'] = 'URL kopieren';
$string['datasource_chats'] = 'Chats des KI-Agenten';
$string['datasource_usage'] = 'Nutzung des KI-Agenten';
$string['deletechat_menu'] = 'Chat löschen';
$string['deletechat_named'] = 'Chat löschen: {$a}';
$string['disablefunction'] = 'Diese Funktion deaktivieren';
$string['dragtoresize'] = 'Zum Ändern der Größe ziehen';
$string['dynamicdiscovery'] = 'Dynamische Funktionssuche';
$string['dynamicdiscovery_automatic'] = 'Automatisch';
$string['dynamicdiscovery_desc'] = 'Optimiert den Tokenverbrauch, indem Funktionen nur bei Bedarf ermittelt werden. Empfohlen, wenn viele Webservice-Funktionen aktiviert sind. Im automatischen Modus wird die Funktionssuche eingeschaltet, sobald mehr als {$a} Funktionen verfügbar sind. Manche KI-Provider begrenzen die Anzahl der Funktionen (OpenAI zum Beispiel auf 128).';
$string['dynamicdiscovery_off'] = 'Aus';
$string['dynamicdiscovery_on'] = 'Ein';
$string['enabled'] = 'Aktiviert';
$string['enablefunction'] = 'Diese Funktion aktivieren';
$string['entity_aiagentfunction'] = 'Funktion des KI-Agenten';
$string['entity_chat'] = 'Chat';
$string['entity_externalfunction'] = 'Webservice-Funktion';
$string['entity_message'] = 'Nachricht';
$string['entity_placement'] = 'Platzierung';
$string['entity_skill'] = 'Skill';
$string['entity_usage'] = 'Tokenverbrauch';
$string['error_interrupted_function'] = 'Ein Funktionsaufruf wurde vor seinem Ende unterbrochen. Möglicherweise wurden Änderungen teilweise übernommen; prüfen Sie den Stand, bevor Sie es erneut versuchen.';
$string['error_interrupted_llm'] = 'Die Kommunikation mit dem KI-Provider wurde unterbrochen. Klicken Sie auf „Erneut versuchen“, um die Anfrage zu wiederholen.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'Die Nachricht darf nicht leer sein.';
$string['errorfullscreendisabled'] = 'Die Chatansicht im Vollbild ist auf dieser Website nicht aktiviert.';
$string['errorinvalidchat'] = 'Chat nicht gefunden oder Zugriff verweigert.';
$string['errorinvalidname'] = 'Der Name darf nicht leer sein.';
$string['errormissingfeedbackparams'] = 'Nachricht oder Art der Rückmeldung fehlt.';
$string['errornopendingfunction'] = 'Es gibt keine offenen Funktionsaufrufe.';
$string['errornoprovider'] = 'Es ist kein KI-Provider verfügbar. Der KI-Agent verwendet die Einstellungen der Aktion „Text generieren“; stellen Sie daher sicher, dass diese in der Website-Administration für mindestens einen KI-Provider konfiguriert und aktiviert ist.';
$string['errornoprovider_link'] = 'KI-Provider konfigurieren.';
$string['errornoretryresponse'] = 'Es gibt keine fehlgeschlagene Antwort, die wiederholt werden könnte.';
$string['errorpagenotavailable'] = 'Die aktuelle Seite ist in dieser Ansicht nicht verfügbar.';
$string['errorpendingfunctions'] = 'Bitte bestätigen oder verweigern Sie zuerst die offenen Funktionsaufrufe.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} hat den Prompt blockiert: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} hat die Antwort blockiert: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} hat keinen Inhalt zurückgegeben.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} hat keinen Inhalt zurückgegeben (Abschlussgrund: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'Der Endpunkt für die Kommunikation mit dem KI-Provider ist ungültig oder nicht erreichbar.';
$string['errorresponses_endpoint_invalid_config'] = 'Das Plugin hat versucht, {$a->endpoint} als Endpunkt der OpenAI Responses API zu verwenden, aber die Anfrage ist fehlgeschlagen. Öffnen Sie die {$a->settingslink} und prüfen Sie den Endpunkt der Responses API, oder stellen Sie die API-Art auf Chat Completions um.';
$string['errorresponses_endpoint_reply'] = 'Antwort des Providers: {$a}';
$string['errorresponses_provider_switch'] = 'Dieser Chat kann unter der Responses API von OpenAI nicht fortgesetzt werden, weil er mit einem anderen KI-Provider begonnen wurde. Beginnen Sie einen neuen Chat oder wechseln Sie zum ursprünglichen Provider (oder zu OpenAI Chat Completions) zurück, um diesen fortzusetzen.';
$string['errorrootnotfound'] = 'Die Ausgangsnachricht dieses Chats wurde nicht gefunden.';
$string['exportskill'] = 'Export';
$string['feedback_modal_freetextlabel'] = 'Noch etwas? (optional)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Was ist schiefgelaufen? So genau, wie Sie möchten.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Was hat gut funktioniert? (optional)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Was war an diesem Funktionsaufruf falsch?';
$string['feedback_modal_intro_negative'] = 'Danke für den Hinweis. Ihre Rückmeldung geht an die Entwickler/innen des KI-Agent-Plugins (nicht an den KI-Provider), damit diese den Umgang mit Moodle-Funktionen verbessern können.';
$string['feedback_modal_intro_positive'] = 'Danke! Ihre Rückmeldung geht an die Entwickler/innen des KI-Agent-Plugins (nicht an den KI-Provider), damit diese beibehalten können, was funktioniert, und verbessern, was nicht funktioniert.';
$string['feedback_modal_intro_toolerror'] = 'Melden Sie diesen Funktionsaufruf als problematisch. Ihre Rückmeldung geht an die Entwickler/innen des KI-Agent-Plugins (nicht an den KI-Provider), damit diese den zugrunde liegenden Webservice reparieren oder seine Nutzung durch die KI verbessern können.';
$string['feedback_modal_send'] = 'Rückmeldung senden';
$string['feedback_modal_sending'] = 'Wird gesendet...';
$string['feedback_modal_snapshotlabel'] = 'Was gesendet wird (bearbeitbar)';
$string['feedback_modal_title_positive'] = 'Sagen Sie uns, was funktioniert hat';
$string['feedbackcat_negative_misunderstood'] = 'Hat meine Frage falsch verstanden';
$string['feedbackcat_negative_notfollowed'] = 'Hat die Anweisungen nicht befolgt';
$string['feedbackcat_negative_other'] = 'Etwas anderes';
$string['feedbackcat_negative_wronginfo'] = 'Falsche oder erfundene Informationen';
$string['feedbackcat_negative_wrongtoolused'] = 'Hat die falsche Funktion verwendet';
$string['feedbackcat_positive_accurate'] = 'Zutreffend';
$string['feedbackcat_positive_goodexplanation'] = 'Verständliche Erklärung';
$string['feedbackcat_positive_helpful'] = 'Hilfreich';
$string['feedbackcat_positive_other'] = 'Etwas anderes';
$string['feedbackcat_positive_welltimed'] = 'Passende Funktion für die Aufgabe';
$string['feedbackcat_toolerror_misleadingresult'] = 'Ergebnis war irreführend';
$string['feedbackcat_toolerror_other'] = 'Etwas anderes';
$string['feedbackcat_toolerror_toolerror'] = 'Funktion hat einen Fehler zurückgegeben';
$string['feedbackcat_toolerror_wrongargs'] = 'Falsche Argumente';
$string['feedbackcat_toolerror_wrongtool'] = 'Falsche Funktion für die Aufgabe';
$string['feedbackdisabled'] = 'Das Sammeln von Rückmeldungen wurde von der Website-Administration deaktiviert.';
$string['feedbackfailed'] = 'Die Rückmeldung konnte nicht gesendet werden. Bitte versuchen Sie es später erneut.';
$string['feedbackflagfunctioncall'] = 'Diesen Funktionsaufruf melden';
$string['feedbacksubmitted'] = 'Rückmeldung gesendet';
$string['feedbackthanks'] = 'Danke für Ihre Rückmeldung!';
$string['feedbackthumbdown'] = 'Problem mit dieser Antwort melden';
$string['feedbackthumbup'] = 'Diese Antwort war hilfreich';
$string['feedbackvalidation_categoryrequired'] = 'Bitte wählen Sie mindestens eine Kategorie aus.';
$string['functionapprovecount'] = '{$a} Aufrufe bestätigen';
$string['functioncall_actions'] = 'Funktionsaufruf bestätigen oder verweigern';
$string['functioncall_chip_action'] = 'Modus der automatischen Bestätigung ändern';
$string['functioncalldetails'] = 'Details zum Funktionsaufruf';
$string['functiondeny'] = 'Verweigern';
$string['functiondenyall'] = 'Alle verweigern';
$string['functionloopguardbody'] = 'Diese Funktion wurde bereits {$a} Mal mit derselben Eingabe ausgeführt. Wegen einer möglichen Schleife ist die automatische Bestätigung angehalten; bestätigen Sie, um fortzufahren.';
$string['functionloopguardheading'] = 'Wiederholter Aufruf.';
$string['functionname'] = 'Funktionsname';
$string['functionparameters'] = 'Parameter';
$string['functionresult'] = 'Ergebnis';
$string['functionresultdiscarded'] = 'Das Ergebnis war zu groß ({$a}) und wurde verworfen. Schränken Sie die Anfrage ein: filtern Sie sie, fordern Sie weniger Felder an oder verwenden Sie eine gezieltere Funktion. Derselbe Aufruf führt erneut zum selben Fehler.';
$string['functions_intro'] = '<p><b>Nicht jede Webservice-Funktion eignet sich für den KI-Agenten.</b> Manche wurden für die Client-Server-Kommunikation entwickelt (gekennzeichnet mit AJAX) oder für nicht angemeldete Nutzer/innen (Ohne Login), und für manche gibt es bessere Alternativen. Einige AJAX-Funktionen arbeiten mit dem KI-Agenten gut zusammen, die meisten jedoch nicht. Das KI-Agent-Plugin vergibt für Funktionen aus dem Kern und aus Standardplugins einen Relevanzwert (1-10) und aktiviert alle mit einem Wert ab 5. Funktionen aus Zusatzplugins werden nicht bewertet; stattdessen werden alle ihre Nicht-AJAX-Funktionen automatisch aktiviert. Auf dieser Seite können Sie die verfügbaren Funktionen prüfen und einzeln aktivieren oder deaktivieren.</p><p>Wenn eine Funktion eine oder mehrere Fähigkeiten voraussetzt, steht sie Nutzer/innen nicht zur Verfügung, die keine davon in irgendeinem Kontext der Website besitzen. Für den Kern und für Standardplugins setzt das KI-Agent-Plugin diese Fähigkeiten korrekt. Bei Zusatzplugins stammen sie aus der Funktionsdefinition, und da Moodle diese Prüfung selbst nicht erzwingt, können sie falsch sein.</p>';
$string['functions_report'] = 'Funktionen des KI-Agenten';
$string['functionstatus_denied'] = 'Verweigert';
$string['functionstatus_failed'] = 'Fehlgeschlagen';
$string['functionstatus_pending'] = 'Wartet auf Bestätigung';
$string['functionstatus_processing'] = 'Wird ausgeführt...';
$string['functiontype'] = 'Art';
$string['functiontype_help'] = 'Die Art der Webservice-Funktion und ihre Eigenschaften:

* **Lesen**: ruft Daten ab, ohne etwas zu verändern
* **Schreiben**: erstellt oder verändert Daten
* **AJAX**: wird von Moodle intern für Anfragen zwischen Client und Server verwendet und eignet sich seltener als Funktion für den KI-Agenten
* **Ohne Login**: steht nicht angemeldeten Nutzer/innen zur Verfügung und eignet sich ebenfalls seltener als Funktion für den KI-Agenten';
$string['functiontype_read'] = 'Lesen';
$string['functiontype_write'] = 'Schreiben';
$string['gemini_api_generatecontent'] = 'generateContent (stabil)';
$string['gemini_api_interactions'] = 'Interactions API (Beta)';
$string['gemini_api_type'] = 'API-Art';
$string['gemini_api_type_desc'] = 'Welche Gemini-API für Chats mit mehreren Runden verwendet wird. generateContent ist der übliche zustandslose Endpunkt und baut die vollständige Nachrichtenliste in jeder Runde neu auf. Die Interactions API befindet sich derzeit in der Beta-Phase; sie speichert den Zustand des Chats aufseiten von Google (es wird also nur die neue Eingabe je Runde gesendet), ihr Schema kann sich jedoch ohne Ankündigung ändern.';
$string['gemini_builtin_code_execution'] = 'Tool „Code Execution“ aktivieren';
$string['gemini_builtin_code_execution_desc'] = 'Erlaubt Gemini, Python-Code in einer Sandbox zu schreiben und auszuführen, um Rechenaufgaben zu lösen oder Daten zu verarbeiten. Nur für Modelle ab Gemini 3; bei Gemini 2.5 und älter wird die Einstellung stillschweigend ignoriert, weil diese Modelle eingebaute Tools nicht mit eigenen Funktionsaufrufen kombinieren können.';
$string['gemini_builtin_google_search'] = 'Google-Suche als Grundlage aktivieren';
$string['gemini_builtin_google_search_desc'] = 'Erlaubt Gemini, Antworten auf aktuelle Ergebnisse der Websuche zu stützen. Nur für Modelle ab Gemini 3; bei Gemini 2.5 und älter wird die Einstellung stillschweigend ignoriert, weil diese Modelle eingebaute Tools nicht mit eigenen Funktionsaufrufen kombinieren können. Jede Suchanfrage wird separat abgerechnet.';
$string['gemini_builtin_url_context'] = 'Tool „URL Context“ aktivieren';
$string['gemini_builtin_url_context_desc'] = 'Erlaubt Gemini, Inhalte öffentlicher URLs zu lesen und auszuwerten, die Nutzer/innen erwähnen. Nur für Modelle ab Gemini 3; bei Gemini 2.5 und älter wird die Einstellung stillschweigend ignoriert, weil diese Modelle eingebaute Tools nicht mit eigenen Funktionsaufrufen kombinieren können. Die URLs müssen öffentlich erreichbar sein (kein localhost, keine Anmeldung).';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = 'Möchten Sie diesen Chat neben Ihrer Website nutzen? Ziehen Sie <a href="{$a}">{$a}</a> in ein neues Fenster oder öffnen Sie ihn per Rechtsklick in der geteilten Ansicht Ihres Browsers.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Datei {$a->size}, Abmessungen {$a->dimensions}. Vorschau {$a->preview} ({$a->scale} %).';
$string['importskill'] = 'Skills importieren';
$string['importskill_addmore'] = 'Weitere hinzufügen...';
$string['importskill_button'] = '{$a} Skills importieren';
$string['importskill_buttonone'] = '1 Skill importieren';
$string['importskill_choose'] = 'Dateien auswählen...';
$string['importskill_drophint'] = 'Ziehen Sie Skill-Dateien hierher oder nutzen Sie den Button.';
$string['importskill_fileone'] = '1 Datei ausgewählt';
$string['importskill_files'] = '{$a} Dateien ausgewählt';
$string['importskill_statusinvalid'] = 'Keine Skill-Datei';
$string['importskill_statusnew'] = 'Neuer Skill';
$string['importskill_statusupdate'] = 'Aktualisiert {$a}';
$string['importskill_summarynew'] = '{$a} neu';
$string['importskill_summaryskipped'] = '{$a} übersprungen';
$string['importskill_summaryupdate'] = '{$a} zu aktualisieren';
$string['importskill_toolarge'] = 'Die Skill-Daten sind zu groß (maximal {$a}).';
$string['inlinefilecharlimit'] = 'Begrenzung für eingebettete Dateiinhalte';
$string['inlinefilecharlimit_desc'] = 'Maximale Menge einer Textdatei, die direkt in den Chat eingebettet werden kann, wenn eine Datei inline gelesen wird. Längere Inhalte werden gekürzt. Das Einbetten wird verwendet, wenn das Modell es anfordert, und als Rückfallebene für KI-Provider, die keine Dateien annehmen können. Eingebettete Inhalte werden mit dem Chatverlauf in jeder Runde erneut gesendet, ein hoher Wert erhöht daher den Tokenverbrauch.';
$string['invalidparameter'] = 'Ungültiger Parameter erkannt: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Lizenz aktivieren';
$string['licenseactivate_help'] = 'Geben Sie den Lizenzschlüssel ein, den Sie per E-Mail von LMSCloud erhalten haben. Der Lizenzschlüssel kann auf einer begrenzten Anzahl von Websites aktiviert werden (in der Regel zwei). Sie können ihn jederzeit deaktivieren, um ihn auf einer anderen Website zu verwenden.';
$string['licensedeactivate'] = 'Deaktivieren';
$string['licensedeactivate_help'] = 'Den Lizenzschlüssel auf dieser Website deaktivieren, damit er auf einer anderen Website verwendet werden kann.';
$string['licenseerror_deactivate'] = 'Die Lizenz konnte nicht deaktiviert werden. Der Server ist möglicherweise vorübergehend nicht erreichbar; bitte versuchen Sie es später erneut.';
$string['licenseerror_deactivate_forced'] = 'Diese Lizenz ist in der Serverkonfiguration (config.php) festgelegt und kann auf dieser Seite nicht deaktiviert werden.';
$string['licenseerror_invalid'] = 'Der Lizenzschlüssel ist ungültig oder konnte nicht aktiviert werden.';
$string['licenseerror_limit'] = 'Für diesen Lizenzschlüssel sind keine Plätze frei. Deaktivieren Sie zuerst eine andere Website und versuchen Sie es dann erneut.';
$string['licenseerror_transport'] = 'Der Lizenzserver ist nicht erreichbar. Bitte prüfen Sie die Verbindung und versuchen Sie es erneut.';
$string['licensekey'] = 'Lizenzschlüssel';
$string['licenselocked_expired'] = 'Diese Website hat ihre Lizenz seit über 14 Tagen nicht bestätigt. Prüfen Sie die Lizenz erneut, um den Zugang wiederherzustellen.';
$string['licenselocked_key_rejected'] = 'Dieser Lizenzschlüssel ist auf dieser Website nicht mehr gültig.';
$string['licenselocked_url_mismatch'] = 'Die Webadresse dieser Website hat sich geändert; der Lizenzinhaber muss die neue Adresse freigeben.';
$string['licensemanageinsettings'] = 'Die Lizenz wird in den Einstellungen des KI-Agenten verwaltet.';
$string['licenserecheck'] = 'Erneut prüfen';
$string['licensesetting'] = 'Lizenz des KI-Agenten';
$string['licensesetting_desc'] = 'Die Lizenz des KI-Agenten für diese Website aktivieren, erneut prüfen oder deaktivieren.';
$string['licensestatus_materialsmissing'] = 'Die Lizenz des KI-Agenten ist aktiv, aber die heruntergeladenen Materialien fehlen, daher stehen keine Funktionen zur Verfügung. Prüfen Sie erneut, um sie noch einmal zu laden.';
$string['licensestatus_notactivated'] = 'Für die Nutzung des KI-Agenten auf dieser Website ist eine Lizenz erforderlich.';
$string['licensestatus_valid'] = 'Die Lizenz des KI-Agenten ist aktiv.';
$string['loginrequired'] = 'Anmeldung erforderlich';
$string['logretention'] = 'Aufbewahrungsdauer für Chatprotokolle';
$string['logretention_desc'] = 'Nachrichten und Datensätze zum Tokenverbrauch von Chats ohne Aktivität über diesen Zeitraum werden endgültig aus der Datenbank gelöscht. Das betrifft nur Chats, die bereits aus dem Chatverlauf entfernt wurden, entweder durch die Nutzer/innen oder durch die Einstellung darüber. Der Wert 0 bewahrt Protokolle unbegrenzt auf.';
$string['maxfilesize'] = 'Maximale Dateigröße für das LLM';
$string['maxfilesize_desc'] = 'Verhindert, dass Nutzer/innen zu große Dateien an das LLM senden. Große Dateien verbrauchen schnell viele Token und treiben die Kosten in die Höhe. Dateien über dieser Größe werden mit einem Fehler abgewiesen, bevor Daten die Website verlassen.

KI-Provider weisen Dateien ohnehin ab, die ihre eigenen Grenzen je Anfrage überschreiten (Anthropic 32 MB, Gemini 50 MB inline, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Maximale Größe des Funktionsergebnisses';
$string['maxfunctionresultsize_desc'] = 'Maximale Datenmenge, die eine einzelne Funktion an das KI-Modell zurückgeben darf. Manche Moodle-Funktionen haben keinen Filter und geben alle Nutzer/innen oder alle Kurse der Website zurück, was das Modell überschwemmt und in jeder weiteren Runde Token verbraucht. Ein Ergebnis über dieser Grenze wird verworfen und das Modell wird aufgefordert, die Anfrage einzuschränken. Null bedeutet keine Begrenzung. Das Inline-Lesen einer Datei ist ausgenommen, dafür gilt „Begrenzung für eingebettete Dateiinhalte“.';
$string['newchat'] = 'Neuer Chat';
$string['newchatchooser_blank_sub'] = 'Ohne Kontext. Allgemeiner Assistent.';
$string['newchatchooser_clone'] = 'Wie dieser Chat';
$string['newchatchooser_continue'] = 'Dort weitermachen, wo Sie waren';
$string['newchatchooser_desc_default'] = 'Beginnen Sie einen neuen Chat auf dieser Seite oder machen Sie dort weiter, wo Sie waren.';
$string['newchatchooser_desc_full'] = 'Beginnen Sie einen allgemeinen Chat oder machen Sie dort weiter, wo Sie waren.';
$string['newchatchooser_desc_multi'] = 'Diese Seite bietet mehrere Ausgangspunkte. Wählen Sie einen aus oder machen Sie dort weiter, wo Sie waren.';
$string['newchatchooser_error'] = 'Der neue Chat konnte nicht begonnen werden. Bitte versuchen Sie es erneut.';
$string['newchatchooser_none'] = 'Hier gibt es keine Seite, auf der Sie einen neuen Chat beginnen können.';
$string['newchatchooser_onthispage'] = 'Auf dieser Seite:';
$string['newchatchooser_title'] = 'Neuen Chat beginnen';
$string['nfilesattached'] = '{$a} Dateien angehängt';
$string['nonauth'] = 'Ohne Login';
$string['numfiles'] = '{$a} Dateien';
$string['numimages'] = '{$a} Bilder';
$string['numotherfiles'] = '{$a} weitere';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'API-Art';
$string['openai_api_type_desc'] = 'Welche OpenAI-API für Chats mit mehreren Runden verwendet wird. Die Responses API hält den Zustand des Chats serverseitig, es wird also nur die neue Eingabe je Runde gesendet (geringere Kosten, einfacherer Verlauf). Chat Completions baut die vollständige Nachrichtenliste bei jeder Anfrage neu auf (breitere Verträglichkeit mit Providern).<br><br>Die Responses API wird unterstützt von: <strong>{$a}</strong>. Andere Provider weichen unabhängig von dieser Einstellung stillschweigend auf Chat Completions aus.';
$string['openai_heading'] = 'OpenAI (oder kompatibel)';
$string['openlink'] = 'Link öffnen';
$string['placeholder'] = 'Nachricht eingeben...';
$string['placement_add'] = 'Platzierung hinzufügen';
$string['placement_confirmdelete'] = 'Möchten Sie diese Platzierung wirklich löschen?';
$string['placement_copyof'] = '{$a} (Kopie)';
$string['placement_defaultname'] = 'KI-Agent';
$string['placement_deleted'] = 'Platzierung gelöscht.';
$string['placement_duplicated'] = 'Platzierung dupliziert.';
$string['placement_edit'] = 'Platzierung bearbeiten';
$string['placement_initialskills'] = 'Anfängliche Skills';
$string['placement_initialskills_help'] = 'Skills, die beim Beginn des Chats automatisch geladen werden. Optional; der Agent kann jeden Skill weiterhin bei Bedarf laden. Die gesetzten Skills steuern zugleich diese Platzierung: Nutzer/innen ohne Zugriff auf mindestens einen davon sehen weder den Button noch den Menüpunkt, und wenn später alle gesetzten Skills entfernt oder deaktiviert werden, erscheint die Platzierung nicht mehr.';
$string['placement_intro'] = '<p>Mit Platzierungen bieten Sie Agenten an, die auf eine bestimmte Aufgabe zugeschnitten sind. Jede Platzierung fügt den Button des KI-Agenten auf Seiten hinzu, deren URL zu einer ihrer Masken passt, und kann den Chat mit vorgegebenen anfänglichen Skills und einem Willkommenstext beginnen. Sind anfängliche Skills gesetzt, sehen Nutzer/innen ohne Zugriff auf mindestens einen davon den Button nicht.</p><p>Die anfänglichen Skills legen nur den Ausgangspunkt des Chats fest; der Agent kann weiterhin auf alle aktivierten Funktionen zugreifen, nicht nur auf die der Skills.</p>';
$string['placement_location'] = 'Position des Buttons';
$string['placement_location_floating'] = 'Schwebender Button';
$string['placement_location_h1'] = 'Seitenüberschrift (H1)';
$string['placement_location_h2'] = 'Zweite Überschrift (H2)';
$string['placement_menuheading'] = 'KI-Agenten fragen';
$string['placement_name'] = 'Name';
$string['placement_name_help'] = 'Wird Nutzer/innen angezeigt: im Nutzermenü, als Tooltip des Buttons und (wenn mehrere Platzierungen zur selben Seite passen) im Menü des Buttons.';
$string['placement_save'] = 'Platzierung speichern';
$string['placement_saved'] = 'Platzierung gespeichert.';
$string['placement_skillmissing'] = 'Skill nicht gefunden';
$string['placement_urlmask'] = 'URL-Masken';
$string['placement_urlmask_help'] = 'Ein Muster pro Zeile. Verwenden Sie * als Platzhalter, zum Beispiel /course/view.php* oder /mod/*/view.php*. Hinweis: Auf Seiten, auf denen eine genauere Platzierung dieselbe Position belegt, wird eine breite Platzierung mit /* ausgeblendet, damit Nutzer/innen nur die passendere sehen.';
$string['placement_urlmask_invalid'] = 'Jede URL-Maske muss mit einem Schrägstrich beginnen: „{$a}“ tut das nicht.';
$string['placement_welcome'] = 'Eigener Willkommenstext (optional)';
$string['placement_welcome_help'] = 'Ersetzt die übliche Willkommensnachricht auf der Startseite des Chats. Leer lassen, um den Standardtext zu verwenden.';
$string['pluginname'] = 'KI-Agent';
$string['previouschats'] = 'Frühere Chats';
$string['privacy:metadata:aiprovider'] = 'Chats werden an den von der Website-Administration gewählten KI-Provider gesendet, etwa OpenAI, Azure OpenAI, Google Gemini oder Anthropic, damit dieser eine Antwort erzeugen kann. Das Plugin sendet jede Anfrage direkt an den Provider und nicht über das KI-Subsystem von Moodle. Welches Unternehmen die Daten erhält und wie lange sie dort aufbewahrt werden, hängt vom eingerichteten Provider und dessen eigenen Bedingungen ab.';
$string['privacy:metadata:aiprovider:files'] = 'Dateien, die Nutzer/innen an einen Chat anhängen, sowie Dateien, die der Agent in ihrem Namen von der Website liest, hochgeladen damit das Modell ihren Inhalt lesen kann.';
$string['privacy:metadata:aiprovider:messages'] = 'Der Chatverlauf, in jeder Runde erneut gesendet: die Anfragen der Nutzer/innen, die Antworten des Assistenten und die Ergebnisse der vom Agenten ausgeführten Moodle-Funktionen, die personenbezogene Daten anderer Personen enthalten können.';
$string['privacy:metadata:aiprovider:userid'] = 'Die ID der Person, die den Chat führt, enthalten in den Anweisungen an das Modell, damit es in ihrem Namen handeln kann.';
$string['privacy:metadata:core_files'] = 'Dateien, die an Nachrichten des KI-Agenten angehängt sind.';
$string['privacy:metadata:feedback'] = 'Wenn Rückmeldungen aktiviert sind und eine Person eine Antwort bewertet oder einen fehlgeschlagenen Funktionsaufruf meldet, wird der bewertete Wortwechsel an die Entwickler/innen des KI-Agent-Plugins gesendet, damit das Verhalten des Agenten verbessert werden kann. Es wird nichts gesendet, solange die Person keine Rückmeldung abschickt, und die Funktion lässt sich mit der Einstellung „Rückmeldungen erlauben“ vollständig abschalten.';
$string['privacy:metadata:feedback:freetext'] = 'Der Kommentar, den die Person beim Absenden der Rückmeldung freiwillig schreibt, gesendet wie eingegeben.';
$string['privacy:metadata:feedback:snapshot'] = 'Eine Mitschrift des bewerteten Wortwechsels: die Frage der Person, die Antworten des Assistenten und die Namen der aufgerufenen Funktionen. E-Mail-Adressen werden maskiert, und die Argumente und Ergebnisse dieser Funktionen bleiben weg, abgesehen von den Funktionssuchen des Agenten selbst. Der Text kann vor dem Absenden bearbeitet werden.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'Die Einstellung, den Bestätigungsdialog beim Schließen nicht mehr anzuzeigen.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'Die Größe, die die Person dem Chatfenster als Overlay gegeben hat.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'Die Breite, die die Person dem Chatfenster als Seitenleiste gegeben hat.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'Die zuletzt verwendete Chatansicht (Overlay, Seitenleiste oder Vollbild).';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Chats zwischen einer Person und dem KI-Agenten. Von Nutzer/innen gelöschte Chats werden archiviert statt entfernt, damit der Tokenverbrauch weiterhin nachvollziehbar bleibt.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'Der Zeitpunkt, zu dem der Chat archiviert (von der Person gelöscht) wurde, sofern zutreffend.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'Der Zeitpunkt, zu dem der Chat erstellt wurde.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Wann die letzte Nachricht im Chat gespeichert wurde.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'Der Zeitpunkt, zu dem der Chat zuletzt geändert wurde.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'Der Name des Chats, erzeugt aus der ersten Nachricht.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'Die Person, der der Chat gehört.';
$string['privacy:metadata:tool_aiagent_message'] = 'Einzelne Nachrichten innerhalb eines Chats, einschließlich der Anfragen der Nutzer/innen und der Antworten der KI.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'Der Inhalt der Nachricht.';
$string['privacy:metadata:tool_aiagent_message:pagecontext'] = 'Bei einer Nachricht aus dem Chat als Overlay oder Seitenleiste die Adresse und der Name der Seite, die die Person zu diesem Zeitpunkt gelesen hat.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Wer die Nachricht gesendet hat: die Person, der Assistent, das System oder eine Funktion.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'Der Zeitpunkt, zu dem die Nachricht erstellt wurde.';
$string['privacy:metadata:tool_aiagent_usage'] = 'Der für jede KI-Anfrage erfasste Tokenverbrauch, aufbewahrt zur Nachverfolgung der Nutzung.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'Die Anzahl der verbrauchten Ausgabetoken.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'Das KI-Modell, das die Anfrage bearbeitet hat.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'Die Anzahl der verbrauchten Eingabetoken.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'Der KI-Provider, der die Anfrage bearbeitet hat.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'Der Zeitpunkt, zu dem die Anfrage gestellt wurde.';
$string['relevancescore'] = 'Relevanzwert';
$string['relevancescore_help'] = 'Der Relevanzwert gibt auf einer Skala von 1 bis 10 an, wie gut sich eine Webservice-Funktion für den KI-Agenten eignet.

**Hohe Werte (7-10)** erhalten Funktionen, die für einen KI-Assistenten offensichtlich nützlich sind, etwa Kurse anlegen, Personen einschreiben, Inhalte suchen oder Bewertungen abrufen.

**Mittlere Werte (4-6)** sind typisch für zerstörerische oder nicht umkehrbare Vorgänge (etwa Kurse löschen oder Einschreibungen aufheben), die zwar nützlich sind, aber ein höheres Risiko tragen, sowie für Nischenfunktionen mit begrenztem Einsatzbereich.

**Niedrige Werte (1-3)** erhalten Funktionen, die für die interne Kommunikation zwischen Browser und Server gedacht sind, Funktionen ohne Anmeldepflicht, veraltete Funktionen oder Funktionen, für die es bessere Alternativen gibt.

**Der Wert 0** bedeutet, dass die Funktion noch nicht bewertet wurde. Das ist bei Funktionen aus Zusatzplugins häufig der Fall.

Der Relevanzwert bestimmte die anfängliche Vorgabe, ob eine Funktion aktiviert ist. Die anfänglichen Werte für Komponenten des Moodle-Kerns wurden von einer KI erzeugt und müssen möglicherweise von Hand geprüft werden.';
$string['removefilenamed'] = 'Datei entfernen: {$a}';
$string['renamechat'] = 'Chat umbenennen';
$string['renamechat_label'] = 'Neuer Name für den Chat';
$string['responses_endpoints'] = 'Eigene Endpunkte der Responses API';
$string['responses_endpoints_desc'] = 'Überschreibt den Endpunkt der Responses API, wenn eine gehostete oder über einen Proxy betriebene Installation von OpenAI oder Azure OpenAI ihn unter einer abweichenden Adresse bereitstellt. Leer lassen, um die eingebauten Vorgaben zu verwenden. Ohne Wirkung, wenn die API-Art Chat Completions ist.<br><br>
Zum Beispiel https://ihre-ressource.azure.com/api/responses?api-version=preview. Der Endpunkt der Files API wird abgeleitet, indem /responses durch /files ersetzt und die Abfragezeichenfolge beibehalten wird, Uploads gehen also an https://ihre-ressource.azure.com/api/files?api-version=preview.<br><br>
Wenn Sie mehrere Instanzen eines Providers nutzen, geben Sie eine URL pro Zeile an. Jeder Provider verwendet die Zeile, deren Host zu seinem eigenen API-Endpunkt passt.';
$string['responses_endpoints_invalidline'] = 'Jede Zeile muss eine vollständige https-URL sein, deren Pfad auf /responses endet; http wird nur für localhost akzeptiert. Ungültige Zeile: {$a}';
$string['resume_desc'] = 'Sie haben einen kürzlich geführten Chat. Machen Sie dort weiter, wo Sie waren, oder beginnen Sie einen neuen.';
$string['resume_lastmessage'] = 'Letzte Nachricht vor {$a}';
$string['resume_resume'] = 'Letzten Chat fortsetzen';
$string['resume_title'] = 'Willkommen zurück';
$string['sendmessage'] = 'Senden';
$string['settings'] = 'Einstellungen des KI-Agenten';
$string['showallfiles'] = 'Alle anzeigen';
$string['skill_add'] = 'Skill hinzufügen';
$string['skill_edit'] = 'Skill bearbeiten';
$string['skill_save_close'] = 'Speichern und schließen';
$string['skill_save_preview'] = 'Speichern und Vorschau';
$string['skill_saved'] = 'Skill gespeichert.';
$string['skilladd_aitip'] = 'Statt das Formular von Hand auszufüllen, können Sie den KI-Agenten bitten, den Skill für Sie zu erstellen: Er findet die passenden Funktionen und entwirft die Anweisungen. <a href="{$a}">KI-Agenten öffnen</a>.';
$string['skillcapabilities_help'] = 'Aus den Hauptfunktionen des Skills abgeleitet: Eine Person kann den Skill nur verwenden, wenn sie mindestens eine dieser Fähigkeiten in irgendeinem Kontext der Website besitzt. Die Liste fasst die erforderlichen Fähigkeiten aller Hauptfunktionen zusammen.';
$string['skillcapabilities_none'] = 'Keine. Der Skill steht allen Nutzer/innen zur Verfügung.';
$string['skillconfigured'] = 'Konfiguriert';
$string['skilldeleted'] = 'Skill „{$a}“ gelöscht.';
$string['skilldescription'] = 'Beschreibung';
$string['skilldescription_help'] = 'Wofür der Skill gedacht ist, damit der Assistent weiß, wann er ihn laden soll. Beschreiben Sie die Aufgabe oder den Bereich, um den es geht, nicht die einzelnen Schritte. Der Text erscheint sowohl in der Skill-Liste (für Menschen) als auch im Systemprompt (für den Assistenten).';
$string['skillexists'] = 'Ein Skill mit der Kurzbezeichnung „{$a}“ existiert bereits.';
$string['skillimport_badmasks'] = 'Die Felder „mainfunctions“ und „otherfunctions“ müssen jeweils eine Liste von Masken enthalten.';
$string['skillimport_badshortname'] = 'Jeder Skill braucht eine gültige Kurzbezeichnung (Buchstaben, Ziffern, Bindestrich, Unterstrich).';
$string['skillimport_invalidjson'] = 'Die hochgeladene Datei enthält kein gültiges Skill-JSON.';
$string['skillimport_missingfield'] = 'Pflichtfeld fehlt: {$a}.';
$string['skillimported'] = 'Skill „{$a}“ importiert.';
$string['skillinstructions'] = 'Anweisungen';
$string['skillinstructions_help'] = 'Hinweise, die mit dem Skill in den Chat geladen werden. Nehmen Sie nur auf, was nicht offensichtlich ist: Der Assistent sieht jede geladene Funktion samt Beschreibung, wiederholen Sie also nicht, was eine Funktion tut, und erinnern Sie ihn nicht an naheliegende Parameter. Halten Sie die Reihenfolge des Ablaufs, die Entscheidungen und die Fallstricke fest, die in den Beschreibungen fehlen, und leiten Sie Schritte, die nur manchmal gelten, mit „Wenn ...“ ein.';
$string['skillloadedevent'] = 'Skill geladen · {$a}';
$string['skillmainfunctions'] = 'Hauptfunktionen';
$string['skillmainfunctions_help'] = 'Ein enger Satz von Masken, der die zentralen Funktionen des Skills zum Erstellen und Ändern auswählt. Die Fähigkeiten dieser Funktionen entscheiden, wem der Skill angeboten wird: nur Nutzer/innen, die auf mindestens eine davon zugreifen können. Jede Maske passt auf einen Funktionsnamen oder auf ein Muster aus Komponente und Name („*“ ist ein Platzhalter, ein vorangestelltes „~“ entfernt Treffer). Leer lassen, um den Skill allen anzubieten.';
$string['skillmatched'] = 'Treffer ({$a})';
$string['skillmisconfigured'] = 'Derzeit für niemanden verfügbar: Keine der Hauptfunktionen führt zu einer aktivierten Funktion.';
$string['skillname'] = 'Name';
$string['skillname_help'] = 'Ein kurzer, gut lesbarer Anzeigename für den Skill, der in der Skill-Liste erscheint.';
$string['skillnomatch'] = 'Keine aktivierte Funktion passt zu diesen Mustern.';
$string['skillnotfound'] = 'Kein Skill gefunden: {$a}.';
$string['skillotherfunctions'] = 'Weitere Funktionen';
$string['skillotherfunctions_help'] = 'Masken für die übrigen Funktionen, die der Skill mitbringt: lesende Funktionen, Hilfsfunktionen oder eine ganze Komponente. Gleiche Schreibweise wie bei den Hauptfunktionen, sie beeinflussen jedoch nicht, wem der Skill angeboten wird. Leer lassen, wenn der Skill keine zusätzlichen Funktionen braucht.';
$string['skills_intro'] = '<p>Ein Skill bündelt besondere Anweisungen für eine bestimmte Aufgabe mit einer Liste der dafür empfohlenen Funktionen. Nutzen Sie Skills für häufige mehrstufige Aufgaben, bei denen der KI-Agent ins Straucheln gerät oder die passenden Funktionen nicht findet, oder für Aufgaben, die für Ihre Organisation typisch sind.</p><p>Die Liste der Skills und ihrer Beschreibungen steht dem KI-Agenten immer zur Verfügung; er lädt selbst einen Skill, sobald er ihn für die Anfrage als passend ansieht. Ein Skill steht nur Nutzer/innen zur Verfügung, die auf mindestens eine seiner Hauptfunktionen zugreifen können. Ein Skill für Trainer/innen ist zum Beispiel für Teilnehmer/innen nicht sichtbar.</p>';
$string['skillshortname'] = 'Kurzbezeichnung';
$string['skillshortname_help'] = 'Ein unveränderlicher Maschinenname, eindeutig auf der gesamten Website: nur Buchstaben, Ziffern, Bindestrich und Unterstrich. Nach dem Anlegen des Skills kann er nicht mehr geändert werden.';
$string['skilltoobroad'] = 'Passt auf {$a} Funktionen, das könnte zu weit gefasst sein. Schränken Sie die Funktionsmasken gegebenenfalls ein.';
$string['skillunavailable'] = 'Nicht verfügbar';
$string['skillupdated'] = 'Skill „{$a}“ aktualisiert.';
$string['switchview'] = 'Ansicht wechseln';
$string['systeminstruction'] = 'Eigene Systemanweisungen';
$string['systeminstruction_desc'] = 'Eigene Anweisungen, die dem KI-Modell mit jeder Anfrage mitgegeben werden und sein Verhalten, seinen Ton und seine Möglichkeiten festlegen. Leer lassen, um die eingebaute Vorgabe zu verwenden (unten abgebildet). Als Platzhalter können Sie {siteurl} (URL der Website), {userid} (ID der aktuellen Person) und {date} (heutiges Datum im ISO-Format) verwenden; sie werden zur Laufzeit ersetzt. Vorgegebene Anweisungen:{$a->default}

Wird immer an die Systemanweisungen angehängt (an die vorgegebenen wie an die eigenen):{$a->context}';
$string['tab_functions'] = 'Funktionen';
$string['tab_placements'] = 'Platzierungen';
$string['tab_skills'] = 'Skills';
$string['tagarea_tool_aiagent_functions'] = 'Tags für Funktionen des KI-Agenten';
$string['task_cleanup_chats'] = 'Alte Chats des KI-Agenten löschen';
$string['task_purge_provider_data'] = 'Chatdaten des KI-Agenten beim KI-Provider löschen';
$string['task_revalidate_license'] = 'Lizenz des KI-Agenten erneut prüfen';
$string['thinking'] = 'Der KI-Agent denkt nach...';
$string['timecreated'] = 'Erstellungsdatum';
$string['timelastactivity'] = 'Letzte Aktivität';
$string['timemodified'] = 'Zuletzt geändert';
$string['tryagain'] = 'Erneut versuchen';
$string['usage_completiontokens'] = 'Ausgabetoken';
$string['usage_model'] = 'Modell';
$string['usage_prompttokens'] = 'Eingabetoken';
$string['usage_provider'] = 'Provider';
$string['usage_totaltokens'] = 'Token gesamt';
$string['viewdetails'] = 'Details anzeigen';
$string['viewtype_fullscreen'] = 'Vollbild';
$string['viewtype_overlay'] = 'Overlay';
$string['viewtype_sidebar'] = 'Seitenleiste';
$string['viewtypes'] = 'Verfügbare Ansichten';
$string['viewtypes_alldisabled_warning'] = 'Der KI-Agent steht niemandem zur Verfügung, weil in den <a href="{$a}">Einstellungen</a> alle Ansichten deaktiviert sind.';
$string['viewtypes_desc'] = 'Die Chatansichten, die Nutzer/innen öffnen können: ein kleines Overlay in der Ecke der Seite, eine Seitenleiste neben dem Seiteninhalt und die Chatseite im Vollbild. Deaktivieren Sie alle, um den KI-Agenten vorübergehend für alle abzuschalten.';
$string['viewtypes_unavailable'] = 'Der KI-Agent ist derzeit nicht verfügbar.';
$string['welcomedesc'] = 'Fragen Sie den KI-Agenten zu Ihrer Website, zu Kursen, Nutzer/innen oder Inhalten. Er kann lesen und, mit Ihrer Bestätigung, Änderungen vornehmen.';
$string['welcometitle'] = 'Willkommen, {$a}';

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
 * Dutch language pack for AI agent.
 * Last updated: 2026-08-03
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'Extra plugin';
$string['aiagent:autoapproveall'] = 'De modus "Alle" voor automatisch goedkeuren kiezen, waarbij elke functieaanroep zonder bevestiging wordt uitgevoerd';
$string['aiagent:usechat'] = 'Chats met de AI-agent starten (bepaalt waar een chat gestart kan worden; het beperkt niet welke gegevens de chat daarna kan benaderen)';
$string['allowfeedback'] = 'Feedback toestaan';
$string['allowfeedback_desc'] = 'Als dit is ingeschakeld, kunnen gebruikers antwoorden van de assistent beoordelen en mislukte functieaanroepen melden. De inzendingen gaan naar de ontwikkelaars van de AI-agentplugin (niet naar een LLM), zodat zij het aanroepen van Moodle-functies kunnen verbeteren. Alleen de beoordeelde uitwisseling wordt verstuurd, niet de hele chat, en de gebruiker kan de tekst voor het versturen aanpassen. Schakel dit uit op sites met een streng beleid voor uitgaand verkeer.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Tool "web fetch" inschakelen';
$string['anthropic_web_fetch_desc'] = 'Laat Claude externe URL\'s aan de serverkant ophalen via de tool web_fetch van Anthropic. Handig wanneer in de chat openbare webpagina\'s voorkomen die het model moet lezen. Bestanden op deze Moodle-site worden apart afgehandeld via de functie read_file (die ze zo nodig uploadt naar de Files API van Anthropic), het uitschakelen van web_fetch heeft dus geen invloed op de toegang tot cursusmateriaal of bijlagen.';
$string['attachedfiles'] = 'Bijgevoegde bestanden';
$string['attachfile'] = 'Bestand bijvoegen';
$string['autoapprove'] = 'Autom. goedkeuren';
$string['autoapprove_all'] = 'Alle (voorzichtig gebruiken)';
$string['autoapprove_all_desc'] = 'Elke bevestiging overslaan';
$string['autoapprove_all_disabled'] = 'Je hebt geen rechten om deze modus te gebruiken.';
$string['autoapprove_all_short'] = 'Alle';
$string['autoapprove_header'] = 'Functieaanroepen automatisch goedkeuren';
$string['autoapprove_none'] = 'Geen';
$string['autoapprove_none_desc'] = 'Vóór elke functieaanroep vragen';
$string['autoapprove_readonly'] = 'Alleen-lezen';
$string['autoapprove_readonly_desc'] = 'Lezen automatisch goedkeuren, voor schrijven vragen';
$string['autoapprove_safe'] = 'Veilig';
$string['autoapprove_safe_desc'] = 'Acties die de site niet wijzigen automatisch goedkeuren';
$string['autoapprove_safe_examples'] = 'Lezen, plus het verkleinen van bijlagen, afbeeldingen genereren, bestanden naar het LLM sturen, enzovoort.';
$string['backtoconfiguration'] = 'Terug naar de configuratie van de AI-agent';
$string['builtinfunction'] = 'Meegeleverd';
$string['bulk_disabled'] = '{$a} functie(s) uitgeschakeld';
$string['bulk_disableselected'] = 'Selectie uitschakelen';
$string['bulk_enabled'] = '{$a} functie(s) ingeschakeld';
$string['bulk_enableselected'] = 'Selectie inschakelen';
$string['bulk_withselected'] = 'Met geselecteerde functies';
$string['capabilities'] = 'Mogelijkheden';
$string['chat_namelink'] = 'Naam met link';
$string['chatfrozen'] = 'De vaardigheden van deze chat zijn niet meer beschikbaar, daarom kan hij niet worden voortgezet. Start in plaats daarvan een nieuwe chat.';
$string['chathelpcontent'] = '<p>De AI-agent kan namens jou inhoud op deze site lezen en wijzigen. Voor de meeste acties wordt eerst je goedkeuring gevraagd. In het invoerveld kun je de modus voor automatisch goedkeuren soepeler of strenger zetten.</p>
<p>Voeg bestanden toe door ze te slepen, te plakken of op het paperclip-icoon te klikken. Typ daarna je verzoek en klik op <strong>Verzenden</strong>. Druk op Enter om te verzenden, of op Shift en Enter voor een nieuwe regel.</p><p>AI kan fouten maken. Controleer de resultaten.</p>';
$string['chatnopermission'] = 'Deze chat is gestart in een deel van de site waar je geen toegang meer hebt tot de AI-agent, daarom kan hij niet worden voortgezet.';
$string['chatnostartpermission'] = 'Je hebt geen rechten om hier een chat te starten. Open de AI-agent op een pagina waar hij wordt aangeboden.';
$string['chatretention'] = 'Chats bewaren gedurende';
$string['chatretention_desc'] = 'Chats zonder activiteit gedurende deze periode worden uit de chatgeschiedenis van gebruikers verwijderd, hun bijgevoegde bestanden worden van deze site verwijderd en er wordt verzocht om verwijdering van de chatgegevens die bij de AI-provider zijn opgeslagen (bewaarde antwoorden en geüploade bestanden). Verwijdering aan de kant van de provider gebeurt naar beste vermogen en is niet gegarandeerd; stel ook in je account bij de provider een passend bewaarbeleid in. Berichten en gebruiksgegevens blijven voor rapportages bewaard totdat de hieronder ingestelde bewaartermijn voor chatlogs verstrijkt. Stel in op 0 om chats onbeperkt te bewaren.';
$string['closeconfirm_body'] = 'Het sluiten van het venster verwijdert de chat niet. Je kunt hem op elk moment opnieuw openen via het menu Vorige chats. Chats worden na {$a} dagen automatisch verwijderd.';
$string['closeconfirm_body_noretention'] = 'Het sluiten van het venster verwijdert de chat niet. Je kunt hem op elk moment opnieuw openen via het menu Vorige chats.';
$string['closeconfirm_close'] = 'Chat sluiten';
$string['closeconfirm_dontshowagain'] = 'Dit niet meer tonen';
$string['closeconfirm_title'] = 'Deze chat sluiten?';
$string['component'] = 'Component';
$string['component_filesandimages'] = 'Bewerkingen van bestanden en afbeeldingen';
$string['configuration'] = 'Configuratie van de AI-agent';
$string['confirmdeleteskill'] = 'Weet je zeker dat je deze vaardigheid wilt verwijderen?';
$string['contextevent_opened'] = 'Geopend vanuit {$a}';
$string['contextevent_page'] = 'Pagina · {$a}';
$string['copyresponse'] = 'Antwoord kopiëren';
$string['copyurl'] = 'URL kopiëren';
$string['datasource_chats'] = 'Chats van de AI-agent';
$string['datasource_usage'] = 'Gebruik van de AI-agent';
$string['deletechat_menu'] = 'Chat verwijderen';
$string['deletechat_named'] = 'Chat verwijderen: {$a}';
$string['disablefunction'] = 'Deze functie uitschakelen';
$string['dragtoresize'] = 'Sleep om het formaat te wijzigen';
$string['dynamicdiscovery'] = 'Dynamische functiedetectie';
$string['dynamicdiscovery_automatic'] = 'Automatisch';
$string['dynamicdiscovery_desc'] = 'Optimaliseer het tokengebruik door functies alleen te detecteren wanneer ze nodig zijn. Dit is aan te raden als je veel webservicefuncties hebt ingeschakeld. In de automatische modus wordt dit ingeschakeld zodra er meer dan {$a} functies beschikbaar zijn. Sommige AI-providers hanteren een limiet voor het aantal functies (OpenAI bijvoorbeeld 128).';
$string['dynamicdiscovery_off'] = 'Uit';
$string['dynamicdiscovery_on'] = 'Aan';
$string['enabled'] = 'Ingeschakeld';
$string['enablefunction'] = 'Deze functie inschakelen';
$string['entity_aiagentfunction'] = 'Functie van de AI-agent';
$string['entity_chat'] = 'Chat';
$string['entity_externalfunction'] = 'Webservicefunctie';
$string['entity_message'] = 'Bericht';
$string['entity_placement'] = 'Plaatsing';
$string['entity_skill'] = 'Vaardigheid';
$string['entity_usage'] = 'Tokengebruik';
$string['error_interrupted_function'] = 'Een functieaanroep is onderbroken voordat hij klaar was. Mogelijk zijn er wijzigingen gedeeltelijk doorgevoerd; controleer de toestand voordat je het opnieuw probeert.';
$string['error_interrupted_llm'] = 'De communicatie met de AI-provider is onderbroken. Klik op "Opnieuw proberen" om het verzoek te herhalen.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'Het bericht mag niet leeg zijn.';
$string['errorfullscreendisabled'] = 'De chatweergave op volledig scherm is niet ingeschakeld op deze site.';
$string['errorinvalidchat'] = 'Chat niet gevonden of toegang geweigerd.';
$string['errorinvalidname'] = 'De naam mag niet leeg zijn.';
$string['errormissingfeedbackparams'] = 'Bericht of type feedback ontbreekt.';
$string['errornopendingfunction'] = 'Er zijn geen openstaande functieaanroepen.';
$string['errornoprovider'] = 'Er is geen AI-provider beschikbaar. De AI-agent gebruikt de instellingen van de actie "Tekst genereren", zorg er dus voor dat die in Sitebeheer voor minstens één AI-provider is ingesteld en ingeschakeld.';
$string['errornoprovider_link'] = 'AI-providers configureren.';
$string['errornoretryresponse'] = 'Er is geen mislukt antwoord om opnieuw te proberen.';
$string['errorpendingfunctions'] = 'Keur de openstaande functieaanroepen eerst goed of af.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} heeft de prompt geblokkeerd: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} heeft het antwoord geblokkeerd: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} heeft geen inhoud teruggegeven.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} heeft geen inhoud teruggegeven (reden van afsluiten: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'Het endpoint voor de communicatie met de AI-provider is ongeldig of niet bereikbaar.';
$string['errorresponses_endpoint_invalid_config'] = 'De plugin heeft geprobeerd {$a->endpoint} te gebruiken als endpoint van de OpenAI Responses API, maar het verzoek is mislukt. Ga naar {$a->settingslink} en controleer het endpoint van de Responses API, of zet het API-type om naar Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'Antwoord van de provider: {$a}';
$string['errorresponses_provider_switch'] = 'Deze chat kan niet worden voortgezet onder de Responses API van OpenAI, omdat hij met een andere AI-provider is gestart. Start een nieuwe chat, of schakel terug naar de oorspronkelijke provider (of naar OpenAI Chat Completions) om deze voort te zetten.';
$string['errorrootnotfound'] = 'Het eerste bericht van deze chat is niet gevonden.';
$string['exportskill'] = 'Exporteren';
$string['feedback_modal_freetextlabel'] = 'Nog iets anders? (optioneel)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Wat ging er mis? Zo gedetailleerd als je wilt.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Wat ging er goed? (optioneel)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Wat ging er mis met deze functieaanroep?';
$string['feedback_modal_intro_negative'] = 'Bedankt voor de melding. Je feedback gaat naar de ontwikkelaars van de AI-agentplugin (niet naar de AI-provider), zodat zij het aanroepen van Moodle-functies kunnen verbeteren.';
$string['feedback_modal_intro_positive'] = 'Bedankt! Je feedback gaat naar de ontwikkelaars van de AI-agentplugin (niet naar de AI-provider), zodat zij kunnen behouden wat werkt en kunnen verbeteren wat niet werkt.';
$string['feedback_modal_intro_toolerror'] = 'Meld deze functieaanroep als problematisch. Je feedback gaat naar de ontwikkelaars van de AI-agentplugin (niet naar de AI-provider), zodat zij de onderliggende webservice kunnen repareren of het gebruik ervan door de AI kunnen verbeteren.';
$string['feedback_modal_send'] = 'Feedback versturen';
$string['feedback_modal_sending'] = 'Bezig met versturen...';
$string['feedback_modal_snapshotlabel'] = 'Wat er verstuurd wordt (aanpasbaar)';
$string['feedback_modal_title_positive'] = 'Vertel ons wat goed ging';
$string['feedbackcat_negative_misunderstood'] = 'Begreep mijn vraag verkeerd';
$string['feedbackcat_negative_notfollowed'] = 'Volgde de instructies niet';
$string['feedbackcat_negative_other'] = 'Iets anders';
$string['feedbackcat_negative_wronginfo'] = 'Onjuiste of verzonnen informatie';
$string['feedbackcat_negative_wrongtoolused'] = 'Gebruikte de verkeerde functie';
$string['feedbackcat_positive_accurate'] = 'Correct';
$string['feedbackcat_positive_goodexplanation'] = 'Duidelijke uitleg';
$string['feedbackcat_positive_helpful'] = 'Nuttig';
$string['feedbackcat_positive_other'] = 'Iets anders';
$string['feedbackcat_positive_welltimed'] = 'De juiste functie voor de taak';
$string['feedbackcat_toolerror_misleadingresult'] = 'Resultaat was misleidend';
$string['feedbackcat_toolerror_other'] = 'Iets anders';
$string['feedbackcat_toolerror_toolerror'] = 'Functie gaf een fout terug';
$string['feedbackcat_toolerror_wrongargs'] = 'Verkeerde argumenten';
$string['feedbackcat_toolerror_wrongtool'] = 'Verkeerde functie voor de taak';
$string['feedbackdisabled'] = 'Het verzamelen van feedback is door de sitebeheerder uitgeschakeld.';
$string['feedbackfailed'] = 'Feedback kon niet worden verstuurd. Probeer het later opnieuw.';
$string['feedbackflagfunctioncall'] = 'Deze functieaanroep melden';
$string['feedbacksubmitted'] = 'Feedback verstuurd';
$string['feedbackthanks'] = 'Bedankt voor je feedback!';
$string['feedbackthumbdown'] = 'Een probleem met dit antwoord melden';
$string['feedbackthumbup'] = 'Dit antwoord was nuttig';
$string['feedbackvalidation_categoryrequired'] = 'Selecteer minstens één categorie.';
$string['functionapprovecount'] = 'Keur {$a} aanroepen goed';
$string['functioncall_actions'] = 'Functieaanroep goedkeuren of afkeuren';
$string['functioncall_chip_action'] = 'Modus voor automatisch goedkeuren wijzigen';
$string['functioncalldetails'] = 'Details van de functieaanroep';
$string['functiondeny'] = 'Keur af';
$string['functiondenyall'] = 'Keur alles af';
$string['functionloopguardbody'] = 'Deze functie is al {$a} keer met dezelfde invoer uitgevoerd. Automatisch goedkeuren is gepauzeerd vanwege een mogelijke lus; keur goed om door te gaan.';
$string['functionloopguardheading'] = 'Herhaalde aanroep.';
$string['functionname'] = 'Functienaam';
$string['functionparameters'] = 'Parameters';
$string['functionresult'] = 'Resultaat';
$string['functionresultdiscarded'] = 'Het resultaat was te groot ({$a}) en is weggegooid. Beperk de aanvraag door te filteren, minder velden op te vragen of een specifiekere functie te gebruiken. Dezelfde aanroep herhalen levert dezelfde fout op.';
$string['functions_intro'] = '<p><b>Niet elke webservicefunctie past goed bij de AI-agent.</b> Sommige zijn gemaakt voor communicatie tussen client en server (gemarkeerd met AJAX) of voor niet-ingelogde gebruikers (Zonder login), en voor sommige bestaan er betere alternatieven. Een deel van de AJAX-functies werkt prima met de AI-agent, maar de meeste niet. De AI-agentplugin kent aan functies uit de kern en uit standaardplugins een relevantiescore (1-10) toe en schakelt de functies met een score van 5 of hoger in. Functies uit extra plugins krijgen geen score; in plaats daarvan worden al hun niet-AJAX-functies automatisch ingeschakeld. Gebruik deze pagina om de beschikbare functies te bekijken en ze afzonderlijk in of uit te schakelen.</p><p>Als een functie een of meer mogelijkheden vereist, is ze niet beschikbaar voor gebruikers die er in geen enkele context op de site minstens één van hebben. Voor de kern en voor standaardplugins stelt de AI-agentplugin deze mogelijkheden correct in. Bij extra plugins worden ze uit de functiedefinitie overgenomen, en omdat Moodle deze controle zelf niet afdwingt, kunnen ze onjuist zijn.</p>';
$string['functions_report'] = 'Functies van de AI-agent';
$string['functionstatus_denied'] = 'Afgekeurd';
$string['functionstatus_failed'] = 'Mislukt';
$string['functionstatus_pending'] = 'Wacht op goedkeuring';
$string['functionstatus_processing'] = 'Wordt uitgevoerd...';
$string['functiontype'] = 'Type';
$string['functiontype_help'] = 'Het type webservicefunctie en de eigenschappen ervan:

* **Lezen**: haalt gegevens op zonder iets te wijzigen
* **Schrijven**: maakt gegevens aan of wijzigt ze
* **AJAX**: wordt intern door Moodle gebruikt voor verzoeken tussen client en server, minder geschikt als functie voor de AI-agent
* **Zonder login**: beschikbaar voor niet-ingelogde gebruikers, eveneens minder geschikt als functie voor de AI-agent';
$string['functiontype_read'] = 'Lezen';
$string['functiontype_write'] = 'Schrijven';
$string['gemini_api_generatecontent'] = 'generateContent (stabiel)';
$string['gemini_api_interactions'] = 'Interactions API (bèta)';
$string['gemini_api_type'] = 'API-type';
$string['gemini_api_type_desc'] = 'Welke Gemini-API wordt gebruikt voor chats met meerdere beurten. generateContent is het gebruikelijke stateless endpoint en bouwt de volledige berichtenlijst elke beurt opnieuw op. De Interactions API is momenteel in bèta; die bewaart de status van de chat aan de kant van Google (er wordt dus per beurt alleen nieuwe invoer verstuurd), maar het schema ervan kan zonder aankondiging veranderen.';
$string['gemini_builtin_code_execution'] = 'Tool "Code Execution" inschakelen';
$string['gemini_builtin_code_execution_desc'] = 'Laat Gemini Python-code in een sandbox schrijven en uitvoeren om rekenwerk op te lossen of gegevens te verwerken. Alleen voor modellen vanaf Gemini 3; bij Gemini 2.5 en ouder wordt dit stilzwijgend genegeerd, omdat die modellen ingebouwde tools niet kunnen combineren met eigen functieaanroepen.';
$string['gemini_builtin_google_search'] = 'Tool "Google Search grounding" inschakelen';
$string['gemini_builtin_google_search_desc'] = 'Laat Gemini antwoorden onderbouwen met actuele zoekresultaten van het web. Alleen voor modellen vanaf Gemini 3; bij Gemini 2.5 en ouder wordt dit stilzwijgend genegeerd, omdat die modellen ingebouwde tools niet kunnen combineren met eigen functieaanroepen. Elke zoekopdracht wordt apart in rekening gebracht.';
$string['gemini_builtin_url_context'] = 'Tool "URL Context" inschakelen';
$string['gemini_builtin_url_context_desc'] = 'Laat Gemini de inhoud lezen en analyseren van openbare URL\'s die de gebruiker noemt. Alleen voor modellen vanaf Gemini 3; bij Gemini 2.5 en ouder wordt dit stilzwijgend genegeerd, omdat die modellen ingebouwde tools niet kunnen combineren met eigen functieaanroepen. De URL\'s moeten openbaar toegankelijk zijn (geen localhost, geen authenticatie).';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = 'Wil je deze chat naast je site gebruiken? Sleep <a href="{$a}">{$a}</a> naar een nieuw venster, of klik er met de rechtermuisknop op en gebruik de gesplitste weergave van je browser.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Bestand {$a->size}, afmetingen {$a->dimensions}. Voorbeeld {$a->preview} ({$a->scale}%).';
$string['importskill'] = 'Vaardigheden importeren';
$string['importskill_addmore'] = 'Meer toevoegen...';
$string['importskill_button'] = '{$a} vaardigheden importeren';
$string['importskill_buttonone'] = '1 vaardigheid importeren';
$string['importskill_choose'] = 'Bestanden kiezen...';
$string['importskill_drophint'] = 'Sleep vaardigheidsbestanden hierheen, of gebruik de knop.';
$string['importskill_fileone'] = '1 bestand geselecteerd';
$string['importskill_files'] = '{$a} bestanden geselecteerd';
$string['importskill_statusinvalid'] = 'Geen vaardigheidsbestand';
$string['importskill_statusnew'] = 'Nieuwe vaardigheid';
$string['importskill_statusupdate'] = 'Bijwerken: {$a}';
$string['importskill_summarynew'] = '{$a} nieuw';
$string['importskill_summaryskipped'] = '{$a} overgeslagen';
$string['importskill_summaryupdate'] = '{$a} bij te werken';
$string['importskill_toolarge'] = 'De vaardigheidsgegevens zijn te groot (maximaal {$a}).';
$string['inlinefilecharlimit'] = 'Limiet voor ingesloten bestandsinhoud';
$string['inlinefilecharlimit_desc'] = 'Maximale hoeveelheid van een tekstbestand die rechtstreeks in de chat kan worden ingesloten wanneer een bestand inline wordt gelezen. Langere inhoud wordt afgekapt. Inline meesturen wordt gebruikt wanneer het model erom vraagt, en als terugval voor AI-providers die geen bestanden kunnen ontvangen. Ingesloten inhoud wordt elke beurt opnieuw met de chatgeschiedenis meegestuurd, een hoge limiet verhoogt dus het tokengebruik.';
$string['invalidparameter'] = 'Ongeldige parameter gevonden: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Licentie activeren';
$string['licenseactivate_help'] = 'Voer de licentiesleutel in die je per e-mail van LMSCloud hebt ontvangen. De licentiesleutel kan op een beperkt aantal sites worden geactiveerd (meestal twee). Je kunt hem op elk moment deactiveren om hem op een andere site te gebruiken.';
$string['licensedeactivate'] = 'Deactiveren';
$string['licensedeactivate_help'] = 'Deactiveer de licentiesleutel op deze site, zodat hij op een andere site gebruikt kan worden.';
$string['licenseerror_deactivate'] = 'De licentie kon niet worden gedeactiveerd. De server is mogelijk tijdelijk niet bereikbaar; probeer het later opnieuw.';
$string['licenseerror_deactivate_forced'] = 'Deze licentie is vastgelegd in de serverconfiguratie (config.php) en kan niet vanaf deze pagina worden gedeactiveerd.';
$string['licenseerror_invalid'] = 'De licentiesleutel is ongeldig of kon niet worden geactiveerd.';
$string['licenseerror_limit'] = 'Er zijn geen vrije plaatsen voor deze licentiesleutel. Deactiveer eerst een andere site en probeer het dan opnieuw.';
$string['licenseerror_transport'] = 'De licentieserver is niet bereikbaar. Controleer de verbinding en probeer het opnieuw.';
$string['licensekey'] = 'Licentiesleutel';
$string['licenselocked_expired'] = 'Deze site heeft haar licentie al meer dan 14 dagen niet gevalideerd. Controleer de licentie opnieuw om de toegang te herstellen.';
$string['licenselocked_key_rejected'] = 'Deze licentiesleutel is niet langer geldig op deze site.';
$string['licenselocked_url_mismatch'] = 'Het webadres van deze site is gewijzigd; de licentiehouder moet het nieuwe adres autoriseren.';
$string['licensemanageinsettings'] = 'Beheer de licentie in de instellingen van de AI-agent.';
$string['licenserecheck'] = 'Opnieuw controleren';
$string['licensesetting'] = 'Licentie van de AI-agent';
$string['licensesetting_desc'] = 'De licentie van de AI-agent voor deze site activeren, opnieuw controleren of deactiveren.';
$string['licensestatus_materialsmissing'] = 'De licentie van de AI-agent is actief, maar de gedownloade materialen ontbreken, daarom zijn er geen functies beschikbaar. Controleer opnieuw om ze alsnog op te halen.';
$string['licensestatus_notactivated'] = 'Voor het gebruik van de AI-agent op deze site is een licentie vereist.';
$string['licensestatus_valid'] = 'De licentie van de AI-agent is actief.';
$string['loginrequired'] = 'Inloggen vereist';
$string['logretention'] = 'Chatlogs bewaren gedurende';
$string['logretention_desc'] = 'Berichten en gegevens over tokengebruik van chats zonder activiteit gedurende deze periode worden definitief uit de database verwijderd. Dit geldt alleen voor chats die al uit de chatgeschiedenis zijn verwijderd, door de gebruiker of door de instelling hierboven. Stel in op 0 om logs onbeperkt te bewaren.';
$string['maxfilesize'] = 'Maximale bestandsgrootte voor het LLM';
$string['maxfilesize_desc'] = 'Voorkomt dat gebruikers bestanden naar het LLM sturen die te groot zijn. Grote bestanden verbruiken snel veel tokens en jagen de kosten op. Bestanden boven deze grootte worden met een foutmelding geweigerd voordat er gegevens van de site vertrekken.

AI-providers weigeren bestanden die hun eigen limiet per verzoek overschrijden sowieso (Anthropic 32 MB, Gemini 50 MB inline, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Maximale grootte van een functieresultaat';
$string['maxfunctionresultsize_desc'] = 'Maximale hoeveelheid gegevens die één functie aan het AI-model mag teruggeven. Sommige Moodle-functies hebben geen filter en geven alle gebruikers of alle cursussen van de site terug, wat het model overspoelt en elke volgende beurt tokens kost. Een resultaat boven deze limiet wordt weggegooid en het model krijgt te horen dat het de aanvraag moet beperken. Nul betekent geen limiet. Een bestand inline lezen valt hierbuiten; gebruik daarvoor "Limiet voor ingesloten bestandsinhoud".';
$string['newchat'] = 'Nieuwe chat';
$string['newchatchooser_blank_sub'] = 'Geen context. Algemene assistent.';
$string['newchatchooser_clone'] = 'Hetzelfde als deze chat';
$string['newchatchooser_continue'] = 'Verder waar je gebleven was';
$string['newchatchooser_desc_default'] = 'Start een nieuwe chat op deze pagina, of ga verder waar je gebleven was.';
$string['newchatchooser_desc_full'] = 'Start een algemene chat, of ga verder waar je gebleven was.';
$string['newchatchooser_desc_multi'] = 'Deze pagina heeft een paar startpunten. Kies er een, of ga verder waar je gebleven was.';
$string['newchatchooser_error'] = 'Er kon geen nieuwe chat gestart worden. Probeer het opnieuw.';
$string['newchatchooser_none'] = 'Er is hier geen pagina waar je een nieuwe chat kunt starten.';
$string['newchatchooser_onthispage'] = 'Op deze pagina:';
$string['newchatchooser_title'] = 'Een nieuwe chat starten';
$string['nfilesattached'] = '{$a} bestanden bijgevoegd';
$string['nonauth'] = 'Zonder login';
$string['numfiles'] = '{$a} bestanden';
$string['numimages'] = '{$a} afbeeldingen';
$string['numotherfiles'] = '{$a} overige bestanden';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'API-type';
$string['openai_api_type_desc'] = 'Welke OpenAI-API wordt gebruikt voor chats met meerdere beurten. De Responses API bewaart de status van de chat aan de serverkant, er wordt dus per beurt alleen nieuwe invoer verstuurd (lagere kosten, eenvoudiger geschiedenis). Chat Completions bouwt de volledige berichtenlijst bij elk verzoek opnieuw op (bredere compatibiliteit met providers).<br><br>De Responses API wordt ondersteund door: <strong>{$a}</strong>. Andere providers vallen ongeacht deze instelling stilzwijgend terug op Chat Completions.';
$string['openai_heading'] = 'OpenAI (of compatibel)';
$string['openlink'] = 'Link openen';
$string['placeholder'] = 'Typ een bericht...';
$string['placement_add'] = 'Plaatsing toevoegen';
$string['placement_confirmdelete'] = 'Weet je zeker dat je deze plaatsing wilt verwijderen?';
$string['placement_copyof'] = '{$a} (kopie)';
$string['placement_defaultname'] = 'AI-agent';
$string['placement_deleted'] = 'Plaatsing verwijderd.';
$string['placement_duplicated'] = 'Plaatsing gedupliceerd.';
$string['placement_edit'] = 'Plaatsing bewerken';
$string['placement_initialskills'] = 'Initiële vaardigheden';
$string['placement_initialskills_help'] = 'Vaardigheden die automatisch worden geladen wanneer de chat start. Optioneel; de agent kan elke vaardigheid alsnog laden wanneer dat nodig is. De ingestelde vaardigheden sturen ook deze plaatsing aan: gebruikers die tot geen enkele ervan toegang hebben, zien de knop of het menu-item niet, en als later alle ingestelde vaardigheden worden verwijderd of uitgeschakeld, verschijnt de plaatsing niet meer.';
$string['placement_intro'] = '<p>Met plaatsingen bied je agenten aan die op een bepaalde taak zijn toegesneden. Elke plaatsing zet de knop van de AI-agent op pagina\'s waarvan de URL overeenkomt met een van haar maskers, en kan de chat starten met vooraf ingestelde initiële vaardigheden en welkomsttekst. Als er initiële vaardigheden zijn ingesteld, zien gebruikers die tot geen enkele ervan toegang hebben de knop niet.</p><p>De initiële vaardigheden bepalen alleen het startpunt van de chat; de agent heeft nog steeds toegang tot alle ingeschakelde functies, niet alleen tot die van de vaardigheden.</p>';
$string['placement_location'] = 'Knoppositie';
$string['placement_location_floating'] = 'Zwevende knop';
$string['placement_location_h1'] = 'Paginakop (H1)';
$string['placement_location_h2'] = 'Tweede kop (H2)';
$string['placement_menuheading'] = 'Vraag het de AI-agent';
$string['placement_name'] = 'Naam';
$string['placement_name_help'] = 'Wordt aan gebruikers getoond: in het gebruikersmenu, als tooltip van de knop en (wanneer meerdere plaatsingen bij dezelfde pagina passen) in het menu van de knop.';
$string['placement_save'] = 'Plaatsing opslaan';
$string['placement_saved'] = 'Plaatsing opgeslagen.';
$string['placement_skillmissing'] = 'Vaardigheid niet gevonden';
$string['placement_urlmask'] = 'URL-maskers';
$string['placement_urlmask_help'] = 'Eén patroon per regel. Gebruik * als jokerteken, bijvoorbeeld /course/view.php* of /mod/*/view.php*. Let op: op pagina\'s waar een specifiekere plaatsing dezelfde positie inneemt, wordt een brede plaatsing die op /* past verborgen, zodat gebruikers alleen de meest relevante zien.';
$string['placement_urlmask_invalid'] = 'Elk URL-masker moet met een schuine streep beginnen: "{$a}" doet dat niet.';
$string['placement_welcome'] = 'Eigen welkomsttekst (optioneel)';
$string['placement_welcome_help'] = 'Vervangt het standaard welkomstbericht op het startscherm van de chat. Laat leeg om de standaardtekst te gebruiken.';
$string['pluginname'] = 'AI-agent';
$string['previouschats'] = 'Vorige chats';
$string['privacy:metadata:aiprovider'] = 'Chats worden verstuurd naar de AI-provider die de sitebeheerder heeft gekozen, zoals OpenAI, Azure OpenAI, Google Gemini of Anthropic, zodat die een antwoord kan genereren. De plugin stuurt elk verzoek rechtstreeks naar de provider en niet via het AI-subsysteem van Moodle. Welk bedrijf de gegevens ontvangt, en hoe lang ze daar bewaard worden, hangt af van de provider die de site heeft ingesteld en van de voorwaarden van die provider zelf.';
$string['privacy:metadata:aiprovider:files'] = 'Bestanden die de gebruiker aan een chat toevoegt, en bestanden die de agent namens de gebruiker van de site leest, geüpload zodat het model de inhoud ervan kan lezen.';
$string['privacy:metadata:aiprovider:messages'] = 'De chatgeschiedenis, die elke beurt opnieuw wordt verstuurd: de vragen van de gebruiker, de antwoorden van de assistent en de resultaten van de Moodle-functies die de agent heeft uitgevoerd, die persoonsgegevens van andere gebruikers kunnen bevatten.';
$string['privacy:metadata:aiprovider:userid'] = 'Het ID van de gebruiker die de chat voert, opgenomen in de instructies aan het model zodat het namens die gebruiker kan handelen.';
$string['privacy:metadata:core_files'] = 'Bestanden die aan berichten van de AI-agent zijn toegevoegd.';
$string['privacy:metadata:feedback'] = 'Wanneer feedback is ingeschakeld en een gebruiker een antwoord beoordeelt of een mislukte functieaanroep meldt, wordt de beoordeelde uitwisseling naar de ontwikkelaars van de AI-agentplugin verstuurd, zodat het gedrag van de agent verbeterd kan worden. Er wordt niets verstuurd tenzij de gebruiker ervoor kiest feedback in te sturen, en de functionaliteit kan volledig worden uitgeschakeld met de instelling "Feedback toestaan".';
$string['privacy:metadata:feedback:freetext'] = 'De opmerking die de gebruiker desgewenst bij het insturen van feedback schrijft, verstuurd zoals ingevoerd.';
$string['privacy:metadata:feedback:snapshot'] = 'Een weergave van de beoordeelde uitwisseling: de vraag van de gebruiker, de antwoorden van de assistent en de namen van de functies die zijn aangeroepen. E-mailadressen worden gemaskeerd en de argumenten en resultaten van die functies blijven weg, afgezien van de zoekopdrachten naar functies van de agent zelf. De gebruiker kan de tekst voor het insturen aanpassen.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'De voorkeur om het bevestigingsvenster bij het sluiten niet meer te tonen.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'De grootte die de gebruiker aan het chatvenster als overlay heeft gegeven.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'De breedte die de gebruiker aan het chatvenster als zijbalk heeft gegeven.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'De chatweergave (overlay, zijbalk of volledig scherm) die de gebruiker het laatst heeft gebruikt.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Chats tussen een gebruiker en de AI-agent. Chats die de gebruiker verwijdert, worden gearchiveerd in plaats van weggehaald, zodat het tokengebruik nog steeds gevolgd kan worden.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'Het tijdstip waarop de chat is gearchiveerd (door de gebruiker verwijderd), indien van toepassing.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'Het tijdstip waarop de chat is aangemaakt.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Wanneer het laatste bericht in de chat is opgeslagen.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'Het tijdstip waarop de chat voor het laatst is bijgewerkt.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'De naam van de chat, gegenereerd uit het eerste bericht.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'De gebruiker van wie de chat is.';
$string['privacy:metadata:tool_aiagent_message'] = 'Afzonderlijke berichten binnen een chat, met de vragen van de gebruiker en de antwoorden van de AI.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'De inhoud van het bericht.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Wie het bericht heeft verstuurd: de gebruiker, de assistent, het systeem of een functie.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'Het tijdstip waarop het bericht is aangemaakt.';
$string['privacy:metadata:tool_aiagent_usage'] = 'Het tokengebruik dat voor elk AI-verzoek wordt vastgelegd, bewaard om het gebruik te kunnen volgen.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'Het aantal gebruikte uitvoertokens (completion).';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'Het AI-model dat het verzoek heeft afgehandeld.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'Het aantal gebruikte invoertokens (prompt).';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'De AI-provider die het verzoek heeft afgehandeld.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'Het tijdstip waarop het verzoek is gedaan.';
$string['relevancescore'] = 'Relevantie';
$string['relevancescore_help'] = 'De relevantiescore geeft op een schaal van 1 tot 10 aan hoe geschikt een webservicefunctie is voor de AI-agent.

**Hoge scores (7-10)** krijgen functies die duidelijk nuttig zijn voor een AI-assistent, zoals cursussen aanmaken, gebruikers inschrijven, inhoud zoeken of cijfers ophalen.

**Middelhoge scores (4-6)** zijn typisch voor destructieve of onomkeerbare handelingen (zoals cursussen verwijderen of inschrijvingen ongedaan maken) die weliswaar nuttig zijn maar meer risico met zich meebrengen, en voor nichefuncties met een beperkt toepassingsgebied.

**Lage scores (1-3)** krijgen functies die bedoeld zijn voor interne communicatie tussen browser en server, functies die geen authenticatie vereisen, verouderde functies of functies waarvoor betere alternatieven bestaan.

**Een score van 0** betekent dat de functie nog niet is beoordeeld. Dat komt vaak voor bij functies uit plugins van derden.

De relevantiescore is gebruikt om de standaardwaarde te bepalen voor het al dan niet inschakelen van elke functie. De eerste scores voor componenten uit de Moodle-kern zijn door AI gegenereerd en vragen mogelijk om handmatige controle.';
$string['removefilenamed'] = 'Bestand verwijderen: {$a}';
$string['renamechat'] = 'Chat hernoemen';
$string['renamechat_label'] = 'Nieuwe naam voor de chat';
$string['responses_endpoints'] = 'Eigen endpoints voor de Responses API';
$string['responses_endpoints_desc'] = 'Overschrijft het endpoint van de Responses API wanneer een gehoste of via een proxy aangeboden implementatie van OpenAI of Azure OpenAI het op een afwijkend adres aanbiedt. Laat leeg om de ingebouwde standaardwaarden te gebruiken. Heeft geen effect wanneer het API-type Chat Completions is.<br><br>
Bijvoorbeeld https://jouw-resource.azure.com/api/responses?api-version=preview. Het endpoint van de Files API wordt afgeleid door /responses te vervangen door /files met behoud van de querystring, uploads gaan dus naar https://jouw-resource.azure.com/api/files?api-version=preview.<br><br>
Als je meerdere instanties van een provider gebruikt, geef dan één URL per regel op. Elke provider gebruikt de regel waarvan de host overeenkomt met zijn eigen API-endpoint.';
$string['responses_endpoints_invalidline'] = 'Elke regel moet een volledige https-URL zijn waarvan het pad eindigt op /responses; http wordt alleen voor localhost geaccepteerd. Ongeldige regel: {$a}';
$string['resume_desc'] = 'Je hebt een recente chat. Ga verder waar je gebleven was, of start een nieuwe.';
$string['resume_lastmessage'] = 'Laatste bericht {$a} geleden';
$string['resume_resume'] = 'Laatste chat hervatten';
$string['resume_title'] = 'Welkom terug';
$string['sendmessage'] = 'Verzenden';
$string['settings'] = 'Instellingen van de AI-agent';
$string['showallfiles'] = 'Alles tonen';
$string['skill_add'] = 'Vaardigheid toevoegen';
$string['skill_edit'] = 'Vaardigheid bewerken';
$string['skill_save_close'] = 'Opslaan en sluiten';
$string['skill_save_preview'] = 'Opslaan en bekijken';
$string['skill_saved'] = 'Vaardigheid opgeslagen.';
$string['skilladd_aitip'] = 'In plaats van dit met de hand in te vullen, kun je de AI-agent vragen de vaardigheid voor je te bouwen: hij vindt de juiste functies en stelt de instructies op. <a href="{$a}">Open de AI-agent</a>.';
$string['skillcapabilities_help'] = 'Afgeleid uit de hoofdfuncties van de vaardigheid: een gebruiker kan de vaardigheid alleen gebruiken als hij minstens één van deze mogelijkheden in een of andere context op de site heeft. De lijst combineert de vereiste mogelijkheden van alle hoofdfuncties.';
$string['skillcapabilities_none'] = 'Geen. De vaardigheid is beschikbaar voor alle gebruikers.';
$string['skillconfigured'] = 'Maskers';
$string['skilldeleted'] = 'Vaardigheid "{$a}" verwijderd.';
$string['skilldescription'] = 'Beschrijving';
$string['skilldescription_help'] = 'Waar de vaardigheid voor bedoeld is, zodat de assistent weet wanneer hij haar moet laden. Beschrijf de taak of het onderwerp waar het om gaat, niet de stappen die worden uitgevoerd. De tekst verschijnt zowel in de lijst met vaardigheden (voor mensen) als in de systeemprompt (voor de assistent).';
$string['skillexists'] = 'Er bestaat al een vaardigheid met de korte naam "{$a}".';
$string['skillimport_badmasks'] = 'De velden "mainfunctions" en "otherfunctions" moeten elk een lijst met maskers bevatten.';
$string['skillimport_badshortname'] = 'Elke vaardigheid heeft een geldige shortname nodig (letters, cijfers, koppelteken, underscore).';
$string['skillimport_invalidjson'] = 'Het geüploade bestand bevat geen geldige JSON voor een vaardigheid.';
$string['skillimport_missingfield'] = 'Verplicht veld ontbreekt: {$a}.';
$string['skillimported'] = 'Vaardigheid "{$a}" geïmporteerd.';
$string['skillinstructions'] = 'Instructies';
$string['skillinstructions_help'] = 'Aanwijzingen die met de vaardigheid in de chat worden geladen. Neem alleen op wat niet vanzelf spreekt: de assistent ziet elke geladen functie met haar beschrijving, herhaal dus niet wat een functie doet en herinner hem niet aan voor de hand liggende parameters. Leg de volgorde van de werkwijze vast, de keuzes en de valkuilen die de beschrijvingen niet dekken, en begin stappen die maar soms gelden met "Als ...".';
$string['skillloadedevent'] = 'Vaardigheid geladen · {$a}';
$string['skillmainfunctions'] = 'Hoofdfuncties';
$string['skillmainfunctions_help'] = 'Een beperkte set maskers die de belangrijkste aanmaak- en wijzigingsfuncties van de vaardigheid selecteert. De mogelijkheden van deze functies bepalen aan wie de vaardigheid wordt aangeboden: alleen aan gebruikers die tot minstens één ervan toegang hebben. Elk masker past op een functienaam of op een patroon van component en naam ("*" is een jokerteken; een voorgezet "~" haalt treffers weg). Laat leeg om de vaardigheid aan iedereen aan te bieden.';
$string['skillmatched'] = 'Treffers ({$a})';
$string['skillmisconfigured'] = 'Momenteel voor niemand beschikbaar: geen van de hoofdfuncties leidt tot een ingeschakelde functie.';
$string['skillname'] = 'Naam';
$string['skillname_help'] = 'Een korte, goed leesbare weergavenaam voor de vaardigheid, die in de lijst met vaardigheden wordt getoond.';
$string['skillnomatch'] = 'Geen enkele ingeschakelde functie past bij deze patronen.';
$string['skillnotfound'] = 'Geen vaardigheid gevonden: {$a}.';
$string['skillotherfunctions'] = 'Overige functies';
$string['skillotherfunctions_help'] = 'Maskers voor de overige functies die de vaardigheid meebrengt: leesfuncties, hulpfuncties of een hele component. Dezelfde schrijfwijze als bij de hoofdfuncties, maar ze bepalen niet aan wie de vaardigheid wordt aangeboden. Laat leeg als de vaardigheid geen extra functies nodig heeft.';
$string['skills_intro'] = '<p>Een vaardigheid bundelt gespecialiseerde instructies voor een bepaalde taak met een lijst van functies die daarvoor worden aanbevolen. Gebruik vaardigheden voor veelvoorkomende taken met meerdere stappen waarbij de AI-agent in de war raakt of de juiste functies niet vindt, of voor taken die eigen zijn aan jouw organisatie.</p><p>De lijst met vaardigheden en hun beschrijvingen is altijd beschikbaar voor de AI-agent, die zelf een vaardigheid laadt zodra hij vindt dat er een bij het verzoek van de gebruiker past. Een vaardigheid is alleen beschikbaar voor gebruikers die tot minstens één van haar hoofdfuncties toegang hebben. Een vaardigheid die voor docenten is gemaakt, is bijvoorbeeld niet zichtbaar voor studenten.</p>';
$string['skillshortname'] = 'Korte naam';
$string['skillshortname_help'] = 'Een vaste machinenaam, uniek binnen de site: alleen letters, cijfers, koppelteken en underscore. Hij kan niet meer worden gewijzigd nadat de vaardigheid is aangemaakt.';
$string['skilltoobroad'] = 'Past op {$a} functies, dat is mogelijk te breed. Overweeg de functiemaskers te versmallen.';
$string['skillunavailable'] = 'Niet beschikbaar';
$string['skillupdated'] = 'Vaardigheid "{$a}" bijgewerkt.';
$string['switchview'] = 'Weergave wisselen';
$string['systeminstruction'] = 'Eigen systeeminstructies';
$string['systeminstruction_desc'] = 'Eigen instructies die bij elk verzoek aan het AI-model worden meegestuurd en die zijn gedrag, toon en mogelijkheden bepalen. Laat leeg om de ingebouwde standaard te gebruiken (hieronder getoond). Je kunt {siteurl} (URL van de site), {userid} (ID van de huidige gebruiker) en {date} (datum van vandaag, ISO-formaat) als plaatshouders gebruiken; ze worden tijdens de uitvoering vervangen. Standaardinstructies:{$a->default}

Wordt altijd aan de systeeminstructies toegevoegd (aan de standaardinstructies en aan eigen instructies):{$a->context}';
$string['tab_functions'] = 'Functies';
$string['tab_placements'] = 'Plaatsingen';
$string['tab_skills'] = 'Vaardigheden';
$string['tagarea_tool_aiagent_functions'] = 'Tags voor functies van de AI-agent';
$string['task_cleanup_chats'] = 'Oude chats van de AI-agent verwijderen';
$string['task_purge_provider_data'] = 'Chatgegevens van de AI-agent bij de AI-provider verwijderen';
$string['task_revalidate_license'] = 'Licentie van de AI-agent opnieuw valideren';
$string['thinking'] = 'De AI-agent denkt na...';
$string['timecreated'] = 'Aangemaakt op';
$string['timelastactivity'] = 'Laatste activiteit';
$string['timemodified'] = 'Laatst gewijzigd';
$string['tryagain'] = 'Opnieuw proberen';
$string['usage_completiontokens'] = 'Uitvoertokens';
$string['usage_model'] = 'Model';
$string['usage_prompttokens'] = 'Invoertokens';
$string['usage_provider'] = 'Provider';
$string['usage_totaltokens'] = 'Totaal tokens';
$string['viewdetails'] = 'Details bekijken';
$string['viewtype_fullscreen'] = 'Volledig scherm';
$string['viewtype_overlay'] = 'Overlay';
$string['viewtype_sidebar'] = 'Zijbalk';
$string['viewtypes'] = 'Beschikbare weergaven';
$string['viewtypes_alldisabled_warning'] = 'De AI-agent is voor niemand beschikbaar, omdat alle weergaven in de <a href="{$a}">instellingen</a> zijn uitgeschakeld.';
$string['viewtypes_desc'] = 'De chatweergaven die gebruikers kunnen openen: een kleine overlay in de hoek van de pagina, een zijbalk naast de pagina-inhoud en de chatpagina op volledig scherm. Vink alles uit om de AI-agent tijdelijk voor alle gebruikers uit te schakelen.';
$string['viewtypes_unavailable'] = 'De AI-agent is momenteel niet beschikbaar.';
$string['welcomedesc'] = 'Vraag de AI-agent naar je site, cursussen, gebruikers of inhoud. Hij kan lezen en, met jouw goedkeuring, wijzigingen aanbrengen.';
$string['welcometitle'] = 'Welkom, {$a}';

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
 * Swedish language pack for AI agent.
 * Last updated: 2026-08-03
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'Tilläggsplugin';
$string['aiagent:autoapproveall'] = 'Välja läget ”Alla” för autogodkännande, som kör varje funktionsanrop utan bekräftelse';
$string['aiagent:usechat'] = 'Starta chattar med AI-agenten (styr var en chatt kan startas; begränsar inte vilka data chatten kommer åt när den väl har startats)';
$string['allowfeedback'] = 'Tillåt återkoppling';
$string['allowfeedback_desc'] = 'När detta är aktiverat kan användare bedöma assistentens svar och rapportera funktionsanrop som misslyckats. Det som skickas in går till utvecklarna av AI-agenten (inte till någon LLM) så att de kan förbättra hur Moodles funktioner anropas. Endast det bedömda utbytet skickas, inte hela chatten, och användaren kan redigera texten innan den skickas. Inaktivera detta på webbplatser med strikta regler för utgående trafik.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Aktivera verktyget web fetch';
$string['anthropic_web_fetch_desc'] = 'Låter Claude hämta externa URL:er på serversidan via Anthropics verktyg web_fetch. Användbart när chatten hänvisar till offentliga webbsidor som modellen bör läsa. Filer på den här Moodle-webbplatsen hanteras separat via funktionen read_file (som laddar upp dem till Anthropics Files API vid behov), så att inaktivera web_fetch påverkar inte åtkomsten till kursresurser eller bilagor.';
$string['attachedfiles'] = 'Bifogade filer';
$string['attachfile'] = 'Bifoga fil';
$string['autoapprove'] = 'Autogodkännande';
$string['autoapprove_all'] = 'Alla (använd med försiktighet)';
$string['autoapprove_all_desc'] = 'Hoppa över varje bekräftelse';
$string['autoapprove_all_disabled'] = 'Du har inte behörighet att använda det här läget.';
$string['autoapprove_all_short'] = 'Alla';
$string['autoapprove_header'] = 'Godkänn funktionsanrop automatiskt';
$string['autoapprove_none'] = 'Inga';
$string['autoapprove_none_desc'] = 'Fråga före varje funktionsanrop';
$string['autoapprove_readonly'] = 'Endast läsning';
$string['autoapprove_readonly_desc'] = 'Godkänn läsningar automatiskt, fråga vid skrivningar';
$string['autoapprove_safe'] = 'Säkra';
$string['autoapprove_safe_desc'] = 'Godkänn åtgärder som inte ändrar webbplatsen';
$string['autoapprove_safe_examples'] = 'Läsningar samt storleksändring av bilagor, bildgenerering, sändning av filer till LLM:en med mera.';
$string['backtoconfiguration'] = 'Tillbaka till konfigurationen av AI-agenten';
$string['builtinfunction'] = 'Medföljande';
$string['bulk_disabled'] = '{$a} funktion(er) inaktiverade';
$string['bulk_disableselected'] = 'Inaktivera valda';
$string['bulk_enabled'] = '{$a} funktion(er) aktiverade';
$string['bulk_enableselected'] = 'Aktivera valda';
$string['bulk_withselected'] = 'Med valda funktioner';
$string['capabilities'] = 'Behörigheter';
$string['chat_namelink'] = 'Namn med länk';
$string['chatfrozen'] = 'Färdigheterna i den här chatten är inte längre tillgängliga, så den kan inte fortsätta. Starta en ny chatt i stället.';
$string['chathelpcontent'] = '<p>AI-agenten kan läsa och ändra innehåll på den här webbplatsen åt dig. De flesta åtgärder kräver ditt godkännande innan de utförs. Du kan byta läge för autogodkännande i skrivfältet för att lätta på eller skärpa det.</p>
<p>Bifoga filer genom att dra och släppa, klistra in eller klicka på gemsymbolen. Skriv sedan din fråga och tryck på <strong>Skicka</strong>. Tryck på Enter för att skicka, eller Skift och Enter för en ny rad.</p><p>AI kan göra misstag. Kontrollera resultaten.</p>';
$string['chatnopermission'] = 'Den här chatten startades i en del av webbplatsen där du inte längre har åtkomst till AI-agenten, så den kan inte fortsätta.';
$string['chatnostartpermission'] = 'Du har inte behörighet att starta en chatt här. Öppna AI-agenten från en sida där den erbjuds.';
$string['chatretention'] = 'Behåll chattar i';
$string['chatretention_desc'] = 'Chattar utan aktivitet under så lång tid tas bort från användarnas chatthistorik, deras bifogade filer raderas från den här webbplatsen och en begäran skickas om att radera de chattdata som AI-leverantören lagrar (sparade svar och uppladdade filer). Radering hos leverantören sker efter bästa förmåga och kan inte garanteras; ställ in en motsvarande policy för datalagring i ditt konto hos leverantören också. Meddelanden och användningsuppgifter behålls för rapportering tills lagringstiden för chattloggar nedan har löpt ut. Ange 0 för att behålla chattar för alltid.';
$string['closeconfirm_body'] = 'Att stänga fönstret tar inte bort chatten. Du kan öppna den igen när som helst från menyn Tidigare chattar. Chattar tas bort automatiskt efter {$a} dagar.';
$string['closeconfirm_body_noretention'] = 'Att stänga fönstret tar inte bort chatten. Du kan öppna den igen när som helst från menyn Tidigare chattar.';
$string['closeconfirm_close'] = 'Stäng chatten';
$string['closeconfirm_dontshowagain'] = 'Visa inte detta igen';
$string['closeconfirm_title'] = 'Stänga den här chatten?';
$string['component'] = 'Komponent';
$string['component_filesandimages'] = 'Hantering av filer och bilder';
$string['configuration'] = 'Konfiguration av AI-agenten';
$string['confirmdeleteskill'] = 'Är du säker på att du vill ta bort den här färdigheten?';
$string['contextevent_opened'] = 'Öppnad från {$a}';
$string['contextevent_page'] = 'Sida · {$a}';
$string['copyresponse'] = 'Kopiera svaret';
$string['copyurl'] = 'Kopiera URL';
$string['datasource_chats'] = 'AI-agentens chattar';
$string['datasource_usage'] = 'AI-agentens användning';
$string['deletechat_menu'] = 'Ta bort chatten';
$string['deletechat_named'] = 'Ta bort chatten: {$a}';
$string['disablefunction'] = 'Inaktivera den här funktionen';
$string['dragtoresize'] = 'Dra för att ändra storlek';
$string['dynamicdiscovery'] = 'Dynamisk funktionssökning';
$string['dynamicdiscovery_automatic'] = 'Automatisk';
$string['dynamicdiscovery_desc'] = 'Optimera tokenanvändningen genom att bara söka fram funktioner när de behövs. Detta rekommenderas om du har många webbtjänstfunktioner aktiverade. I automatiskt läge slås det på när fler än {$a} funktioner är tillgängliga. Vissa AI-leverantörer har en gräns för antalet funktioner (OpenAI har till exempel en gräns på 128).';
$string['dynamicdiscovery_off'] = 'Av';
$string['dynamicdiscovery_on'] = 'På';
$string['enabled'] = 'Aktiverad';
$string['enablefunction'] = 'Aktivera den här funktionen';
$string['entity_aiagentfunction'] = 'AI-agentens funktion';
$string['entity_chat'] = 'Chatt';
$string['entity_externalfunction'] = 'Webbtjänstfunktion';
$string['entity_message'] = 'Meddelande';
$string['entity_placement'] = 'Placering';
$string['entity_skill'] = 'Färdighet';
$string['entity_usage'] = 'Tokenanvändning';
$string['error_interrupted_function'] = 'Ett funktionsanrop avbröts innan det hann slutföras. Det kan ha gjort ändringar delvis; kontrollera läget innan du försöker igen.';
$string['error_interrupted_llm'] = 'Kommunikationen med AI-leverantören avbröts. Klicka på ”Försök igen” för att göra om begäran.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'Meddelandet får inte vara tomt.';
$string['errorfullscreendisabled'] = 'Chattvyn i helskärm är inte aktiverad på den här webbplatsen.';
$string['errorinvalidchat'] = 'Chatten hittades inte eller så nekades åtkomst.';
$string['errorinvalidname'] = 'Namnet får inte vara tomt.';
$string['errormissingfeedbackparams'] = 'Meddelande eller typ av återkoppling saknas.';
$string['errornopendingfunction'] = 'Det finns inga väntande funktionsanrop.';
$string['errornoprovider'] = 'Ingen AI-leverantör är tillgänglig. AI-agenten använder inställningarna för åtgärden ”Generate text”, så du måste se till att den är konfigurerad och aktiverad för minst en AI-leverantör i Webbplatsadministration.';
$string['errornoprovider_link'] = 'Konfigurera AI-leverantörer.';
$string['errornoretryresponse'] = 'Det finns inget misslyckat svar att försöka igen med.';
$string['errorpendingfunctions'] = 'Godkänn eller avslå de väntande funktionsanropen först.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} blockerade prompten: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} blockerade svaret: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} returnerade inget innehåll.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} returnerade inget innehåll (avslutsorsak: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'Slutpunkten för kommunikation med AI-leverantören är ogiltig eller går inte att nå.';
$string['errorresponses_endpoint_invalid_config'] = 'Pluginmodulen försökte använda {$a->endpoint} som slutpunkt för OpenAI Responses API, men begäran misslyckades. Gå till {$a->settingslink} och kontrollera slutpunkten för Responses API, eller byt API-typ till Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'Leverantören svarade: {$a}';
$string['errorresponses_provider_switch'] = 'Den här chatten kan inte fortsätta med OpenAI:s Responses API eftersom den startades med en annan AI-leverantör. Starta en ny chatt, eller byt tillbaka till den ursprungliga leverantören (eller till OpenAI Chat Completions) för att fortsätta med den här.';
$string['errorrootnotfound'] = 'Ursprungsmeddelandet för den här chatten hittades inte.';
$string['exportskill'] = 'Exportera';
$string['feedback_modal_freetextlabel'] = 'Något mer? (valfritt)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Vad gick fel? Var så detaljerad du vill.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Vad fungerade bra? (valfritt)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Vad var fel med det här funktionsanropet?';
$string['feedback_modal_intro_negative'] = 'Tack för att du berättar. Din återkoppling skickas till utvecklarna av AI-agenten (inte till AI-leverantören) så att de kan förbättra hur Moodles funktioner anropas.';
$string['feedback_modal_intro_positive'] = 'Tack! Din återkoppling skickas till utvecklarna av AI-agenten (inte till AI-leverantören) så att de kan behålla det som fungerar och förbättra det som inte gör det.';
$string['feedback_modal_intro_toolerror'] = 'Rapportera det här funktionsanropet som problematiskt. Din återkoppling skickas till utvecklarna av AI-agenten (inte till AI-leverantören) så att de kan åtgärda den underliggande webbtjänsten eller förbättra hur AI:n använder den.';
$string['feedback_modal_send'] = 'Skicka återkoppling';
$string['feedback_modal_sending'] = 'Skickar...';
$string['feedback_modal_snapshotlabel'] = 'Det här skickas (du kan redigera)';
$string['feedback_modal_title_positive'] = 'Berätta vad som fungerade';
$string['feedbackcat_negative_misunderstood'] = 'Missförstod min fråga';
$string['feedbackcat_negative_notfollowed'] = 'Följde inte instruktionerna';
$string['feedbackcat_negative_other'] = 'Något annat';
$string['feedbackcat_negative_wronginfo'] = 'Felaktig eller påhittad information';
$string['feedbackcat_negative_wrongtoolused'] = 'Använde fel funktion';
$string['feedbackcat_positive_accurate'] = 'Korrekt';
$string['feedbackcat_positive_goodexplanation'] = 'Tydlig förklaring';
$string['feedbackcat_positive_helpful'] = 'Hjälpsamt';
$string['feedbackcat_positive_other'] = 'Något annat';
$string['feedbackcat_positive_welltimed'] = 'Rätt funktion för uppgiften';
$string['feedbackcat_toolerror_misleadingresult'] = 'Resultatet var missvisande';
$string['feedbackcat_toolerror_other'] = 'Något annat';
$string['feedbackcat_toolerror_toolerror'] = 'Funktionen returnerade ett fel';
$string['feedbackcat_toolerror_wrongargs'] = 'Felaktiga argument';
$string['feedbackcat_toolerror_wrongtool'] = 'Fel funktion för uppgiften';
$string['feedbackdisabled'] = 'Insamling av återkoppling har inaktiverats av webbplatsadministratören.';
$string['feedbackfailed'] = 'Det gick inte att skicka återkopplingen. Försök igen senare.';
$string['feedbackflagfunctioncall'] = 'Rapportera det här funktionsanropet';
$string['feedbacksubmitted'] = 'Återkoppling skickad';
$string['feedbackthanks'] = 'Tack för din återkoppling!';
$string['feedbackthumbdown'] = 'Rapportera ett problem med det här svaret';
$string['feedbackthumbup'] = 'Det här svaret var till hjälp';
$string['feedbackvalidation_categoryrequired'] = 'Välj minst en kategori.';
$string['functionapprovecount'] = 'Godkänn {$a} anrop';
$string['functioncall_actions'] = 'Godkänn eller avslå funktionsanrop';
$string['functioncall_chip_action'] = 'Byt läge för autogodkännande';
$string['functioncalldetails'] = 'Detaljer om funktionsanropet';
$string['functiondeny'] = 'Avslå';
$string['functiondenyall'] = 'Avslå alla';
$string['functionloopguardbody'] = 'Den här funktionen har redan körts {$a} gånger med samma indata. Autogodkännandet är pausat på grund av en möjlig slinga; godkänn för att fortsätta.';
$string['functionloopguardheading'] = 'Upprepat anrop.';
$string['functionname'] = 'Funktionsnamn';
$string['functionparameters'] = 'Parametrar';
$string['functionresult'] = 'Resultat';
$string['functionresultdiscarded'] = 'Resultatet var för stort ({$a}) och kastades. Begränsa begäran genom att filtrera den, be om färre fält eller använda en mer specifik funktion. Att upprepa samma anrop ger samma fel.';
$string['functions_intro'] = '<p><b>Alla webbtjänstfunktioner passar inte för AI-agenten.</b> Vissa byggdes för kommunikation mellan klient och server (märkta AJAX) eller för användare som inte är inloggade (Utan inloggning), och för vissa finns bättre alternativ. En del AJAX-funktioner fungerar bra med AI-agenten, men de flesta gör det inte. AI-agenten ger funktioner i Moodles kärna och i standardpluginmoduler en relevanspoäng (1-10) och aktiverar dem som har 5 eller högre. Funktioner från tilläggsplugin poängsätts inte; i stället aktiveras alla deras funktioner som inte är AJAX automatiskt. Använd den här sidan för att gå igenom de tillgängliga funktionerna och aktivera eller inaktivera enskilda funktioner.</p><p>När en funktion kräver en eller flera behörigheter är den inte tillgänglig för användare som saknar minst en av dessa behörigheter i någon kontext på webbplatsen. För kärnan och standardpluginmoduler sätter AI-agenten dessa behörigheter korrekt. För tilläggsplugin hämtas behörigheterna från funktionsdefinitionen, och eftersom Moodle inte själv genomdriver kontrollen kan de vara felaktiga.</p>';
$string['functions_report'] = 'AI-agentens funktioner';
$string['functionstatus_denied'] = 'Avslaget';
$string['functionstatus_failed'] = 'Misslyckades';
$string['functionstatus_pending'] = 'Väntar på godkännande';
$string['functionstatus_processing'] = 'Körs...';
$string['functiontype'] = 'Typ';
$string['functiontype_help'] = 'Webbtjänstfunktionens typ och egenskaper:

* **Läsning**: hämtar data utan att ändra något
* **Skrivning**: skapar eller ändrar data
* **AJAX**: används internt av Moodle för anrop mellan klient och server, mindre lämplig som funktion för AI-agenten
* **Utan inloggning**: tillgänglig för användare som inte är inloggade, också mindre lämplig som funktion för AI-agenten';
$string['functiontype_read'] = 'Läsning';
$string['functiontype_write'] = 'Skrivning';
$string['gemini_api_generatecontent'] = 'generateContent (stabil)';
$string['gemini_api_interactions'] = 'Interactions API (beta)';
$string['gemini_api_type'] = 'API-typ';
$string['gemini_api_type_desc'] = 'Vilket Gemini-API som ska användas för chattar med flera omgångar. generateContent är den vanliga tillståndslösa slutpunkten och bygger upp hela meddelandelistan på nytt varje omgång. Interactions API är för närvarande i betaversion; det lagrar chattens tillstånd hos Google (så bara ny indata skickas varje omgång), men dess schema kan ändras utan förvarning.';
$string['gemini_builtin_code_execution'] = 'Aktivera verktyget Code Execution';
$string['gemini_builtin_code_execution_desc'] = 'Låter Gemini skriva och köra Python-kod i en sandlåda för att lösa matematik eller bearbeta data. Endast modeller från Gemini 3 och senare; ignoreras utan meddelande på Gemini 2.5 och äldre, eftersom de modellerna inte kan kombinera inbyggda verktyg med egna funktionsanrop.';
$string['gemini_builtin_google_search'] = 'Aktivera förankring i Google-sökning';
$string['gemini_builtin_google_search_desc'] = 'Låter Gemini förankra svaren i aktuella resultat från webbsökning. Endast modeller från Gemini 3 och senare; ignoreras utan meddelande på Gemini 2.5 och äldre, eftersom de modellerna inte kan kombinera inbyggda verktyg med egna funktionsanrop. Varje sökfråga debiteras separat.';
$string['gemini_builtin_url_context'] = 'Aktivera verktyget URL Context';
$string['gemini_builtin_url_context_desc'] = 'Låter Gemini läsa och analysera innehåll från offentliga URL:er som användaren nämner. Endast modeller från Gemini 3 och senare; ignoreras utan meddelande på Gemini 2.5 och äldre, eftersom de modellerna inte kan kombinera inbyggda verktyg med egna funktionsanrop. URL:erna måste vara offentligt tillgängliga (ingen localhost, ingen inloggning).';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = 'Vill du använda den här chatten sida vid sida med din webbplats? Dra <a href="{$a}">{$a}</a> till ett nytt fönster, eller högerklicka på länken och använd webbläsarens delade vy.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Fil {$a->size}, mått {$a->dimensions}. Förhandsvisning {$a->preview} ({$a->scale} %).';
$string['importskill'] = 'Importera färdigheter';
$string['importskill_addmore'] = 'Lägg till fler...';
$string['importskill_button'] = 'Importera {$a} färdigheter';
$string['importskill_buttonone'] = 'Importera 1 färdighet';
$string['importskill_choose'] = 'Välj filer...';
$string['importskill_drophint'] = 'Dra färdighetsfiler hit, eller använd knappen.';
$string['importskill_fileone'] = '1 fil vald';
$string['importskill_files'] = '{$a} filer valda';
$string['importskill_statusinvalid'] = 'Ingen färdighetsfil';
$string['importskill_statusnew'] = 'Ny färdighet';
$string['importskill_statusupdate'] = 'Uppdaterar {$a}';
$string['importskill_summarynew'] = '{$a} nya';
$string['importskill_summaryskipped'] = '{$a} överhoppade';
$string['importskill_summaryupdate'] = '{$a} att uppdatera';
$string['importskill_toolarge'] = 'Färdighetsdata är för stora (högst {$a}).';
$string['inlinefilecharlimit'] = 'Gräns för infogat filinnehåll';
$string['inlinefilecharlimit_desc'] = 'Största mängd av en textfil som kan bäddas in direkt i chatten när en fil läses infogat. Längre innehåll kortas av. Infogad leverans används när modellen begär det, och som reserv för AI-leverantörer som inte kan ta emot filer. Infogat innehåll skickas med chatthistoriken på nytt varje omgång, så en hög gräns ökar tokenanvändningen.';
$string['invalidparameter'] = 'Ogiltig parameter upptäckt: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Aktivera licens';
$string['licenseactivate_help'] = 'Ange licensnyckeln som du fick per e-post från LMSCloud. Licensnyckeln kan aktiveras på ett begränsat antal webbplatser (vanligen två). Du kan när som helst inaktivera den för att använda den på en annan webbplats.';
$string['licensedeactivate'] = 'Inaktivera';
$string['licensedeactivate_help'] = 'Inaktivera licensnyckeln på den här webbplatsen så att den kan användas på en annan webbplats.';
$string['licenseerror_deactivate'] = 'Det gick inte att inaktivera licensen. Servern kan vara tillfälligt otillgänglig; försök igen senare.';
$string['licenseerror_deactivate_forced'] = 'Den här licensen är angiven i serverkonfigurationen (config.php) och kan inte inaktiveras från den här sidan.';
$string['licenseerror_invalid'] = 'Licensnyckeln är ogiltig eller kunde inte aktiveras.';
$string['licenseerror_limit'] = 'Det finns inga lediga platser för den här licensnyckeln. Inaktivera en annan webbplats först och försök sedan igen.';
$string['licenseerror_transport'] = 'Det gick inte att nå licensservern. Kontrollera anslutningen och försök igen.';
$string['licensekey'] = 'Licensnyckel';
$string['licenselocked_expired'] = 'Den här webbplatsen har inte validerat sin licens på över 14 dagar. Kontrollera licensen igen för att återställa åtkomsten.';
$string['licenselocked_key_rejected'] = 'Den här licensnyckeln är inte längre giltig på den här webbplatsen.';
$string['licenselocked_url_mismatch'] = 'Webbadressen till den här webbplatsen har ändrats; licensinnehavaren måste godkänna den.';
$string['licensemanageinsettings'] = 'Hantera licensen i inställningarna för AI-agenten.';
$string['licenserecheck'] = 'Kontrollera igen';
$string['licensesetting'] = 'Licens för AI-agenten';
$string['licensesetting_desc'] = 'Aktivera, kontrollera igen eller inaktivera licensen för AI-agenten på den här webbplatsen.';
$string['licensestatus_materialsmissing'] = 'Licensen för AI-agenten är aktiv, men det nedladdade materialet saknas, så inga funktioner är tillgängliga. Kontrollera igen för att hämta det på nytt.';
$string['licensestatus_notactivated'] = 'Det krävs en licens för att använda AI-agenten på den här webbplatsen.';
$string['licensestatus_valid'] = 'Licensen för AI-agenten är aktiv.';
$string['loginrequired'] = 'Inloggning krävs';
$string['logretention'] = 'Behåll chattloggar i';
$string['logretention_desc'] = 'Meddelanden och uppgifter om tokenanvändning för chattar utan aktivitet under så lång tid raderas permanent från databasen. Detta gäller endast chattar som redan har tagits bort från chatthistoriken, antingen av användaren eller av inställningen ovan. Ange 0 för att behålla loggar för alltid.';
$string['maxfilesize'] = 'Största filstorlek för LLM:en';
$string['maxfilesize_desc'] = 'Hindra användare från att skicka filer som är för stora till LLM:en. Stora filer förbrukar token snabbt och driver upp kostnaderna. Filer över den här storleken avvisas med ett fel innan några byte lämnar webbplatsen.

AI-leverantörer avvisar ändå filer som överskrider deras egna gränser per begäran (Anthropic 32 MB, Gemini 50 MB infogat, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Största storlek på funktionsresultat';
$string['maxfunctionresultsize_desc'] = 'Största mängd data som en enskild funktion får returnera till AI-modellen. Vissa Moodle-funktioner saknar filter och returnerar alla användare eller alla kurser på webbplatsen, vilket översvämmar modellen och förbrukar token i varje följande omgång. Ett resultat över den här gränsen kastas och modellen uppmanas att begränsa begäran i stället. Ange noll för ingen gräns. Att läsa en fil infogat är undantaget; använd ”Gräns för infogat filinnehåll” för det.';
$string['newchat'] = 'Ny chatt';
$string['newchatchooser_blank_sub'] = 'Utan sammanhang. Allmän assistent.';
$string['newchatchooser_clone'] = 'Samma som den här chatten';
$string['newchatchooser_continue'] = 'Fortsätt där du var';
$string['newchatchooser_desc_default'] = 'Starta en ny chatt på den här sidan, eller fortsätt där du var.';
$string['newchatchooser_desc_full'] = 'Starta en allmän chatt, eller fortsätt där du var.';
$string['newchatchooser_desc_multi'] = 'Den här sidan har några utgångspunkter. Välj en, eller fortsätt där du var.';
$string['newchatchooser_error'] = 'Det gick inte att starta en ny chatt. Försök igen.';
$string['newchatchooser_none'] = 'Det finns ingen sida här där du kan starta en ny chatt.';
$string['newchatchooser_onthispage'] = 'På den här sidan:';
$string['newchatchooser_title'] = 'Starta en ny chatt';
$string['nfilesattached'] = '{$a} bifogade filer';
$string['nonauth'] = 'Utan inloggning';
$string['numfiles'] = '{$a} filer';
$string['numimages'] = '{$a} bilder';
$string['numotherfiles'] = '{$a} övriga';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'API-typ';
$string['openai_api_type_desc'] = 'Vilket OpenAI-API som ska användas för chattar med flera omgångar. Responses API håller chattens tillstånd på serversidan, så bara ny indata skickas varje omgång (lägre kostnad, enklare historik). Chat Completions bygger upp hela meddelandelistan på nytt vid varje begäran (bredare kompatibilitet med leverantörer).<br><br>Responses API stöds av: <strong>{$a}</strong>. Andra leverantörer faller utan meddelande tillbaka på Chat Completions oavsett den här inställningen.';
$string['openai_heading'] = 'OpenAI (eller kompatibel)';
$string['openlink'] = 'Öppna länken';
$string['placeholder'] = 'Skriv ett meddelande...';
$string['placement_add'] = 'Lägg till placering';
$string['placement_confirmdelete'] = 'Är du säker på att du vill ta bort den här placeringen?';
$string['placement_copyof'] = '{$a} (kopia)';
$string['placement_defaultname'] = 'AI-agent';
$string['placement_deleted'] = 'Placeringen har tagits bort.';
$string['placement_duplicated'] = 'Placeringen har duplicerats.';
$string['placement_edit'] = 'Redigera placering';
$string['placement_initialskills'] = 'Inledande färdigheter';
$string['placement_initialskills_help'] = 'Färdigheter som läses in automatiskt när chatten startar. Valfritt; agenten kan fortfarande läsa in vilken färdighet som helst vid behov. De färdigheter du anger styr också den här placeringen: användare som inte har åtkomst till någon av dem ser varken knappen eller menyalternativet, och om alla angivna färdigheter senare tas bort eller inaktiveras slutar placeringen att visas.';
$string['placement_intro'] = '<p>Med placeringar kan du erbjuda agenter som är anpassade för en viss uppgift. Varje placering lägger till knappen för AI-agenten på sidor vars URL matchar någon av dess masker, och kan starta chatten med förvalda inledande färdigheter och en välkomsttext. Om inledande färdigheter är angivna ser användare som inte har åtkomst till någon av dem inte knappen.</p><p>De inledande färdigheterna anger bara chattens utgångspunkt; agenten kan fortfarande komma åt alla aktiverade funktioner, inte bara färdigheternas.</p>';
$string['placement_location'] = 'Knappens position';
$string['placement_location_floating'] = 'Flytande knapp';
$string['placement_location_h1'] = 'Sidrubrik (H1)';
$string['placement_location_h2'] = 'Underrubrik (H2)';
$string['placement_menuheading'] = 'Fråga AI-agenten';
$string['placement_name'] = 'Namn';
$string['placement_name_help'] = 'Visas för användare: i användarmenyn, som knappens verktygstips och (när flera placeringar matchar samma sida) i knappens meny.';
$string['placement_save'] = 'Spara placering';
$string['placement_saved'] = 'Placeringen har sparats.';
$string['placement_skillmissing'] = 'Färdigheten hittades inte';
$string['placement_urlmask'] = 'URL-masker';
$string['placement_urlmask_help'] = 'Ett mönster per rad. Använd * som jokertecken, till exempel /course/view.php* eller /mod/*/view.php*. Observera: på sidor där en mer specifik placering använder samma position döljs en bred placering som matchar /*, så att användarna bara ser den mest relevanta.';
$string['placement_urlmask_invalid'] = 'Varje URL-mask måste börja med ett snedstreck: ”{$a}” gör inte det.';
$string['placement_welcome'] = 'Egen välkomsttext (valfritt)';
$string['placement_welcome_help'] = 'Ersätter standardmeddelandet på chattens startskärm. Lämna tomt för att använda standardtexten.';
$string['pluginname'] = 'AI-agent';
$string['previouschats'] = 'Tidigare chattar';
$string['privacy:metadata:aiprovider'] = 'Chattar skickas till den AI-leverantör som webbplatsadministratören har valt, till exempel OpenAI, Azure OpenAI, Google Gemini eller Anthropic, så att den kan generera ett svar. Pluginmodulen skickar varje begäran direkt till leverantören i stället för via Moodles AI-delsystem. Vilket företag som tar emot uppgifterna, och hur länge de sparas där, beror på vilken leverantör webbplatsen har konfigurerat och på leverantörens egna villkor.';
$string['privacy:metadata:aiprovider:files'] = 'Filer som användaren bifogar till en chatt, och filer som agenten läser från webbplatsen åt användaren, uppladdade så att modellen kan läsa deras innehåll.';
$string['privacy:metadata:aiprovider:messages'] = 'Chatthistoriken, som skickas på nytt varje omgång: användarens frågor, assistentens svar och resultaten av de Moodle-funktioner som agenten körde, vilka kan innehålla personuppgifter om andra användare.';
$string['privacy:metadata:aiprovider:userid'] = 'ID:t för den användare som för chatten, som ingår i instruktionerna till modellen så att den kan agera å användarens vägnar.';
$string['privacy:metadata:core_files'] = 'Filer som bifogats till AI-agentens meddelanden.';
$string['privacy:metadata:feedback'] = 'När återkoppling är aktiverad och en användare bedömer ett svar eller rapporterar ett misslyckat funktionsanrop skickas det bedömda utbytet till utvecklarna av AI-agenten så att agentens beteende kan förbättras. Ingenting skickas om inte användaren väljer att skicka in återkoppling, och funktionen kan stängas av helt med inställningen ”Tillåt återkoppling”.';
$string['privacy:metadata:feedback:freetext'] = 'Kommentaren som användaren frivilligt skriver när återkoppling skickas in, skickad som den skrevs.';
$string['privacy:metadata:feedback:snapshot'] = 'En utskrift av det bedömda utbytet: användarens fråga, assistentens svar och namnen på de funktioner som anropades. E-postadresser maskeras och funktionernas argument och resultat utelämnas, förutom agentens egna funktionssökningar. Användaren kan redigera texten innan den skickas in.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'Inställningen att inte visa bekräftelsedialogen vid stängning igen.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'Storleken som användaren gav chattpanelen som överlägg.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'Bredden som användaren gav chattpanelen som sidopanel.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'Den chattvy (överlägg, sidopanel eller helskärm) som användaren senast använde.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Chattar mellan en användare och AI-agenten. Chattar som användaren tar bort arkiveras i stället för att raderas, så att tokenanvändningen fortfarande kan följas upp.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'Tidpunkten då chatten arkiverades (togs bort av användaren), om tillämpligt.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'Tidpunkten då chatten skapades.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'När det senaste meddelandet sparades i chatten.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'Tidpunkten då chatten senast uppdaterades.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'Chattens namn, genererat från det första meddelandet.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'Användaren som äger chatten.';
$string['privacy:metadata:tool_aiagent_message'] = 'Enskilda meddelanden i en chatt, inklusive användarens frågor och AI:ns svar.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'Meddelandets innehåll.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Vem som skickade meddelandet: användaren, assistenten, systemet eller en funktion.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'Tidpunkten då meddelandet skapades.';
$string['privacy:metadata:tool_aiagent_usage'] = 'Tokenanvändning som registreras för varje AI-begäran, sparad för uppföljning av användningen.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'Antalet utdatatoken (completion) som använts.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'AI-modellen som hanterade begäran.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'Antalet indatatoken (prompt) som använts.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'AI-leverantören som hanterade begäran.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'Tidpunkten då begäran gjordes.';
$string['relevancescore'] = 'Relevanspoäng';
$string['relevancescore_help'] = 'Relevanspoängen visar hur väl en webbtjänstfunktion passar för AI-agenten, på en skala från 1 till 10.

**Höga poäng (7-10)** ges till funktioner som är tydligt användbara för en AI-assistent, till exempel att skapa kurser, registrera användare, söka efter innehåll eller hämta betyg.

**Medelhöga poäng (4-6)** är typiska för destruktiva eller oåterkalleliga åtgärder (som att ta bort kurser eller avregistrera användare) som är användbara men innebär högre risk, samt för nischfunktioner med begränsad användning.

**Låga poäng (1-3)** ges till funktioner som är avsedda för intern kommunikation mellan webbläsare och server, funktioner som inte kräver inloggning, föråldrade funktioner eller funktioner som dubblerar bättre alternativ.

**Poängen 0** betyder att funktionen ännu inte har bedömts. Det är vanligt för funktioner från tilläggsplugin.

Relevanspoängen användes för att sätta det ursprungliga standardvärdet för om varje funktion är aktiverad. De ursprungliga poängen för Moodles kärnkomponenter genererades av AI och kan behöva granskas manuellt.';
$string['removefilenamed'] = 'Ta bort fil: {$a}';
$string['renamechat'] = 'Byt namn på chatten';
$string['renamechat_label'] = 'Nytt namn på chatten';
$string['responses_endpoints'] = 'Egna slutpunkter för Responses API';
$string['responses_endpoints_desc'] = 'Åsidosätter slutpunkten för Responses API när en driftad eller proxad installation av OpenAI eller Azure OpenAI tillhandahåller den på en avvikande adress. Lämna tomt för att använda de inbyggda standardvärdena. Har ingen effekt när API-typen är Chat Completions.<br><br>
Till exempel https://din-resurs.azure.com/api/responses?api-version=preview. Slutpunkten för Files API härleds genom att /responses ersätts med /files och frågesträngen behålls, så uppladdningar går till https://din-resurs.azure.com/api/files?api-version=preview.<br><br>
Om du använder flera instanser av en leverantör anger du en URL per rad. Varje leverantör använder den rad vars värdnamn matchar dess egen API-slutpunkt.';
$string['responses_endpoints_invalidline'] = 'Varje rad måste vara en fullständig https-URL vars sökväg slutar med /responses; http accepteras endast för localhost. Ogiltig rad: {$a}';
$string['resume_desc'] = 'Du har en nyligen förd chatt. Fortsätt där du slutade, eller starta en ny.';
$string['resume_lastmessage'] = 'Senaste meddelandet för {$a} sedan';
$string['resume_resume'] = 'Återuppta senaste chatten';
$string['resume_title'] = 'Välkommen tillbaka';
$string['sendmessage'] = 'Skicka';
$string['settings'] = 'Inställningar för AI-agenten';
$string['showallfiles'] = 'Visa alla';
$string['skill_add'] = 'Lägg till färdighet';
$string['skill_edit'] = 'Redigera färdighet';
$string['skill_save_close'] = 'Spara och stäng';
$string['skill_save_preview'] = 'Spara och förhandsgranska';
$string['skill_saved'] = 'Färdigheten har sparats.';
$string['skilladd_aitip'] = 'I stället för att fylla i det här för hand kan du be AI-agenten att bygga färdigheten åt dig: den kan hitta rätt funktioner och skriva ett utkast till instruktionerna. <a href="{$a}">Öppna AI-agenten</a>.';
$string['skillcapabilities_help'] = 'Härlett från färdighetens huvudfunktioner: en användare kan bara använda färdigheten om användaren har minst en av dessa behörigheter i någon kontext på webbplatsen. Listan sammanfattar de behörigheter som alla huvudfunktioner kräver.';
$string['skillcapabilities_none'] = 'Inga. Färdigheten är tillgänglig för alla användare.';
$string['skillconfigured'] = 'Konfigurerade';
$string['skilldeleted'] = 'Färdigheten ”{$a}” har tagits bort.';
$string['skilldescription'] = 'Beskrivning';
$string['skilldescription_help'] = 'Vad färdigheten är till för, så att assistenten vet när den ska läsas in. Beskriv uppgiften eller området den gäller, inte stegen den utför. Den visas både i färdighetslistan (för människor) och i systemprompten (för assistenten).';
$string['skillexists'] = 'Det finns redan en färdighet med kortnamnet ”{$a}”.';
$string['skillimport_badmasks'] = 'Fälten ”mainfunctions” och ”otherfunctions” måste var för sig innehålla en lista med masksträngar.';
$string['skillimport_badshortname'] = 'Varje färdighet behöver ett giltigt kortnamn (bokstäver, siffror, bindestreck, understreck).';
$string['skillimport_invalidjson'] = 'Den uppladdade filen innehåller inte giltig färdighets-JSON.';
$string['skillimport_missingfield'] = 'Obligatoriskt fält saknas: {$a}.';
$string['skillimported'] = 'Färdigheten ”{$a}” har importerats.';
$string['skillinstructions'] = 'Instruktioner';
$string['skillinstructions_help'] = 'Vägledning som läses in i chatten när färdigheten läses in. Ta bara med sådant som inte är självklart: assistenten ser redan varje inläst funktion och dess beskrivning, så upprepa inte vad en funktion gör och påminn den inte om självklara parametrar. Fånga ordningen i arbetsflödet, valen och fallgroparna som beskrivningarna inte täcker, och inled steg som bara ibland gäller med ”Om ...”.';
$string['skillloadedevent'] = 'Färdighet inläst · {$a}';
$string['skillmainfunctions'] = 'Huvudfunktioner';
$string['skillmainfunctions_help'] = 'En snäv uppsättning masker som väljer ut färdighetens centrala funktioner för att skapa och uppdatera. Dessa funktioners behörigheter avgör vem färdigheten erbjuds: bara användare som kan komma åt minst en av dem. Varje mask matchar ett funktionsnamn eller ett mönster av komponent och namn (”*” är ett jokertecken; ett inledande ”~” tar bort träffar). Lämna tomt för att erbjuda färdigheten till alla.';
$string['skillmatched'] = 'Matchade ({$a})';
$string['skillmisconfigured'] = 'För närvarande inte tillgänglig för någon: ingen av dess huvudfunktioner leder till en aktiverad funktion.';
$string['skillname'] = 'Namn';
$string['skillname_help'] = 'Ett kort och läsbart visningsnamn för färdigheten, som visas i färdighetslistan.';
$string['skillnomatch'] = 'Ingen aktiverad funktion matchar dessa mönster.';
$string['skillnotfound'] = 'Ingen färdighet hittades: {$a}.';
$string['skillotherfunctions'] = 'Övriga funktioner';
$string['skillotherfunctions_help'] = 'Masker för de övriga funktioner som färdigheten tar med sig: läsningar, hjälpfunktioner eller en hel komponent. Samma syntax som för huvudfunktionerna, men dessa påverkar inte vem färdigheten erbjuds. Lämna tomt om färdigheten inte behöver några extra funktioner.';
$string['skills_intro'] = '<p>En färdighet samlar specialiserade instruktioner för en viss uppgift tillsammans med en lista över funktioner som rekommenderas för den. Använd färdigheter för vanliga uppgifter i flera steg där AI-agenten tenderar att bli förvirrad eller inte hittar rätt funktioner, eller för uppgifter som är särskilda för din organisation.</p><p>Listan över färdigheter och deras beskrivningar är alltid tillgänglig för AI-agenten, som själv läser in en färdighet när den bedömer att någon passar användarens begäran. En färdighet är bara tillgänglig för användare som kan komma åt minst en av dess huvudfunktioner. En färdighet som byggts för lärare syns till exempel inte för studenter.</p>';
$string['skillshortname'] = 'Kortnamn';
$string['skillshortname_help'] = 'Ett stabilt maskinnamn, unikt på hela webbplatsen: endast bokstäver, siffror, bindestreck och understreck. Det kan inte ändras efter att färdigheten har skapats.';
$string['skilltoobroad'] = 'Matchar {$a} funktioner, vilket kan vara för brett. Överväg att snäva in funktionsmaskerna.';
$string['skillunavailable'] = 'Inte tillgänglig';
$string['skillupdated'] = 'Färdigheten ”{$a}” har uppdaterats.';
$string['switchview'] = 'Byt vy';
$string['systeminstruction'] = 'Egna systeminstruktioner';
$string['systeminstruction_desc'] = 'Egna instruktioner som skickas till AI-modellen med varje begäran och som anger dess beteende, ton och förmågor. Lämna tomt för att använda den inbyggda standarden (visas nedan). Du kan använda {siteurl} (webbplatsens URL), {userid} (den aktuella användarens ID) och {date} (dagens datum, ISO-format) som platshållare; de ersätts vid körning. Standardinstruktioner:{$a->default}

Läggs alltid till i systeminstruktionerna (både standard och egna):{$a->context}';
$string['tab_functions'] = 'Funktioner';
$string['tab_placements'] = 'Placeringar';
$string['tab_skills'] = 'Färdigheter';
$string['tagarea_tool_aiagent_functions'] = 'Taggar för AI-agentens funktioner';
$string['task_cleanup_chats'] = 'Ta bort gamla chattar med AI-agenten';
$string['task_purge_provider_data'] = 'Ta bort AI-agentens chattdata hos AI-leverantören';
$string['task_revalidate_license'] = 'Validera AI-agentens licens på nytt';
$string['thinking'] = 'AI-agenten tänker...';
$string['timecreated'] = 'Skapad';
$string['timelastactivity'] = 'Senaste aktivitet';
$string['timemodified'] = 'Ändrad';
$string['tryagain'] = 'Försök igen';
$string['usage_completiontokens'] = 'Utdatatoken';
$string['usage_model'] = 'Modell';
$string['usage_prompttokens'] = 'Indatatoken';
$string['usage_provider'] = 'Leverantör';
$string['usage_totaltokens'] = 'Totalt antal token';
$string['viewdetails'] = 'Visa detaljer';
$string['viewtype_fullscreen'] = 'Helskärm';
$string['viewtype_overlay'] = 'Överlägg';
$string['viewtype_sidebar'] = 'Sidopanel';
$string['viewtypes'] = 'Tillgängliga vyer';
$string['viewtypes_alldisabled_warning'] = 'AI-agenten är inte tillgänglig för någon eftersom alla vyer är inaktiverade i <a href="{$a}">inställningarna</a>.';
$string['viewtypes_desc'] = 'De chattvyer som användarna kan öppna: ett litet överlägg i sidans hörn, en sidopanel bredvid sidinnehållet och chattsidan i helskärm. Avmarkera alla för att tillfälligt stänga av AI-agenten för alla användare.';
$string['viewtypes_unavailable'] = 'AI-agenten är för närvarande inte tillgänglig.';
$string['welcomedesc'] = 'Fråga AI-agenten om din webbplats, dina kurser, användare eller innehåll. Den kan läsa och, med ditt godkännande, göra ändringar.';
$string['welcometitle'] = 'Välkommen, {$a}';

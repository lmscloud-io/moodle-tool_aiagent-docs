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
 * Norwegian language pack for AI agent.
 * Last updated: 2026-08-03
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'Tillegg';
$string['aiagent:autoapproveall'] = 'Velge modusen «Alle» for autogodkjenning, som kjører alle funksjonskall uten bekreftelse';
$string['aiagent:usechat'] = 'Starte chatter med KI-agenten (styrer hvor en chat kan startes; begrenser ikke hvilke data chatten får tilgang til når den først er startet)';
$string['allowfeedback'] = 'Tillat tilbakemeldinger';
$string['allowfeedback_desc'] = 'Når dette er slått på, kan brukerne vurdere svar fra assistenten og melde fra om mislykkede funksjonskall. Innsendingene går til utviklerne av KI-agent-pluginen (ikke til noen LLM), slik at de kan forbedre håndteringen av Moodle-funksjoner. Bare den vurderte utvekslingen sendes, ikke hele chatten, og brukeren kan redigere teksten før innsending. Slå dette av på portaler med strenge regler for utgående trafikk.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Slå på verktøyet «web fetch»';
$string['anthropic_web_fetch_desc'] = 'Lar Claude hente eksterne URL-er på tjenersiden via Anthropics verktøy web_fetch. Nyttig når chatten viser til offentlige nettsider som modellen bør lese. Filer på denne Moodle-portalen håndteres separat via funksjonen read_file (som laster dem opp til Files API hos Anthropic ved behov), så å slå av web_fetch påvirker ikke tilgangen til kursressurser eller vedlegg.';
$string['attachedfiles'] = 'Vedlagte filer';
$string['attachfile'] = 'Legg ved fil';
$string['autoapprove'] = 'Autogodkjenning';
$string['autoapprove_all'] = 'Alle (bruk med varsomhet)';
$string['autoapprove_all_desc'] = 'Hopp over alle bekreftelser';
$string['autoapprove_all_disabled'] = 'Du har ikke tillatelse til å bruke denne modusen.';
$string['autoapprove_all_short'] = 'Alle';
$string['autoapprove_header'] = 'Autogodkjenn funksjonskall';
$string['autoapprove_none'] = 'Ingen';
$string['autoapprove_none_desc'] = 'Spør før hvert funksjonskall';
$string['autoapprove_readonly'] = 'Kun lesing';
$string['autoapprove_readonly_desc'] = 'Godkjenn lesing automatisk, spør ved skriving';
$string['autoapprove_safe'] = 'Trygge';
$string['autoapprove_safe_desc'] = 'Godkjenn handlinger som ikke endrer portalen';
$string['autoapprove_safe_examples'] = 'Lesing, i tillegg til å endre størrelse på vedlegg, generere bilder, sende filer til LLM-en osv.';
$string['backtoconfiguration'] = 'Tilbake til oppsett av KI-agenten';
$string['builtinfunction'] = 'Innebygd';
$string['bulk_disabled'] = '{$a} funksjon(er) deaktivert';
$string['bulk_disableselected'] = 'Deaktiver valgte';
$string['bulk_enabled'] = '{$a} funksjon(er) aktivert';
$string['bulk_enableselected'] = 'Aktiver valgte';
$string['bulk_withselected'] = 'Med valgte funksjoner';
$string['capabilities'] = 'Kvalifikasjoner';
$string['chat_namelink'] = 'Navn med lenke';
$string['chatfrozen'] = 'Ferdighetene i denne chatten er ikke lenger tilgjengelige, så den kan ikke fortsettes. Start en ny chat i stedet.';
$string['chathelpcontent'] = '<p>KI-agenten kan lese og endre innhold på denne portalen på dine vegne. De fleste handlinger ber om din godkjenning før de kjøres. Du kan endre modus for autogodkjenning i skrivefeltet for å gjøre den mildere eller strengere.</p>
<p>Legg ved filer ved å dra og slippe, lime inn eller klikke på binderssymbolet. Skriv så forespørselen din og trykk <strong>Send</strong>. Trykk Enter for å sende, eller Skift og Enter for ny linje.</p><p>KI kan gjøre feil. Kontroller resultatene.</p>';
$string['chatnopermission'] = 'Denne chatten ble startet i et område av portalen der du ikke lenger har tilgang til KI-agenten, så den kan ikke fortsettes.';
$string['chatnostartpermission'] = 'Du har ikke tillatelse til å starte en chat her. Åpne KI-agenten fra en side der den tilbys.';
$string['chatretention'] = 'Behold chatter i';
$string['chatretention_desc'] = 'Chatter uten aktivitet i så lang tid fjernes fra brukernes chathistorikk, vedlagte filer slettes fra denne portalen, og det bes om sletting av chatdataene som er lagret hos KI-tilbyderen (lagrede svar og opplastede filer). Sletting hos tilbyderen skjer etter beste evne og er ikke garantert; sett opp en tilsvarende oppbevaringspolicy i tilbyderkontoen din også. Meldinger og bruksdata beholdes for rapportering til oppbevaringstiden for chatlogger nedenfor er utløpt. Sett til 0 for å beholde chatter for alltid.';
$string['closeconfirm_body'] = 'Å lukke vinduet sletter ikke chatten. Du kan åpne den igjen når som helst fra menyen Tidligere chatter. Chatter slettes automatisk etter {$a} dager.';
$string['closeconfirm_body_noretention'] = 'Å lukke vinduet sletter ikke chatten. Du kan åpne den igjen når som helst fra menyen Tidligere chatter.';
$string['closeconfirm_close'] = 'Lukk chat';
$string['closeconfirm_dontshowagain'] = 'Ikke vis dette igjen';
$string['closeconfirm_title'] = 'Lukke denne chatten?';
$string['component'] = 'Komponent';
$string['component_filesandimages'] = 'Behandling av filer og bilder';
$string['configuration'] = 'Oppsett av KI-agenten';
$string['confirmdeleteskill'] = 'Er du sikker på at du vil slette denne ferdigheten?';
$string['contextevent_opened'] = 'Åpnet fra {$a}';
$string['contextevent_page'] = 'Side · {$a}';
$string['copyresponse'] = 'Kopier svar';
$string['copyurl'] = 'Kopier URL';
$string['datasource_chats'] = 'Chatter med KI-agenten';
$string['datasource_usage'] = 'Bruk av KI-agenten';
$string['deletechat_menu'] = 'Slett chat';
$string['deletechat_named'] = 'Slett chat: {$a}';
$string['disablefunction'] = 'Deaktiver denne funksjonen';
$string['dragtoresize'] = 'Dra for å endre størrelse';
$string['dynamicdiscovery'] = 'Dynamisk funksjonssøk';
$string['dynamicdiscovery_automatic'] = 'Automatisk';
$string['dynamicdiscovery_desc'] = 'Optimaliser tokenbruken ved å hente inn funksjoner bare når det trengs. Dette anbefales hvis du har et stort antall webtjenestefunksjoner aktivert. I automatisk modus slås dette på hvis mer enn {$a} funksjoner er tilgjengelige. Noen KI-tilbydere har en grense for antall funksjoner (OpenAI har for eksempel en grense på 128).';
$string['dynamicdiscovery_off'] = 'Av';
$string['dynamicdiscovery_on'] = 'På';
$string['enabled'] = 'Aktivert';
$string['enablefunction'] = 'Aktiver denne funksjonen';
$string['entity_aiagentfunction'] = 'Funksjon i KI-agenten';
$string['entity_chat'] = 'Chat';
$string['entity_externalfunction'] = 'Webtjenestefunksjon';
$string['entity_message'] = 'Melding';
$string['entity_placement'] = 'Plassering';
$string['entity_skill'] = 'Ferdighet';
$string['entity_usage'] = 'Tokenbruk';
$string['error_interrupted_function'] = 'Et funksjonskall ble avbrutt før det var ferdig. Det kan ha gjort endringer delvis; kontroller tilstanden før du prøver på nytt.';
$string['error_interrupted_llm'] = 'Kommunikasjonen med KI-tilbyderen ble avbrutt. Klikk «Prøv på nytt» for å gjenta forespørselen.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'Meldingen kan ikke være tom.';
$string['errorfullscreendisabled'] = 'Chatvisning i fullskjerm er ikke aktivert på denne portalen.';
$string['errorinvalidchat'] = 'Chatten ble ikke funnet, eller tilgang ble nektet.';
$string['errorinvalidname'] = 'Navnet kan ikke være tomt.';
$string['errormissingfeedbackparams'] = 'Melding eller type tilbakemelding mangler.';
$string['errornopendingfunction'] = 'Det finnes ingen ventende funksjonskall.';
$string['errornoprovider'] = 'Ingen KI-tilbyder er tilgjengelig. KI-agenten bruker innstillingene for handlingen «Generer tekst», så du må sørge for at den er satt opp og slått på for minst én KI-tilbyder under Administrer portalen.';
$string['errornoprovider_link'] = 'Sett opp KI-tilbydere.';
$string['errornoretryresponse'] = 'Det finnes ikke noe mislykket svar å prøve på nytt.';
$string['errorpendingfunctions'] = 'Godkjenn eller avslå de ventende funksjonskallene først.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} blokkerte ledeteksten: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} blokkerte svaret: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} returnerte ikke noe innhold.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} returnerte ikke noe innhold (avslutningsårsak: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'Endepunktet for kommunikasjon med KI-tilbyderen er ugyldig eller kan ikke nås.';
$string['errorresponses_endpoint_invalid_config'] = 'Pluginen forsøkte å bruke {$a->endpoint} som endepunkt for OpenAI Responses API, men forespørselen mislyktes. Gå til {$a->settingslink} og kontroller endepunktet for Responses API, eller bytt API-type til Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'Tilbyderen svarte: {$a}';
$string['errorresponses_provider_switch'] = 'Denne chatten kan ikke fortsettes med Responses API fra OpenAI, fordi den ble startet med en annen KI-tilbyder. Start en ny chat, eller bytt tilbake til den opprinnelige tilbyderen (eller til OpenAI Chat Completions) for å fortsette denne.';
$string['errorrootnotfound'] = 'Fant ikke den første meldingen i denne chatten.';
$string['exportskill'] = 'Eksporter';
$string['feedback_modal_freetextlabel'] = 'Noe annet? (valgfritt)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Hva gikk galt? Vær så nøyaktig du vil.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Hva fungerte bra? (valgfritt)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Hva var galt med dette funksjonskallet?';
$string['feedback_modal_intro_negative'] = 'Takk for at du sier fra. Tilbakemeldingen din sendes til utviklerne av KI-agent-pluginen (ikke til KI-tilbyderen), slik at de kan forbedre håndteringen av Moodle-funksjoner.';
$string['feedback_modal_intro_positive'] = 'Takk! Tilbakemeldingen din sendes til utviklerne av KI-agent-pluginen (ikke til KI-tilbyderen), slik at de kan beholde det som fungerer, og forbedre det som ikke gjør det.';
$string['feedback_modal_intro_toolerror'] = 'Meld dette funksjonskallet som problematisk. Tilbakemeldingen din sendes til utviklerne av KI-agent-pluginen (ikke til KI-tilbyderen), slik at de kan reparere den underliggende webtjenesten eller forbedre måten KI-en bruker den på.';
$string['feedback_modal_send'] = 'Send tilbakemelding';
$string['feedback_modal_sending'] = 'Sender...';
$string['feedback_modal_snapshotlabel'] = 'Dette blir sendt (du kan redigere)';
$string['feedback_modal_title_positive'] = 'Fortell oss hva som fungerte';
$string['feedbackcat_negative_misunderstood'] = 'Misforsto spørsmålet mitt';
$string['feedbackcat_negative_notfollowed'] = 'Fulgte ikke instruksjonene';
$string['feedbackcat_negative_other'] = 'Noe annet';
$string['feedbackcat_negative_wronginfo'] = 'Feil eller oppdiktet informasjon';
$string['feedbackcat_negative_wrongtoolused'] = 'Brukte feil funksjon';
$string['feedbackcat_positive_accurate'] = 'Presist';
$string['feedbackcat_positive_goodexplanation'] = 'Tydelig forklaring';
$string['feedbackcat_positive_helpful'] = 'Nyttig';
$string['feedbackcat_positive_other'] = 'Noe annet';
$string['feedbackcat_positive_welltimed'] = 'Riktig funksjon for oppgaven';
$string['feedbackcat_toolerror_misleadingresult'] = 'Resultatet var villedende';
$string['feedbackcat_toolerror_other'] = 'Noe annet';
$string['feedbackcat_toolerror_toolerror'] = 'Funksjonen returnerte en feil';
$string['feedbackcat_toolerror_wrongargs'] = 'Feil argumenter';
$string['feedbackcat_toolerror_wrongtool'] = 'Feil funksjon for oppgaven';
$string['feedbackdisabled'] = 'Portaladministratoren har slått av innsamling av tilbakemeldinger.';
$string['feedbackfailed'] = 'Kunne ikke sende tilbakemeldingen. Prøv igjen senere.';
$string['feedbackflagfunctioncall'] = 'Meld dette funksjonskallet';
$string['feedbacksubmitted'] = 'Tilbakemelding sendt';
$string['feedbackthanks'] = 'Takk for tilbakemeldingen!';
$string['feedbackthumbdown'] = 'Meld fra om et problem med dette svaret';
$string['feedbackthumbup'] = 'Dette svaret var nyttig';
$string['feedbackvalidation_categoryrequired'] = 'Velg minst én kategori.';
$string['functionapprovecount'] = 'Godkjenn {$a} kall';
$string['functioncall_actions'] = 'Godkjenn eller avslå funksjonskall';
$string['functioncall_chip_action'] = 'Endre modus for autogodkjenning';
$string['functioncalldetails'] = 'Detaljer om funksjonskallet';
$string['functiondeny'] = 'Avslå';
$string['functiondenyall'] = 'Avslå alle';
$string['functionloopguardbody'] = 'Denne funksjonen har allerede kjørt {$a} ganger med samme inndata. Autogodkjenning er satt på pause på grunn av mulig gjentakelse; godkjenn for å fortsette.';
$string['functionloopguardheading'] = 'Gjentatt kall.';
$string['functionname'] = 'Funksjonsnavn';
$string['functionparameters'] = 'Parametere';
$string['functionresult'] = 'Resultat';
$string['functionresultdiscarded'] = 'Resultatet var for stort ({$a}) og ble forkastet. Begrens forespørselen ved å filtrere den, be om færre felter eller bruke en mer spesifikk funksjon. Å gjenta det samme kallet gir samme feil.';
$string['functions_intro'] = '<p><b>Ikke alle webtjenestefunksjoner passer for KI-agenten.</b> Noen ble laget for kommunikasjon mellom klient og tjener (merket AJAX) eller for brukere som ikke er pålogget (Uten pålogging), og for noen finnes det bedre alternativer. Enkelte AJAX-funksjoner fungerer godt sammen med KI-agenten, men de fleste gjør det ikke. KI-agent-pluginen gir funksjoner fra kjernen og fra standardplugins relevanspoeng (1-10) og aktiverer dem som får 5 eller mer. Funksjoner fra tilleggsplugins får ikke poeng; i stedet aktiveres alle funksjonene deres som ikke er AJAX, automatisk. Bruk denne siden til å gå gjennom de tilgjengelige funksjonene og aktivere eller deaktivere enkeltfunksjoner.</p><p>Når en funksjon krever én eller flere kvalifikasjoner, er den ikke tilgjengelig for brukere som mangler minst én av dem i en eller annen kontekst på portalen. For kjernen og for standardplugins setter KI-agent-pluginen disse kvalifikasjonene riktig. For tilleggsplugins hentes kvalifikasjonene fra funksjonsdefinisjonen, og siden Moodle ikke håndhever denne kontrollen selv, kan de være feil.</p>';
$string['functions_report'] = 'Funksjoner i KI-agenten';
$string['functionstatus_denied'] = 'Avslått';
$string['functionstatus_failed'] = 'Mislyktes';
$string['functionstatus_pending'] = 'Venter på godkjenning';
$string['functionstatus_processing'] = 'Kjører...';
$string['functiontype'] = 'Type';
$string['functiontype_help'] = 'Typen webtjenestefunksjon og egenskapene dens:

* **Lesing**: henter data uten å endre noe
* **Skriving**: oppretter eller endrer data
* **AJAX**: brukes internt av Moodle for forespørsler mellom klient og tjener, og passer sjeldnere som funksjon for KI-agenten
* **Uten pålogging**: tilgjengelig for brukere som ikke er pålogget, og passer også sjeldnere som funksjon for KI-agenten';
$string['functiontype_read'] = 'Lesing';
$string['functiontype_write'] = 'Skriving';
$string['gemini_api_generatecontent'] = 'generateContent (stabil)';
$string['gemini_api_interactions'] = 'Interactions API (beta)';
$string['gemini_api_type'] = 'API-type';
$string['gemini_api_type_desc'] = 'Hvilket Gemini-API som brukes til chatter med flere runder. generateContent er det vanlige tilstandsløse endepunktet og bygger hele meldingslisten på nytt i hver runde. Interactions API er foreløpig i betaversjon; det lagrer chattens tilstand hos Google (så bare ny inndata sendes i hver runde), men skjemaet kan endres uten varsel.';
$string['gemini_builtin_code_execution'] = 'Slå på verktøyet Code Execution';
$string['gemini_builtin_code_execution_desc'] = 'Lar Gemini skrive og kjøre Python-kode i en sandkasse for å løse regneoppgaver eller behandle data. Bare modeller fra Gemini 3 og nyere; innstillingen ignoreres stille på Gemini 2.5 og eldre, fordi de modellene ikke kan kombinere innebygde verktøy med egne funksjonskall.';
$string['gemini_builtin_google_search'] = 'Slå på forankring i Google-søk';
$string['gemini_builtin_google_search_desc'] = 'Lar Gemini forankre svarene i aktuelle resultater fra nettsøk. Bare modeller fra Gemini 3 og nyere; innstillingen ignoreres stille på Gemini 2.5 og eldre, fordi de modellene ikke kan kombinere innebygde verktøy med egne funksjonskall. Hvert søk faktureres separat.';
$string['gemini_builtin_url_context'] = 'Slå på verktøyet URL Context';
$string['gemini_builtin_url_context_desc'] = 'Lar Gemini lese og analysere innhold fra offentlige URL-er som brukeren nevner. Bare modeller fra Gemini 3 og nyere; innstillingen ignoreres stille på Gemini 2.5 og eldre, fordi de modellene ikke kan kombinere innebygde verktøy med egne funksjonskall. URL-ene må være offentlig tilgjengelige (ingen localhost, ingen pålogging).';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = 'Vil du bruke denne chatten side om side med portalen? Dra <a href="{$a}">{$a}</a> til et nytt vindu, eller høyreklikk den og bruk delt visning i nettleseren.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Fil {$a->size}, mål {$a->dimensions}. Forhåndsvisning {$a->preview} ({$a->scale} %).';
$string['importskill'] = 'Importer ferdigheter';
$string['importskill_addmore'] = 'Legg til flere...';
$string['importskill_button'] = 'Importer {$a} ferdigheter';
$string['importskill_buttonone'] = 'Importer 1 ferdighet';
$string['importskill_choose'] = 'Velg filer...';
$string['importskill_drophint'] = 'Dra ferdighetsfiler hit, eller bruk knappen.';
$string['importskill_fileone'] = '1 fil valgt';
$string['importskill_files'] = '{$a} filer valgt';
$string['importskill_statusinvalid'] = 'Ikke en ferdighetsfil';
$string['importskill_statusnew'] = 'Ny ferdighet';
$string['importskill_statusupdate'] = 'Oppdaterer {$a}';
$string['importskill_summarynew'] = '{$a} nye';
$string['importskill_summaryskipped'] = '{$a} hoppet over';
$string['importskill_summaryupdate'] = '{$a} skal oppdateres';
$string['importskill_toolarge'] = 'Ferdighetsdataene er for store (maksimalt {$a}).';
$string['inlinefilecharlimit'] = 'Grense for innebygd filinnhold';
$string['inlinefilecharlimit_desc'] = 'Hvor mye av en tekstfil som kan bygges direkte inn i chatten når en fil leses innebygd. Lengre innhold kuttes. Innebygging brukes når modellen ber om det, og som reserveløsning for KI-tilbydere som ikke kan ta imot filer. Innebygd innhold sendes på nytt sammen med chathistorikken i hver runde, så en høy grense øker tokenbruken.';
$string['invalidparameter'] = 'Ugyldig parameter oppdaget: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Aktiver lisens';
$string['licenseactivate_help'] = 'Skriv inn lisensnøkkelen du har fått på e-post fra LMSCloud. Lisensnøkkelen kan aktiveres på et begrenset antall portaler (vanligvis to). Du kan når som helst deaktivere den for å bruke den på en annen portal.';
$string['licensedeactivate'] = 'Deaktiver';
$string['licensedeactivate_help'] = 'Deaktiver lisensnøkkelen på denne portalen, slik at den kan brukes på en annen portal.';
$string['licenseerror_deactivate'] = 'Kunne ikke deaktivere lisensen. Tjeneren kan være midlertidig utilgjengelig; prøv igjen senere.';
$string['licenseerror_deactivate_forced'] = 'Denne lisensen er satt i tjenerkonfigurasjonen (config.php) og kan ikke deaktiveres fra denne siden.';
$string['licenseerror_invalid'] = 'Lisensnøkkelen er ugyldig eller kunne ikke aktiveres.';
$string['licenseerror_limit'] = 'Ingen ledige plasser for denne lisensnøkkelen. Deaktiver en annen portal først, og prøv så igjen.';
$string['licenseerror_transport'] = 'Kunne ikke nå lisenstjeneren. Kontroller tilkoblingen og prøv igjen.';
$string['licensekey'] = 'Lisensnøkkel';
$string['licenselocked_expired'] = 'Denne portalen har ikke validert lisensen sin på over 14 dager. Kontroller lisensen på nytt for å gjenopprette tilgangen.';
$string['licenselocked_key_rejected'] = 'Denne lisensnøkkelen er ikke lenger gyldig på denne portalen.';
$string['licenselocked_url_mismatch'] = 'Webadressen til denne portalen er endret; lisensinnehaveren må godkjenne den.';
$string['licensemanageinsettings'] = 'Administrer lisensen i innstillingene for KI-agenten.';
$string['licenserecheck'] = 'Kontroller på nytt';
$string['licensesetting'] = 'Lisens for KI-agenten';
$string['licensesetting_desc'] = 'Aktiver, kontroller på nytt eller deaktiver lisensen for KI-agenten på denne portalen.';
$string['licensestatus_materialsmissing'] = 'Lisensen for KI-agenten er aktiv, men det nedlastede materialet mangler, så ingen funksjoner er tilgjengelige. Kontroller på nytt for å hente det igjen.';
$string['licensestatus_notactivated'] = 'Det kreves en lisens for å bruke KI-agenten på denne portalen.';
$string['licensestatus_valid'] = 'Lisensen for KI-agenten er aktiv.';
$string['loginrequired'] = 'Krever pålogget bruker';
$string['logretention'] = 'Behold chatlogger i';
$string['logretention_desc'] = 'Meldinger og data om tokenbruk fra chatter uten aktivitet i så lang tid slettes permanent fra databasen. Dette gjelder bare chatter som allerede er slettet fra chathistorikken, enten av brukeren eller av innstillingen ovenfor. Sett til 0 for å beholde logger for alltid.';
$string['maxfilesize'] = 'Maksimal filstørrelse for LLM-en';
$string['maxfilesize_desc'] = 'Hindrer at brukere sender filer som er for store, til LLM-en. Store filer bruker opp tokener raskt og driver kostnadene opp. Filer over denne størrelsen avvises med en feilmelding før noen data forlater portalen.

KI-tilbydere avviser uansett filer som overskrider deres egne grenser per forespørsel (Anthropic 32 MB, Gemini 50 MB innebygd, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Maksimal størrelse på funksjonsresultat';
$string['maxfunctionresultsize_desc'] = 'Hvor mye data en enkelt funksjon kan returnere til KI-modellen. Noen Moodle-funksjoner har ingen filtrering og returnerer alle brukere eller alle kurs på portalen, noe som oversvømmer modellen og bruker opp tokener i hver påfølgende runde. Et resultat over denne grensen forkastes, og modellen får beskjed om å begrense forespørselen i stedet. Sett til null for ingen grense. Å lese en fil innebygd er unntatt; bruk «Grense for innebygd filinnhold» til det.';
$string['newchat'] = 'Ny chat';
$string['newchatchooser_blank_sub'] = 'Ingen kontekst. Generell assistent.';
$string['newchatchooser_clone'] = 'Samme som denne chatten';
$string['newchatchooser_continue'] = 'Fortsett der du slapp';
$string['newchatchooser_desc_default'] = 'Start en ny chat på denne siden, eller fortsett der du slapp.';
$string['newchatchooser_desc_full'] = 'Start en generell chat, eller fortsett der du slapp.';
$string['newchatchooser_desc_multi'] = 'Denne siden har flere utgangspunkt. Velg ett, eller fortsett der du slapp.';
$string['newchatchooser_error'] = 'Kunne ikke starte en ny chat. Prøv igjen.';
$string['newchatchooser_none'] = 'Det finnes ingen side her der du kan starte en ny chat.';
$string['newchatchooser_onthispage'] = 'På denne siden:';
$string['newchatchooser_title'] = 'Start en ny chat';
$string['nfilesattached'] = '{$a} filer vedlagt';
$string['nonauth'] = 'Uten pålogging';
$string['numfiles'] = '{$a} filer';
$string['numimages'] = '{$a} bilder';
$string['numotherfiles'] = '{$a} andre';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'API-type';
$string['openai_api_type_desc'] = 'Hvilket OpenAI-API som brukes til chatter med flere runder. Responses API holder chattens tilstand på tjenersiden, så bare ny inndata sendes i hver runde (lavere kostnad, enklere historikk). Chat Completions bygger hele meldingslisten på nytt ved hver forespørsel (bredere støtte blant tilbydere).<br><br>Responses API støttes av: <strong>{$a}</strong>. Andre tilbydere faller stille tilbake til Chat Completions uansett hva denne innstillingen er satt til.';
$string['openai_heading'] = 'OpenAI (eller kompatibel)';
$string['openlink'] = 'Åpne lenke';
$string['placeholder'] = 'Skriv en melding...';
$string['placement_add'] = 'Legg til plassering';
$string['placement_confirmdelete'] = 'Er du sikker på at du vil slette denne plasseringen?';
$string['placement_copyof'] = '{$a} (kopi)';
$string['placement_defaultname'] = 'KI-agent';
$string['placement_deleted'] = 'Plasseringen er slettet.';
$string['placement_duplicated'] = 'Plasseringen er duplisert.';
$string['placement_edit'] = 'Rediger plassering';
$string['placement_initialskills'] = 'Startferdigheter';
$string['placement_initialskills_help'] = 'Ferdigheter som lastes automatisk når chatten starter. Valgfritt; agenten kan fortsatt laste hvilken som helst ferdighet ved behov. Ferdighetene du velger, styrer også denne plasseringen: brukere som ikke har tilgang til noen av dem, ser verken knappen eller menyvalget, og hvis alle valgte ferdigheter senere fjernes eller deaktiveres, vises ikke plasseringen lenger.';
$string['placement_intro'] = '<p>Med plasseringer kan du tilby agenter som er tilpasset en bestemt oppgave. Hver plassering legger knappen for KI-agenten til på sider der URL-en passer med en av maskene, og kan starte chatten med forhåndsvalgte startferdigheter og velkomsttekst. Er det satt startferdigheter, vises ikke knappen for brukere som mangler tilgang til alle sammen.</p><p>Startferdighetene angir bare utgangspunktet for chatten; agenten har fortsatt tilgang til alle aktiverte funksjoner, ikke bare de som hører til ferdighetene.</p>';
$string['placement_location'] = 'Knappens posisjon';
$string['placement_location_floating'] = 'Flytende knapp';
$string['placement_location_h1'] = 'Sideoverskrift (H1)';
$string['placement_location_h2'] = 'Underoverskrift (H2)';
$string['placement_menuheading'] = 'Spør KI-agenten';
$string['placement_name'] = 'Navn';
$string['placement_name_help'] = 'Vises for brukerne: i brukermenyen, som verktøytips på knappen, og (når flere plasseringer passer til samme side) i menyen på knappen.';
$string['placement_save'] = 'Lagre plassering';
$string['placement_saved'] = 'Plasseringen er lagret.';
$string['placement_skillmissing'] = 'Ferdigheten ble ikke funnet';
$string['placement_urlmask'] = 'URL-masker';
$string['placement_urlmask_help'] = 'Ett mønster per linje. Bruk * som jokertegn, for eksempel /course/view.php* eller /mod/*/view.php*. Merk: på sider der en mer spesifikk plassering bruker samme posisjon, skjules en bred plassering som passer med /*, slik at brukerne bare ser den mest relevante.';
$string['placement_urlmask_invalid'] = 'Hver URL-maske må begynne med en skråstrek: «{$a}» gjør ikke det.';
$string['placement_welcome'] = 'Egen velkomsttekst (valgfritt)';
$string['placement_welcome_help'] = 'Erstatter den vanlige velkomstmeldingen på startskjermen i chatten. La stå tom for å bruke standarden.';
$string['pluginname'] = 'KI-agent';
$string['previouschats'] = 'Tidligere chatter';
$string['privacy:metadata:aiprovider'] = 'Chatter sendes til KI-tilbyderen som portaladministratoren har valgt, for eksempel OpenAI, Azure OpenAI, Google Gemini eller Anthropic, slik at den kan generere et svar. Pluginen sender hver forespørsel direkte til tilbyderen og ikke via KI-delsystemet i Moodle. Hvilket selskap som mottar dataene, og hvor lenge de oppbevares der, avhenger av tilbyderen portalen har satt opp, og av tilbyderens egne vilkår.';
$string['privacy:metadata:aiprovider:files'] = 'Filer brukeren legger ved en chat, og filer agenten leser fra portalen på vegne av brukeren, lastet opp slik at modellen kan lese innholdet i dem.';
$string['privacy:metadata:aiprovider:messages'] = 'Chathistorikken, som sendes på nytt i hver runde: brukerens forespørsler, assistentens svar og resultatene av Moodle-funksjonene agenten kjørte, som kan inneholde personopplysninger om andre brukere.';
$string['privacy:metadata:aiprovider:userid'] = 'ID-en til brukeren som fører chatten, tatt med i instruksjonene til modellen slik at den kan handle på vegne av den brukeren.';
$string['privacy:metadata:core_files'] = 'Filer som er vedlagt meldinger i KI-agenten.';
$string['privacy:metadata:feedback'] = 'Når tilbakemeldinger er slått på og en bruker vurderer et svar eller melder fra om et mislykket funksjonskall, sendes den vurderte utvekslingen til utviklerne av KI-agent-pluginen, slik at oppførselen til agenten kan forbedres. Ingenting sendes med mindre brukeren velger å sende inn en tilbakemelding, og funksjonen kan slås helt av med innstillingen «Tillat tilbakemeldinger».';
$string['privacy:metadata:feedback:freetext'] = 'Kommentaren brukeren eventuelt skriver ved innsending av tilbakemelding, sendt slik den er skrevet.';
$string['privacy:metadata:feedback:snapshot'] = 'En utskrift av den vurderte utvekslingen: brukerens spørsmål, assistentens svar og navnene på funksjonene den kalte. E-postadresser maskeres, og argumentene og resultatene fra disse funksjonene utelates, bortsett fra agentens egne funksjonssøk. Brukeren kan redigere teksten før innsending.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'Innstillingen om ikke å vise bekreftelsesdialogen ved lukking igjen.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'Størrelsen brukeren har gitt chatpanelet som overlegg.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'Bredden brukeren har gitt chatpanelet som sidepanel.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'Chatvisningen (overlegg, sidepanel eller fullskjerm) brukeren sist brukte.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Chatter mellom en bruker og KI-agenten. Chatter brukeren sletter, arkiveres i stedet for å fjernes, slik at tokenbruken fortsatt kan spores.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'Tidspunktet chatten ble arkivert (slettet av brukeren), hvis aktuelt.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'Tidspunktet chatten ble opprettet.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Når den siste meldingen ble lagret i chatten.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'Tidspunktet chatten sist ble oppdatert.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'Navnet på chatten, generert fra den første meldingen.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'Brukeren som eier chatten.';
$string['privacy:metadata:tool_aiagent_message'] = 'Enkeltmeldinger i en chat, inkludert forespørslene fra brukeren og svarene fra KI-en.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'Innholdet i meldingen.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Hvem som sendte meldingen: brukeren, assistenten, systemet eller en funksjon.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'Tidspunktet meldingen ble opprettet.';
$string['privacy:metadata:tool_aiagent_usage'] = 'Tokenbruk registrert for hver KI-forespørsel, oppbevart for å spore bruken.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'Antall utdatatokener (fullføringstokener) som ble brukt.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'KI-modellen som behandlet forespørselen.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'Antall inndatatokener (ledeteksttokener) som ble brukt.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'KI-tilbyderen som behandlet forespørselen.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'Tidspunktet forespørselen ble gjort.';
$string['relevancescore'] = 'Relevanspoeng';
$string['relevancescore_help'] = 'Relevanspoengene angir hvor godt en webtjenestefunksjon egner seg for KI-agenten, på en skala fra 1 til 10.

**Høye poeng (7-10)** gis til funksjoner som er tydelig nyttige for en KI-assistent, for eksempel å opprette kurs, melde inn brukere, søke etter innhold eller hente karakterer.

**Middels poeng (4-6)** er typisk for destruktive eller uopprettelige operasjoner (som å slette kurs eller melde brukere ut) som er nyttige, men som innebærer høyere risiko, og for smale funksjoner med begrenset bruksområde.

**Lave poeng (1-3)** gis til funksjoner som er laget for intern kommunikasjon mellom nettleser og tjener, funksjoner som ikke krever pålogging, utdaterte funksjoner eller funksjoner som dupliserer bedre alternativer.

**0 poeng** betyr at funksjonen ennå ikke er vurdert. Det er vanlig for funksjoner fra tredjepartsplugins.

Relevanspoengene ble brukt til å sette den opprinnelige standarden for om hver funksjon er aktivert. De første poengene for komponenter i Moodle-kjernen ble generert av KI og kan trenge manuell gjennomgang.';
$string['removefilenamed'] = 'Fjern fil: {$a}';
$string['renamechat'] = 'Gi chatten nytt navn';
$string['renamechat_label'] = 'Nytt navn på chatten';
$string['responses_endpoints'] = 'Egendefinerte endepunkter for Responses API';
$string['responses_endpoints_desc'] = 'Overstyrer endepunktet for Responses API når en hostet eller proxyet installasjon av OpenAI eller Azure OpenAI tilbyr det på en annen adresse. La stå tom for å bruke de innebygde standardene. Har ingen virkning når API-typen er Chat Completions.<br><br>
For eksempel https://din-ressurs.azure.com/api/responses?api-version=preview. Endepunktet for Files API utledes ved å bytte ut /responses med /files og beholde spørrestrengen, så opplastinger går til https://din-ressurs.azure.com/api/files?api-version=preview.<br><br>
Hvis du bruker flere tilbyderinstanser, legg inn én URL per linje. Hver tilbyder bruker linjen der verten passer med tilbyderens eget API-endepunkt.';
$string['responses_endpoints_invalidline'] = 'Hver linje må være en fullstendig https-URL der stien slutter på /responses; http godtas bare for localhost. Ugyldig linje: {$a}';
$string['resume_desc'] = 'Du har en nylig chat. Fortsett der du slapp, eller start en ny.';
$string['resume_lastmessage'] = 'Siste melding for {$a} siden';
$string['resume_resume'] = 'Fortsett siste chat';
$string['resume_title'] = 'Velkommen tilbake';
$string['sendmessage'] = 'Send';
$string['settings'] = 'Innstillinger for KI-agenten';
$string['showallfiles'] = 'Vis alle';
$string['skill_add'] = 'Legg til ferdighet';
$string['skill_edit'] = 'Rediger ferdighet';
$string['skill_save_close'] = 'Lagre og lukk';
$string['skill_save_preview'] = 'Lagre og forhåndsvis';
$string['skill_saved'] = 'Ferdigheten er lagret.';
$string['skilladd_aitip'] = 'I stedet for å fylle ut dette for hånd kan du be KI-agenten om å lage ferdigheten for deg: den finner de riktige funksjonene og skriver et utkast til instruksjonene. <a href="{$a}">Åpne KI-agenten</a>.';
$string['skillcapabilities_help'] = 'Utledet fra hovedfunksjonene til ferdigheten: en bruker kan bare bruke ferdigheten hvis vedkommende har minst én av disse kvalifikasjonene i en eller annen kontekst på portalen. Listen samler de nødvendige kvalifikasjonene fra alle hovedfunksjonene.';
$string['skillcapabilities_none'] = 'Ingen. Ferdigheten er tilgjengelig for alle brukere.';
$string['skillconfigured'] = 'Konfigurert';
$string['skilldeleted'] = 'Ferdigheten «{$a}» er slettet.';
$string['skilldescription'] = 'Beskrivelse';
$string['skilldescription_help'] = 'Hva ferdigheten er til for, slik at assistenten vet når den skal lastes. Beskriv oppgaven eller området den gjelder, ikke trinnene den utfører. Teksten vises både i ferdighetslisten (for mennesker) og i systemledeteksten (for assistenten).';
$string['skillexists'] = 'Det finnes allerede en ferdighet med kortnavnet «{$a}».';
$string['skillimport_badmasks'] = 'Feltene «mainfunctions» og «otherfunctions» må hvert for seg være en liste med masker.';
$string['skillimport_badshortname'] = 'Hver ferdighet trenger et gyldig kortnavn (bokstaver, tall, bindestrek, understrek).';
$string['skillimport_invalidjson'] = 'Den opplastede filen er ikke gyldig ferdighets-JSON.';
$string['skillimport_missingfield'] = 'Obligatorisk felt mangler: {$a}.';
$string['skillimported'] = 'Ferdigheten «{$a}» er importert.';
$string['skillinstructions'] = 'Instruksjoner';
$string['skillinstructions_help'] = 'Veiledning som lastes inn i chatten når ferdigheten lastes. Ta bare med det som ikke er opplagt: assistenten ser allerede alle lastede funksjoner og beskrivelsene deres, så ikke gjenta hva en funksjon gjør, og ikke minn den på å sende opplagte parametere. Fang opp rekkefølgen i arbeidsflyten, valgene og fallgruvene som beskrivelsene ikke dekker, og innled trinn som bare gjelder av og til, med «Hvis ...».';
$string['skillloadedevent'] = 'Ferdighet lastet · {$a}';
$string['skillmainfunctions'] = 'Hovedfunksjoner';
$string['skillmainfunctions_help'] = 'Et snevert sett med masker som velger ut de sentrale funksjonene i ferdigheten for å opprette og endre. Kvalifikasjonene til disse funksjonene avgjør hvem ferdigheten tilbys til: bare brukere som har tilgang til minst én av dem. Hver maske passer med et funksjonsnavn eller et mønster av komponent og navn («*» er jokertegn, en «~» foran fjerner treff). La stå tom for å tilby ferdigheten til alle.';
$string['skillmatched'] = 'Treff ({$a})';
$string['skillmisconfigured'] = 'For tiden utilgjengelig for alle: ingen av hovedfunksjonene fører til en aktivert funksjon.';
$string['skillname'] = 'Navn';
$string['skillname_help'] = 'Et kort, lettlest visningsnavn for ferdigheten, som vises i ferdighetslisten.';
$string['skillnomatch'] = 'Ingen aktivert funksjon passer med disse mønstrene.';
$string['skillnotfound'] = 'Fant ingen ferdighet: {$a}.';
$string['skillotherfunctions'] = 'Andre funksjoner';
$string['skillotherfunctions_help'] = 'Masker for resten av funksjonene ferdigheten tar med seg: lesende funksjoner, hjelpefunksjoner eller en hel komponent. Samme skrivemåte som for hovedfunksjonene, men disse påvirker ikke hvem ferdigheten tilbys til. La stå tom hvis ferdigheten ikke trenger flere funksjoner.';
$string['skills_intro'] = '<p>En ferdighet samler spesialiserte instruksjoner for en bestemt oppgave med en liste over funksjoner som anbefales til den. Bruk ferdigheter til vanlige oppgaver med flere trinn der KI-agenten pleier å bli forvirret eller ikke finner de riktige funksjonene, eller til oppgaver som er spesielle for organisasjonen din.</p><p>Listen over ferdigheter og beskrivelsene deres er alltid tilgjengelig for KI-agenten, som selv laster en ferdighet når den mener at en passer til forespørselen fra brukeren. En ferdighet er bare tilgjengelig for brukere som har tilgang til minst én av hovedfunksjonene. En ferdighet laget for lærere vil for eksempel ikke være synlig for studenter.</p>';
$string['skillshortname'] = 'Kortnavn';
$string['skillshortname_help'] = 'Et fast maskinnavn, unikt på hele portalen: bare bokstaver, tall, bindestrek og understrek. Det kan ikke endres etter at ferdigheten er opprettet.';
$string['skilltoobroad'] = 'Passer med {$a} funksjoner, noe som kan være for vidt. Vurder å begrense funksjonsmaskene.';
$string['skillunavailable'] = 'Utilgjengelig';
$string['skillupdated'] = 'Ferdigheten «{$a}» er oppdatert.';
$string['switchview'] = 'Bytt visning';
$string['systeminstruction'] = 'Egne systeminstruksjoner';
$string['systeminstruction_desc'] = 'Egne instruksjoner som sendes til KI-modellen med hver forespørsel, og som fastsetter oppførselen, tonen og mulighetene dens. La stå tom for å bruke den innebygde standarden (vist nedenfor). Du kan bruke {siteurl} (URL-en til portalen), {userid} (ID-en til den innloggede brukeren) og {date} (dagens dato, ISO-format) som plassholdere; de erstattes ved kjøring. Standardinstruksjoner:{$a->default}

Legges alltid til systeminstruksjonene (både standard og egne):{$a->context}';
$string['tab_functions'] = 'Funksjoner';
$string['tab_placements'] = 'Plasseringer';
$string['tab_skills'] = 'Ferdigheter';
$string['tagarea_tool_aiagent_functions'] = 'Tagger for funksjoner i KI-agenten';
$string['task_cleanup_chats'] = 'Slett gamle chatter i KI-agenten';
$string['task_purge_provider_data'] = 'Slett chatdata fra KI-agenten hos KI-tilbyderen';
$string['task_revalidate_license'] = 'Valider lisensen for KI-agenten på nytt';
$string['thinking'] = 'KI-agenten tenker...';
$string['timecreated'] = 'Opprettet';
$string['timelastactivity'] = 'Siste aktivitet';
$string['timemodified'] = 'Sist endret';
$string['tryagain'] = 'Prøv på nytt';
$string['usage_completiontokens'] = 'Utdatatokener';
$string['usage_model'] = 'Modell';
$string['usage_prompttokens'] = 'Inndatatokener';
$string['usage_provider'] = 'Tilbyder';
$string['usage_totaltokens'] = 'Tokener totalt';
$string['viewdetails'] = 'Vis detaljer';
$string['viewtype_fullscreen'] = 'Fullskjerm';
$string['viewtype_overlay'] = 'Overlegg';
$string['viewtype_sidebar'] = 'Sidepanel';
$string['viewtypes'] = 'Tilgjengelige visninger';
$string['viewtypes_alldisabled_warning'] = 'KI-agenten er ikke tilgjengelig for noen, fordi alle visninger er slått av i <a href="{$a}">innstillingene</a>.';
$string['viewtypes_desc'] = 'Chatvisningene brukerne kan åpne: et lite overlegg i hjørnet av siden, et sidepanel ved siden av sideinnholdet, og chatsiden i fullskjerm. Fjern avkryssingen på alle for å slå av KI-agenten midlertidig for alle brukere.';
$string['viewtypes_unavailable'] = 'KI-agenten er for tiden ikke tilgjengelig.';
$string['welcomedesc'] = 'Spør KI-agenten om portalen din, om kurs, brukere eller innhold. Den kan lese og, med din godkjenning, gjøre endringer.';
$string['welcometitle'] = 'Velkommen, {$a}';

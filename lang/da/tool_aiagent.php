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
 * Danish language pack for AI agent.
 * Last updated: 2026-08-03
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'Yderligere plugin';
$string['aiagent:autoapproveall'] = 'Vælge tilstanden "Alle" for autogodkendelse, hvor alle funktionskald køres uden bekræftelse';
$string['aiagent:usechat'] = 'Starte chats med AI-agenten (styrer, hvor en chat kan startes; begrænser ikke, hvilke data chatten kan tilgå, når den først er startet)';
$string['allowfeedback'] = 'Tillad feedback';
$string['allowfeedback_desc'] = 'Når dette er aktiveret, kan brugerne bedømme assistentens svar og markere mislykkede funktionskald. Det indsendte sendes til udviklerne af AI-agent-pluginnet (ikke til en LLM), så de kan forbedre håndteringen af Moodle-funktionskald. Kun den bedømte ordveksling sendes, ikke hele chatten, og brugeren kan redigere teksten før indsendelse. Deaktiver dette på websteder med strenge regler for udgående trafik.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Aktiver værktøjet "web fetch"';
$string['anthropic_web_fetch_desc'] = 'Lader Claude hente eksterne URL-adresser på serversiden via Anthropics web_fetch-værktøj. Nyttigt, når chatten henviser til offentlige websider, som modellen skal læse. Filer på dette Moodle-websted håndteres separat via funktionen read_file (som uploader dem til Anthropics Files API efter behov), så deaktivering af web_fetch påvirker ikke adgangen til kursusmaterialer eller vedhæftede filer.';
$string['attachedfiles'] = 'Vedhæftede filer';
$string['attachfile'] = 'Vedhæft fil';
$string['autoapprove'] = 'Autogodkend';
$string['autoapprove_all'] = 'Alle (brug med omtanke)';
$string['autoapprove_all_desc'] = 'Spring alle bekræftelser over';
$string['autoapprove_all_disabled'] = 'Du har ikke rettigheder til at bruge denne tilstand.';
$string['autoapprove_all_short'] = 'Alle';
$string['autoapprove_header'] = 'Autogodkend funktionskald';
$string['autoapprove_none'] = 'Ingen';
$string['autoapprove_none_desc'] = 'Spørg før hvert funktionskald';
$string['autoapprove_readonly'] = 'Kun læsning';
$string['autoapprove_readonly_desc'] = 'Godkend læsninger automatisk, spørg ved skrivninger';
$string['autoapprove_safe'] = 'Sikker';
$string['autoapprove_safe_desc'] = 'Godkend automatisk handlinger, der ikke ændrer webstedet';
$string['autoapprove_safe_examples'] = 'Læsninger samt tilpasning af vedhæftede filers størrelse, billedgenerering, afsendelse af filer til LLM\'en osv.';
$string['backtoconfiguration'] = 'Tilbage til konfiguration af AI-agenten';
$string['builtinfunction'] = 'Indbygget';
$string['bulk_disabled'] = '{$a} funktion(er) deaktiveret';
$string['bulk_disableselected'] = 'Deaktiver valgte';
$string['bulk_enabled'] = '{$a} funktion(er) aktiveret';
$string['bulk_enableselected'] = 'Aktiver valgte';
$string['bulk_withselected'] = 'Med valgte funktioner';
$string['capabilities'] = 'Rettigheder';
$string['chat_namelink'] = 'Navn med link';
$string['chatfrozen'] = 'Denne chats skills er ikke længere tilgængelige, så den kan ikke fortsættes. Start en ny chat i stedet.';
$string['chathelpcontent'] = '<p>AI-agenten kan læse og ændre indhold på dette websted på dine vegne. De fleste handlinger beder om din godkendelse, før de udføres. Du kan skifte tilstand for autogodkendelse i skrivefeltet for at lempe eller stramme dette.</p>
<p>Vedhæft filer ved at trække og slippe dem, indsætte dem fra udklipsholderen eller klikke på papirclipsikonet. Skriv derefter din anmodning, og tryk på <strong>Send</strong>. Tryk på Enter for at sende, eller Skift og Enter for en ny linje.</p><p>AI kan lave fejl. Kontroller resultaterne.</p>';
$string['chatnopermission'] = 'Denne chat blev startet i et område af webstedet, hvor du ikke længere har adgang til AI-agenten, så den kan ikke fortsættes.';
$string['chatnostartpermission'] = 'Du har ikke rettigheder til at starte en chat her. Åbn AI-agenten fra en side, hvor den tilbydes.';
$string['chatretention'] = 'Gem chats i';
$string['chatretention_desc'] = 'Chats uden aktivitet i dette tidsrum fjernes fra brugernes chathistorik, deres vedhæftede filer slettes fra dette websted, og der anmodes om sletning af de chatdata, AI-udbyderen har gemt (gemte svar og uploadede filer). Sletning hos udbyderen sker efter bedste evne og er ikke garanteret; opsæt også en tilsvarende politik for dataopbevaring på din konto hos udbyderen. Beskeder og forbrugsdata gemmes til rapportering, indtil opbevaringsperioden for chatlogge nedenfor udløber. Sæt til 0 for at gemme chats for altid.';
$string['closeconfirm_body'] = 'Lukning af vinduet sletter ikke chatten. Du kan altid åbne den igen fra menuen "Tidligere chats". Chats slettes automatisk efter {$a} dage.';
$string['closeconfirm_body_noretention'] = 'Lukning af vinduet sletter ikke chatten. Du kan altid åbne den igen fra menuen "Tidligere chats".';
$string['closeconfirm_close'] = 'Luk chat';
$string['closeconfirm_dontshowagain'] = 'Vis ikke dette igen';
$string['closeconfirm_title'] = 'Luk denne chat?';
$string['component'] = 'Komponent';
$string['component_filesandimages'] = 'Håndtering af filer og billeder';
$string['configuration'] = 'Konfiguration af AI-agenten';
$string['confirmdeleteskill'] = 'Er du sikker på, at du vil slette denne skill?';
$string['contextevent_opened'] = 'Åbnet fra {$a}';
$string['contextevent_page'] = 'Side · {$a}';
$string['copyresponse'] = 'Kopier svar';
$string['copyurl'] = 'Kopier URL';
$string['datasource_chats'] = 'AI-agentens chats';
$string['datasource_usage'] = 'AI-agentens forbrug';
$string['deletechat_menu'] = 'Slet chat';
$string['deletechat_named'] = 'Slet chat: {$a}';
$string['disablefunction'] = 'Deaktiver denne funktion';
$string['dragtoresize'] = 'Træk for at ændre størrelse';
$string['dynamicdiscovery'] = 'Dynamisk funktionssøgning';
$string['dynamicdiscovery_automatic'] = 'Automatisk';
$string['dynamicdiscovery_desc'] = 'Optimer tokenforbruget ved kun at finde funktioner, når der er brug for dem. Dette anbefales, hvis du har mange webservice-funktioner aktiveret. I automatisk tilstand slås det til, hvis der er mere end {$a} funktioner tilgængelige. Nogle AI-udbydere har en grænse for antallet af funktioner (OpenAI har for eksempel en grænse på 128).';
$string['dynamicdiscovery_off'] = 'Fra';
$string['dynamicdiscovery_on'] = 'Til';
$string['enabled'] = 'Aktiveret';
$string['enablefunction'] = 'Aktiver denne funktion';
$string['entity_aiagentfunction'] = 'AI-agentfunktion';
$string['entity_chat'] = 'Chat';
$string['entity_externalfunction'] = 'Webservice-funktion';
$string['entity_message'] = 'Besked';
$string['entity_placement'] = 'Placering';
$string['entity_skill'] = 'Skill';
$string['entity_usage'] = 'Tokenforbrug';
$string['error_interrupted_function'] = 'Et funktionskald blev afbrudt, før det var færdigt. Det kan have gennemført ændringer delvist; kontroller tilstanden, før du prøver igen.';
$string['error_interrupted_llm'] = 'Kommunikationen med AI-udbyderen blev afbrudt. Klik på "Prøv igen" for at gentage anmodningen.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'Beskeden må ikke være tom.';
$string['errorfullscreendisabled'] = 'Chatvisningen i fuld skærm er ikke aktiveret på dette websted.';
$string['errorinvalidchat'] = 'Chatten blev ikke fundet, eller adgang nægtet.';
$string['errorinvalidname'] = 'Navnet må ikke være tomt.';
$string['errormissingfeedbackparams'] = 'Besked eller feedbacktype mangler.';
$string['errornopendingfunction'] = 'Der er ingen ventende funktionskald.';
$string['errornoprovider'] = 'Der er ingen AI-udbyder tilgængelig. AI-agenten bruger indstillingerne for handlingen "Generer tekst", så du skal sikre dig, at den er konfigureret og aktiveret for mindst én AI-udbyder i Site-administration.';
$string['errornoprovider_link'] = 'Konfigurer AI-udbydere.';
$string['errornoretryresponse'] = 'Der er intet mislykket svar at prøve igen.';
$string['errorpendingfunctions'] = 'Godkend eller afvis venligst de ventende funktionskald først.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} blokerede prompten: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} blokerede svaret: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} returnerede intet indhold.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} returnerede intet indhold (afslutningsårsag: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'Endpointet for kommunikation med AI-udbyderen er ugyldigt eller kan ikke nås.';
$string['errorresponses_endpoint_invalid_config'] = 'Pluginnet forsøgte at bruge {$a->endpoint} som endpoint for OpenAI Responses API, men anmodningen mislykkedes. Gå til {$a->settingslink}, og kontroller endpointet for Responses API, eller skift API-typen til Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'Udbyderen svarede: {$a}';
$string['errorresponses_provider_switch'] = 'Denne chat kan ikke fortsættes med OpenAIs Responses API, fordi den blev startet med en anden AI-udbyder. Start en ny chat, eller skift tilbage til den oprindelige udbyder (eller til OpenAI Chat Completions) for at fortsætte denne.';
$string['errorrootnotfound'] = 'Den oprindelige besked i denne chat blev ikke fundet.';
$string['exportskill'] = 'Eksporter';
$string['feedback_modal_freetextlabel'] = 'Noget andet? (valgfrit)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Hvad gik galt? Vær så præcis, du har lyst til.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Hvad fungerede godt? (valgfrit)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Hvad gik galt med dette funktionskald?';
$string['feedback_modal_intro_negative'] = 'Tak for beskeden. Din feedback sendes til udviklerne af AI-agent-pluginnet (ikke til AI-udbyderen), så de kan forbedre håndteringen af Moodle-funktionskald.';
$string['feedback_modal_intro_positive'] = 'Tak! Din feedback sendes til udviklerne af AI-agent-pluginnet (ikke til AI-udbyderen), så de kan bevare det, der fungerer, og forbedre det, der ikke gør.';
$string['feedback_modal_intro_toolerror'] = 'Marker dette funktionskald som problematisk. Din feedback sendes til udviklerne af AI-agent-pluginnet (ikke til AI-udbyderen), så de kan udbedre den underliggende webservice eller forbedre, hvordan AI-agenten bruger den.';
$string['feedback_modal_send'] = 'Send feedback';
$string['feedback_modal_sending'] = 'Sender...';
$string['feedback_modal_snapshotlabel'] = 'Hvad der sendes (du kan redigere)';
$string['feedback_modal_title_positive'] = 'Fortæl os, hvad der fungerede';
$string['feedbackcat_negative_misunderstood'] = 'Misforstod mit spørgsmål';
$string['feedbackcat_negative_notfollowed'] = 'Fulgte ikke instruktionerne';
$string['feedbackcat_negative_other'] = 'Noget andet';
$string['feedbackcat_negative_wronginfo'] = 'Forkerte eller opdigtede oplysninger';
$string['feedbackcat_negative_wrongtoolused'] = 'Brugte den forkerte funktion';
$string['feedbackcat_positive_accurate'] = 'Præcist';
$string['feedbackcat_positive_goodexplanation'] = 'Tydelig forklaring';
$string['feedbackcat_positive_helpful'] = 'Nyttigt';
$string['feedbackcat_positive_other'] = 'Noget andet';
$string['feedbackcat_positive_welltimed'] = 'Den rigtige funktion til opgaven';
$string['feedbackcat_toolerror_misleadingresult'] = 'Resultatet var vildledende';
$string['feedbackcat_toolerror_other'] = 'Noget andet';
$string['feedbackcat_toolerror_toolerror'] = 'Funktionen returnerede en fejl';
$string['feedbackcat_toolerror_wrongargs'] = 'Forkerte argumenter';
$string['feedbackcat_toolerror_wrongtool'] = 'Forkert funktion til opgaven';
$string['feedbackdisabled'] = 'Indsamling af feedback er deaktiveret af webstedets administrator.';
$string['feedbackfailed'] = 'Feedbacken kunne ikke sendes. Prøv igen senere.';
$string['feedbackflagfunctioncall'] = 'Marker dette funktionskald';
$string['feedbacksubmitted'] = 'Feedback indsendt';
$string['feedbackthanks'] = 'Tak for din feedback!';
$string['feedbackthumbdown'] = 'Rapporter et problem med dette svar';
$string['feedbackthumbup'] = 'Dette svar var nyttigt';
$string['feedbackvalidation_categoryrequired'] = 'Vælg venligst mindst én kategori.';
$string['functionapprovecount'] = 'Godkend {$a} kald';
$string['functioncall_actions'] = 'Godkend eller afvis funktionskald';
$string['functioncall_chip_action'] = 'Skift tilstand for autogodkendelse';
$string['functioncalldetails'] = 'Detaljer om funktionskaldet';
$string['functiondeny'] = 'Afvis';
$string['functiondenyall'] = 'Afvis alle';
$string['functionloopguardbody'] = 'Denne funktion er allerede kørt {$a} gange med det samme input. Autogodkendelse er sat på pause på grund af en mulig løkke; godkend for at fortsætte.';
$string['functionloopguardheading'] = 'Gentaget kald.';
$string['functionname'] = 'Funktionsnavn';
$string['functionparameters'] = 'Parametre';
$string['functionresult'] = 'Resultat';
$string['functionresultdiscarded'] = 'Resultatet var for stort ({$a}) og blev kasseret. Indsnævr anmodningen ved at filtrere den, bede om færre felter eller bruge en mere specifik funktion. Gentages det samme kald, opstår den samme fejl.';
$string['functions_intro'] = '<p><b>Ikke alle webservice-funktioner egner sig til AI-agenten.</b> Nogle er bygget til kommunikation mellem klient og server (markeret med AJAX) eller til brugere uden login (Uden login), og til nogle findes der bedre alternativer. Enkelte AJAX-funktioner fungerer fint sammen med AI-agenten, men de fleste gør ikke. AI-agent-pluginnet tildeler en relevansscore (1-10) til funktioner fra kernen og fra standardplugins og aktiverer dem med en score på 5 eller derover. Funktioner fra yderligere plugins får ingen score; i stedet aktiveres alle deres ikke-AJAX-funktioner automatisk. Brug denne side til at gennemgå de tilgængelige funktioner og aktivere eller deaktivere dem enkeltvis.</p><p>Når en funktion kræver en eller flere rettigheder, er den ikke tilgængelig for brugere, der ikke har mindst én af disse rettigheder i en eller anden kontekst på webstedet. For kernen og standardplugins sætter AI-agent-pluginnet disse rettigheder korrekt. For yderligere plugins hentes rettighederne fra funktionsdefinitionen, og da Moodle ikke selv håndhæver denne kontrol, kan de være forkerte.</p>';
$string['functions_report'] = 'AI-agentens funktioner';
$string['functionstatus_denied'] = 'Afvist';
$string['functionstatus_failed'] = 'Mislykkedes';
$string['functionstatus_pending'] = 'Afventer godkendelse';
$string['functionstatus_processing'] = 'Udføres...';
$string['functiontype'] = 'Type';
$string['functiontype_help'] = 'Webservice-funktionens type og dens egenskaber:

* **Læs**: henter data uden at ændre noget
* **Skriv**: opretter eller ændrer data
* **AJAX**: bruges internt af Moodle til anmodninger mellem klient og server og egner sig sjældnere som funktion for AI-agenten
* **Uden login**: er tilgængelig for brugere uden login og egner sig ligeledes sjældnere som funktion for AI-agenten';
$string['functiontype_read'] = 'Læs';
$string['functiontype_write'] = 'Skriv';
$string['gemini_api_generatecontent'] = 'generateContent (stabil)';
$string['gemini_api_interactions'] = 'Interactions API (beta)';
$string['gemini_api_type'] = 'API-type';
$string['gemini_api_type_desc'] = 'Hvilken Gemini-API der skal bruges til chats med flere runder. generateContent er det almindelige tilstandsløse endpoint og genopbygger hele beskedlisten i hver runde. Interactions API er i øjeblikket i beta; den gemmer chattens tilstand hos Google (så kun nyt input sendes i hver runde), men dens skema kan ændre sig uden varsel.';
$string['gemini_builtin_code_execution'] = 'Aktiver værktøjet Code Execution';
$string['gemini_builtin_code_execution_desc'] = 'Lader Gemini skrive og køre Python-kode i en sandkasse for at løse matematikopgaver eller behandle data. Kun modeller fra Gemini 3 og nyere; ignoreres uden varsel på Gemini 2.5 og ældre, fordi disse modeller ikke kan kombinere indbyggede værktøjer med egne funktionskald.';
$string['gemini_builtin_google_search'] = 'Aktiver forankring i Google-søgning';
$string['gemini_builtin_google_search_desc'] = 'Lader Gemini forankre svar i aktuelle resultater fra websøgning. Kun modeller fra Gemini 3 og nyere; ignoreres uden varsel på Gemini 2.5 og ældre, fordi disse modeller ikke kan kombinere indbyggede værktøjer med egne funktionskald. Hver søgeforespørgsel afregnes separat.';
$string['gemini_builtin_url_context'] = 'Aktiver værktøjet URL Context';
$string['gemini_builtin_url_context_desc'] = 'Lader Gemini læse og analysere indhold fra offentlige URL-adresser, som brugeren nævner. Kun modeller fra Gemini 3 og nyere; ignoreres uden varsel på Gemini 2.5 og ældre, fordi disse modeller ikke kan kombinere indbyggede værktøjer med egne funktionskald. URL-adresserne skal være offentligt tilgængelige (ingen localhost, intet login).';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = 'Vil du bruge denne chat side om side med dit websted? Træk <a href="{$a}">{$a}</a> til et nyt vindue, eller højreklik på linket og brug din browsers delte visning.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Fil {$a->size}, dimensioner {$a->dimensions}. Forhåndsvisning {$a->preview} ({$a->scale} %).';
$string['importskill'] = 'Importer skills';
$string['importskill_addmore'] = 'Tilføj flere...';
$string['importskill_button'] = 'Importer {$a} skills';
$string['importskill_buttonone'] = 'Importer 1 skill';
$string['importskill_choose'] = 'Vælg filer...';
$string['importskill_drophint'] = 'Træk skill-filer hertil, eller brug knappen.';
$string['importskill_fileone'] = '1 fil valgt';
$string['importskill_files'] = '{$a} filer valgt';
$string['importskill_statusinvalid'] = 'Ikke en skill-fil';
$string['importskill_statusnew'] = 'Ny skill';
$string['importskill_statusupdate'] = 'Opdaterer {$a}';
$string['importskill_summarynew'] = '{$a} nye';
$string['importskill_summaryskipped'] = '{$a} sprunget over';
$string['importskill_summaryupdate'] = '{$a} skal opdateres';
$string['importskill_toolarge'] = 'Skill-dataene er for store (maksimalt {$a}).';
$string['inlinefilecharlimit'] = 'Grænse for indlejret filindhold';
$string['inlinefilecharlimit_desc'] = 'Den maksimale mængde af en tekstfil, der kan indlejres direkte i chatten, når en fil læses indlejret. Længere indhold afkortes. Indlejring bruges, når modellen beder om det, og som reserveløsning for AI-udbydere, der ikke kan modtage filer. Indlejret indhold sendes igen sammen med chathistorikken i hver runde, så en høj grænse øger tokenforbruget.';
$string['invalidparameter'] = 'Ugyldig parameter fundet: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Aktiver licens';
$string['licenseactivate_help'] = 'Indtast den licensnøgle, du har modtaget pr. e-mail fra LMSCloud. Licensnøglen kan aktiveres på et begrænset antal websteder (som regel to). Du kan når som helst deaktivere den for at bruge den på et andet websted.';
$string['licensedeactivate'] = 'Deaktiver';
$string['licensedeactivate_help'] = 'Deaktiver licensnøglen på dette websted, så den kan bruges på et andet websted.';
$string['licenseerror_deactivate'] = 'Licensen kunne ikke deaktiveres. Serveren er muligvis midlertidigt utilgængelig; prøv igen senere.';
$string['licenseerror_deactivate_forced'] = 'Denne licens er fastlagt i serverkonfigurationen (config.php) og kan ikke deaktiveres fra denne side.';
$string['licenseerror_invalid'] = 'Licensnøglen er ugyldig eller kunne ikke aktiveres.';
$string['licenseerror_limit'] = 'Der er ingen ledige pladser til denne licensnøgle. Deaktiver først et andet websted, og prøv derefter igen.';
$string['licenseerror_transport'] = 'Licensserveren kunne ikke nås. Kontroller forbindelsen, og prøv igen.';
$string['licensekey'] = 'Licensnøgle';
$string['licenselocked_expired'] = 'Dette websted har ikke bekræftet sin licens i over 14 dage. Kontroller licensen igen for at genoprette adgangen.';
$string['licenselocked_key_rejected'] = 'Denne licensnøgle er ikke længere gyldig på dette websted.';
$string['licenselocked_url_mismatch'] = 'Webstedets adresse er ændret; licensindehaveren skal godkende den nye adresse.';
$string['licensemanageinsettings'] = 'Administrer licensen i indstillingerne for AI-agenten.';
$string['licenserecheck'] = 'Kontroller igen';
$string['licensesetting'] = 'AI-agentens licens';
$string['licensesetting_desc'] = 'Aktiver, kontroller igen eller deaktiver AI-agentens licens for dette websted.';
$string['licensestatus_materialsmissing'] = 'AI-agentens licens er aktiv, men de downloadede materialer mangler, så ingen funktioner er tilgængelige. Kontroller igen for at hente dem på ny.';
$string['licensestatus_notactivated'] = 'Der kræves en licens for at bruge AI-agenten på dette websted.';
$string['licensestatus_valid'] = 'AI-agentens licens er aktiv.';
$string['loginrequired'] = 'Login påkrævet';
$string['logretention'] = 'Gem chatlogge i';
$string['logretention_desc'] = 'Beskeder og oplysninger om tokenforbrug for chats uden aktivitet i dette tidsrum slettes permanent fra databasen. Det gælder kun chats, der allerede er slettet fra chathistorikken, enten af brugeren eller af indstillingen ovenfor. Sæt til 0 for at gemme logge for altid.';
$string['maxfilesize'] = 'Maksimal filstørrelse for LLM\'en';
$string['maxfilesize_desc'] = 'Forhindrer brugerne i at sende filer, der er for store, til LLM\'en. Store filer bruger hurtigt mange tokens og driver omkostningerne op. Filer over denne størrelse afvises med en fejl, før nogen data forlader webstedet.

AI-udbydere afviser under alle omstændigheder filer, der overskrider deres egne grænser pr. anmodning (Anthropic 32 MB, Gemini 50 MB indlejret, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Maksimal størrelse på funktionsresultat';
$string['maxfunctionresultsize_desc'] = 'Den maksimale mængde data, en enkelt funktion må returnere til AI-modellen. Nogle Moodle-funktioner har intet filter og returnerer alle brugere eller alle kurser på webstedet, hvilket oversvømmer modellen og bruger tokens i hver følgende runde. Et resultat over denne grænse kasseres, og modellen får besked på at indsnævre anmodningen i stedet. Sæt til nul for ingen grænse. Læsning af en fil indlejret er undtaget; brug "Grænse for indlejret filindhold" til det.';
$string['newchat'] = 'Ny chat';
$string['newchatchooser_blank_sub'] = 'Ingen kontekst. Generel assistent.';
$string['newchatchooser_clone'] = 'Samme som denne chat';
$string['newchatchooser_continue'] = 'Fortsæt, hvor du slap';
$string['newchatchooser_desc_default'] = 'Start en ny chat på denne side, eller fortsæt, hvor du slap.';
$string['newchatchooser_desc_full'] = 'Start en generel chat, eller fortsæt, hvor du slap.';
$string['newchatchooser_desc_multi'] = 'Denne side har flere udgangspunkter. Vælg et, eller fortsæt, hvor du slap.';
$string['newchatchooser_error'] = 'Den nye chat kunne ikke startes. Prøv igen.';
$string['newchatchooser_none'] = 'Der er ingen side her, hvor du kan starte en ny chat.';
$string['newchatchooser_onthispage'] = 'På denne side:';
$string['newchatchooser_title'] = 'Start en ny chat';
$string['nfilesattached'] = '{$a} filer vedhæftet';
$string['nonauth'] = 'Uden login';
$string['numfiles'] = '{$a} filer';
$string['numimages'] = '{$a} billeder';
$string['numotherfiles'] = '{$a} andre';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'API-type';
$string['openai_api_type_desc'] = 'Hvilken OpenAI-API der skal bruges til chats med flere runder. Responses API holder chattens tilstand på serversiden, så kun nyt input sendes i hver runde (lavere omkostninger, enklere historik). Chat Completions genopbygger hele beskedlisten ved hver anmodning (bredere kompatibilitet med udbydere).<br><br>Responses API understøttes af: <strong>{$a}</strong>. Andre udbydere falder uden varsel tilbage til Chat Completions uanset denne indstilling.';
$string['openai_heading'] = 'OpenAI (eller kompatibel)';
$string['openlink'] = 'Åbn link';
$string['placeholder'] = 'Skriv en besked...';
$string['placement_add'] = 'Tilføj placering';
$string['placement_confirmdelete'] = 'Er du sikker på, at du vil slette denne placering?';
$string['placement_copyof'] = '{$a} (kopi)';
$string['placement_defaultname'] = 'AI-agent';
$string['placement_deleted'] = 'Placeringen er slettet.';
$string['placement_duplicated'] = 'Placeringen er dubleret.';
$string['placement_edit'] = 'Rediger placering';
$string['placement_initialskills'] = 'Indledende skills';
$string['placement_initialskills_help'] = 'Skills, der indlæses automatisk, når chatten starter. Valgfrit; agenten kan stadig indlæse enhver skill efter behov. De valgte skills styrer også denne placering: brugere, der ikke har adgang til nogen af dem, ser hverken knappen eller menupunktet, og hvis alle valgte skills senere fjernes eller deaktiveres, vises placeringen ikke længere.';
$string['placement_intro'] = '<p>Med placeringer kan du tilbyde agenter, der er skræddersyet til en bestemt opgave. Hver placering tilføjer knappen til AI-agenten på sider, hvis URL matcher en af dens masker, og kan starte chatten med foruddefinerede indledende skills og en velkomsttekst. Hvis der er valgt indledende skills, ser brugere, der ikke har adgang til nogen af dem, ikke knappen.</p><p>De indledende skills fastlægger kun chattens udgangspunkt; agenten har stadig adgang til alle aktiverede funktioner, ikke kun til dem, der hører til disse skills.</p>';
$string['placement_location'] = 'Knappens position';
$string['placement_location_floating'] = 'Flydende knap';
$string['placement_location_h1'] = 'Sideoverskrift (H1)';
$string['placement_location_h2'] = 'Sekundær overskrift (H2)';
$string['placement_menuheading'] = 'Spørg AI-agenten';
$string['placement_name'] = 'Navn';
$string['placement_name_help'] = 'Vises for brugerne: i brugermenuen, som knappens tooltip og (når flere placeringer matcher den samme side) i knappens menu.';
$string['placement_save'] = 'Gem placering';
$string['placement_saved'] = 'Placeringen er gemt.';
$string['placement_skillmissing'] = 'Skill ikke fundet';
$string['placement_urlmask'] = 'URL-masker';
$string['placement_urlmask_help'] = 'Ét mønster pr. linje. Brug * som jokertegn, for eksempel /course/view.php* eller /mod/*/view.php*. Bemærk: På sider, hvor en mere specifik placering optager den samme position, skjules en bred placering, der matcher /*, så brugerne kun ser den mest relevante.';
$string['placement_urlmask_invalid'] = 'Hver URL-maske skal begynde med en skråstreg: "{$a}" gør ikke.';
$string['placement_welcome'] = 'Egen velkomsttekst (valgfrit)';
$string['placement_welcome_help'] = 'Erstatter den almindelige velkomstbesked på chattens startskærm. Lad feltet være tomt for at bruge standardteksten.';
$string['pluginname'] = 'AI-agent';
$string['previouschats'] = 'Tidligere chats';
$string['privacy:metadata:aiprovider'] = 'Chats sendes til den AI-udbyder, webstedets administrator har valgt, for eksempel OpenAI, Azure OpenAI, Google Gemini eller Anthropic, så den kan generere et svar. Pluginnet sender hver anmodning direkte til udbyderen og ikke gennem Moodles AI-undersystem. Hvilket firma der modtager data, og hvor længe de gemmes der, afhænger af den udbyder, webstedet har konfigureret, og af udbyderens egne betingelser.';
$string['privacy:metadata:aiprovider:files'] = 'Filer, som brugeren vedhæfter en chat, og filer, som agenten læser fra webstedet på brugerens vegne, uploadet så modellen kan læse deres indhold.';
$string['privacy:metadata:aiprovider:messages'] = 'Chathistorikken, som sendes igen i hver runde: brugerens prompts, assistentens svar og resultaterne af de Moodle-funktioner, agenten har kørt, som kan indeholde personoplysninger om andre brugere.';
$string['privacy:metadata:aiprovider:userid'] = 'ID\'et på den bruger, der fører chatten, som indgår i instruktionerne til modellen, så den kan handle på brugerens vegne.';
$string['privacy:metadata:core_files'] = 'Filer, der er vedhæftet AI-agentens beskeder.';
$string['privacy:metadata:feedback'] = 'Når feedback er aktiveret, og en bruger bedømmer et svar eller rapporterer et mislykket funktionskald, sendes den bedømte ordveksling til udviklerne af AI-agent-pluginnet, så agentens adfærd kan forbedres. Der sendes intet, medmindre brugeren vælger at indsende feedback, og funktionen kan slås helt fra med indstillingen "Tillad feedback".';
$string['privacy:metadata:feedback:freetext'] = 'Den kommentar, brugeren eventuelt skriver ved indsendelse af feedback, sendt som indtastet.';
$string['privacy:metadata:feedback:snapshot'] = 'En udskrift af den bedømte ordveksling: brugerens spørgsmål, assistentens svar og navnene på de funktioner, den kaldte. E-mailadresser maskeres, og disse funktioners argumenter og resultater udelades, bortset fra agentens egne funktionssøgninger. Brugeren kan redigere teksten før indsendelse.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'Indstillingen om ikke at vise bekræftelsesdialogen ved lukning igen.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'Den størrelse, brugeren har givet chatpanelet som overlay.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'Den bredde, brugeren har givet chatpanelet som sidepanel.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'Den chatvisning (overlay, sidepanel eller fuld skærm), brugeren sidst brugte.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Chats mellem en bruger og AI-agenten. Chats, som brugeren sletter, arkiveres i stedet for at blive fjernet, så tokenforbruget stadig kan følges.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'Tidspunktet, hvor chatten blev arkiveret (slettet af brugeren), hvis det er relevant.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'Tidspunktet, hvor chatten blev oprettet.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Hvornår den seneste besked blev gemt i chatten.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'Tidspunktet, hvor chatten sidst blev opdateret.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'Chattens navn, genereret ud fra den første besked.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'Den bruger, der ejer chatten.';
$string['privacy:metadata:tool_aiagent_message'] = 'Enkelte beskeder i en chat, herunder brugerens prompts og AI-svarene.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'Beskedens indhold.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Hvem der sendte beskeden: brugeren, assistenten, systemet eller en funktion.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'Tidspunktet, hvor beskeden blev oprettet.';
$string['privacy:metadata:tool_aiagent_usage'] = 'Tokenforbrug registreret for hver AI-anmodning, gemt til opfølgning på forbruget.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'Antallet af brugte outputtokens (completion).';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'Den AI-model, der behandlede anmodningen.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'Antallet af brugte inputtokens (prompt).';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'Den AI-udbyder, der behandlede anmodningen.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'Tidspunktet, hvor anmodningen blev sendt.';
$string['relevancescore'] = 'Relevansscore';
$string['relevancescore_help'] = 'Relevansscoren angiver på en skala fra 1 til 10, hvor velegnet en webservice-funktion er til AI-agenten.

**Høje scorer (7-10)** gives til funktioner, der tydeligvis er nyttige for en AI-assistent, for eksempel at oprette kurser, tilmelde brugere, søge efter indhold eller hente karakterer.

**Mellemhøje scorer (4-6)** er typiske for destruktive eller uoprettelige handlinger (for eksempel at slette kurser eller framelde brugere), som er nyttige, men indebærer en større risiko, samt for nichefunktioner med begrænset anvendelse.

**Lave scorer (1-3)** gives til funktioner, der er beregnet til intern kommunikation mellem browser og server, funktioner uden krav om login, forældede funktioner eller funktioner, der dublerer bedre alternativer.

**Scoren 0** betyder, at funktionen endnu ikke er vurderet. Det er almindeligt for funktioner fra yderligere plugins.

Relevansscoren blev brugt til at fastsætte den oprindelige standard for, om hver funktion er aktiveret. De oprindelige scorer for Moodles kernekomponenter er genereret af AI og skal muligvis gennemgås manuelt.';
$string['removefilenamed'] = 'Fjern fil: {$a}';
$string['renamechat'] = 'Omdøb chat';
$string['renamechat_label'] = 'Nyt navn til chatten';
$string['responses_endpoints'] = 'Egne endpoints for Responses API';
$string['responses_endpoints_desc'] = 'Tilsidesætter endpointet for Responses API, når en hostet installation af OpenAI eller Azure OpenAI eller en installation bag en proxy leverer det på en anden adresse. Lad feltet være tomt for at bruge de indbyggede standardværdier. Har ingen virkning, når API-typen er Chat Completions.<br><br>
For eksempel https://din-ressource.azure.com/api/responses?api-version=preview. Endpointet for Files API udledes ved at erstatte /responses med /files og bevare forespørgselsstrengen, så uploads går til https://din-ressource.azure.com/api/files?api-version=preview.<br><br>
Hvis du bruger flere instanser af en udbyder, skal du angive én URL pr. linje. Hver udbyder bruger den linje, hvis vært matcher udbyderens eget API-endpoint.';
$string['responses_endpoints_invalidline'] = 'Hver linje skal være en fuldstændig https-URL, hvis sti ender på /responses; http accepteres kun for localhost. Ugyldig linje: {$a}';
$string['resume_desc'] = 'Du har en nylig chat. Fortsæt, hvor du slap, eller start en ny.';
$string['resume_lastmessage'] = 'Seneste besked for {$a} siden';
$string['resume_resume'] = 'Fortsæt seneste chat';
$string['resume_title'] = 'Velkommen tilbage';
$string['sendmessage'] = 'Send';
$string['settings'] = 'Indstillinger for AI-agenten';
$string['showallfiles'] = 'Vis alle';
$string['skill_add'] = 'Tilføj skill';
$string['skill_edit'] = 'Rediger skill';
$string['skill_save_close'] = 'Gem og luk';
$string['skill_save_preview'] = 'Gem og vis forhåndsvisning';
$string['skill_saved'] = 'Skillen er gemt.';
$string['skilladd_aitip'] = 'I stedet for at udfylde dette i hånden kan du bede AI-agenten om at bygge skillen for dig: den kan finde de rigtige funktioner og udarbejde instruktionerne. <a href="{$a}">Åbn AI-agenten</a>.';
$string['skillcapabilities_help'] = 'Udledt af skillens hovedfunktioner: en bruger kan kun bruge skillen, hvis vedkommende har mindst én af disse rettigheder i en eller anden kontekst på webstedet. Listen samler de nødvendige rettigheder for alle hovedfunktioner.';
$string['skillcapabilities_none'] = 'Ingen. Skillen er tilgængelig for alle brugere.';
$string['skillconfigured'] = 'Konfigureret';
$string['skilldeleted'] = 'Skillen "{$a}" er slettet.';
$string['skilldescription'] = 'Beskrivelse';
$string['skilldescription_help'] = 'Hvad skillen er til, så assistenten ved, hvornår den skal indlæses. Beskriv den opgave eller det område, den handler om, ikke de trin, den udfører. Teksten vises både i listen over skills (for mennesker) og i systemprompten (for assistenten).';
$string['skillexists'] = 'Der findes allerede en skill med det korte navn "{$a}".';
$string['skillimport_badmasks'] = 'Felterne "mainfunctions" og "otherfunctions" skal hver især være en liste af maskestrenge.';
$string['skillimport_badshortname'] = 'Hver skill skal have et gyldigt kort navn (bogstaver, tal, bindestreg, understreg).';
$string['skillimport_invalidjson'] = 'Den uploadede fil indeholder ikke gyldig skill-JSON.';
$string['skillimport_missingfield'] = 'Påkrævet felt mangler: {$a}.';
$string['skillimported'] = 'Skillen "{$a}" er importeret.';
$string['skillinstructions'] = 'Instruktioner';
$string['skillinstructions_help'] = 'Vejledning, der indlæses i chatten sammen med skillen. Medtag kun det, der ikke er indlysende: assistenten ser allerede alle indlæste funktioner og deres beskrivelser, så gentag ikke, hvad en funktion gør, og mind den ikke om indlysende parametre. Beskriv rækkefølgen i arbejdsgangen, beslutningerne og de faldgruber, beskrivelserne ikke dækker, og indled trin, der kun nogle gange gælder, med "Hvis ...".';
$string['skillloadedevent'] = 'Skill indlæst · {$a}';
$string['skillmainfunctions'] = 'Hovedfunktioner';
$string['skillmainfunctions_help'] = 'Et snævert sæt masker, der vælger skillens centrale funktioner til at oprette og opdatere. Disse funktioners rettigheder afgør, hvem skillen tilbydes: kun brugere, der har adgang til mindst én af dem. Hver maske matcher et funktionsnavn eller et mønster af komponent og navn ("*" er et jokertegn, et foranstillet "~" fjerner match). Lad feltet være tomt for at tilbyde skillen til alle.';
$string['skillmatched'] = 'Match ({$a})';
$string['skillmisconfigured'] = 'I øjeblikket utilgængelig for alle: ingen af dens hovedfunktioner peger på en aktiveret funktion.';
$string['skillname'] = 'Navn';
$string['skillname_help'] = 'Et kort, læsevenligt visningsnavn for skillen, som vises i listen over skills.';
$string['skillnomatch'] = 'Ingen aktiveret funktion matcher disse mønstre.';
$string['skillnotfound'] = 'Ingen skill fundet: {$a}.';
$string['skillotherfunctions'] = 'Øvrige funktioner';
$string['skillotherfunctions_help'] = 'Masker for de øvrige funktioner, skillen medbringer: læsninger, hjælpefunktioner eller en hel komponent. Samme skrivemåde som ved hovedfunktionerne, men de påvirker ikke, hvem skillen tilbydes. Lad feltet være tomt, hvis skillen ikke har brug for ekstra funktioner.';
$string['skills_intro'] = '<p>En skill samler specialiserede instruktioner til en bestemt opgave med en liste over de funktioner, der anbefales til den. Brug skills til almindelige opgaver i flere trin, hvor AI-agenten har tendens til at blive forvirret eller ikke kan finde de rigtige funktioner, eller til opgaver, der er særlige for din organisation.</p><p>Listen over skills og deres beskrivelser er altid tilgængelig for AI-agenten, som selv indlæser en skill, når den vurderer, at den passer til brugerens anmodning. En skill er kun tilgængelig for brugere, der har adgang til mindst én af dens hovedfunktioner. En skill bygget til lærere er for eksempel ikke synlig for studerende.</p>';
$string['skillshortname'] = 'Kort navn';
$string['skillshortname_help'] = 'Et stabilt maskinnavn, der er unikt på hele webstedet: kun bogstaver, tal, bindestreg og understreg. Det kan ikke ændres, efter at skillen er oprettet.';
$string['skilltoobroad'] = 'Matcher {$a} funktioner, hvilket kan være for bredt. Overvej at indsnævre funktionsmaskerne.';
$string['skillunavailable'] = 'Utilgængelig';
$string['skillupdated'] = 'Skillen "{$a}" er opdateret.';
$string['switchview'] = 'Skift visning';
$string['systeminstruction'] = 'Egne systeminstruktioner';
$string['systeminstruction_desc'] = 'Egne instruktioner, der sendes til AI-modellen med hver anmodning, og som fastlægger dens adfærd, tone og muligheder. Lad feltet være tomt for at bruge den indbyggede standard (vist nedenfor). Du kan bruge {siteurl} (webstedets URL), {userid} (den aktuelle brugers ID) og {date} (dagens dato i ISO-format) som pladsholdere; de erstattes ved kørsel. Standardinstruktioner:{$a->default}

Tilføjes altid til systeminstruktionerne (både standard og egne):{$a->context}';
$string['tab_functions'] = 'Funktioner';
$string['tab_placements'] = 'Placeringer';
$string['tab_skills'] = 'Skills';
$string['tagarea_tool_aiagent_functions'] = 'Tags til AI-agentens funktioner';
$string['task_cleanup_chats'] = 'Slet gamle chats fra AI-agenten';
$string['task_purge_provider_data'] = 'Slet AI-agentens chatdata hos AI-udbyderen';
$string['task_revalidate_license'] = 'Kontroller AI-agentens licens igen';
$string['thinking'] = 'AI-agenten tænker...';
$string['timecreated'] = 'Oprettet';
$string['timelastactivity'] = 'Seneste aktivitet';
$string['timemodified'] = 'Sidst ændret';
$string['tryagain'] = 'Prøv igen';
$string['usage_completiontokens'] = 'Outputtokens';
$string['usage_model'] = 'Model';
$string['usage_prompttokens'] = 'Inputtokens';
$string['usage_provider'] = 'Udbyder';
$string['usage_totaltokens'] = 'Tokens i alt';
$string['viewdetails'] = 'Vis detaljer';
$string['viewtype_fullscreen'] = 'Fuld skærm';
$string['viewtype_overlay'] = 'Overlay';
$string['viewtype_sidebar'] = 'Sidepanel';
$string['viewtypes'] = 'Tilgængelige visninger';
$string['viewtypes_alldisabled_warning'] = 'AI-agenten er ikke tilgængelig for nogen, fordi alle visninger er deaktiveret i <a href="{$a}">indstillingerne</a>.';
$string['viewtypes_desc'] = 'De chatvisninger, brugerne kan åbne: et lille overlay i hjørnet af siden, et sidepanel ved siden af sideindholdet og chatsiden i fuld skærm. Fjern markeringen fra alle for midlertidigt at deaktivere AI-agenten for alle brugere.';
$string['viewtypes_unavailable'] = 'AI-agenten er i øjeblikket ikke tilgængelig.';
$string['welcomedesc'] = 'Spørg AI-agenten om dit websted, dine kurser, brugere eller indhold. Den kan læse og, med din godkendelse, foretage ændringer.';
$string['welcometitle'] = 'Velkommen, {$a}';

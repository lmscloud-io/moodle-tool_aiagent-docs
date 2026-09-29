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
 * Italian language pack for AI agent.
 * Last updated: 2026-09-29
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'Aggiuntiva';
$string['aiagent:autoapproveall'] = 'Scegliere la modalità di approvazione automatica "Tutte", che esegue ogni chiamata di funzione senza chiedere conferma';
$string['aiagent:usechat'] = 'Avviare chat con l\'agente IA (stabilisce dove è possibile avviare una chat; non limita i dati a cui la chat può accedere una volta avviata)';
$string['allowfeedback'] = 'Consenti feedback';
$string['allowfeedback_desc'] = 'Se abilitata, gli utenti possono valutare le risposte dell\'assistente e segnalare le chiamate di funzione non riuscite. Gli invii sono trasmessi agli sviluppatori del plugin Agente IA (non a un LLM) affinché possano migliorare la gestione delle funzioni di Moodle. Viene inviato solo lo scambio valutato, non l\'intera chat, e l\'utente può modificare il testo prima di inviarlo. Disabilitare questa impostazione nei siti con politiche restrittive sul traffico in uscita.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Abilita lo strumento "web fetch"';
$string['anthropic_web_fetch_desc'] = 'Consente a Claude di recuperare URL esterni lato server tramite lo strumento web_fetch di Anthropic. Utile quando nella chat si fa riferimento a pagine web pubbliche che il modello dovrebbe leggere. I file di questo sito Moodle sono gestiti separatamente tramite la funzione read_file (che li carica sulla Files API di Anthropic all\'occorrenza), quindi disabilitare web_fetch non incide sull\'accesso alle risorse dei corsi o agli allegati.';
$string['attachedfiles'] = 'File allegati';
$string['attachfile'] = 'Allega file';
$string['autoapprove'] = 'Auto-approvazione';
$string['autoapprove_all'] = 'Tutte (usare con cautela)';
$string['autoapprove_all_desc'] = 'Salta ogni conferma';
$string['autoapprove_all_disabled'] = 'Non sei autorizzato a usare questa modalità.';
$string['autoapprove_all_short'] = 'Tutte';
$string['autoapprove_header'] = 'Approvazione automatica delle chiamate di funzione';
$string['autoapprove_none'] = 'Nessuna';
$string['autoapprove_none_desc'] = 'Chiedi conferma prima di ogni chiamata di funzione';
$string['autoapprove_readonly'] = 'Sola lettura';
$string['autoapprove_readonly_desc'] = 'Approva le letture, chiedi conferma per le scritture';
$string['autoapprove_safe'] = 'Sicure';
$string['autoapprove_safe_desc'] = 'Approva le azioni che non modificano il sito';
$string['autoapprove_safe_examples'] = 'Letture, oltre a ridimensionamento degli allegati, generazione di immagini, invio di file all\'LLM, ecc.';
$string['backtoconfiguration'] = 'Torna alla configurazione dell\'agente IA';
$string['builtinfunction'] = 'Inclusa';
$string['bulk_disabled'] = 'Funzioni disabilitate: {$a}';
$string['bulk_disableselected'] = 'Disabilita le selezionate';
$string['bulk_enabled'] = 'Funzioni abilitate: {$a}';
$string['bulk_enableselected'] = 'Abilita le selezionate';
$string['bulk_withselected'] = 'Con le funzioni selezionate';
$string['capabilities'] = 'Privilegi';
$string['chat_namelink'] = 'Nome con link';
$string['chatfrozen'] = 'Le skill di questa chat non sono più disponibili, quindi non può essere proseguita. Avvia una nuova chat.';
$string['chathelpcontent'] = '<p>L\'agente IA può leggere e modificare i contenuti di questo sito per tuo conto. La maggior parte delle azioni richiede la tua approvazione prima di essere eseguita. Puoi cambiare la modalità di auto-approvazione nel campo di scrittura per allentare o irrigidire questo controllo.</p>
<p>Allega i file trascinandoli, incollandoli oppure facendo clic sull\'icona della graffetta. Poi scrivi la tua richiesta e premi <strong>Invia</strong>. Il tasto Invio spedisce il messaggio, Maiusc e Invio vanno a capo.</p><p>L\'IA può commettere errori. Verifica i risultati.</p>';
$string['chatnopermission'] = 'Questa chat è stata avviata in un\'area del sito in cui non hai più accesso all\'agente IA, quindi non può essere proseguita.';
$string['chatnostartpermission'] = 'Non sei autorizzato ad avviare una chat qui. Apri l\'agente IA da una pagina in cui è disponibile.';
$string['chatretention'] = 'Conserva le chat per';
$string['chatretention_desc'] = 'Le chat senza attività per questo periodo vengono rimosse dalla cronologia degli utenti, i loro file allegati vengono eliminati da questo sito e viene richiesta l\'eliminazione dei dati della chat memorizzati dal provider IA (risposte memorizzate e file caricati). L\'eliminazione lato provider è svolta secondo il principio del massimo impegno e non è garantita; configurare una politica di conservazione dei dati coerente anche nel proprio account presso il provider. I messaggi e i dati di utilizzo restano disponibili per i report fino alla scadenza del periodo di conservazione dei log delle chat indicato sotto. Impostare 0 per conservare le chat per sempre.';
$string['closeconfirm_body'] = 'Chiudere la finestra non elimina la chat. Puoi riaprirla in qualsiasi momento dal menu "Chat precedenti". Le chat vengono eliminate automaticamente dopo {$a} giorni.';
$string['closeconfirm_body_noretention'] = 'Chiudere la finestra non elimina la chat. Puoi riaprirla in qualsiasi momento dal menu "Chat precedenti".';
$string['closeconfirm_close'] = 'Chiudi chat';
$string['closeconfirm_dontshowagain'] = 'Non mostrare più';
$string['closeconfirm_title'] = 'Chiudere questa chat?';
$string['component'] = 'Componente';
$string['component_filesandimages'] = 'Gestione di file e immagini';
$string['configuration'] = 'Configurazione dell\'agente IA';
$string['confirmdeleteskill'] = 'Sei sicuro di voler eliminare questa skill?';
$string['contextevent_opened'] = 'Aperta da {$a}';
$string['contextevent_page'] = 'Pagina · {$a}';
$string['copyresponse'] = 'Copia risposta';
$string['copyurl'] = 'Copia URL';
$string['datasource_chats'] = 'Chat dell\'agente IA';
$string['datasource_usage'] = 'Utilizzo dell\'agente IA';
$string['deletechat_menu'] = 'Elimina chat';
$string['deletechat_named'] = 'Elimina chat: {$a}';
$string['disablefunction'] = 'Disabilita questa funzione';
$string['dragtoresize'] = 'Trascina per ridimensionare';
$string['dynamicdiscovery'] = 'Individuazione dinamica delle funzioni';
$string['dynamicdiscovery_automatic'] = 'Automatica';
$string['dynamicdiscovery_desc'] = 'Ottimizza l\'utilizzo dei token individuando le funzioni solo quando servono. È consigliata se sono abilitate molte funzioni web service. In modalità automatica viene attivata se sono disponibili più di {$a} funzioni. Alcuni provider IA hanno un limite al numero di funzioni (ad esempio OpenAI ha un limite di 128).';
$string['dynamicdiscovery_off'] = 'Disattivata';
$string['dynamicdiscovery_on'] = 'Attivata';
$string['enabled'] = 'Abilitato';
$string['enablefunction'] = 'Abilita questa funzione';
$string['entity_aiagentfunction'] = 'Funzione dell\'agente IA';
$string['entity_chat'] = 'Chat';
$string['entity_externalfunction'] = 'Funzione web service';
$string['entity_message'] = 'Messaggio';
$string['entity_placement'] = 'Posizionamento';
$string['entity_skill'] = 'Skill';
$string['entity_usage'] = 'Utilizzo dei token';
$string['error_interrupted_function'] = 'Una chiamata di funzione è stata interrotta prima di terminare. Potrebbe aver applicato modifiche parziali; verifica la situazione prima di riprovare.';
$string['error_interrupted_llm'] = 'La comunicazione con il provider IA è stata interrotta. Fai clic su "Riprova" per ripetere la richiesta.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'Il messaggio non può essere vuoto.';
$string['errorfullscreendisabled'] = 'La vista della chat a schermo intero non è abilitata su questo sito.';
$string['errorinconsistent'] = 'La chat è in uno stato incoerente e non può proseguire. Ricarica la pagina e riprova.';
$string['errorinvalidchat'] = 'Chat non trovata o accesso negato.';
$string['errorinvalidname'] = 'Il nome non può essere vuoto.';
$string['errormissingfeedbackparams'] = 'Messaggio o tipo di feedback mancante.';
$string['errornopendingfunction'] = 'Non ci sono chiamate di funzione in attesa.';
$string['errornoprovider'] = 'Nessun provider IA disponibile. L\'agente IA utilizza le impostazioni dell\'azione "Genera testo", quindi occorre assicurarsi che sia configurata e abilitata per almeno un provider IA nell\'Amministrazione del sito.';
$string['errornoprovider_link'] = 'Configura i provider IA.';
$string['errornoretryresponse'] = 'Non c\'è nessuna risposta non riuscita da ripetere.';
$string['erroroutofsync'] = 'Questa chat è stata modificata in un\'altra finestra. Aggiorna per vedere lo stato più recente.';
$string['errorpagenotavailable'] = 'La pagina corrente non è disponibile in questa vista.';
$string['errorpendingfunctions'] = 'Approva o rifiuta prima le chiamate di funzione in attesa.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} ha bloccato il prompt: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} ha bloccato la risposta: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} non ha restituito alcun contenuto.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} non ha restituito alcun contenuto (motivo di terminazione: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'L\'endpoint per la comunicazione con il provider IA non è valido o non è raggiungibile.';
$string['errorresponses_endpoint_invalid_config'] = 'Il plugin ha provato a usare {$a->endpoint} come endpoint della Responses API di OpenAI, ma la richiesta non è riuscita. Vai a {$a->settingslink} e controlla l\'endpoint della Responses API, oppure cambia il tipo di API in Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'Risposta del provider: {$a}';
$string['errorresponses_provider_switch'] = 'Questa chat non può essere proseguita con la Responses API di OpenAI perché è stata avviata con un altro provider IA. Avvia una nuova chat, oppure torna al provider originale (o a OpenAI Chat Completions) per proseguire questa.';
$string['errorrootnotfound'] = 'Messaggio iniziale non trovato per questa chat.';
$string['exportskill'] = 'Esporta';
$string['feedback_modal_freetextlabel'] = 'Altro? (facoltativo)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Che cosa non ha funzionato? Sii specifico quanto vuoi.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Che cosa ha funzionato bene? (facoltativo)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Che cosa non ha funzionato in questa chiamata di funzione?';
$string['feedback_modal_intro_negative'] = 'Grazie per la segnalazione. Il tuo feedback sarà inviato agli sviluppatori del plugin Agente IA (non al provider IA) affinché possano migliorare la gestione delle funzioni di Moodle.';
$string['feedback_modal_intro_positive'] = 'Grazie! Il tuo feedback sarà inviato agli sviluppatori del plugin Agente IA (non al provider IA) affinché possano mantenere ciò che funziona e migliorare ciò che non funziona.';
$string['feedback_modal_intro_toolerror'] = 'Segnala questa chiamata di funzione come problematica. Il tuo feedback sarà inviato agli sviluppatori del plugin Agente IA (non al provider IA) affinché possano correggere il web service sottostante o migliorare il modo in cui l\'IA lo utilizza.';
$string['feedback_modal_send'] = 'Invia feedback';
$string['feedback_modal_sending'] = 'Invio in corso...';
$string['feedback_modal_snapshotlabel'] = 'Che cosa verrà inviato (puoi modificarlo)';
$string['feedback_modal_title_positive'] = 'Raccontaci che cosa ha funzionato';
$string['feedbackcat_negative_misunderstood'] = 'Ha frainteso la mia domanda';
$string['feedbackcat_negative_notfollowed'] = 'Non ha seguito le istruzioni';
$string['feedbackcat_negative_other'] = 'Altro';
$string['feedbackcat_negative_wronginfo'] = 'Informazioni sbagliate o inventate';
$string['feedbackcat_negative_wrongtoolused'] = 'Ha usato la funzione sbagliata';
$string['feedbackcat_positive_accurate'] = 'Accurata';
$string['feedbackcat_positive_goodexplanation'] = 'Spiegazione chiara';
$string['feedbackcat_positive_helpful'] = 'Utile';
$string['feedbackcat_positive_other'] = 'Altro';
$string['feedbackcat_positive_welltimed'] = 'Funzione giusta per il compito';
$string['feedbackcat_toolerror_misleadingresult'] = 'Il risultato era fuorviante';
$string['feedbackcat_toolerror_other'] = 'Altro';
$string['feedbackcat_toolerror_toolerror'] = 'La funzione ha restituito un errore';
$string['feedbackcat_toolerror_wrongargs'] = 'Argomenti sbagliati';
$string['feedbackcat_toolerror_wrongtool'] = 'Funzione sbagliata per il compito';
$string['feedbackdisabled'] = 'La raccolta dei feedback è stata disabilitata dall\'amministratore del sito.';
$string['feedbackfailed'] = 'Impossibile inviare il feedback. Riprova più tardi.';
$string['feedbackflagfunctioncall'] = 'Segnala questa chiamata di funzione';
$string['feedbacksubmitted'] = 'Feedback inviato';
$string['feedbackthanks'] = 'Grazie per il tuo feedback!';
$string['feedbackthumbdown'] = 'Segnala un problema con questa risposta';
$string['feedbackthumbup'] = 'Questa risposta è stata utile';
$string['feedbackvalidation_categoryrequired'] = 'Seleziona almeno una categoria.';
$string['functionapprovecount'] = 'Approva {$a} chiamate';
$string['functioncall_actions'] = 'Approva o rifiuta la chiamata di funzione';
$string['functioncall_chip_action'] = 'Cambia modalità di auto-approvazione';
$string['functioncalldetails'] = 'Dettagli della chiamata di funzione';
$string['functiondeny'] = 'Rifiuta';
$string['functiondenyall'] = 'Rifiuta tutte';
$string['functionloopguardbody'] = 'Questa funzione è già stata eseguita {$a} volte con lo stesso input. L\'auto-approvazione è sospesa per un possibile ciclo; approva per continuare.';
$string['functionloopguardheading'] = 'Chiamata ripetuta.';
$string['functionname'] = 'Nome della funzione';
$string['functionparameters'] = 'Parametri';
$string['functionresult'] = 'Risultato';
$string['functionresultdiscarded'] = 'Il risultato era troppo grande ({$a}) ed è stato scartato. Restringi la richiesta applicando un filtro, chiedendo meno campi oppure usando una funzione più specifica. Ripetere la stessa chiamata produrrà lo stesso errore.';
$string['functions_intro'] = '<p><b>Non tutte le funzioni web service sono adatte all\'agente IA.</b> Alcune sono nate per la comunicazione client-server (contrassegnate con AJAX) o per gli utenti non autenticati (Senza login), e per altre esistono alternative migliori. Alcune funzioni AJAX si comportano bene con l\'agente IA, ma la maggior parte no. Il plugin Agente IA assegna un punteggio di rilevanza (1-10) alle funzioni del core e dei plugin standard e abilita quelle con punteggio 5 o superiore. Le funzioni dei plugin aggiuntivi non ricevono un punteggio; vengono invece abilitate automaticamente tutte le loro funzioni non AJAX. Usa questa pagina per esaminare le funzioni disponibili e abilitarle o disabilitarle singolarmente.</p><p>Quando una funzione richiede uno o più privilegi, non è disponibile per gli utenti che non hanno almeno uno di quei privilegi in qualche contesto del sito. Per il core e per i plugin standard il plugin Agente IA imposta correttamente questi privilegi. Per i plugin aggiuntivi i privilegi sono ricavati dalla definizione della funzione e, poiché Moodle non applica da sé questo controllo, potrebbero essere errati.</p>';
$string['functions_report'] = 'Funzioni dell\'agente IA';
$string['functionstatus_denied'] = 'Rifiutata';
$string['functionstatus_failed'] = 'Non riuscita';
$string['functionstatus_pending'] = 'In attesa di approvazione';
$string['functionstatus_processing'] = 'In esecuzione...';
$string['functiontype'] = 'Tipo';
$string['functiontype_help'] = 'Il tipo della funzione web service e le sue proprietà:

* **Lettura**: recupera dati senza modificare nulla
* **Scrittura**: crea o modifica dati
* **AJAX**: usata internamente da Moodle per le richieste tra client e server, difficilmente adatta come funzione per l\'agente IA
* **Senza login**: disponibile per gli utenti non autenticati, anch\'essa difficilmente adatta come funzione per l\'agente IA';
$string['functiontype_read'] = 'Lettura';
$string['functiontype_write'] = 'Scrittura';
$string['gemini_api_generatecontent'] = 'generateContent (stabile)';
$string['gemini_api_interactions'] = 'Interactions API (beta)';
$string['gemini_api_type'] = 'Tipo di API';
$string['gemini_api_type_desc'] = 'Quale API di Gemini usare per le chat a più turni. generateContent è l\'endpoint standard privo di stato e ricostruisce l\'intero elenco dei messaggi a ogni turno. La Interactions API è attualmente in beta; mantiene lo stato della chat lato Google (quindi a ogni turno viene inviato solo il nuovo input), ma il suo schema può cambiare senza preavviso.';
$string['gemini_builtin_code_execution'] = 'Abilita lo strumento Code Execution';
$string['gemini_builtin_code_execution_desc'] = 'Consente a Gemini di scrivere ed eseguire codice Python in una sandbox per svolgere calcoli o elaborare dati. Solo per i modelli Gemini 3 e successivi; sui modelli Gemini 2.5 e precedenti l\'impostazione viene ignorata senza avvisi, perché quei modelli non possono combinare gli strumenti integrati con le chiamate di funzione personalizzate.';
$string['gemini_builtin_google_search'] = 'Abilita il grounding con Google Search';
$string['gemini_builtin_google_search_desc'] = 'Consente a Gemini di fondare le risposte sui risultati aggiornati della ricerca web. Solo per i modelli Gemini 3 e successivi; sui modelli Gemini 2.5 e precedenti l\'impostazione viene ignorata senza avvisi, perché quei modelli non possono combinare gli strumenti integrati con le chiamate di funzione personalizzate. Ogni ricerca viene fatturata separatamente.';
$string['gemini_builtin_url_context'] = 'Abilita lo strumento URL Context';
$string['gemini_builtin_url_context_desc'] = 'Consente a Gemini di leggere e analizzare i contenuti degli URL pubblici citati dall\'utente. Solo per i modelli Gemini 3 e successivi; sui modelli Gemini 2.5 e precedenti l\'impostazione viene ignorata senza avvisi, perché quei modelli non possono combinare gli strumenti integrati con le chiamate di funzione personalizzate. Gli URL devono essere accessibili pubblicamente (niente localhost, nessuna autenticazione).';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = 'Vuoi usare questa chat affiancata al tuo sito? Trascina <a href="{$a}">{$a}</a> in una nuova finestra, oppure fai clic con il tasto destro e usa la vista affiancata del browser.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'File {$a->size}, dimensioni {$a->dimensions}. Anteprima {$a->preview} ({$a->scale}%).';
$string['importskill'] = 'Importa skill';
$string['importskill_addmore'] = 'Aggiungi altri...';
$string['importskill_button'] = 'Importa {$a} skill';
$string['importskill_buttonone'] = 'Importa 1 skill';
$string['importskill_choose'] = 'Scegli i file...';
$string['importskill_drophint'] = 'Trascina qui i file delle skill, oppure usa il pulsante.';
$string['importskill_fileone'] = '1 file selezionato';
$string['importskill_files'] = 'File selezionati: {$a}';
$string['importskill_statusinvalid'] = 'Non è un file di skill';
$string['importskill_statusnew'] = 'Nuova skill';
$string['importskill_statusupdate'] = 'Aggiorna {$a}';
$string['importskill_summarynew'] = 'Nuove: {$a}';
$string['importskill_summaryskipped'] = 'Ignorate: {$a}';
$string['importskill_summaryupdate'] = 'Da aggiornare: {$a}';
$string['importskill_toolarge'] = 'I dati della skill sono troppo grandi (massimo {$a}).';
$string['inlinefilecharlimit'] = 'Limite del contenuto dei file incorporati';
$string['inlinefilecharlimit_desc'] = 'Quantità massima di un file di testo che può essere incorporata direttamente nella chat quando un file viene letto in linea. I contenuti più lunghi vengono troncati. L\'inserimento in linea è usato quando il modello lo richiede e come ripiego per i provider IA che non possono accettare file. I contenuti incorporati vengono inviati di nuovo insieme alla cronologia della chat a ogni turno, quindi un limite alto aumenta l\'utilizzo dei token.';
$string['invalidparameter'] = 'Rilevato parametro non valido: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Attiva licenza';
$string['licenseactivate_help'] = 'Inserire la chiave di licenza ricevuta via email da LMSCloud. La chiave di licenza può essere attivata su un numero limitato di siti (di solito due). È possibile disattivarla in qualsiasi momento per usarla su un altro sito.';
$string['licensedeactivate'] = 'Disattiva';
$string['licensedeactivate_help'] = 'Disattiva la chiave di licenza su questo sito, in modo che possa essere usata su un altro sito.';
$string['licenseerror_deactivate'] = 'Impossibile disattivare la licenza. Il server potrebbe essere temporaneamente non disponibile; riprova più tardi.';
$string['licenseerror_deactivate_forced'] = 'Questa licenza è impostata nella configurazione del server (config.php) e non può essere disattivata da questa pagina.';
$string['licenseerror_invalid'] = 'La chiave di licenza non è valida oppure non è stato possibile attivarla.';
$string['licenseerror_limit'] = 'Non ci sono posti liberi per questa chiave di licenza. Disattiva prima un altro sito, poi riprova.';
$string['licenseerror_transport'] = 'Impossibile raggiungere il server delle licenze. Controlla la connessione e riprova.';
$string['licensekey'] = 'Chiave di licenza';
$string['licenselocked_expired'] = 'Questo sito non convalida la licenza da oltre 14 giorni. Verifica di nuovo la licenza per ripristinare l\'accesso.';
$string['licenselocked_key_rejected'] = 'Questa chiave di licenza non è più valida su questo sito.';
$string['licenselocked_url_mismatch'] = 'L\'indirizzo web di questo sito è cambiato; il titolare della licenza deve autorizzarlo.';
$string['licensemanageinsettings'] = 'Gestisci la licenza nelle impostazioni dell\'agente IA.';
$string['licenserecheck'] = 'Verifica di nuovo';
$string['licensesetting'] = 'Licenza dell\'agente IA';
$string['licensesetting_desc'] = 'Attivare, verificare di nuovo o disattivare la licenza dell\'agente IA per questo sito.';
$string['licensestatus_materialsmissing'] = 'La licenza dell\'agente IA è attiva, ma i materiali scaricati risultano mancanti, quindi non è disponibile alcuna funzione. Verifica di nuovo per scaricarli.';
$string['licensestatus_notactivated'] = 'Per usare l\'agente IA su questo sito è necessaria una licenza.';
$string['licensestatus_valid'] = 'Licenza dell\'agente IA attiva.';
$string['loginrequired'] = 'Solo utenti autenticati';
$string['logretention'] = 'Conserva i log delle chat per';
$string['logretention_desc'] = 'I messaggi e i dati sull\'utilizzo dei token delle chat senza attività per questo periodo vengono eliminati definitivamente dal database. Questo vale solo per le chat già eliminate dalla cronologia, dall\'utente stesso o tramite l\'impostazione precedente. Impostare 0 per conservare i log per sempre.';
$string['maxfilesize'] = 'Dimensione massima dei file per l\'LLM';
$string['maxfilesize_desc'] = 'Impedisce agli utenti di inviare all\'LLM file troppo grandi. I file di grandi dimensioni consumano rapidamente i token e fanno lievitare i costi. I file oltre questa dimensione vengono rifiutati con un errore prima che un solo byte lasci il sito.

I provider IA rifiutano comunque i file che superano i propri limiti per richiesta (Anthropic 32 MB, Gemini 50 MB in linea, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Dimensione massima del risultato di una funzione';
$string['maxfunctionresultsize_desc'] = 'Quantità massima di dati che una singola funzione può restituire al modello IA. Alcune funzioni di Moodle non hanno filtri e restituiscono tutti gli utenti o tutti i corsi del sito, sommergendo il modello e consumando token a ogni turno successivo. Un risultato oltre questo limite viene scartato e al modello viene chiesto di restringere la richiesta. Impostare zero per non avere limiti. La lettura di un file in linea è esclusa; per quella si usa "Limite del contenuto dei file incorporati".';
$string['newchat'] = 'Nuova chat';
$string['newchatchooser_blank_sub'] = 'Senza contesto. Assistente generico.';
$string['newchatchooser_clone'] = 'Come questa chat';
$string['newchatchooser_continue'] = 'Riprendi da dove eri';
$string['newchatchooser_desc_default'] = 'Avvia una nuova chat su questa pagina, oppure riprendi da dove eri.';
$string['newchatchooser_desc_full'] = 'Avvia una chat generica, oppure riprendi da dove eri.';
$string['newchatchooser_desc_multi'] = 'Questa pagina offre alcuni punti di partenza. Scegline uno, oppure riprendi da dove eri.';
$string['newchatchooser_error'] = 'Impossibile avviare una nuova chat. Riprova.';
$string['newchatchooser_none'] = 'Qui non c\'è nessuna pagina in cui puoi avviare una nuova chat.';
$string['newchatchooser_onthispage'] = 'In questa pagina:';
$string['newchatchooser_title'] = 'Avvia una nuova chat';
$string['nfilesattached'] = 'File allegati: {$a}';
$string['nonauth'] = 'Senza login';
$string['numfiles'] = 'File: {$a}';
$string['numimages'] = 'Immagini: {$a}';
$string['numotherfiles'] = 'Altri: {$a}';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'Tipo di API';
$string['openai_api_type_desc'] = 'Quale API di OpenAI usare per le chat a più turni. La Responses API mantiene lo stato della chat lato server, quindi a ogni turno viene inviato solo il nuovo input (costi inferiori, cronologia più semplice). Chat Completions ricostruisce l\'intero elenco dei messaggi a ogni richiesta (compatibilità più ampia con i provider).<br><br>La Responses API è supportata da: <strong>{$a}</strong>. Gli altri provider ripiegheranno senza avvisi su Chat Completions, a prescindere da questa impostazione.';
$string['openai_heading'] = 'OpenAI (o compatibile)';
$string['openlink'] = 'Apri il link';
$string['placeholder'] = 'Scrivi un messaggio...';
$string['placement_add'] = 'Aggiungi posizionamento';
$string['placement_confirmdelete'] = 'Sei sicuro di voler eliminare questo posizionamento?';
$string['placement_copyof'] = '{$a} (copia)';
$string['placement_defaultname'] = 'Agente IA';
$string['placement_deleted'] = 'Posizionamento eliminato.';
$string['placement_duplicated'] = 'Posizionamento duplicato.';
$string['placement_edit'] = 'Modifica posizionamento';
$string['placement_initialskills'] = 'Skill iniziali';
$string['placement_initialskills_help'] = 'Skill caricate automaticamente all\'avvio della chat. Facoltative; l\'agente può comunque caricare qualsiasi skill quando serve. Le skill impostate governano anche questo posizionamento: gli utenti che non hanno accesso a nessuna di esse non vedranno il pulsante né la voce di menu e, se in seguito tutte le skill impostate vengono rimosse o disabilitate, il posizionamento smette di comparire.';
$string['placement_intro'] = '<p>I posizionamenti permettono di offrire agenti su misura per un compito specifico. Ogni posizionamento aggiunge il pulsante dell\'agente IA alle pagine il cui URL corrisponde a una delle sue maschere e può avviare la chat con skill iniziali e un testo di benvenuto predefiniti. Se sono impostate delle skill iniziali, gli utenti che non hanno accesso a nessuna di esse non vedranno il pulsante.</p><p>Le skill iniziali stabiliscono solo il punto di partenza della chat; l\'agente può comunque accedere a tutte le funzioni abilitate, non solo a quelle delle skill.</p>';
$string['placement_location'] = 'Posizione del pulsante';
$string['placement_location_floating'] = 'Pulsante flottante';
$string['placement_location_h1'] = 'Intestazione della pagina (H1)';
$string['placement_location_h2'] = 'Intestazione secondaria (H2)';
$string['placement_menuheading'] = 'Chiedi all\'agente IA';
$string['placement_name'] = 'Nome';
$string['placement_name_help'] = 'Mostrato agli utenti: nel menu utente, come tooltip del pulsante e (quando più posizionamenti corrispondono alla stessa pagina) nel menu del pulsante.';
$string['placement_save'] = 'Salva posizionamento';
$string['placement_saved'] = 'Posizionamento salvato.';
$string['placement_skillmissing'] = 'Skill non trovata';
$string['placement_suggestedprompts'] = 'Prompt suggeriti';
$string['placement_suggestedprompts_help'] = 'Un prompt per riga, proposto come pulsante sopra la casella del messaggio nella schermata iniziale della chat. Un clic lo invia subito, ad esempio "Riassumi questo corso". Per proporre un prompt che l\'utente deve prima completare, inserire ... in un punto qualsiasi: il prompt viene allora inserito nella casella del messaggio invece di essere inviato, ad esempio "Riassumi la sezione ... di questo corso". Lasciare vuoto per non proporre alcun prompt.';
$string['placement_urlmask'] = 'Maschere URL';
$string['placement_urlmask_help'] = 'Un pattern per riga. Usare * come carattere jolly, ad esempio /course/view.php* oppure /mod/*/view.php*. Nota: nelle pagine in cui un posizionamento più specifico occupa la stessa posizione, un posizionamento generico che corrisponde a /* viene nascosto, in modo che gli utenti vedano solo quello più pertinente.';
$string['placement_urlmask_invalid'] = 'Ogni maschera URL deve iniziare con una barra: "{$a}" non lo fa.';
$string['placement_welcome'] = 'Testo di benvenuto personalizzato (facoltativo)';
$string['placement_welcome_help'] = 'Sostituisce il messaggio di benvenuto standard nella schermata iniziale della chat. Lasciare vuoto per usare quello predefinito.';
$string['pluginname'] = 'Agente IA';
$string['previouschats'] = 'Chat precedenti';
$string['privacy:metadata:aiprovider'] = 'Le chat vengono inviate al provider IA scelto dall\'amministratore del sito, ad esempio OpenAI, Azure OpenAI, Google Gemini o Anthropic, affinché possa generare una risposta. Il plugin invia ogni richiesta direttamente al provider e non tramite il sottosistema IA di Moodle. Quale azienda riceva i dati, e per quanto tempo li conservi, dipende dal provider configurato nel sito e dalle condizioni del provider stesso.';
$string['privacy:metadata:aiprovider:files'] = 'I file che l\'utente allega a una chat e i file che l\'agente legge dal sito per conto dell\'utente, caricati affinché il modello possa leggerne il contenuto.';
$string['privacy:metadata:aiprovider:messages'] = 'La cronologia della chat, inviata di nuovo a ogni turno: le richieste dell\'utente, le risposte dell\'assistente e i risultati delle funzioni di Moodle eseguite dall\'agente, che possono contenere dati personali di altre persone restituiti da quelle funzioni.';
$string['privacy:metadata:aiprovider:userid'] = 'L\'ID dell\'utente che sta usando la chat, incluso nelle istruzioni fornite al modello affinché possa agire per suo conto.';
$string['privacy:metadata:core_files'] = 'File allegati ai messaggi dell\'agente IA.';
$string['privacy:metadata:feedback'] = 'Quando i feedback sono abilitati e un utente valuta una risposta o segnala una chiamata di funzione non riuscita, lo scambio valutato viene inviato agli sviluppatori del plugin Agente IA affinché il comportamento dell\'agente possa essere migliorato. Non viene inviato nulla se l\'utente non sceglie di inviare un feedback, e la funzionalità può essere disattivata del tutto con l\'impostazione "Consenti feedback".';
$string['privacy:metadata:feedback:freetext'] = 'Il commento che l\'utente scrive facoltativamente quando invia un feedback, trasmesso così come è stato inserito.';
$string['privacy:metadata:feedback:snapshot'] = 'Una trascrizione dello scambio valutato: la domanda dell\'utente, le risposte dell\'assistente e i nomi delle funzioni chiamate. Gli indirizzi email sono mascherati e gli argomenti e i risultati di quelle funzioni sono esclusi, a eccezione delle ricerche di funzioni svolte dall\'agente stesso. L\'utente può modificare il testo prima di inviarlo.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'La preferenza di non mostrare più la finestra di conferma della chiusura.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'La dimensione che l\'utente ha dato al pannello della chat in overlay.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'La larghezza che l\'utente ha dato al pannello della chat nella barra laterale.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'L\'ultima vista della chat usata (overlay, barra laterale o schermo intero).';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Le chat tra un utente e l\'agente IA. Le chat eliminate dall\'utente vengono archiviate anziché rimosse, in modo che l\'utilizzo dei token resti tracciabile.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'Il momento in cui la chat è stata archiviata (eliminata dall\'utente), se applicabile.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'Il momento in cui la chat è stata creata.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Quando è stato memorizzato l\'ultimo messaggio della chat.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'Il momento in cui la chat è stata aggiornata l\'ultima volta.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'Il nome della chat, generato dal primo messaggio.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'L\'utente a cui appartiene la chat.';
$string['privacy:metadata:tool_aiagent_message'] = 'I singoli messaggi all\'interno di una chat, comprese le richieste dell\'utente e le risposte dell\'IA.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'Il contenuto del messaggio.';
$string['privacy:metadata:tool_aiagent_message:pagecontext'] = 'Per un messaggio inviato dalla chat in overlay o nella barra laterale, l\'indirizzo e il nome della pagina che l\'utente stava leggendo in quel momento.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Chi ha inviato il messaggio: l\'utente, l\'assistente, il sistema o una funzione.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'Il momento in cui il messaggio è stato creato.';
$string['privacy:metadata:tool_aiagent_usage'] = 'L\'utilizzo dei token registrato per ogni richiesta IA, conservato per il monitoraggio dell\'utilizzo.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'Il numero di token di output (completamento) utilizzati.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'Il modello IA che ha gestito la richiesta.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'Il numero di token di input (prompt) utilizzati.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'Il provider IA che ha gestito la richiesta.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'Il momento in cui la richiesta è stata effettuata.';
$string['relevancescore'] = 'Punteggio di rilevanza';
$string['relevancescore_help'] = 'Il punteggio di rilevanza indica quanto una funzione web service sia adatta all\'agente IA, su una scala da 1 a 10.

**I punteggi alti (7-10)** sono assegnati alle funzioni chiaramente utili a un assistente IA, come creare corsi, iscrivere utenti, cercare contenuti o recuperare valutazioni.

**I punteggi intermedi (4-6)** sono tipici delle operazioni distruttive o irreversibili (come eliminare corsi o annullare iscrizioni), utili ma più rischiose, e delle funzioni di nicchia con un ambito di applicazione limitato.

**I punteggi bassi (1-3)** sono assegnati alle funzioni pensate per la comunicazione interna tra browser e server, alle funzioni che non richiedono autenticazione, alle funzioni deprecate o a quelle che duplicano alternative migliori.

**Il punteggio 0** significa che la funzione non è ancora stata valutata. Succede spesso per le funzioni dei plugin di terze parti.

Il punteggio di rilevanza è servito a stabilire il valore iniziale di abilitazione di ciascuna funzione. I punteggi iniziali dei componenti del core di Moodle sono stati generati dall\'IA e potrebbero richiedere una revisione manuale.';
$string['removefilenamed'] = 'Rimuovi file: {$a}';
$string['renamechat'] = 'Rinomina chat';
$string['renamechat_label'] = 'Nuovo nome per la chat';
$string['responses_endpoints'] = 'Endpoint personalizzati della Responses API';
$string['responses_endpoints_desc'] = 'Sostituisce l\'endpoint della Responses API quando un\'installazione ospitata o dietro proxy di OpenAI o Azure OpenAI lo espone a un indirizzo non standard. Lasciare vuoto per usare i valori predefiniti integrati. Non ha effetto quando il tipo di API è Chat Completions.<br><br>
Ad esempio, https://tua-risorsa.azure.com/api/responses?api-version=preview. L\'endpoint della Files API è ricavato sostituendo /responses con /files e mantenendo la stringa di query, quindi i caricamenti vanno a https://tua-risorsa.azure.com/api/files?api-version=preview.<br><br>
Se si usano più istanze di un provider, inserire un URL per riga. Ogni provider usa la riga il cui host corrisponde al proprio endpoint API.';
$string['responses_endpoints_invalidline'] = 'Ogni riga deve essere un URL https completo il cui percorso termina con /responses; http è accettato solo per localhost. Riga non valida: {$a}';
$string['resume_desc'] = 'Hai una chat recente. Riprendi da dove eri, oppure avviane una nuova.';
$string['resume_lastmessage'] = 'Ultimo messaggio {$a} fa';
$string['resume_resume'] = 'Riprendi l\'ultima chat';
$string['resume_title'] = 'Bentornato';
$string['sendmessage'] = 'Invia';
$string['settings'] = 'Impostazioni dell\'agente IA';
$string['showallfiles'] = 'Mostra tutti';
$string['skill_add'] = 'Aggiungi skill';
$string['skill_edit'] = 'Modifica skill';
$string['skill_save_close'] = 'Salva e chiudi';
$string['skill_save_preview'] = 'Salva e visualizza anteprima';
$string['skill_saved'] = 'Skill salvata.';
$string['skilladd_aitip'] = 'Invece di compilare il modulo a mano, puoi chiedere all\'agente IA di creare la skill al posto tuo: sa trovare le funzioni giuste e scrivere una bozza delle istruzioni. <a href="{$a}">Apri l\'agente IA</a>.';
$string['skillbundled'] = 'Inclusa';
$string['skillbundledchangedinfo'] = 'Questa skill è inclusa nel plugin ed è stata modificata su questo sito.';
$string['skillbundledchangedinfo_help'] = 'Chiedi all\'agente IA di confrontare questa skill con la versione inclusa nel plugin e di ripristinare quella versione se non vuoi più le tue modifiche. Una skill modificata non riceve più aggiornamenti.';
$string['skillbundledinfo'] = 'Inclusa nel plugin. Può essere disabilitata e modificata, ma non eliminata né rinominata.';
$string['skillbundlednodelete'] = 'Una skill inclusa nel plugin non può essere eliminata. Puoi invece disabilitarla.';
$string['skillbundlednorename'] = 'Il nome abbreviato di una skill inclusa nel plugin non può essere modificato.';
$string['skillcapabilities_help'] = 'Ricavati dalle funzioni principali della skill: un utente può usare la skill solo se possiede almeno uno di questi privilegi in qualche contesto del sito. L\'elenco riunisce i privilegi richiesti da tutte le funzioni principali.';
$string['skillcapabilities_none'] = 'Nessuno. La skill è disponibile per tutti gli utenti.';
$string['skillconfigured'] = 'Configurate';
$string['skilldeleted'] = 'Skill "{$a}" eliminata.';
$string['skilldescription'] = 'Descrizione';
$string['skilldescription_help'] = 'A cosa serve la skill, in modo che l\'assistente sappia quando caricarla. Descrivere il compito o l\'ambito di cui si occupa, non i passaggi che esegue. Compare sia nell\'elenco delle skill (per le persone) sia nel prompt di sistema (per l\'assistente).';
$string['skillexists'] = 'Esiste già una skill con il nome abbreviato "{$a}".';
$string['skillimport_badmasks'] = 'I campi "mainfunctions" e "otherfunctions" devono contenere ciascuno un elenco di maschere.';
$string['skillimport_badshortname'] = 'Ogni skill richiede un nome abbreviato valido (lettere, numeri, trattino, trattino basso).';
$string['skillimport_invalidjson'] = 'Il file caricato non contiene un JSON di skill valido.';
$string['skillimport_missingfield'] = 'Campo obbligatorio mancante: {$a}.';
$string['skillimported'] = 'Skill "{$a}" importata.';
$string['skillinstructions'] = 'Istruzioni';
$string['skillinstructions_help'] = 'Indicazioni caricate nella chat insieme alla skill. Includere solo ciò che non è ovvio: l\'assistente vede già ogni funzione caricata con la sua descrizione, quindi non serve ripetere ciò che una funzione fa né ricordargli di passare i parametri più scontati. Annotare l\'ordine del flusso di lavoro, le decisioni e le insidie che le descrizioni non coprono, e introdurre con "Se ..." i passaggi che valgono solo in certi casi.';
$string['skillloadedevent'] = 'Skill caricata · {$a}';
$string['skillmainfunctions'] = 'Funzioni principali';
$string['skillmainfunctions_help'] = 'Un insieme ristretto di maschere che seleziona le funzioni fondamentali della skill per creare e aggiornare. I privilegi di queste funzioni decidono a chi viene offerta la skill: solo agli utenti che possono accedere ad almeno una di esse. Ogni maschera corrisponde al nome di una funzione oppure a un pattern di componente/nome ("*" è un carattere jolly; il prefisso "~" esclude le corrispondenze). Lasciare vuoto per offrire la skill a tutti.';
$string['skillmatched'] = 'Corrispondenze ({$a})';
$string['skillmisconfigured'] = 'Attualmente non disponibile per nessuno: nessuna delle sue funzioni principali porta a una funzione abilitata.';
$string['skillname'] = 'Nome';
$string['skillname_help'] = 'Un nome breve e leggibile per la skill, mostrato nell\'elenco delle skill.';
$string['skillnomatch'] = 'Nessuna funzione abilitata corrisponde a questi pattern.';
$string['skillnotfound'] = 'Nessuna skill trovata: {$a}.';
$string['skillotherfunctions'] = 'Altre funzioni';
$string['skillotherfunctions_help'] = 'Maschere per le altre funzioni che la skill porta con sé: letture, funzioni di supporto o un intero componente. Stessa sintassi delle funzioni principali, ma queste non influiscono su chi riceve la skill. Lasciare vuoto se la skill non ha bisogno di funzioni aggiuntive.';
$string['skills_intro'] = '<p>Una skill riunisce istruzioni specializzate per un compito preciso con l\'elenco delle funzioni consigliate per svolgerlo. Usa le skill per le attività ricorrenti in più passaggi in cui l\'agente IA tende a confondersi o non trova le funzioni giuste, oppure per i compiti tipici della tua organizzazione.</p><p>L\'elenco delle skill e delle loro descrizioni è sempre a disposizione dell\'agente IA, che carica da sé una skill ogni volta che la ritiene adatta alla richiesta dell\'utente. Una skill è disponibile solo per gli utenti che possono accedere ad almeno una delle sue funzioni principali. Ad esempio, una skill pensata per i docenti non sarà visibile agli studenti.</p>';
$string['skillshortname'] = 'Nome abbreviato';
$string['skillshortname_help'] = 'Un nome macchina stabile, univoco in tutto il sito: solo lettere, numeri, trattino e trattino basso. Può essere modificato in seguito, a meno che la skill non sia inclusa nel plugin.';
$string['skilltags'] = 'Tag';
$string['skilltags_help'] = 'I tag servono solo per filtrare e non vengono inviati al modello.';
$string['skilltoobroad'] = 'Corrisponde a {$a} funzioni: potrebbe essere troppo generica. Valuta di restringere le maschere delle funzioni.';
$string['skillunavailable'] = 'Non disponibile';
$string['skillupdated'] = 'Skill "{$a}" aggiornata.';
$string['suggestedprompt_edit'] = 'Modifica questo messaggio prima di inviarlo';
$string['suggestedprompt_send'] = 'Invia questo messaggio';
$string['switchview'] = 'Cambia vista';
$string['systeminstruction'] = 'Istruzioni di sistema personalizzate';
$string['systeminstruction_desc'] = 'Istruzioni personalizzate inviate al modello IA a ogni richiesta, che ne definiscono comportamento, tono e possibilità. Lasciare vuoto per usare quelle predefinite (mostrate sotto). È possibile usare come segnaposto {siteurl} (URL del sito), {userid} (ID dell\'utente corrente) e {date} (data odierna, formato ISO); vengono sostituiti in fase di esecuzione. Istruzioni predefinite:{$a->default}

Sempre aggiunto in coda alle istruzioni di sistema (predefinite o personalizzate):{$a->context}';
$string['tab_functions'] = 'Funzioni';
$string['tab_placements'] = 'Posizionamenti';
$string['tab_skills'] = 'Skill';
$string['tagarea_tool_aiagent_functions'] = 'Tag delle funzioni dell\'agente IA';
$string['tagarea_tool_aiagent_skill'] = 'Tag delle skill dell\'agente IA';
$string['task_cleanup_chats'] = 'Elimina le vecchie chat dell\'agente IA';
$string['task_purge_provider_data'] = 'Elimina i dati delle chat dell\'agente IA presso il provider IA';
$string['task_revalidate_license'] = 'Riconvalida la licenza dell\'agente IA';
$string['thinking'] = 'L\'agente IA sta pensando...';
$string['timecreated'] = 'Data di creazione';
$string['timelastactivity'] = 'Ultima attività';
$string['timemodified'] = 'Data di modifica';
$string['tryagain'] = 'Riprova';
$string['usage_completiontokens'] = 'Token di output';
$string['usage_model'] = 'Modello';
$string['usage_prompttokens'] = 'Token di input';
$string['usage_provider'] = 'Provider';
$string['usage_totaltokens'] = 'Token totali';
$string['viewdetails'] = 'Visualizza dettagli';
$string['viewtype_fullscreen'] = 'Schermo intero';
$string['viewtype_overlay'] = 'Overlay';
$string['viewtype_sidebar'] = 'Barra laterale';
$string['viewtypes'] = 'Viste disponibili';
$string['viewtypes_alldisabled_warning'] = 'L\'agente IA non è disponibile per nessuno perché tutte le viste sono disabilitate nelle <a href="{$a}">impostazioni</a>.';
$string['viewtypes_desc'] = 'Le viste della chat che gli utenti possono aprire: un piccolo overlay nell\'angolo della pagina, una barra laterale accanto al contenuto della pagina e la pagina della chat a schermo intero. Deselezionarle tutte per disattivare temporaneamente l\'agente IA per tutti gli utenti.';
$string['viewtypes_unavailable'] = 'L\'agente IA al momento non è disponibile.';
$string['welcome_skillsmore'] = '+{$a} altre';
$string['welcome_tryasking'] = 'Prova a chiedere';
$string['welcomedesc'] = 'Chiedi all\'agente IA informazioni sul tuo sito, sui corsi, sugli utenti o sui contenuti. Può leggere e, con la tua approvazione, apportare modifiche.';
$string['welcometitle'] = 'Benvenuto, {$a}';

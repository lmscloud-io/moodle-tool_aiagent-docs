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
 * Catalan language pack for AI agent.
 * Last updated: 2026-10-25
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_needsyou'] = 'Agent d\'IA: espera la vostra aprovació';
$string['activity_working'] = 'Agent d\'IA: treballant';
$string['addon'] = 'Complement';
$string['aiagent:autoapproveall'] = 'Triar el mode d\'aprovació automàtica «Totes», que executa cada crida de funció sense confirmació';
$string['aiagent:usechat'] = 'Iniciar xats amb l\'agent d\'IA (determina on es pot iniciar un xat; no restringeix a quines dades pot accedir el xat un cop iniciat)';
$string['allfunctions'] = 'Totes';
$string['allowfeedback'] = 'Permet els comentaris';
$string['allowfeedback_desc'] = 'Si s\'habilita, els usuaris poden valorar les respostes de l\'assistent i marcar les crides de funcions que han fallat. Els enviaments s\'adrecen als desenvolupadors del connector Agent d\'IA (no a cap LLM) perquè puguin millorar el comportament de les crides de funcions de Moodle. Només s\'envia l\'intercanvi valorat, no el xat complet, i l\'usuari pot editar el text abans d\'enviar-lo. Deshabiliteu aquesta opció en llocs amb polítiques estrictes de trànsit sortint.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Habilita l\'eina «web fetch»';
$string['anthropic_web_fetch_desc'] = 'Permet que Claude obtingui adreces URL externes des del servidor amb l\'eina web_fetch d\'Anthropic. És útil quan el xat esmenta pàgines web públiques que el model hauria de llegir. Els fitxers d\'aquest lloc Moodle es gestionen per separat amb la funció read_file (que els puja a la Files API d\'Anthropic quan cal), de manera que deshabilitar web_fetch no afecta l\'accés als recursos del curs ni als fitxers adjunts.';
$string['attachedfiles'] = 'Fitxers adjunts';
$string['attachfile'] = 'Adjunta un fitxer';
$string['autoapprove'] = 'Aprovació automàtica';
$string['autoapprove_all'] = 'Totes (useu-ho amb precaució)';
$string['autoapprove_all_desc'] = 'Omet totes les confirmacions';
$string['autoapprove_all_disabled'] = 'No teniu permís per utilitzar aquest mode.';
$string['autoapprove_all_short'] = 'Totes';
$string['autoapprove_header'] = 'Aprovació automàtica de crides de funcions';
$string['autoapprove_none'] = 'Cap';
$string['autoapprove_none_desc'] = 'Pregunta abans de cada crida de funció';
$string['autoapprove_readonly'] = 'Només lectura';
$string['autoapprove_readonly_desc'] = 'Aprova automàticament les lectures, pregunta per les escriptures';
$string['autoapprove_safe'] = 'Segures';
$string['autoapprove_safe_desc'] = 'Aprova automàticament les accions que no modifiquen el lloc';
$string['autoapprove_safe_examples'] = 'Lectures, i també redimensionar adjunts, generar imatges, enviar fitxers al LLM, etc.';
$string['autoapprovetimelimit'] = 'Límit de temps de l\'aprovació automàtica';
$string['autoapprovetimelimit_desc'] = 'Quant de temps pot continuar l\'agent d\'IA executant funcions aprovades automàticament després de l\'última acció de l\'usuari, com enviar un missatge o aprovar funcions. Passat aquest temps, demana aprovació abans de la funció següent. Així s\'evita que els xats abandonats consumeixin recursos del servidor i segments textuals d\'IA. 0 vol dir sense límit.';
$string['autopaused'] = 'L\'aprovació automàtica s\'ha aturat després de {$a} sense cap acció vostra. Aproveu-ho per continuar.';
$string['background_heading'] = 'Xats en segon pla';
$string['backgroundchats'] = 'Permet els xats en segon pla';
$string['backgroundchats_desc'] = 'Executa cada xat en un procés de PHP CLI propi al servidor. Així l\'agent d\'IA continua treballant després que l\'usuari surti de la pàgina o tanqui la pestanya, executa les cadenes de funcions més de pressa i en prémer Atura s\'interromp l\'agent immediatament, fins i tot mentre s\'executa una funció. Quan està desactivat, o si no hi ha cap PHP CLI disponible, els xats s\'executen dins la petició del navegador de l\'usuari.';
$string['backgroundunavailable_effect'] = 'L\'agent d\'IA executa les cadenes de funcions a través del navegador, de manera que són més lentes i s\'aturen quan l\'usuari surt de la pàgina o tanca la pestanya. Les funcions que ja s\'estan executant no es poden interrompre.';
$string['backgroundunavailable_executable'] = 'El Camí al PHP CLI per als xats en segon pla no és un fitxer executable.';
$string['backgroundunavailable_function'] = 'La funció de PHP {$a} està desactivada en aquest servidor.';
$string['backgroundunavailable_pathtophp'] = 'El Camí al PHP CLI no està definit.';
$string['backgroundunavailable_setpath'] = 'Definiu el Camí al PHP CLI';
$string['backgroundunavailable_windows'] = 'Els xats en segon pla no estan disponibles als servidors Windows.';
$string['backtoconfiguration'] = 'Torna a la configuració de l\'agent d\'IA';
$string['builtinfunction'] = 'Inclosa';
$string['bulk_disabled'] = 'Funcions deshabilitades: {$a}';
$string['bulk_disableselected'] = 'Deshabilita les seleccionades';
$string['bulk_enabled'] = 'Funcions habilitades: {$a}';
$string['bulk_enableselected'] = 'Habilita les seleccionades';
$string['bulk_withselected'] = 'Amb les funcions seleccionades';
$string['capabilities'] = 'Capacitats';
$string['chat_heading'] = 'Xats';
$string['chat_namelink'] = 'Nom amb enllaç';
$string['chatfrozen'] = 'Els skills d\'aquest xat ja no estan disponibles, de manera que ja no es pot continuar. Inicieu un xat nou.';
$string['chatfrozen_noplacement'] = 'Aquest xat es va iniciar en una versió anterior de l\'agent d\'IA, de manera que ja no es pot continuar. Inicieu un xat nou.';
$string['chathelpcontent'] = '<p>L\'agent d\'IA pot llegir i modificar contingut d\'aquest lloc en nom vostre. La majoria d\'accions demanen la vostra aprovació abans d\'executar-se. Podeu canviar el mode d\'aprovació automàtica al quadre del missatge per fer-ho més permissiu o més estricte.</p>
<p>Adjunteu fitxers arrossegant-los i deixant-los anar, enganxant-los o fent clic a la icona del clip. Després escriviu la vostra petició i premeu <strong>Envia</strong>. Premeu Retorn per enviar, o Maj i Retorn per a una línia nova.</p><p>La IA pot cometre errors. Verifiqueu els resultats.</p>';
$string['chatnopermission'] = 'Aquest xat es va iniciar en una zona del lloc on ja no teniu accés a l\'agent d\'IA, de manera que no es pot continuar.';
$string['chatnostartpermission'] = 'No teniu permís per iniciar un xat aquí. Obriu l\'agent d\'IA des d\'una pàgina on s\'ofereixi.';
$string['chatretention'] = 'Conserva els xats durant';
$string['chatretention_desc'] = 'Els xats sense activitat durant aquest temps se suprimeixen de l\'historial de xats dels usuaris, els seus fitxers adjunts se suprimeixen d\'aquest lloc i se sol·licita la supressió de les dades del xat emmagatzemades pel proveïdor d\'IA (respostes emmagatzemades i fitxers pujats). La supressió per part del proveïdor es fa en la mesura del possible i no està garantida; configureu també una política de retenció de dades equivalent al vostre compte del proveïdor. Els missatges i els registres d\'ús es conserven per als informes fins que venci el període de conservació dels registres de més avall. Poseu 0 per conservar els xats per sempre.';
$string['closeconfirm_background'] = 'L\'agent d\'IA continua treballant mentre el xat està tancat.';
$string['closeconfirm_body'] = 'Tancar la finestra no suprimeix el xat. El podeu tornar a obrir en qualsevol moment des del menú Xats anteriors. Els xats se suprimeixen automàticament al cap de {$a} dies.';
$string['closeconfirm_body_noretention'] = 'Tancar la finestra no suprimeix el xat. El podeu tornar a obrir en qualsevol moment des del menú Xats anteriors.';
$string['closeconfirm_close'] = 'Tanca el xat';
$string['closeconfirm_dontshowagain'] = 'No ho torneu a mostrar';
$string['closeconfirm_title'] = 'Voleu tancar aquest xat?';
$string['component'] = 'Component';
$string['component_filesandimages'] = 'Manipulació de fitxers i imatges';
$string['configuration'] = 'Configuració de l\'agent d\'IA';
$string['confirmdeleteskill'] = 'Segur que voleu suprimir aquest skill?';
$string['contextevent_opened'] = 'Obert des de {$a}';
$string['contextevent_page'] = 'Pàgina · {$a}';
$string['copyresponse'] = 'Copia la resposta';
$string['copyurl'] = 'Copia l\'adreça URL';
$string['datasource_chats'] = 'Xats de l\'agent d\'IA';
$string['datasource_usage'] = 'Ús de l\'agent d\'IA';
$string['deletechat_menu'] = 'Suprimeix el xat';
$string['deletechat_named'] = 'Suprimeix el xat: {$a}';
$string['disablefunction'] = 'Deshabilita aquesta funció';
$string['dragtoresize'] = 'Arrossegueu per canviar la mida';
$string['dynamicdiscovery'] = 'Descobriment dinàmic de funcions';
$string['dynamicdiscovery_automatic'] = 'Automàtic';
$string['dynamicdiscovery_desc'] = 'Optimitza l\'ús de segments textuals descobrint les funcions només quan calen. Es recomana si teniu habilitades moltes funcions de serveis web. En mode automàtic, s\'activa si hi ha més de {$a} funcions disponibles. Alguns proveïdors d\'IA tenen un límit en el nombre de funcions (per exemple, OpenAI té un límit de 128).';
$string['dynamicdiscovery_off'] = 'Desactivat';
$string['dynamicdiscovery_on'] = 'Activat';
$string['enabled'] = 'Habilitat';
$string['enablefunction'] = 'Habilita aquesta funció';
$string['entity_aiagentfunction'] = 'Funció de l\'agent d\'IA';
$string['entity_chat'] = 'Xat';
$string['entity_externalfunction'] = 'Funció de servei web';
$string['entity_message'] = 'Missatge';
$string['entity_placement'] = 'Emplaçament';
$string['entity_skill'] = 'Skill';
$string['entity_usage'] = 'Ús de segments textuals';
$string['error_interrupted_function'] = 'Una crida de funció s\'ha interromput abans d\'acabar. Pot ser que hagi aplicat canvis parcialment; comproveu l\'estat abans de tornar-ho a provar.';
$string['error_interrupted_llm'] = 'S\'ha interromput la comunicació amb el proveïdor d\'IA. Feu clic a «Torna-ho a provar» per repetir la petició.';
$string['errorbackgroundstart'] = 'L\'agent d\'IA no ha pogut començar a treballar en aquest xat. Demaneu a l\'administrador del lloc que revisi els paràmetres dels xats en segon pla.';
$string['errorbackgroundstart_admin'] = 'L\'agent d\'IA no ha pogut iniciar el seu procés en segon pla en aquest servidor. Corregiu el Camí al PHP CLI, o desactiveu els xats en segon pla, a {$a} dins dels paràmetres de l\'agent d\'IA.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'El missatge no pot ser buit.';
$string['errorfullscreendisabled'] = 'La vista de xat a pantalla completa no està habilitada en aquest lloc.';
$string['errorinconsistent'] = 'El xat és en un estat inconsistent i no pot continuar. Torneu a carregar la pàgina i torneu-ho a provar.';
$string['errorinvalidchat'] = 'No s\'ha trobat el xat o s\'ha denegat l\'accés.';
$string['errorinvalidname'] = 'El nom no pot ser buit.';
$string['errormissingfeedbackparams'] = 'Falta el missatge o el tipus de comentari.';
$string['errornopendingfunction'] = 'No hi ha cap crida de funció pendent.';
$string['errornoprovider'] = 'No hi ha cap proveïdor d\'IA disponible. L\'agent d\'IA utilitza els paràmetres de l\'acció «Genera un text», de manera que us heu d\'assegurar que està configurada i habilitada per a almenys un proveïdor d\'IA a l\'Administració del lloc.';
$string['errornoprovider_link'] = 'Configura els proveïdors d\'IA.';
$string['errornoretryresponse'] = 'No hi ha cap resposta fallida per tornar a provar.';
$string['erroroutofsync'] = 'Aquest xat ha canviat en una altra finestra. Refresqueu per veure l\'estat més recent.';
$string['errorpagenotavailable'] = 'La pàgina actual no està disponible en aquesta vista.';
$string['errorpendingfunctions'] = 'Primer aproveu o denegueu les crides de funcions pendents.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} ha bloquejat la indicació: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} ha bloquejat la resposta: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} no ha retornat cap contingut.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} no ha retornat cap contingut (motiu de finalització: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'El punt final per comunicar-se amb el proveïdor d\'IA no és vàlid o no és accessible.';
$string['errorresponses_endpoint_invalid_config'] = 'El connector ha intentat utilitzar {$a->endpoint} com a punt final de la Responses API d\'OpenAI, però la petició ha fallat. Aneu a {$a->settingslink} i comproveu el punt final de la Responses API, o canvieu el tipus d\'API a Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'El proveïdor ha respost: {$a}';
$string['errorresponses_provider_switch'] = 'Aquest xat no es pot continuar amb la Responses API d\'OpenAI perquè es va iniciar amb un altre proveïdor d\'IA. Inicieu un xat nou, o torneu al proveïdor original (o a OpenAI Chat Completions) per continuar aquest.';
$string['errorrootnotfound'] = 'No s\'ha trobat el missatge arrel d\'aquest xat.';
$string['errorupdatesstopped'] = 'Aquest xat ha deixat de rebre actualitzacions. Refresqueu per veure l\'estat més recent.';
$string['exportskill'] = 'Exporta';
$string['feedback_modal_freetextlabel'] = 'Alguna cosa més? (opcional)';
$string['feedback_modal_freetextplaceholder_negative'] = 'Què ha anat malament? Sigueu tan concrets com vulgueu.';
$string['feedback_modal_freetextplaceholder_positive'] = 'Què ha funcionat bé? (opcional)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'Què ha anat malament amb aquesta crida de funció?';
$string['feedback_modal_intro_negative'] = 'Gràcies per fer-nos-ho saber. Els vostres comentaris s\'enviaran als desenvolupadors del connector Agent d\'IA (no al proveïdor d\'IA) perquè puguin millorar el comportament de les crides de funcions de Moodle.';
$string['feedback_modal_intro_positive'] = 'Gràcies! Els vostres comentaris s\'enviaran als desenvolupadors del connector Agent d\'IA (no al proveïdor d\'IA) perquè puguin mantenir el que funciona i millorar el que no.';
$string['feedback_modal_intro_toolerror'] = 'Marqueu aquesta crida de funció com a problemàtica. Els vostres comentaris s\'enviaran als desenvolupadors del connector Agent d\'IA (no al proveïdor d\'IA) perquè puguin corregir el servei web subjacent o millorar com l\'utilitza la IA.';
$string['feedback_modal_send'] = 'Envia els comentaris';
$string['feedback_modal_sending'] = 'S\'està enviant...';
$string['feedback_modal_snapshotlabel'] = 'Què s\'enviarà (ho podeu editar)';
$string['feedback_modal_title_positive'] = 'Expliqueu-nos què ha funcionat';
$string['feedbackcat_negative_misunderstood'] = 'No ha entès la meva pregunta';
$string['feedbackcat_negative_notfollowed'] = 'No ha seguit les instruccions';
$string['feedbackcat_negative_other'] = 'Una altra cosa';
$string['feedbackcat_negative_wronginfo'] = 'Informació incorrecta o inventada';
$string['feedbackcat_negative_wrongtoolused'] = 'Ha utilitzat la funció equivocada';
$string['feedbackcat_positive_accurate'] = 'Precisa';
$string['feedbackcat_positive_goodexplanation'] = 'Explicació clara';
$string['feedbackcat_positive_helpful'] = 'Útil';
$string['feedbackcat_positive_other'] = 'Una altra cosa';
$string['feedbackcat_positive_welltimed'] = 'La funció adequada per a la tasca';
$string['feedbackcat_toolerror_misleadingresult'] = 'El resultat era enganyós';
$string['feedbackcat_toolerror_other'] = 'Una altra cosa';
$string['feedbackcat_toolerror_toolerror'] = 'La funció ha retornat un error';
$string['feedbackcat_toolerror_wrongargs'] = 'Arguments incorrectes';
$string['feedbackcat_toolerror_wrongtool'] = 'Funció inadequada per a la tasca';
$string['feedbackdisabled'] = 'L\'administrador del lloc ha deshabilitat la recollida de comentaris.';
$string['feedbackfailed'] = 'No s\'han pogut enviar els comentaris. Torneu-ho a provar més tard.';
$string['feedbackflagfunctioncall'] = 'Marca aquesta crida de funció';
$string['feedbacksubmitted'] = 'Comentaris enviats';
$string['feedbackthanks'] = 'Gràcies pels vostres comentaris!';
$string['feedbackthumbdown'] = 'Informa d\'un problema amb aquesta resposta';
$string['feedbackthumbup'] = 'Aquesta resposta ha estat útil';
$string['feedbackvalidation_categoryrequired'] = 'Seleccioneu almenys una categoria.';
$string['functionapprovalneeded'] = 'Cal aprovació';
$string['functionapprovalneededmany'] = '{$a} crides de funció necessiten aprovació';
$string['functionapprovecount'] = 'Aprova {$a} crides';
$string['functionavailable'] = 'Disponible';
$string['functioncall_actions'] = 'Aprova o denega la crida de funció';
$string['functioncall_chip_action'] = 'Canvia el mode d\'aprovació automàtica';
$string['functioncalldetails'] = 'Detalls de la crida de funció';
$string['functioncalldetailsof'] = 'Detalls de la crida de funció: {$a}';
$string['functioncalling'] = 'S\'està cridant {$a}';
$string['functioncallnav'] = '{$a->index} de {$a->total}';
$string['functioncallnext'] = 'Crida de funció següent';
$string['functioncallprevious'] = 'Crida de funció anterior';
$string['functioncallscount'] = '{$a} crides de funció';
$string['functioncallscountone'] = '1 crida de funció';
$string['functiondenied'] = 'Heu denegat {$a}';
$string['functiondeniedmany'] = 'Heu denegat {$a->name} i {$a->count} més';
$string['functiondeniednext'] = 'L\'agent s\'ha aturat. Escriviu un missatge per dir-li què ha de fer ara.';
$string['functiondeny'] = 'Denega';
$string['functiondenyall'] = 'Denega-les totes';
$string['functiondetailscopied'] = 'Copiat';
$string['functiondetailscopy'] = 'Copia';
$string['functiondetailscopyhtml'] = 'Copia el codi font HTML';
$string['functiondetailscopyparameters'] = 'Copia els paràmetres com a JSON';
$string['functiondetailscopyresult'] = 'Copia el resultat com a JSON';
$string['functiondetailscopysvg'] = 'Copia el codi font SVG';
$string['functiondetailsdisplay'] = 'Visualització';
$string['functiondetailsempty'] = '(buit)';
$string['functiondetailsfield'] = '1 camp';
$string['functiondetailsfields'] = '{$a} camps';
$string['functiondetailsformatted'] = 'Amb format';
$string['functiondetailshtmlsource'] = 'Codi font HTML';
$string['functiondetailsimage'] = 'Imatge';
$string['functiondetailsitem'] = '1 element';
$string['functiondetailsitems'] = '{$a} elements';
$string['functiondetailsjson'] = 'JSON';
$string['functiondetailsjsontext'] = 'Text JSON';
$string['functiondetailssvgimage'] = 'Imatge SVG · {$a}';
$string['functiondetailssvgsource'] = 'Codi font SVG';
$string['functiondetailsviewformatted'] = 'Mostra el text amb format';
$string['functiondetailsviewimage'] = 'Mostra la imatge';
$string['functionloopguardbody'] = 'Aquesta funció ja s\'ha executat {$a} vegades amb la mateixa entrada. L\'aprovació automàtica s\'ha posat en pausa per possibles bucles; aproveu-la per continuar.';
$string['functionloopguardheading'] = 'Crida repetida.';
$string['functionname'] = 'Nom de la funció';
$string['functionparameters'] = 'Paràmetres';
$string['functionresult'] = 'Resultat';
$string['functionresultdiscarded'] = 'El resultat era massa gran ({$a}) i s\'ha descartat. Acoteu la petició filtrant-la, demanant menys camps o utilitzant una funció més específica. Repetir la mateixa crida produirà el mateix error.';
$string['functionrules_error_component'] = '{$a->path}: cap funció no pertany a un component que coincideixi amb «{$a->value}».';
$string['functionrules_error_depth'] = '{$a->path}: la regla té més de {$a->max} nivells d\'imbricació.';
$string['functionrules_error_function'] = '{$a->path}: cap funció no coincideix amb «{$a->value}».';
$string['functionrules_error_json'] = 'La regla no és un JSON vàlid: {$a}';
$string['functionrules_error_list'] = '{$a->path}: s\'esperava una llista no buida de parts de la regla.';
$string['functionrules_error_node'] = '{$a->path}: cada part de la regla ha de ser un objecte amb exactament una clau: type, tag, component, function, not, all o any.';
$string['functionrules_error_tag'] = '{$a->path}: cap funció no té l\'etiqueta «{$a->value}».';
$string['functionrules_error_type'] = '{$a->path}: tipus desconegut «{$a->value}». Els tipus són read, safe i write.';
$string['functionrules_error_value'] = '{$a->path}: s\'esperava una cadena no buida o una llista no buida de cadenes no buides.';
$string['functionrules_path_root'] = 'Tota la regla';
$string['functions_intro'] = '<p><b>No totes les funcions de serveis web són adequades per a l\'agent d\'IA.</b> Algunes es van crear per a la comunicació client-servidor (marcades com a AJAX) o per a usuaris no autenticats (Sense autenticació), i algunes tenen alternatives millors. Algunes funcions AJAX funcionen bé amb l\'agent d\'IA, però la majoria no. El connector Agent d\'IA assigna una puntuació de rellevància (1-10) a les funcions del nucli i dels connectors estàndard i habilita les que tenen una puntuació de 5 o més. Les funcions dels connectors complementaris no es puntuen; en canvi, totes les seves funcions que no són AJAX s\'habiliten automàticament. Utilitzeu aquesta pàgina per revisar les funcions disponibles i habilitar-les o deshabilitar-les individualment.</p><p>Quan una funció requereix una o més capacitats, no està disponible per als usuaris que no tenen almenys una d\'aquestes capacitats en algun context del lloc. Per al nucli i els connectors estàndard, el connector Agent d\'IA estableix aquestes capacitats correctament. Per als connectors complementaris, les capacitats es prenen de la definició de la funció i, com que Moodle no aplica aquesta comprovació per si mateix, poden ser incorrectes.</p>';
$string['functions_report'] = 'Funcions de l\'agent d\'IA';
$string['functionstatus_denied'] = 'Denegada';
$string['functionstatus_failed'] = 'Fallida';
$string['functionstatus_interrupted'] = 'Interrompuda';
$string['functionstatus_notrun'] = 'No executada';
$string['functionstatus_pending'] = 'Pendent d\'aprovació';
$string['functionstatus_processing'] = 'S\'està executant...';
$string['functiontype'] = 'Tipus';
$string['functiontype_help'] = 'El tipus de la funció de servei web i les seves propietats:

* **Lectura**: obté dades sense modificar res
* **Segura**: una funció integrada que no modifica el lloc, només els fitxers del xat, per exemple redimensionar un adjunt o generar una imatge
* **Escriptura**: crea o modifica dades
* **AJAX**: Moodle l\'utilitza internament per a peticions client-servidor; és menys probable que sigui adequada com a funció de l\'agent d\'IA
* **Sense autenticació**: disponible per a usuaris no autenticats; també és menys probable que sigui adequada com a funció de l\'agent d\'IA';
$string['functiontype_read'] = 'Lectura';
$string['functiontype_safe'] = 'Segura';
$string['functiontype_write'] = 'Escriptura';
$string['gemini_api_generatecontent'] = 'generateContent (estable)';
$string['gemini_api_interactions'] = 'Interactions API (beta)';
$string['gemini_api_type'] = 'Tipus d\'API';
$string['gemini_api_type_desc'] = 'Quina API de Gemini cal utilitzar per als xats de diversos torns. generateContent és el punt final estàndard sense estat i reconstrueix la matriu completa de missatges a cada torn. La Interactions API és actualment en fase beta; emmagatzema l\'estat del xat als servidors de Google (de manera que a cada torn només s\'envia l\'entrada nova), però el seu esquema pot canviar sense avís.';
$string['gemini_builtin_code_execution'] = 'Habilita l\'eina Code Execution';
$string['gemini_builtin_code_execution_desc'] = 'Permet que Gemini escrigui i executi codi Python en un entorn aïllat per resoldre problemes matemàtics o processar dades. Només per a models Gemini 3 o posteriors; s\'ignora sense avís a Gemini 2.5 i anteriors perquè aquests models no poden combinar eines integrades amb crides de funcions personalitzades.';
$string['gemini_builtin_google_search'] = 'Habilita la fonamentació amb Google Search';
$string['gemini_builtin_google_search_desc'] = 'Permet que Gemini basi les respostes en resultats actuals de cerques web. Només per a models Gemini 3 o posteriors; s\'ignora sense avís a Gemini 2.5 i anteriors perquè aquests models no poden combinar eines integrades amb crides de funcions personalitzades. Cada consulta de cerca es factura per separat.';
$string['gemini_builtin_url_context'] = 'Habilita l\'eina URL Context';
$string['gemini_builtin_url_context_desc'] = 'Permet que Gemini llegeixi i analitzi contingut d\'adreces URL públiques que l\'usuari esmenti. Només per a models Gemini 3 o posteriors; s\'ignora sense avís a Gemini 2.5 i anteriors perquè aquests models no poden combinar eines integrades amb crides de funcions personalitzades. Les adreces URL han de ser accessibles públicament (sense localhost ni autenticació).';
$string['gemini_heading'] = 'Google Gemini';
$string['hidefunctioncalls'] = 'Amaga les crides de funció';
$string['hint_splitview'] = 'Voleu utilitzar aquest xat al costat del vostre lloc? Arrossegueu <a href="{$a}">{$a}</a> a una finestra nova, o feu-hi clic amb el botó dret i utilitzeu la vista dividida del navegador.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Fitxer {$a->size}, dimensions {$a->dimensions}. Previsualització {$a->preview} ({$a->scale}%).';
$string['importskill'] = 'Importa skills';
$string['importskill_addmore'] = 'Afegeix-ne més...';
$string['importskill_button'] = 'Importa {$a} skills';
$string['importskill_buttonone'] = 'Importa 1 skill';
$string['importskill_choose'] = 'Trieu fitxers...';
$string['importskill_drophint'] = 'Arrossegueu aquí els fitxers d\'skill, o utilitzeu el botó.';
$string['importskill_fileone'] = '1 fitxer seleccionat';
$string['importskill_files'] = '{$a} fitxers seleccionats';
$string['importskill_statusinvalid'] = 'No és un fitxer d\'skill';
$string['importskill_statusnew'] = 'Skill nou';
$string['importskill_statusupdate'] = 'Actualitza {$a}';
$string['importskill_summarynew'] = '{$a} nous';
$string['importskill_summaryskipped'] = '{$a} omesos';
$string['importskill_summaryupdate'] = '{$a} per actualitzar';
$string['importskill_toolarge'] = 'Les dades de l\'skill són massa grans (màxim {$a}).';
$string['inlinefilecharlimit'] = 'Límit de contingut de fitxer inserit';
$string['inlinefilecharlimit_desc'] = 'Quantitat màxima d\'un fitxer de text que es pot inserir directament al xat quan un fitxer es llegeix en línia. El contingut més llarg es trunca. La lectura en línia s\'utilitza quan el model la demana, i com a alternativa per als proveïdors d\'IA que no poden acceptar fitxers. El contingut inserit es torna a enviar amb l\'historial del xat a cada torn, de manera que un límit alt augmenta l\'ús de segments textuals.';
$string['interruptedbystop'] = 'Interrompuda: heu aturat l\'agent.';
$string['interruptedunexpectedly'] = 'Interrompuda: la funció s\'ha aturat de manera inesperada.';
$string['invalidparameter'] = 'S\'ha detectat un paràmetre no vàlid: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Activa la llicència';
$string['licenseactivate_help'] = 'Introduïu la clau de llicència que heu rebut per correu electrònic de LMSCloud. La clau de llicència es pot activar en un nombre limitat de llocs (normalment dos). La podeu desactivar en qualsevol moment per utilitzar-la en un altre lloc.';
$string['licensedeactivate'] = 'Desactiva';
$string['licensedeactivate_help'] = 'Desactiva la clau de llicència en aquest lloc perquè es pugui utilitzar en un altre lloc.';
$string['licenseerror_deactivate'] = 'No s\'ha pogut desactivar la llicència. Pot ser que el servidor no estigui disponible temporalment; torneu-ho a provar més tard.';
$string['licenseerror_deactivate_forced'] = 'Aquesta llicència està definida a la configuració del servidor (config.php) i no es pot desactivar des d\'aquesta pàgina.';
$string['licenseerror_invalid'] = 'La clau de llicència no és vàlida o no s\'ha pogut activar.';
$string['licenseerror_limit'] = 'No queden places lliures per a aquesta clau de llicència. Primer desactiveu un altre lloc i després torneu-ho a provar.';
$string['licenseerror_transport'] = 'No s\'ha pogut connectar amb el servidor de llicències. Comproveu la connexió i torneu-ho a provar.';
$string['licensekey'] = 'Clau de llicència';
$string['licenselocked_expired'] = 'Aquest lloc fa més de 14 dies que no valida la llicència. Feu servir «Torna a comprovar» per restaurar l\'accés.';
$string['licenselocked_key_rejected'] = 'Aquesta clau de llicència ja no és vàlida en aquest lloc.';
$string['licenselocked_url_mismatch'] = 'L\'adreça web d\'aquest lloc ha canviat; el titular de la llicència l\'ha d\'autoritzar.';
$string['licensemanageinsettings'] = 'Gestioneu la llicència als paràmetres de l\'agent d\'IA.';
$string['licenserecheck'] = 'Torna a comprovar';
$string['licensesetting'] = 'Llicència de l\'agent d\'IA';
$string['licensesetting_desc'] = 'Activeu, torneu a comprovar o desactiveu la llicència de l\'agent d\'IA per a aquest lloc.';
$string['licensestatus_materialsmissing'] = 'La llicència de l\'agent d\'IA és activa, però falten els materials baixats, de manera que no hi ha cap funció disponible. Feu servir «Torna a comprovar» per tornar-los a obtenir.';
$string['licensestatus_notactivated'] = 'Cal una llicència per utilitzar l\'agent d\'IA en aquest lloc.';
$string['licensestatus_valid'] = 'La llicència de l\'agent d\'IA és activa.';
$string['loginrequired'] = 'Requereix un usuari autenticat';
$string['logretention'] = 'Conserva els registres dels xats durant';
$string['logretention_desc'] = 'Els missatges i els registres d\'ús de segments textuals dels xats sense activitat durant aquest temps se suprimeixen definitivament de la base de dades. Això només s\'aplica als xats que ja s\'havien suprimit de l\'historial de xats, sigui per l\'usuari o pel paràmetre de més amunt. Poseu 0 per conservar els registres per sempre.';
$string['maxfilesize'] = 'Mida màxima de fitxer per al LLM';
$string['maxfilesize_desc'] = 'Impedeix que els usuaris enviïn al LLM fitxers massa grans. Els fitxers grans consumeixen segments textuals ràpidament i incrementen els costos. Els fitxers que superen aquesta mida es rebutgen amb un error abans que cap byte surti del lloc.

Els proveïdors d\'IA rebutjaran igualment els fitxers que superin els seus propis límits per petició (Anthropic 32 MB, Gemini 50 MB en línia, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Mida màxima del resultat d\'una funció';
$string['maxfunctionresultsize_desc'] = 'Quantitat màxima de dades que una sola funció pot retornar al model d\'IA. Algunes funcions de Moodle no tenen filtre i retornen tots els usuaris o tots els cursos del lloc, cosa que satura el model i malbarata segments textuals en cada torn següent. Un resultat que supera aquest límit es descarta i s\'indica al model que acoti la petició. Poseu zero per no tenir cap límit. La lectura d\'un fitxer en línia n\'està exempta; per a això, utilitzeu «Límit de contingut de fitxer inserit».';
$string['newchat'] = 'Xat nou';
$string['newchatchooser_clone'] = 'Igual que aquest xat';
$string['newchatchooser_continue'] = 'Continueu on éreu';
$string['newchatchooser_desc_default'] = 'Inicieu un xat nou en aquesta pàgina, o continueu on éreu.';
$string['newchatchooser_desc_full'] = 'Inicieu un xat general, o continueu on éreu.';
$string['newchatchooser_desc_multi'] = 'Aquesta pàgina té diversos punts de partida. Trieu-ne un, o continueu on éreu.';
$string['newchatchooser_error'] = 'No s\'ha pogut iniciar un xat nou. Torneu-ho a provar.';
$string['newchatchooser_none'] = 'Aquí no hi ha cap pàgina on pugueu iniciar un xat nou.';
$string['newchatchooser_onthispage'] = 'En aquesta pàgina:';
$string['newchatchooser_title'] = 'Inicia un xat nou';
$string['nfilesattached'] = '{$a} fitxers adjunts';
$string['nonauth'] = 'Sense autenticació';
$string['notavailable_loginas'] = 'L\'agent d\'IA no està disponible mentre heu iniciat la sessió com a un altre usuari.';
$string['notavailable_roleswitch'] = 'L\'agent d\'IA no està disponible mentre teniu el rol canviat.';
$string['numfiles'] = '{$a} fitxers';
$string['numimages'] = '{$a} imatges';
$string['numotherfiles'] = '{$a} altres';
$string['onefileattached'] = '1 fitxer adjunt';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'Tipus d\'API';
$string['openai_api_type_desc'] = 'Quina API d\'OpenAI cal utilitzar per als xats de diversos torns. La Responses API manté l\'estat del xat al servidor, de manera que a cada torn només s\'envia l\'entrada nova (menys cost, historial més senzill). Chat Completions reconstrueix la matriu completa de missatges a cada petició (compatibilitat més àmplia amb proveïdors).<br><br>La Responses API és compatible amb aquests proveïdors: <strong>{$a}</strong>. Els altres proveïdors faran servir Chat Completions sense avís, independentment d\'aquest paràmetre.';
$string['openai_heading'] = 'OpenAI (o compatible)';
$string['openlink'] = 'Obre l\'enllaç';
$string['pathtophp'] = 'Camí al PHP CLI per als xats en segon pla';
$string['pathtophp_desc'] = 'El binari de PHP CLI que executa els xats en segon pla, quan ha de ser diferent del definit al paràmetre Camí al PHP CLI del lloc. Deixeu-lo buit per utilitzar el paràmetre del lloc.';
$string['placeholder'] = 'Escriviu un missatge...';
$string['placement_add'] = 'Afegeix un emplaçament';
$string['placement_confirmdelete'] = 'Segur que voleu suprimir aquest emplaçament?';
$string['placement_copyof'] = '{$a} (còpia)';
$string['placement_defaultname'] = 'Agent d\'IA';
$string['placement_deleted'] = 'S\'ha suprimit l\'emplaçament.';
$string['placement_duplicated'] = 'S\'ha duplicat l\'emplaçament.';
$string['placement_edit'] = 'Edita l\'emplaçament';
$string['placement_functionrules'] = 'Regla de funcions';
$string['placement_functionrules_help'] = 'Limita quines funcions pot utilitzar l\'agent d\'IA en els xats iniciats des d\'aquest emplaçament. Deixeu-ho buit per permetre totes les funcions. Si canvieu la regla, també canvia en els xats que ja s\'han iniciat des d\'aquest emplaçament.

La regla és en format JSON. Cada part de la regla és un objecte amb una sola clau:

* {"type": "read"}: el tipus de la funció és read, safe o write, com a la pestanya Funcions
* {"tag": "student"}: la funció té aquesta etiqueta
* {"component": "mod_quiz"}: la funció pertany a aquest component
* {"function": "core_course_get_courses"}: la funció té aquest nom
* {"not": part}, {"all": [parts]}, {"any": [parts]}: combinen parts

En un component o un nom de funció, un asterisc coincideix amb qualsevol text. Les claus type, tag, component i function també accepten una llista, que vol dir qualsevol dels valors: {"type": ["read", "safe"]} permet totes les funcions que no modifiquen el lloc.

Demaneu a l\'agent d\'IA que escrigui o canviï la regla: abans de desar-la, comprova quines funcions permet.';
$string['placement_functionrules_preview'] = 'La regla desada permet {$a->count} de les {$a->total} funcions habilitades';
$string['placement_functions'] = 'Funcions permeses';
$string['placement_functions_limited'] = 'Limitades ({$a})';
$string['placement_initialskills'] = 'Skills inicials';
$string['placement_initialskills_help'] = 'Skills que es carreguen automàticament quan s\'inicia el xat. És opcional; l\'agent pot carregar igualment qualsevol skill quan calgui, tret que la regla de funcions de l\'emplaçament ho impedeixi. Els skills que definiu també controlen aquest emplaçament: els usuaris que no tenen accés a cap d\'ells no veuran el botó ni l\'element del menú, i si més endavant s\'eliminen o es deshabiliten tots els skills definits, l\'emplaçament deixa d\'aparèixer.';
$string['placement_intro'] = '<p>Els emplaçaments us permeten oferir agents adaptats a una tasca concreta. Cada emplaçament afegeix el botó de l\'agent d\'IA a les pàgines amb una adreça URL que coincideix amb una de les seves màscares, i pot iniciar el xat amb skills inicials i un text de benvinguda predefinits. Si hi ha skills inicials definits, els usuaris que no tenen accés a cap d\'ells no veuran el botó.</p><p>Els skills inicials només estableixen el punt de partida del xat; l\'agent pot accedir igualment a totes les funcions habilitades, no només a les dels skills. Una regla de funcions limita quines funcions pot utilitzar l\'agent en els xats iniciats des d\'un emplaçament.</p>';
$string['placement_location'] = 'Ubicació del botó';
$string['placement_location_floating'] = 'Botó flotant';
$string['placement_location_h1'] = 'Encapçalament de la pàgina (H1)';
$string['placement_location_h2'] = 'Encapçalament secundari (H2)';
$string['placement_menuheading'] = 'Pregunteu a l\'agent d\'IA';
$string['placement_name'] = 'Nom';
$string['placement_name_help'] = 'Es mostra als usuaris: al menú d\'usuari, com a text emergent del botó, i (quan diversos emplaçaments coincideixen amb la mateixa pàgina) al menú del botó.';
$string['placement_save'] = 'Desa l\'emplaçament';
$string['placement_saved'] = 'S\'ha desat l\'emplaçament.';
$string['placement_skillmissing'] = 'No s\'ha trobat l\'skill';
$string['placement_skillnotinitial'] = 'No pot ser un skill inicial';
$string['placement_suggestedprompts'] = 'Indicacions suggerides';
$string['placement_suggestedprompts_help'] = 'Una indicació per línia, que s\'ofereix com a botó a sobre del quadre del missatge a la pantalla d\'inici del xat. En fer-hi clic, s\'envia immediatament, per exemple «Resumeix aquest curs». Per oferir una indicació que l\'usuari hagi de completar primer, poseu-hi ... en qualsevol lloc: aleshores la indicació es col·loca al quadre del missatge en lloc d\'enviar-se, per exemple «Resumeix la secció ... d\'aquest curs». Deixeu el camp buit per no oferir cap indicació.';
$string['placement_urlmask'] = 'Màscares d\'URL';
$string['placement_urlmask_help'] = 'Un patró per línia. Utilitzeu * com a comodí, p. ex. /course/view.php* o /mod/*/view.php*.';
$string['placement_urlmask_invalid'] = 'Cada màscara d\'URL ha de començar amb una barra: «{$a}» no ho fa.';
$string['placement_welcome'] = 'Text de benvinguda personalitzat (opcional)';
$string['placement_welcome_help'] = 'Substitueix el missatge de benvinguda estàndard a la pantalla d\'inici del xat. Deixeu-lo buit per utilitzar el predeterminat.';
$string['pluginname'] = 'Agent d\'IA';
$string['pluginnotinstalled'] = 'Connector no instal·lat';
$string['previouschats'] = 'Xats anteriors';
$string['privacy:metadata:aiprovider'] = 'Els xats s\'envien al proveïdor d\'IA escollit per l\'administrador del lloc, com ara OpenAI, Azure OpenAI, Google Gemini o Anthropic, perquè pugui generar una resposta. El connector envia cada petició directament al proveïdor en lloc de fer-ho a través del subsistema d\'IA de Moodle. Quina empresa rep les dades, i quant de temps s\'hi conserven, depèn del proveïdor que hagi configurat el lloc i de les condicions d\'aquest proveïdor.';
$string['privacy:metadata:aiprovider:files'] = 'Fitxers que l\'usuari adjunta a un xat, i fitxers que l\'agent llegeix del lloc en nom de l\'usuari, pujats perquè el model en pugui llegir el contingut.';
$string['privacy:metadata:aiprovider:messages'] = 'L\'historial del xat, que es torna a enviar a cada torn: les indicacions de l\'usuari, les respostes de l\'assistent i els resultats de les funcions de Moodle que ha executat l\'agent, que poden incloure dades personals d\'altres usuaris retornades per aquestes funcions.';
$string['privacy:metadata:aiprovider:userid'] = 'L\'identificador de l\'usuari que manté el xat, inclòs a les instruccions donades al model perquè pugui actuar en nom d\'aquest usuari.';
$string['privacy:metadata:core_files'] = 'Fitxers adjunts als missatges de l\'agent d\'IA.';
$string['privacy:metadata:feedback'] = 'Quan els comentaris estan habilitats i un usuari valora una resposta o informa d\'una crida de funció fallida, l\'intercanvi valorat s\'envia als desenvolupadors del connector Agent d\'IA perquè es pugui millorar el comportament de l\'agent. No s\'envia res tret que l\'usuari decideixi enviar comentaris, i la funcionalitat es pot desactivar completament amb el paràmetre «Permet els comentaris».';
$string['privacy:metadata:feedback:freetext'] = 'El text que l\'usuari escriu opcionalment en enviar els comentaris, enviat tal com s\'ha introduït.';
$string['privacy:metadata:feedback:snapshot'] = 'Una transcripció de l\'intercanvi valorat: la pregunta de l\'usuari, les respostes de l\'assistent i els noms de les funcions que ha cridat. Les adreces de correu electrònic s\'emmascaren i els arguments i resultats d\'aquestes funcions s\'ometen, excepte les cerques de funcions del mateix agent. L\'usuari pot editar el text abans d\'enviar-lo.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'La preferència de no tornar a mostrar el diàleg de confirmació de tancament.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'La mida que l\'usuari ha donat al tauler de xat en finestra flotant.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'L\'amplada que l\'usuari ha donat al tauler de xat a la barra lateral.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'El tipus de vista del xat (finestra flotant, barra lateral o pantalla completa) que l\'usuari ha utilitzat per última vegada.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Xats entre un usuari i l\'agent d\'IA. Els xats que l\'usuari suprimeix s\'arxiven en lloc d\'eliminar-se, perquè l\'ús de segments textuals es pugui continuar registrant.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'L\'hora en què es va arxivar el xat (suprimit per l\'usuari), si escau.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'L\'hora en què es va crear el xat.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Quan es va emmagatzemar l\'últim missatge al xat.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'L\'hora en què es va actualitzar el xat per última vegada.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'El nom del xat, generat a partir del primer missatge.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'L\'usuari propietari del xat.';
$string['privacy:metadata:tool_aiagent_message'] = 'Missatges individuals d\'un xat, incloses les indicacions de l\'usuari i les respostes de la IA.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'El contingut del missatge.';
$string['privacy:metadata:tool_aiagent_message:pagecontext'] = 'Per a un missatge enviat des del xat en finestra flotant o a la barra lateral, l\'adreça i el nom de la pàgina que l\'usuari estava llegint en aquell moment.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Qui ha enviat el missatge: l\'usuari, l\'assistent, el sistema o una funció.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'L\'hora en què es va crear el missatge.';
$string['privacy:metadata:tool_aiagent_run'] = 'Un registre de cada vegada que l\'agent d\'IA ha treballat en un missatge d\'un xat, que es conserva un dia després d\'acabar.';
$string['privacy:metadata:tool_aiagent_run:ip'] = 'L\'adreça IP de l\'usuari quan va enviar el missatge, registrada amb les accions que l\'agent d\'IA va fer per a ell.';
$string['privacy:metadata:tool_aiagent_run:payload'] = 'El contingut de la pàgina que l\'usuari estava consultant, quan l\'agent d\'IA va demanar llegir-la.';
$string['privacy:metadata:tool_aiagent_run:timecreated'] = 'El moment en què l\'agent d\'IA va començar a treballar en el missatge.';
$string['privacy:metadata:tool_aiagent_run:userid'] = 'L\'usuari que va enviar el missatge.';
$string['privacy:metadata:tool_aiagent_usage'] = 'Ús de segments textuals registrat per a cada petició d\'IA, conservat per al seguiment de l\'ús.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'El nombre de segments textuals de sortida (de processament) utilitzats.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'El model d\'IA que ha gestionat la petició.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'El nombre de segments textuals d\'entrada (d\'indicació) utilitzats.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'El proveïdor d\'IA que ha gestionat la petició.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'L\'hora en què es va fer la petició.';
$string['providers_heading'] = 'Tots els proveïdors d\'IA';
$string['relevancescore'] = 'Puntuació de rellevància';
$string['relevancescore_help'] = 'La puntuació de rellevància indica com d\'adequada és una funció de servei web per a l\'agent d\'IA, en una escala de l\'1 al 10.

**Les puntuacions altes (7-10)** s\'assignen a funcions clarament útils per a un assistent d\'IA, com ara crear cursos, inscriure usuaris, cercar contingut o obtenir qualificacions.

**Les puntuacions mitjanes (4-6)** són habituals per a operacions destructives o irreversibles (com ara suprimir cursos o donar de baixa usuaris), que són útils però comporten més risc, i també per a funcions molt específiques amb una aplicabilitat limitada.

**Les puntuacions baixes (1-3)** s\'assignen a funcions dissenyades per a la comunicació interna entre el navegador i el servidor, funcions que no requereixen autenticació, funcions obsoletes o funcions que dupliquen alternatives millors.

**Una puntuació de 0** vol dir que la funció encara no s\'ha avaluat. Això és habitual en les funcions de connectors de tercers.

La puntuació de rellevància es va utilitzar per establir el valor predeterminat inicial de si cada funció està habilitada. Les puntuacions inicials dels components del nucli de Moodle es van generar amb IA i pot ser que calgui revisar-les manualment.';
$string['removefilenamed'] = 'Elimina el fitxer: {$a}';
$string['renamechat'] = 'Canvia el nom del xat';
$string['renamechat_label'] = 'Nom nou del xat';
$string['responses_endpoints'] = 'Punts finals personalitzats de la Responses API';
$string['responses_endpoints_desc'] = 'Substitueix el punt final de la Responses API quan un desplegament allotjat o intermediat d\'OpenAI o Azure OpenAI el serveix en una adreça no estàndard. Deixeu-ho buit per utilitzar els valors predeterminats integrats. No té cap efecte quan el tipus d\'API és Chat Completions.<br><br>
Per exemple, https://your-resource.azure.com/api/responses?api-version=preview. El punt final de la Files API s\'obté substituint /responses per /files i mantenint la cadena de consulta, de manera que les pujades van a https://your-resource.azure.com/api/files?api-version=preview.<br><br>
Si utilitzeu diverses instàncies de proveïdor, afegiu una adreça URL per línia. Cada proveïdor utilitza la línia amb l\'amfitrió que coincideix amb el del seu propi punt final d\'API.';
$string['responses_endpoints_invalidline'] = 'Cada línia ha de ser una adreça URL https completa amb un camí que acabi en /responses; http només s\'accepta per a localhost. Línia no vàlida: {$a}';
$string['resume_desc'] = 'Teniu un xat recent. Continueu on ho vau deixar, o inicieu-ne un de nou.';
$string['resume_lastmessage'] = 'Darrer missatge fa {$a}';
$string['resume_resume'] = 'Reprèn el darrer xat';
$string['resume_title'] = 'Hola de nou';
$string['sendmessage'] = 'Envia';
$string['settings'] = 'Paràmetres de l\'agent d\'IA';
$string['showallfiles'] = 'Mostra-ho tot';
$string['showfunctioncalls'] = 'Mostra les crides de funció';
$string['skill_add'] = 'Afegeix un skill';
$string['skill_edit'] = 'Edita l\'skill';
$string['skill_save_close'] = 'Desa i tanca';
$string['skill_save_preview'] = 'Desa i previsualitza';
$string['skill_saved'] = 'S\'ha desat l\'skill.';
$string['skilladd_aitip'] = 'En lloc d\'omplir-ho a mà, podeu demanar a l\'agent d\'IA que creï l\'skill per vosaltres: pot trobar les funcions adequades i redactar les instruccions. <a href="{$a}">Obre l\'agent d\'IA</a>.';
$string['skillbundled'] = 'Inclòs';
$string['skillbundledchangedinfo'] = 'Aquest skill venia amb el connector i s\'ha modificat en aquest lloc.';
$string['skillbundledchangedinfo_help'] = 'Demaneu a l\'agent d\'IA que compari aquest skill amb la versió que venia amb el connector, i que restauri aquesta versió si ja no voleu els vostres canvis. Un skill que heu modificat deixa de rebre actualitzacions.';
$string['skillbundledinfo'] = 'Ve amb el connector. Es pot deshabilitar i editar, però no suprimir ni canviar-ne el nom.';
$string['skillbundlednodelete'] = 'Un skill que ve amb el connector no es pot suprimir. Deshabiliteu-lo.';
$string['skillbundlednorename'] = 'No es pot canviar el nom curt d\'un skill que ve amb el connector.';
$string['skillcapabilities_help'] = 'Es dedueix de les funcions principals de l\'skill: un usuari només pot utilitzar l\'skill si té almenys una d\'aquestes capacitats en algun context del lloc. La llista combina les capacitats requerides de totes les funcions principals.';
$string['skillcapabilities_none'] = 'Cap. L\'skill està disponible per a tots els usuaris.';
$string['skillconfigured'] = 'Configurades';
$string['skilldeleted'] = 'S\'ha suprimit l\'skill «{$a}».';
$string['skilldescription'] = 'Descripció';
$string['skilldescription_help'] = 'Per a què serveix l\'skill, perquè l\'assistent sàpiga quan l\'ha de carregar. Descriviu la tasca o l\'activitat de què tracta, no els passos que fa. Apareix tant a la llista d\'skills (per a les persones) com a les instruccions del sistema (per a l\'assistent).';
$string['skillexists'] = 'Ja existeix un skill amb el nom curt «{$a}».';
$string['skillimport_badloadmode'] = 'El camp "loadmode" ha de tenir un d\'aquests valors: {$a}.';
$string['skillimport_badmasks'] = 'Els camps "mainfunctions" i "otherfunctions" han de ser, cadascun, una llista de cadenes de màscara.';
$string['skillimport_badshortname'] = 'Cada skill necessita un nom curt vàlid (lletres, números, guionet, guió baix).';
$string['skillimport_invalidjson'] = 'El fitxer pujat no és un JSON d\'skill vàlid.';
$string['skillimport_missingfield'] = 'Falta un camp obligatori: {$a}.';
$string['skillimported'] = 'S\'ha importat l\'skill «{$a}».';
$string['skillinstructions'] = 'Instruccions';
$string['skillinstructions_help'] = 'Orientacions que es carreguen al xat quan es carrega l\'skill. Incloeu-hi només orientacions que no siguin evidents: l\'assistent ja veu totes les funcions carregades i la seva descripció, així que no repetiu què fa una funció ni li recordeu que passi paràmetres evidents. Recolliu l\'ordre del flux de treball, les decisions i els paranys que les descripcions no cobreixen, i formuleu els passos que només s\'apliquen de vegades amb «Si ...».';
$string['skillloadedevent'] = 'Skill carregat · {$a}';
$string['skillloadmode'] = 'Es pot utilitzar';
$string['skillloadmode_dynamic'] = 'Només carregat a demanda durant el xat';
$string['skillloadmode_help'] = 'Quan un emplaçament utilitza l\'skill com a skill inicial, les instruccions de l\'skill s\'afegeixen a les instruccions del sistema des de l\'inici del xat. Utilitzeu aquesta opció per canviar com respon l\'agent d\'IA.

Un skill per a una tasca concreta, com ara configurar el llibre de qualificacions o afegir restriccions d\'accés, es pot carregar a demanda, quan l\'usuari demana alguna cosa que cobreix.';
$string['skillloadmode_initial'] = 'Només com a skill inicial';
$string['skillloadmode_initial_or_dynamic'] = 'Tant com a skill inicial com carregat a demanda';
$string['skillmainfunctions'] = 'Funcions principals';
$string['skillmainfunctions_help'] = 'Un conjunt reduït de màscares que seleccionen les funcions bàsiques de creació i actualització de l\'skill. Les capacitats d\'aquestes funcions decideixen a qui s\'ofereix l\'skill: només als usuaris que poden accedir almenys a una d\'elles. Cada màscara coincideix amb un nom de funció o amb un patró component/nom («*» és un comodí; un prefix «~» elimina coincidències). Deixeu-ho buit per oferir l\'skill a tothom.';
$string['skillmatched'] = 'Coincidents ({$a})';
$string['skillmisconfigured'] = 'Actualment no està disponible per a ningú: cap de les seves funcions principals correspon a una funció habilitada.';
$string['skillname'] = 'Nom';
$string['skillname_help'] = 'Un nom de visualització curt i llegible per a l\'skill, que es mostra a la llista d\'skills.';
$string['skillnomatch'] = 'Cap funció habilitada coincideix amb aquests patrons.';
$string['skillnotfound'] = 'No s\'ha trobat cap skill: {$a}.';
$string['skillotherfunctions'] = 'Altres funcions';
$string['skillotherfunctions_help'] = 'Màscares per a la resta de funcions que aporta l\'skill: lectures, funcions auxiliars o un component sencer. Tenen la mateixa sintaxi que les funcions principals, però no afecten a qui s\'ofereix l\'skill. Deixeu-ho buit si l\'skill no necessita funcions addicionals.';
$string['skills_intro'] = '<p>Un skill agrupa instruccions especialitzades per a una tasca concreta amb una llista de funcions recomanades per a aquesta tasca. Utilitzeu els skills per a tasques habituals de diversos passos en què l\'agent d\'IA sol confondre\'s o no troba les funcions adequades, o per a tasques específiques de la vostra organització.</p><p>Un skill es pot utilitzar de dues maneres, que es trien al seu paràmetre «Es pot utilitzar». Un emplaçament el pot definir com a skill inicial, de manera que les seves instruccions s\'apliquin des de l\'inici del xat. O bé l\'agent d\'IA el pot carregar a demanda: sempre veu els noms i les descripcions d\'aquests skills, i en carrega un sempre que decideix que s\'adiu amb la petició de l\'usuari. Un skill només està disponible per als usuaris que poden accedir almenys a una de les seves funcions principals. Per exemple, un skill creat per al professorat no serà visible per a l\'alumnat.</p>';
$string['skillshortname'] = 'Nom curt';
$string['skillshortname_help'] = 'Un nom de màquina estable, únic a tot el lloc: només lletres, números, guionet i guió baix. Es pot canviar més endavant, tret que l\'skill vingui amb el connector.';
$string['skilltags'] = 'Etiquetes';
$string['skilltags_help'] = 'Les etiquetes només s\'utilitzen per filtrar i no s\'envien al model.';
$string['skilltoobroad'] = 'Coincideix amb {$a} funcions, cosa que pot ser massa àmplia. Considereu acotar les màscares de funcions.';
$string['skillunavailable'] = 'No disponible';
$string['skillupdated'] = 'S\'ha actualitzat l\'skill «{$a}».';
$string['stop'] = 'Atura';
$string['stoppedafter'] = 'S\'ha aturat després de {$a}';
$string['stoppedbyuser'] = 'Heu aturat l\'agent. Escriviu un missatge nou per continuar.';
$string['stopping'] = 'S\'està aturant...';
$string['stoppingafterfunction'] = 'S\'aturarà quan acabi aquesta funció';
$string['suggestedprompt_edit'] = 'Edita aquest missatge abans d\'enviar-lo';
$string['suggestedprompt_send'] = 'Envia aquest missatge';
$string['switchview'] = 'Canvia la vista';
$string['systeminstruction'] = 'Instruccions del sistema personalitzades';
$string['systeminstruction_desc'] = 'Instruccions personalitzades que s\'envien al model d\'IA amb cada petició i que en defineixen el comportament, el to i les aptituds. Deixeu-ho buit per utilitzar les predeterminades integrades (que es mostren a continuació). Podeu utilitzar {siteurl} (adreça URL del lloc), {userid} (identificador de l\'usuari actual) i {date} (data d\'avui, en format ISO) com a marcadors de posició; se substitueixen en temps d\'execució. Instruccions predeterminades:{$a->default}

S\'afegeix sempre a les instruccions del sistema (predeterminades o personalitzades):{$a->context}';
$string['tab_functions'] = 'Funcions';
$string['tab_placements'] = 'Emplaçaments';
$string['tab_skills'] = 'Skills';
$string['tagarea_tool_aiagent_functions'] = 'Etiquetes de funcions de l\'agent d\'IA';
$string['tagarea_tool_aiagent_skill'] = 'Etiquetes d\'skills de l\'agent d\'IA';
$string['task_cleanup_chats'] = 'Suprimeix els xats antics de l\'agent d\'IA';
$string['task_purge_provider_data'] = 'Suprimeix del proveïdor d\'IA les dades dels xats de l\'agent d\'IA';
$string['task_revalidate_license'] = 'Torna a validar la llicència de l\'agent d\'IA';
$string['thinking'] = 'L\'agent d\'IA està pensant...';
$string['timecreated'] = 'Hora de creació';
$string['timelastactivity'] = 'Darrera activitat';
$string['timemodified'] = 'Hora de modificació';
$string['tryagain'] = 'Torna-ho a provar';
$string['unavailable_envcheck'] = 'Aquesta funció no està disponible perquè no està activat un paràmetre del lloc del qual depèn: {$a}.';
$string['unavailable_plugindisabled'] = 'Aquesta funció no està disponible perquè el connector {$a} està desactivat en aquest lloc.';
$string['unavailable_pluginnotinstalled'] = 'Aquesta funció no es pot utilitzar perquè el connector {$a} no està instal·lat en aquest lloc.';
$string['usage_completiontokens'] = 'Segments textuals de sortida';
$string['usage_model'] = 'Model';
$string['usage_prompttokens'] = 'Segments textuals d\'entrada';
$string['usage_provider'] = 'Proveïdor';
$string['usage_totaltokens'] = 'Total de segments textuals';
$string['viewdetails'] = 'Mostra els detalls';
$string['viewtype_fullscreen'] = 'Pantalla completa';
$string['viewtype_overlay'] = 'Finestra flotant';
$string['viewtype_sidebar'] = 'Barra lateral';
$string['viewtypes'] = 'Tipus de vista disponibles';
$string['viewtypes_alldisabled_warning'] = 'L\'agent d\'IA no està disponible per a ningú perquè tots els tipus de vista estan deshabilitats als <a href="{$a}">paràmetres</a>.';
$string['viewtypes_desc'] = 'Les vistes de xat que poden obrir els usuaris: una finestra flotant petita a la cantonada de la pàgina, una barra lateral al costat del contingut de la pàgina i la pàgina de xat a pantalla completa. Desmarqueu-les totes per deshabilitar temporalment l\'agent d\'IA per a tots els usuaris.';
$string['viewtypes_unavailable'] = 'L\'agent d\'IA no està disponible en aquest moment.';
$string['welcome_skillsmore'] = '+{$a} més';
$string['welcome_tryasking'] = 'Proveu de preguntar';
$string['welcomedesc'] = 'Pregunteu a l\'agent d\'IA sobre el vostre lloc, cursos, usuaris o contingut. Pot llegir i, amb la vostra aprovació, fer canvis.';
$string['welcometitle'] = 'Hola, {$a}';
$string['workedfor'] = 'Ha treballat durant {$a}';
$string['working'] = 'Treballant';
$string['workingfor'] = 'Fa {$a} que treballa';

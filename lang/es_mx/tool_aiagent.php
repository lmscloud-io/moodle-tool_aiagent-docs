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
 * Mexican Spanish language pack for AI agent.
 * Last updated: 2026-08-03
 *
 * A complete copy of lang/es, differing only where Mexican Spanish words something differently
 * (reporte, eliminar, bitacora, configuraciones, puntaje, inscribir). It cannot be a partial pack
 * the way lang/es_co is: core's es_mx declares no parentlanguage, so anything missing here falls
 * back to English rather than to Spanish. Update it alongside lang/es.
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'Adicional';
$string['aiagent:autoapproveall'] = 'Elegir el modo de autoaprobación «Todas», que ejecuta cada llamada a función sin confirmación';
$string['aiagent:usechat'] = 'Iniciar chats con el agente de IA (determina dónde se puede iniciar un chat; no restringe a qué datos puede acceder el chat una vez iniciado)';
$string['allowfeedback'] = 'Permitir comentarios';
$string['allowfeedback_desc'] = 'Si se habilita, los usuarios pueden valorar las respuestas del asistente y marcar las llamadas a funciones fallidas. Los envíos se remiten a los desarrolladores del plugin Agente de IA (no a ningún LLM) para que puedan mejorar el comportamiento de las llamadas a funciones de Moodle. Solo se envía el intercambio valorado, no el chat completo, y el usuario puede editar el texto antes de enviarlo. Deshabilite esta opción en sitios con políticas estrictas de tráfico saliente.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'Habilitar la herramienta «web fetch»';
$string['anthropic_web_fetch_desc'] = 'Permite a Claude obtener URL externas desde el servidor mediante la herramienta web_fetch de Anthropic. Es útil cuando el chat menciona páginas web públicas que el modelo debería leer. Los archivos de este sitio Moodle se gestionan aparte, mediante la función read_file (que los sube bajo demanda a la Files API de Anthropic), por lo que deshabilitar web_fetch no afecta al acceso a los recursos del curso ni a los adjuntos.';
$string['attachedfiles'] = 'Archivos adjuntos';
$string['attachfile'] = 'Adjuntar archivo';
$string['autoapprove'] = 'Autoaprobación';
$string['autoapprove_all'] = 'Todas (usar con precaución)';
$string['autoapprove_all_desc'] = 'Omitir todas las confirmaciones';
$string['autoapprove_all_disabled'] = 'No tiene permiso para usar este modo.';
$string['autoapprove_all_short'] = 'Todas';
$string['autoapprove_header'] = 'Autoaprobar llamadas a funciones';
$string['autoapprove_none'] = 'Ninguna';
$string['autoapprove_none_desc'] = 'Preguntar antes de cada llamada a función';
$string['autoapprove_readonly'] = 'Solo lectura';
$string['autoapprove_readonly_desc'] = 'Aprobar las lecturas, preguntar en las escrituras';
$string['autoapprove_safe'] = 'Seguras';
$string['autoapprove_safe_desc'] = 'Aprobar las acciones que no modifican el sitio';
$string['autoapprove_safe_examples'] = 'Lecturas, además de redimensionar adjuntos, generar imágenes, enviar archivos al LLM, etc.';
$string['backtoconfiguration'] = 'Regresar a la administración del agente de IA';
$string['builtinfunction'] = 'Incluida';
$string['bulk_disabled'] = '{$a} función(es) deshabilitada(s)';
$string['bulk_disableselected'] = 'Deshabilitar las seleccionadas';
$string['bulk_enabled'] = '{$a} función(es) habilitada(s)';
$string['bulk_enableselected'] = 'Habilitar las seleccionadas';
$string['bulk_withselected'] = 'Con las funciones seleccionadas';
$string['capabilities'] = 'Capacidades';
$string['chat_namelink'] = 'Nombre con enlace';
$string['chatfrozen'] = 'Las skills de este chat ya no están disponibles, por lo que no se puede continuar. Inicie un nuevo chat.';
$string['chathelpcontent'] = '<p>El agente de IA puede leer y modificar contenido de este sitio en su nombre. La mayoría de las acciones piden su aprobación antes de ejecutarse. Puede cambiar el modo de autoaprobación en el cuadro de mensaje para relajarlo o restringirlo.</p>
<p>Adjunte archivos arrastrándolos y soltándolos, pegándolos o pulsando el icono del clip. Después escriba su solicitud y pulse <strong>Enviar</strong>. Pulse Intro para enviar, o Mayús e Intro para una línea nueva.</p><p>La IA puede cometer errores. Verifique los resultados.</p>';
$string['chatnopermission'] = 'Este chat se inició en un área del sitio en la que ya no tiene acceso al agente de IA, por lo que no se puede continuar.';
$string['chatnostartpermission'] = 'No tiene permiso para iniciar un chat aquí. Abra el agente de IA desde una página en la que se ofrezca.';
$string['chatretention'] = 'Conservar los chats durante';
$string['chatretention_desc'] = 'Los chats sin actividad durante este tiempo se eliminan del historial de chats de los usuarios, sus archivos adjuntos se eliminan de este sitio y se solicita la eliminación de los datos del chat almacenados por el proveedor de IA (respuestas guardadas y archivos subidos). La eliminación en el lado del proveedor se hace en la medida de lo posible y no está garantizada; configure también una política de conservación de datos equivalente en su cuenta del proveedor. Los mensajes y las bitácoras de uso se conservan para los reportes hasta que venza el periodo de conservación de las bitácoras que se indica más abajo. Ponga 0 para conservar los chats indefinidamente.';
$string['closeconfirm_body'] = 'Cerrar la ventana no elimina el chat. Puede volver a abrirlo en cualquier momento desde el menú Chats anteriores. Los chats se eliminan automáticamente al cabo de {$a} días.';
$string['closeconfirm_body_noretention'] = 'Cerrar la ventana no elimina el chat. Puede volver a abrirlo en cualquier momento desde el menú Chats anteriores.';
$string['closeconfirm_close'] = 'Cerrar chat';
$string['closeconfirm_dontshowagain'] = 'No volver a mostrar esto';
$string['closeconfirm_title'] = '¿Cerrar este chat?';
$string['component'] = 'Componente';
$string['component_filesandimages'] = 'Manipulación de archivos e imágenes';
$string['configuration'] = 'Administración del agente de IA';
$string['confirmdeleteskill'] = '¿Seguro que desea eliminar esta skill?';
$string['contextevent_opened'] = 'Abierto desde {$a}';
$string['contextevent_page'] = 'Página · {$a}';
$string['copyresponse'] = 'Copiar respuesta';
$string['copyurl'] = 'Copiar URL';
$string['datasource_chats'] = 'Chats del agente de IA';
$string['datasource_usage'] = 'Uso del agente de IA';
$string['deletechat_menu'] = 'Eliminar chat';
$string['deletechat_named'] = 'Eliminar chat: {$a}';
$string['disablefunction'] = 'Deshabilitar esta función';
$string['dragtoresize'] = 'Arrastre para cambiar el tamaño';
$string['dynamicdiscovery'] = 'Descubrimiento dinámico de funciones';
$string['dynamicdiscovery_automatic'] = 'Automático';
$string['dynamicdiscovery_desc'] = 'Optimiza el uso de tokens descubriendo funciones solo cuando hacen falta. Se recomienda si tiene habilitado un gran número de funciones de servicios web. En modo automático, se activará si hay más de {$a} funciones disponibles. Algunos proveedores de IA limitan el número de funciones (por ejemplo, OpenAI tiene un límite de 128).';
$string['dynamicdiscovery_off'] = 'Desactivado';
$string['dynamicdiscovery_on'] = 'Activado';
$string['enabled'] = 'Habilitado';
$string['enablefunction'] = 'Habilitar esta función';
$string['entity_aiagentfunction'] = 'Función del agente de IA';
$string['entity_chat'] = 'Chat';
$string['entity_externalfunction'] = 'Función de servicio web';
$string['entity_message'] = 'Mensaje';
$string['entity_placement'] = 'Disposición';
$string['entity_skill'] = 'Skill';
$string['entity_usage'] = 'Uso de tokens';
$string['error_interrupted_function'] = 'Una llamada a función se interrumpió antes de terminar. Puede que haya aplicado cambios parcialmente; compruebe el estado antes de reintentarla.';
$string['error_interrupted_llm'] = 'La comunicación con el proveedor de IA se interrumpió. Pulse «Intentar de nuevo» para repetir la petición.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'El mensaje no puede estar vacío.';
$string['errorfullscreendisabled'] = 'La vista de chat a pantalla completa no está habilitada en este sitio.';
$string['errorinvalidchat'] = 'Chat no encontrado o acceso denegado.';
$string['errorinvalidname'] = 'El nombre no puede estar vacío.';
$string['errormissingfeedbackparams'] = 'Falta el mensaje o el tipo de comentario.';
$string['errornopendingfunction'] = 'No hay llamadas a funciones pendientes.';
$string['errornoprovider'] = 'No hay ningún proveedor de IA disponible. El agente de IA usa las configuraciones de la acción «Generar texto», así que debe asegurarse de que esté configurada y habilitada para al menos un proveedor de IA en Administración del sitio.';
$string['errornoprovider_link'] = 'Configurar los proveedores de IA.';
$string['errornoretryresponse'] = 'No hay ninguna respuesta fallida que reintentar.';
$string['errorpendingfunctions'] = 'Apruebe o deniegue primero las llamadas a funciones pendientes.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} bloqueó la petición: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} bloqueó la respuesta: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} no devolvió ningún contenido.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} no devolvió ningún contenido (motivo de finalización: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'El endpoint para comunicarse con el proveedor de IA no es válido o no se puede alcanzar.';
$string['errorresponses_endpoint_invalid_config'] = 'El plugin intentó usar {$a->endpoint} como endpoint de la Responses API, pero la petición falló. Vaya a {$a->settingslink} y compruebe el endpoint de la Responses API, o cambie el tipo de API a Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'El proveedor respondió: {$a}';
$string['errorresponses_provider_switch'] = 'Este chat no se puede continuar con la Responses API de OpenAI porque se inició con otro proveedor de IA. Inicie un nuevo chat, o vuelva al proveedor original (o a Chat Completions de OpenAI) para continuar este.';
$string['errorrootnotfound'] = 'No se ha encontrado el mensaje raíz de este chat.';
$string['exportskill'] = 'Exportar';
$string['feedback_modal_freetextlabel'] = '¿Algo más? (opcional)';
$string['feedback_modal_freetextplaceholder_negative'] = '¿Qué salió mal? Sea todo lo específico que quiera.';
$string['feedback_modal_freetextplaceholder_positive'] = '¿Qué funcionó bien? (opcional)';
$string['feedback_modal_freetextplaceholder_toolerror'] = '¿Qué salió mal en esta llamada a función?';
$string['feedback_modal_intro_negative'] = 'Gracias por avisarnos. Sus comentarios se enviarán a los desarrolladores del plugin Agente de IA (no al proveedor de IA) para que puedan mejorar el comportamiento de las llamadas a funciones de Moodle.';
$string['feedback_modal_intro_positive'] = '¡Gracias! Sus comentarios se enviarán a los desarrolladores del plugin Agente de IA (no al proveedor de IA) para que puedan mantener lo que funciona y mejorar lo que no.';
$string['feedback_modal_intro_toolerror'] = 'Marque esta llamada a función como problemática. Sus comentarios se enviarán a los desarrolladores del plugin Agente de IA (no al proveedor de IA) para que puedan corregir el servicio web subyacente o mejorar cómo lo usa la IA.';
$string['feedback_modal_send'] = 'Enviar comentarios';
$string['feedback_modal_sending'] = 'Enviando...';
$string['feedback_modal_snapshotlabel'] = 'Lo que se enviará (puede editarlo)';
$string['feedback_modal_title_positive'] = 'Cuéntenos qué funcionó';
$string['feedbackcat_negative_misunderstood'] = 'Entendió mal mi pregunta';
$string['feedbackcat_negative_notfollowed'] = 'No siguió las instrucciones';
$string['feedbackcat_negative_other'] = 'Otra cosa';
$string['feedbackcat_negative_wronginfo'] = 'Información errónea o inventada';
$string['feedbackcat_negative_wrongtoolused'] = 'Usó la función equivocada';
$string['feedbackcat_positive_accurate'] = 'Precisa';
$string['feedbackcat_positive_goodexplanation'] = 'Explicación clara';
$string['feedbackcat_positive_helpful'] = 'Útil';
$string['feedbackcat_positive_other'] = 'Otra cosa';
$string['feedbackcat_positive_welltimed'] = 'La función adecuada para la tarea';
$string['feedbackcat_toolerror_misleadingresult'] = 'El resultado inducía a error';
$string['feedbackcat_toolerror_other'] = 'Otra cosa';
$string['feedbackcat_toolerror_toolerror'] = 'La función devolvió un error';
$string['feedbackcat_toolerror_wrongargs'] = 'Argumentos incorrectos';
$string['feedbackcat_toolerror_wrongtool'] = 'Función equivocada para la tarea';
$string['feedbackdisabled'] = 'El administrador del sitio ha deshabilitado la recogida de comentarios.';
$string['feedbackfailed'] = 'No se han podido enviar los comentarios. Reintente más tarde.';
$string['feedbackflagfunctioncall'] = 'Marcar esta llamada a función';
$string['feedbacksubmitted'] = 'Comentarios enviados';
$string['feedbackthanks'] = '¡Gracias por sus comentarios!';
$string['feedbackthumbdown'] = 'Informar de un problema con esta respuesta';
$string['feedbackthumbup'] = 'Esta respuesta fue útil';
$string['feedbackvalidation_categoryrequired'] = 'Seleccione al menos una categoría.';
$string['functionapprovecount'] = 'Aprobar {$a} llamadas';
$string['functioncall_actions'] = 'Aprobar o denegar la llamada a función';
$string['functioncall_chip_action'] = 'Cambiar el modo de autoaprobación';
$string['functioncalldetails'] = 'Detalles de la llamada a función';
$string['functiondeny'] = 'Denegar';
$string['functiondenyall'] = 'Denegar todas';
$string['functionloopguardbody'] = 'Esta función ya se ha ejecutado {$a} veces con la misma entrada. La autoaprobación está en pausa por si hay un bucle; apruébela para continuar.';
$string['functionloopguardheading'] = 'Llamada repetida.';
$string['functionname'] = 'Nombre de la función';
$string['functionparameters'] = 'Parámetros';
$string['functionresult'] = 'Resultado';
$string['functionresultdiscarded'] = 'El resultado era demasiado grande ({$a}) y se descartó. Acote la petición filtrándola, solicitando menos campos o usando una función más específica. Repetir la misma llamada producirá el mismo error.';
$string['functions_intro'] = '<p><b>No todas las funciones de servicios web encajan bien con el agente de IA.</b> Algunas se crearon para la comunicación cliente-servidor (marcadas como AJAX) o para usuarios sin autenticar (Sin autenticar), y otras tienen mejores alternativas. Algunas funciones AJAX funcionan bien con el agente de IA, pero la mayoría no. El plugin Agente de IA asigna un puntaje de relevancia (1-10) a las funciones del núcleo y a las de los plugins estándar, y habilita las que puntúan 5 o más. Las funciones de plugins adicionales no se puntúan; en su lugar, se habilitan automáticamente todas las que no son AJAX. Use esta página para revisar las funciones disponibles y habilitar o deshabilitar cada una.</p><p>Cuando una función requiere una o varias capacidades, no está disponible para los usuarios que no tengan al menos una de esas capacidades en algún contexto del sitio. Para el núcleo y los plugins estándar, el plugin Agente de IA establece estas capacidades correctamente. Para los plugins adicionales, las capacidades se toman de la definición de la función y, como Moodle no realiza esta comprobación por sí mismo, pueden ser incorrectas.</p>';
$string['functions_report'] = 'Funciones del agente de IA';
$string['functionstatus_denied'] = 'Denegada';
$string['functionstatus_failed'] = 'Fallida';
$string['functionstatus_pending'] = 'Pendiente de aprobación';
$string['functionstatus_processing'] = 'Ejecutando...';
$string['functiontype'] = 'Tipo';
$string['functiontype_help'] = 'El tipo de la función de servicio web y sus propiedades:

* **Lectura**: recupera datos sin modificar nada
* **Escritura**: crea o modifica datos
* **AJAX**: Moodle la usa internamente para las peticiones cliente-servidor, por lo que es menos probable que sea adecuada como función del agente de IA
* **Sin autenticar**: está disponible para usuarios no autenticados, por lo que también es menos probable que sea adecuada como función del agente de IA';
$string['functiontype_read'] = 'Lectura';
$string['functiontype_write'] = 'Escritura';
$string['gemini_api_generatecontent'] = 'generateContent (estable)';
$string['gemini_api_interactions'] = 'Interactions API (beta)';
$string['gemini_api_type'] = 'Tipo de API';
$string['gemini_api_type_desc'] = 'Qué API de Gemini usar para los chats de varios turnos. generateContent es el endpoint estándar sin estado y reconstruye el array de mensajes completo en cada turno. La Interactions API está actualmente en beta; guarda el estado de la conversación en el lado de Google (por lo que solo se envía la entrada nueva en cada turno), pero su esquema puede cambiar sin previo aviso.';
$string['gemini_builtin_code_execution'] = 'Habilitar la herramienta Code Execution';
$string['gemini_builtin_code_execution_desc'] = 'Permite a Gemini escribir y ejecutar código Python en un entorno aislado para resolver operaciones matemáticas o procesar datos. Solo en modelos Gemini 3+; se ignora de forma silenciosa en Gemini 2.5 y anteriores, porque esos modelos no pueden combinar herramientas integradas con llamadas a funciones propias.';
$string['gemini_builtin_google_search'] = 'Habilitar la fundamentación con Google Search';
$string['gemini_builtin_google_search_desc'] = 'Permite a Gemini fundamentar sus respuestas en resultados actuales de búsqueda web. Solo en modelos Gemini 3+; se ignora de forma silenciosa en Gemini 2.5 y anteriores, porque esos modelos no pueden combinar herramientas integradas con llamadas a funciones propias. Cada consulta de búsqueda se factura por separado.';
$string['gemini_builtin_url_context'] = 'Habilitar la herramienta URL Context';
$string['gemini_builtin_url_context_desc'] = 'Permite a Gemini leer y analizar el contenido de las URL públicas que mencione el usuario. Solo en modelos Gemini 3+; se ignora de forma silenciosa en Gemini 2.5 y anteriores, porque esos modelos no pueden combinar herramientas integradas con llamadas a funciones propias. Las URL deben ser accesibles públicamente (nada de localhost ni de autenticación).';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = '¿Quiere usar este chat junto a su sitio? Arrastre <a href="{$a}">{$a}</a> a una ventana nueva, o pulse en él con el botón derecho y use la vista dividida de su navegador.';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'Archivo {$a->size}, dimensiones {$a->dimensions}. Vista previa {$a->preview} ({$a->scale}%).';
$string['importskill'] = 'Importar skills';
$string['importskill_addmore'] = 'Añadir más...';
$string['importskill_button'] = 'Importar {$a} skills';
$string['importskill_buttonone'] = 'Importar 1 skill';
$string['importskill_choose'] = 'Elegir archivos...';
$string['importskill_drophint'] = 'Arrastre aquí los archivos de skills, o use el botón.';
$string['importskill_fileone'] = '1 archivo seleccionado';
$string['importskill_files'] = '{$a} archivos seleccionados';
$string['importskill_statusinvalid'] = 'No es un archivo de skill';
$string['importskill_statusnew'] = 'Skill nueva';
$string['importskill_statusupdate'] = 'Actualiza {$a}';
$string['importskill_summarynew'] = '{$a} nuevas';
$string['importskill_summaryskipped'] = '{$a} omitidas';
$string['importskill_summaryupdate'] = '{$a} para actualizar';
$string['importskill_toolarge'] = 'Los datos de la skill son demasiado grandes (máximo {$a}).';
$string['inlinefilecharlimit'] = 'Límite de contenido de archivo en línea';
$string['inlinefilecharlimit_desc'] = 'Cantidad máxima de un archivo de texto que se puede incrustar directamente en el chat cuando se lee un archivo en línea. El contenido más largo se trunca. La entrega en línea se usa cuando el modelo la solicita, y como alternativa para los proveedores de IA que no aceptan archivos. El contenido incrustado se reenvía con el historial del chat en cada turno, por lo que un límite alto aumenta el uso de tokens.';
$string['invalidparameter'] = 'Parámetro no válido detectado: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'Activar licencia';
$string['licenseactivate_help'] = 'Introduzca la clave de licencia que recibió por email de LMSCloud. La clave de licencia se puede activar en un número limitado de sitios (normalmente dos). Puede desactivarla en cualquier momento para usarla en otro sitio.';
$string['licensedeactivate'] = 'Desactivar';
$string['licensedeactivate_help'] = 'Desactiva la clave de licencia en este sitio para que se pueda usar en otro sitio.';
$string['licenseerror_deactivate'] = 'No se ha podido desactivar la licencia. Puede que el servidor no esté disponible temporalmente; inténtelo de nuevo más tarde.';
$string['licenseerror_deactivate_forced'] = 'Esta licencia está definida en la configuración del servidor (config.php) y no se puede desactivar desde esta página.';
$string['licenseerror_invalid'] = 'La clave de licencia no es válida o no se ha podido activar.';
$string['licenseerror_limit'] = 'No hay plazas libres para esta clave de licencia. Desactive antes otro sitio y vuelva a intentarlo.';
$string['licenseerror_transport'] = 'No se ha podido contactar con el servidor de licencias. Compruebe la conexión e inténtelo de nuevo.';
$string['licensekey'] = 'Clave de licencia';
$string['licenselocked_expired'] = 'Este sitio lleva más de 14 días sin validar su licencia. Vuelva a comprobar la licencia para restablecer el acceso.';
$string['licenselocked_key_rejected'] = 'Esta clave de licencia ya no es válida en este sitio.';
$string['licenselocked_url_mismatch'] = 'La dirección web de este sitio ha cambiado; el titular de la licencia debe autorizarla.';
$string['licensemanageinsettings'] = 'Gestione la licencia en las configuraciones del agente de IA.';
$string['licenserecheck'] = 'Volver a comprobar';
$string['licensesetting'] = 'Licencia del agente de IA';
$string['licensesetting_desc'] = 'Active, vuelva a comprobar o desactive la licencia del agente de IA para este sitio.';
$string['licensestatus_materialsmissing'] = 'La licencia del agente de IA está activa, pero faltan los materiales descargados, por lo que no hay ninguna función disponible. Vuelva a comprobarla para descargarlos de nuevo.';
$string['licensestatus_notactivated'] = 'Se necesita una licencia para usar el agente de IA en este sitio.';
$string['licensestatus_valid'] = 'Licencia del agente de IA activa.';
$string['loginrequired'] = 'Requiere usuario autenticado';
$string['logretention'] = 'Conservar las bitácoras de chat durante';
$string['logretention_desc'] = 'Los mensajes y las bitácoras de uso de tokens de los chats sin actividad durante este tiempo se eliminan definitivamente de la base de datos. Esto solo se aplica a los chats que ya se habían eliminado del historial de chats, sea por el usuario o por la configuración anterior. Ponga 0 para conservar las bitácoras indefinidamente.';
$string['maxfilesize'] = 'Tamaño máximo de archivo para el LLM';
$string['maxfilesize_desc'] = 'Impide que los usuarios envíen al LLM archivos demasiado grandes. Los archivos grandes consumen tokens rápidamente y disparan los costes. Los archivos que superen este tamaño se rechazan con un error antes de que salga ningún byte del sitio.

Los proveedores de IA rechazarán de todos modos los archivos que superen sus propios límites por petición (Anthropic 32 MB, Gemini 50 MB en línea, OpenAI 512 MB).';
$string['maxfunctionresultsize'] = 'Tamaño máximo del resultado de una función';
$string['maxfunctionresultsize_desc'] = 'Cantidad máxima de datos que una sola función puede devolver al modelo de IA. Algunas funciones de Moodle no tienen filtro y devuelven todos los usuarios o todos los cursos del sitio, lo que inunda el modelo y consume tokens en cada turno siguiente. Un resultado que supere este límite se descarta y se le indica al modelo que acote la petición. Cero significa sin límite. La lectura de un archivo en línea está exenta; para eso se usa «Límite de contenido de archivo en línea».';
$string['newchat'] = 'Nuevo chat';
$string['newchatchooser_blank_sub'] = 'Sin contexto. Asistente general.';
$string['newchatchooser_clone'] = 'Igual que este chat';
$string['newchatchooser_continue'] = 'Continuar donde estaba';
$string['newchatchooser_desc_default'] = 'Inicie un nuevo chat en esta página, o continúe donde estaba.';
$string['newchatchooser_desc_full'] = 'Inicie un chat general, o continúe donde estaba.';
$string['newchatchooser_desc_multi'] = 'Esta página tiene varios puntos de partida. Elija uno, o continúe donde estaba.';
$string['newchatchooser_error'] = 'No se ha podido iniciar un nuevo chat. Reintente.';
$string['newchatchooser_none'] = 'Aquí no hay ninguna página en la que pueda iniciar un nuevo chat.';
$string['newchatchooser_onthispage'] = 'En esta página:';
$string['newchatchooser_title'] = 'Iniciar un nuevo chat';
$string['nfilesattached'] = '{$a} archivos adjuntos';
$string['nonauth'] = 'Sin autenticar';
$string['numfiles'] = '{$a} archivos';
$string['numimages'] = '{$a} imágenes';
$string['numotherfiles'] = '{$a} de otros tipos';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'Tipo de API';
$string['openai_api_type_desc'] = 'Qué API de OpenAI usar para los chats de varios turnos. La Responses API mantiene el estado de la conversación en el servidor, por lo que solo se envía la entrada nueva en cada turno (menor coste, historial más sencillo). Chat Completions reconstruye el array de mensajes completo en cada petición (mayor compatibilidad entre proveedores).<br><br>La Responses API es compatible con: <strong>{$a}</strong>. Los demás proveedores recurrirán de forma silenciosa a Chat Completions, sea cual sea esta configuración.';
$string['openai_heading'] = 'OpenAI (o compatible)';
$string['openlink'] = 'Abrir enlace';
$string['placeholder'] = 'Escriba un mensaje...';
$string['placement_add'] = 'Añadir disposición';
$string['placement_confirmdelete'] = '¿Seguro que desea eliminar esta disposición?';
$string['placement_copyof'] = '{$a} (copia)';
$string['placement_defaultname'] = 'Agente de IA';
$string['placement_deleted'] = 'Disposición borrada.';
$string['placement_duplicated'] = 'Disposición duplicada.';
$string['placement_edit'] = 'Editar disposición';
$string['placement_initialskills'] = 'Skills iniciales';
$string['placement_initialskills_help'] = 'Skills que se cargan automáticamente al iniciar el chat. Es opcional; el agente puede cargar cualquier skill cuando la necesite. Las skills que indique también controlan esta disposición: los usuarios que no tengan acceso a ninguna de ellas no verán el botón ni la entrada de menú, y si más adelante se eliminan o se deshabilitan todas las skills indicadas, la disposición deja de aparecer.';
$string['placement_intro'] = '<p>Las disposiciones le permiten ofrecer agentes adaptados a una tarea concreta. Cada disposición añade el botón del agente de IA a las páginas cuya URL coincide con una de sus máscaras, y puede iniciar el chat con unas skills iniciales y un texto de bienvenida predefinidos. Si se indican skills iniciales, los usuarios que no tengan acceso a ninguna de ellas no verán el botón.</p><p>Las skills iniciales solo fijan el punto de partida del chat; el agente sigue pudiendo acceder a todas las funciones habilitadas, no solo a las de esas skills.</p>';
$string['placement_location'] = 'Ubicación del botón';
$string['placement_location_floating'] = 'Botón flotante';
$string['placement_location_h1'] = 'Encabezado de página (H1)';
$string['placement_location_h2'] = 'Encabezado secundario (H2)';
$string['placement_menuheading'] = 'Pregunte al agente de IA';
$string['placement_name'] = 'Nombre';
$string['placement_name_help'] = 'Se muestra a los usuarios: en el menú de usuario, como texto emergente del botón y (cuando varias disposiciones coinciden en la misma página) en el menú del botón.';
$string['placement_save'] = 'Guardar disposición';
$string['placement_saved'] = 'Disposición guardada.';
$string['placement_skillmissing'] = 'Skill no encontrada';
$string['placement_urlmask'] = 'Máscaras de URL';
$string['placement_urlmask_help'] = 'Un patrón por línea. Use * como comodín, por ejemplo /course/view.php* o /mod/*/view.php*. Nota: en las páginas donde una disposición más específica ocupa la misma ubicación, se oculta una disposición amplia que coincida con /*, de modo que los usuarios solo ven la más relevante.';
$string['placement_urlmask_invalid'] = 'Cada máscara de URL debe empezar por una barra: «{$a}» no lo hace.';
$string['placement_welcome'] = 'Texto de bienvenida personalizado (opcional)';
$string['placement_welcome_help'] = 'Sustituye al mensaje de bienvenida estándar en la pantalla inicial del chat. Déjelo vacío para usar el predeterminado.';
$string['pluginname'] = 'Agente de IA';
$string['previouschats'] = 'Chats anteriores';
$string['privacy:metadata:aiprovider'] = 'Los chats se envían al proveedor de IA elegido por el administrador del sitio, como OpenAI, Azure OpenAI, Google Gemini o Anthropic, para que pueda generar una respuesta. El plugin envía cada petición directamente al proveedor, no a través del subsistema de IA de Moodle. Qué empresa recibe los datos, y cuánto tiempo se conservan allí, depende del proveedor que tenga configurado el sitio y de las condiciones de ese proveedor.';
$string['privacy:metadata:aiprovider:files'] = 'Los archivos que el usuario adjunta a un chat, y los archivos que el agente lee del sitio en nombre del usuario, que se suben para que el modelo pueda leer su contenido.';
$string['privacy:metadata:aiprovider:messages'] = 'El historial del chat, que se reenvía en cada turno: las peticiones del usuario, las respuestas del asistente y los resultados de las funciones de Moodle que ejecutó el agente, que pueden incluir datos personales de otros usuarios devueltos por esas funciones.';
$string['privacy:metadata:aiprovider:userid'] = 'El ID del usuario que mantiene el chat, incluido en las instrucciones que se dan al modelo para que pueda actuar en nombre de ese usuario.';
$string['privacy:metadata:core_files'] = 'Archivos adjuntos a los mensajes del agente de IA.';
$string['privacy:metadata:feedback'] = 'Cuando los comentarios están habilitados y un usuario valora una respuesta o informa de una llamada a función fallida, el intercambio valorado se envía a los desarrolladores del plugin Agente de IA para que se pueda mejorar el comportamiento del agente. No se envía nada a menos que el usuario decida enviar comentarios, y la funcionalidad se puede desactivar por completo con la configuración «Permitir comentarios».';
$string['privacy:metadata:feedback:freetext'] = 'El comentario que el usuario escribe opcionalmente al enviar sus comentarios, que se envía tal cual.';
$string['privacy:metadata:feedback:snapshot'] = 'Una transcripción del intercambio valorado: la pregunta del usuario, las respuestas del asistente y los nombres de las funciones que llamó. Las direcciones de correo se enmascaran y los argumentos y resultados de esas funciones se omiten, salvo en las búsquedas de funciones del propio agente. El usuario puede editar el texto antes de enviarlo.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'La preferencia de no volver a mostrar el diálogo de confirmación de cierre.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'El tamaño que el usuario dio al panel de chat en ventana flotante.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'La anchura que el usuario dio al panel de chat en barra lateral.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'El tipo de vista de chat (ventana flotante, barra lateral o pantalla completa) que el usuario usó por última vez.';
$string['privacy:metadata:tool_aiagent_conversation'] = 'Chats entre un usuario y el agente de IA. Los chats que el usuario borra se archivan en lugar de eliminarse, para que se pueda seguir controlando el uso de tokens.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'La hora en que se archivó el chat (eliminado por el usuario), si procede.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'La hora en que se creó el chat.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'Cuándo se guardó el último mensaje del chat.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'La hora en que se actualizó el chat por última vez.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'El nombre del chat, generado a partir del primer mensaje.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'El usuario propietario del chat.';
$string['privacy:metadata:tool_aiagent_message'] = 'Los mensajes individuales de un chat, incluidas las peticiones del usuario y las respuestas de la IA.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'El contenido del mensaje.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'Quién envió el mensaje: el usuario, el asistente, el sistema o una función.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'La hora en que se creó el mensaje.';
$string['privacy:metadata:tool_aiagent_usage'] = 'El uso de tokens registrado en cada petición de IA, conservado para el control del uso.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'El número de tokens de salida (finalización) usados.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'El modelo de IA que atendió la petición.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'El número de tokens de entrada (petición) usados.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'El proveedor de IA que atendió la petición.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'La hora en que se hizo la petición.';
$string['relevancescore'] = 'Puntuación de relevancia';
$string['relevancescore_help'] = 'El puntaje de relevancia indica lo adecuada que es una función de servicio web para el agente de IA, en una escala de 1 a 10.

**Los puntajes altos (7-10)** se dan a las funciones claramente útiles para un asistente de IA, como crear cursos, inscribir usuarios, buscar contenidos u obtener calificaciones.

**Los puntajes intermedios (4-6)** son típicos de las operaciones destructivas o irreversibles (como eliminar cursos o des-inscribir usuarios), que son útiles pero conllevan más riesgo, así como de las funciones muy específicas con poca aplicabilidad.

**Los puntajes bajos (1-3)** se dan a las funciones diseñadas para la comunicación interna entre el navegador y el servidor, a las que no requieren autenticación, a las obsoletas o a las que duplican mejores alternativas.

**Un puntaje de 0** significa que la función aún no se ha evaluado. Es habitual en las funciones de plugins de terceros.

El puntaje de relevancia se usó para fijar el valor inicial de si cada función está habilitada. Los puntajes iniciales de los componentes del núcleo de Moodle se generaron con IA y puede que necesiten una revisión manual.';
$string['removefilenamed'] = 'Quitar archivo: {$a}';
$string['renamechat'] = 'Renombrar chat';
$string['renamechat_label'] = 'Nuevo nombre del chat';
$string['responses_endpoints'] = 'Endpoints personalizados de la Responses API';
$string['responses_endpoints_desc'] = 'Sustituye al endpoint de la Responses API cuando un despliegue alojado o mediante proxy de OpenAI o Azure OpenAI lo sirve en una dirección no estándar. Déjelo vacío para usar los valores predeterminados integrados. No tiene efecto cuando el tipo de API es Chat Completions.<br><br>
Por ejemplo, https://su-recurso.azure.com/api/responses?api-version=preview. El endpoint de la Files API se deriva sustituyendo /responses por /files y conservando la cadena de consulta, de modo que las subidas van a https://su-recurso.azure.com/api/files?api-version=preview.<br><br>
Si usa varias instancias de proveedor, añada una URL por línea. Cada proveedor usa la línea cuyo host coincide con el de su propio endpoint de API.';
$string['responses_endpoints_invalidline'] = 'Cada línea debe ser una URL https completa cuya ruta termine en /responses; http solo se acepta para localhost. Línea no válida: {$a}';
$string['resume_desc'] = 'Tiene un chat reciente. Retómelo donde lo dejó, o inicie uno nuevo.';
$string['resume_lastmessage'] = 'Último mensaje hace {$a}';
$string['resume_resume'] = 'Retomar el último chat';
$string['resume_title'] = 'Bienvenido/a de nuevo';
$string['sendmessage'] = 'Enviar';
$string['settings'] = 'Configuraciones del agente de IA';
$string['showallfiles'] = 'Mostrar todos';
$string['skill_add'] = 'Añadir skill';
$string['skill_edit'] = 'Editar skill';
$string['skill_save_close'] = 'Guardar y cerrar';
$string['skill_save_preview'] = 'Guardar y previsualizar';
$string['skill_saved'] = 'Skill guardada.';
$string['skilladd_aitip'] = 'En lugar de rellenar esto a mano, puede pedirle al agente de IA que construya la skill por usted: sabe encontrar las funciones adecuadas y redactar las instrucciones. <a href="{$a}">Abrir el agente de IA</a>.';
$string['skillcapabilities_help'] = 'Se deducen de las funciones principales de la skill: un usuario solo puede usar la skill si tiene al menos una de estas capacidades en algún contexto del sitio. La lista combina las capacidades requeridas por todas las funciones principales.';
$string['skillcapabilities_none'] = 'Ninguna. La skill está disponible para todos los usuarios.';
$string['skillconfigured'] = 'Configuradas';
$string['skilldeleted'] = 'Skill «{$a}» borrada.';
$string['skilldescription'] = 'Descripción';
$string['skilldescription_help'] = 'Para qué sirve la skill, de modo que el asistente sepa cuándo cargarla. Describa la tarea o la actividad a la que se refiere, no los pasos que realiza. Aparece tanto en la lista de skills (para las personas) como en el prompt del sistema (para el asistente).';
$string['skillexists'] = 'Ya existe una skill con el nombre corto «{$a}».';
$string['skillimport_badmasks'] = 'Los campos "mainfunctions" y "otherfunctions" deben ser cada uno una lista de cadenas de máscara.';
$string['skillimport_badshortname'] = 'Cada skill necesita un nombre corto válido (letras, números, guion y guion bajo).';
$string['skillimport_invalidjson'] = 'El archivo subido no es un JSON de skill válido.';
$string['skillimport_missingfield'] = 'Falta un campo obligatorio: {$a}.';
$string['skillimported'] = 'Skill «{$a}» importada.';
$string['skillinstructions'] = 'Instrucciones';
$string['skillinstructions_help'] = 'Orientación que se carga en el chat cuando se carga la skill. Incluya solo lo que no sea evidente: el asistente ya ve todas las funciones cargadas y sus descripciones, así que no repita lo que hace una función ni le recuerde que pase parámetros obvios. Recoja el orden del flujo de trabajo, las decisiones y los detalles imprevistos que las descripciones no cubren, y formule los pasos que solo se aplican a veces empezando por «Si ...».';
$string['skillloadedevent'] = 'Skill cargada · {$a}';
$string['skillmainfunctions'] = 'Funciones principales';
$string['skillmainfunctions_help'] = 'Un conjunto reducido de máscaras que selecciona las funciones centrales de creación y actualización de la skill. Las capacidades de estas funciones deciden a quién se ofrece la skill: solo a los usuarios que puedan acceder al menos a una de ellas. Cada máscara coincide con un nombre de función o con un patrón componente/nombre («*» es un comodín; el prefijo «~» quita coincidencias). Déjelo vacío para ofrecer la skill a todo el mundo.';
$string['skillmatched'] = 'Coincidentes ({$a})';
$string['skillmisconfigured'] = 'Actualmente no está disponible para nadie: ninguna de sus funciones principales corresponde a una función habilitada.';
$string['skillname'] = 'Nombre';
$string['skillname_help'] = 'Un nombre corto y legible para mostrar la skill, que aparece en la lista de skills.';
$string['skillnomatch'] = 'Ninguna función habilitada coincide con estos patrones.';
$string['skillnotfound'] = 'No se ha encontrado la skill: {$a}.';
$string['skillotherfunctions'] = 'Otras funciones';
$string['skillotherfunctions_help'] = 'Máscaras para el resto de funciones que aporta la skill: lecturas, funciones auxiliares o un componente entero. Misma sintaxis que las funciones principales, pero estas no influyen en a quién se ofrece la skill. Déjelo vacío si la skill no necesita funciones adicionales.';
$string['skills_intro'] = '<p>Una skill reúne instrucciones especializadas para una tarea concreta junto con una lista de funciones recomendadas para ella. Use las skills para tareas habituales de varios pasos en las que el agente de IA suele confundirse o no encuentra las funciones adecuadas, o para tareas propias de su organización.</p><p>La lista de skills y sus descripciones están siempre a disposición del agente de IA, que carga una skill por su cuenta cuando decide que encaja con la petición del usuario. Una skill solo está disponible para los usuarios que puedan acceder al menos a una de sus funciones principales. Por ejemplo, una skill creada para docentes no será visible para el alumnado.</p>';
$string['skillshortname'] = 'Nombre corto';
$string['skillshortname_help'] = 'Un nombre de máquina estable y único en el sitio: solo letras, números, guion y guion bajo. No se puede cambiar después de crear la skill.';
$string['skilltoobroad'] = 'Coincide con {$a} funciones, lo que puede resultar demasiado amplio. Considere restringir las máscaras de funciones.';
$string['skillunavailable'] = 'No disponible';
$string['skillupdated'] = 'Skill «{$a}» actualizada.';
$string['switchview'] = 'Cambiar de vista';
$string['systeminstruction'] = 'Instrucciones del sistema personalizadas';
$string['systeminstruction_desc'] = 'Instrucciones personalizadas que se envían al modelo de IA con cada petición y definen su comportamiento, su tono y lo que puede hacer. Déjelo vacío para usar el valor predeterminado integrado (que se muestra más abajo). Puede usar {siteurl} (URL del sitio), {userid} (ID del usuario actual) y {date} (fecha de hoy, en formato ISO) como marcadores de posición; se sustituyen en tiempo de ejecución. Instrucciones predeterminadas:{$a->default}

Se añade siempre a las instrucciones del sistema (predeterminadas o personalizadas):{$a->context}';
$string['tab_functions'] = 'Funciones';
$string['tab_placements'] = 'Disposiciones';
$string['tab_skills'] = 'Skills';
$string['tagarea_tool_aiagent_functions'] = 'Marcas de funciones del agente de IA';
$string['task_cleanup_chats'] = 'Eliminar los chats antiguos del agente de IA';
$string['task_purge_provider_data'] = 'Eliminar los datos de chat del agente de IA en el proveedor de IA';
$string['task_revalidate_license'] = 'Revalidar la licencia del agente de IA';
$string['thinking'] = 'El agente de IA está pensando...';
$string['timecreated'] = 'Hora de creación';
$string['timelastactivity'] = 'Última actividad';
$string['timemodified'] = 'Hora de modificación';
$string['tryagain'] = 'Reintentar';
$string['usage_completiontokens'] = 'Tokens de salida';
$string['usage_model'] = 'Modelo';
$string['usage_prompttokens'] = 'Tokens de entrada';
$string['usage_provider'] = 'Proveedor';
$string['usage_totaltokens'] = 'Tokens totales';
$string['viewdetails'] = 'Ver detalles';
$string['viewtype_fullscreen'] = 'Pantalla completa';
$string['viewtype_overlay'] = 'Ventana flotante';
$string['viewtype_sidebar'] = 'Barra lateral';
$string['viewtypes'] = 'Tipos de vista disponibles';
$string['viewtypes_alldisabled_warning'] = 'El agente de IA no está disponible para nadie porque todos los tipos de vista están deshabilitados en los <a href="{$a}">configuraciones</a>.';
$string['viewtypes_desc'] = 'Las vistas de chat que pueden abrir los usuarios: una pequeña ventana flotante en la esquina de la página, una barra lateral junto al contenido de la página y la página de chat a pantalla completa. Desmarque todas para deshabilitar temporalmente el agente de IA para todos los usuarios.';
$string['viewtypes_unavailable'] = 'El agente de IA no está disponible en este momento.';
$string['welcomedesc'] = 'Pregunte al agente de IA sobre su sitio, sus cursos, sus usuarios o sus contenidos. Puede leer y, con su aprobación, hacer cambios.';
$string['welcometitle'] = 'Bienvenido/a, {$a}';

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
 * Colombian Spanish language pack for AI agent.
 * Last updated: 2026-10-25
 *
 * Only the strings that differ from lang/es are listed. Everything else falls back to lang/es
 * through parentlanguage, which core's es_co declares, so a string added to lang/en needs an entry
 * here only when Colombian Spanish says it differently.
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['chatretention'] = 'Mantener los chats durante';
$string['chatretention_desc'] = 'Los chats sin actividad durante este tiempo se eliminan del historial de chats de los usuarios, sus archivos adjuntos se borran de este sitio y se solicita la eliminación de los datos del chat almacenados por el proveedor de IA (respuestas guardadas y archivos subidos). La eliminación en el lado del proveedor se hace en la medida de lo posible y no está garantizada; configure también una política de conservación de datos equivalente en su cuenta del proveedor. Los mensajes y los registros de uso se conservan para los reportes hasta que venza el periodo de conservación de los registros que se indica más abajo. Ponga 0 para conservar los chats indefinidamente.';
$string['errornoprovider'] = 'No hay ningún proveedor de IA disponible. El agente de IA usa la configuración de la acción «Generar texto», así que debe asegurarse de que esté configurada y habilitada para al menos un proveedor de IA en Administración del sitio.';
$string['erroroutofsync'] = 'Este chat ha cambiado en otra ventana. Refresque para ver el estado más reciente.';
$string['errorupdatesstopped'] = 'Este chat dejó de recibir actualizaciones. Refresque para ver el estado más reciente.';
$string['functions_intro'] = '<p><b>No todas las funciones de servicios web encajan bien con el agente de IA.</b> Algunas se crearon para la comunicación cliente-servidor (marcadas como AJAX) o para usuarios sin autenticar (Sin autenticar), y otras tienen mejores alternativas. Algunas funciones AJAX funcionan bien con el agente de IA, pero la mayoría no. El plugin Agente de IA asigna una puntuación de relevancia (1-10) a las funciones del núcleo y a las de los plugins estándar, y habilita las que puntúan 5 o más. Las funciones de extensiones adicionales no se puntúan; en su lugar, se habilitan automáticamente todas las que no son AJAX. Use esta página para revisar las funciones disponibles y habilitar o deshabilitar cada una.</p><p>Cuando una función requiere una o varias capacidades, no está disponible para los usuarios que no tengan al menos una de esas capacidades en algún contexto del sitio. Para el núcleo y las extensiones estándar, el plugin Agente de IA establece estas capacidades correctamente. Para los plugins adicionales, las capacidades se toman de la definición de la función y, como Moodle no realiza esta comprobación por sí mismo, pueden ser incorrectas.</p>';
$string['licenseactivate_help'] = 'Ingrese la clave de licencia que recibió por correo electrónico de LMSCloud. La clave de licencia se puede activar en un número limitado de sitios (normalmente dos). Puede desactivarla en cualquier momento para usarla en otro sitio.';
$string['licensemanageinsettings'] = 'Gestione la licencia en la configuración del agente de IA.';
$string['logretention'] = 'Mantener los registros de chat durante';
$string['placement_functionrules_help'] = 'Limita qué funciones puede usar el agente de IA en los chats iniciados desde esta disposición. Déjelo vacío para permitir todas las funciones. Si cambia la regla, también cambia en los chats ya iniciados desde esta disposición.

La regla se escribe en JSON. Cada parte de ella es un objeto con una clave:

* {"type": "read"}: el tipo de la función es read, safe o write, como en el reporte de la pestaña Funciones
* {"tag": "student"}: la función tiene esta marca
* {"component": "mod_quiz"}: la función pertenece a este componente
* {"function": "core_course_get_courses"}: la función tiene este nombre
* {"not": parte}, {"all": [partes]}, {"any": [partes]}: combinan partes

En un nombre de componente o de función, un asterisco coincide con cualquier texto. Las claves type, tag, component y function también admiten una lista, que significa cualquiera de los valores: {"type": ["read", "safe"]} permite todas las funciones que no modifican el sitio.

Pida al agente de IA que escriba o cambie la regla: comprueba qué funciones permite la regla antes de guardarla.';
$string['relevancescore_help'] = 'La puntuación de relevancia indica lo adecuada que es una función de servicio web para el agente de IA, en una escala de 1 a 10.

**Las puntuaciones altas (7-10)** se dan a las funciones claramente útiles para un asistente de IA, como crear cursos, matricular usuarios, buscar contenidos u obtener calificaciones.

**Las puntuaciones intermedias (4-6)** son típicas de las operaciones destructivas o irreversibles (como borrar cursos o desmatricular usuarios), que son útiles pero conllevan más riesgo, así como de las funciones muy específicas con poca aplicabilidad.

**Las puntuaciones bajas (1-3)** se dan a las funciones diseñadas para la comunicación interna entre el navegador y el servidor, a las que no requieren autenticación, a las obsoletas o a las que duplican mejores alternativas.

**Una puntuación de 0** significa que la función aún no se ha evaluado. Es habitual en las funciones de extensiones de terceros.

La puntuación de relevancia se usó para fijar el valor inicial de si cada función está habilitada. Las puntuaciones iniciales de los componentes del núcleo de Moodle se generaron con IA y puede que necesiten una revisión manual.';
$string['settings'] = 'Configuración del agente de IA';
$string['viewtypes_alldisabled_warning'] = 'El agente de IA no está disponible para nadie porque todos los tipos de vista están deshabilitados en la <a href="{$a}">configuración</a>.';

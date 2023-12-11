<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'quizaccess_wifiresilience', language 'es_mx', version '4.3'.
 *
 * @package     quizaccess_wifiresilience
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'Respuesta cambiada';
$string['attempt'] = 'Intento';
$string['backtothequiz'] = 'Regresar al examen';
$string['changesmadereallygoaway'] = 'Sus respuestas no han sido guardadas en el servidor. ¿Está seguro de querer abandonar este intento?';
$string['countrealofflinetime'] = 'Restar el tiempo fuera-de-línea (si estuviera disponible)';
$string['createasnewattempt'] = 'Crear como un nuevo intento.';
$string['createasnewattempt_help'] = '***Precaución*** Crear un nuevo intento';
$string['createnewattempt'] = 'Crear nuevo intento';
$string['currentissue'] = 'Asunto actual';
$string['dangeryes'] = 'Si (<font color="red">!!Danger!!</font>)';
$string['dataprocessedsuccessfully'] = 'Datos procesados exitosamente ({$a}).';
$string['decryptingcomplete'] = 'Des-encriptación de archivo completada';
$string['decryptingfile'] = 'Des-encriptando archivo {$a}';
$string['delete'] = 'Eliminar';
$string['description'] = 'El examen está en modo <strong>Wifi Resiliente</strong>.';
$string['descriptionlink'] = 'Subir respuestas exportadas';
$string['download'] = 'Descargar';
$string['downloadedecryptedfile'] = 'Descargar Archivo des-encriptado';
$string['downloadfile'] = 'Descargar como un archivo';
$string['excludelist'] = 'Excluir archivos';
$string['excludelist_help'] = 'Enlace/archivo por línea. Excluir archivos/enlaces específicos de ser cacheados con el Trabajador del servicio. esto es útil cuando usted quiere que algunos archivos o enlaces sean en modo RedSolamente (que nunca sean cacheados).';
$string['extraroutes'] = 'Rutas extra';
$string['fetchandlog'] = 'Cacheo de archivos incrustados (anexos)';
$string['filearraystyle'] = '<br><h3>Estilo de Arreglo</h3>';
$string['fileencryptedinitvaluenobase64'] = 'El valor inicial de encriptación no está codificado base-64 apropiadamente.';
$string['fileencryptedkeynobase64'] = 'La clave AES encriptada no está codificado base-64 apropiadamente.';
$string['fileinitvaluenobase64'] = 'El valor inicial no está codificado base-64 apropiadamente.';
$string['filejsondecode'] = 'Decodificado Datos JSON: {$a}';
$string['filejsondecodeerror'] = 'Error JSON : {$a}';
$string['filekeynobase64'] = 'Clave AES no está codificada base-64 apropiadamente.';
$string['filenoattemptid'] = 'Los datos subidos no incluyen una ID del intento.';
$string['filenoattemptidupload'] = 'Este archivo parece que no tiene una ID del intento encriptado (attemptid). Usted ha seleccionado tomar ID del intento del parámetro JSON no encriptado. Por favor des-seleccione la opción e inténtelo de nuevo.';
$string['filenodecryptionkey'] = 'Se obtuvieron respuestas aparentemente codificadas, pero no hay clave para des-encriptación.';
$string['filenoresponses'] = 'El archivo al parecer no contiene respuestas.';
$string['filenoturlencoded'] = 'El Archivo de Datos NO está URL-ENCODED. Use datos como están.';
$string['filetype'] = 'Tipo';
$string['fileunabledecrypt'] = 'No se pudieron des-encriptar las respuestas: {$a}';
$string['fileunabledecryptkey'] = 'No se pudo des-encriptar la clave AES: {$a}';
$string['fileurlencoded'] = 'El archivo de datos está URL-ENCODED. Use datos URL-DECODED.';
$string['filewithkeyandiv'] = '<br><h3>Estilo Original (Con CLAVE y IV)</h3>"';
$string['filewithoutkeyandiv'] = '<br><h3>Estilo Original (Sin CLAVE o IV) - Bueno para usar en otras instancias Moodle o cuando las claves Pública y Privada están Dañadas.</h3>';
$string['filewrongquiz'] = 'Los datos subidos no pertenecen a este examen.';
$string['finishattemptsafterupload'] = '¿Enviar y terminar el intento contenido en el archivo de respuesta?';
$string['fromfile'] = 'Hora de envío en archivo subido';
$string['inspect'] = 'Inspeccionar archivos de respuesta';
$string['inspectingfile'] = 'Inspeccionando archivo {$a}';
$string['inspectionprocessedsuccessfully'] = 'Datos cargados exitosamente';
$string['lastsaved'] = 'Último guardado: {$a}';
$string['lastsavedtotheserver'] = 'Último guardado al servidor: {$a}';
$string['lastsavedtothiscomputer'] = 'Último guardado a esta computadora: {$a}';
$string['lastseen'] = 'Último visto';
$string['lastsync'] = 'Último sincronizado';
$string['livedevices'] = 'Dispositivos vivos';
$string['loadingstep1'] = 'Configurando {$a}';
$string['loadingstep10'] = 'Examen iniciando...';
$string['loadingstep2'] = 'Preparando estructura del examen...';
$string['loadingstep3'] = 'Preparando rutas estáticas y dinámicas de trabajador del servicio.';
$string['loadingstep4'] = 'Preparando base de datos del examen...';
$string['loadingstep5'] = 'Preparando preguntas del examen...';
$string['loadingstep6'] = 'Preparando navegación del examen...';
$string['loadingstep7'] = 'Encriptando datos del examen...';
$string['loadingstep8'] = 'Verificando estado de la red...';
$string['loadingstep9'] = 'Observando las solicitudes de red...';
$string['loadlocalresponses'] = 'Comprobar, descargar, guardar o eliminar respuestas almacenadas en <strong>esta</strong> computadora';
$string['localconfirmdeletelocal'] = '¿Está seguro de querer eliminar registro de Respuesta local: {$a}?';
$string['localconfirmdeletestatus'] = '¿Está seguro de querer eliminar registro de Estado: {$a}?';
$string['localnorecordsfound'] = 'No se encontraron registros locales';
$string['localresponsesfor'] = 'Respuestas almacenadas en esta máquina local para {$a}';
$string['localstorage'] = '<br>Almacenamiento Local :';
$string['localtabledelete'] = 'Eliminar';
$string['localtabledownload'] = 'Descargar';
$string['localtableheaderattempts'] = '<h3>indexedDB / WebSQL (Estado de Intentos)</h3>';
$string['localtableheaderencryptedattempts'] = '<h3>indexedDB / WebSQL (Intentos Encriptados)</h3>';
$string['localtableinfo'] = 'Resultados son SOLAMENTE para CLAVE: {$a->startwithkey} (Examen: <strong>{$a->name}</strong>)';
$string['localtablelastchangelocal'] = 'Último Cambiado Localmente';
$string['localtablelastsavedserver'] = 'Último Guardado en Servidor';
$string['localtablerecord'] = 'Registro';
$string['loggedinaswronguser'] = 'Usted ha ingresado con una cuenta diferente de la que fue utilizada para intentar el examen, Eso no funcionará. Elija Continuar para ingresar nuevamente como el usuario correcto.';
$string['logindialogueheader'] = 'Usted podría necesitar ingresar de nuevo al sitio';
$string['loginokagain'] = 'Su ingreso está OK ahora.';
$string['navdetails'] = 'Mostrar estado de dispositivo y servidor';
$string['now'] = 'Ahora';
$string['or'] = 'o';
$string['pluginname'] = 'Modo Examen Wifi Resiliente';
$string['precachefiles'] = 'Pre-cachear archivos';
$string['prechecks'] = 'Mostrar comprobaciones técnicas';
$string['privatekey'] = 'Clave privada de encriptación';
$string['processingcomplete'] = 'Procesamiento completado';
$string['processingfile'] = 'Procesando archivo {$a}';
$string['publickey'] = 'Clave pública de encriptación';
$string['publickey_desc'] = 'Esto debe corresponder con la clave privada. Usted puede generarla  desde la clave privada usando <code>openssl rsa -pubout -in rsa_1024_priv.pem -out rsa_1024_pub.pem</code> y después pegar los contenidos de  rsa_1024_pub.pem aquí.';
$string['quizfinishtime'] = 'Límite de tiempo del examen (tiempo máximo permitido del examen)';
$string['reference'] = 'Referencia';
$string['refreshserviceworker'] = 'Refrescar Trabajador del servicio';
$string['resetserviceworker'] = 'Refiniciar Trabajador del servicio';
$string['responsefiles'] = 'Archivos de respuesta';
$string['reviewthisattempt'] = 'Revisar este intento';
$string['rule1error'] = '1. <font color=red>[Wifiresilience-SW] Trabajador del Servicio no está soportado en este navegador. <span id="sw_kind"></span></font>';
$string['rule1fail'] = '1. <font color=red>[Wifiresilience-SW] Trabajador del Servicio falló el registro.. Error: {$a} <span id="sw_kind"></span></font>';
$string['rule1start'] = '1. <font color=grey>[Wifiresilience-SW] Wifiresilience-exams-sw.js está Registrándose..</font>';
$string['rule1statusactive'] = '(Estado: Activo)';
$string['rule1statusinstalling'] = '(Estado: Instalando)';
$string['rule1statuswaiting'] = '(Estado: Esperando)';
$string['rule1success'] = '1. <font color=green>[Wifiresilience-SW] Trabajador del Servicio registro exitoso. <span id="sw_kind"></span>';
$string['rule2error'] = '<br>2. <font color=red>[Wifiresilience-SW] IndexedDB no está soportado.</font>';
$string['rule2start'] = '<br>2. <font color=grey>[Wifiresilience-SW] IndexedDB soporte ed Desconocido.</font>';
$string['rule2success'] = '<br>2. <font color=green>[Wifiresilience-SW] IndexedDB es soportado.</font>';
$string['rule3start'] = '<br>3. <font color=grey>[Wifiresilience-SW] Persistencia del Almacenamiento es desconocida.</font>';
$string['rule3success'] = '<br>3. <font color=green>[Wifiresilience-SW] El almacenaje no será borrado excepto por acción explícita del usuario.</font>';
$string['rule4error'] = '<br>4. <font color=red>[Wifiresilience-SW] Almacenamiento del Navegador no puede ser calculado.</font>';
$string['rule4fail'] = '<br>4. <font color=red>[Wifiresilience-SW] Almacenamiento del Navegador (webkitTemporaryStorage)  no puede ser calculado.</font>';
$string['rule4start'] = '<br>4. <font color=grey>[Wifiresilience-SW] La Cuota de Almacenamiento actualmente disponible es Desconocida.</font>';
$string['rule4success'] = '<br>4. <font color=green>[Wifiresilience-SW] Almacenamiento del Navegador ya usa {$a->usedbytes} de {$a->grantedbytes}</font>';
$string['rule5error'] = '<br>5. <font color=red>[Wifiresilience-SW] Solicitud de Cuota de Almacenamiento Extra (1GB) ha Fallado.</font>';
$string['rule6error'] = '<br>6. <font color=red>[Wifiresilience-SW] CacheAPI no está soportada.</font>';
$string['rule6success'] = '<br>6. <font color=green>[Wifiresilience-SW] CacheAPI está soportada.</font>';
$string['rule7error'] = '<br>7. <font color=red>[Wifiresilience-SW] Sincronización en segundo plano no está soportada.</font>';
$string['rule7start'] = '<br>7. <font color=grey>[Wifiresilience-SW] Solicitando información acerca de Sincronización en segundo plano, estado: Desconocido.</font>';
$string['rule7success'] = '<br>7. <font color=green>[Wifiresilience-SW] Sincronización en segundo plano está soportada.</font>';
$string['rulebgsyncfail'] = 'Falló Sincronización en segundo plano.';
$string['rulebgsyncsuccess'] = 'Sincronización en segundo plano disparada exitosamente.';
$string['rulebgsyncsupported'] = 'Sincronización en segundo plano no está soportada.';
$string['ruleswnotregisteredreset'] = 'Trabajador del Servicio no está registrado (Podría tener errores, o no estar incluido en el entorno de esta página, o ya estar des-registrado), usted no puede reiniciarlo ahorita.';
$string['ruleswnotregisteredstop'] = 'Trabajador del Servicio no está registrado (Podría tener errores, o no estar incluido en el entorno de esta página, o ya estar des-registrado), usted no puede detenerlo ahorita.';
$string['ruleswnotregisteredupdate'] = 'Trabajador del Servicio no está registrado (Podría tener errores, o no estar incluido en el entorno de esta página, o ya estar des-registrado), usted no puede actualizarlo ahorita.';
$string['savefailed'] = 'Nota: De tiempo en tiempo usted debería de:';
$string['savetheresponses'] = 'Descargar copia de respuestas';
$string['savingdots'] = 'Guardando al servidor...';
$string['savingtryagaindots'] = 'Intentando nuevamente guardar al servidor ...';
$string['serviceworkermgmt'] = 'Gestión del Trabajador del Servicio';
$string['status'] = 'Estado';
$string['stopserviceworker'] = 'Detener Trabajador del Servicio';
$string['submitallandfinishtryagain'] = 'Enviar todo y terminar (intentar nuevamente)';
$string['submitfailed'] = 'Falló envío del examen';
$string['submitfailedmessage'] = 'Sus respuestas no se pudieron enviar. Usted puede intentar:';
$string['submitting'] = '<h3>Enviando... Por favor, espere..</h3>';
$string['syncedfiles'] = 'Sincronizar archivos de respuesta en segundo plano';
$string['syncserviceworker'] = 'Disparar Sincronización en segundo plano';
$string['takeattemptfromjson'] = 'Usar ID de intento sin encriptar';
$string['techerrors'] = 'Mostrar errores técnicos';
$string['techerrors_help'] = 'Esta característica es útil para comprender las razones técnicas subyacientes para la falla del envío del examen. Solamente muestra el error al fondo de la página de envío si hubiera alguno.';
$string['technicalchecks'] = 'Comprobaciones de almacenaje para navegador actual';
$string['technicalinspection'] = 'Inspección Técnica:<br>';
$string['testencryption'] = 'Probar encriptación de servidor y dispositivo';
$string['uploadfailed'] = 'Falló la subida';
$string['uploadfinishtime'] = 'Hora de Intento/Envío';
$string['uploadingresponsesfor'] = 'Subiendo respuestas para {$a}';
$string['uploadinspection'] = 'Inspeccionar respuestas';
$string['uploadinspectionfor'] = 'Inspeccionar respuestas para {$a}';
$string['uploadmoreresponses'] = 'Subir más respuestas';
$string['uploadresponses'] = 'Subir archivos de respuestas';
$string['uploadresponsesadmin'] = 'Los administradores pueden:';
$string['uploadresponsesfor'] = 'Subir archivo de respuestas para {$a}';
$string['usefinalsubmissiontime'] = 'Usar hora de envío final del archivo (si estuviera disponible)';
$string['watchxhr'] = 'Ver eventos en vivo';
$string['wifiresilience:adminmessages'] = 'Ver mensajes de administración';
$string['wifiresilience:browserchecks'] = 'Ver comprobaciones del navegador';
$string['wifiresilience:inspectresponses'] = 'Inspeccionar respuestas';
$string['wifiresilience:localresponses'] = 'Inspeccionar respuestas locales (almacenamiento local)';
$string['wifiresilience:uploadresponses'] = 'Subir archivos de respuestas';
$string['wifiresilience:viewlivedevices'] = 'Ver dispositivos en vivo';
$string['wifiresilience:viewtechchecks'] = 'Ver comprobaciones técnicas (aun y cuando esta opción esté deshabilitada vía configuraciones del examen)';
$string['wifiresilienceenabled'] = 'Modo Wifi Resiliente';
$string['wifiresilienceenabled_desc'] = 'Usted puede configurar si es que el modo Wifi Resiliente debería estar habilitado en forma predeterminada o no para nuevos exámenes.';
$string['wifitoken'] = 'Token de sincronización en segundo plano';

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
 * Strings for component 'factor_webauthn', language 'es_mx', version '4.3'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:revoke'] = 'Revocar autenticador';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Híbrido';
$string['authenticator:internal'] = 'Interno';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Nombre de clave de seguridad';
$string['error'] = 'Falló la autenticación';
$string['info'] = '<p>Usar una clave de seguridad</p>';
$string['logindesc'] = 'Elegir continuar para usar su token de autenticación o clave de seguridad.';
$string['loginoption'] = 'Usar token de autenticación';
$string['loginskip'] = 'Yo no tengo mi clave de seguridad';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Verificar que sea usted por token de autenticación';
$string['pluginname'] = 'Clave de Seguridad';
$string['privacy:metadata'] = 'El plugin del factor Clave de seguridad no almacena ningún dato personal.';
$string['register'] = 'Registrar autenticador';
$string['settings:authenticatortypes'] = 'Tipos de autenticador';
$string['settings:authenticatortypes_help'] = 'Alternar ciertos tipos de autenticadores';
$string['settings:userverification'] = 'Verificación del usuario';
$string['settings:userverification_help'] = 'Sirve para asegurarse de que la persona que se autentica es en realidad quien dice ser. La verificación del usuario puede tomar varias formas, como contraseña, PIN, huella digital, etc.';
$string['setupfactor'] = 'Configuración de autenticador';
$string['summarycondition'] = 'usando un autenticador soportado por WebAuthn';
$string['userverification:discouraged'] = 'Verificación del usuario no debería ser usada; por ejemplo, para minimizar interacción del usuario';
$string['userverification:preferred'] = 'Verificación del usuario es preferida,; la autenticación NO fallará si falta la verificación del usuario';
$string['userverification:required'] = 'Verificación del usuario es requerida (por ejemplo, por PIN). La autenticación falla si la clave no tiene verificación del usuario';

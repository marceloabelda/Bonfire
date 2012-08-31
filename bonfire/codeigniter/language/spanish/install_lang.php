<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
	Copyright (c) 2011 Lonnie Ezell

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.
*/

$lang['in_intro']					='<h2>Bienvenido</h2><p>Bienvenido al proceso de instalaci&oacute;n de Bonfire! Simplemente rellena los campos a continuaci&oacute;n, y antes de que te des cuenta estar&aacute;s creando aplicaciones web basadas en CodeIgniter 2.1 m&aacute;s r&aacute;pido que nunca.</p>';
$lang['in_not_writeable_heading']	= 'Archivos/Carpetas No Escribibles';

$lang['in_writeable_directories_message'] = 'Por favor aseg&uacute;rese de que los directorios siguientes tengan permisos de escritura y vuelva a intentarlo';
$lang['in_writeable_files_message']       = 'Por favor aseg&uacute;rese de de que los siguientes archivos son grabables y vuelva a intentarlo';

$lang['in_db_settings']				= 'Configuraci&oacute;n de la Base de Datos';
$lang['in_db_settings_note']		= '<p>Por favor complete la informaci&oacute;n de base de datos a continuaci&oacute;n.</p><p class="small">Estos ajustes se guardar&aacute;n en ambos, el archivo principal <b>config/database.php</b> y el entorno de desarrollo (ubicado en <b>config/development/database.php)</b>. </p>';
$lang['in_db_no_connect']           = 'El instalador no se pudo conectar al servidor MySQL o base de datos, aseg&uacute;rese de ingresar la informaci&oacute;n correcta.';
$lang['in_db_setup_error']          = 'Hubo un error al configurar su base de datos';
$lang['in_db_settings_error']       = 'Hubo un error al insertar la configuraci&oacute;n en la base de datos';
$lang['in_db_account_error']        = 'Hubo un error al crear su cuenta en la base de datos';
$lang['in_settings_save_error']     = 'Hubo un error al guardar la configuraci&oacute;n. Por favor, verifique que su base de datos y %s/archivos de configuración de la base de datos sean escribibles.';

$lang['in_environment']				= 'Entorno';
$lang['in_host']					= 'Host';
$lang['in_database']				= 'Base de datos';
$lang['in_prefix']					= 'Prefijo';
$lang['in_test_db']					= 'Base de datos de prueba';

$lang['in_account_heading']			= '<h2>Informaci&oacute;n necesaria</h2><p>Por favor proporcione la siguiente informaci&oacute;n.</p>';
$lang['in_site_title']				= 'Titulo del Sitio';
$lang['in_username']			    = 'Nombre de Usuario';
$lang['in_password']			    = 'Contrase&ntilde;a';
$lang['in_password_note']			= 'Longitud M&iacute;nima: 8 caracteres.';
$lang['in_password_again']			= 'Contrase&ntilde;a (otra vez)';
$lang['in_email']					= 'Su correo electr&oacute;nico';
$lang['in_email_note']				= 'Por favor, revise su correo electr&oacute;nico antes de continuar.';
$lang['in_install_button']			= 'Instale Bonfire';

$lang['in_curl_disabled']			= '<p class="error">cURL <strong>no est&aacute;</strong> no est&aacute; actualmente activo como una extensi&oacute;n PHP. Bonfire no podr&aacute; comprobar las actualizaciones hasta que est&eacute; habilitado.</p>';

$lang['in_success_notification']    = 'Listo para salir! Felices codigos!';
$lang['in_success_rebase_msg']		= 'Por favor ajuste la configuraci&oacute;n de .htaccess RewriteBase a: RewriteBase ';
$lang['in_success_msg']				= 'Por favor, elimine la carpeta install y vuelva a ';

$lang['no_migrations_found']			= 'No se encontraron archivos de migraci&oacute;n';
$lang['multiple_migrations_version']	= 'Multiples versiones de migraci&oacute;n: %d';
$lang['multiple_migrations_name']		= 'Multiples nombres de migraci&oacute;n: %s';
$lang['migration_class_doesnt_exist']	= 'No existe la clase Migration: %s';
$lang['wrong_migration_interface']		= 'Interfaz migraci&oacute;n incorrecta: %s';
$lang['invalid_migration_filename']		= 'Nombre de archivo de migraci&oacute;n incorrecto: %s - %s';

$lang['in_installed']					= 'Bonfire ya est&aacute; instalado. Por favor, borrar o cambiar el nombre de la carpeta install a';
$lang['in_rename_msg']					= 'Si lo desea, podemos simplemente cambiar el nombre por usted.';
$lang['continue']						= 'continuar';
$lang['click']							= 'Haga clic aqu&iacute;';

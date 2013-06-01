<?php

/**
* files_external - RapidShare backend
*
* @author Philipp Kapfer
* @copyright 2013 Philipp Kapfer philipp.kapfer@gmx.at
* 
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either 
* version 3 of the License, or any later version.
* 
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*  
* You should have received a copy of the GNU Affero General Public 
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
* 
*/

if (OC_App::isEnabled('files_external')) {
	OC::$CLASSPATH['OC\Files\Storage\RapidShare'] = 'apps2/files_external_rapidshare/lib/rapidshare.php';
	OC_App::loadApp('files_external');	// Ensure that the files_external app is already loaded to register backend
	OC_Mount_Config::registerBackend('OC\Files\Storage\RapidShare', array(
		'backend' => 'RapidShare',
		'configuration' => array(
			'user' => 'Username',
			'password' => '*Password',
			'root' => '&Root'),
	'has_dependencies' => true));
}
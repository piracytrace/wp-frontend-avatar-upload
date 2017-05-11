<?php
/**
 * Plugin Name: Frontend Avatar Upload
 * Plugin URI: ''
 * Description: Plugin to place a avatar and change avatar of a currently  logged in user in a wordpress frontend by using a shortcode
 * Version: 0.9.3
 * Author: Jose Alfonso del Callar
 * Author URI:
 * Text Domain:
 * Domain Path:
 *
 * Copyright 2016
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */
 
spl_autoload_register( 'frontend_avatar_upload_autoload' );

function frontend_avatar_upload_autoload($class) {

    $prefix = "FrontendAvatarUpload\\";
    $base_dir = __DIR__ . '/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

define('FRONTEND_AVATAR_UPLOAD_PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('FRONTEND_AVATAR_UPLOAD_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('FRONTEND_AVATAR_UPLOAD_PLUGIN_FILE',  'frontend_avatar_upload.php');
define('FRONTEND_AVATAR_UPLOAD_DEV_MODE', true);

new FrontendAvatarUpload\Frontend_Avatar_Upload;

<?php
/*
Plugin Name: Task Book
Plugin URI:  https://sajjadcodes.com/plugin
Description: Track stress and anxiety levels around tasks.
Version:     1.0.0
Author:      Sajad Hussain
Author URI:  https://Sajjadcodes.com
Text Domain: taskbook
Domain Path: /languages
License:     GPL3

Task Book is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Task Book is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Task Book. If not, see https://www.gnu.org/licenses/gpl.html.
*/

/**
 * Register Task post type.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/posttypes.php';
register_activation_hook( __FILE__, 'taskbook_rewrite_flush' );
 

/**
 * Register Task Logger role.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';


/**
 * Register task_status field.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/status.php';

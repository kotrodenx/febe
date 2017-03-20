<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: FEBE
Description: Shortcuts for admin backend
Version:     0.2
Author:      Giovanni Mennella
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function febe_setup_plugin () {
}

function febe_unset_plugin() {
}

register_activation_hook( __FILE__ , 'febe_setup_plugin');
register_deactivation_hook( __FILE__ , 'febe_unset_plugin');

function febe_start_plugin() {
	
	$files = glob( plugin_dir_path( __FILE__ ) .'include/*.{php}' , GLOB_BRACE);
	foreach ($files as $f) {
		require($f);
	}
	
}

febe_start_plugin();

?>

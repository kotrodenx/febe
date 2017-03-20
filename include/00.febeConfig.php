<?php
define('FEBE_PRINT_CSS', true);

define('FEBE_DEFAULTBTN',0);
define('FEBE_EDITCURRENTBTN',1);
define('FEBE_TOPANELBTN',2);
define('FEBE_LOGOUTBTN',3);
define('FEBE_ADDPOSSIBLEBTN',4);

define('FEBE_PANEL_URL','/wp-admin');


function febe_print_css() {
	echo '<style>';
	include(plugin_dir_path(__FILE__).'assets/febe.css');
	echo '</style>';
}

function febe_print_js() {
	echo '<script>';
	include(plugin_dir_path(__FILE__).'assets/febe.js');
	echo '</script>';
}

if(FEBE_PRINT_CSS) add_action( 'wp_head', 'febe_print_css' );
add_action( 'wp_footer', 'febe_print_js' );


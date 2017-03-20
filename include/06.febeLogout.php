<?php


class febeLogout extends baseButton {
	
	function __construct() {
		
		$this->icon = 'sign-out';
		$this->color = 'blue';
		$this->url = wp_logout_url('/');
		$this->label = 'Exit';
		
	}
	
}

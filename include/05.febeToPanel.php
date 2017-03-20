<?php


class febeToPanel extends baseButton {
	
	function __construct() {
		
		$this->icon = 'dashboard';
		$this->color = 'lightblue';
		$this->url = FEBE_PANEL_URL;
		$this->label = 'Panel';
		
	}
	
}

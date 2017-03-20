<?php


class febeEditCurrent extends baseButton {
	
	function __construct() {
		
		$this->icon = 'edit';
		$this->color = 'red';
		$this->url = get_edit_post_link( get_queried_object_id() );
		$this->label = 'Edit';
		
	}
	
}

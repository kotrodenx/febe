<?php

class febeAddRegisteredPost extends baseButton {
	
	function __construct($btn = array('icon' => 'edit','color'=>'lightgrey','url'=>'/wp-admin/post-new.php','label' => 'Post', 'classes' => '')) {
		
		$this->icon = $btn['icon'];
		$this->color = $btn['color'];
		$this->url = $btn['url'];
		$this->label = $btn['label'];
		$this->classes = $btn['classes'];
	}
	
	function make_up() {
		
		$labelString = (($this->label == '') ? '' : '<span class="admin-curtains"><span class="admin-actor">' . $this->label . '</span></span>' );
		
		$l = '<li>
				<a class="febeEye '.$this->classes.'" href="' . $this->url . '" style="background-color: ' . $this->color . '; width: 65px; height: 65px;">
					<span class="fa fa-2x fa-' . $this->icon . '">'.$labelString.'</span>
				</a>
			  </li>';
					
		return $l;
	}
}

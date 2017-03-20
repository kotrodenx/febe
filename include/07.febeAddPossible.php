<?php


class febeAddPossible extends baseButton {
	
	private $uid;
	private $post_types;
	
	function __construct() {
		
		$this->icon = 'plus';
		$this->color = 'white';
		$this->url = '#';
		$this->label = 'Add';
		$this->uid = get_current_user_id();
		$this->post_types = get_post_types(array('public'=>true));
		
	}
	
	function show($var) {
		var_dump($this->$var);
	}
	
	function getbtn($type) {
		$addRegisteredPost = array();
		switch($type) {
			case 'post' :
				$btn =  array(
					'url' => '/wp-admin/post-new.php',
					'icon' => 'pencil',
					'label' => 'Post',
					'color' => 'lightblue',
				);
				return new febeAddRegisteredPost($btn);
			case 'attachment' :
				$btn =  array(
					'url' => '/wp-admin/media-new.php',
					'icon' => 'paperclip',
					'label' => 'Media',
					'color' => 'lightblue',
				);
				return new febeAddRegisteredPost($btn);
			case 'product' :
				$btn =  array(
					'url' => '/wp-admin/post-new.php?post_type=product',
					'icon' => 'dropbox',
					'label' => 'Product',
					'color' => 'lightgreen',
				);
				return new febeAddRegisteredPost($btn);
			case 'ai1ec_event' :
				$btn =  array(
					'url' => '/wp-admin/post-new.php?post_type=ai1ec_event',
					'icon' => 'calendar',
					'label' => 'Event',
					'color' => 'lightsalmon',
				);
				return new febeAddRegisteredPost($btn);
			default :
				return false;
		}
	}
	
	function make_up() {
		
		
		$febeAdd = '';
		$counter = 0;
		$btns = array();
		
		$labelString = (($this->label == '') ? '' : '<span class="admin-curtains"><span class="admin-actor">' . $this->label . '</span></span>' );
		$a = '<a class="febeEye febeAddAnchor" href="' . $this->url . '" style="background-color: ' . $this->color . '">
					<span class="fa fa-2x fa-' . $this->icon . '">'.$labelString.'</span>
				</a>';
				
		$btns = $this->post_types;
		
		foreach ($btns as $btn) {
			$add = $this->getbtn($btn);
			if ($add != false ) : 
				$febeAdd .= $add->make_up();
				$counter = $counter + 95;
			endif;
		}
		$right = $counter + 100;
		
		$febeAdd = '<li class="febeAdd">'.$a.'<div class="febeAbsolute" style="right: -'.$right.'px;"><ul style="width: '.$counter.'px;">'.$febeAdd.'</ul></div></li>';
		
		return $febeAdd;
		
	}
	
}

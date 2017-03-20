<?php


/**
 * La classe dell'occhio di febe (i bottoni vah!) farla meglio domani
 */

class baseButton {
	
	protected $icon;
	protected $color;
	protected $url;
	protected $label;
	protected $classes;
	
	// mettere defaults decenti
	
	function __construct($icon = 'eye-slash', $color = 'transparent', $url = '#', $label = 'EYE', $classes = '') {
		
		$this->icon = $icon;
		$this->color = $color;
		$this->url = $url;
		$this->label = $label;
		$this->classes = $classes;
		
	}
	
	function make_up() {
		
		$labelString = (($this->label == '') ? '' : '<span class="admin-curtains"><span class="admin-actor">' . $this->label . '</span></span>' );
		
		$l = '<li>
				<a class="febeEye '.$this->classes.'" href="' . $this->url . '" style="background-color: ' . $this->color . '">
					<span class="fa fa-2x fa-' . $this->icon . '">'.$labelString.'</span>
				</a>
			  </li>';
					
		return $l;
	}
	
	function on_stage() {
		$li = $this->make_up();
		echo $li;
	}
}

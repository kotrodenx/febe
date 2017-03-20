<?php


class febeEye extends baseButton {
	
	function __construct() {
		
		$this->icon = 'eye';
		$this->color = 'lightgrey';
		$this->url = '#';
		$this->label = 'FEBE';
		
	}
	
	function make_up() {
		
		$labelString = (($this->label == '') ? '' : '<span class="admin-curtains"><span class="admin-actor">' . $this->label . '</span></span>' );
		
		$febeCloud = '';
		if ($this->label == 'FEBE') $febeCloud = '<div class="febeCloud">Ciao!<br/>Io sono FEBE!</div>';
		$l = '<li>
				<a class="febeEye" href="' . $this->url . '" style="background-color: ' . $this->color . '">
					<span class="fa fa-2x fa-' . $this->icon . '">'.$labelString.'</span>
				</a>
				'.$febeCloud.'
			  </li>';
					
		return $l;
	}
}

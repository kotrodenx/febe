<?php

class febe {
	
	private $anchor;					// tl = top-left [...] br = bottom-right
	private $orientation; 				// vertical, horizontal
	private $cssclass;					// vediamo se non serve vah.
	private $items;
	private $object_id;					// id dell'oggetto corrente
	private $user_id;					// id dell'utente corrente
	
	function __construct($args = array()) {
		
		$defaultArgs = array(
			'anchor' => 'br',
			'cssclass' => ' show',
			'orientation' => 'vertical',
			'items' => array(FEBE_DEFAULTBTN),
		);
		$options = array_merge($defaultArgs,$args);
		
		$this->anchor = $options['anchor'];
		$this->orientation = $options['orientation'];
		$this->cssclass = $options['cssclass'];
		$this->items = $options['items'];
		$this->object_id = get_queried_object_id();
		$this->user_id = get_current_user_id();
		
		
		// mi aspetto un array di interi nell'insieme delle costanti dei bottoni
		// nel caso il programmatore mette qualcosa che io non mi aspetto su items mi setta items col bottone di default
		if ((!is_array($this->items)) || ((sizeof($this->items) == 0))) $this->items = $defaultArgs['items'];
		
	}	
	
	function getbtn($type) {
		
		switch($type) {
			case FEBE_DEFAULTBTN :
				return new febeEye();
			case FEBE_EDITCURRENTBTN :
				return new febeEditCurrent();
			case FEBE_TOPANELBTN :
				return new febeToPanel();
			case FEBE_LOGOUTBTN :
				return new febeLogout();
			case FEBE_ADDPOSSIBLEBTN :
				return new febeAddPossible();
			default :
				return false;
		}
	}
	
	function make_up() {
		
		$febe = '';
		$a = '<a href="#" class="flipFlop"></a>';
		
		foreach ($this->items as $item) {
			$eye = $this->getbtn($item);
			if ($eye != false ) 
				$febe .= $eye->make_up();
		}
		
		$febe = '<div id="febe" class="'.$this->cssclass.'">'.$a.'<ul>'.$febe.'</ul></div>';
		
		return $febe;
	
	}	
	
	function on_stage() {
		
		echo $this->make_up();
	}
	
	function show_attribute() {
		
		return $this->object_id;
	}
}

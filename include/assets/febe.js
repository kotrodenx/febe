(function ($) {
	
	'use strict';
		
	$(document).ready ( function() { 
		
		
		// funzione per togglare FEBE
		
			var toggle = true;
			
			function febeToggle() { 
				if (toggle == false) { $('#febe').addClass("show"); toggle = true } 	// aggiunge la classe show
				else { $('#febe').removeClass("show"); toggle = false }					// rimuove la classe show
			}
			
			
		// handling degli input per febeToggle
		
			var f1Pressed = false;
			var shiftPressed = false;
			
			// alla pressione di un tasto
			$(document).keydown(function(e){
				
				switch(e.keyCode){
					// utente preme "F1"
					case 112: f1Pressed = true; 
					break;
					// utente preme "Maiuscolo/Shift"
					case 16: shiftPressed = true; 
					break;
				}
				
				// se premuti tutt'e due toggla
				if (shiftPressed && f1Pressed) { febeToggle() };
			});
			
			// al rilascio di un tasto
			$(document).keyup(function(e){
				
				switch(e.keyCode){
					// utente rilascia "F1"
					case 112: f1Pressed = false; 
					break;
					// utente rilascia "Maiuscolo/Shift"
					case 16: shiftPressed = false; 
					break;
				}
				
			});
			
			// click del quadratino flipflop
			$('.flipFlop').click( function(e) { e.preventDefault(); febeToggle(); } );
			
			
			
			
			
			// funzione per togglare febeAdd
		
			var toggleAdd = false;
			
			function febeAddToggle() { 
				if (toggleAdd == false) { 
					$('.febeAdd').addClass("febeOpen"); toggleAdd = true; 
					$('.febeAbsolute').css('right','0');
					$('.fa-plus').removeClass("fa-plus").addClass("fa-minus"); 
				} 	
				else { 
					$('.febeAdd').removeClass("febeOpen"); toggleAdd = false;
					$('.febeAbsolute').css('right', -($('.febeAbsolute').find('ul').width() + 100 ));
					$('.fa-minus').removeClass("fa-minus").addClass("fa-plus"); 
				}					
			}
			
			
			// click 
			$('.febeAddAnchor').click( function(e){ e.preventDefault(); febeAddToggle(); } );
			
			
			
			
			
			
			// altro
			
			/*
			var talks = false;
			$('.febeEye').hover( function(e) { 
				e.preventDefault(); 
				if (talks == false) { $(this).parent().addClass("talks"); talks = true }
				else { $(this).parent().removeClass("talks"); talks = false }
			} );
			
			
			
			
			
			
			var postsToggle = false;
			$('.posts-click').click( function(e) { 
				e.preventDefault(); 
				if (postsToggle == false) { $(this).parent().find('ul').addClass("show"); postsToggle = true }
				else { $(this).parent().find('ul').removeClass("show"); postsToggle = false }
			} );
			*/


		
		
		
		
		
		
		
		
		
	});
})(jQuery, this);

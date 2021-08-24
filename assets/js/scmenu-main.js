$(document).ready(function () {
	// Strict Mode
	"use strict";

	//Defines variables	
	var arrow_up = '<i class="fa fa-angle-up" aria-hidden="true"></i>';
	var arrow_down = '<i class="fa fa-angle-down" aria-hidden="true"></i>';
	var arrow_span = '<span class="sc-menu-parent">' + arrow_down + '</span>';
	var close_button = '<div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close</div>';
	
	//Insert all arrow down span element
	$('.nav-menu .sc-mega-menu').append(arrow_span);
	$('.nav-menu > .menu-item-has-children').append(arrow_span);
	$('.nav-menu > .menu-item-has-children .sub-menu > .menu-item-has-children').append(arrow_span);
	
	//Insert all close button element
	$('.nav-menu .menu-item-has-children .sub-menu').append(close_button);
	$('.nav-menu .sc-mega-menu .mega-menu').append(close_button);

	/*-----------------------------------------------------------------------------------*/
	/*	OPEN SUB MENU FUNCTION
	/*-----------------------------------------------------------------------------------*/
	$('span.sc-menu-parent').on('click', function(e){
		e.preventDefault();
		
		var t = $(this);
		var menu = t.siblings('ul');	
		var parent = t.parent('li');
		var siblings = parent.siblings('li');
		var arrow_target = 'span.sc-menu-parent';
		
		if (menu.hasClass('sub-menu')) { 
			var menu = t.siblings('ul.sub-menu'); 
		} else if(menu.hasClass('mega-menu')) {
			var menu = t.siblings('ul.mega-menu');
		}
		
		if (menu.hasClass('visible')) {
			setTimeout(function() { menu.removeClass('visible'); }, 10);	
			t.html(arrow_down);		
		} else {
			setTimeout(function() { menu.addClass('visible'); }, 10);
			t.html(arrow_up);
		}
			
		/*-------------------------------------*/
		/*	CLOSE MENUS
		/*-------------------------------------*/
			
		//Close sub menus
		parent.find('ul.visible').removeClass('visible');	
		
		//Close sub menus parents
		parent.siblings('li').children('ul').removeClass('visible');	
		
		//Close sub menus child parents 
		siblings.find('ul.visible').removeClass('visible');	
		
		/*-------------------------------------*/
		/*	INSERT ARROW DOWN
		/*-------------------------------------*/	
		
		//Insert arrow down in sub menus
		parent.children('ul').find(arrow_target).html(arrow_down);
		
		//Insert arrow down in sub menus parents
		siblings.children(arrow_target).html(arrow_down);
		
		//Insert arrow down in sub menus child parents 
		siblings.find(arrow_target).html(arrow_down);
	}); 
	
	/*-----------------------------------------------------------------------------------*/
	/*	CLOSE BUTTON
	/*-----------------------------------------------------------------------------------*/ 
	$('ul.nav-menu div.sub-menu-close').on('click', function(e){
	   e.preventDefault();
		  
	   var a = $(this).parent('ul');      
	   a.removeClass('visible');
	   a.siblings('span.sc-menu-parent').html(arrow_down);
	}); 
	
	/*-----------------------------------------------------------------------------------*/
	/*	EFFECTS ON MENU TOGGLE
	/*-----------------------------------------------------------------------------------*/ 
	$('a.sc-menu-toggle').on('click', function(e){
		e.preventDefault();	
		var menu_height = $('.sc-menu ul').height();
		
		if ($(this).hasClass('sc-menu-toggle-open')) {		
			$(this).removeClass('sc-menu-toggle-open').addClass('sc-menu-toggle-close');
			$('.sc-menu').animate({height:'0px'},{queue:false, duration:300}).addClass('sc-menu-close');	
		} else {			
			$(this).removeClass('sc-menu-toggle-close').addClass('sc-menu-toggle-open');
			$('.sc-menu').animate({height:menu_height},{queue:false, duration:300}).removeClass('sc-menu-close');
		}
	});	
	
	/*-----------------------------------------------------------------------------------*/
	/*	CLOSE MENUS ON RESIZE
	/*-----------------------------------------------------------------------------------*/ 
	var window_width = 0;
	 
	$(window).on('load', function () {	
		window_width = $(window).width();
		$('.sc-menu').addClass( "sc-menu-close" );
	});
	
	$(window).resize( function(){    
		if(window_width !== $(window).width()){		
			$('.visible').removeClass('visible');	
			$('.sc-menu-toggle').removeClass('sc-menu-toggle-open').addClass( "sc-menu-toggle-close" );	
			$('.sc-menu').css( "height", "0" ).addClass( "sc-menu-close" );		
		
			$('span.sc-menu-parent').html( arrow_down );		
			window_width = $(window).width();	
		}
	});	
	
});
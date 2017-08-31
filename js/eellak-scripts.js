/*
 * CAUTION! THIS FILE HAS NOT BEEN YET REGISTERED AND ENQUEUED IN functions.php!
 * 
 * CARE TO REGISTER THE SCRIPT AND REMOVE THIS TAG IF SOMETHING IS ACTUALLY
 * SCRIPTED HERE.
 */
;(function($){
	var ellak_show_responsive_menu_rocked=function(){
		//var menuType = '';

		var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
		var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

		$('#header').find('.header-wrap').after($mobileMenu);
		hasChildMenu.children('ul').hide();
		hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
		$('.btn-menu').removeClass('active');
//		$('.btn-submenu').remove();

	//	$(window).on('load resize', function() {
	//			var currMenuType = 'desktop';
	//
	//			if ( matchMedia( 'only screen and (max-width: 1024px)' ).matches ) {
	//					currMenuType = 'mobile';
	//			}
	//
	//			if ( currMenuType !== menuType ) {
	//					menuType = currMenuType;
	//
	//					if ( currMenuType === 'mobile' ) {
	//							
	//					} else {
	//							var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');
	//
	//							$desktopMenu.find('.submenu').removeAttr('style');
	//							$('#header').find('.menu-wrapper').append($desktopMenu);
	//					}
	//			}
	//	});
//		$('.btn-menu').unbind('click')
//		$('.btn-menu').on('click', function(event) {
//				$('#mainnav-mobi').slideToggle(300);
//				$(this).toggleClass('active');
//				event.stopPropagation()
//		});

		$(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
				$(this).toggleClass('active').next('ul').slideToggle(300);
				e.stopImmediatePropagation()
		});
	}

	$(function(){
		ellak_show_responsive_menu_rocked()
	})
})(jQuery)
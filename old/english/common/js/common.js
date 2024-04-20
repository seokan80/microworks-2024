jQuery(function($){
	//topmenu GNB
	$.fn.topmenu = function(options) {
		var opts = $.extend(options);
		var topmenu = $(this);
		var topmenuList = topmenu.find('>ul>li');
		var submenu = topmenu.find('.submenu');
		var submenuList = submenu.find('>ul>li');

		function showMenu() {
			t = $(this).parent('li');
			//if (!t.hasClass('m_active')) {
				topmenuList.removeClass('m_active');
				t.addClass('m_active');
				submenu.hide();
				t.find('.submenu').fadeIn("fast");
			  $('.sub_bg').fadeIn("fast");
			//}
		}

		function hideMenu() {
			topmenuList.removeClass('m_active');
			submenu.hide();
			$('.sub_bg').fadeOut("fast");
			activeMenu();
		}

		function activeMenu() {
			if(opts.d1) {
				t = topmenuList.eq(opts.d1-1); 
				t.addClass('m_active');
				//t.find('.submenu').show().css('top', 30).animate( { top: 32, opacity:1 }, 200 );
				if(opts.d2) {
					t.find('.submenu>ul>li').eq(opts.d2-1).addClass('on');
				}
			}
		}

		return this.each(function() {
			activeMenu();
			topmenuList.find('>a').mouseover(showMenu).focus(showMenu);
			topmenu.mouseleave(hideMenu);
		});
	}
	
});
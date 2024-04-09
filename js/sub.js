/* *******************************************************
 * filename : sub.js
 * description : 서브컨텐츠에만 사용되는 JS
 * date : 2019-09-03
******************************************************** */

jQuery(function($){
	/* *********************** 서브 비주얼 Active ************************ */
	setTimeout(function  () {
		$("#visual").addClass("active");
	});

	/* *********************** 서브 메뉴 FIXED ************************ */
	if ( $(".fixed-sub-menu").length > 0 ) {
		var $fixedSubMenu = $(".fixed-sub-menu");
	
		$(window).scroll(function  () {
			var scrollHeight = $(window).scrollTop();
			var topMenuStart =  $fixedSubMenu.offset().top;

			if ( scrollHeight > topMenuStart ) {
				$fixedSubMenu.addClass("fixed");
			}else {
				$fixedSubMenu.removeClass("fixed");
			}
		});
	}
	
});

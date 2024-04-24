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
	
		/* 화살표 변경 */
		$(".replacement-search-select").children("a").click(function(event){
			event.preventDefault();
			event.stopPropagation();
	
			$(this).siblings(".replacement-select-con").slideToggle(400);
			if ($(this).parent("div").hasClass("open-icon")) {
				$(this).parent("div").removeClass("open-icon");
			}else {
				$(this).parent("div").addClass("open-icon");
			}
			/* 게시판 카테고리 선택시 스크롤 이동 */
		var goDiv = $(this).offset().top;
			$("html, body").animate({scrollTop:goDiv -  ( $(window).height() / 2) },300,"swing",function  () {
				//console.log("test");
			});
			return false;
			
		});
		/* 하위 선택시 글씨 바뀌기 */
		$(".replacement-select-con li").children("a").click(function(event){
			var selectTxt = $(this).find("span").text();
			var selectList = $(".replacement-select-con");
			var showBox = $(".replacement-search-select");
			$(showBox).find("em").text(selectTxt);
			$(selectList).slideUp(400);
			if ($(showBox).hasClass("open-icon")) {
				$(showBox).removeClass("open-icon");
			}
		});
});

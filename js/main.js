/* *******************************************************
 * filename : main.js
 * description : 메인에만 사용되는 JS
 * date : 2017-05-30
******************************************************** */


jQuery(function($){

	/* *********************** 메인 비주얼 ************************ */
	// 임의의 영역을 만들어 스크롤바 크기 측정
	function getScrollBarWidth(){
		if($(document).height() > $(window).height()){
			$('body').append('<div id="fakescrollbar" style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"></div>');
			fakeScrollBar = $('#fakescrollbar');
			fakeScrollBar.append('<div style="height:100px;">&nbsp;</div>');
			var w1 = fakeScrollBar.find('div').innerWidth();
			fakeScrollBar.css('overflow-y', 'scroll');
			var w2 = $('#fakescrollbar').find('div').html('html is required to init new width.').innerWidth();
			fakeScrollBar.remove();
			return (w1-w2);
		}
		return 0;
	}

	// 메인 비주얼 높이값 설정
	if ( $("#mainVisual.full-height").length > 0 ) {
	
		scrollWidth = getScrollBarWidth();
		var win_width = $(window).outerWidth() + getScrollBarWidth();

		if ( $("#header").is(".fixed-header") ) {
			var visual_height = $(window).height() - $("#header").height(); /* header가 fixed가 아닌경우는 주석해제*/ 
		}else {
			var visual_height = $(window).height()	//- $("#header").height();
		}
		
		if ( win_width > 1220 ) {
			$("#mainVisual").height(visual_height);
		}else if ( win_width > 800 ){
			$("#mainVisual").css("height","960");
		}else {
			$("#mainVisual").css("height","668");
		}
		$(window).resize(function  () {
			var win_width = $(window).outerWidth() + getScrollBarWidth();

			if ( $("#header").is(".fixed-header") ) {
				var visual_height = $(window).height()	-  $("#header").height(); /* header가 fixed가 아닌경우는 주석해제*/ 
			}else {
				var visual_height = $(window).height()	//- $("#header").height();
			}

			if ( win_width > 1220 ) {
				$("#mainVisual").height(visual_height);
			}else if ( win_width > 800 ){
				$("#mainVisual").css("height","960");
			}else {
				$("#mainVisual").css("height","668");
			}
		});
	}
	
	// 메인 비주얼 zoom-out 효과
	// $(".main-visual-items").on('init', function() {
	// 	$(".visual-item").eq(0).addClass("active");
	// });
	// $(".main-visual-items").on('afterChange', function(event, slick, currentSlide){
	// 	$(".visual-item").removeClass("active");
	// 	$(this).find(".visual-item").eq(currentSlide).addClass("active");
	// });

	// 메인 비주얼 슬라이드
	
	// $('.main-visual-items').slick({
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	arrows: false,
	// 	fade: true,
	// 	dots:false,
	// 	autoplay: false,
	// 	speed:300,
	// 	infinite:true,
	// 	easing: 'easeInOutQuint',
	// 	pauseOnHover:false,
	// 	zIndex:1,
	// 	// draggable: false,
	// 	// asNavFor: '.side-menu'
	// });
	
	/* 기존 main-side */
	// $('.side-menu').slick({
		// verticalSwiping: true,
		// slidesToShow: 4,
		// slidesToScroll: 1,
		// arrows: false,
		// //fade: true,
		// dots:false,
		// autoplay: false,
		// speed:800,
		// infinite:true,
		// autoplaySpeed: 4000,
		// easing: 'easeInOutQuint',
		// pauseOnHover:false,
		// zIndex:90,
		// //asNavFor: '.main-visual-con',
		// responsive: [
		// 	{
		// 	  breakpoint: 1220,
		// 	  settings: {
		// 			vertical : false,
		// 			verticalSwiping: false,
		// 	  }
		// 	},
		// 	{
		// 	  breakpoint: 640,
		// 	  settings: {
		// 			vertical : false,
		// 			verticalSwiping: false,
		// 			slidesToShow: 1,
		// 			centerMode: true,
		// 			centerPadding: '27.25%',
		// 			//autoplay: true,
		// 			autoplaySpeed: 2000,
		// 	  }
		// 	}
		// ]
	// });
	// //메인 비주얼 사이드 컨텐츠
	// var win_width = $(window).outerWidth();
	// if ( $(window).width() > 800 )  {
	// 	visualSide();
	// }
	// $(window).resize(function  () {
	// 	var win_width = $(window).outerWidth();
	// 	if (win_width > 800) {
	// 		visualSide();
	// 	}else {
	// 		$(".main-visual-side .visual-side-item").off();
	// 	}
	// });

	$(window).load(function  () {
		// $(".main-visual .visual-item").eq(0).addClass("active-bg");
		$(".main-visual-items .visual-item").eq(0).addClass("active");
		visualSide();
	});

	function visualSide () {
		var $sideNav = $(".side-menu-item");
		var $visualBg = $(".main-visual-items .visual-item");
		$sideNav.hover(function() {
			// $visualBg.removeClass("active-item");
			// $visualBg.eq($(this).index()+1).addClass("active-item");
			// bg변경
			// $visualBg.removeClass("active-bg");
			// $visualBg.eq($(this).index()+1).addClass("active-bg");
			$visualBg.eq($(this).index()+1).addClass("active").siblings().removeClass("active");
		})

		$sideNav.on("mouseleave",visual_return);

		function visual_return () {
			$visualBg.removeClass("active");
			$visualBg.eq(0).addClass("active");
		}
	}

	// 메인 퀵메뉴 클래스 순환 이동
	function classMove () {
		// console.log(quickState);
		$(".quick-menu-wrap").each(function  (index) {   // ul클래스명
			var $itemList = $(this);
			var $item = $itemList.find("li");
			var itemLength = $item.length;
			var startNum = 0;
			var rollingSpeed = 2000;
			
			function visualTime(){
				if(startNum < ( itemLength - 1)){
					startNum++;
				}else{
					startNum = 0;
				}
				visualPlay();
			}
			function visualPlay(){
				$item.each(function(id){
					if(id == startNum){
						$(this).addClass("active"); // li에 클래스 붙이기
					}else{
						$(this).removeClass("active");
					}
				});
			};


			visualPlay();
			visual_timer = setInterval(visualTime,rollingSpeed);
		});
	}
	
	var quickState = false;
	if (win_width < 801)  {
		if ( !quickState ) {
			classMove();
			quickState = true;
		}
	}else {
		$('.quick-menu-wrap').off();
	}

	$(window).resize(function  () {
		var win_width = $(window).outerWidth();
		if (win_width < 800) {
			// clearInterval(visual_timer);
			if ( !quickState ) {
				classMove();
				quickState = true;
			}
		}else {
			$('.quick-menu-wrap').off();
		}
		return false;
	});
	
	
	//메인 비주얼 검색박스
	/* 화살표 변경 */
	$(".main-search-select").children("a").click(function(event){
		event.preventDefault();
		event.stopPropagation();

		$(this).siblings(".main-select-con").slideToggle(400);
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
	$(".main-select-con li").children("a").click(function(event){
		var selectTxt = $(this).find("span").text();
		var selectList = $(".main-select-con");
		var showBox = $(".main-search-select");
		$(showBox).find("em").text(selectTxt);
		$(selectList).slideUp(400);
		if ($(showBox).hasClass("open-icon")) {
			$(showBox).removeClass("open-icon");
		}
	});


	/* 문의폼 문의내용 텍스트 */
	$(".main-inquiry-con .main-textarea").on('focus', function() {
		$(".main-inquiry-con .main-textarea-txt").hide();
	});
	$(".main-inquiry-con .main-textarea").on('focusout', function() {
		if (!$(".main-textarea").val()) {
			$(".main-inquiry-con .main-textarea-txt").show();
		}
	});
	
	$('.main-partner-list').slick({
		slidesToShow: 7,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: true,
		speed:2000,
		infinite:true,
		autoplaySpeed: 1000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		zIndex:1,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="material-icons">&#xE314;</i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="material-icons">&#xE315;</i></button>',
		responsive: [
			{
			  breakpoint: 800,
			  settings: {
					slidesToShow: 3,
			  }
			}
		
		]


	});
	
	/***** 스크롤 애니메이션 공통js*******/
	setTimeout(function  () {
		$(".scroll-animate-first").addClass("scroll-active-animate");
	},50);

	$(window).scroll( function (){

		$(".scroll-animate").each(function  () {
			//var point_of_object = $(this).offset().top + $(this).outerHeight();
			//var point_of_window = $(window).scrollTop() + ( $(window).height() / 2 );
			var point_of_object = $(this).offset().top + $(this).outerHeight();
			if ( $(window).width() < 800 ) {
				var point_of_window = $(window).scrollTop() + ( $(window).height() / 5);
			}else {
				
			var point_of_window = $(window).scrollTop() + ( $(window).height() / 2);
			}
			
			if( point_of_window > point_of_object - ($(window).height()) ){
				$(this).addClass("scroll-active-animate");
			}

		
		});
	
	});

});

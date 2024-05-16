<!doctype html>
<html lang="zh">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N45FDBW');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135188412-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135188412-1');
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?=$site_head_title?><? if($page_info){ ?> - <?=$page_info?><? } ?><? if($sub_info){ ?> - <?=$sub_info?><? } ?></title>
<meta name="Title" content="<?=$site_title?>">
<meta name="Subject" content="<?=$site_subject?>">
<meta name="Author" content="<?=$site_author?>">
<meta name="Keywords" content="<?=$site_keywords?>">
<meta name="Description" content="<?=$site_description?>">
<meta name="Robots" content="<?=$site_robots?>">
<!--
<meta property="og:type" content="<?=$og_type?>">
<meta property="og:title" content="<?=$og_title?>">
<meta property="og:description" content="<?=$og_description?>">
<meta property="og:image" content="<?=$og_image?>">
<meta property="og:url" content="<?=$og_url?>">
-->

<meta property="og:type" content="website">
<meta property="og:title" content="Microworks Korea Co.,Ltd.">
<meta property="og:description" content="Semiconductor Total Solution Provider">
<meta property="og:image" content="http://www.microworks.co.kr/img/og_02.jpg">
<meta property="og:url" content="http://www.microworks.co.kr">

<meta name="twitter:card" content="<?=$sns_card?>">
<meta name="twitter:title" content="<?=$sns_title?>">
<meta name="twitter:description" content="<?=$sns_description?>">
<meta name="twitter:image" content="<?=$sns_image?>">
<meta name="twitter:domain" content="<?=$sns_domain?>">
<meta name="google-site-verification" content="<?=$google_verification?>">
<meta name="naver-site-verification" content="<?=$naver_verification?>">
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 모바일사이트, 반응형사이트 제작시 사용 -->
<meta name="format-detection" content="telephone=no"/><!-- ios 자동전화걸기 방지 -->
<link rel="canonical" href="<?=$site_host?>">
<link rel="stylesheet" href="<?=$site_host?>/css/reset.css">
<link rel="stylesheet" href="<?=$site_host?>/css/common.css">
<link rel="stylesheet" href="<?=$site_host?>/css/editor.css">
<link rel="stylesheet" href="<?=$site_host?>/css/layout.css">
<link rel="stylesheet" href="<?=$site_host?>/css/content.css">
<link rel="stylesheet" href="<?=$site_host?>/css/main.css" />
<link rel="stylesheet" href="<?=$site_host?>/css/layout_responsive.css">
<link rel="stylesheet" href="<?=$site_host?>/css/content_responsive.css">
<link rel="stylesheet" href="<?=$site_host?>/css/main_responsive.css" />
<link rel="stylesheet" href="<?=$site_host?>/css/board.css"> <!-- 게시판 제작시 사용 -->
<link rel="stylesheet" href="<?=$site_host?>/css/board_responsive.css"> <!-- 게시판(반응형, 모바일) 제작시 사용 -->
<link rel="stylesheet" href="<?=$site_url?>/css/language.css" />
<link rel="stylesheet" href="<?=$site_url?>/css/language_responsive.css" />
<!-- <link rel="stylesheet" href="<?=$site_host?>/css/member.css"> --><!-- 회원관련 폼 제작시 사용 -->
<!-- <link rel="stylesheet" href="<?=$site_host?>/css/member_responsive.css"> --><!-- 회원관련 폼(반응형, 모바일) 제작시 사용 -->
<link rel="stylesheet" href="<?=$site_host?>/css/new_2024/contents.css" /><!-- !NOTE : 2024 추가된 css파일 -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=$site_host?>/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
<?=$script_content?>
<!--[if lt IE 9]>
	<script src="<?=$site_host?>/js/vendor/html5shiv.js"></script>
	<script src="<?=$site_host?>/js/vendor/respond.min.js"></script>
	<link rel="stylesheet" href="<?=$site_host?>/css/ie8.css">
<![endif]-->

<script src="<?=$site_host?>/js/vendor/jquery.easing.1.3.js"></script>
<script src="<?=$site_host?>/js/common.js"></script>
<script src="<?=$site_host?>/js/layer_popup.js"></script>

<!-- 아이콘폰트 -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

<!-- 슬라이드 플러그인 -->
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/slick.css">
<script src="<?=$site_host?>/js/plugin/slick.js"></script>

<!-- 스크롤바 커스텀 -->
<link rel="stylesheet" href="<?=$site_host?>/css/plugin/jquery.mCustomScrollbar.css">
<script src="<?=$site_host?>/js/plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	(function($){
		$(window).on("load",function(){
			$(".custom-scrollbar-wrapper .scroll-object-box").mCustomScrollbar({
				axis:"x",
				theme:"dark"
			});
			
		});
	})(jQuery);
</script>

<!-- 인증서 확대 모달 -->
<link rel="stylesheet" href="<?=$site_host?>/css/plugin/magnific-popup.css">
<script src="<?=$site_host?>/js/plugin/jquery.magnific-popup.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: true,
		fixedContentPos: true,
		mainClass: 'mfp-with-zoom',
		removalDelay: 500, //delay removal by X to allow out-animation
		  callbacks: {
			beforeOpen: function() {
			  // just a hack that adds mfp-anim class to markup 
			   this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
			   this.st.mainClass = this.st.el.attr('data-effect');
			}
		  },
		closeOnContentClick: true,
		midClick: true, // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	});
	
});
</script>
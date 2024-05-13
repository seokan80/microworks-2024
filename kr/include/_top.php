<script>
	$(function  () {
		<? if ( $page_section == "company" ) { ?>	//  1번째  대메뉴 인덱스
			dep1 = 1
		<? }else if ( $page_section == "do" ) { ?>	//  2번째 대메뉴 인덱스
			dep1 = 2
		<? }else if ( $page_section == "product" ) { ?>	//   3번째  대메뉴 인덱스
			dep1 = 3
		<? }else if ( $page_section == "industrial" ) { ?> //  4번째  대메뉴 인덱스
			dep1 = 4	
		<? }else if ( $page_section == "contact" ) { ?> //  5번째  대메뉴 인덱스
			dep1 = 4	
		<? }else { ?>
			dep1 = 0	
		<? } ?>
		
		// dep1 = <?=$page_num?>,
		dep2 = <?=$sub_num?>;

		// sub2_num 변수가 있을때 ( 3차메뉴 )
		<? if( $sub2_num ){ ?>
				dep3 = <?=$sub2_num?>;
		<? } else { ?>
				dep3 = "";
		<? } ?>

	})
</script>
<script type="text/javascript" src="<?=$site_host?>/js/nav.js"></script>
<script type="text/javascript" src="<?=$site_host?>/js/sub.js"></script>
<script>
	$(document).ready(function  () {
		var subtit = $(".visual-tit").text();
		var subTitFront = subtit.trim().charAt(0);
		var subTitextra = subtit.trim().substring(1,subtit.length);
		$(".visual-tit").html("<span>"+subTitFront+"</span>"+subTitextra);
	});
</script>
</head>

<body>
<!--[if lt IE 7]>
<p class="cm-alert-ie">현재 웹브라우저에서는 사이트가 정상적으로 표시되지 않을 수 있습니다. <strong><a href="http://browsehappy.com/" target="_blank">여기를 클릭</a></strong>하여 웹브라우저를 업그레이드 하세요.</p>
<![endif]-->
<!-- accessibility -->
<div class="cm-accessibility">
	<a href="#container">본문바로가기</a>
</div>
<!-- //accessibility -->

<!-- code -->
<div id="wrap">
	<!-- header -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="container">
		<!-- visual -->
		<section id="visual" class="sub-visual-<?=$page_section?>">
			<div class="visual-img-con" style="background:#eee url(<?=$site_host?>/images/layout/sub_visual_<?=$page_section?>.jpg) no-repeat 50% 0%"></div>
			<div class="area visual-txt-con">
				<div class="table-cell-layout">
					<h2 class="visual-tit trans400">
						<?=$page_info?>
					</h2>
					<p class="visual-sub-txt">MICROWORKS KOREA</p>
				</div>
			</div>
		</section>
		<!-- //visual -->
		<!-- middleArea -->
		<div id="middleArea">
			<?if($page_section != "search" && $sub_section != "profile"){?>
			<!-- 서브메뉴1 -->
			<aside id="topMenu01" class=""><!--  서브메뉴가 fixed될때 fixed-sub-menu 추가 -->
				<div class="side-menu-inner">
					<div class="area">
						<ul class="snb sub-menu-<?=$page_section?> clearfix">
							<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
						</ul>
					</div>
				</div>
			</aside>
			<!-- // -->
			<!-- 모바일 서브메뉴 2 -->
			<aside id="topMenuM02" class="cm-top-menu clearfix">
				<div class="side-menu-inner clearfix">
					<!-- 2차메뉴 -->
					<div class="menu-location  location2">
						<a href="javascript:;" class="cur-location">
							<span><?=$sub_info?></span>
							<i class="material-icons arrow">&#xE313;</i>
						</a>
						<ul class="location-menu-con">
							<?  include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
						</ul>
					</div>
				</div>
			</aside>
			<!-- // -->
			<?}?>

			<!-- 상단정보 (센터정렬) -->
			<aside id="contentInfoCon" class="content-info-style01">
				<h3 class="content-tit"><?if($sub_info){?><?=$sub_info?><?}else{?><?=$page_info?><?}?></h3>
			</aside>
			
			
			<!-- content -->
			<section id="content" class="">
				

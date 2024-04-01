	
	<header id="header" class="">
		<div class="gnb-overlay-bg"></div>
		<div id="headerInnerWrap">
			<!-- ****************** 헤더상단 ********************** -->
			<div id="headerInner" class="clearfix">
				<h1 class="logo"><a href="<?=$site_url?>/" title="메인으로">
					<span class="logo-default"><img src="<?=$site_host?>/images/common/logo.png" alt="<?=$site_head_title?>" /></span>
					<span class="logo-fixed"><img src="<?=$site_host?>/images/common/logo_fixed.png" alt="<?=$site_head_title?>" /></span>
				</a></h1>
				<div class="header-util-box">
					<!-- 외국어선택 -->
					<div class="header-lang">
						<a href="javascript:;" class="lang-open-btn"><i class="material-icons">&#xe80b;</i><strong>ENGLISH</strong></a>
						<ul>
							<li class="item01"><a href="<?=$site_host?>/kr/">KOREAN</a></li>
							<li class="item02"><a href="<?=$site_host?>/cn/">CHINESE</a></li>
						</ul>
					</div>
					<!-- 사이트맵 버튼 ( 기본 라인 三 ) -->
					<button  onclick="javascript:layerLoad('<?=$site_url?>/service/sitemap.php'); return false;" class="sitemap-line-btn sitemap-open-btn" title="사이트맵 열기">
						<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span><!-- <span class="line line4"></span> -->
					</button>
					<!-- 사이트맵 버튼 2 ( 커스텀 버튼 ) -->
					<!-- <button  onclick="javascript:layerLoad('<?=$site_url?>/service/sitemap.php'); return false;" class="sitemap-custom-btn sitemap-open-btn" title="사이트맵 열기">
						<i class="material-icons">&#xE8DE;</i>
					</button> -->
				</div>
			</div>
			<!-- ****************** GNB ********************** -->
			<!-- GNB PC ( ### 메뉴 4개이하 ### ) -->
			<nav id="gnb" class="each-menu">
				<h2 class="blind">주메뉴</h2>
				<!-- 
					- 전체메뉴 : class="total-menu"
					- 각각메뉴 : class="each-menu" + <div id="gnbBg"></div> 삭제
				-->
				<!-- <div id="gnbBg"></div> -->
				<ul class="clearfix menu5 area">
					<li class="gnb1">
						<a href="<?=$site_url?>/company/summary.php">COMPANY</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb2">
						<a href="<?=$site_url?>/do/memory.php">WHAT WE DO</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_do.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb3">
						<a href="<?=$site_url?>/product/trend_list.php">PRODUCT SEARCH</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_product.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb4">
						<a href="<?=$site_url?>/industrial/transcend.php">INDUSTRIAL</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_industrial.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb5">
						<a href="<?=$site_url?>/company/notice.php">INFORMATION</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_contact.php"; ?>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- GNB Mobile -->
		<button class="nav-open-btn" title="네비게이션 열기">
			<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span>
		</button>
		<div class="gnb-overlay-bg-m"></div>
		<nav id="gnbM" class="gnb-style-basic">
			<!-- 
				기본스타일 : .gnb-style-basic
				Full 스타일 : .gnb-style-full
			-->
			<h2 class="blind">주메뉴</h2>
			<!-- 언어 선택 or 회원메뉴 사용안할시 삭제 -->
			<div class="header-util-menu-box">
				<!-- 언어 선택 리스트 -->
				<!-- <ul class="clearfix lang-select">
					<li class="cur"><a href="<?=$site_host?>/kr/">KR</a></li>
					<li><a href="<?=$site_host?>/en/">EN</a></li>
					<li><a href="<?=$site_host?>/jp/">JP</a></li>
					<li><a href="<?=$site_host?>/cn/">CH</a></li>
				</ul> -->
				<!-- // -->
				<!-- 회원메뉴 -->
				<!-- <ul class="clearfix member-menu-box">
					<li><a href="<?=$site_url?>/member/login.php"><i class="material-icons">&#xe7ff;</i><strong>로그인</strong></a></li>
					<li><a href="<?=$site_url?>/member/join_01.php"><i class="material-icons">&#xe7fe;</i><strong>회원가입</strong></a></li>
					<li style="display:none;"><a href="<?=$site_url?>/member/modify_01.php"><i class="material-icons">&#xe853;</i><strong>마이페이지</strong></a></li>
					<li style="display:none;"><a href="<?=$site_url?>/member/join_01.php"><i class="material-icons">&#xe890;</i><strong>로그아웃</strong></a></li>
				</ul> -->
			</div>
			<!-- // -->
			<div class="gnb-navigation-wrapper">
				<div class="gnb-navigation-inner">
					<ul id="navigation">
						<li>
							<a href="javascript:;">COMPANY</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</li>
						<li>
							<a href="javascript:;">WHAT WE DO</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_do.php"; ?>
							</ul>
						</li>
						<li>
							<a href="javascript:;">PRODUCT SEARCH</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_product.php"; ?>
							</ul>
						</li>
						<li>
							<a href="javascript:;">INDUSTRIAL</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_industrial.php"; ?>
							</ul>
						</li>
						<li>
							<a href="javascript:;">INFORMATION</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_contact.php"; ?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "./lib/config.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<!--[if lt IE 9]>
	<script src="<?=$site_host?>/js/ie8_popup.js"></script>
<![endif]-->

<script>
	$(function  () {
		dep1 = 0,
		dep2 = 0;
	})
</script>
<script type="text/javascript" src="<?=$site_host?>/js/nav.js"></script>
<script type="text/javascript" src="<?=$site_host?>/js/main.js"></script>
</head>

<body>
<!--[if lt IE 7]>
<p class="cm-alert-ie">현재 웹브라우저에서는 사이트가 정상적으로 표시되지 않을 수 있습니다. <strong><a href="http://browsehappy.com/" target="_blank">여기를 클릭</a></strong>하여 웹브라우저를 업그레이드 하세요.</p>
<![endif]-->
<!-- accessibility -->
<div class="cm-accessibility">
	<a href="#mainContainer">본문바로가기</a>
</div>
<!-- //accessibility -->

<!-- code -->
<div id="wrap">
	<!-- header -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="mainContainer">
		<!-- ****************** 메인비주얼 ********************** -->
		<section id="mainVisual" class="full-height">	<!-- 메인 비주얼 full 높이 해제 : full-height 클래스 빼주세요  -->
			<div class="main-visual-con">
				<div class="main-visual-item"><!-- 디폴트 이미지-->
					<div class="main-visual-pc-img" style="background:#fff url(/images/main/main_visual_01.jpg) no-repeat 50% 50%;"></div>
					<!-- <div class="main-visual-m-img"><img src="<?=$site_host?>/images/main/main_visual_01_m.jpg" alt="" /></div> -->	<!-- 모바일이미지 -->
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-inner area-box">
							<strong class="main-visual-txt1"><span>MICROWORKS</span> KOREA</strong>
							<p class="main-visual-txt2">Global Sourcing Distributor</p>
							<p class="main-visual-txt3">
								Microworks Korea Co., Ltd. is Professional global IC, Memory <br>parts distributor which established in 2007.
							</p>
							<div class="main-visual-video-btn"><a href="javascript:;" onclick="javascript:layerLoad('<?=$site_url?>/index_video_popup.php'); return false;" class=""><i class="material-icons">&#xe62e</i>Microworks Media</a></div>
						</div>
					</div>
				</div>
				<div class="main-visual-item">
					<div class="main-visual-pc-img" style="background:#fff url(/images/main/main_visual_02.jpg) no-repeat 50% 50%;"></div>
					<!-- <div class="main-visual-m-img"><img src="<?=$site_host?>/images/main/main_visual_01_m.jpg" alt="" /></div> -->	<!-- 모바일이미지 -->
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-inner area-box">
							<strong class="main-visual-txt1"><span>MICROWORKS</span> KOREA</strong>
							<p class="main-visual-txt2">Global Sourcing <br> Distributor</p>
							<p class="main-visual-txt3">
								Microworks Korea Co., Ltd. is Professional global IC, Memory <br>parts distributor which established in 2007.
							</p>
							<div class="main-visual-video-btn"><a href="javascript:;" onclick="javascript:layerLoad('<?=$site_url?>/index_video_popup.php'); return false;"  class=""><i class="material-icons">&#xe62e</i>Microworks Media</a></div>
						</div>
					</div>
				</div>
				<div class="main-visual-item">
					<div class="main-visual-pc-img" style="background:#fff url(/images/main/main_visual_03.jpg) no-repeat 50% 50%;"></div>
					<!-- <div class="main-visual-m-img"><img src="<?=$site_host?>/images/main/main_visual_02_m.jpg" alt="" /></div>	 --><!-- 모바일이미지 -->
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-inner area-box">
							<strong class="main-visual-txt1"><span>MICROWORKS</span> KOREA</strong>
							<p class="main-visual-txt2">Global Sourcing <br> Distributor</p>
							<p class="main-visual-txt3">
								Microworks Korea Co., Ltd. is Professional global IC, Memory <br>parts distributor which established in 2007.
							</p>
							<div class="main-visual-video-btn"><a href="javascript:;"  onclick="javascript:layerLoad('<?=$site_url?>/index_video_popup.php'); return false;" class=""><i class="material-icons">&#xe62e</i>Microworks Media</a></div>
						</div>
					</div>
				</div>
				<div class="main-visual-item">
					<div class="main-visual-pc-img" style="background:#fff url(/images/main/main_visual_04.jpg) no-repeat 50% 50%;"></div>
					<!-- <div class="main-visual-m-img"><img src="<?=$site_host?>/images/main/main_visual_03_m.jpg" alt="" /></div> -->	<!-- 모바일이미지 -->
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-inner area-box">
							<strong class="main-visual-txt1"><span>MICROWORKS</span> KOREA</strong>
							<p class="main-visual-txt2">Global Sourcing <br> Distributor</p>
							<p class="main-visual-txt3">
								Microworks Korea Co., Ltd. is Professional global IC, Memory <br>parts distributor which established in 2007.
							</p>
							<div class="main-visual-video-btn"><a href="" class=""><i class="material-icons">&#xe62e</i>Microworks Media</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-visual-side-wrap">
				<div class="main-visual-side">
					<div class="visual-side-item item01" data-slide="1">
						<a href="<?=$site_url?>/do/memory.php">
							<div class="inner">
								<div class="side-item-bg"><img src="<?=$site_host?>/images/main/main_visual_side_01.jpg" alt=""></div>
								<p class="side-item-txt"><span><em>Memory</em></span></p>
							</div>
						</a>
					</div>
					<div class="visual-side-item item02" data-slide="2">
						<a href="<?=$site_url?>/do/disty.php">
							<div class="inner">
								<div class="side-item-bg"><img src="<?=$site_host?>/images/main/main_visual_side_02.jpg" alt=""></div>
								<p class="side-item-txt"><span><em>Distributor</em></span></p>
							</div>
						</a>
					</div>
					<div class="visual-side-item item03" data-slide="3">
						<a href="<?=$site_url?>/do/sourcing.php">
							<div class="inner">
								<div class="side-item-bg"><img src="<?=$site_host?>/images/main/main_visual_side_03.jpg" alt=""></div>
								<p class="side-item-txt"><span><em>Sourcing</em></span></p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="main-search-wrap">
				<div class="main-search-box">
					<div class="main-search-select">
						<a href="javascript:;" class="cur-select" data="move-id">
							<span><em>선택해주세요</em></span>
						</a>
						<ul class="main-select-con">
							<li><a href="javascript:;"><span>Memory Trend</span></a></li>
							<li><a href="javascript:;"><span>Stock List</span></a></li>
							<li><a href="javascript:;"><span>OEM Excess</span></a></li>
						</ul>
					</div>
					<input placeholder="검색어를 입력해주세요" type="search" name="" class="search-word">
					<button class="main-search-btn" title="검색"><img src="<?=$site_host?>/images/icon/stock_list_search_icon.png" alt=""></button>
				</div>
			</div>
		</section>
		<!-- ****************** 메인컨텐츠 ********************** -->
		<section id="mainContent">
			<!-- ****************** 메인컨텐츠 1 (어바웃&공지사항) ********************** -->
			<article id="mainAbout" class="scroll-animate">
				<div class="area02">
					<div class="inner clearfix">
						<div class="about-con">
							<div class="tit-box fade-in-down fade-in-06">
								<p class="tit-sub">About Us</p>
								<h3 class="tit"><strong>MICROWORKS<br>KOREA</strong></h3>
							</div>
							<p class="tit-txt fade-in-down fade-in-08">
								Microworks Korea Co., Ltd. is <br>
								Professional global IC, Memoryparts distributor<br>
								which established in 2007.
							</p>
							<a href="<?=$site_url?>/company/summary.php" class="detail-btn fade-in-down fade-in-10"><span>Detail View</span></a>
						</div>
						<div class="notice-con scale-large">
							<div class="notice-con-inner">
								<h4 class="notice-tit">Notice</h4>
								<ul>
									<li>
										<a href="">
											<div class="notice-item">
												<div class="item-inner"> 
													<!-- new게시물에 클래스 new-notice 붙여주세요~! -->
													<p class="notice-subject new-notice">Microworks Korea Stock List (Update 2019-05) Microworks Korea Stock List (Update 2019-05)</p>
													<span class="notice-date">19.05.29</span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="">
											<div class="notice-item">
												<div class="item-inner">
													<p class="notice-subject new-notice">Microworks Korea Stock List (Update 2019-05)</p>
													<span class="notice-date">19.05.29</span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="">
											<div class="notice-item">
												<div class="item-inner">
													<p class="notice-subject ">Microworks Korea Stock List (Update 2019-05)</p>
													<span class="notice-date">19.05.29</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 2 (퀵메뉴) ********************** -->
			<article id="mainQuickMenu"  class="scroll-animate">
				<div class="area">
					<ul class="quick-menu-wrap fade-in-down fade-in-03 clearfix">
						<li class="quick-menu-con quick-menu01" onClick="location.href='<?=$site_url?>/do/control.php'">
							<div class="quick-menu-inner">
								<dl class="clearfix">
									<dt>
										<div class="icon"><img src="<?=$site_host?>/images/main/main_quick_menu_icon_01.png" alt=""></div>
										<div class="on-icon"><img src="<?=$site_host?>/images/main/main_quick_menu_icon_on_01.png" alt=""></div>
									</dt>
									<dd>
										<p class="tit"><b>Q</b>uality Control</p>
										<p class="txt">
											Microworks Korea<br>
											Quality Control All components
										</p>
										<a href="<?=$site_url?>/do/control.php" class="more-btn"><span>more +</span></a>
									</dd>
								</dl>
							</div>
						</li>
						<li class="quick-menu-con quick-menu02" onClick="location.href='<?=$site_url?>/do/program.php'">
							<div class="quick-menu-inner">
								<dl class="clearfix">
									<dt>
										<div class="icon"><img src="<?=$site_host?>/images/main/main_quick_menu_icon_02.png" alt=""></div>
										<div class="on-icon"><img src="<?=$site_host?>/images/main/main_quick_menu_icon_on_02.png" alt=""></div>
									</dt>
									<dd>
										<p class="tit"><b>V</b>erification Program</p>
										<p class="txt">
											Microworks Korea<br>
											Quality Control All components
										</p>
										<a href="<?=$site_url?>/do/program.php" class="more-btn"><span>more +</span></a>
									</dd>
								</dl>
							</div>
						</li>
						<li class="quick-menu-con quick-menu03" onClick="location.href='<?=$site_url?>/contact/contact.php'">
							<div class="quick-menu-inner">
								<dl class="clearfix">
									<dt>
										<div class="icon"><img src="<?=$site_host?>/images/main/main_quick_menu_icon_03.png" alt=""></div>
										<div class="on-icon"><img src="<?=$site_host?>/images/main/main_quick_menu_icon_on_03.png" alt=""></div>
									</dt>
									<dd>
										<p class="tit"><b>C</b>ontact Us</p>
										<p class="txt">
											Microworks Korea<br>
											Quality Control All components
										</p>
										<a href="<?=$site_url?>/contact/contact.php" class="more-btn"><span>more +</span></a>
									</dd>
								</dl>
							</div>
						</li>
					</ul>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 3 ( 글로벌네트워크&환율 ) ********************** -->
			<article id="mainGlobalCon"  class="scroll-animate">
				<div class="area02">
					<div class="global-con clearfix">
						<div class="network-con fade-in-down fade-in-03">
							<p class="global-tit"><b>글로벌</b>네트워크<span>Global Network</span></p>
							<div class="global-map-con">
								<div class="map-pc-img"><img src="<?=$site_host?>/images/main/main_global_map_pc.jpg" alt="세계지도" /></div>
								<div class="global-nation-box">
									<!-- 기준은 left :50%; top:0; 이며, margin-left값과 top으로 위치 조정해주셔야 합니다. -->
									<div class="nation-circle" title="korea"><span></span><span></span><span></span><span></span></div>
								</div>
							</div>
							<div class="global-map-con-m">
								<img src="<?=$site_host?>/images/content/global_map_m.png" alt="세계지도" />
							</div>
						</div>
						<div class="exchange-con fade-in-down fade-in-08">
							<p class="global-tit"><b>환율</b><span>Exchange Rate</span></p>
							<table class="main-exchange-tbl">
								<colgroup>
									<col width="30%">
									<col width="23.33%">
									<col width="23.33%">
									<col width="23.33%">
								</colgroup>
								<thead>
									<tr>
										<th>환율정보</th>
										<th>매매기준율</th>
										<th>전일대비</th>
										<th>등락률</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th><p><span class="plag-icon"><img src="<?=$site_host?>/images/main/main_exchange_usd_icon.jpg" alt=""></span>미국 (USD)</p></th>
										<td>1,186.00</td>
										<td><p class="net-change"><span class="up-icon"></span>8.00</p></td>
										<td><p class="up-down"><span class="up-icon"></span>+ 0.68%</p></td>
									</tr>
									<tr class="blue-row">
										<th><p><span class="plag-icon"><img src="<?=$site_host?>/images/main/main_exchange_jpy_icon.jpg" alt=""></span>일본 (JPY)</p></th>
										<td>1,081.52</td>
										<td><p class="net-change"><span class="up-icon"></span>8.42</p></td>
										<td><p class="up-down"><span class="up-icon"></span>+ 0.78%</p></td>
									</tr>
									<tr>
										<th><p><span class="plag-icon"><img src="<?=$site_host?>/images/main/main_exchange_eur_icon.jpg" alt=""></span>유럽연합 (EUR)</p></th>
										<td>1,332.17</td>
										<td><p class="net-change"><span class="up-icon"></span>8.92</p></td>
										<td><p class="up-down"><span class="up-icon"></span>+ 0.68%</p></td>
									</tr>
									<tr class="blue-row">
										<th><p><span class="plag-icon"><img src="<?=$site_host?>/images/main/main_exchange_cny_icon.jpg" alt=""></span>중국 (CNY)</p></th>
										<td>172.00</td>
										<td><p class="net-change"><span class="up-icon"></span>8.21</p></td>
										<td><p class="up-down"><span class="down-icon"></span>- 0.12%</p></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 4 ( 문의폼 ) ********************** -->
			<article id="mainInquiryCon" class="scroll-animate">
				<div class="area02">
					<form action="">
						<div class="main-inquiry-con clearfix fade-in-down fade-in-03">
							<div class="left-con">
								<p class="inquiry-tit">문의</p>
								<ul class="main-inquiry-list">
									<li>
										<p class="inquiry-info clearfix">
											<span class="info-tit"><i class="material-icons">&#xe8a6</i>이름</span>
											<em><input type="text" placeholder="이름을 입력해주세요."></em>
										</p>
									</li>
									<li>
										<p class="inquiry-info clearfix">
											<span class="info-tit"><i class="material-icons">&#xe0e1</i>이메일</span>
											<em><input type="text" placeholder="ex)admin@microworks.com"></em>
										</p>
									</li>
									<li>
										<p class="inquiry-info clearfix">
											<span class="info-tit"><i class="material-icons">&#xe551</i>연락처</span>
											<em><input type="text" placeholder="ex)010-1234-5678"></em>
										</p>
									</li>
									<li>
										<p class="inquiry-info clearfix">
											<span class="info-tit"><i class="material-icons">&#xe8f8</i>회사명</span>
											<em><input type="text" placeholder="회사명을 입력해주세요."></em>
										</p>
									</li>
								</ul>
							</div>
							<div class="right-con">
								<div class="agreement-tit-box">
									<input type="checkbox" id="ok"><label for="ok"><span class="agreement-tit"><i class="material-icons">&#xe876</i>개인정보처리방침에 동의합니다.</span></label>
									<a href="javascript:;" onclick="javascript:layerLoad('<?=$site_url?>/service/privacy.php'); return false;" class="agreement-link"><span>개인정보처리방침 보기</span></a>
								</div>
								<div class="text-area">
									<p class="main-textarea-txt"><i class="material-icons">&#xe0b7</i>문의내용 <span>(100자 이내로 입력해주세요.)</span></p>
									<textarea name="" class="main-textarea"></textarea>
								</div>
								<a href="" class="main-form-btn"><span>작성완료</span></a>
							</div>
						</div>
					</form>
				</div>
			</article>
			<article id="mainPartnerCon">
				<div class="area02">
					<p class="partner-tit">협력업체</p>
					<ul class="main-partner-list">
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_01.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_02.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_03.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_04.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_05.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_06.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_07.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_08.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_09.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_10.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_11.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_12.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_13.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_14.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_15.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_16.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_17.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_18.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_19.jpg" alt=""></span></div></li>
						<li><div class="partner-logo"><span><img src="<?=$site_host?>/images/main/main_partner_logo_20.jpg" alt=""></span></div></li>
					</ul>
				</div>
			</article>
		</section>

	</div>
	<!-- //container -->
	<!-- footer -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/footer.php"; ?>
	<!-- //footer -->
</div>
<!-- //code -->
</body>
</html>

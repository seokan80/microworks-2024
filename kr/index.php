<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "./lib/config.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";
$notice_rs = $db->select("cs_bbs_data","where code='notice' and lang='$lang' and ((period_yn = 'Y' and period_start_date <= curdate() and period_end_date >= curdate()) OR period_yn = 'N') order by ref desc, idx desc limit 3");
?>
<? if($tools->device()=="mobile"){ ?>

<? include "../in_popup_m.php"; ?>

<? } else { ?>

<? include "../in_popup.php"; ?>

<? } ?>
<!--[if lt IE 9]>
	<script src="<?=$site_host?>/js/ie8_popup.js"></script>
<![endif]-->
<!-- <iframe src="/test.php" name="h" style="display:none;"></iframe> -->
<!-- #202405 메인 추가 -->
<!-- 2024-04 추가 -->
<link href="<?=$site_host?>/css/new_2024/contents.css" rel="stylesheet" type="text/css" />

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
			<!-- 메인 비주얼 full 높이 해제 : full-height 클래스 빼주세요  -->
			<!-- !NOTE S : 2024-04 추가 -->
			<section class="main-visual full-height">
				<div class="main-visual-items">
					<div class="visual-item">
						<div class="item-bg" style="background-image: url('/images/main/main_visual_01.jpg')"></div>
						<div class="text-wrap">
							<img src="/images/icon/main_visual_icon.png" alt="" class="deco-icon">
							<p class="sub-title"><span class="text-primary">MICROWORKS</span> KOREA CO.,LTD.</p>
							<h3>SEMICONDUCTOR TOTAL SOLUTION PROVIDER</h3>
							<p class="desc">마이크로웍스 코리아(주)는 2007년 설립한,<br class="mo-only" /> 반도체 개발,제조,유통의 종합적인 솔루션을 제공하는 기업입니다.</p>
							<span class="line"></span>
						</div>
					</div>
					<div class="visual-item">
						<div class="item-bg" style="background-image: url('/images/main/main_visual_02.jpg')"></div>
						<div class="text-wrap">
							<img src="/images/icon/main_visual_icon.png" alt="" class="deco-icon">
							<p class="sub-title"><span class="text-primary">MICROWORKS</span> KOREA CO.,LTD.</p>
							<h3>SEMICONDUCTOR TOTAL SOLUTION PROVIDER</h3>
							<p class="desc">마이크로웍스 코리아(주)는 2007년 설립한,<br class="mo-only" /> 반도체 개발,제조,유통의 종합적인 솔루션을 제공하는 기업입니다.</p>
							<span class="line"></span>
						</div>
					</div>
					<div class="visual-item">
						<div class="item-bg" style="background-image: url('/images/main/main_visual_03.jpg')"></div>
						<div class="text-wrap">
							<img src="/images/icon/main_visual_icon.png" alt="" class="deco-icon">
							<p class="sub-title"><span class="text-primary">MICROWORKS</span> KOREA CO.,LTD.</p>
							<h3>SEMICONDUCTOR TOTAL SOLUTION PROVIDER</h3>
							<p class="desc">마이크로웍스 코리아(주)는 2007년 설립한,<br class="mo-only" /> 반도체 개발,제조,유통의 종합적인 솔루션을 제공하는 기업입니다.</p>
							<span class="line"></span>
						</div>
					</div>
					<div class="visual-item">
						<div class="item-bg" style="background-image: url('/images/main/main_visual_04.jpg')"></div>
						<div class="text-wrap">
							<img src="/images/icon/main_visual_icon.png" alt="" class="deco-icon">
							<p class="sub-title"><span class="text-primary">MICROWORKS</span> KOREA CO.,LTD.</p>
							<h3>SEMICONDUCTOR TOTAL SOLUTION PROVIDER</h3>
							<p class="desc">마이크로웍스 코리아(주)는 2007년 설립한,<br class="mo-only" /> 반도체 개발,제조,유통의 종합적인 솔루션을 제공하는 기업입니다.</p>
							<span class="line"></span>
						</div>
					</div>
					<div class="visual-item">
						<div class="item-bg" style="background-image: url('/images/main/main_visual_05.jpg')"></div>
						<div class="text-wrap">
							<img src="/images/icon/main_visual_icon.png" alt="" class="deco-icon">
							<p class="sub-title"><span class="text-primary">MICROWORKS</span> KOREA CO.,LTD.</p>
							<h3>SEMICONDUCTOR TOTAL SOLUTION PROVIDER</h3>
							<p class="desc">마이크로웍스 코리아(주)는 2007년 설립한,<br class="mo-only" /> 반도체 개발,제조,유통의 종합적인 솔루션을 제공하는 기업입니다.</p>
							<span class="line"></span>
						</div>
					</div>
				</div>
				<div class="side-menu">
					<a href="/product/trend_list.php" class="side-menu-item">
						<div class="item-bg"><img src="/images/main/main_visual_side_01.png" alt=""></div>
						<p>MEMORY BUSINESS</p>
					</a>
					<a href="/do/line.php" class="side-menu-item">
						<div class="item-bg"><img src="/images/main/main_visual_side_02.png" alt=""></div>
						<p>대치품 검색</p>
					</a>
					<a href="http://www.microworks-esc.com" target="_blank" class="side-menu-item">
						<div class="item-bg"><img src="/images/main/main_visual_side_03.png" alt=""></div>
						<p>스탁재고 검색</p>
					</a>
					<a href="#" class="side-menu-item">
						<div class="item-bg"><img src="/images/main/main_visual_side_04.png" alt=""></div>
						<p>반도체 분석 문의</p>
					</a>
				</div>
				<form name="search_form" id="search_form" action="" method="get">
					<input type="hidden" name="search_url" value="">
					<div class="main-search-wrap">
						<div class="main-search-box">
							<div class="main-search-select">
								<a href="javascript:search_sel(0);" class="cur-select">
									<span><em>전체</em></span>
								</a>
								<ul class="main-select-con">
                                    <li><a href="javascript:search_sel(0);"><span>전체</span></a></li> <!-- #202405 메인 추가 -->
									<li><a href="javascript:search_sel(1);"><span>Memory Trend</span></a></li>
									<li><a href="javascript:search_sel(2);"><span>Stock List</span></a></li>
									<li><a href="javascript:search_sel(3);"><span>OEM Excess</span></a></li>
								</ul>
							</div>
							<input placeholder="검색어를 입력해주세요" type="text" name="search_order" class="search-word"
								onKeypress="if(event.keyCode ==13){search_send();return false;}">
							<button type="button" class="main-search-btn" title="검색" onclick="search_send()">
								<img src="/images/icon/stock_list_search_icon.png" alt="">
							</button>
						</div>
					</div>
				</form>
			</section>
			<!-- ****************** 메인컨텐츠 ********************** -->
			<section id="mainContent">
				<!-- ****************** 전체 검색 결과 ********************** -->
				<!-- !NOTE S : 2024-04 추가 -->
                <!-- #202405 메인 추가 -->
                <!-- ****************** 전체 검색 결과 ********************** -->
                <!-- S : 2024-04 추가 -->
                <article id="totalSearchResults" class="total-results-wrap">
                    <? include $_SERVER["DOCUMENT_ROOT"]."/index/include_totalSearchResults.php"; ?>
                </article>
				<!-- !NOTE S : 2024-04 추가 -->
			    <!-- !NOTE E : 2024-04 추가 -->
				<!-- ****************** 메인컨텐츠 1 (어바웃&공지사항) ********************** -->
				<article id="mainAbout" class="scroll-animate">
					<div class="area02">
						<div class="inner clearfix">
							<div class="about-con">
								<div class="tit-box fade-in-down fade-in-02">
									<p class="tit-sub">About Us</p>
									<p class="tit"><strong>MICROWORKS<br>KOREA CO.,LTD.</strong></p>
								</div>
								<p class="tit-txt fade-in-down fade-in-04">
									마이크로웍스 코리아(주)는 <br>
									반도체 개발,제조,유통의 종합적인 솔루션을 제공하는<br>
									토탈솔루션 기업입니다.
								</p>
								<a href="/company/summary.php" class="detail-btn fade-in-down fade-in-06"><span class="strong">자세히</span></a>
							</div>
							<!-- !NOTE : 기존소스 참고해주세요 -->
							<div class="notice-con fade-in-right fade-in-08">
								<div class="notice-con-inner">
									<h4 class="notice-tit">공지사항</h4>
									<ul>
										<?while($notice_row = mysql_fetch_array($notice_rs)){
											$new_img =	$page->bbsNewImg( $notice_row[reg_date], 24, 'new-notice');
										?>
										<li>
											<a href="<?=$site_url?>/company/notice.php?bgu=view&idx=<?=$notice_row[idx]?>">
												<div class="notice-item">
													<div class="item-inner">
														<!-- new게시물에 클래스 new-notice 붙여주세요~! -->
														<p class="notice-subject <?=$new_img?>">
															<?=$notice_row[subject]?>
														</p>
														<span class="notice-date"><?=$tools->strDateCut($notice_row[reg_date],8);?></span>
													</div>
												</div>
											</a>
										</li>
										<?}?>
									</ul>
								</div>
							</div>
						</div>
						<!-- !NOTE S : 2024-04 추가 -->
						<div class="inner">
							<div class="about-slides fade-in-down fade-in-10">
								<div class="autoplay-slider">
									<div class="slider">
										<div class="item"><img src="/images/main/main_visual_side_01.jpg" alt=""></div>
										<div class="item"><img src="/images/main/main_visual_side_03.jpg" alt=""></div>
										<div class="item"><img src="/images/main/main_visual_side_02.jpg" alt=""></div>
										<div class="item"><img src="/images/main/main_visual_side_03.jpg" alt=""></div>
									</div>
									<div class="controller">
										<div class="progress-wrapper"></div>
										<a href="javascript:void(0);" class="player pause"><i class="material-icons play">&#xe037;</i><i
												class="material-icons pause">&#xe034;</i></a>
									</div>
								</div>
								<div class="autoplay-slider">
									<div class="slider">
										<div class="item"><img src="/images/main/main_visual_side_01.jpg" alt=""></div>
										<div class="item"><img src="/images/main/main_visual_side_03.jpg" alt=""></div>
										<div class="item"><img src="/images/main/main_visual_side_02.jpg" alt=""></div>
									</div>
									<div class="controller">
										<div class="progress-wrapper"></div>
										<a href="javascript:void(0);" class="player pause"><i class="material-icons play">&#xe037;</i><i
												class="material-icons pause">&#xe034;</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- !NOTE E : 2024-04 추가 -->
					</div>
				</article>
				<!-- ****************** 메인컨텐츠 2 (퀵메뉴) ********************** -->
				<article id="mainQuickMenu" class="scroll-animate">
					<div class="area">
						<ul class="quick-menu-wrap fade-in-down fade-in-03 clearfix">
							<li class="quick-menu-con quick-menu01" onClick="location.href='/do/control.php'">
								<div class="quick-menu-inner">
									<dl class="clearfix">
										<dt>
											<div class="icon"><img src="/images/main/main_quick_menu_icon_01.png" alt=""></div>
											<div class="on-icon"><img src="/images/main/main_quick_menu_icon_on_01.png" alt=""></div>
										</dt>
										<dd>
											<p class="tit"><b>Q</b>uality Control</p>
											<p class="txt">
												철저한 Q.C.를 통한 관리
											</p>
											<a href="/do/control.php" class="more-btn"><span>더보기</span></a>
										</dd>
									</dl>
								</div>
							</li>
							<li class="quick-menu-con quick-menu02" onClick="location.href='/do/program.php'">
								<div class="quick-menu-inner">
									<dl class="clearfix">
										<dt>
											<div class="icon"><img src="/images/main/main_quick_menu_icon_02.png" alt=""></div>
											<div class="on-icon"><img src="/images/main/main_quick_menu_icon_on_02.png" alt=""></div>
										</dt>
										<dd>
											<p class="tit"><b>V</b>erification Program</p>
											<p class="txt">
												자체 밴더검증 프로그램으로<br> 전세계 대리점권 기업들과 협력하고 있습니다
											</p>
											<a href="/do/program.php" class="more-btn"><span>더보기</span></a>
										</dd>
									</dl>
								</div>
							</li>
							<li class="quick-menu-con quick-menu03" onClick="location.href='/contact/contact.php'">
								<div class="quick-menu-inner">
									<dl class="clearfix">
										<dt>
											<div class="icon"><img src="/images/main/main_quick_menu_icon_03.png" alt=""></div>
											<div class="on-icon"><img src="/images/main/main_quick_menu_icon_on_03.png" alt=""></div>
										</dt>
										<dd>
											<p class="tit"><b>C</b>ontact Us</p>
											<p class="txt">
												솔루션 문의하기 <br>& 기타 문의사항
											</p>
											<a href="/contact/contact.php" class="more-btn"><span>더보기</span></a>
										</dd>
									</dl>
								</div>
							</li>
						</ul>
					</div>
				</article>
				<!-- ****************** 메인컨텐츠 3 ( 글로벌네트워크&환율 ) ********************** -->
				<article id="mainGlobalCon" class="scroll-animate">
					<div class="area02">
						<div class="global-con clearfix">
							<div class="network-con fade-in-down fade-in-03">
								<p class="global-tit"><strong>글로벌</strong>네트워크<span>Global Network</span></p>
								<div class="global-map-con">
									<div class="map-pc-img"><img src="/images/main/main_global_map_pc.png" alt="세계지도" /></div>
									<div class="global-nation-box">
										<!-- 기준은 left :50%; top:0; 이며, margin-left값과 top으로 위치 조정해주셔야 합니다. -->
										<div class="nation-circle" title="korea"><span></span><span></span><span></span><span></span></div>
									</div>
								</div>
								<div class="global-map-con-m">
									<img src="/images/content/global_map_m.png" alt="세계지도" />
								</div>
							</div>
							<!-- !NOTE : 기존소스 참고해주세요 -->
							<div class="exchange-con fade-in-down fade-in-08">
								<p class="global-tit"><strong>환율</strong><span>Exchange Rate (2024/03/25 기준 데이터)</span></p>
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
											<th>
												<p><span class="plag-icon"><img src="/images/main/main_exchange_usd_icon.jpg"
															alt=""></span>U.S.A (USD)</p>
											</th>
											<td>1,393.50</td>
											<td>
												<p class="net-change"><span class="up-icon"></span>5</p>
											</td>
											<td>
												<p class="up-down"><span class="up-icon"></span> +0.36%</p>
											</td>
										</tr>
										<tr class="blue-row">
											<th>
												<p><span class="plag-icon"><img src="/images/main/main_exchange_jpy_icon.jpg"
															alt=""></span>Japan (JPY)</p>
											</th>
											<td>903.08</td>
											<td>
												<p class="net-change"><span class="up-icon"></span>2.89</p>
											</td>
											<td>
												<p class="up-down"><span class="up-icon"></span> +0.32%</p>
											</td>
										</tr>
										<tr>
											<th>
												<p><span class="plag-icon"><img src="/images/main/main_exchange_eur_icon.jpg" alt=""></span>EU
													(EUR)</p>
											</th>
											<td>1,478.92</td>
											<td>
												<p class="net-change"><span class="up-icon"></span>3.92</p>
											</td>
											<td>
												<p class="up-down"><span class="up-icon"></span> +0.27%</p>
											</td>
										</tr>
										<tr class="blue-row">
											<th>
												<p><span class="plag-icon"><img src="/images/main/main_exchange_cny_icon.jpg"
															alt=""></span>China (CNY)</p>
											</th>
											<td>191.61</td>
											<td>
												<p class="net-change"><span class="up-icon"></span>0.35</p>
											</td>
											<td>
												<p class="up-down"><span class="up-icon"></span> +0.18%</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</article>
				<!-- ****************** 메인컨텐츠 4 ( 문의폼 ) ********************** -->
				<!-- !NOTE S : 2024-04 추가 -->
				<article id="mainInquiryCon" class="scroll-animate">
					<div class="area02 fade-in-down fade-in-03">
						<form action="/contact/inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">
							<h5 class="text-white">문의</h5>
							<div class="main-inquiry">
								<div class="inquiry-wrapper">
									<div class="forms required">
										<i class="material-icons">&#xe8a6;</i>
										<label for="user-name">이름</label>
										<input type="text" id="user-name" placeholder="이름을 입력해주세요." name="user-name" required="required">
									</div>
									<div class="forms required">
										<i class="material-icons">&#xe0e1;</i>
										<label for="user-email">이메일</label>
										<fieldset>
											<input type="text" id="user-email-01" name="user-email" required="required">
											<em>@</em>
											<input type="text" id="user-email-02" name="user-email" readonly>
											<select name="user-email" id="user-email-domain">
												<option value="">naver.com</option>
											</select>
										</fieldset>
									</div>
									<!-- !NOTE : error 일 때 flag-error 클래스가 붙습니다. -->
									<!-- <div class="forms required flag-error">
									<i class="material-icons">&#xe0e1;</i>
									<label for="user-email">이메일</label>
									<fieldset>
										<input type="text" id="user-email-01" name="user-email" required="required">
										<em>@</em>
										<input type="text" id="user-email-02" name="user-email" readonly>
										<select name="user-email" id="user-email-domain">
											<option value="">naver.com</option>
										</select>
									</fieldset>
								</div> -->
									<div class="forms required">
										<i class="material-icons">&#xe551;</i>
										<label for="user-contact">연락처</label>
										<input type="text" id="user-contact" placeholder="ex)010-1234-5678" name="user-contact"
											required="required">
									</div>
									<div class="forms">
										<i class="material-icons">&#xe8f8;</i>
										<label for="user-company">회사명</label>
										<input type="text" id="user-company" placeholder="회사명을 입력해주세요." name="user-company">
									</div>
									<div class="extra-info">
										<div class="form-group">
											<div class="forms">
												<label for="product-name">부품명</label>
												<input type="text" id="product-name" placeholder="부품명을 입력해주세요." name="product-name">
											</div>
											<div class="forms">
												<label for="product-needs">필요수량</label>
												<input type="text" id="product-needs" placeholder="필요수량을 입력해주세요." name="product-needs">
											</div>
										</div>
										<div class="form-group">
											<div class="forms">
												<label for="delivery-date">희망납기</label>
												<input type="text" id="delivery-date" placeholder="희망납기를 입력해주세요." name="delivery-date">
											</div>
											<div class="forms">
												<label for="product-price">목표단가</label>
												<input type="text" id="product-price" placeholder="목표단가를 입력해주세요." name="product-price">
											</div>
										</div>
									</div>
								</div>
								<div class="agreement-wrapper">
									<div class="split-container align-center">
										<span class="ox">
											<input type="checkbox" id="agree1">
											<label for="agree1"><i class="material-icons">&#xe876;</i>개인정보처리방침에 동의합니다.</label>
										</span>
										<a href="javascript:;" onclick="javascript:layerLoad('/service/privacy.php'); return false;"
											class="button type-line size-sm"><strong>개인정보처리방침 보기</strong></a>
									</div>
									<div class="text-area">
										<textarea name="content" class="main-textarea"></textarea>
										<p class="main-textarea-txt"><i class="material-icons">&#xe0b7</i><strong>문의내용</strong> <span>(500자 이내로
												입력해주세요.)</span></p>
									</div>
									<dl class="contact">
										<dt>* CONTACT:</dt>
										<dd>이메일 <a href="mailto:info@microworks.co.kr">info@microworks.co.kr</a></dd>
										<dd>문의전화 <a href="tel:02-6112-7328">02-6112-7328</a></dd>
									</dl>
									<a href="javascript:;" onClick="sendit();"
										class="button size-xl type-line fluid main-form-btn">작성완료</a>
								</div>
							</div>
						</form>
						<script type="text/javascript">
							function sendit() {
								var f = document.form;
								if (f.agree1.checked == false) {
									alert("개인정보처리방침 동의하지 않으셨습니다.");
									f.agree1.focus();
								} else if (f.name.value == "") {
									alert("이름을 입력해 주세요.");
									f.name.focus();
								} else if (f.phone.value == "") {
									alert("연락처를 입력해 주세요.");
									f.phone.focus();
								} else {
									f.submit();
								}
							}
						</script>
					</div>
				</article>
				<!-- !NOTE E : 2024-04 추가 -->
				<article id="mainPartnerCon">
					<div class="area02">
						<p class="partner-tit">협력업체</p>
						<ul class="main-partner-list">
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_01.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_02.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_03.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_04.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_05.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_06.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_07.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_08.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_09.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_10.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_11.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_12.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_13.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_14.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_15.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_16.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_17.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_18.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_19.jpg" alt=""></span></div>
							</li>
							<li>
								<div class="partner-logo"><span><img src="/images/main/main_partner_logo_20.jpg" alt=""></span></div>
							</li>
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

<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "e7df3de26f7b30";
if(window.wcs) {
wcs_do();
}
</script>


</body>
</html>

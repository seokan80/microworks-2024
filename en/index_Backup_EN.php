<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "./lib/config.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";
$notice_rs = $db->select("cs_bbs_data","where code='notice' and lang='$lang' order by ref desc, idx desc limit 3");
?>
<? if($tools->device()=="mobile"){ ?>

<? include "../in_popup_m.php"; ?>

<? } else { ?>

<? include "../in_popup.php"; ?>

<? } ?>
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
							<strong class="main-visual-txt1"><span>MICROWORKS</span> KOREA CO.,LTD.</strong>
							<p class="main-visual-txt2">SEMICONDUCTOR TOTAL SOLUTION PROVIDER</p>
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
							<strong class="main-visual-txt1"><span>MICROWORKS</span> KOREA CO.,LTD.</strong>
							<p class="main-visual-txt2">MEMORY BUSINESS</p>
							<p class="main-visual-txt3">
								Share Memory Price Trends.
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
							<strong class="main-visual-txt1"><span>MICROWORKS</span> KOREA CO.,LTD.</strong>
							<p class="main-visual-txt2">STRONG LINE</p>
							<p class="main-visual-txt3">
								Microworks Korea Co., Ltd. Strong line. Line Card.
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
							<strong class="main-visual-txt1"><span>MICROWORKS</span> KOREA CO.,LTD.</strong>
							<p class="main-visual-txt2">MANUFACTURING <br> BUSINESS</p>
							<p class="main-visual-txt3">
								Microworks Korea is specializing in manufacturing and development
							</p>
							<div class="main-visual-video-btn"><a href="" class=""><i class="material-icons">&#xe62e</i>Microworks Media</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-visual-side-wrap">
				<div class="main-visual-side">
					<div class="visual-side-item item01" data-slide="1">
						<a href="<?=$site_url?>/product/trend_list.php">
							<div class="inner">
								<div class="side-item-bg"><img src="<?=$site_host?>/images/main/main_visual_side_01.jpg" alt=""></div>
								<p class="side-item-txt"><span><em>MEMORY BUSINESS</em></span></p>
							</div>
						</a>
					</div>
					<div class="visual-side-item item02" data-slide="2">
						<a href="<?=$site_url?>/do/line.php">
							<div class="inner">
								<div class="side-item-bg"><img src="<?=$site_host?>/images/main/main_visual_side_02.jpg" alt=""></div>
								<p class="side-item-txt"><span><em>STRONG LINE</em></span></p>
							</div>
						</a>
					</div>
					<div class="visual-side-item item03" data-slide="3">
						<!--원본링크
						<a href="<?=$site_url?>/do/sourcing.php">
						   문제발생시 복구-->
						<a href="<?=$site_url?>/do/disty.php" target="_blank">
							<div class="inner">
								<div class="side-item-bg"><img src="<?=$site_host?>/images/main/main_visual_side_03.jpg" alt=""></div>
								<p class="side-item-txt"><span><em>MANUFACTURING BUSINESS</em></span></p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<form name="search_form" id="search_form" action="" method="get">
				<input type="hidden" name="search_url" value="">
				<div class="main-search-wrap">
					<div class="main-search-box">
						<div class="main-search-select" >
							<a href="javascript:;" class="cur-select">
								<span><em>Select</em></span>
							</a>
							<ul class="main-select-con">
								<li><a href="javascript:search_sel(1);"><span>Memory Trend</span></a></li>
								<li><a href="javascript:search_sel(2);"><span>Stock List</span></a></li>
								<li><a href="javascript:search_sel(3);"><span>OEM Excess</span></a></li>
							</ul>
						</div>
						<input placeholder="" type="text" name="search_order" class="search-word" onKeypress="if(event.keyCode ==13){search_send();return false;}">
						<button  type="button" class="main-search-btn" title="검색" onclick="search_send()">
							<img src="<?=$site_host?>/images/icon/stock_list_search_icon.png" alt="">
						</button>
					</div>
				</div>
			</form>
		</section>
		<script>
			function search_sel(i){
				if(i==1){
					$("#search_form").attr("action","<?=$site_url?>/product/trend_list.php");
					$("input[name=search_url]").val("<?=$site_url?>/product/trend_list.php");
				}else if(i==2){
					$("#search_form").attr("action","<?=$site_url?>/product/stock.php");
					$("input[name=search_url]").val("<?=$site_url?>/product/stock.php");
				}else if(i==3){
					$("#search_form").attr("action","<?=$site_url?>/product/oem.php");
					$("input[name=search_url]").val("<?=$site_url?>/product/oem.php");
				}
			}
			function search_send(){
				if($("input[name=search_url]").val()==""){
					alert("Please select a search item.");
				}else if($("input[name=search_order]").val()==""){
					alert("Please enter a search term.");
				}else{
					document.search_form.submit();
				}
			}
		</script>
		<!-- ****************** 메인컨텐츠 ********************** -->
		<section id="mainContent">
			<!-- ****************** 메인컨텐츠 1 (어바웃&공지사항) ********************** -->
			<article id="mainAbout" class="scroll-animate">
				<div class="area02">
					<div class="inner clearfix">
						<div class="about-con">
							<div class="tit-box fade-in-down fade-in-03">
								<p class="tit-sub">About Us</p>
								<h3 class="tit"><strong>MICROWORKS<br>KOREA</strong></h3>
							</div>
							<p class="tit-txt fade-in-down fade-in-05">
								Microworks Korea Co., Ltd. is <br>
								Professional global IC, Memoryparts distributor<br>
								which established in 2007.
							</p>
							<a href="<?=$site_url?>/company/summary.php" class="detail-btn fade-in-down fade-in-10"><span>Detail View</span></a>
						</div>
						<div class="notice-con fade-in-right fade-in-09">
							<div class="notice-con-inner">
								<h4 class="notice-tit">Notice</h4>
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
											Microworks Korea<br>Quality Control All components
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
											We are managing<br>strict vender verification program.
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
											Inquiry Form <br>& Contact Information
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
							<p class="global-tit"><b>Global Network</b><!-- <span>Global Network</span> --></p>
							<div class="global-map-con">
								<div class="map-pc-img"><img src="<?=$site_host?>/images/main/main_global_map_pc.png" alt="세계지도" /></div>
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
							<p class="global-tit"><b>Exchange Rate</b><span> (<?=date("Y")?>/<?=date("m")?>/<?=date("d")?> data)</span></p>
							<table class="main-exchange-tbl">
								<colgroup>
									<col width="30%">
									<col width="23.33%">
									<col width="23.33%">
									<col width="23.33%">
								</colgroup>
								<thead>
									<tr>
										<th>Currency name</th>
										<th>Transaction standard rate of exchange</th>
										<th>Net change</th>
										<th>Fluctuation rate</th>
									</tr>
								</thead>
								<tbody>
<?

function get($url){

	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($ch);
	if(curl_errno($ch)){
		throw new Exception(curl_error($ch));
	}

	curl_close($ch);
	return $result;

}

$url = 'https://quotation-api-cdn.dunamu.com/v1/forex/recent?codes=FRX.KRWUSD';
$result = get($url);
$data = json_decode($result,true);
$data = $data[0];

$_provider = $data['provider'];
$_buying = $data['cashBuyingPrice'];
$_selling = $data['cashSellingPrice'];
$_ttselling = $data['ttSellingPrice'];
$_ttbuyling = $data['ttBuyingPrice'];
$_usd = $data['basePrice'];
$_openusd = $data['openingPrice'];
$_chusd = $data['changePrice'];
$_scp = $data['signedChangePrice'];
$_scr = $data['signedChangeRate'];
$_openusd_o = $_usd - $_openusd;
$_openusd_op = ($_chusd/$_usd)*100;
$_openusd = round($_openusd,2);

$ud = sprintf('%0.2f',$_usd);
$p1 = explode(".",$ud);
$p2 = number_format($p1[0]);
$op1 = $p2.".".$p1[1];

?>

								<tbody>
									<tr>
										<th><p><span class="plag-icon"><img src="<?=$site_host?>/images/main/main_exchange_usd_icon.jpg" alt=""></span>U.S.A (USD)</p></th>
										<td><?=$op1?></td>
										<td><p class="net-change"><span class="<? if($_scp>0){ ?>up-icon<? } else if($_scp<0){ ?>down-icon<? } ?>"></span><?=$_scp?></p></td>
										<td><p class="up-down"><span class="<? if($_scp>0){ ?>up-icon<? } else if($_scp<0){ ?>down-icon<? } ?>"></span> <? if($_scp>0){ ?>+<? } else if($_scp<0){ ?>-<? } ?><?=sprintf('%0.2f',$_openusd_op)?>%</p></td>
									</tr>

<?

$url = 'https://quotation-api-cdn.dunamu.com/v1/forex/recent?codes=FRX.KRWJPY';
$result = get($url);
$data = json_decode($result,true);
$data = $data[0];

$_provider = $data['provider'];
$_buying = $data['cashBuyingPrice'];
$_selling = $data['cashSellingPrice'];
$_ttselling = $data['ttSellingPrice'];
$_ttbuyling = $data['ttBuyingPrice'];
$_usd = $data['basePrice'];
$_openusd = $data['openingPrice'];
$_chusd = $data['changePrice'];
$_scp = $data['signedChangePrice'];
$_scr = $data['signedChangeRate'];
$_openusd_o = $_usd - $_openusd;
$_openusd_op = ($_chusd/$_usd)*100;
$_openusd = round($_openusd,2);

$ud = sprintf('%0.2f',$_usd);
$p1 = explode(".",$ud);
$p2 = number_format($p1[0]);
$op1 = $p2.".".$p1[1];

?>

									<tr class="blue-row">
										<th><p><span class="plag-icon"><img src="<?=$site_host?>/images/main/main_exchange_jpy_icon.jpg" alt=""></span>Japan (JPY)</p></th>
										<td><?=$op1?></td>
										<td><p class="net-change"><span class="<? if($_scp>0){ ?>up-icon<? } else if($_scp<0){ ?>down-icon<? } ?>"></span><?=$_scp?></p></td>
										<td><p class="up-down"><span class="<? if($_scp>0){ ?>up-icon<? } else if($_scp<0){ ?>down-icon<? } ?>"></span> <? if($_scp>0){ ?>+<? } else if($_scp<0){ ?>-<? } ?><?=sprintf('%0.2f',$_openusd_op)?>%</p></td>
									</tr>

<?

$url = 'https://quotation-api-cdn.dunamu.com/v1/forex/recent?codes=FRX.KRWEUR';
$result = get($url);
$data = json_decode($result,true);
$data = $data[0];

$_provider = $data['provider'];
$_buying = $data['cashBuyingPrice'];
$_selling = $data['cashSellingPrice'];
$_ttselling = $data['ttSellingPrice'];
$_ttbuyling = $data['ttBuyingPrice'];
$_usd = $data['basePrice'];
$_openusd = $data['openingPrice'];
$_chusd = $data['changePrice'];
$_scp = $data['signedChangePrice'];
$_scr = $data['signedChangeRate'];
$_openusd_o = $_usd - $_openusd;
$_openusd_op = ($_chusd/$_usd)*100;
$_openusd = round($_openusd,2);

$ud = sprintf('%0.2f',$_usd);
$p1 = explode(".",$ud);
$p2 = number_format($p1[0]);
$op1 = $p2.".".$p1[1];

?>

									<tr>
										<th><p><span class="plag-icon"><img src="<?=$site_host?>/images/main/main_exchange_eur_icon.jpg" alt=""></span>EU (EUR)</p></th>
										<td><?=$op1?></td>
										<td><p class="net-change"><span class="<? if($_scp>0){ ?>up-icon<? } else if($_scp<0){ ?>down-icon<? } ?>"></span><?=$_scp?></p></td>
										<td><p class="up-down"><span class="<? if($_scp>0){ ?>up-icon<? } else if($_scp<0){ ?>down-icon<? } ?>"></span> <? if($_scp>0){ ?>+<? } else if($_scp<0){ ?>-<? } ?><?=sprintf('%0.2f',$_openusd_op)?>%</p></td>
									</tr>

<?

$url = 'https://quotation-api-cdn.dunamu.com/v1/forex/recent?codes=FRX.KRWCNY';
$result = get($url);
$data = json_decode($result,true);
$data = $data[0];

$_provider = $data['provider'];
$_buying = $data['cashBuyingPrice'];
$_selling = $data['cashSellingPrice'];
$_ttselling = $data['ttSellingPrice'];
$_ttbuyling = $data['ttBuyingPrice'];
$_usd = $data['basePrice'];
$_openusd = $data['openingPrice'];
$_chusd = $data['changePrice'];
$_scp = $data['signedChangePrice'];
$_scr = $data['signedChangeRate'];
$_openusd_o = $_usd - $_openusd;
$_openusd_op = ($_chusd/$_usd)*100;
$_openusd = round($_openusd,2);

$ud = sprintf('%0.2f',$_usd);
$p1 = explode(".",$ud);
$p2 = number_format($p1[0]);
$op1 = $p2.".".$p1[1];

?>

									<tr class="blue-row">
										<th><p><span class="plag-icon"><img src="<?=$site_host?>/images/main/main_exchange_cny_icon.jpg" alt=""></span>China (CNY)</p></th>
										<td><?=$op1?></td>
										<td><p class="net-change"><span class="<? if($_scp>0){ ?>up-icon<? } else if($_scp<0){ ?>down-icon<? } ?>"></span><?=$_scp?></p></td>
										<td><p class="up-down"><span class="<? if($_scp>0){ ?>up-icon<? } else if($_scp<0){ ?>down-icon<? } ?>"></span> <? if($_scp>0){ ?>+<? } else if($_scp<0){ ?>-<? } ?><?=sprintf('%0.2f',$_openusd_op)?>%</p></td>
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
					<form action="<?=$site_url?>/contact/inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">
						<div class="main-inquiry-con clearfix fade-in-down fade-in-03">
							<div class="left-con">
								<p class="inquiry-tit">Online Inquiry</p>
								<ul class="main-inquiry-list">
									<li>
										<p class="inquiry-info clearfix">
											<span class="info-tit"><i class="material-icons">&#xe8a6</i>Name</span>
											<em><input type="text" placeholder="Please enter your name." name="name"></em>
										</p>
									</li>
									<li>
										<p class="inquiry-info clearfix">
											<span class="info-tit"><i class="material-icons">&#xe0e1</i>E-mail</span>
											<em><input type="text" placeholder="ex)admin@microworks.com" name="email"></em>
										</p>
									</li>
									<li>
										<p class="inquiry-info clearfix">
											<span class="info-tit"><i class="material-icons">&#xe551</i>Tel</span>
											<em><input type="text" placeholder="ex)010-1234-5678" name="phone"></em>
										</p>
									</li>
									<li>
										<p class="inquiry-info clearfix">
											<span class="info-tit"><i class="material-icons">&#xe8f8</i>Company</span>
											<em><input type="text" placeholder="Please enter your company name." name="company"></em>
										</p>
									</li>
								</ul>
							</div>
							<div class="right-con">
								<div class="agreement-tit-box">
									<input type="checkbox" id="agree1"><label for="agree1"><span class="agreement-tit"><i class="material-icons">&#xe876</i>I agree with the privacy policy.</span></label>
									<a href="javascript:;" onclick="javascript:layerLoad('<?=$site_url?>/service/privacy.php'); return false;" class="agreement-link"><span>View Privacy Policy</span></a>
								</div>
								<div class="text-area">
									<p class="main-textarea-txt"><i class="material-icons">&#xe0b7</i>Content <span>(No more than 100 characters.)</span></p>
									<textarea name="content" class="main-textarea"></textarea>
								</div>
								<a href="javascript:;"  onClick="sendit();" class="main-form-btn"><span>Submit</span></a>
							</div>
						</div>
					</form>
					<script type="text/javascript">
						function sendit() {
							var f=document.form;
							if(f.agree1.checked==false){
								alert("You have not agreed to the Privacy Policy.");
								f.agree1.focus();
							}else if(f.name.value=="") {
								alert("Input your name, please.");
								f.name.focus();
							} else if(f.phone.value=="") {
								alert("Please enter a contact.");
								f.phone.focus();
							} else {
								f.submit();
							}
						}
					</script>
				</div>
			</article>
			<article id="mainPartnerCon">
				<div class="area02">
					<p class="partner-tit">Partners</p>
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

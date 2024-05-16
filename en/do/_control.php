<?
$page_num = "02";
$sub_num = "06";
$page_section = "do";
$sub_section = "control";
$page_info = "WHAT WE DO";
$sub_info = "Quality Control";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<article class="do-page control-page area">
					<p class="control-page-tit"><b>Quality Control</b>by Microworks Semiconductor Analysis Center</p>
					<article class="control-con control-con01">
						<p class="num font-crimson">01</p>
						<div class="control-con-box clearfix">
							<div class="img-con"><img src="<?=$site_host?>/images/content/control_img_01.jpg" alt=""></div>
							<div class="text-con">
								<dl>
									<dt><p class="tit">Incoming inspection</p></dt>
									<dd>
										<p class="txt">Using huge semiconductor database</p>
										<p class="txt">Labels inspection</p>
										<p class="txt">Bar-codes inspection</p>
										<p class="txt">Packing condition inspection</p>
										<p class="txt">Risk Assessment : ESD, MSL</p>
										<p class="txt">X-ray inspection</p>
									</dd>
								</dl>
							</div>
						</div>
					</article>
					<article class="control-con control-con02">
						<p class="num font-crimson">02</p>
						<div class="control-con-box clearfix">
							<div class="img-con"><img src="<?=$site_host?>/images/content/control_img_02.jpg" alt=""></div>
							<div class="text-con">
								<dl>
									<dt><p class="tit">Detailed inspection</p></dt>
									<dd>
										<p class="txt">Microscope inspection</p>
										<p class="txt">Plating inspection</p>
										<p class="txt">Top marking inspection</p>
										<p class="txt">Package inspection</p>
										<p class="txt">Surface inspection</p>
									</dd>
								</dl>
							</div>
						</div>
						<div class="control-item-list-box">
							<ul class="control-item-list clearfix">
								<li class="item01">
									<dl>
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_01.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>Microscope</span></p></dd>
									</dl>
								</li>
								<li class="item02">
									<dl>
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_02.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>Vacuum Seal Machine</span></p></dd>
									</dl>
								</li>
								<li class="item03">
									<dl>
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_09.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>X-ray semiconductor inspection</span></p></dd>
									</dl>
								</li>
								<li class="item04">
									<dl>
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_04.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>Constant Temp &<br>Humidity Chamber</span></p></dd>
									</dl>
								</li>
							</ul>
						</div>
					</article>
					<article class="control-con control-con03">
						<p class="num font-crimson">03</p>
						<div class="control-con-box clearfix">
							<div class="img-con"><img src="<?=$site_host?>/images/content/control_img_03.jpg" alt=""></div>
							<div class="text-con">
								<dl>
									<dt><p class="tit">Semiconductor Analysis</p></dt>
									<dd>
										<p class="txt">X-ray</p>
										<p class="txt">Decapsulation</p>
										<p class="txt">Electrical bench test</p>
										<p class="txt">Custom Analysis</p>
										<p class="txt">Blacktop (Scrape)</p>
									</dd>
								</dl>
							</div>
						</div>
						<div class="control-item-list-box">
							<ul class="control-item-list clearfix">
								<li class="item01">
									<dl>
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_05.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>Blacktop (Scrape)</span></p></dd>
									</dl>
								</li>
								<li class="item02">
									<dl>
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_06.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>X-ray</span></p></dd>
									</dl>
								</li>
								<li class="item03">
									<dl>
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_07.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>Optical Inspection</span></p></dd>
									</dl>
								</li>
								<li class="item04">
									<dl>
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_08.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>Electrical bench test</span></p></dd>
									</dl>
								</li>
							</ul>
						</div>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

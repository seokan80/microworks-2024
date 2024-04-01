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
					<p class="control-page-tit">자체 반도체 불량 분석센터 운영으로 <br><b>품질관리</b>에 만전을 기하고 있습니다.</p>
					<article class="control-con control-con01">
						<p class="num font-crimson">01</p>
						<div class="control-con-box clearfix">
							<div class="img-con"><img src="<?=$site_host?>/images/content/control_img_01.jpg" alt=""></div>
							<div class="text-con">
								<dl>
									<dt><p class="tit">입고검사</p></dt>
									<dd>
										<p class="txt">반도체 데이터센터 운영 및 활용</p>
										<p class="txt">외부라벨 감식</p>
										<p class="txt">바코드 감식</p>
										<p class="txt">패킹상태 검사</p>
										<p class="txt">위험분석 : ESD, MSL</p>
										<p class="txt">엑스레이 검사</p>
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
									<dt><p class="tit">세부검사</p></dt>
									<dd>
										<p class="txt">전자현미경 정밀검사</p>
										<p class="txt">리드 도금검사</p>
										<p class="txt">탑마킹 감별 및 인쇄상태 검사</p>
										<p class="txt">패키지 감식</p>
										<p class="txt">표면 검사</p>
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
										<dt><span class="item-img"><img src="<?=$site_host?>/images/content/control_item_img_03.jpg" alt=""></span></dt>
										<dd><p class="item-name"><span>Bar-Code Reader</span></p></dd>
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
									<dt><p class="tit">반도체 불량분석</p></dt>
									<dd>
										<p class="txt">X-ray</p>
										<p class="txt">Decapsulation</p>
										<p class="txt">Bench test</p>
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

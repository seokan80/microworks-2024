<?
$page_num = "02";
$sub_num = "05";
$page_section = "do";
$sub_section = "control";
$page_info = "服务项目";
$sub_info = "质量管理";
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
					<p class="control-page-tit">有通过多种方式<b>检查管理品质</b></p>
					<article class="control-con control-con01">
						<p class="num font-crimson">01</p>
						<div class="control-con-box clearfix">
							<div class="img-con"><img src="<?=$site_host?>/images/content/control_img_01.jpg" alt=""></div>
							<div class="text-con">
								<dl>
									<dt><p class="tit">入库检查</p></dt>
									<dd>
										<p class="txt">材料图片数据库验证</p>
										<p class="txt">外部标签识别</p>
										<p class="txt">条形码识别</p>
										<p class="txt">鉴别Date Code</p>
										<p class="txt">风险分析： ESD, MSL</p>
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
									<dt><p class="tit">详细检查</p></dt>
									<dd>
										<p class="txt">肉眼检查</p>
										<p class="txt">显微镜检查</p>
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
									<dt><p class="tit">RMA 分析</p></dt>
									<dd>
										<p class="txt">Blacktop (Scrape)</p>
										<p class="txt">X光</p>
										<p class="txt">光学检测</p>
										<p class="txt">电气台架试验</p>
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

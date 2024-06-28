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
				<!-- !NOTE S : 2024-04 추가 -->
				<article class="do-page control-page area">
						<p class="control-page-tit">Strict <b>Quality Management</b> by own Semiconductor Analysis Center.</p>
						<article class="control-con control-con01">
							<p class="num font-crimson">01</p>
							<div class="control-con-box clearfix">
								<div class="img-con"><img src="/images/content/control_img_01.png" alt=""></div>
								<div class="text-con">
									<dl>
										<dt>
											<p class="tit">Incoming and Outgoing Quality Control (IQC, OQC)</p>
										</dt>
										<dd>
											<p class="txt">Operate and Manage Semiconductor Trading Big-Data Serverㆍ Label, Datasheet Check</p>
											<p class="txt">Barcodes, Printing Check</p>
											<p class="txt">Packing Condition Check (ESD, MSL)</p>
											<p class="txt">X-Ray Inspection</p>
											<p class="txt">Issue Quality Control Passed Label</p>
										</dd>
									</dl>
								</div>
							</div>
						</article>
						<article class="control-con control-con02">
							<p class="num font-crimson">02</p>
							<div class="control-con-box clearfix">
								<div class="img-con"><img src="/images/content/control_img_02.png" alt=""></div>
								<div class="text-con">
									<dl>
										<dt>
											<p class="tit">Detailed Inspection</p>
										</dt>
										<dd>
											<p class="txt">Optical Inspection by Digital Microscope</p>
											<p class="txt">Top Marking Check</p>
											<p class="txt">Surface Inspection (Physical, Chemical)</p>
											<p class="txt">Plating on the Leads Check</p>
										</dd>
									</dl>
								</div>
							</div>
							<div class="control-item-list-box">
								<ul class="control-item-list clearfix">
									<li class="item01">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_01.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>Digital Microscope</span></p>
											</dd>
										</dl>
									</li>
									<li class="item02">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_02.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>Constant Temp &<br />Humidity Chamber</span></p>
											</dd>
										</dl>
									</li>
									<li class="item03">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_03.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>X-ray Inspection System</span></p>
											</dd>
										</dl>
									</li>
									<li class="item04">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_04.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>3D V-I Tester</span></p>
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</article>
						<article class="control-con control-con03">
							<p class="num font-crimson">03</p>
							<div class="control-con-box clearfix">
								<div class="img-con"><img src="/images/content/control_img_03.png" alt=""></div>
								<div class="text-con">
									<dl>
										<dt>
											<p class="tit">Failure Analysis</p>
										</dt>
										<dd>
											<p class="txt">X-Ray Inspection (Leads, Frame, Die)</p>
											<p class="txt">De-capsulation</p>
											<p class="txt">V-I Curve Analysis</p>
											<p class="txt">Counterfeit Analysis</p>
											<p class="txt">Chemical, Physical Inspection</p>
											<p class="txt">Customized Inspection</p>
										</dd>
									</dl>
								</div>
							</div>
							<div class="control-item-list-box">
								<ul class="control-item-list clearfix">
									<li class="item01">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_05.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>Blacktop (Scrape)</span></p>
											</dd>
										</dl>
									</li>
									<li class="item02">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_06.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>X-ray</span></p>
											</dd>
										</dl>
									</li>
									<li class="item03">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_07.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>Optical Inspection</span></p>
											</dd>
										</dl>
									</li>
									<li class="item04">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_08.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>3D V-I Curve</span></p>
											</dd>
										</dl>
									</li>
									<li class="item05">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_09.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>QR코드 해독분석</span></p>
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</article>
						<div class="button-layout center">
                            <!-- #202405 반도체 분석 문의하기 추가 -->
                            <!-- !NOTE : control_popup.php 팝업 띄워주세요 -->
                            <button type="button" class="button size-lg margin-top-xxl" onclick="javascript:layerLoad('/do/control_popup.php?lang=en'); return false;"><strong>Semiconductor Analysis Inquiry</strong></button>
						</div>
					</article>
					<!-- !NOTE S : 2024-04 추가 -->
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

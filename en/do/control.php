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
						<p class="control-page-tit">자체 반도체 불량 분석센터 운영으로 <br><b>품질관리</b>에 만전을 기하고 있습니다.</p>
						<article class="control-con control-con01">
							<p class="num font-crimson">01</p>
							<div class="control-con-box clearfix">
								<div class="img-con"><img src="/images/content/control_img_01.png" alt=""></div>
								<div class="text-con">
									<dl>
										<dt>
											<p class="tit">입출고 검사</p>
										</dt>
										<dd>
											<p class="txt">반도체 거래 빅데이터 서버 운영 및 활용</p>
											<p class="txt">외부 라벨, DATA SHEET 확인</p>
											<p class="txt">바코드/QR코드 검사</p>
											<p class="txt">포장 상태 검수(ESD, MSL)</p>
											<p class="txt">엑스레이 검사</p>
											<p class="txt">출고라벨 검수</p>
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
											<p class="tit">세부검사</p>
										</dt>
										<dd>
											<p class="txt">Digital Microscope 정밀검사</p>
											<p class="txt">탑마킹 형식 및 인쇄상태 검사</p>
											<p class="txt">패키지 표면(물리적/화학적) 검사</p>
											<p class="txt">리드 도금 검사</p>
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
											<p class="tit">반도체 불량분석</p>
										</dt>
										<dd>
											<p class="txt">X-ray 분석(리드프레임, DIE)</p>
											<p class="txt">De-capsulation 분석</p>
											<p class="txt">V-I Curve 분석</p>
											<p class="txt">Custom 분석</p>
											<p class="txt">Counterfeit 분석</p>
											<p class="txt">Chemical, Physical 분석</p>
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

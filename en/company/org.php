<?
$page_num = "01";
$sub_num = "03";
$page_section = "company";
$sub_section = "org";
$page_info = "COMPANY";
$sub_info = "Organization";
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
$(document).ready(function  () {
		/* *********************** 리스트의 높이값 맞추기 ************************ */
		var $autoList = $(".auto-height-list-con .auto-height-item");	// ul > li
		var $autoListInner = $autoList.children(".inner-box");					// ul > li 안에 border가 표시되는 영역
		var heightDiv = ".inner";				// 높이값을 결정하는 영역		
		var listNum = $autoList.length;			
		var resetWidth = 480; // 높이값을 해제하는 구간
			autoHeight();
			$(window).resize(function  () {
				autoHeight();
			}); 

		function  autoHeight(){
			maxHeight = 0;
			for (var i=0; i<listNum; i++) {
				var curHeight = $autoList.eq(i).find(heightDiv).innerHeight();
				if ( curHeight > maxHeight ) {
					maxHeight = curHeight;
				}
			}
			$autoListInner.height(maxHeight);
			
			if ( $(window).innerWidth() < resetWidth + 1 ){
			  $autoListInner.css('height','auto');
			}
		}
	});
</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<article class="org-page">
					<div class="area">
						<p class="org-tit font-martel"><span>M</span>icroworks Korea Co.,Ltd</p>
						<div class="org-con">
							<ul class="org-list clearfix auto-height-list-con">
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_01.png" alt=""></span>
												<span class="tit-en">Sales Team</span>
												<!-- <span class="tit-kor">국내필드영업</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">R&D Support</p>
													<p class="txt">OEM Sales</p>
													<p class="txt">Schedule Order</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_02.png" alt=""></span>
												<span class="tit-en">Inside Sales Team</span>
												<!-- <span class="tit-kor">유동/제조사</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">Urgent Stock Sourcing</p>
													<p class="txt">Small Quantity Batch</p>
													<p class="txt">Technical Data Support</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_03.png" alt=""></span>
												<span class="tit-en">Export Team</span>
												<!-- <span class="tit-kor">수출팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">Export All Over the World</p>
													<p class="txt">Technical Data Support</p>
													<p class="txt">Competitive Price & Lead Time</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_04.png" alt=""></span>
												<span class="tit-en">Sourcing Team</span>
												<!-- <span class="tit-kor">CS업무/해외소싱</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">Source from Global Franchise</p>
													<p class="txt">Global Sourcing Experts</p>
													<p class="txt">Hot issue items</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_05.png" alt=""></span>
												<span class="tit-en">Accounting</span>
												<!-- <span class="tit-kor">경영지원팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">Taxation Support</p>
													<p class="txt">Payment</p>
													<p class="txt">Management</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_06.png" alt=""></span>
												<span class="tit-en">R & D</span>
												<!-- <span class="tit-kor">품질관리팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">H/W, S/W develop</p>
													<p class="txt">Program Writing Service</p>
													<p class="txt">Technical Support</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_07.png" alt=""></span>
												<span class="tit-en">B2B Marketing</span>
												<!-- <span class="tit-kor">B2B 마케팅팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">Website & Management</p>
													<p class="txt">SNS Marketing</p>
													<p class="txt">B2B Management</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_08.png" alt=""></span>
												<span class="tit-en">T.O.Q.C</span>
												<!-- <span class="tit-kor">자재팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">Quality Inspection</p>
													<p class="txt">Faulty Inspection</p>
													<p class="txt">RMA Support</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_09.png" alt=""></span>
												<span class="tit-en">Semiconductor Analysis Center</span>
												<!-- <span class="tit-kor">자재팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">Semiconductor Defect Analysis</p>
													<p class="txt">The X-Ray Test</p>
													<p class="txt">Electrical Test</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_10.png" alt=""></span>
												<span class="tit-en">Manufacturing team.</span>
												<!-- <span class="tit-kor">자재팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">ODM product manufacturing</p>
													<p class="txt">PCB Ass'y</p>
													<p class="txt">JIG, Module, Sensor Development</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>

							
							
							
							
							
							</ul>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

<?
$page_num = "01";
$sub_num = "03";
$page_section = "company";
$sub_section = "org";
$page_info = "COMPANY";
$sub_info = "조직도";
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
												<span class="tit-kor">국내필드영업</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">연구소 기술지원</p>
													<p class="txt">제조업체 영업</p>
													<p class="txt">납기문제 자재 해결</p>
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
												<span class="tit-kor">유통/제조사</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">긴급자재지원</p>
													<p class="txt">소량 다품종지원</p>
													<p class="txt">기술 및 자료지원</p>
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
												<span class="tit-kor">수출팀</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">전세계 수출</p>
													<p class="txt">기술 및 자료지원</p>
													<p class="txt">경쟁력 있는 가격/납기 제시</p>
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
												<span class="tit-en">Sourcing Team</span>
												<span class="tit-kor">해외소싱</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">전세계 대리점에서 소싱</p>
													<p class="txt">글로벌인재 6명이 소싱지원</p>
													<p class="txt">신규아이템 발굴 및 대리점 계약</p>
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
												<span class="tit-kor">경영지원팀</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">세금계산서 발행 및 마감</p>
													<p class="txt">송금 및 자재 마감</p>
													<p class="txt">대내외 경영지원</p>
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
												<span class="tit-en">R & D</span>
												<span class="tit-kor">연구소</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">H/W, S/W 개발 > PCB설계, MICOM개발</p>
													<p class="txt">Program Writing Service</p>
													<p class="txt">반도체 불량 분석센터 운영</p>
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
												<span class="tit-kor">B2B 마케팅팀</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">홈페이지&웹관리 홍보</p>
													<p class="txt">SNS 마케팅관리</p>
													<p class="txt">반도체 플랫폼관리</p>
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
												<span class="tit-kor">품질관리팀</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">자재 입출고시 검수</p>
													<p class="txt">불량발생시 검사 X-RAY 외</p>
													<p class="txt">RMA 접수 대응</p>
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
												<span class="tit-kor">반도체 분석센터</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">반도체 불량분석</p>
													<p class="txt">X-RAY 검사, Decap검사</p>
													<p class="txt">전기적시험테스트 및 비교분석</p>
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
												<span class="tit-en">Manufacturing team</span>
												<span class="tit-kor">제조팀</span>
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">ODM 제품제조</p>
													<p class="txt">PCB ASS'Y</p>
													<p class="txt">JIG,모듈,센서 개발 및 제작</p>
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

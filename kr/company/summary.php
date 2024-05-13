<?
$page_num = "01";
$sub_num = "01";
$page_section = "company";
$sub_section = "summary";
$page_info = "COMPANY";
$sub_info = "회사소개";
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
				<article class="summary-page">
					<article class="summary-top-box">
						<div class="top-bg clearfix" style="background-image: url('/images/content/summary_top_img.png');"></div>
						<div class="top-blue-box">
							<div class="inner">
								<span class="top-tit-en">About Us</span>
								<p class="top-tit-kr">마이크로웍스 <br class="pc-only"/>코리아(주)<br/><strong>글로벌 소싱 반도체<br/>전문 유통 기업</strong></p>
								<p class="top-tit-txt">
									마이크로웍스 코리아㈜는 2007년에<br/>
									설립한 메모리, 반도체 토탈솔루션<br/>
									기업입니다.
								</p>
							</div>
						</div>
						<div class="top-txt-box">
							<p class="txt">
								마이크로웍스 코리아(주)는 20년 이상의 경험과 함께 쌓아온 빅데이터를 활용하여<br/>
								국내외 다수의 기업과의 거래 속에 지속해서 성장하고 있습니다.<br/>
								대형화, 온라인화되는 반도체 유통시장의 급격한 변화 속에서 당사는 탄탄한 해외 공급사 확보와 함께 온라인 거래 <br/>
								플랫폼, 반도체 분석센터 운영으로 신속, 정확하고 확실한 정품의 정보 전달과 공급으로 고객사의 신뢰를 받고 있습니다.<br/>
								<br/>
								4차 산업혁명의 시작과 함께 AI를 이용한 기술 발전에 대비하여<br/>
								융합적 사고와 적응력으로 고객의 요구를 유연하게 대처할 수 있도록 미래를 위한 기술적 변화와 혁신에 <br/>
								끊임없이 도전하고 있습니다.<br/>
								<br/>
								당사 연구소를 통한 기술지원과 분석센터를 통한 품질 확인 보증으로 최상의 서비스를 제공하여<br/>
								고객의 성장이 우리의 성장이라는 동반성장의 가치를 실현하고 있습니다.
							</p>
						</div>
					</article>

					<article class="summary-con summary-con01">
						<div class="area">
							<p class="summary-con-tit">경영이념</p>
							<ul class="summary-con-list clearfix">
								<li class="item01">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="/images/content/summary_icon_01.png" alt=""></span>
											<dl>
												<dt><p class="tit">MISSION</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt">
															경험과 노하우를 바탕으로<br/>
															고객사가 원활하게 생산할 수 있도록<br/>
															최선을 다해 도와 성장시키는데<br/>
															목표를 둔다
														</p>
													</div>
												</dd>
											</dl>
										</div>
									</div>
								</li>
								<li class="item02">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="/images/content/summary_icon_02.png" alt=""></span>
											<dl>
												<dt><p class="tit">VISION</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt">
															급변하는 IT세상에<br/>
															스타트업, 벤쳐기업, 우수기업 등<br/>
															발굴하여 성공할수 있도록 도우며,<br/>
															성공모델을 지속적으로 만들어낸다
														</p>
													</div>
												</dd>
											</dl>
										</div>
									</div>
								</li>
								<li class="item03">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="/images/content/summary_icon_03.png" alt=""></span>
											<dl>
												<dt><p class="tit">CORE VALUES</p></dt>
												<dd>
													<div class="txt-box is-icon">
														<p class="txt"><i class="material-icons"></i>고객에 대한 빠른 대응력</p>
														<p class="txt"><i class="material-icons"></i>경쟁력있는 가격제시</p>
														<p class="txt"><i class="material-icons"></i>맞춤형 기업 서비스</p>
														<p class="txt"><i class="material-icons"></i>최고의 품질관리</p>
														<p class="txt"><i class="material-icons"></i>신규아이템 제안</p>
													</div>
												</dd>
											</dl>
										</div>
									</div>
								</li>
							</ul>
						</div>

					</article>
				</article>
				<!-- !NOTE E : 2024-04 추가 -->
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

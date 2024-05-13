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
				<article class="summary-page">
					<article class="summary-top-box">
						<div class="top-bg clearfix"><img src="<?=$site_host?>/images/content/summary_top_img.jpg" alt=""></div>
						<div class="top-blue-box">
							<div class="inner">
								<span class="top-tit-en">About Us</span>
								<p class="top-tit-kr">전 세계로 도약하는 <br><b>반도체 토탈솔루션 기업</b></p>
								<p class="top-tit-txt">
									마이크로웍스 코리아㈜는 2007년에<br>
									설립한 메모리,반도체 토탈솔루션<br>
									기업입니다.
								</p>
							</div>
						</div>
						<div class="top-txt-box">
							<p class="txt">
								마이크로웍스 코리아㈜는 오랜 노하우와 축적된 빅데이터를 바탕으로, 국내외 유수의 기업들과 릴레이션쉽 속에 지속적으로 성장해 나가고 있습니다. 글로벌화 되어가고있는 반도체 유통시장의 급격한 변화속에서, 당사는 탄탄한 해외밴더사와 교류를 통하여 신속,정확하고 빠른 정보를 공유함으로써 경쟁력있는 가격으로 파트너사에 공급하고 있습니다. <br>
								지속 성장중인 4차산업에 발맞추어 AI, Industry, Automotive, Robot, Big Data, Server 등 관련반도체 부품을 런칭해나가고 있으며, 당사 연구소를 통한 기술지원과 설계를 함께해나가므로써 경쟁이 아닌 동반성장한다는 마음으로 고객과 함께하고 있습니다. <br>
							</p>
						</div>
					</article>

					<article class="summary-page">
							<div class="txt-box">
							<p class="txt">

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
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_01.png" alt=""></span>
											<dl>
												<dt><p class="tit">MISSION</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt">경험과 노하우를 바탕으로</p>
														<p class="txt">고객사가 원활하게 생산할 수 있도록</p>
														<p class="txt">최선을 다해 도와 성장시키는데</p>
														<p class="txt">목표를 둔다</p>
													</div>
												</dd>
											</dl>
										</div>
									</div>
								</li>
								<li class="item02">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_02.png" alt=""></span>
											<dl>
												<dt><p class="tit">VISION</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt">급변하는 IT세상에</p>
														<p class="txt">스타트업, 벤쳐기업, 우수기업 등</p>
														<p class="txt">발굴하여 성공할수 있도록 도우며,</p>
														<p class="txt">성공모델을 지속적으로 만들어낸다.</p>
													</div>
												</dd>
											</dl>
										</div>
									</div>
								</li>
								<li class="item03">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_03.png" alt=""></span>
											<dl>
												<dt><p class="tit">CORE VALUES</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt"><i class="material-icons">&#xe876</i>고객에 대한 빠른 대응력</p>
														<p class="txt"><i class="material-icons">&#xe876</i>경쟁력있는 가격제시</p>
														<p class="txt"><i class="material-icons">&#xe876</i>맞춤형 기업 서비스</p>
														<p class="txt"><i class="material-icons">&#xe876</i>최고의 품질관리</p>
														<p class="txt"><i class="material-icons">&#xe876</i>신규아이템 제안</p>
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
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

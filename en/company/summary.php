<?
$page_num = "01";
$sub_num = "01";
$page_section = "company";
$sub_section = "summary";
$page_info = "COMPANY";
$sub_info = "About Microworks";
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
								<span class="top-tit-en">Company Overview</span>
								<p class="top-tit-kr"><strong>A solid company</strong><br/>in the world.</p>
								<p class="top-tit-txt">
									Microwork Korea was established<br/>in 2007 and specializes in<br/>providing memory &<br/> semiconductor solutions.
								</p>
							</div>
						</div>
						<div class="top-txt-box">
							<p class="txt">
								Microworks Korea Co., Ltd. continues to grow in transactions with many domestic and foreign companies by utilizing big data accumulated with more than 20 years of experience.<br/>
								The semiconductor distribution market is getting huge and being online, it is trusted by customers by quickly, accurately, and reliably delivering and supplying genuine information through online trading platforms and semiconductor analysis centers, along with securing solid overseas suppliers in these rapid changes.<br/>
								With the start of the 4th Industrial Revolution, we are constantly challenging technological change and innovation for the future so that we can flexibly cope with customer needs with convergent thinking and adaptability in preparation for technological development using AI.<br/>
								By providing the best service through the research center and quality verification guarantees through the analysis center, customers will realize the value of shared growth.
							</p>
						</div>
					</article>

					<article class="summary-con summary-con01">
						<div class="area">
							<p class="summary-con-tit">Management Philosophy</p>
							<ul class="summary-con-list clearfix">
								<li class="item01">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="/images/content/summary_icon_01.png" alt=""></span>
											<dl>
												<dt><p class="tit">MISSION</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt"><i class="material-icons">&#xe876</i>Focus on Sustainable development of customer.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>Encourage mutual growth with customer.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>Effort to improve price competition.</p>
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
														<p class="txt"><i class="material-icons">&#xe876</i>A solid company.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>Long run business.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>A trusted company.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>Keep growing for the future.</p>
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
													<div class="txt-box">
														<p class="txt"><i class="material-icons">&#xe876</i>Responsiveness to customer needs.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>Offering competitive price.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>A custom-made business.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>Quality Control for the best.</p>
														<p class="txt"><i class="material-icons">&#xe876</i>New business item proposals.</p>
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

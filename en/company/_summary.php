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
				<article class="summary-page">
					<article class="summary-top-box">
						<div class="top-bg clearfix"><img src="<?=$site_host?>/images/content/summary_top_img.jpg" alt=""></div>
						<div class="top-blue-box">
							<div class="inner">
								<span class="top-tit-en">Company Overview</span>
								<p class="top-tit-kr"><b>A solid company</b> in the world.</p>
								<p class="top-tit-txt">
									Microwork Korea was established in 2007 and specializes in providing memory & semiconductor solutions.
								</p>
							</div>
						</div>
						<div class="top-txt-box">
							<p class="txt">
								Based on our long-term know-how and data, we are committed to providing the Best Solution.
								<br>We are looking for the partners can be growing with us and we will do our best and support for everything.
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
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_01.png" alt=""></span>
											<dl>
												<dt><p class="tit">VISION</p></dt>
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
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_02.png" alt=""></span>
											<dl>
												<dt><p class="tit">MISSION</p></dt>
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
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_03.png" alt=""></span>
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
					<article class="summary-con summary-con02">
						<div class="area">
							<div class="inner clearfix">
								<div class="sales-con">
									<dl>
										<dt>
											<span class="icon"><img src="<?=$site_host?>/images/content/summary_icon_04.png" alt=""></span>
											<span class="tit">Sales</span>
										</dt>
										<dd>
											<div class="txt-box">
												<p class="txt">R&D Report Service</p>
												<p class="txt">Schedule Order</p>
												<p class="txt">R&D/ Technical Support</p>
												<p class="txt">Customized quotation.</p>
												<p class="txt">Turn-Key</p>
											</div>
										</dd>
									</dl>
								</div>
								<div class="buy-con">
									<dl>
										<dt>
											<span class="icon"><img src="<?=$site_host?>/images/content/summary_icon_05.png" alt=""></span>
											<span class="tit">Purchasing</span>
										</dt>
										<dd>
											<div class="txt-box">
												<p class="txt">Supplier verification through our company's program.</p>
												<p class="txt">Collecting vendors strictly.</p>
												<p class="txt">Data base with high-standard system</p>
												<p class="txt">OEM Excess or old stock.</p>
												<p class="txt">Experts with over 20 years of experience</p>
											</div>
										</dd>
									</dl>
								</div>
							</div>
						</div>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

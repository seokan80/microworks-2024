<?
$page_num = "02";
$sub_num = "07";
$page_section = "do";
$sub_section = "program";
$page_info = "WHAT WE DO";
$sub_info = "Vertification Program";
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
				<article class="program-page area">
					<article class="program-top clearfix">
						<div class="img-con"><span class="img-wrap"><img src="<?=$site_host?>/images/content/program_img.png" alt=""></span></div>
						<div class="txt-con">
							<div class="inner">
								<p class="tit">
									<span>We are managing</span>

									<b><span>strict</span>  vender verification program.</b>
								</p>
								<p class="txt">
									We are only purchasing from the suppliers that we've verified strictly.
									we can help you save your time and cost.
								</p>
								<p class="txt">We will keep managing and update the system can check various vendors.</p>
							</div>
						</div>
					</article>
					<article class="program-con">
						<p class="program-con-tit">Vendor Rating</p>
						<ul class="program-con-list clearfix">
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_01.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">01</span>Preferred</p>
										<div class="txt-box">
											<p class="txt">High Performance.</p>
											<p class="txt">Full traceability.</p>
											<p class="txt">Favorable terms.</p>
										</div>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_02.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">02</span>Approved</p>
										<div class="txt-box">
											<p class="txt">Proven vendor with limited terms.</p>
											<!-- <p class="txt">한국/해외 대리점</p> -->
										</div>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_03.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">03</span>Conditional</p>
										<div class="txt-box">
											<p class="txt">Unproven or promising Vendor with limited Transaction history or Limited Traceability.</p>
										</div>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_04.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">04</span>UVL</p>
										<div class="txt-box">
											<p class="txt">Unreliable Vendor list</p>
											<p class="txt">Trading prohibited</p>
											<p class="txt">Inferior Quality</p>
											<p class="txt">Poor performance</p>
										</div>
									</dd>
								</dl>
							</li>
						</ul>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

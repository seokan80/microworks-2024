<?
$page_num = "01";
$sub_num = "02";
$page_section = "company";
$sub_section = "ceo";
$page_info = "COMPANY";
$sub_info = "CEO Greeting";
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
				<article class="ceo-page">
					<div class="area">
						<div class="inner clearfix">
							<div class="ceo-img-con"><img src="<?=$site_host?>/images/content/ceo_img.jpg" alt=""></div>
							<div class="ceo-txt-con">
								<div class="tit-box">
									<p class="tit-en">Shared growth</p>
									<p class="tit-kor"><b>Trust</b> is the BEST</p>
								</div>
								<div class="txt-box">
									<p class="txt txt01">
										We've been working for over 20 years to be a reliable company.<br>
										We've been growing up with valuable customers.<br>
										Based on long-term know-how and data, <br>
										 We will catch the trend and supply the best.
									</p>
									<p class="txt txt02">
										We will try our best to supply with the best lead time through the relationship from 100% reliable suppliers in a fast-changing IT industry.
									</p>
								</div>
								<div class="sign-box">
									<p class="sign-txt">Microworks Korea Co.,Ltd CEO</p>
									<img src="<?=$site_host?>/images/content/ceo_sign.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

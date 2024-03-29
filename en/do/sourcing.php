<?
$page_num = "02";
$sub_num = "03";
$page_section = "do";
$sub_section = "sourcing";
$page_info = "WHAT WE DO";
$sub_info = "Sourcing";
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
				<article class="do-page sourcing-page area-box">
					<div class="inner clearfix">
						<div class="bg-con"><img src="<?=$site_host?>/images/content/sourcing_img.jpg" alt=""></div>
						<div class="txt-con">
							<div class="inner">
								<p class="tit">
									We are <span class="blue-txt">supplying the materials</span> with<br><span class="red-txt">a competitive price</span><br> by doing global sourcing.
								</p>
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="txt">
									We are purchasing from oversea authorized agency only,  <br>
									to meet the schedule with a good price, <br>
									we are doing the best with experts working over 20 years in this field.
								</p>
							</div>
						</div>
					</div>
				</article>
				<article class="do-page sourcing-page area-box">
					<div class="inner clearfix">
						<div class="txt-con">
							<div class="inner">
								<img src="<?=$site_host?>/images/content/sourcing_01.png" alt="">
							</div>
						</div>
						<div class="txt-con">
							<div class="inner">
								<p class="tit">
									We provide a variety of services in cooperation with trusted companies around the world.
								</p>
								<p class="txt">
									It is imported from 17 countries with Hong Kong, China, Taiwan, Singapore, the United States, the United Kingdom, and Germany as major importers.
								</p>
								<ul class="txt" style="font-size: 14px; line-height:22px; color:#91ffff; ">
									<li> - Based on Vendor Verification Program </li>
									<li> - 20 Years Experienced Human Resources </li>
									<li> - Using Huge Database </li>
									<li> - Strict Vendor Audits </li>
									<li> - Offer Franchise Stock Only </li>
									<li> - Authorized Distributors | D/C within 2 Years </li>
									<li> - Weekly Memory Offer (Global Market Price Flow) </li>
									<li> - Customized Quotation </li>
									<li> - Turn-Key Service </li>
								</ul>
							</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

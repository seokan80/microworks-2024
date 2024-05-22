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
				<!-- !NOTE S : 2024-04 추가 -->
				<article class="ceo-page">
					<div class="area">
						<div class="inner">
							<div class="greeting-wrap">
								<div class="ceo-img-con"><img src="/images/content/img-ceo.png" alt=""></div>
								<div class="ceo-txt-con">
									<div class="tit-box">
										<p class="tit-en">Shared growth</p>
										<p class="tit-kor"><strong>Trust</strong> is the BEST</p>
									</div>
									<div class="txt-box">
										<p class="txt">
										Microworks Korea Co., Ltd. is a person-centered company that shares growth with members under the motto 'Person is the answer'.<br/>
										Since founded year 2007, we have pioneered and led the distribution of semiconductors with the aim of becoming a reliable company.<br/>
										And we have contributed to the growth of the national economy by supplying electronic components such as semiconductors and memories from the digital device manufacturing industry to the aerospace defense industry.<br/>
										<br/>
										Microworks Korea Co., Ltd. will leap forward as a global leading semiconductor distributor beyond Korea through continuous innovation and challenges.<br/>
										<br/>
										We will strive to become a company loved and socially respected by customers through transparent management that achieves the vision of 'Trade to Upgrade' through transaction innovation using AI and cultivates talent and fulfills social responsibilities.<br/>
										<br/>
										Thank you.
										</p>
									</div>
									<div class="sign-box">
										<strong class="sign-txt">Stanley Ahn, CEO of Microworks Korea Co., Ltd.</strong>
									</div>
								</div>
							</div>
							<ul class="company-info">
								<li>
									<img src="/images/content/img-company-info-01.png" alt="">
									<div class="text-wrap">
										<p class="title">Genuine Supply</p>
										<p class="desc">Through the global supply chain of various manufacturers and distributors, we are saving customers time and cost by purchasing quality-checked products in one place.</p>
									</div>
								</li>
								<li>
									<img src="/images/content/img-company-info-02.png" alt="">
									<div class="text-wrap">
										<p class="title">Technical Support</p>
										<p class="desc">We provide technical support to help customers select and use their products correctly. We solve problems that may arise during the product design, development, and manufacturing stages and provide optimal solutions.</p>
										
									</div>
								</li>
								<li>
									<img src="/images/content/img-company-info-03.png" alt="">
									<div class="text-wrap">
										<p class="title">Providing Information</p>
										<p class="desc">We provide market trends and product information to help the customers identify the latest technologies and market trends and make better decisions.</p>
									</div>
								</li>
								<li>
									<img src="/images/content/img-company-info-04.png" alt="">
									<div class="text-wrap">
										<p class="title">Supply Chain Management</p>
										<p class="desc">We ensure safe transportation and delivery of products and efficiently manage inventory to provide prompt service to customers.</p>
									</div>
								</li>
								<li>
									<img src="/images/content/img-company-info-05.png" alt="">
									<div class="text-wrap">
										<p class="title">ESG management</p>
										<p class="desc">Using environmental friendly packaging materials, joining social contribution and volunteer activities, these make company members grow.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- !NOTE E : 2024-04 추가 -->
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

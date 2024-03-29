<?
$page_num = "05";
$sub_num = "04";
$page_section = "contact";
$sub_section = "contact";
$page_info = "INFORMATION";
$sub_info = "Contact Us";
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
				<article class="contact-page">
					<article class="map-con">
						<div class="area"><p class="contact-tit">Location</p></div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.77250937573!2d126.88913655798497!3d37.4497297110383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b61092169ed6f%3A0xb553acb894441c48!2z66eI7J207YGs66Gc7JuN7IqkIOy9lOumrOyVhCAo7KO8KQ!5e0!3m2!1sen!2skr!4v1577752213956!5m2!1sen!2skr" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<div class="map-info-wrap">
							<div class="inner area">
								<p class="map-logo"><img src="<?=$site_host?>/images/content/contact_logo.jpg" alt=""></p>
								<table class="map-tbl">
									<tbody>
										<tr>
											<th>Name</th>
											<td>Microworks Korea Co.,Ltd.</td>
										</tr>
										<tr>
											<th>CEO</th>
											<td>Stanley Ahn</td>
										</tr>
										<tr>
											<th>OFFICE</th>
											<td>#614, Ace Gwang-myeong Tower 108, Haan-ro, Gwangmyeong-si, Gyeonggi-do 14319, Korea.</td>
										</tr>
										<tr>
											<th>BRANCH OFFICE</th>
											<td>#512, 1700, Dongil-ro, Nowon-gu, Seoul, Korea</td>
										</tr>
										<tr>
											<th>WEB</th>
											<td>www.microworks.co.kr</td>
										</tr>
										<tr>
											<th>MAIL</th>
											<td>info@microworks.co.kr</td>
										</tr>
										<tr>
											<th>TEL</th>
											<td>82-2-6112-7320</td>
										</tr>
										<!-- <tr>
											<th>자재문의</th>
											<td>02-6112-7328</td>
										</tr> -->
										<tr>
											<th>FAX</th>
											<td>82-2-6112-7321</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</article>
					<article class="contact-con area">
						<p class="contact-tit">Inquiry</p>
						<div class="inner clearfix">
							<div class="img-con"><img src="<?=$site_host?>/images/content/contact_img.jpg" alt=""></div>
							<a href="<?=$site_url?>/contact/inquiry.php" class="txt-con-wrap">
								<div class="txt-con">
									<div class="txt-con-inner">
										<dl>
											<dt><span class="icon"><img src="<?=$site_host?>/images/content/contact_icon.png" alt=""></span></dt>
											<dd>
												<p class="txt">If you have any questions, <br>
																please contact us.</p>
												<span class="go-inquiry-btn"><em>Inquiry +</em></span>
											</dd>
										</dl>
									</div>
								</div>
							</a>
						</div>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

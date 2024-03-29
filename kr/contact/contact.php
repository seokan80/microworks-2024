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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1883.4392426181178!2d126.89136336958634!3d37.4476250639314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dd3871d56bfdd77!2z7JeQ7J207Iqk7ZWY7J207JeU65Oc7YOA7JuMMTDssKg!5e0!3m2!1sko!2skr!4v1574213260813!5m2!1sko!2skr"   frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<div class="map-info-wrap">
							<div class="inner area">
								<p class="map-logo"><img src="<?=$site_host?>/images/content/contact_logo.jpg" alt=""></p>
								<table class="map-tbl">
									<tbody>
										<tr>
											<th>기업명</th>
											<td>마이크로웍스 코리아㈜</td>
										</tr>
										<tr>
											<th>대표이사</th>
											<td>안 철</td>
										</tr>
										<tr>
											<th>본사</th>
											<td>경기도 광명시 하안로 108, 에이스광명타워 614호</td>
										</tr>
										<tr>
											<th>지사</th>
											<td>서울특별시 노원구 동일로 1700, 토마토파르코 512호</td>
										</tr>
										<tr>
											<th>WEB</th>
											<td>www.microworks.com</td>
										</tr>
										<tr>
											<th>메일문의</th>
											<td>info@microworks.co.kr</td>
										</tr>
										<tr>
											<th>대표번호</th>
											<td>02-6112-7320</td>
										</tr>
										<tr>
											<th>자재문의</th>
											<td>02-6112-7328</td>
										</tr>
										<tr>
											<th>FAX</th>
											<td>02-6112-7321</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</article>
					<article class="contact-con area">
						<p class="contact-tit">문의하기</p>
						<div class="inner clearfix">
							<div class="img-con"><img src="<?=$site_host?>/images/content/contact_img.jpg" alt=""></div>
							<a href="<?=$site_url?>/contact/inquiry.php" class="txt-con-wrap">
								<div class="txt-con">
									<div class="txt-con-inner">
										<dl>
											<dt><span class="icon"><img src="<?=$site_host?>/images/content/contact_icon.png" alt=""></span></dt>
											<dd>
												<p class="txt">궁금한 사항은 언제든지<br> 문의주세요.</p>
												<span class="go-inquiry-btn"><em>문의 바로가기 +</em></span>
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

<?
$page_num = "01";
$sub_num = "02";
$page_section = "company";
$sub_section = "ceo";
$page_info = "公司";
$sub_info = "老板问候";
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
									<p class="tit-en">同伴成长</p>
									<p class="tit-kor">“信赖是最基本的成长跳板。”</p>
								</div>
								<div class="txt-box">
									<p class="txt txt01">
										为成为值得信赖的企业,<br>
										总是怀着与客户一起成长，一起前进的心情走过到20年了<br>
										我们将以长期的经验和积累的数据为基础,预测未来的行业发展趋势,经常研究研究,以便为客户提供良好的供应。
									</p>
									<p class="txt txt02">
										日新月异的IT市场，我们努力通过100%验证的企业或者国内，国外一起伙伴合作，最好的交货期来对应。
									</p>
								</div>
								<div class="sign-box">
									<p class="sign-txt">MICROWORKS KOREA CEO</p>
									<img src="<?=$site_host?>/images/content/ceo_sign.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

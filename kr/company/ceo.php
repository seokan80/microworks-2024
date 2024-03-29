<?
$page_num = "01";
$sub_num = "02";
$page_section = "company";
$sub_section = "ceo";
$page_info = "COMPANY";
$sub_info = "CEO 인사말";
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
									<p class="tit-kor">신뢰를 기반으로 <br><b>동반성장</b>해 나아갑니다.</p>
								</div>
								<div class="txt-box">
									<p class="txt txt01">
										마이크로웍스 코리아㈜는 <b>'사람이 답이다'</b> 라는 모토아래 장기근속자가<br>
										전체 직원의 50%가 넘는 사람중심의 회사입니다. <br>
									</p>
									<p class="txt txt02">
										2007년 창사이후 신뢰할수 있는 기업을 목표로 한길만 걸어왔습니다.<br>
										급변하는 IT시장의 환경속에 기술동향 및 차별화된 정보를 제공함으로써 고객사와 동반성장을 위해 최선을 다하고 있으며, 국내외 100% 신뢰할수 있는 글로벌 파트너사와의 릴레이션쉽을 통하여 보다 경쟁력있는 가격과 빠른 대응력으로 고객과 함께하고 있습니다. <br>
										반도체 개발 및 제조까지 성과를 이루어 토탈솔루션 기업으로서 거듭나고 있습니다.<br>
										감사합니다.
									</p>
								</div>
								<div class="sign-box">
									<p class="sign-txt">마이크로웍스코리아㈜   대표이사</p>
									<img src="<?=$site_host?>/images/content/ceo_sign.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

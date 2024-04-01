 <?
$page_num = "02";
$sub_num = "01";
$page_section = "do";
$sub_section = "memory";
$page_info = "WHAT WE DO";
$sub_info = "Memory";
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
				<article class="do-page memory-page area-box">
					<div class="inner clearfix">
						<div class="bg-con"><img src="<?=$site_host?>/images/content/memory_img.jpg" alt=""></div>
						<div class="txt-con">
							<div class="inner">
								<p class="tit">
									빠른 가격변동의 메모리시장에서<br>
									<span class="blue-txt">실시간</span>으로 <span class="red-txt">빠른정보</span>를<br>
									제공해드리고 있습니다.
								</p>
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="txt">
									마이크로웍스 코리아㈜는 메모리,반도체 토탈솔루션제공 기업입니다. <br>
									빠르게 변화하는 메모리 가격변동에 대해, <br>
									가격문의시 정보를 실시간으로 제공하고 있으며, <br>
									홈페이지상에는 한주간의 메모리 가격변동 동향을 확인하실 수 있습니다. <br>
									메모리 가격변동에 대한 정보를 받고자하시는 기업은 요청바랍니다. <br>
								</p>
								<p style="margin-top: 30px;">
									<a href="http://www.microworks.co.kr/kr/product/trend_list.php"><img src="<?=$site_host?>/img/btn_memory.png"></a>
								</p>
							</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

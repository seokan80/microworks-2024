<?
$page_num = "04";
$sub_num = "02";
$page_section = "media";
$sub_section = "profile";
$page_info = "MEDIA";
$sub_info = "Company Profile";
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
				<article class="media-page">
					<div class="area">
						<!-- 
							갤러리 리스트02 들어갑니다. http://makehome.giantsoft.co.kr/board/gallery.php?skin=G02
							view 페이지 대신 pdf가 새창으로 바로 뜹니다.
						-->
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

<?
$page_num = "04";
$sub_num = "01";
$page_section = "media";
$sub_section = "media";
$page_info = "MEDIA";
$sub_info = "Media";
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
							갤러리 리스트10 들어갑니다. http://makehome.giantsoft.co.kr/board/gallery.php?skin=G10 
							클릭시 유튜브가 팝업창으로 뜹니다.
							팝업 페이지 -> media_popup.php
						-->
					</div>			
				</article>	
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

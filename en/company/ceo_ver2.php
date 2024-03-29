<?
$page_num = "01";
$sub_num = "03";
$page_section = "company";
$sub_section = "ceo";
$page_info = "회사소개";
$sub_info = "CEO인사말";
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
				<img src="/images/content/content_ready_img.jpg" alt="현재 페이지는 준비중입니다." style="display:block; margin:0 auto; max-width:100%;" />
				<!-- //컨텐츠 내용 -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

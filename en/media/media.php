<?
$page_num = "05";
$sub_num = "03";
$page_section = "contact";
$sub_section = "contact";
$page_info = "INFORMATION";
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
					<?
					$code = "media";

					switch($bgu){
						case "list":
							include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_list.php";
						break;

						default :
							include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_list.php";
						break;
					}
					?>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

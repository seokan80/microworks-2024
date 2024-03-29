<?
$page_num = "04";
$sub_num = "01";
$page_section = "media";
$sub_section = "profile";
$page_info = "公司简介";
$sub_info = "公司简介";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */
.content-tit{margin-top:80px}
</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<article class="media-page">
					<div class="area">
					<?
					$code = "profile";

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

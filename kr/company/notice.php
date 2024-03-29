<?
$page_num = "05";
$sub_num = "01";
$page_section = "contact";
$sub_section = "notice";
$page_info = "INFORMATION";
$sub_info = "공지사항";
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
				<!-- 
					일반 리스트에서 상단 카테고리 선택 박스와 제목에 카테고리 영역이 추가 되었습니다.
					뷰페이지는 일반뷰페이지입니다.
				-->
				<article class="notice-page area">
					<?
					$code = "notice";

					switch($bgu){
						case "list":
							include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_list.php";
						break;

						case "view":
							include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_view.php";
						break;

						case "write":
							include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_write.php";
						break;

						case "edit":
							include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_edit.php";
						break;

						case "pass":
							include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_passwd.php";
						break;

						default :
							include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_list.php";
						break;
					}
					?>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

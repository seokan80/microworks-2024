<?
$page_num = "05";
$sub_num = "02";
$page_section = "contact";
$sub_section = "miniblog";
$page_info = "联系方式";
$sub_info = "博客";
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

<article class="notice-page area">
<?
$code = "blog";

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
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

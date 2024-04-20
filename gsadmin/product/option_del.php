<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";

//옵션 삭제
if($_GET[idx])	{$idx	=	$tools->filter($_GET[idx]);}
$db->delete("cs_option", "where idx='$idx'");
?>
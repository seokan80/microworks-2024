<?
	include $_SERVER['DOCUMENT_ROOT']."/config.php";
	@include($ROOT_DIR.'/lib/basic_class.php');
	$db = new dbConnect($DB_HOST, $DB_NAME, $DB_USER, $DB_PWD);

	include $_SERVER['DOCUMENT_ROOT']."/lib/function.php";

	$tools = new tools();

	mysql_query("set names utf8");
?>
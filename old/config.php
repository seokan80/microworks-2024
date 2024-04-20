<?
// 최상위 환경설정 파일
$ASAPRO2_PATH 		= '/_asapro2';

// asapro2 환경설정 파일
if(file_exists($_SERVER['DOCUMENT_ROOT'].$ASAPRO2_PATH."/config.php")) include_once $_SERVER['DOCUMENT_ROOT'].$ASAPRO2_PATH."/config.php";
else die("환경설정 파일을 찾을 수 없습니다.");
?>
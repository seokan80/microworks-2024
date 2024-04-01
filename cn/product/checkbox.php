<? session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";

if($_POST['idx'])		{$idx		=	$_POST['idx'];}
if($_POST['table'])	{$table	=	$tools->filter($_POST['table']);}
if($_POST['name'])	{$name	=	$tools->filter($_POST['name']);}
if($_POST['val'])		{$val		=	$tools->filter($_POST['val']);}

/***********************************************************************************************************/

if($name=="delete"){
	for($i=0;$i<count($idx);$i++) {
		
		$db->delete($table,"where idx='$idx[$i]'");
		
	}
}//삭제

?>
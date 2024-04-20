<?
include('../header.php'); 

if($_POST['idx'])		{$idx		=	$_POST['idx'];}
if($_POST['table'])	{$table	=	$tools->filter($_POST['table']);}
if($_POST['name'])	{$name	=	$tools->filter($_POST['name']);}
if($_POST['val'])		{$val		=	$tools->filter($_POST['val']);}

/***********************************************************************************************************/

if($table){
	$db->update($table, "$name='$val' where idx='$idx'");
}

/***********************************************************************************************************/
include('../footer.php');
?>
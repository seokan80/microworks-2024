<form method="get">
<?
$Qs=$_SERVER["QUERY_STRING"];
$Qs=(strlen($Qs)>0)? "?".$Qs:"";
header("Location:https://".$_SERVER[HTTP_HOST]."/en/index.php".$Qs);
?>
</form>
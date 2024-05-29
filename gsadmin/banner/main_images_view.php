<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";
$row=$db->object("cs_banner_main", "where idx='$_GET[idx]'", "title, images_file");
$images_view = "<img src='/data/designImages/$row->images_file' border='0' style='width:100%'/>";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>&nbsp;<?=$row->title;?> 이미지 </TITLE>
</HEAD>
<body bgcolor="FFFFFF" text="000000" leftmargin="0" topmargin="0">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td align="center" valign="middle"><a href="javascript:window.close();" onfocus="this.blur()"><?=$images_view?></a></td>
</tr>
</table>
</body>
</html>

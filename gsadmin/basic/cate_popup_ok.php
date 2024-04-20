<?
include("../header.php");

$table_name = "cs_cate";

if($_GET[mode])		{$mode				=	$tools->filter($_GET[mode]);}		else{$mode	=	$tools->filter($_POST[mode]);}
if($_GET[idx])				{$idx					=	$tools->filter($_GET[idx]);}
if($_GET[code])			{$code				=	$tools->filter($_GET[code]);}			else{$code	=	$tools->filter($_POST[code]);}
if($_GET[name]){
	$name = $tools->filter($_GET[name]);
}else{
	$name = $tools->filter($_POST[name]);
}
if($_GET[name_en]){
	$name_en = $tools->filter($_GET[name_en]);
}else{
	$name_en = $tools->filter($_POST[name_en]);
}
if($_GET[name_ch]){
	$name_ch = $tools->filter($_GET[name_ch]);
}else{
	$name_ch = $tools->filter($_POST[name_ch]);
}
if($mode=="write"){

	$max_no = @mysql_fetch_row($db->result("select max(no) from $table_name where code='$code'"));
	$no = $max_no[0]+1;

	$query = "insert into cs_cate set code='$code', name='$name',name_ch='$name_ch',name_en='$name_en', no='$no'";
	mysql_query($query);

	$tools->alertJavaGo("등록 하였습니다.","cate_popup.php?code=".$code);
}

if($mode=="edit"){

	$query = "update cs_cate set name_ch='$name_ch',name_en='$name_en',name='$name' where idx='$idx'";
	mysql_query($query);

}

include("../footer.php");
?>
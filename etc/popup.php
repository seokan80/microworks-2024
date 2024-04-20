<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";
$popup_stat = $db->object("cs_popup", "where idx='$_GET[idx]'");
$COOKIE_NAME="POPUP_COOKIE_".$popup_stat->idx;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$popup_stat->title_bar;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link href="../css/editor.css" rel="stylesheet" type="text/css">
<link href="../css/font.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
<style type="text/css">
html{overflow:hidden;}
.layer-popup-bottom-con{position:fixed; width:100%; bottom:0; overflow:hidden; height:22px; background-color:#f2f2f2; padding:15px 0}
.left-close-option-txt{float:left; line-height:22px; margin-left:10px; color:#707070; font-size:14px;font-family:"나눔고딕", NanumGothic, "Nanum Gothic","돋움", Dotum, Arial, sans-serif;}
.layer-popup-bottom-con a{margin-right:10px; cursor:pointer;}
</style>

</head>

<script language="JavaScript">
<!--
function setCookie( name, value, expiredays ){
	var todayDate = new Date();
	todayDate.setDate( todayDate.getDate() + expiredays );
	document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

<? if($popup_stat->live==0) {?>
function closeWin(){
	if ( document.popup_form.popup_end.checked ) {
		setCookie( '<?=$COOKIE_NAME;?>', 'NO', 1 );//쿠기 저장 기간은 1일로 한다.
	}
	window.close();
} 
<?} else if($popup_stat->live==1) {?>
function closeWin(){
	if ( document.popup_form.popup_end.checked ) {
		setCookie( '<?=$COOKIE_NAME;?>', 'NO', 365 );//쿠기 저장 기간은 1일로 한다.
	}
	window.close();
} 
<?}?>

function closeGo(url){
	opener.parent.window.location.href='http://'+url;
	window.close();
} 
//-->
</script>
<body>
	<div id="popupContent" class="editor">
		<? if($popup_stat->display==0) {?>
			<?=$tools->strHtml($popup_stat->content);?>
		<?} else if($popup_stat->display==1) {?>
			<? if($popup_stat->link_url) {?>
				<a href="javascript:closeGo('<?=$popup_stat->link_url;?>')">
					<img src='/data/designImages/<?=$popup_stat->popup_images;?>' border='0'>
				</a>
			<?} else {?>
				<img src='/data/designImages/<?=$popup_stat->popup_images;?>' border='0' style="font-size:0">
			<?}?>
		<?}?>
	</div>
	<form name="popup_form">
		<div class="layer-popup-bottom-con">
			<p class="left-close-option-txt">
				<input type=checkbox name="popup_end" onclick="closeWin();">
				<? if($popup_stat->live==0) {?>
					오늘 하루 이창을 열지 않음
				<?} else if($popup_stat->live==1) {?>
					이창은 다시는 띄우지 않음
				<?}?>&nbsp;&nbsp;
			</p>
			<a href="javascript:closeWin();" title="팝업닫기" style="float:right;"><i class="material-icons" style="color:#717171;">&#xE5CD;</i></a>
		</div>
	</form>
</body>
</html>
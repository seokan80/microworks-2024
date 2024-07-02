<?
//////////////////////////////////////////////////////////////// 메인 접속정보및 팝업 소스 S /////////////////////////////////////////////////////////////////////////////
// 접속정보 입력
$db->insert("cs_connect", "ip='$_SERVER[REMOTE_ADDR]', url='$_SERVER[HTTP_REFERER]', register=now()");

//=======       POPUP 창 설정 ==========================================================
$popup_result = $db->select("cs_popup", "");
$now_time=time();
$left = 80;
while($popup_row=@mysql_fetch_object($popup_result)) {
?>
<? if($popup_row->kind==0){ ?>
<?
	if( $_COOKIE['POPUP_COOKIE_'.$popup_row->idx] != 'NO' ) {
		if($popup_row->start_day <=$now_time && $popup_row->end_day >= $now_time) {
			$popup_row->height=$popup_row->height+52;
			echo"<script> window.open('/etc/popup.php?idx=$popup_row->idx','$popup_row->idx','scrollbars=no,width=$popup_row->width,height=$popup_row->height,top=$popup_row->tops,left=$popup_row->lefts'); </script>";	

			$left = $left + $popup_row->width;

		}
	}
?>

<? } else if($popup_row->kind==1){ ?>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />  
<script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

<!-- 레이어POPUP 시작-->
<?
	if( $_COOKIE['POPUP_COOKIE_'.$popup_row->idx] != 'NO' ) {
		if($popup_row->start_day <=$now_time && $popup_row->end_day >= $now_time) {
			//$popup_row->height=$popup_row->height+58;
?>


<!--레이어팝업-->

<script language="JavaScript">

function setcookie<?=$popup_row->idx?>( name, value, expirehours ) {
var todayDate = new Date();
todayDate.setHours( todayDate.getHours() + expirehours );
document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function closeWin<?=$popup_row->idx?>() {
if ( document.notice_form<?=$popup_row->idx?>.chkbox.checked ){
	<? if($popup_stat->live==0) {?>
		setcookie<?=$popup_row->idx?>( "maindiv<?=$popup_row->idx?>", "done" , 24 );
	<?} else if($popup_stat->live==1) {?>
		setcookie<?=$popup_row->idx?>( "maindiv<?=$popup_row->idx?>", "done" , 8760 );
	<?}?>
}
document.all['divpop<?=$popup_row->idx?>'].style.display = "none";

}

</script>

 <!--레이어팝업 끝-->

<script>
$(document).ready(function() {
  $("#divpop<?=$popup_row->idx?>").draggable();
});
</script> 
<style type="text/css">
@media all and (max-width:800px) {
	/* 반응형일때 강제로 왼쪽으로 붙도록 변경 ( 2018-01-12 MH ) */
	.main-layer-popup{left:2% !important; top:2% !important; width:auto !important; max-width:96% !important; height:auto !important; }
	.main-layer-popup .layer-popup-inner-img img{max-width:100%; width:auto; height:auto;}
}
</style>
<div id="divpop<?=$popup_row->idx?>" class="ui-widget-content main-layer-popup" style="height:<?=$popup_row->height?>px; width:<?=$popup_row->width?>px; position:absolute; left:<?=$popup_row->lefts?>px; top:<?=$popup_row->tops?>px; z-index:1000; visibility:hidden; overflow:hidden; -webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px; box-shadow:rgba(134, 134, 134, 0.4) 3px 4px 5px, rgba(134, 134, 134, 0.25) -2px -1px 4px; border:0; ">
	<div class="layer-popup-inner-img">
		<? if($popup_row->display==0) {?>
			<?=$tools->strHtml($popup_row->content);?>
		<?} else if($popup_row->display==1) {?>
			<? if($popup_row->link_url) {?>
				<a href="https://<?=$popup_row->link_url;?>">
					<img src='/data/designImages/<?=$popup_row->popup_images;?>' border='0'>
				</a>
			<?} else {?>
				<img src='/data/designImages/<?=$popup_row->popup_images;?>' border='0'>
			<?}?>
		<?}?>
	</div>
	<form name="notice_form<?=$popup_row->idx?>">
		<div class="layer-popup-bottom-con" style="overflow:hidden; height:22px; background-color:#fff; padding:18px">
			<p class="left-close-option-txt" style="float:left; line-height:22px; color:#707070; font-size:14px;">
				<input type=checkbox name="chkbox" onclick="closeWin<?=$popup_row->idx?>();" style="vertical-align:middle; margin-top:-1px;"><? if($popup_row->live==0) {?>
				오늘 하루 이창을 열지 않음<?} else if($popup_row->live==1) {?>이창은 다시는 띄우지 않음<?}?>&nbsp;&nbsp;
			</p>
			<a href="javascript:closeWin<?=$popup_row->idx?>();" title="팝업닫기" style="float:right;"><i class="material-icons" style="color:#717171;">&#xE5CD;</i></a>
		</div>
	</form>
</div>

<script language="Javascript">
cookiedata = document.cookie;  
if ( cookiedata.indexOf("maindiv<?=$popup_row->idx?>=done") < 0 ){    
    document.all['divpop<?=$popup_row->idx?>'].style.visibility = "visible";
    }
    else {
        document.all['divpop<?=$popup_row->idx?>'].style.visibility = "hidden";
}
</script>

<?
	$left = $left + $popup_row->width;

		}
	}
//=====================================================================================
?>

<!-- 레이어POPUP 끝-->

<? } ?>

<?
}
//////////////////////////////////////////////////////////////// 메인 접속정보및 팝업 소스 E /////////////////////////////////////////////////////////////////////////////
?>

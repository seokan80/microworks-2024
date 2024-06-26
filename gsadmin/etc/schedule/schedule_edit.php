<?
session_cache_limiter("");
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";

$site_url = "http://" . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>일정관리</title>
    <link href="<?=$site_url?>/gsadmin/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
.page-header{
	margin:10px 0 10px;
}
</style>
  </head>
<?
//관리자 확인
if( !$_SESSION[ADMIN_USERID] || !$_SESSION[ADMIN_PASSWD]) { $tools->alertJavaGo('경고! 잘못된 접근입니다\n\n로그인 하세요', '/gsadmin/');}
?>

<body>

<?
$row = $db->object("cs_schedule","where idx='$idx'");
?>

	<div class="col-md-12" >
		<div class="page-header" style="font-weight:bold"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> 일정 : <?=$row->calendar_date?></div>

		<form name="tx_editor_form" action="schedule_ok.php" method="post">
		<input type="hidden" name="mode" value="edit">
		<input type="hidden" name="idx" value="<?=$idx?>">
		<table class="table table-bordered">
		<colgroup>
		<col width="15%">
		<col width="*">
		</colgroup>
		<tbody>
		<tr>
			<th>제 목</th>
			<td><input name="subject" type="text" class="form-control" value="<?=$row->subject?>"></td>
		</tr>
		<tr>
			<th>내 용</th>
			<td><textarea name="content" class="form-control" rows="20"><?=$row->content?></textarea></td>
		</tr>
		</tbody>
		</table>
		</form>

		<table class="table">
			<tr>
				<td class="text-center">
					<button type="button" class="btn btn-primary btn-sm" onClick="sendit();">수 정</button>&nbsp;
					<button type="button" class="btn btn-danger btn-sm" onClick="del('<?=$row->idx?>');">삭 제</button>
				</td>
			</tr>
		</table>

	</div>

<script type="text/javascript">
<!--
function sendit() {
	var form=document.tx_editor_form;
	if(form.subject.value=="") {
		alert("제목을 입력해 주세요.");
		form.subject.focus();
	}else if(form.content.value=="") {
		alert("내용을 입력해 주세요.");
		form.content.focus();
	} else {
		form.submit();
	}
}

function del(idx){
	var form=document.tx_editor_form;
	ans = confirm("[삭제] 하시겠습니까?");
	if(ans==true){
		form.action = "./schedule_ok.php?mode=delete&idx="+idx;
		form.submit();	
	}
}
//-->
</script>

</body>
</html>
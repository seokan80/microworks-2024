<?
include ("../header2.php");
?>

<script language=javascript>
<!--
function sendit() {
	var f=document.pop_form;
	if(f.name.value=="") {
		alert("카테고리명을 입력해주세요.");
		f.name.focus();
	} else {
		f.submit();
	}
}

//수정
function popupEdit(code,idx){
	var name = $('#cate'+idx).val();
	var name_en = $('#cate'+idx+"_en").val();
	var name_ch = $('#cate'+idx+"_ch").val();
	var mode = "edit";
	var choose = confirm( '[수정] 하시겠습니까?');
	if(choose) {
	$.ajax({
		type: "GET",
		url : "cate_popup_ok.php",
		data: 
			{
			"idx":idx,
			"name":name,
			"name_en":name_en,
			"name_ch":name_ch,
			"mode":mode
			}, 
		success:function(){
			location.reload();
		}
	});
	}else { return; }
}

// 삭제
function popupDel(code,idx) {
	var choose = confirm( '[삭제] 하시겠습니까?');
		if(choose) {	location.href='cate_popup_del.php?code='+code+'&idx='+idx; }
		else { return; }
}
//-->
</script>

<div class="col-md-12" >

	<h4 class="page-header">카테고리관리</h4>

	<form name="pop_form" method="post" action="cate_popup_ok.php" onsubmit="return false" onkeypress="if(event.keyCode==13){sendit();return false;}">
	<table class="table table-bordered table-hover ">
		<col width="30%">
		<col width="*">
		<col width="20%">
		<input type="hidden" name="mode" value="write">
		<input type="hidden" name="code" value="<?=$code?>">
		<tr>
			<th>
				카테고리 국문표기
			</th>
			<td>
				<input type="text" class="form-control"name="name" placeholder="추가하는 카테고리를 입력해주세요.">
			</td>
			<th rowspan="3">
				<button type="button" class="btn btn-default" onClick="sendit();">등록</button>
			</th>
		</tr>
		<tr>
			<th>
				카테고리 영문표기
			</th>
			<td>
				<input type="text" class="form-control"name="name_en" placeholder="추가하는 카테고리를 입력해주세요.">
			</td>
		</tr>
		<tr>
			<th>
				카테고리 중문표기
			</th>
			<td>
				<input type="text" class="form-control"name="name_ch" placeholder="추가하는 카테고리를 입력해주세요.">
			</td>
		</tr>
		</form>
	</table>
	<form name="form_edit" method="post" action="cate_popup_ok.php">
	<input type="hidden" name="mode" value="edit">
	<table class="table table-bordered table-hover ">
	<colgroup>
	<col width="10%">
	<col width="*">
	<col width="20%">
	</colgroup>
	<thead>
	<tr>
		<th>N O</th>
		<th>카테고리</th>
		<th>관리</th>
	</tr>
	</thead>
	<tbody>
	<?
	$no=1;
	$rs = $db->select("cs_cate","where code='$code' order by idx asc");
	while($row = mysql_fetch_array($rs)){
	?>
	<tr>
		<td class="text-center"><?echo $no?></td>
		<td class="text-center">
			<input type="text" name="name" class="form-control input-sm"  id="cate<?=$row[idx]?>" value="<?=$row[name]?>">
			<input type="text" name="name_en" class="form-control input-sm"  id="cate<?=$row[idx]?>_en" value="<?=$row[name_en]?>">
			<input type="text" name="name_ch" class="form-control input-sm"  id="cate<?=$row[idx]?>_ch" value="<?=$row[name_ch]?>">
		</td>
		<td class="text-center">
			<button type="button" class="btn btn-primary btn-xs" onClick="popupEdit('<?=$row[code]?>','<?=$row[idx]?>');">수정</button>&nbsp;|&nbsp;
			<button type="button" class="btn btn-danger btn-xs" onClick="popupDel('<?=$row[code]?>','<?=$row[idx]?>');">삭제</button>
		</td>
	</tr>
	<? 
	$no++;	
	} 
	?>			
	</tbody>
	</table>
	</form>

</div>

<?
include ("../footer2.php");
?>
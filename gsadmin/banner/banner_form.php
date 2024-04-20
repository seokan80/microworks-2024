<?
$mod	= "banner";	
$menu	= "banner";
include("../header.php");

$row = $db->object("cs_banner","where idx='$idx'");

if($row->idx) { 
	$page_mode = "수정";
	$mode = "edit";
}else{
	$page_mode = "등록";
	$mode = "write";
}
?>

	<h4 class="page-header">홈/제품 배너 (<?=$page_mode?>)</h4>

	<form method="post" action="banner_ok.php" name="tx_editor_form" ENCTYPE="multipart/form-data">
	<input type="hidden" name="returnURL" value="<?=$returnURL?>">
	<input type="hidden" name="mode" value="<?=$mode?>">
	<input type="hidden" name="idx" value="<?=$row->idx?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>

	<tr>
		<th>카테고리</th>
		<td>
			<select name="cate" class="form-control2">
			<option value="">선택</option>
			<?
				$rsc = $db->select("cs_cate","where code='banner' order by idx asc");
				while($rowc = mysql_fetch_array($rsc)){
			?>
			<option value="<?=$rowc[idx]?>" <?if($rowc[idx]==$row->cate){echo "selected";}?>><?=$rowc[name]?></option>
			<?}?>
			</select>
		</td>
	</tr>
	<tr> 
		<th>노출여부</th>
		<td>
			<label class="radio-inline"><input type="radio" name="display" value="1" <?if(empty($row->idx) || $row->display){echo "checked";}?>>노출</label>
			<label class="radio-inline"><input type="radio" name="display" value="0" <?if($row->idx &&empty($row->display)){echo "checked";}?>>미노출</label>
		</td>
	</tr>
	<tr>
		<th>제 목</th>
		<td><input name="subject" class="form-control" value="<?=$row->subject?>"></td>
	</tr>
	<tr>
		<th>링 크</th>
		<td>http://<input type="text" name="link_url" class="form-control" value="<?=$row->link_url?>"></td>
	</tr>
	<tr>
		<th>링크열기</th>
		<td>
			<label class="radio-inline"><input type="radio" name="link_open" value="1" <?if($row->link_open==1){ echo "checked";}?>  <?if(empty($row->idx)){ echo "checked";}?>> 새 창에서 열기</label>
			<label class="radio-inline"><input type="radio" name="link_open" value="2" <?if($row->link_open==2){ echo "checked";}?>> 현재 창에서 열기</label>
			<label class="radio-inline"><input type="radio" name="link_open" value="3" <?if($row->link_open==3){ echo "checked";}?>> 링크 없음</label>
		</td>
	</tr>
	<tr>
		<th>이미지</th>
		<td>
		<?
			if($row->bbs_file){
				echo "<img src='../../data/bbsData/$row->bbs_file' class='img-thumbnail'>";
				echo "<p></p>";
				echo '<label class="checkbox-inline"><input type="checkbox" name="imdel1" value="y">삭제</label><p></p>';
			}
		?>
		<input type="file" name="bbs_file">
		</td>
	</tr>
	</tbody>	
	</table>
	</form>

	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="sendit();">등록</button>
				<a href="<?echo $returnURL? $returnURL:"banner.php";?>" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>

<script type="text/javascript">
<!--
function sendit() {
	var f=document.tx_editor_form;

	if(f.cate.value=="") {
		alert("카테고리를 선택해 주세요.");
		f.cate.focus();
	}else if(f.subject.value=="") {
		alert("제목을 입력해 주세요.");
		f.subject.focus();
	} else {
		f.submit();
	}
}
//-->
</script>

<? include('../footer.php');?>
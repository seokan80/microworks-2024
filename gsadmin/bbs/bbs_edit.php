<?
$mod	= "bbs";	
include("../header.php");

// 게시판 환경
$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_cate, bbs_pds, bbs_pds_ea, header, footer, bbs_secret, editor,bbs_type");
$bbs_stat	= $db->object("cs_bbs_data", "where idx=$idx");

if($bbs_admin_stat->editor==1){
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";
}
if($code=="trend_list"){
	$write_url = "excel_edit_ok.php";
}else if($code=="oem"||$code=="stock"){
	$write_url = "excel_edit_b_new_ok.php";
}else{
	$write_url = "bbs_edit_ok.php";
}
?>


	<form name="tx_editor_form" id="tx_editor_form" action="<?=$write_url?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="returnURL" value="<?=$returnURL;?>">
	<input type="hidden" name="code" value="<?=$code;?>">
	<input type="hidden" name="idx" value="<?=$bbs_stat->idx;?>">
	<input type="hidden" name="pwd" value="<?=$bbs_stat->pwd;?>">
	<input type="hidden" name="name" value="<?=$bbs_stat->name;?>">
	<input type="hidden" name="ex_code" value="<?=$bbs_stat->ex_code;?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<?if($code=="trend_list"){ } else { ?>
	<tr>
		<th>
			언 어
			<?if($code=="trend_list"){?>
				<br><small>해당 게시판은 언어에 관계없이 노출됩니다.</small>
			<?}?>
		</th>
		<td>
			<select name="lang" class="form-control2">
				<option value="1" <?if($bbs_stat->lang==1){echo "selected";}?>>국문</option>
				<option value="2" <?if($bbs_stat->lang==2){echo "selected";}?>>영문</option>
				<option value="3" <?if($bbs_stat->lang==3){echo "selected";}?>>중문</option>
			</select>
		</td>
	</tr>
	<? } ?>
	<?
	/*****카테고리*****/
	if($bbs_admin_stat->bbs_cate==1) {?>
	<tr>
		<th>카테고리</th>
		<td>
			<select name="cate" class="form-control2">
			<option value="">선택</option>
			<?
				$rsc = $db->select("cs_cate","where code='$code' order by idx asc");
				while($rowc = mysql_fetch_array($rsc)){
			?>
			<option value="<?=$rowc[idx]?>" <?if($rowc[idx]==$bbs_stat->cate){ echo "selected";}?>><?=$rowc[name]?></option>
			<?}?>
			</select>
		</td>
	</tr>
	<? } ?>
	<tr>
		<th>제 목</th>
		<td><input type="text" name="subject" class="form-control" value="<?=$bbs_stat->subject;?>"></td>
	</tr>
	<?if($code==""){?>
		<tr>
			<th>Quantity</th>
			<td>
				<input type="text" name="attr_1" class="form-control" value="<?=$bbs_stat->attr_1?>">
			</td>
		</tr>
		<tr>
			<th>MFR</th>
			<td>
				<input type="text" name="attr_2" class="form-control" value="<?=$bbs_stat->attr_2?>">
			</td>
		</tr>
		<tr>
			<th>D/C</th>
			<td>
				<input type="text" name="attr_3" class="form-control" value="<?=$bbs_stat->attr_3?>">
			</td>
		</tr>
		<tr>
			<th>Remark</th>
			<td>
				<input type="text" name="attr_4" class="form-control" value="<?=$bbs_stat->attr_4?>">
			</td>
		</tr>
	<?}?>
	<?if($code=="trend_list"){?>
		<tr>
			<th>그래프 제목</th>
			<td><input type="text" name="subject2" class="form-control" value="<?=$bbs_stat->subject2?>"></td>
		</tr>
		<tr>
			<th>기준날짜</th>
			<td>
				<table border="0" cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
					<td>
						<div class="input-group datetime">
							<input type="text" name="stan_date" class="form-control input-sm text-center" value="<?=$bbs_stat->stan_date?>">
							<span class="input-group-addon">
								<span class="glyphicon-calendar glyphicon"></span>
							</span>
						</div>		
					</td>
					<td>
					&nbsp;&nbsp;<select name="week" class="form-control2"> 
					<? for($i=1;$i<53;$i++){ ?>
					<option value="<?=$i?>" <? if($i==$bbs_stat->week){ echo "selected"; } ?>><?=$i?></option>
					<? } ?>
					</select>
					주
					</td>
				</tr>
				</tbody>
				</table>
			</td>
		</tr>
	<?}?>
	<?if($code=="media"){?>
		<tr>
			<th>Video URL</th>
			<td>
				<input type="text" name="link_url" class="form-control" placeholder="https://xxxxx.xxxx/xxx?xxx=xxx" value="<?=$bbs_stat->link_url?>">
			</td>
		</tr>
	<?}?>
	<?
	/*****비밀글*****/
	if($bbs_admin_stat->bbs_secret==1){ ?>
	<tr>
		<th>비밀글</th>
		<td><label class="checkbox-inline"><input type="checkbox" name="secret"  value="y" <? if($bbs_stat->secret=="y"){ echo "checked"; } ?>>(비밀글 기능 사용시 체크 해 주세요)</label></td>
	</tr>
	<? } ?>
	</tbody>
	</table>


	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<? if($bbs_admin_stat->editor==1){ ?>
		<tr>
			<td align="center" colspan='2'>
				<?
					$table_name	= "cs_bbs_data";
					$table_idx		= $bbs_stat->idx;

					$plupload_que = "select url,filename from cs_plupload where table_name='$table_name' and table_idx='$table_idx' order by idx";
					$result_plupload = mysql_query($plupload_que);
					$total_plupload = mysql_affected_rows();
				?>
				<textarea id="contents_source" style="display:none;"><?=$tools->strHtmlNoBr($bbs_stat->content);?></textarea>
				<?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?>
			</td>
		</tr>
	<?}else{?>
		<tr <?if($code=="media"||$code=="profile"||$code=="trend_list"||$code=="stock"||$code=="oem"){?>style="display:none"<?}?>>
			<th>내용</th>
			<td><textarea name="content" rows="20" class="form-control"><?=$tools->strHtmlNoBr($bbs_stat->content);?></textarea></td>
		</tr>
	<?}?>

	<?
	/*****공지기능*****/
	if($bbs_admin_stat->bbs_type==2) {?>
	<tr <?if($code=="trend_list"||$code=="stock"||$code=="oem"){echo "style='display:none'";}?>>
		<th>공지기능</th>
		<td>
			<label class="radio-inline"><input type="radio" name="notice" value="1" <? if( $bbs_stat->notice==1 ) echo("checked"); ?>>사용</label>
			<label class="radio-inline"><input type="radio" name="notice" value="0" <? if( $bbs_stat->notice==0 ) echo("checked"); ?>>미사용</label>
		</td>
	</tr>
	<? } ?>

	<?
	/*****썸네일 업로드*****/
	if( $bbs_admin_stat->bbs_type==3) { ?>
	<tr>
		<th>썸네일<br><small>리스트 이미지 (최대 5MB)</small></small></th>
		<td>
			<? if($bbs_stat->sum_file){ ?>
				<img src="../../data/bbsData/<?=$bbs_stat->sum_file?>" class='img-thumbnail'>
				<p></p>
				<?=$bbs_stat->sum_sfile?>&nbsp;&nbsp;
				<label class="checkbox-inline"><input type="checkbox" name="sumdel" value="y">삭제</label><br>
			<? } ?>
			&nbsp;<input type="file" name="sum_file" >
		</td>
	</tr>
	<? } ?>

	<?
	/*****파일 업로드*****/
	if( $bbs_admin_stat->bbs_pds ) {
		if($bbs_admin_stat->bbs_pds_ea==1){ ?>
			<?if($code=="trend_list"||$code=="oem"||$code=="stock"){?>
				<tr>
					<th>엑셀파일<br>
					<? if($code=="trend_list"){ ?>
					(샘플엑셀 : <a href="sample.xls">sample.xls</a>)<br>
					(확장자 xls 파일만 업로드 가능)
					<? } else if($code=="stock"){ ?>
					(샘플엑셀 : <a href="sample_stock.xls">sample_stock.xls</a>)<br>
					(확장자 xls,xlsx 파일만 업로드 가능)
					<? } else if($code=="oem"){ ?>
					(샘플엑셀 : <a href="sample_oem.xls">sample_oem.xls</a>)<br>
					(확장자 xls,xlsx 파일만 업로드 가능)
					<? } ?>
					</th>
					<td>
					<?if($bbs_stat->sbbs_file){ ?>&nbsp;<?=$bbs_stat->sbbs_file?>&nbsp;&nbsp;
						<label class="checkbox-inline"><input type="checkbox" name="imdel1" value="y">삭제</label><br>
					<?}?>
					&nbsp;<input type="file" name="exceilFile" ></td>
				</tr>

			<?}else{?>
				<tr>
					<th>첨부파일</th>
					<td>
					<? if($bbs_stat->sbbs_file){ ?>&nbsp;<?=$bbs_stat->sbbs_file?>&nbsp;&nbsp;
						<label class="checkbox-inline"><input type="checkbox" name="imdel1" value="y">삭제</label><br>
					<? } ?>
					&nbsp;<input type="file" name="bbs_file" ></td>
				</tr>
			<?}?>
		<?}else{?>
			<? for($i=1;$i<=$bbs_admin_stat->bbs_pds_ea;$i++){ ?>
				<tr>
					<th>첨부파일 #<?=$i?></th>
					<td>
					<? if($i==1){ ?>
					<? if($bbs_stat->sbbs_file){ ?>&nbsp;<?=$bbs_stat->sbbs_file?>&nbsp;&nbsp;
						<label class="checkbox-inline"><input type="checkbox" name="imdel1" value="y">삭제</label><br>
					<? } ?>
					&nbsp;<input type="file" name="bbs_file" >
					<? } else { ?>
					<?
					if($i==2){ $bbsf = $bbs_stat->sbbs_file2; }
					if($i==3){ $bbsf = $bbs_stat->sbbs_file3; }
					if($i==4){ $bbsf = $bbs_stat->sbbs_file4; }
					if($i==5){ $bbsf = $bbs_stat->sbbs_file5; }
					if($bbsf){ ?>&nbsp;<?=$bbsf?>&nbsp;<input type="checkbox" name="imdel<?=$i?>" value="y">삭제<br><? } ?>
					&nbsp;<input type="file" name="bbs_file<?=$i?>" >
					<? } ?>
					</td>
				</tr>
			<?}
		}
	}?>

	</tbody>
	</table>


	<table class="table">
		<tr>
			<td class="text-center">
				<?if($bbs_admin_stat->editor==1){?>
				<button type="button" class="btn btn-primary" onClick="Editor.save();">등록</button>
				<?}else{?>
				<button type="button" class="btn btn-primary" onClick="sendit();">등록</button>
				<?}?>
				<a href="<?echo $returnURL? $returnURL:"bbs_list.php";?>" class="btn btn-default">목록</a>
			 </td>
		</tr>
	</table>

	</form>


<?if($bbs_admin_stat->editor==1){?>
<script src="<?=$site_host?>/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
<!--
function validForm(editor) {
	var validator = new Trex.Validator();
	var content = editor.getContent();

	<?if($bbs_admin_stat->bbs_cate==1){?>
	if (document.tx_editor_form.cate.value =="") {
		alert('카테고리를 선택해주세요.');
		document.tx_editor_form.cate.focus();
		return false;
	}
	<?}?>

	if (document.tx_editor_form.subject.value =="") {
		alert('제목을 입력해 주세요');
		document.tx_editor_form.subject.focus();
		return false;
	}

	if (!validator.exists(content)) {
		$("#contents_validate").html('내용을 입력해주세요.');
		Editor.focus();
		return false;
	}
	return true;
}
//-->
</script>
<?}else{?>
<script type="text/javascript">
<!--
function sendit() {
	var form=document.tx_editor_form;
	if(form.subject.value=="") {
		alert("제목을 입력해 주세요.");
		form.subject.focus();
	}else{
		form.submit();
	}
}
//-->
</script>
<?}?>


<? include("../footer.php");?>
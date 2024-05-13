<?
$mod	= "bbs";	
include ("../header.php");

// 게시판 환경
$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_cate, bbs_pds, bbs_pds_ea, header, footer, bbs_secret,editor,bbs_type");
if( $_GET[reWrite] ) {
  	$view_row		= $db->object("cs_bbs_data", "where idx=$idx");
	//$subject2			= "[답글]".$db->stripSlash($view_row->subject);
	$subject2			= "답변입니다.";
	$content			= $db->stripSlash($view_row->content);
	$re_content		= "$view_row->name 님 쓰신글\n\n"."제목 : ".$view_row->subject."\n".$content."<br><br>"."[답변]<br><br>";
}

if($bbs_admin_stat->editor==1){
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";
}
if($code=="trend_list"){
	$write_url = "excel_write_ok.php";
}else if($code=="stock"||$code=="oem"){
	$write_url = "excel_write_b_new_ok.php";
}else{
	$write_url = "bbs_write_ok.php";
}

// #202405 공지사항 추가
$currentDate = date('Y-m-d');
$lastDate = '2099-12-31';
?>


	<form name="tx_editor_form" id="tx_editor_form" class="form-horizontal"  action="<?=$write_url?>" method="post" enctype="multipart/form-data" >
	<input type="hidden" name="returnURL" value="<?=$returnURL;?>">
	<input type="hidden" name="code" value="<?=$code;?>">
	<input type="hidden" name="ref" value="<?=$view_row->ref;?>">
	<input type="hidden" name="re_step" value="<?=$view_row->re_step;?>">
	<input type="hidden" name="re_level" value="<?=$view_row->re_level;?>">
	<input type="hidden" name="pwd" value="<?=$admin_stat->admin_passwd ;?>">
	<input type="hidden" name="name" value="관리자">

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
		</th>
		<td>
			<select name="lang" class="form-control2">
				<option value="1">국문</option>
				<option value="2">영문</option>
				<option value="3">중문</option>
			</select>
		</td>
	</tr>
	<? } ?>
	<?
	/*****카테고리*****/
	if($bbs_admin_stat->bbs_cate==1){?>
	<tr>
		<th>카테고리</th>
		<td>
			<select name="cate" class="form-control2">
				<option value="">선택</option>
				<?$rsc = $db->select("cs_cate","where code='$code' order by idx asc");
				while($rowc = mysql_fetch_array($rsc)){?>
					<option value="<?=$rowc[idx]?>"><?=$rowc[name]?></option>
				<?}?>
			</select>
		</td>
	</tr>
	<?}?>

	<tr>
		<th>제 목</th>
		<td><input type="text" name="subject" class="form-control" value="<?=$subject2?>"></td>
	</tr>
    <!-- #202405 공지사항 추가 -->
    <?if($code=="notice"){?>
    <tr>
      <th>게시기간 사용여부</th>
      <td>
        <input type="hidden" name="period_yn"/>
        <label class="radio-inline"><input type="radio" name="period" value="Y" onClick="enabledDate();">사용</label>
        <label class="radio-inline"><input type="radio" name="period" value="N" onClick="disabledDate();" checked>미사용</label>
      </td>
    </tr>
    <tr>
      <th>게시기간</th>
      <td>
        <div class="input-group datetime" style="display: inline-flex;">
          <input type="text" name="period_start_date" class="form-control input-sm text-center" readonly/>
          <span class="input-group-addon" style="display: table;">
            <span class="glyphicon-calendar glyphicon"></span>
          </span>
        </div>
        ~
        <div class="input-group datetime" style="display: inline-flex;">
          <input type="text" name="period_end_date" class="form-control input-sm text-center" readonly/>
          <span class="input-group-addon" style="display: table;">
            <span class="glyphicon-calendar glyphicon"></span>
          </span>
        </div>
      </td>
    </tr>
    <?}?>
	<?if($code==""){?>
		<tr>
			<th>Quantity</th>
			<td>
				<input type="text" name="attr_1" class="form-control">
			</td>
		</tr>
		<tr>
			<th>MFR</th>
			<td>
				<input type="text" name="attr_2" class="form-control">
			</td>
		</tr>
		<tr>
			<th>D/C</th>
			<td>
				<input type="text" name="attr_3" class="form-control">
			</td>
		</tr>
		<tr>
			<th>Remark</th>
			<td>
				<input type="text" name="attr_4" class="form-control">
			</td>
		</tr>
	<?}?>
	<?if($code=="trend_list"){?>
		<tr>
			<th>그래프 제목</th>
			<td><input type="text" name="subject2" class="form-control" value=""></td>
		</tr>
		<tr>
			<th>기준날짜</th>
			<td>
				<table border="0" cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
					<td>
						<div class="input-group datetime">
							<input type="text" name="stan_date" class="form-control input-sm text-center">
							<span class="input-group-addon">
								<span class="glyphicon-calendar glyphicon"></span>
							</span>
						</div>		
					</td>
					<td>
					&nbsp;&nbsp;
					<select name="week" class="form-control2"> 
					<? for($i=1;$i<53;$i++){ ?>
					<option value="<?=$i?>"><?=$i?></option>
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
				<input type="text" name="link_url" class="form-control" placeholder="https://xxxxx.xxxx/xxx?xxx=xxx">
			</td>
		</tr>
	<?}?>
	<?
	/*****비밀글*****/
	if($bbs_admin_stat->bbs_secret==1){ ?>
	<tr>
		<th>비밀글</th>
		<td><label class="checkbox-inline"><input type="checkbox" class="uniform" name="secret"  value="y">(비밀글 기능 사용시 체크 해 주세요)</label></td>
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
			<td colspan="2">
				<textarea id="contents_source" style="display:none;"><?=$re_content;?></textarea>
				<?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?>
			</td>
		</tr>
	<?}else{?>
		<tr <?if($code=="media"||$code=="profile"||$code=="trend_list"||$code=="stock"||$code=="oem"){?>style="display:none"<?}?>>
			<th>내용</th>
			<td><textarea name="content" rows="20" class="form-control"></textarea></td>
		</tr>
	<?}?>

	<?
	/*****공지기능*****/
	if($bbs_admin_stat->bbs_type==2){?>
	<tr <?if($code=="trend_list"||$code=="stock"||$code=="oem"){echo "style='display:none'";}?>>
		<th>공지기능</th>
		<td>
			<label class="radio-inline"><input type="radio" name="notice" value="1">사용</label>
			<label class="radio-inline"><input type="radio" name="notice" value="0" checked>미사용</label>
		</td>
	</tr>
	<?}?>

	<?
	/*****썸네일 업로드*****/
	if( $bbs_admin_stat->bbs_type==3){?>
		<tr>
			<th>썸네일<br><small>리스트 이미지 (최대 5MB)</small></th>
			<td><input type="file" name="sum_file" ></td>
		</tr>
	<?}?>
	<?
	/*****파일 업로드*****/
	if( $bbs_admin_stat->bbs_pds ) {
		if($bbs_admin_stat->bbs_pds_ea==1){?>
			<?if($code=="trend_list"||$code=="stock"||$code=="oem"){?>
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
					</td>
					<td><input type="file" name="exceilFile" ></td>
				</tr>
			<?}else{?>
				<tr>
					<th>첨부파일</td>
					<td><input type="file" name="bbs_file" ></td>
				</tr>
			<?}?>
	<? } else { ?>
	<? for($i=1;$i<=$bbs_admin_stat->bbs_pds_ea;$i++){ ?>
	<tr>
		<th>첨부파일 #<?=$i?></th>
		<td>
		<? if($i==1){ ?>
		<input type="file" name="bbs_file" >
		<? } else { ?>
		<input type="file" name="bbs_file<?=$i?>">
		<? } ?>
		</td>
	</tr>
	<?} } }?>

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
<script src="/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
<!--
// #202405 공지사항 추가
<?if($code=="notice"){?>
$(document).ready(function () {
    disabledDate();
});
<?}?>

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
		alert('제목을 입력해 주세요.');
		document.tx_editor_form.subject.focus();
		return false;
	}

	if (!validator.exists(content)) {
		$("#contents_validate").html('내용을 입력해주세요.');
		Editor.focus();
		return false;
	}

	ans = confirm("[등록] 하시겠습니까?");
	if(ans==true){
    // #202405 공지사항 추가
    <?if($code=="notice"){?>
        document.tx_editor_form.period_start_date.disabled = false;
        document.tx_editor_form.period_end_date.disabled = false;
    <?}?>
	return true;
	}
}
// #202405 공지사항 추가
<?if($code=="notice"){?>
    function disabledDate() {
        document.tx_editor_form.period_yn.value = 'N';
        document.tx_editor_form.period_start_date.value='<?=$currentDate?>';
        document.tx_editor_form.period_end_date.value='<?=$lastDate?>';
        document.tx_editor_form.period_start_date.disabled = true;
        document.tx_editor_form.period_end_date.disabled = true;
        document.tx_editor_form.period_start_date.style = 'background:#eee';
        document.tx_editor_form.period_end_date.style = 'background:#eee';
    }
    function enabledDate() {
        document.tx_editor_form.period_yn.value = 'Y';
        document.tx_editor_form.period_start_date.disabled = false;
        document.tx_editor_form.period_end_date.disabled = false;
        document.tx_editor_form.period_start_date.style = 'background:#fff';
        document.tx_editor_form.period_end_date.style = 'background:#fff';
    }
<?}?>
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


<? include('../footer.php');?>

<?
$mod	= "banner";	
$menu	= "popup";
include ("../header.php");
include($ROOT_DIR.'/lib/style_class.php');
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";
?>

<!-- !NOTE : 신규 -->
<h4 class="page-header">배너(등록)</h4>

<form name="tx_editor_form" id="tx_editor_form" action="popup_add_ok.php" method="post" enctype="multipart/form-data">
	enctype="multipart/form-data">
	<table class="table table-bordered">
		<colgroup>
			<col width="15%">
			<col width="*">
		</colgroup>
		<tbody>
			<tr>
				<th>제목</th>
				<td>
					<input type="text" name="title" class="form-control" value="">
				</td>
			</tr>
			<tr>
				<th>구분</th>
				<td>
					<label class="radio-inline"><input type="radio" name="direction" value="">좌</label>
					<label class="radio-inline"><input type="radio" name="direction" value="">우</label>
				</td>
			</tr>
			<tr>
				<th>우선순위</th>
				<td>
					<input type="text" name="first-order" class="form-control" value="">
				</td>
			</tr>
			<tr>
				<th>게시기간 사용여부</th>
				<td>
					<label class="radio-inline"><input type="radio" name="post-duration" value="">사용</label>
					<label class="radio-inline"><input type="radio" name="post-duration" value="">미사용</label>
				</td>
			</tr>
			<tr>
				<th>게시기간</th>
				<td>
					<div class="form-group">
						<div class="input-group datetime">
							<input type="text" name="duration_sday" class="form-control input-sm text-center" value="">
							<span class="input-group-addon">
								<span class="glyphicon-calendar glyphicon"></span>
							</span>
						</div>
						~
						<div class="input-group datetime">
							<input type="text" name="duration_eday" class="form-control input-sm text-center"
								value="2024-04-22">
							<span class="input-group-addon">
								<span class="glyphicon-calendar glyphicon"></span>
							</span>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>URL</th>
				<td>
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<colgroup>
							<col width="50">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<td>
									http://
								</td>
								<td>
									<input type="text" name="url" class="form-control" value="">
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<th>이미지</th>
				<td>
					<input type="file" name="bbs_file">
				</td>
			</tr>
			<tr>
				<td colspan="2">※ 이미지 업로드 시 링크URL을 입력하시면 이미지를 클릭할 경우 해당페이지로 이동시킵니다.</td>
			</tr>
		</tbody>
	</table>
</form>

	<p class="popup_images" style="display:none;">※ 이미지 업로드시 URL 을 입력하시면 이미지를 클릭할 경우 해당페이지로 이동시킵니다. </p>
	
	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="Editor.save();">등록</button>
				<a href="./popup.php" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>


<script src="/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script language="JavaScript">
<!--
popupReg();
/*팝업 종류*/
function popupReg(){
	var form=document.tx_editor_form;
	if( form.kind[2].checked ) {
		$(".popup_view").css("display","none");
		$(".popup_mobile").css("display","");
		form.display[1].checked = true;
		form.display[0].disabled= true;
		popupReg2();		
	}else{
		form.display[0].disabled= false;
		$(".popup_view").css("display","");
		$(".popup_mobile").css("display","none");
		popupReg2();
	}
}
/*형태 선택*/
function popupReg2() {
	var form=document.tx_editor_form;
	if( form.display[0].checked ) {
		$(".popup_html").css("display","");
		$(".popup_images").css("display","none");
	} else if( form.display[1].checked ) {
		$(".popup_html").css("display","none");
		$(".popup_images").css("display","");		
	}
}

/*폼체크*/	
function validForm(editor) {
	var validator = new Trex.Validator();
	var content = editor.getContent();

		if (document.tx_editor_form.start_day.value == '') {
			alert('기간설정 [시작일]을 선택해 주세요.');
			document.tx_editor_form.start_day.focus();
			return false;
		}
		if (document.tx_editor_form.end_day.value == '') {
			alert('기간설정 [시작일]을 선택해 주세요.');
			document.tx_editor_form.end_day.focus();
			return false;
		}
		if (document.tx_editor_form.width.value == '' && document.tx_editor_form.kind[2].checked==false) {
			alert('팝업창 사이즈[가로]를 입력해 주세요.');
			document.tx_editor_form.width.focus();
			return false;
		}
		if (document.tx_editor_form.height.value == '' && document.tx_editor_form.kind[2].checked==false) {
			alert('팝업창 사이즈[세로]를 입력해 주세요.');
			document.tx_editor_form.height.focus();
			return false;
		}
		if (document.tx_editor_form.title_bar.value == '') {
			alert('팝업 제목을 입력해 주세요.');
			document.tx_editor_form.title_bar.focus();
			return false;
		}
		
		/*
		if (!validator.exists(content)) {
			$("#contents_validate").html('내용을 입력해주세요.');
			Editor.focus();
			return false;
		}
		*/
	return true;
}
//-->
</script>


<? include('../footer.php');?>
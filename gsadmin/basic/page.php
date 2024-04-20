<?
$mod	= "basic";	
$menu	= "page";
include('../header.php'); 

//에디터 스크립트
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";

//페이지 설정
if(empty($page_index)){$page_index = "agreement";}
if($page_index=="agreement"){
	$title = "서비스 이용약관_KR";
}else if($page_index=="agreement_en"){
	$title = "서비스 이용약관_EN";
}else if($page_index=="agreement_cn"){
	$title = "서비스 이용약관_CN";
}else if($page_index=="privacy"){
	$title = "개인정보 처리방침_KR"; 
}else if($page_index=="privacy_en"){
	$title = "개인정보 처리방침_EN"; 
}else if($page_index=="privacy_cn"){
	$title = "개인정보 처리방침_CN"; 
}else if($page_index=="email"){
	$title = "이메일 무단수집 거부_KR"; 
}else if($page_index=="email_en"){
	$title = "이메일 무단수집 거부_EN"; 
}else if($page_index=="email_cn"){
	$title = "이메일 무단수집 거부_CN"; 
}else{
	$tools->errMsg('잘못된 접근입니다.');	
}

$row = $db->object("cs_page", "where page_index='$page_index'");
?>	

	<h4 class="page-header">이용약관 설정</h4>

	<div class="form-group">
		<div class="btn-group">
			<a href="./page.php?page_index=agreement" class="btn btn-sm btn-<?if($page_index=="agreement"){?>warning active<?}else{?>default<?}?>">
				서비스 이용약관_KR
			</a>
		</div>
		<div class="btn-group">
			<a href="./page.php?page_index=agreement_en" class="btn btn-sm btn-<?if($page_index=="agreement_en"){?>warning active<?}else{?>default<?}?>">
				서비스 이용약관_EN
			</a>
		</div>
		<div class="btn-group">
			<a href="./page.php?page_index=agreement_cn" class="btn btn-sm btn-<?if($page_index=="agreement_cn"){?>warning active<?}else{?>default<?}?>">
				서비스 이용약관_CN
			</a>
		</div>
		<div class="btn-group">
			<a href="./page.php?page_index=privacy" class="btn btn-sm btn-<?if($page_index=="privacy"){?>warning active<?}else{?>default<?}?>">
				개인정보 처리방침_KR
			</a>
		</div>
		<div class="btn-group">
			<a href="./page.php?page_index=privacy_en" class="btn btn-sm btn-<?if($page_index=="privacy_en"){?>warning active<?}else{?>default<?}?>">
				개인정보 처리방침_EN
			</a>
		</div>
		<div class="btn-group">
			<a href="./page.php?page_index=privacy_cn" class="btn btn-sm btn-<?if($page_index=="privacy_cn"){?>warning active<?}else{?>default<?}?>">
				개인정보 처리방침_CN
			</a>
		</div>
		<div class="btn-group">
			<a href="./page.php?page_index=email" class="btn btn-sm btn-<?if($page_index=="email"){?>warning active<?}else{?>default<?}?>">
				이메일 무단수집 거부_KR
			</a>
		</div>
		<div class="btn-group">
			<a href="./page.php?page_index=email_en" class="btn btn-sm btn-<?if($page_index=="email_en"){?>warning active<?}else{?>default<?}?>">
				이메일 무단수집 거부_EN
			</a>
		</div>
		<div class="btn-group">
			<a href="./page.php?page_index=email_cn" class="btn btn-sm btn-<?if($page_index=="email_cn"){?>warning active<?}else{?>default<?}?>">
				이메일 무단수집 거부_CN
			</a>
		</div>
	</div>
	<div>&nbsp;</div>

	<form name="tx_editor_form" id="tx_editor_form" action="page_ok.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="idx" value="<?=$row->idx?>">
	<input type="hidden" name="page_index" value="<?=$page_index?>">
	<input type="hidden" name="title" value="<?=$title?>">
	<input type="hidden" name="returnURL" value="<?=$_SERVER["REQUEST_URI"]; ?>">
	<table class="table table-bordered">
		<tr>
			<td>
				<?
					$table_name	= "cs_page";
					$table_idx = $row->idx;

					$plupload_que = "select url,filename from cs_plupload where table_name='$table_name' and table_idx='$table_idx' order by idx";
					$result_plupload = mysql_query($plupload_que);
					$total_plupload = mysql_affected_rows();
				?>
				<textarea id="contents_source" style="display:none;"><?=$tools->strHtmlNoBr($row->content);?></textarea>
				<?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?>
			</td>
		</tr>
	</table>
	</form>

	<table class="table">
		<tr>
			<td class="text-center"><button type="button" class="btn btn-primary" onClick="Editor.save();">저장하기</button></td>
		</tr>
	</table>


<script src="/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
<!--

function validForm(editor) {
	var validator = new Trex.Validator();
	var content = editor.getContent();
	
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
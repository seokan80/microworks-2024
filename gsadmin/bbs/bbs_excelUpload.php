<?
$mod	= "bbs";
$menu	= "excelUpload";
include('../header.php');
include($ROOT_DIR.'/lib/style_class.php');
$admin_row = $db->object("cs_admin", "");
?>


<form action="bbs_excelUpload_ok.php" method="post" name="goods_form" enctype="multipart/form-data">
	<table class="table table-bordered">
		<tr>
			<th>엑셀파일 업로드</th>
			<td>
				<p>제품엑셀파일(확장자 : xls)을 등록합니다. <a href="sample.xls">[샘플엑셀 다운로드]</a> </p>
				<p>샘플엑셀파일을 정리 할때 제일 위의 항목 첫줄은 삭제 하시고 업로드 하세요.</p>
				<input type='file'  name=upfile>

				<button type='submit' class="btn btn-primary" >등록</button>
			</td>
		</tr>
	</table>
</form>

<? include('../footer.php');?>
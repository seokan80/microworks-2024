<?
$mod	= "bbs";	
include("../header.php");

$table_name	= "cs_bbs_data";
$returnURL		= $returnURL? $returnURL:"bbs_list.php";

if( $bbs_view_del ) {
	$row = $db->object($table_name, "where idx = $idx", "pwd, bbs_file,bbs_file2,bbs_file3,bbs_file4,bbs_file5,sum_file,ex_code");
		// 자료실 삭제
		if(empty($row->sbbs_file))	{@unlink("../../data/bbsData/".$row->bbs_file); }
		if(empty($row->sbbs_file2)) {@unlink("../../data/bbsData/".$row->bbs_file2); }
		if(empty($row->sbbs_file3)) {@unlink("../../data/bbsData/".$row->bbs_file3); }
		if(empty($row->sbbs_file4)) {@unlink("../../data/bbsData/".$row->bbs_file4); }
		if(empty($row->sbbs_file5)) {@unlink("../../data/bbsData/".$row->bbs_file5); }
		if(empty($row->sum_sfile))	{@unlink("../../data/bbsData/".$row->sum_file); }

		//plupload 이미지 삭제
		$plupload_que = "select url,filename from cs_plupload_img where code = '$code' and bbs_idx = '$idx' order by no";
		$result_plupload = mysql_query($plupload_que);
		$total_plupload = mysql_affected_rows();

		for($k=1; $k<=$total_plupload; $k++){
			$row_plupload = mysql_fetch_array($result_plupload);

			$attach_real_ext = explode('/',$row_plupload[url]);
			$attach_ext = $attach_real_ext[sizeof($attach_real_ext)-1];
			$delfile_plupload = "../../data/plupload/$attach_ext";

			if(file_exists($delfile_plupload)){
				unlink($delfile_plupload);
			}
		}

		$delete_plupload_query = "delete from cs_plupload_img where code = '$code' and bbs_idx = '$idx'";
		$result_plupload_delete = mysql_query($delete_plupload_query);
		//plupload 이미지 삭제

		// 코멘트 삭제
		$db->delete("cs_bbs_coment", "where link = $idx");

		// 엑셀업로드 삭제
		if($row->ex_code){
				if($row->code=="trend_list"){
					$db->delete("cs_excel","where ex_code='$row->ex_code'");
				} else {
					$db->delete("cs_excel_b","where ex_code='$row->ex_code'");
				}
		}

		// 작성글 삭제
		$db->delete($table_name, "where idx = $idx");
		$tools->javaGo($returnURL);

} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>
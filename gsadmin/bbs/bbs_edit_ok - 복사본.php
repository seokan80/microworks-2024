<?
$mod	= "bbs";	
include("../header.php");

$table_name	= "cs_bbs_data";
$returnURL		= $returnURL? $returnURL:"bbs_list.php";

if( $_POST[name] ) {

	$idx			= 	$tools->filter($_POST[idx]);
	$code			= 	$tools->filter($_POST[code]);
	$cate			= 	$tools->filter($_POST[cate]);
	$subject	= 	$tools->filter($_POST[subject]);
	$name		= 	$tools->filter($_POST[name]);
	$pwd			= 	$tools->filter($_POST[pwd]);
	$email		= 	$tools->filter($_POST[email]);
	$secret		=	$tools->filter($_POST[secret]);
	$notice		= 	$tools->filter($_POST[notice]);
	$ref				=	$tools->filter($_POST[ref]);
	$re_step	=	$tools->filter($_POST[re_step]);
	$re_level	=	$tools->filter($_POST[re_level]);
	$content	=	$tools->filter2($_POST[content]);

	// 파일업로드
	$bbs_data_stat = $db->object($table_name, "where idx=$idx", "bbs_file, bbs_file2, bbs_file3, bbs_file4, bbs_file5, sum_file, sbbs_file, sbbs_file2, sbbs_file3, sbbs_file4, sbbs_file5, sum_sfile");

	// 파일업로드
	if($imdel1=="y"){
		$file_name1 = "";
		$sfile_name1 = "";
	} else {
		if( $_FILES[bbs_file][size] > 0 ) {
			@unlink( $ROOT_DIR."/data/bbsData/".$bbs_data_stat->bbs_file );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES[bbs_file][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES[bbs_file][size]  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES[bbs_file][name],-5);
			$fn = explode(".",$filename);
			$EXT_TMP = $fn[1];
			$file_name1	= time()."1.".$EXT_TMP;
			$sfile_name1 = $_FILES[bbs_file][name];
			if( !@move_uploaded_file($_FILES[bbs_file][tmp_name], $ROOT_DIR."/data/bbsData/".$file_name1) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file][tmp_name]);	}
		} else {
			$file_name1 	= $bbs_data_stat->bbs_file;
			$sfile_name1 = $bbs_data_stat->sbbs_file;
		}
	}

	// 파일업로드
	if($imdel2=="y"){
		$file_name2 = "";
		$sfile_name2 = "";
	} else {
		if( $_FILES[bbs_file2][size] > 0 ) {
			@unlink( $ROOT_DIR."/data/bbsData/".$bbs_data_stat->bbs_file2 );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES[bbs_file2][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES[bbs_file2][size]  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES[bbs_file2][name],-5);
			$fn = explode(".",$filename);
			$EXT_TMP = $fn[1];
			$file_name2	= time()."2.".$EXT_TMP;
			$sfile_name2 = $_FILES[bbs_file2][name];
			if( !@move_uploaded_file($_FILES[bbs_file2][tmp_name], $ROOT_DIR."/data/bbsData/".$file_name2) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file2][tmp_name]);	}
		} else {
			$file_name2 	= $bbs_data_stat->bbs_file2;
			$sfile_name2 = $bbs_data_stat->sbbs_file2;
		}
	}

	// 파일업로드
	if($imdel3=="y"){
		$file_name3 = "";
		$sfile_name3 = "";
	} else {
		if( $_FILES[bbs_file3][size] > 0 ) {
			@unlink( $ROOT_DIR."/data/bbsData/".$bbs_data_stat->bbs_file3 );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES[bbs_file3][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES[bbs_file3][size]  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES[bbs_file3][name],-5);
			$fn = explode(".",$filename);
			$EXT_TMP = $fn[1];
			$file_name3	= time()."3.".$EXT_TMP;
			$sfile_name3 = $_FILES[bbs_file3][name];
			if( !@move_uploaded_file($_FILES[bbs_file3][tmp_name], $ROOT_DIR."/data/bbsData/".$file_name3) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file3][tmp_name]);	}
		} else {
			$file_name3 	= $bbs_data_stat->bbs_file3;
			$sfile_name3 = $bbs_data_stat->sbbs_file3;
		}
	}

	// 파일업로드
	if($imdel4=="y"){
		$file_name4 = "";
		$sfile_name4 = "";
	} else {
		if( $_FILES[bbs_file4][size] > 0 ) {
			@unlink( $ROOT_DIR."/data/bbsData/".$bbs_data_stat->bbs_file4 );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES[bbs_file4][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES[bbs_file4][size]  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES[bbs_file4][name],-5);
			$fn = explode(".",$filename);
			$EXT_TMP = $fn[1];
			$file_name4	= time()."4.".$EXT_TMP;
			$sfile_name4 = $_FILES[bbs_file4][name];
			if( !@move_uploaded_file($_FILES[bbs_file4][tmp_name], $ROOT_DIR."/data/bbsData/".$file_name4) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file4][tmp_name]);	}
		} else {
			$file_name4 	= $bbs_data_stat->bbs_file4;
			$sfile_name4 = $bbs_data_stat->sbbs_file4;
		}
	}

	// 파일업로드
	if($imdel5=="y"){
		$file_name5 = "";
		$sfile_name5 = "";
	} else {
		if( $_FILES[bbs_file5][size] > 0 ) {
			@unlink( $ROOT_DIR."/data/bbsData/".$bbs_data_stat->bbs_file5 );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES[bbs_file5][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES[bbs_file5][size]  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES[bbs_file5][name],-5);
			$fn = explode(".",$filename);
			$EXT_TMP = $fn[1];
			$file_name5	= time()."5.".$EXT_TMP;
			$sfile_name5 = $_FILES[bbs_file5][name];
			if( !@move_uploaded_file($_FILES[bbs_file5][tmp_name], $ROOT_DIR."/data/bbsData/".$file_name5) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file5][tmp_name]);	}
		} else {
			$file_name5 	= $bbs_data_stat->bbs_file5;
			$sfile_name5 = $bbs_data_stat->sbbs_file5;
		}
	}

	//GD함수 업로드
	include $_SERVER['DOCUMENT_ROOT']."/bbs/gd.php";

 	// 썸네일업로드 
	if($sumdel=="y"){
		$sum_name = "";
		$ssum_name = "";
	} else {
	if( $_FILES[sum_file][size] > 0 ) {
		@unlink( $ROOT_DIR."/data/bbsData/".$bbs_data_stat->sum_file );
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[sum_file][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[sum_file][size]  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES[sum_file][name],-5);
		$fn = explode(".",$filename); 
		$EXT_TMP = $fn[1]; 
		$sum_name	= time()."9.".$EXT_TMP;
		$ssum_name = $_FILES[sum_file][name];
		list($width, $height)=getimagesize($_FILES[sum_file][tmp_name]); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES[sum_file][tmp_name], $ROOT_DIR."/data/bbsData/".$sum_name, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[sum_file][tmp_name]);	} 
			} else {
				if( !@move_uploaded_file($_FILES[sum_file][tmp_name], $ROOT_DIR."/data/bbsData/".$sum_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[sum_file][tmp_name]);	} 
			}
		}else{
			$sum_name 	= $bbs_data_stat->sum_file;
			$ssum_name = $bbs_data_stat->sum_sfile;
		}
	}


	// 디비에 입력
	if( $db->update($table_name,
		"cate='$cate',
		subject='$subject',
		name='$name',
		pwd='$pwd',
		email='$email',
		notice='$notice',
		content='$content',
		bbs_file='$file_name1',
		bbs_file2='$file_name2',
		bbs_file3='$file_name3',
		bbs_file4='$file_name4',
		bbs_file5='$file_name5',
		sum_file='$sum_name',
		sbbs_file='$sfile_name1',
		sbbs_file2='$sfile_name2',
		sbbs_file3='$sfile_name3',
		sbbs_file4='$sfile_name4',
		sbbs_file5='$sfile_name5',
		sum_sfile='$ssum_name',
		secret='$secret' where idx=$idx") ) {


	################# plupload 이미지 처리 #################
	$table_idx		= $idx;

	$result_delete = mysql_query("delete from cs_plupload where table_name='$table_name' and table_idx='$table_idx'");
	for($k=0; $k<sizeof($attach_image); $k++){
		plupload_update($table_name,$table_idx,$attach_image[$k],$file_name[$k]);
	}
	################# plupload 이미지 처리 #################


		$tools->alertJavaGo("수정 하였습니다.", $returnURL); } else { $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>
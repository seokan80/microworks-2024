<?
$mod	= "bbs";	
include("../header.php");

$table_name	= "cs_bbs_data";
$returnURL		= $returnURL? $returnURL:"bbs_list.php";

if( $_POST[name] ) {

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

	// 이메일 유무 검색
	if( $email ) { if(!$tools->chkMail($email, 1)) { $tools->errMsg('정확한 이메일주소를 입력해주세요.');}}

	// 답변
	if( $ref ) {
		$db->update($table_name, "re_step=re_step+1 where ref=$ref and re_step > $re_step");
		$re_step++;
		$re_level++;
	} else {		// 쓰기
		$row					= @mysql_fetch_row( $db->result("select max(idx) from $table_name where code='$code'"));
		$ref		= $row[0]+1;
		$re_step	= 0;
		$re_level= 0;
	}

	// 파일업로드
	if( $_FILES[bbs_file][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[bbs_file][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[bbs_file][size]  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES[bbs_file][name],-5);
		$fn = explode(".",$filename);
		$fn = explode(".",$_FILES[bbs_file][name]);
		$EXT_TMP = $fn[1];
		$file_name1	= time()."1.".$EXT_TMP;
		$sfile_name1 = $_FILES[bbs_file][name];
		if( !@move_uploaded_file($_FILES[bbs_file][tmp_name], $ROOT_DIR."/data/bbsData/".$file_name1) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file][tmp_name]);	}
	} else {
		$file_name1 	= "";
	}


	// 파일업로드
	if( $_FILES[bbs_file2][size] > 0 ) {
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
		$file_name2 	= "";
	}

	// 파일업로드
	if( $_FILES[bbs_file3][size] > 0 ) {
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
		$file_name3 	= "";
	}

	// 파일업로드
	if( $_FILES[bbs_file4][size] > 0 ) {
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
		$file_name4 	= "";
	}

	// 파일업로드
	if( $_FILES[bbs_file5][size] > 0 ) {
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
		$file_name5 	= "";
	}


	//GD함수 업로드
	include $_SERVER['DOCUMENT_ROOT']."/bbs/gd.php";
	
	// 파일업로드 
	if( $_FILES[sum_file][size] > 0 ) {
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
	} else {
		$sum_name 	= "";
	}


	// 디비입력
	if( $db->insert($table_name,
		"code='$code',
		cate='$cate',
		subject='$subject',
		name='$name',
		pwd='$pwd',
		email='$email',
		read_cnt=0,
		reg_date=now(),
		content='$content',
		notice='$notice',
		ref='$ref',
		re_level='$re_level',
		re_step='$re_step',
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
		secret='$secret'") ) {


	################# plupload 이미지 처리 #################
	$table_name = "cs_bbs_data";

	$table_idx = max_count("idx",$table_name);
	for($k=0; $k<sizeof($attach_image); $k++){
		plupload_update($table_name,$table_idx,$attach_image[$k],$file_name[$k]);
	}
	################# plupload 이미지 처리 #################


		$tools->alertJavaGo("등록 하였습니다.",$returnURL);		} else { @unlink($ROOT_DIR."/data/bbsData/".$file_name1); $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>
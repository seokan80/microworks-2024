<?
$mod	= "banner";	
$menu	= "banner";
include("../header.php");

$table_name	= "cs_banner";
$returnURL		= $returnURL? $returnURL:"banner.php";

//파일업로드경로
$file_dir	 = $_SERVER['DOCUMENT_ROOT']."/data/bbsData/";
//GD함수 업로드
include $_SERVER['DOCUMENT_ROOT']."/bbs/gd.php";

$mode				= 	$tools->filter($_POST[mode]);
$idx					= 	$tools->filter($_POST[idx]);
$cate					= 	$tools->filter($_POST[cate]);
$display				= 	$tools->filter($_POST[display]);
$subject			= 	$tools->filter($_POST[subject]);
$link_url			= 	$tools->filter($_POST[link_url]);
$link_open		= 	$tools->filter($_POST[link_open]);

if($mode=="write"){

	if( $_FILES[bbs_file][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[bbs_file][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[bbs_file][size]  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES[bbs_file][name],-5);
		$fn = explode(".",$filename); 
		$EXT_TMP = $fn[1]; 
		$file_name	= time()."1.".$EXT_TMP;
		$sfile_name = $_FILES[bbs_file][name];
		list($width, $height)=getimagesize($_FILES[bbs_file][tmp_name]); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES[bbs_file][tmp_name], $file_dir.$file_name, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file][tmp_name]);	} 
				if($tools->device()=="mobile"){
				//모바일 이미지 회전
				//$tools->image_fix_orientation($file_dir.$file_name);
				}
			}else{
				if( !@move_uploaded_file($_FILES[bbs_file][tmp_name], $file_dir.$file_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file][tmp_name]);	} 
			}
	} else {
		$file_name 	= "";
	}

	if( $db->insert($table_name,
		"
			cate='$cate',
			display='$display',
			subject='$subject',
			link_url='$link_url',
			link_open='$link_open',
			bbs_file='$file_name',
			sbbs_file='$sfile_name',
			reg_date=now()
		"
	))
		{
			$tools->alertJavaGo("등록 하였습니다.", $returnURL);
		}

}

if($mode=="edit"){

	$row = $db->object($table_name, "where idx=$idx");

	if($imdel1=="y"){
		$file_name = "";
		$sfile_name = "";
	}else{
		if( $_FILES[bbs_file][size] > 0 ) {
			@unlink( $file_dir.$row->bbs_file );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES[bbs_file][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES[bbs_file][size]  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES[bbs_file][name],-5);
			$fn = explode(".",$filename); 
			$EXT_TMP = $fn[1]; 
			$file_name	= time()."1.".$EXT_TMP;
			$sfile_name = $_FILES[bbs_file][name];
			list($width, $height)=getimagesize($_FILES[bbs_file][tmp_name]); 
				if($width>2600){
					$imgwidth=$width*(50/100);//width 값 
					$imgheight=$height*(50/100);//height 값 
					if(!@GDImageResize($_FILES[bbs_file][tmp_name], $file_dir.$file_name, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file][tmp_name]);	} 
					if($tools->device()=="mobile"){
					//모바일 이미지 회전
					//$tools->image_fix_orientation($file_dir.$file_name);
					}
				}else{
					if( !@move_uploaded_file($_FILES[bbs_file][tmp_name], $file_dir.$file_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file][tmp_name]);	} 
				}
		} else {
			$file_name 	= $row->bbs_file;
			$sfile_name = $row->sbbs_file;
		}
	}

	if( $db->update($table_name,
		"
			cate='$cate',
			display='$display',
			subject='$subject',
			link_url='$link_url',
			link_open='$link_open',
			bbs_file='$file_name',
			sbbs_file='$sfile_name' where idx='$idx'
		"
	))
		{
			$tools->alertJavaGo("수정 하였습니다.", $returnURL);
		}

}

include('../footer.php');
?>
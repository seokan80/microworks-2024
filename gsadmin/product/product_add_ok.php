<?
$mod	= "product";	
$menu	= "product";
include("../header.php");

$table_name	= "cs_goods";
$returnURL		= $returnURL? $returnURL:"product.php";

//파일업로드경로
$file_dir	 = $_SERVER['DOCUMENT_ROOT']."/data/bbsData/";
//GD함수 업로드
include $_SERVER['DOCUMENT_ROOT']."/bbs/gd.php";

if( $tools->chkDigit($_POST[part_code] )) {
	$part_row=$db->object("cs_part", "where part1_code='$_POST[part_code]' or part2_code='$_POST[part_code]' or part3_code='$_POST[part_code]'", "idx");
	
	$display				=	$tools->filter($_POST[display]);
	$code					=	$tools->filter($_POST[code]);
	$icon					=	$tools->filter($_POST[icon]);
	$name				=	$tools->filter($_POST[name]);
	$company			=	$tools->filter($_POST[company]);
	$old_price		=	$tools->filter($_POST[old_price]);
	$shop_price		=	$tools->filter($_POST[shop_price]);
	$sold_out			=	$tools->filter($_POST[sold_out]);
	$number			=	$tools->filter($_POST[number]);
	$point				=	$tools->filter($_POST[point]);
	$option_check=	$tools->filter($_POST[option_check]);
	$content			=	$tools->filter2($_POST[content]);
	$main_position=$tools->filter($_POST[main_position]);
	$sub_position	=	$tools->filter($_POST[sub_position]);
	$zzim					=	$tools->filter($_POST[zzim]);

	// 상품 이미지 등록
	if( $_FILES[images1][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[images1][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[images1][size]  > 1024*1024*3) { $tools->errMsg("업로드 용량 초과입니다\\n\\n3메가 까지 업로드 가능합니다"); exit(); }
		$images1name = explode(".",$images1_name);
		$images1 = 'GOODS1_'.$code.".".$images1name[1];
		list($width, $height)=getimagesize($_FILES[images1][tmp_name]); 
		if($width>2600){
			$imgwidth=$width*(50/100);//width 값 
			$imgheight=$height*(50/100);//height 값 
			if(!@GDImageResize($_FILES[images1][tmp_name], "../../data/goodsImages/".$images1, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[images1][tmp_name]);	} 
		} else {
			if( !@move_uploaded_file($_FILES[images1][tmp_name], "../../data/goodsImages/".$images1) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[images1][tmp_name]);	} 
		}
	}

	
	if( $_FILES[images2][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[images2][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[images2][size]  > 1024*1024*3) { $tools->errMsg("업로드 용량 초과입니다\\n\\n3메가 까지 업로드 가능합니다"); exit(); }
		$images2name = explode(".",$images2_name);
		$images2 = 'GOODS2_'.$code.".".$images2name[1];
		list($width, $height)=getimagesize($_FILES[images2][tmp_name]); 
		if($width>2600){
			$imgwidth=$width*(50/100);//width 값 
			$imgheight=$height*(50/100);//height 값 
			if(!@GDImageResize($_FILES[images2][tmp_name], "../../data/goodsImages/".$images2, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[images2][tmp_name]);	} 
		} else {
			if( !@move_uploaded_file($_FILES[images2][tmp_name], "../../data/goodsImages/".$images2) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[images2][tmp_name]);	} 
		}
	}


	// 추가 상품 이미지 등록
	if( $_FILES[add_images1][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[add_images1][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[add_images1][size]  > 1024*1024*3) { $tools->errMsg("업로드 용량 초과입니다\\n\\n3메가 까지 업로드 가능합니다"); exit(); }
		$add1 = explode(".",$add_images1_name);
		$add_images1 = 'ADD_GOODS1_'.$code.".".$add1[1];
		list($width, $height)=getimagesize($_FILES[add_images1][tmp_name]); 
		if($width>2600){
			$imgwidth=$width*(50/100);//width 값 
			$imgheight=$height*(50/100);//height 값 
			if(!@GDImageResize($_FILES[add_images1][tmp_name], "../../data/goodsImages/".$add_images1, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images1][tmp_name]);	} 
		} else {
			if( !@move_uploaded_file($_FILES[add_images1][tmp_name], "../../data/goodsImages/".$add_images1) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images1][tmp_name]);	} 
		}
	}

	if( $_FILES[add_images2][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[add_images2][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[add_images2][size]  > 1024*1024*3) { $tools->errMsg("업로드 용량 초과입니다\\n\\n3메가 까지 업로드 가능합니다"); exit(); }
		$add2 = explode(".",$add_images2_name);
		$add_images2 = 'ADD_GOODS2_'.$code.".".$add2[1];
		list($width, $height)=getimagesize($_FILES[add_images2][tmp_name]); 
		if($width>2600){
			$imgwidth=$width*(50/100);//width 값 
			$imgheight=$height*(50/100);//height 값 
			if(!@GDImageResize($_FILES[add_images2][tmp_name], "../../data/goodsImages/".$add_images2, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images2][tmp_name]);	} 
		} else {
			if( !@move_uploaded_file($_FILES[add_images2][tmp_name], "../../data/goodsImages/".$add_images2) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images2][tmp_name]);	} 
		}
	}

	if( $_FILES[add_images3][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[add_images3][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[add_images3][size]  > 1024*1024*3) { $tools->errMsg("업로드 용량 초과입니다\\n\\n3메가 까지 업로드 가능합니다"); exit(); }
		$add3 = explode(".",$add_images3_name);
		$add_images3 = 'ADD_GOODS3_'.$code.".".$add3[1];
		list($width, $height)=getimagesize($_FILES[add_images3][tmp_name]); 
		if($width>2600){
			$imgwidth=$width*(50/100);//width 값 
			$imgheight=$height*(50/100);//height 값 
			if(!@GDImageResize($_FILES[add_images3][tmp_name], "../../data/goodsImages/".$add_images3, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images3][tmp_name]);	} 
		} else {
			if( !@move_uploaded_file($_FILES[add_images3][tmp_name], "../../data/goodsImages/".$add_images3) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images3][tmp_name]);	} 
		}
	}

	if( $_FILES[add_images4][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[add_images4][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[add_images4][size]  > 1024*1024*3) { $tools->errMsg("업로드 용량 초과입니다\\n\\n3메가 까지 업로드 가능합니다"); exit(); }
		$add4 = explode(".",$add_images4_name);
		$add_images4 = 'ADD_GOODS4_'.$code.".".$add4[1];
		list($width, $height)=getimagesize($_FILES[add_images4][tmp_name]); 
		if($width>2600){
			$imgwidth=$width*(50/100);//width 값 
			$imgheight=$height*(50/100);//height 값 
			if(!@GDImageResize($_FILES[add_images4][tmp_name], "../../data/goodsImages/".$add_images4, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images4][tmp_name]);	} 
		} else {
			if( !@move_uploaded_file($_FILES[add_images4][tmp_name], "../../data/goodsImages/".$add_images4) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images4][tmp_name]);	} 
		}
	}

	if( $_FILES[add_images5][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[add_images5][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[add_images5][size]  > 1024*1024*3) { $tools->errMsg("업로드 용량 초과입니다\\n\\n3메가 까지 업로드 가능합니다"); exit(); }
		$add5 = explode(".",$add_images5_name);
		$add_images5 = 'ADD_GOODS5_'.$code.".".$add5[1];
		list($width, $height)=getimagesize($_FILES[add_images5][tmp_name]); 
		if($width>2600){
			$imgwidth=$width*(50/100);//width 값 
			$imgheight=$height*(50/100);//height 값 
			if(!@GDImageResize($_FILES[add_images5][tmp_name], "../../data/goodsImages/".$add_images5, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images5][tmp_name]);	} 
		} else {
			if( !@move_uploaded_file($_FILES[add_images5][tmp_name], "../../data/goodsImages/".$add_images5) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[add_images5][tmp_name]);	} 
		}
	}

	if( $_FILES[bbs_file][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[bbs_file][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[bbs_file][size]  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
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


	/*옵션 설정*/
	if($option_check > 0){
		for($i=0; $i<count(${'option_name'}); $i++){
			//숫자체크
			if(!is_numeric($option_price[$i])){	
				$option_price[$i] = 0;
			}
			$query = "insert into cs_option set
				code='$code',
				name='$option_name[$i]',
				price='$option_price[$i]',
				number='$option_number[$i]',
				sold_out='$hidden_option_sold_out[$i]'";
			mysql_query($query);
		}
	}


	$sql = "part_idx='$part_row->idx',
			display='$display',
			code='$code',
			icon='$icon',
			name='$name',
			company='$company',
			old_price='$old_price',
			shop_price='$shop_price',
			sold_out='$sold_out',
			number='$number',
			point='$point',
			option_check='$option_check',
			images1='$images1',
			images2='$images2',
			add_images1='$add_images1',
			add_images2='$add_images2',
			add_images3='$add_images3',
			add_images4='$add_images4',
			add_images5='$add_images5',
			bbs_file='$file_name',
			sbbs_file='$sfile_name',
			content='$content',
			main_position='$main_position',
			sub_position='$sub_position',
			register=now(),
			zzim='$zzim'";

	if( $db->insert($table_name, $sql) ) { 
	
		
	################# plupload 이미지 처리 #################
	$table_idx = max_count("idx",$table_name);
	for($k=0; $k<sizeof($attach_image); $k++){
		plupload_update($table_name,$table_idx,$attach_image[$k],$file_name[$k]);
	}
	################# plupload 이미지 처리 #################
		
		
		$tools->alertJavaGo("등록 하였습니다.",$returnURL); } else { $tools->errMsg('비상적으로 입력 되었습니다.');}

} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>
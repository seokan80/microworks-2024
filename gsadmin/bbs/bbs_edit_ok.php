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
	$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_cate, bbs_pds, bbs_pds_ea, header, footer, bbs_secret,editor,bbs_type");
	$link_url = $tools->filter($_POST[link_url]);
	$attr_1 = $tools->filter($_POST[attr_1]);
	$attr_2 = $tools->filter($_POST[attr_2]);
	$attr_3 = $tools->filter($_POST[attr_3]);
	$attr_4 = $tools->filter($_POST[attr_4]);
	$lang = $tools->filter($_POST[lang]);
	// #202405 공지사항 추가
    $period_yn = ($code == 'notice')? $tools->filter($_POST[period_yn]) : null;
    $period_start_date = ($code == 'notice')? $tools->filter($_POST[period_start_date]) : null;
    $period_end_date = ($code == 'notice')? $tools->filter($_POST[period_end_date]) : null;

	if($lang==1){
		$name = "관리자";
	}else if($lang==2){
		$name = "Admin";
	}else if($lang==3){
		$name = "Admin";
	}
	// 파일업로드
	$bbs_data_stat = $db->object($table_name, "where idx=$idx");
	$file_query = "";

	if( $bbs_admin_stat->bbs_pds ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");
		for($i = 1; $i<=$bbs_admin_stat->bbs_pds_ea; $i++){
			if($i==1){
				$file_form = "bbs_file";
				$del_form = "imdel1";
			}else{
				$file_form = "bbs_file".$i;
				$del_form = "imdel".$i;
			}
			/////////////////////////////////////////////////
			if($_POST[$del_form]=="y"){
				if($i==1){
					$file_query.="bbs_file='',sbbs_file='',";
				}else{
					$file_query.="bbs_file$i='',sbbs_file$i='',";
				}
				@unlink( $ROOT_DIR."/data/bbsData/".$bbs_data_stat->$file_form );
			}else{
				if($_FILES[$file_form][size]>0){
					if($EXT_TMP = explode( ".", $_FILES[$file_form ][name])){
						foreach ($EXT_CHECK as $value){
							if(strstr($value,strtolower($EXT_TMP[count($EXT_TMP)-1]))){
								$tools->errMsg(strtoupper($EXT_TMP[count($EXT_TMP)-1])." 은 업로드 할수 없습니다.");
							}
						}
					}
					if($_FILES[$file_form][size]>1024*1024*5){
						$tools->errMsg("업로드 용량 초과입니다\n5메가 까지 업로드 가능합니다"); 
						exit();
					}
					@unlink( $ROOT_DIR."/data/bbsData/".$bbs_data_stat->$file_form );
					$file_name = time().$i.".".$EXT_TMP[count($EXT_TMP)-1];
					$sfile_name = $_FILES[$file_form][name];
					if(!@move_uploaded_file($_FILES[$file_form][tmp_name],$ROOT_DIR."/data/bbsData/".$file_name)){
						$tools->errMsg("파일 업로드 에러");
					}else{
						@unlink($_FILES[$file_form][tmp_name]);
					}
					if($i==1){
						$file_query.="bbs_file='$file_name',sbbs_file='$sfile_name',";
					}else{
						$file_query.="bbs_file$i='$file_name',sbbs_file$i='$sfile_name',";
					}
				}else{
					//파일 미 업로드시 쿼리가 생성되지않으므로 안넣어도 될거같기도 한거같습니다.
				}
			}
			/////////////////////////////////////////////////
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


    // #202405 공지사항 추가 : period_yn, period_start_date, period_end_date
	// 디비에 입력
	if( $db->update($table_name,
		"cate='$cate',
		subject='$subject',
		name='$name',
		pwd='$pwd',
		email='$email',
		notice='$notice',
		content='$content',
		sum_file='$sum_name',
		sum_sfile='$ssum_name',
		$file_query
		link_url='$link_url',
		lang='$lang',
		attr_1='$attr_1',
		attr_2='$attr_2',
		attr_3='$attr_3',
		attr_4='$attr_4',
		secret='$secret',
		period_yn='$period_yn',
        period_start_date='$period_start_date',
        period_end_date='$period_end_date' where idx=$idx") ) {


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

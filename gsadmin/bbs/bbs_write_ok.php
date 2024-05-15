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
	$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_cate, bbs_pds, bbs_pds_ea, header, footer, bbs_secret,editor,bbs_type");
	$link_url = $tools->filter($_POST[link_url]);
	$stan_date = $tools->filter($_POST[stan_date]);
	$start_day = explode("-",$stan_date);
	$start_year	= $start_day[0];
	$start_mon	= $start_day[1];
	$start_day	= $start_day[2];
	$ex_code = $tools->create_code();
	$week = $tools->toWeekNum($stan_date);
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
	// 이메일 유무 검색
	if( $email ) { if(!$tools->chkMail($email, 1)) { $tools->errMsg('정확한 이메일주소를 입력해주세요.');}}

	// 답변
	if( $ref ) {
		$db->update($table_name, "re_step=re_step+1 where ref=$ref and re_step > $re_step");
		$re_step++;
		$re_level++;
	} else {		// 쓰기
		$row = @mysql_fetch_row( $db->result("select max(idx) from $table_name where code='$code'"));
		$ref = $row[0]+1;
		$re_step = 0;
		$re_level = 0;
	}
	$file_query = "";
	// 파일업로드
	if( $bbs_admin_stat->bbs_pds ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");
		for($i = 1; $i<=$bbs_admin_stat->bbs_pds_ea; $i++){
			if($i==1){
				$file_form = "bbs_file";
			}else{
				$file_form = "bbs_file".$i;
			}
			if($_FILES[$file_form][size]>0){
			///////////////////////////////////////////////////////////////////
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
				$file_name = time().$i.".".$EXT_TMP[count($EXT_TMP)-1];
				$sfile_name = $_FILES[$file_form][name];
				if(!@move_uploaded_file($_FILES[$file_form][tmp_name],$ROOT_DIR."/data/bbsData/".$file_name)){
					$tools->errMsg("파일 업로드 에러");
				}else{
					@unlink($_FILES[$file_form][tmp_name]);
				}
			///////////////////////////////////////////////////////////////////
				if($i==1){
					$file_query.="bbs_file='$file_name',sbbs_file='$sfile_name',";
				}else{
					$file_query.="bbs_file$i='$file_name',sbbs_file$i='$sfile_name',";
				}
			}
		}
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

    // #202405 공지사항 추가 : period_yn, period_start_date, period_end_date
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
		$file_query
		link_url='$link_url',
		sum_file='$sum_name',
		sum_sfile='$ssum_name',
		stan_date='$stan_date',
		week='$week',
		years='$start_year',
		ex_code='$ex_code',
		lang='$lang',
		attr_1='$attr_1',
		attr_2='$attr_2',
		attr_3='$attr_3',
		attr_4='$attr_4',
		secret='$secret',
		period_yn='$period_yn',
		period_start_date='$period_start_date',
		period_end_date='$period_end_date'"
		)) {

		################# plupload 이미지 처리 #################
		$table_name = "cs_bbs_data";

		$table_idx = max_count("idx",$table_name);
		for($k=0; $k<sizeof($attach_image); $k++){
			plupload_update($table_name,$table_idx,$attach_image[$k],$file_name[$k]);
		}
		################# plupload 이미지 처리 #################
		$tools->alertJavaGo("등록 하였습니다.",$returnURL);	
	} else {
		@unlink($ROOT_DIR."/data/bbsData/".$file_name1);
		$tools->errMsg('비정상적으로 입력 되었습니다.');
	}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>

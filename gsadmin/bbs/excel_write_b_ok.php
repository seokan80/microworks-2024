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
	$ref		=	$tools->filter($_POST[ref]);
	$re_step	=	$tools->filter($_POST[re_step]);
	$re_level	=	$tools->filter($_POST[re_level]);
	$content	=	$tools->filter2($_POST[content]);
	$lang = $tools->filter($_POST[lang]);

	$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_cate, bbs_pds, bbs_pds_ea, header, footer, bbs_secret,editor,bbs_type");
	$link_url = $tools->filter($_POST[link_url]);
	$stan_date = $tools->filter($_POST[stan_date]);
	$start_day = explode("-",$stan_date);
	$start_year	= $start_day[0];
	$start_mon	= $start_day[1];
	$start_day	= $start_day[2];
	$ex_code = $tools->create_code();
	$week = $tools->toWeekNum($stan_date);
	if($code=="stock"){
		$kind = 1;
	}else if($code=="oem"){
		$kind = 2;
	}
	$row = @mysql_fetch_row( $db->result("select max(idx) from $table_name where code='$code'"));
	$ref = $row[0]+1;
	$re_step = 0;
	$re_level = 0;

	// 이메일 유무 검색
	///////////엑셀업로드START
	if(strcmp($exceilFile,"")) {

		$savedir7 = $_SERVER['DOCUMENT_ROOT']."/data/excel";
			$exceilFile_name = $_FILES[exceilFile][name];
			$exceilFile_name_s = $_FILES[exceilFile][name];
			$full_filename7 = explode(".", "$exceilFile_name");
			$extension7 = $full_filename7[sizeof($full_filename7)-1];	  
		
			if($extension7=="xls"){

			   if(!strcmp($extension7,"html") || 
				  !strcmp($extension7,"htm") ||
				  !strcmp($extension7,"php") ||
				  !strcmp($extension7,"php3") ||
				  !strcmp($extension7,"pl") ||
				  !strcmp($extension7,"cgi") ||
				  !strcmp($extension7,"txt") ||
				  !strcmp($extension7,"asp") ||
				  !strcmp($extension7,"") ||
				  !strcmp($extension7,"phtml")) 
			   { 
				  error("NOACCESS_EXTENSION");
				  exit;
			   }

			   $exceilFile_name = date("YmdHis").".".$extension7;

			   if(!copy($exceilFile,"$savedir7/$exceilFile_name")) {
				  error("업로드 실패");
				  exit;
			   }

			   if(!unlink($exceilFile)) {
				  error("삭제 실패");
				  exit;
			   }
			  

			//$tools->javaGo("./excel_ok.php?exceilFile_name=".$exceilFile_name);
			//엑셀함수
			function mb_detect($str){
				$ary[] = "UTF-8";
				$ary[] = "SJIS-WIN";
				$CharCheck = mb_detect_encoding($str, $ary);
				if($CharCheck != "UTF-8"){
					$str = mb_convert_encoding($str, "UTF-8");
				}
				return $str;
			}
			require_once $_SERVER['DOCUMENT_ROOT']."/gsadmin/etc/excel/reader.php";
			$data = new Spreadsheet_Excel_Reader();
			$data->setUTFEncoder("mb");
			$data->setOutputEncoding("UTF-8");
			$data->read($ROOT_DIR."/data/excel/$exceilFile_name"); 
			$j=1;

			$db->delete("cs_excel_b","where kind='$kind' and lang='$lang'");

			for ($i = 2; $i <= $data->sheets[0]["numRows"]; $i++){
				$excel_a = $data->sheets[0]["cells"][$i][1];
				$excel_b = $data->sheets[0]["cells"][$i][2];
				$excel_c = $data->sheets[0]["cells"][$i][3];
				$excel_d = $data->sheets[0]["cells"][$i][4];
				$excel_e = $data->sheets[0]["cells"][$i][5];
				$excel_f = $data->sheets[0]["cells"][$i][6];
		
				$attr_1 = mb_detect($excel_b);
				$attr_2 = mb_detect($excel_c);
				$attr_3 = mb_detect($excel_d);
				$attr_4 = mb_detect($excel_e);
				$attr_5 = mb_detect($excel_f);
			
				$query = "
					part_1='$part_1',
					part_2='$part_2',
					name='$prd_name',
					ex_code='$ex_code',
					no='$no',
					company='$company',
					ea='$ea',
					price='$price',
					price_unit='$price_unit',
					date_text='$date_text',
					etc='$etc',
					years='$start_year',
					week='$week',
					attr_1='$attr_1',
					attr_2='$attr_2',
					attr_3='$attr_3',
					attr_4='$attr_4',
					attr_5='$attr_5',
					lang='$lang',
					kind='$kind'
				";
				if(!empty($attr_1)){
					$db->insert("cs_excel_b",$query);
				}
				//echo $query."<br>";
				$j++;
			}
		}else{
			$tools->errMsg("파일확장자를 확인해주시기 바랍니다.");
		}
	}else{
		$tools->errMsg("엑셀파일을 등록해주세요.");
	}
	///////////엑셀업로드END
	
	///////////글작성START
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
		stan_date='$stan_date',
		week='$week',
		bbs_file='$exceilFile_name',
		sbbs_file='$exceilFile_name_s',
		years='$start_year',
		ex_code='$ex_code',
		lang='$lang',
		secret='$secret'") ) {

		$tools->alertJavaGo("등록 하였습니다.",$returnURL);	
	} else {
		@unlink($ROOT_DIR."/data/bbsData/".$exceilFile_name);
		$tools->errMsg('비정상적으로 입력 되었습니다.');
	}
	///////////글작성END
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>
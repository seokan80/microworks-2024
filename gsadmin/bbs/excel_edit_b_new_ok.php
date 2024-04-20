<?
header("Content-type:text/html; charset=utf-8");
include $_SERVER["DOCUMENT_ROOT"]."/gsadmin/bbs/PHPExcel/Classes/PHPExcel.php";
include $_SERVER['DOCUMENT_ROOT']."/common.php";

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
	$lang = $tools->filter($_POST[lang]);

	$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_cate, bbs_pds, bbs_pds_ea, header, footer, bbs_secret,editor,bbs_type");
	$link_url = $tools->filter($_POST[link_url]);
	$stan_date = $tools->filter($_POST[stan_date]);
	$start_day = explode("-",$stan_date);
	$start_year	= $start_day[0];
	$start_mon	= $start_day[1];
	$start_day	= $start_day[2];
	$ex_code = $tools->filter($_POST[ex_code]);
	$week = $tools->toWeekNum($stan_date);
	$bbs_data_stat = $db->object($table_name, "where idx=$idx");
	if($code=="stock"){
		$kind = 1;
	}else if($code=="oem"){
		$kind = 2;
	}


$UpFile	= $_FILES["exceilFile"];

$UpFileName = $UpFile["name"];

function time_convert_EXCEL_to_PHP($excel12){
   $t=( $excel12- 25569) * 86400;
   return $t;
}

$UpFilePathInfo = pathinfo($UpFileName);
$UpFileExt		= strtolower($UpFilePathInfo["extension"]);

if($UpFileExt != "xls" && $UpFileExt != "xlsx") {
	echo "엑셀파일만 업로드 가능합니다. (xls, xlsx 확장자의 파일포멧)";
	exit;
}

	// 이메일 유무 검색
	///////////엑셀업로드START
	if($_POST[imdel1]=="y"){
		$exceilFile_name = "";
		$exceilFile_name_s = "";
		@unlink( $ROOT_DIR."/data/excel/".$bbs_data_stat->bbs_file );
	}else if(strcmp($exceilFile,"")) {

		//echo "1<br>";

		$savedir7 = $_SERVER['DOCUMENT_ROOT']."/data/excel";
			$exceilFile_name = $_FILES[exceilFile][name];
			$exceilFile_name_s = $_FILES[exceilFile][name];
			$full_filename7 = explode(".", "$exceilFile_name");
			$extension7 = $full_filename7[sizeof($full_filename7)-1];	  
		
			if($extension7=="xls" or $extension7=="xlsx"){

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


//-- 읽을 범위 필터 설정 (아래는 A열만 읽어오도록 설정함  => 속도를 중가시키기 위해)
class MyReadFilter implements PHPExcel_Reader_IReadFilter
{
	public function readCell($column, $row, $worksheetName = '') {
		// Read rows 1 to 7 and columns A to E only
		if (in_array($column,range('A','AC'))) {
			return true;
		}
		return false;
	}
}
$filterSubset = new MyReadFilter();



	//파일 타입 설정 (확자자에 따른 구분)
	$inputFileType = 'Excel2007';
	if($UpFileExt == "xls") {
		$inputFileType = 'Excel5';
	}

	$upload_path = $_SERVER["DOCUMENT_ROOT"]."/data/excel";
	$upfile_path = $upload_path."/".$exceilFile_name;

	//엑셀리더 초기화
	$objReader = PHPExcel_IOFactory::createReader($inputFileType);

	//데이터만 읽기(서식을 모두 무시해서 속도 증가 시킴)
	$objReader->setReadDataOnly(true);

	//범위 지정(위에 작성한 범위필터 적용)
	//$objReader->setReadFilter($filterSubset);

	//업로드된 엑셀 파일 읽기
	$objPHPExcel = $objReader->load($upfile_path);

	//첫번째 시트로 고정
	$objPHPExcel->setActiveSheetIndex(0);

	//고정된 시트 로드
	$objWorksheet = $objPHPExcel->getActiveSheet();

  //시트의 지정된 범위 데이터를 모두 읽어 배열로 저장
	$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
	$total_rows = count($sheetData);


	//$db->delete("cs_excel_b","where kind='$kind' and lang='$lang'");

	//echo $total_rows;
	$number=1;
	foreach($sheetData as $rows) {

		if ($number > 1){

			$excel_a = $rows["A"]; 
			$excel_b = $rows["B"]; 
			$excel_c = $rows["C"]; 
			$excel_d = $rows["D"]; 
			$excel_e = $rows["E"]; 
			$excel_f = $rows["F"]; 
			
			$keyidx = $_POST[keyidx];

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
					attr_1='$excel_b',
					attr_2='$excel_c',
					attr_3='$excel_d',
					attr_4='$excel_e',
					attr_5='$excel_f',
					lang='$lang',
					kind='$kind'
				";
				if(!empty($excel_a)){
					$db->insert("cs_excel_b",$query);
				}

				//echo $query."<br>";

		}
		$number++;
	}

		
		}else{
			$tools->errMsg("파일확장자를 확인해주시기 바랍니다.");
		}
	}else{
		
		//echo "3<br>";
		
		$exceilFile_name = $bbs_data_stat->bbs_file;
		$exceilFile_name_s = $bbs_data_stat->sbbs_file;
	}
	///////////엑셀업로드END
	
	///////////글작성START
	if( $db->update($table_name,
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
		secret='$secret' where idx='$idx' ") ) {

		$tools->alertJavaGo("수정 하였습니다.",$returnURL);	
	} else {
		$tools->errMsg('비정상적으로 입력 되었습니다.');
	}
	///////////글작성END
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>
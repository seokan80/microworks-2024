<?php
header("Content-type:text/html; charset=utf-8");
include $_SERVER["DOCUMENT_ROOT"]."/gsadmin/online/PHPExcel/Classes/PHPExcel.php";
include $_SERVER['DOCUMENT_ROOT']."/common.php";

$UpFile	= $_FILES["upfile"];

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

$file_name1	= time()."1.".$UpFileExt;

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

//업로드된 엑셀파일을 서버의 지정된 곳에 옮기기 위해 경로 적절히 설정
$upload_path = $_SERVER["DOCUMENT_ROOT"]."/csvfile";
$upfile_path = $upload_path."/".date("Ymd_His")."_".$file_name1;
$file_name1 = "".date("Ymd_His")."_".$file_name1;
if(is_uploaded_file($UpFile["tmp_name"])) {

	if(!move_uploaded_file($UpFile["tmp_name"],$upfile_path)) {
		echo "업로드된 파일을 옮기는 중 에러가 발생했습니다.";
		exit;
	}

$query = "insert into csv_file set file='$file_name1',file_name='$UpFileName'";
mysql_query($query);

	//파일 타입 설정 (확자자에 따른 구분)
	$inputFileType = 'Excel2007';
	if($UpFileExt == "xls") {
		$inputFileType = 'Excel5';
	}

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

	//echo $total_rows;
	$number=1;
	foreach($sheetData as $rows) {

		if ($number > 1){
			$excel1 = $rows["A"]; // 이름
			$excel2 = $rows["B"]; // 연락처
			
			$keyidx = $_POST[keyidx];

			$query = "insert into cs_online_gum set
			keyidx='$keyidx',
			name='$excel1',
			tel='$excel2',
			udate=now()
			";

			//echo date('Y-m-d H:i:s',time_convert_EXCEL_to_PHP($excel12))."<br>";
			//echo PHPExcel_Style_NumberFormat::toFormattedString($excel12, 'YYYY-MM-DD')."<br>";
			mysql_query($query);

		}
		$number++;
	}

}


$tools->alertJavaGo("완료","/gsadmin/online/online_gum.php?idx=".$keyidx);
?>

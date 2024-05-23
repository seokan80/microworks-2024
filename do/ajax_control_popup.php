<?
// 메인 문의 저장 ajax data
include $_SERVER['DOCUMENT_ROOT'] . "/common.php";
//if(!strstr($_SERVER['HTTP_REFERER'],"microworks")){ $tools->alertJavaGo("비정상적인 접근 입니다.","/"); exit; }

$lang = $_POST[lang];
if($lang==2){ // 영문
	// script 메세지
	$inquiryok_err_msg_retry = "Please try again in a few minutes.";	//잠시후 다시 시도해 주세요.
	$inquiryok_err_msg_spam = "The word cannot be used due to spam.";	//단어는 스팸 때문에 사용 하실 수 없습니다.
	$inquiryok_success_msg = "Your inquiry has been received.";	//문의하기가 접수 되었습니다.
	$inquiryok_err_input = "The input was entered abnormally.";	//비정상적으로 입력 되었습니다.
	$inquiryok_err_acess = "Warning!!!\n\nAbnormal access.";	//경 고 !!!\n\n비정상적으로 접근했습니다.
} else if($lang==3){ // 중문
	// script 메세지
	$inquiryok_err_msg_retry = "请在几分钟后再试一次。";	//잠시후 다시 시도해 주세요.
	$inquiryok_err_msg_spam = "由于垃圾邮件，该词无法使用。";	//단어는 스팸 때문에 사용 하실 수 없습니다.
	$inquiryok_success_msg = "您的询问已收到。";	//문의하기가 접수 되었습니다.
	$inquiryok_err_input = "输入的内容异常。";	//비정상적으로 입력 되었습니다.
	$inquiryok_err_acess = "警告！！！\n\n异常访问。";	//경 고 !!!\n\n비정상적으로 접근했습니다.
} else {
	// script 메세지
	$inquiryok_err_msg_retry = "잠시후 다시 시도해 주세요.";	//잠시후 다시 시도해 주세요.
	$inquiryok_err_msg_spam = "단어는 스팸 때문에 사용 하실 수 없습니다.";	//단어는 스팸 때문에 사용 하실 수 없습니다.
	$inquiryok_success_msg = "문의하기가 접수 되었습니다.";	//문의하기가 접수 되었습니다.
	$inquiryok_err_input = "비정상적으로 입력 되었습니다.";	//비정상적으로 입력 되었습니다.
	$inquiryok_err_acess = "경 고 !!!\n\n비정상적으로 접근했습니다.";	//경 고 !!!\n\n비정상적으로 접근했습니다.
}

if( $_POST[name] ) {

	$ip=$_SERVER['REMOTE_ADDR'];

	// 스팸 IP 검증
	$time = date("Y-m-d H:i");
	$time_check = $db->cnt("cs_online","where ip='$ip' and reg_date like '$time%'");
	if($time_check >0){
		sendResult("fail", $inquiryok_err_msg_retry); //잠시후 다시 시도해 주세요.
		exit();
	}



	// 스팸 특정 문자 검색
	$admin_stat = $db->object("cs_admin", "order by idx asc limit 1");
	$numt = $admin_stat->spam_text;
	$nu = explode(",",$numt);

	// 파라미터 설정
	if($_POST[name])	{$name		= 	$tools->filter($_POST[name]);}		// 이름
	if($_POST[email1])	{$email1	= 	$tools->filter($_POST[email1]);}	// 이메일
	if($_POST[email2])	{$email2	= 	$tools->filter($_POST[email2]);}	// 이메일
	if($_POST[phone])	{$phone		= 	$tools->filter($_POST[phone]);}		// 연락처
	if($_POST[company])	{$company	= 	$tools->filter($_POST[company]);}	// 회사명
	if($_POST[part])	{$part	=$tools->filter($_POST[part]);}				// 파트명
	if($_POST[request_quantity]){$request_quantity	=$tools->filter($_POST[request_quantity]);}	// 의뢰수량
	if($_POST[inquiry_content]){$inquiry_content	=$tools->filter($_POST[inquiry_content]);}	// 문의내용
	if($_POST[genuine]){$genuine	=$tools->filter($_POST[genuine]);}	// 정품보유여부
	if($_POST[content]){$content	=$tools->filter($_POST[content]);}	// 상세내용
	$email	= $email1."@".$email2;

	// 쿼리
	$query	= "name='$name',
			email='$email',
			phone='$phone',
			company='$company',
			part='$part',
			request_quantity='$request_quantity',
			inquiry_content='$inquiry_content',
			genuine='$genuine',
			content='$content'";

	// 스팸 확인
	$spam_word = $tools->checkSpam($nu, $query);
	if($spam_word != null) {
		sendResult("fail", "[$spam_word] ".$inquiryok_err_msg_spam); //단어는 스팸 때문에 사용 하실 수 없습니다.
		exit();
	}

	// 쿼리 실행
	if( $db->insert("cs_sa_inquiry", $query.", ip='$ip', reg_date=now()") ) {
		// 쿼리 등록 성공
		sendResult("success", $inquiryok_success_msg); //문의하기가 접수 되었습니다.
	} else {
		// 쿼리 등록 실패
		sendResult("fail", $inquiryok_err_input); //비정상적으로 입력 되었습니다.
	}
} else {
	sendResult("fail", $inquiryok_err_acess); //경 고 !!!\n\n비정상적으로 접근했습니다.
}

function sendResult($result, $resultMsg){
	// JSON 형식으로 출력
	header('Content-Type: application/json');

	$output = array(
		"result" => $result,
		"resultMsg" => $resultMsg,
	);

	echo json_encode($output);
	exit();
}
?>

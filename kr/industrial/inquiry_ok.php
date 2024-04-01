<?
header("Content-type: text/html; charset=utf-8");
include $_SERVER['DOCUMENT_ROOT']."/common.php";

//if(!strstr($_SERVER['HTTP_REFERER'],"도메인 단어")){ $tools->alertJavaGo("비정상적인 접근 입니다.","/"); exit; }

if( $_POST[name] ) {

	$ip=$_SERVER['REMOTE_ADDR'];

	//////////////////////////////////////// 스팸처리 Start ////////////////////////////////////////////////////////
	$time = date("Y-m-d H:i");
	$time_check = $db->cnt("cs_online_product","where ip='$ip' and reg_date like '$time%'");
	if($time_check >0){
		$tools->errMsg('잠시후 다시 시도해 주세요.');
		exit;
	}
	//////////////////////////////////////// 스팸처리 End ////////////////////////////////////////////////////////

	$subject	= 	$tools->filter($_POST[company]);
	$name		= 	$tools->filter($_POST[name]);
	$tel1			= 	$tools->filter($_POST[tel1]);
	$tel2			= 	$tools->filter($_POST[tel2]);
	$tel3			= 	$tools->filter($_POST[tel3]);
	$phone1	= $tools->filter($_POST[phone1]);
	$phone2	= $tools->filter($_POST[phone2]);
	$phone3	= $tools->filter($_POST[phone3]);
	$email1		= 	$tools->filter($_POST[email1]);
	$email2		= 	$tools->filter($_POST[email2]);
	$content	= 	$tools->filter2($_POST[content]);

	if($tel1)			{$tel		= $tel1."-".$tel2."-".$tel3;}
	if($phone1)	{$phone= $phone1."-".$phone2."-".$phone3;}
	if($email1)	{$email	= $email1."@".$email2;}

	if( $_FILES[bbs_file][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[bbs_file][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[bbs_file][size]  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES[bbs_file][name],-5);
		$fn = explode(".",$filename);
		$EXT_TMP = $fn[1];
		$file_name	= time()."1.".$EXT_TMP;
		$sfile_name = $_FILES[bbs_file][name];
		if( !@move_uploaded_file($_FILES[bbs_file][tmp_name], $ROOT_DIR."/data/upload/".$file_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file][tmp_name]);	}
	} else {
		$file_name 	= "";
	}

	if( $db->insert("cs_online_product",
	"subject='$subject',
	name='$name',
	tel='$tel',
	phone='$phone',
	email='$email',
	bbs_file='$file_name',
	sbbs_file='$sfile_name',
	content='$content',
	ip='$ip',
	reg_date=now()") ) { 

	//메일보내기(시작)
	/*
	include $_SERVER['DOCUMENT_ROOT']."/lib/mail_class.php";
	$mail = new my_mime_mail();
	$admin_stat = $db->object("cs_admin","");

	if($admin_stat->shop_email){

		$mail_row = $db->object("cs_mailform","where code='online'");

		$mail_subject			= $mail_row->subject;
		$mail_content			= $mail_row->content;
		
		$mail_subject = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $mail_subject);

		$mail_content = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $mail_content);
		$mail_content = str_replace("[{USER_NAME}]", $name, $mail_content);

		$mail_content = str_replace("[{USER_TEL}]", $tel, $mail_content);
		$mail_content = str_replace("[{USER_PHONE}]", $phone, $mail_content);
		$mail_content = str_replace("[{USER_EMAIL}]", $email, $mail_content);
		$mail_content = str_replace("[{USER_CONTENT}]", nl2br($content), $mail_content);
		$mail_content = str_replace("[{SHOP_DOMAIN}]", "http://".$_SERVER['HTTP_HOST'], $mail_content);

		$conf['charset'] = "UTF-8";
		$mail_to_name		= "=?$conf[charset]?B?".base64_encode($name) . "?=";
		$mail_from_name	= "=?$conf[charset]?B?".base64_encode($admin_stat->shop_name) . "?=";
		$mail_subject			= "=?$conf[charset]?B?".base64_encode($mail_subject) . "?=";

		$mail->to =  $mail_from_name." <".$admin_stat->shop_email.">";
		$mail->from = $mail_from_name." <".$admin_stat->shop_email.">";
		$mail->subject = $mail_subject;
		$mail->body = $mail_content;
		$mail->send();

	}
	*/
	//메일보내기(종료)

	$tools->alertJavaGo("온라인신청이 접수 되었습니다.", "transcend.php"); } else { $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}
?>
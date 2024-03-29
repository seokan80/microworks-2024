<?
header("Content-type: text/html; charset=utf-8");
include $_SERVER['DOCUMENT_ROOT']."/common.php";

if(!strstr($_SERVER['HTTP_REFERER'],"microworks")){ $tools->alertJavaGo("비정상적인 접근 입니다.","/"); exit; }

if( $_POST[name] ) {

	$ip=$_SERVER['REMOTE_ADDR'];

	//////////////////////////////////////// 스팸처리 Start ////////////////////////////////////////////////////////
	$time = date("Y-m-d H:i");
	$time_check = $db->cnt("cs_online","where ip='$ip' and reg_date like '$time%'");
	if($time_check >0){
		$tools->errMsg('잠시후 다시 시도해 주세요.');
		exit;
	}
	//////////////////////////////////////// 스팸처리 End ////////////////////////////////////////////////////////

	////////////////////////////// 특정 문자막기 방식의 스팸처리 S /////////////////////
	$admin_stat = $db->object("cs_admin", "order by idx asc limit 1");
	$numt = $admin_stat->spam_text;
	$nu = explode(",",$numt);

	//content
	for($i=0;$i<count($nu);$i++){
	 
	 if($nu[$i]){
		 $num = substr_count($_POST[content],$nu[$i]);
		 if($num>0){
			 $tools->errMsg("$nu[$i] 란 단어는 스팸 때문에 사용 하실 수 없습니다.");
			exit;
		 }
	 }
	 
	} 
	
	//name
	for($i=0;$i<count($nu);$i++){
	 
	 if($nu[$i]){
		 $num = substr_count($_POST[name],$nu[$i]);
		 if($num>0){
			 $tools->errMsg("$nu[$i] 란 단어는 스팸 때문에 사용 하실 수 없습니다.");
			exit;
		 }
	 }
	 
	} 

	//email1
	for($i=0;$i<count($nu);$i++){
	 
	 if($nu[$i]){
		 $num = substr_count($_POST[email1],$nu[$i]);
		 if($num>0){
			 $tools->errMsg("$nu[$i] 란 단어는 스팸 때문에 사용 하실 수 없습니다.");
			exit;
		 }
	 }
	 
	} 

	//email2
	for($i=0;$i<count($nu);$i++){
	 
	 if($nu[$i]){
		 $num = substr_count($_POST[email2],$nu[$i]);
		 if($num>0){
			 $tools->errMsg("$nu[$i] 란 단어는 스팸 때문에 사용 하실 수 없습니다.");
			exit;
		 }
	 }
	 
	} 

	//tel1
	for($i=0;$i<count($nu);$i++){
	 
	 if($nu[$i]){
		 $num = substr_count($_POST[tel1],$nu[$i]);
		 if($num>0){
			 $tools->errMsg("$nu[$i] 란 단어는 스팸 때문에 사용 하실 수 없습니다.");
			exit;
		 }
	 }
	 
	} 

	//tel2
	for($i=0;$i<count($nu);$i++){
	 
	 if($nu[$i]){
		 $num = substr_count($_POST[tel2],$nu[$i]);
		 if($num>0){
			 $tools->errMsg("$nu[$i] 란 단어는 스팸 때문에 사용 하실 수 없습니다.");
			exit;
		 }
	 }
	 
	} 

	//tel3
	for($i=0;$i<count($nu);$i++){
	 
	 if($nu[$i]){
		 $num = substr_count($_POST[tel3],$nu[$i]);
		 if($num>0){
			 $tools->errMsg("$nu[$i] 란 단어는 스팸 때문에 사용 하실 수 없습니다.");
			exit;
		 }
	 }
	 
	} 

	//company
	for($i=0;$i<count($nu);$i++){
	 
	 if($nu[$i]){
		 $num = substr_count($_POST[company],$nu[$i]);
		 if($num>0){
			 $tools->errMsg("$nu[$i] 란 단어는 스팸 때문에 사용 하실 수 없습니다.");
			exit;
		 }
	 }
	 
	} 
	////////////////////////////// 특정 문자막기 방식의 스팸처리 E /////////////////////


	if($_POST[subject])	{$subject	= 	$tools->filter($_POST[subject]);}
	if($_POST[name])		{$name		= 	$tools->filter($_POST[name]);}
	if($_POST[tel1])			{$tel1			= 	$tools->filter($_POST[tel1]);}
	if($_POST[tel2])			{$tel2			= 	$tools->filter($_POST[tel2]);}
	if($_POST[tel3])			{$tel3			= 	$tools->filter($_POST[tel3]);}
	if($_POST[phone1])	{$phone1	= $tools->filter($_POST[phone1]);}
	if($_POST[phone2])	{$phone2	= $tools->filter($_POST[phone2]);}
	if($_POST[phone3])	{$phone3	= $tools->filter($_POST[phone3]);}
	if($_POST[email1])	{$email1	= 	$tools->filter($_POST[email1]);}
	if($_POST[email2])	{$email2	= 	$tools->filter($_POST[email2]);}
	$company = $tools->filter($_POST[company]);
	
	if($tel1)			{$tel		= $tel1."-".$tel2."-".$tel3;}
	if($phone1)	{
		$phone= $phone1."-".$phone2."-".$phone3;
	}else{
		$phone = $tools->filter($_POST[phone]);
	}
	if($email1)	{
		$email	= $email1."@".$email2;
	}else{
		$email = $tools->filter($_POST[email]);
	}

	if( $db->insert("cs_online",
	"subject='$subject',
	name='$name',
	tel='$tel',
	phone='$phone',
	email='$email',
	bbs_file='$file_name',
	sbbs_file='$sfile_name',
	company='$company',
	content='$_POST[content]',
	ip='$ip',
	reg_date=now()") ) { 

	//메일보내기(시작)
	
	include $_SERVER['DOCUMENT_ROOT']."/lib/mail_class.php";
	$mail = new my_mime_mail();
	$admin_stat = $db->object("cs_admin","");
	$mail_row = $db->object("cs_mailform","where code='online'");

	$mail_from_name	= $admin_stat->shop_name;
	$mail_subject			= $mail_row->subject;
	$mail_content			= $mail_row->content;
	
	$mail_subject = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $mail_subject);

	$mail_content = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $mail_content);
	$mail_content = str_replace("[{USER_NAME}]", $name, $mail_content);

	$mail_content = str_replace("[{USER_TEL}]", $phone, $mail_content);
	$mail_content = str_replace("[{USER_COMPANY}]", $company, $mail_content);
	$mail_content = str_replace("[{USER_EMAIL}]", $email, $mail_content);
	$mail_content = str_replace("[{USER_CONTENT}]", nl2br($_POST[content]), $mail_content);
	$mail_content = str_replace("[{SHOP_DOMAIN}]", "http://".$_SERVER['HTTP_HOST'], $mail_content);

	$conf['charset'] = "UTF-8";
	$mail_to_name		= "=?$conf[charset]?B?".base64_encode($name) . "?=";
	$mail_from_name	= "=?$conf[charset]?B?".base64_encode($mail_from_name) . "?=";
	$mail_subject			= "=?$conf[charset]?B?".base64_encode($mail_subject) . "?=";

	$mail->to =  $mail_from_name." <".$admin_stat->shop_email.">";
	$mail->from = $mail_from_name." <".$admin_stat->shop_email.">";
	$mail->subject = $mail_subject;
	$mail->body = $mail_content;
	$mail->send();
	
	//메일보내기(종료)

	$tools->alertJavaGo("Online application has been received.", "/"); } else { $tools->errMsg('It has been entered abnormally.');}
} else {
	$tools->errMsg('Approaching abnormally');
}
?>
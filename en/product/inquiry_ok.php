<?
header("Content-type: text/html; charset=utf-8");
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";

//if(!strstr($_SERVER['HTTP_REFERER'],"도메인 단어")){ $tools->alertJavaGo("비정상적인 접근 입니다.","/"); exit; }

if( $_POST[name] ) {

	$ip=$_SERVER['REMOTE_ADDR'];

	//////////////////////////////////////// 스팸처리 Start ////////////////////////////////////////////////////////
	$time = date("Y-m-d H:i");
	$time_check = $db->cnt("cs_estimate","where ip='$ip' and reg_date like '$time%'");
	if($time_check >0){
		$tools->errMsg('잠시후 다시 시도해 주세요.');
		exit;
	}
	//////////////////////////////////////// 스팸처리 End ////////////////////////////////////////////////////////

	$name		= 	$tools->filter($_POST[name]);
	$phone1	= $tools->filter($_POST[phone1]);
	$phone2	= $tools->filter($_POST[phone2]);
	$phone3	= $tools->filter($_POST[phone3]);
	$email1		= 	$tools->filter($_POST[email1]);
	$email2		= 	$tools->filter($_POST[email2]);
	$company = $tools->filter($_POST[company]);
	$content	= 	$tools->filter2($_POST[content]);

	if($phone1)	{$phone= $phone1."-".$phone2."-".$phone3;}
	if($email1)	{$email	= $email1."@".$email2;}

	if( $db->insert("cs_estimate",
	"code='$_SESSION[CART]',
	name='$name',
	phone='$phone',
	email='$email',
	company='$company',
	content='$content',
	ip='$ip',
	reg_date=now()") ) { 

		$rs = $db->select("cs_cart","where code='$_SESSION[CART]' order by idx asc");
		while($row = mysql_fetch_object($rs)){

			$ea = ${"ea".$row->idx};

			$db->insert("cs_estimate_product","code='$row->code',goods_idx='$row->goods_idx',goods_name='$row->goods_name',ea='$ea'");

		}

		$db->delete("cs_cart","where code='$_SESSION[CART]'");
		$_SESSION[CART] = "";

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

	$tools->alertJavaGo("Uploaded.", "stock.php"); } else { $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}
?>
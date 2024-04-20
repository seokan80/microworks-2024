<?
include ("../header.php");

//이메일
$mail_row = $db->object("cs_mailform","where code='password'");
include $_SERVER['DOCUMENT_ROOT']."/lib/mail_class.php";
$mail = new my_mime_mail();

//회원정보
$mem_row = $db->object("cs_member", "where idx='$idx'");

//패스워드 변경
$md5_passwd = substr(md5(rand()),0,8);
$passwd = md5($md5_passwd);
$query = "update cs_member set passwd='$passwd' where idx='$idx'";
mysql_query($query);

//메일보내기
$mail_from		= $admin_stat->shop_name;
$mail_subject	= $mail_row->title;
$mail_content	= $mail_row->content;

$mail_content = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $mail_content);
$mail_content = str_replace("[{USER_NAME}]", $mem_row->name, $mail_content);
$mail_content = str_replace("[{USER_ID}]", $mem_row->userid, $mail_content);
$mail_content = str_replace("[{USER_PASSWD}]", $md5_passwd, $mail_content);
$mail_content = str_replace("[{SHOP_DOMAIN}]", $site_url, $mail_content);

$conf['charset'] = "UTF-8";
$mail_from		= "=?$conf[charset]?B?".base64_encode($mail_from) . "?=";

$mail->to =  $mem_row->name." <".$mem_row->email.">";
$mail->from = $mail_from." <".$admin_stat->shop_email.">";
$mail->subject = $mail_subject;
$mail->body = $mail_content;
$mail->send();

$tools->msgClose("메일로 임시 비밀번호를 보냈습니다.");

include ("../footer.php");
?>
<?
$mod	= "member";	
$menu	= "member";
include('../header.php');

$table_name	= "cs_member";
$returnURL		= $returnURL? $returnURL:"member.php";

if( $_POST[idx]) {

	$idx			=	$tools->filter($_POST[idx]);
	$level			=	$tools->filter($_POST[level]);
	$name		=	$tools->filter($_POST[name]);
	$email		=	$tools->filter($_POST[email]);
	$zip_new	=	$tools->filter($_POST[zip_new]);
	$add1		=	$tools->filter($_POST[add1]);
	$add2		=	$tools->filter($_POST[add2]);
	$tel1			=	$tools->filter($_POST[tel1]);
	$tel2			=	$tools->filter($_POST[tel2]);
	$tel3			=	$tools->filter($_POST[tel3]);
	$phone1	= $tools->filter($_POST[phone1]);
	$phone2	= $tools->filter($_POST[phone2]);
	$phone3	= $tools->filter($_POST[phone3]);
	$birth1		=	$tools->filter($_POST[birth1]);
	$birth2		=	$tools->filter($_POST[birth2]);
	$birth3		=	$tools->filter($_POST[birth3]);

	if($tel1)			{$tel			= $tel1."-".$tel2."-".$tel3;}
	if($phone1)	{$phone	= $phone1."-".$phone2."-".$phone3;}
	if($birth1)		{$birth		= $birth1."-".$birth2."-".$birth3;}
	
	//이메일 중복 검색
	$mail_check = $db->cnt($table_name, "where email='$email' and not idx=$idx"); if( $mail_check ) { $tools->errMsg('이미 사용중인 이메일주소입니다.');}

	if( $db->update($table_name,
		"level='$level',
		name='$name',
		email='$email',
		zip_new='$zip_new',
		add1='$add1',
		add2='$add2',
		phone='$phone',
		tel='$tel',
		birth='$birth' where idx=$idx")) {
		$tools->alertJavaGo('회원정보 변경이 되었습니다.', $returnURL); }
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>
<?
include('../header.php');

if($_POST['mode']=="write"){

	// 숫자 체크
	if( !$tools->chkDigit($_POST[point])) { $tools->errMsg('포인트는 숫자로 입력해주세요.');}

	if( $_POST[title] ) {	

		$title	=	$tools->filter($_POST[title]);
		$sum	=	$tools->filter($_POST[sum]);
		$point	=	$tools->filter($_POST[point]);
		$userid=	$tools->filter($_POST[userid]);

		$point = $sum.$point;

		// 디비 입력
		if( $db->insert("cs_point", "userid='$userid', title='$title', point='$point', register=now()")) {
			$tools->metaGo("point.php?userid=$userid"); 
		} else { $tools->errMsg('포인트 등록에러');}
	} else {
		$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
	}
}


if($_GET['mode']=="del"){
	if($_GET[idx]) {

		$idx		=	$tools->filter($_GET[idx]);
		$userid	=	$tools->filter($_GET[userid]);

		if( $db->delete("cs_point", "where idx=$idx")) {
			$tools->metaGo("point.php?userid=$userid"); 
			}
	} else {
		$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
	}
}

include('../footer.php');
?>
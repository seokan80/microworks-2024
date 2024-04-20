<?
$mod	= "basic";	
$menu	= "shop";
include('../header.php'); 

$table_name = "cs_shop";
$returnURL		= $returnURL? $returnURL:"shop.php";

if( $_POST[hidden_bank_cnt] ) {	
// 계좌번호 입력 폼
	for( $i=$_POST[hidden_bank_cnt]; $i<10; $i++ ) {
		$bank1 = "bank_".$i."_1";
		$bank2 = "bank_".$i."_2";	
		$bank3 = "bank_".$i."_3";
		$_POST[$bank1] = ""; 
		$_POST[$bank2] = ""; 
		$_POST[$bank3] = ""; 
	}
	
	// 배송비
	if( $_POST[express_check] == 0 ) {
		$express_money = 0;
		$express_box_money = 0;
		$express_free = 0;
	} else if( $_POST[express_check] == 1) {
		$express_box_money = 0;
	} else if( $express_check == 2) {
		$express_money = 0;		
	}
	
	// 추천회원제
	if( $_POST[member_check] == 0 ) {
		$member_invite =0;
		$member_register =0;
	}


	$shop_ceo					=	$tools->filter($_POST[shop_ceo]);
	$shop_num					=	$tools->filter($_POST[shop_num]);
	$shop_fax						=	$tools->filter($_POST[shop_fax]);
	$shop_phone				=	$tools->filter($_POST[shop_phone]);
	$shop_address			=	$tools->filter($_POST[shop_address]);
	$pg_company				=	$tools->filter($_POST[pg_company]);
	$pg_id							=	$tools->filter($_POST[pg_id]);
	$bank_0_1					=	$tools->filter($_POST[bank_0_1]);
	$bank_0_2					=	$tools->filter($_POST[bank_0_2]);
	$bank_0_3					=	$tools->filter($_POST[bank_0_3]);

	$bank_1_1					=	$tools->filter($_POST[bank_1_1]);
	$bank_1_2					=	$tools->filter($_POST[bank_1_2]);
	$bank_1_3					=	$tools->filter($_POST[bank_1_3]);
	$bank_2_1					=	$tools->filter($_POST[bank_2_1]);
	$bank_2_2					=	$tools->filter($_POST[bank_2_2]);
	$bank_2_3					=	$tools->filter($_POST[bank_2_3]);
	$bank_3_1					=	$tools->filter($_POST[bank_3_1]);
	$bank_3_2					=	$tools->filter($_POST[bank_3_2]);
	$bank_3_3					=	$tools->filter($_POST[bank_3_3]);
	$bank_4_1					=	$tools->filter($_POST[bank_4_1]);

	$bank_4_2					=	$tools->filter($_POST[bank_4_2]);
	$bank_4_3					=	$tools->filter($_POST[bank_4_3]);
	$bank_5_1					=	$tools->filter($_POST[bank_5_1]);
	$bank_5_2					=	$tools->filter($_POST[bank_5_2]);
	$bank_5_3					=	$tools->filter($_POST[bank_5_3]);
	$bank_6_1					=	$tools->filter($_POST[bank_6_1]);
	$bank_6_2					=	$tools->filter($_POST[bank_6_2]);
	$bank_6_3					=	$tools->filter($_POST[bank_6_3]);
	$bank_7_1					=	$tools->filter($_POST[bank_7_1]);
	$bank_7_2					=	$tools->filter($_POST[bank_7_2]);

	$bank_7_3					=	$tools->filter($_POST[bank_7_3]);
	$bank_8_1					=	$tools->filter($_POST[bank_8_1]);
	$bank_8_2					=	$tools->filter($_POST[bank_8_2]);
	$bank_8_3					=	$tools->filter($_POST[bank_8_3]);
	$bank_9_1					=	$tools->filter($_POST[bank_9_1]);
	$bank_9_2					=	$tools->filter($_POST[bank_9_2]);
	$bank_9_3					=	$tools->filter($_POST[bank_9_3]);
	$express_check			=	$tools->filter($_POST[express_check]);
	$express_money			=	$tools->filter($_POST[express_money]);
	$express_box_money=	$tools->filter($_POST[express_box_money]);

	$express_free				=	$tools->filter($_POST[express_free]);
	$point_basic				=	$tools->filter($_POST[point_basic]);
	$point_register			=	$tools->filter($_POST[point_register]);
	$point_use					=	$tools->filter($_POST[point_use]);
	$member_check			=	$tools->filter($_POST[member_check]);
	$member_invite			=	$tools->filter($_POST[member_invite]);
	$member_register		=	$tools->filter($_POST[member_register]);


	$sql="shop_ceo='$shop_ceo',
		shop_num='$shop_num',
		shop_fax='$shop_fax',
		shop_phone='$shop_phone',
		shop_address='$shop_address',
		pg_company='$pg_company',
		pg_id='$pg_id',
		bank_0_1='$bank_0_1',
		bank_0_2='$bank_0_2',
		bank_0_3='$bank_0_3',
		bank_1_1='$bank_1_1',
		bank_1_2='$bank_1_2',
		bank_1_3='$bank_1_3',
		bank_2_1='$bank_2_1',
		bank_2_2='$bank_2_2',
		bank_2_3='$bank_2_3',
		bank_3_1='$bank_3_1',
		bank_3_2='$bank_3_2',
		bank_3_3='$bank_3_3',
		bank_4_1='$bank_4_1',
		bank_4_2='$bank_4_2',
		bank_4_3='$bank_4_3',
		bank_5_1='$bank_5_1',
		bank_5_2='$bank_5_2',
		bank_5_3='$bank_5_3',
		bank_6_1='$bank_6_1',
		bank_6_2='$bank_6_2',
		bank_6_3='$bank_6_3',
		bank_7_1='$bank_7_1',
		bank_7_2='$bank_7_2',
		bank_7_3='$bank_7_3',
		bank_8_1='$bank_8_1',
		bank_8_2='$bank_8_2',
		bank_8_3='$bank_8_3',
		bank_9_1='$bank_9_1',
		bank_9_2='$bank_9_2',
		bank_9_3='$bank_9_3',
		express_check='$express_check',
		express_money='$express_money',
		express_box_money='$express_box_money',
		express_free='$express_free',
		point_basic='$point_basic',
		point_register='$point_register',
		point_use='$point_use',
		member_check='$member_check',
		member_invite='$member_invite',
		member_register='$member_register'";
	
	// 디비입력
	if( $db->cnt($table_name, "")) { 
		if( $db->update($table_name, $sql) ) { 
			$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); 
		} else { 
			$tools->errMsg('비상적으로 입력 되었습니다.'); 
		}
	} else { 
		if( $db->insert($table_name, $sql) ) { 
			$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); 
		} else { 
			$tools->errMsg('비상적으로 입력 되었습니다.');
		}
	}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>
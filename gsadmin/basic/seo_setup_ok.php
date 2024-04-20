<? 
$mod	= "basic";	
$menu	= "seo_setup";
include('../header.php'); 

$table_name = "cs_seo";
$returnURL = "seo_setup.php?lang=$lang";

$mode				=	$tools->filter($_POST[mode]);
$title					=	$tools->filter($_POST[title]);
$author				=	$tools->filter($_POST[author]);
$description		=	$tools->filter($_POST[description]);
$keywords		=	$tools->filter2($_POST[keywords]);
$naver_meta	=	$tools->filter($_POST[naver_meta]);
$google_meta	=	$tools->filter($_POST[google_meta]);
$script_content	=	$tools->filter2($_POST[script_content]);
$lang = $tools->filter($_POST[lang]);


if($mode=="seo"){

	$sql="title='$title',
	author='$author',
	description='$description',
	keywords='$keywords',
	naver_meta='$naver_meta',
	lang='$lang',
	google_meta='$google_meta',
	script_content='$script_content'";
	
	// 디비입력
	if( $db->cnt($table_name, "where lang='$lang' "))		{
			$sql.="where lang='$lang' ";
			if( $db->update($table_name, $sql) ) { 
				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); 
			} else { 
				$tools->errMsg('비상적으로 입력 되었습니다.'); 
			}

	} else { 
			if( $db->insert($table_name, $sql) )	{ 
				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); 
			} else { 
				$tools->errMsg('비상적으로 입력 되었습니다.'); 
			}
	}
}else{
	$tools->errMsg('비상적으로 입력 되었습니다.'); 
}

include('../footer.php');
?>
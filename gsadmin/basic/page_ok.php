<?
$mod	= "basic";	
$menu	= "page";	
include('../header.php');

$table_name = "cs_page";
$returnURL		= $returnURL? $returnURL:"basic_setup.php";

$idx				=	$tools->filter($_POST[idx]);
$title				=	$tools->filter($_POST[title]);
$content		=	$tools->filter2($_POST[content]);
$page_index=	$tools->filter($_POST[page_index]);

if($content) {	
				
		if( $db->cnt($table_name, "where page_index='$page_index'")) {
			
			if( $db->update($table_name, "title='$title', content='$content' where page_index='$page_index'")) { 
				
					################# plupload 이미지 처리 #################
					$table_idx		= $idx;

					$result_delete = mysql_query("delete from cs_plupload where table_name='$table_name' and table_idx='$table_idx'");
					for($k=0; $k<sizeof($attach_image); $k++){
						plupload_update($table_name,$table_idx,$attach_image[$k],$file_name[$k]);
					}
					################# plupload 이미지 처리 #################

				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); } else { $tools->errMsg('비상적으로 입력 되었습니다.'); }} else { 

			if( $db->insert("cs_page",  "page_index='$page_index', title='$title', content='$content'") ) { 
				
					################# plupload 이미지 처리 #################

					$table_idx = max_count("idx",$table_name);
					for($k=0; $k<sizeof($attach_image); $k++){
						plupload_update($table_name,$table_idx,$attach_image[$k],$file_name[$k]);
					}
					################# plupload 이미지 처리 #################	

				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); } else { $tools->errMsg('비상적으로 입력 되었습니다.'); }}
	} else {
		
		$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
	}

include('../footer.php');
?>
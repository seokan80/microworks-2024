<?
$mod	= "banner";
$menu	= "main";
include('../header.php');

if( $_POST[title] ) {

    $idx			= $tools->filter($_POST[idx]);
    $title			= $tools->filter($_POST[title]);
    $direction		= $tools->filter($_POST[direction]);
    $first_order	= $tools->filter($_POST[first_order]);
    $period_yn		= $tools->filter($_POST[period_yn]);
    $period_start_date	= $tools->filter($_POST[period_start_date]);
    $period_end_date	= $tools->filter($_POST[period_end_date]);
    $link_url       	= $tools->filter($_POST[link_url]);

    // 좌우 위치 확인
    $detail = $db->object("cs_banner_main", " where idx='$idx'");
    if($detail->direction != $direction) {
        // 좌우 위치가 변경 되었으면,
        $directionCnt = $db->cnt("cs_banner_main", "where direction='".$direction."' and CURDATE() between period_start_date and period_end_date");
        if($directionCnt >= 5) {
            $tools->errMsg('배너는 최대 5개까지 등록할 수 있습니다.');
        }
    }

    if( $_FILES[images_file][size] > 0 ) {
        if( !strstr($_FILES[images_file][type], 'image')) { $tools->errMsg('이미지 파일만 등록 가능합니다.'); }
        if( $_FILES[images_file][size] > 1024*1024*4) { $tools->errMsg('업로드 용량 초과입니다\\n\\n4메가 까지 업로드 가능합니다'); }
        $images_file = 'MAIN_'.time();
        if( !@move_uploaded_file( $_FILES[images_file][tmp_name], "../../data/designImages/".$images_file )) { $tools->errMsg('파일 업로드 에러'); } else { @unlink($_FILES[images_file][tmp_name]); }
    }


    // 디비 입력
    $sql="title='$title',
		direction='$direction',
		first_order='$first_order',
		period_yn='$period_yn',
		period_start_date='$period_start_date',
		period_end_date='$period_end_date',
		link_url='$link_url'";
    if($images_file != null) {
        $sql = $sql.", images_file='$images_file'";
    }
    $sql = $sql." where idx='$idx'";
    if( $db->update("cs_banner_main", $sql) ) {

        ################# plupload 이미지 처리 #################
        if($images_file != null) {
            $table_name = "cs_banner_main";

            $table_idx = max_count("idx",$table_name);
            for($k=0; $k<sizeof($attach_image); $k++){
                plupload_update($table_name,$table_idx,$attach_image[$k],$file_name[$k]);
            }
            ################# plupload 이미지 처리 #################
        }


        $tools->alertJavaGo('메인배너가 등록 되었습니다.', 'main.php'); } else { @unlink("../../data/designImages/".$images_file); $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
    $tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>

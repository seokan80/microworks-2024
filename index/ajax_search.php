<?
// 메인 검색 ajax data
include $_SERVER['DOCUMENT_ROOT']."/common.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";
$search_order = isset($_GET['search_order']) ? $_GET['search_order'] : '';
$code = isset($_GET['code']) ? $_GET['code'] : '';
$point = isset($_GET['point']) ? $_GET['point'] : '';

$totalList = 0;

$table = "cs_bbs_data";
$query=" where code='$code' ";
if($code === 'trend_list') {
    $query.=" and subject like '%$search_order%'";
} else if($code === 'stock') {
    $query.=" and lang='2' ";
} else if($code === 'oem') {
     $query.=" and lang='2' ";
 }

if($code === 'trend_list') {
    $totalList = $db->cnt($table,$query);
}

$query.="  order by idx desc LIMIT 5 ";
$rs = $db->select($table,$query);

$qb = "";
if($code === 'stock' || $code === 'oem') {
    $kind = ($code === 'stock')? '1' : '2';
    $bbs_row = $db->object("cs_bbs_data","where code='$code' and lang='2' order by ref desc, idx desc limit 1");
    $rs = $db->select("cs_bbs_data","where code='$code' and lang='2' order by idx asc");

    $qb = "";
    while($bbs_row2 = mysql_fetch_object($rs)){
    	if($qb==""){
    		$qb = "ex_code='".$bbs_row2->ex_code."'";
    	} else {
    		$qb.=" or ex_code='".$bbs_row2->ex_code."'";
    	}
    }

    $table = "cs_excel_b";
    if($qb){
    	$query=" where ($qb) and kind='$kind' ";
    } else {
    	$query=" where ex_code='$bbs_row->ex_code' and kind='$kind' ";
    }

    $query.="and attr_1 like '%$search_order%' ";

    $totalList = $db->cnt($table,$query);
    $query.="  order by idx desc LIMIT 5";
    $rs = $db->select($table,$query);
}

// 쿼리 결과를 배열로 변환
$list = array();
$index = 0;
while ($rows = mysql_fetch_array($rs, MYSQL_ASSOC)) {
    $row = array();
    foreach ($rows as $key => $value){
        $row[$key] = $value;

        if($code === 'trend_list' && $key === 'reg_date') {
            $row[$key] = $tools->strDateCut($value, 3);
            $row['new_img'] = $page->bbsNewImg($value, 24, '<span class="new-icon">N</span>');
        }
        if($code === 'trend_list' && $key === 'ex_code') {
            $row['prd_cnt'] = $db->cnt("cs_excel","where ex_code='$value' and kind='3' ");
        }
    }
    $list[] = $row;

}

$output = array(
    "point" => $point,
    "count" => $totalList,
    "list" => $list
);

// JSON 형식으로 출력
header('Content-Type: application/json');
echo json_encode($output);
?>

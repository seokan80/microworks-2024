<? include "../../common.php"; 
	
	$idx = 110;
	$row = $db->object("cs_bbs_data","where idx='$idx' ");
	
	$prd_idx = 14397;

	$prd_row = $db->object("cs_excel","where idx='$prd_idx' ");
	$query = "where no='$prd_row->no' and week<='$row->week' and years<='$row->years' and lang='$lang' order by years desc, week desc limit 12";
	//$prev_rs = $db->select("cs_excel","where no='$prd_row->no' and week<='$row->week' and years<='$row->years' and lang='$lang' order by years desc, week desc limit 12");
	$query2 = "where no='$prd_row->no' and week<='$row->week' and years<='$row->years' order by years desc, week desc limit 12";
	//echo $query2;
	$prev_rs = $db->select("cs_excel","where no='$prd_row->no' and week<='$row->week' and years<='$row->years' order by years desc, week desc limit 12");
	$this_list = array();
	while($prev_row = mysql_fetch_array($prev_rs)){
		$tprice = iconv("UTF-8","ASCII//TRANSLIT",$prev_row[price]);
		$tprice = str_replace(" ","",$tprice);
		echo $tprice."/";
	}
?>
<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
if($_GET[idx]){
	$idx = $_GET[idx];
	$row = $db->object("cs_bbs_data","where idx='$idx' ");
}

$years = $row->years;
$week = $row->week;
$wlen = strlen($week);
if($wlen==1){ $week_t = "0".$week; } else { $week_t = $week; }
$yearweek = $years.$week_t;

if($_GET[prd_idx]){
	$prd_idx = $_GET[prd_idx];
	$prd_row = $db->object("cs_excel","where idx='$prd_idx' ");
	$no = addslashes($prd_row->no);
	$query = "where no='$no' and week<='$row->week' and years<='$row->years' and lang='$lang' order by years desc, week desc limit 12";
	//$prev_rs = $db->select("cs_excel","where no='$prd_row->no' and week<='$row->week' and years<='$row->years' and lang='$lang' order by years desc, week desc limit 12");
	$query2 = "where no='$no' and week<='$row->week' and years<='$row->years' order by years asc, week asc limit 12";
	//$prev_rs = $db->select("cs_excel","where no='$no' and week<='$row->week' and years<='$row->years' order by years asc, week asc limit 12");
	$prev_rs = $db->select("cs_excel","where no='$no' and (yearweek!='' and yearweek<='$yearweek') order by yearweek desc limit 12");
	$this_list = array();
	while($prev_row = mysql_fetch_array($prev_rs)){

		//$this_bbs = $db->object("cs_bbs_data","where ex_code='$prev_row[ex_code]'");
		//echo $this_bbs->subject."/";
		array_push($this_list,$prev_row[idx]);
	}
}



//echo $yearweek;

?>
<script type="text/javascript" src="/js/layer_popup.js"></script>

<script>
	google.charts.load('current', {packages: ['corechart', 'line']});
	google.charts.setOnLoadCallback(drawLineColors);
	$(window).resize(function(){ 
		drawLineColors(); 
	}); 
	function drawLineColors() {
		  var data = new google.visualization.DataTable();
		  data.addColumn('string', 'X');
		  data.addColumn('number', '');

		  data.addRows([
			<?
				for($i = (count($this_list)-1);$i>=0; $i--){
				  //$i = $prev_rscnt;
				  $this_excel = $db->object("cs_excel","where idx='$this_list[$i]' ");
				  $this_cnt = $db->cnt("cs_bbs_data","where ex_code='$this_excel->ex_code'");

				  if($this_cnt>0){
				  $this_bbs = $db->object("cs_bbs_data","where ex_code='$this_excel->ex_code' ");
					//$this_excel = $db->object("cs_excel","where idx='$prev_row->idx' ");
					//$this_bbs = $db->object("cs_bbs_data","where ex_code='$this_excel->ex_code'");
					//if(is_numeric($this_excel->price)){
					
					$tprice = $this_excel->price;
					$tprice = iconv("UTF-8","ASCII//TRANSLIT",$tprice);
					$tprice = str_replace(" ","",$tprice);
					$tprice = (double)$tprice;

					$price = 0;
					if($tprice>0){
						$price = $this_excel->price;
					} else {
						$this_excel_list = $db->select("cs_excel","where idx<'$this_list[$i]' and no='$no' order by yearweek desc limit 20");
						$bprice = 0;
						while($this_excel2 = mysql_fetch_object($this_excel_list)){
							$bprice = iconv("UTF-8","ASCII//TRANSLIT",$this_excel2->price);
							$bprice = str_replace(" ","",$bprice);
							$bprice = (double)$bprice;
							if($bprice>0 and $price==0){
								$price = $bprice;
							}
						}
					}

					$this_price = 0;
					$tprice = $price;
					$tprice = iconv("UTF-8","ASCII//TRANSLIT",$tprice);
					$tprice = str_replace(" ","",$tprice);
					$tprice = (double)$tprice;
					if($tprice>0){
						$this_price = $tprice;
					}

					if($this_bbs->subject2){
						$subject = $this_bbs->subject2;
					} else {
						$subject = $this_bbs->subject;
					}

					if($i==0){?>
						["<?=$subject?>", <?=$this_price?>]
					<?}else{?>
						["<?=$subject?>", <?=$this_price?>],
					<?}?>
				<? } } ?>
			
		  ]);

		  var options = {
			chartArea:{left:32, width:'93%'}, // 차트위치 및 크기
			//가로축
			hAxis: {
				title: 'Week',
				textStyle: {
					color: '#333',
					//fontSize: 20,
					italic: true
				},
				titleTextStyle: {
					color: '#ff7900',
					fontSize: 16,
				},
			},
			//세로축
			vAxis: {
			  title: 'Price',
				textStyle: {
					color: '#333',
					//fontSize: 20,
					italic: true
				  },
				  titleTextStyle: {
					color: '#ff7900',
					fontSize: 16,
				  }
			},
			legend: 'none', // 범례 
			colors: ['#ff7900'], //라인 색상
			pointSize : 5 // 라인 위 동그라미
		  };

		  var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
		  chart.draw(data, options);
		 
		}
</script>

<style>

</style>

<section class="footer-modal-content trend-popup">
	<a href="javascript:;" class="modal-close-btn" title="팝업 닫기"><i class="material-icons">&#xE14C;</i></a>
	<div class="footer-inner-box">
		<div class="footer-inner">
			<div class="clearfix">
				<div class="chart-con">
					<h4 class="chart-tit"><?=$row->subject?></h4><!-- list페이지의 제목입니다.-->
					  <div id="chart_div"></div>
				</div>
				<div class="tit-box">
					<?if($prd_row-part_1){?>
						<span class="tit01"><?=$prd_row->part_1?></span><!-- view페이지의 제목입니다.  -->
					<?}?>
					<?if($prd_row-part_2){?>
						<span class="tit02"><?=$prd_row->part_2?></span> <!-- view페이지의 테이블의 제목입니다.  -->
					<?}?>
					<p class="tit03"><?=$prd_row->name?></p>
				</div>
			</div>
		</div>
	</div>
</section>
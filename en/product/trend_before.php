<?
$page_num = "03";
$sub_num = "05";
$page_section = "product";
$sub_section = "trend";
$page_info = "PRODUCT SEARCH";
$sub_info = "Memory Trend (~2019)";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<article class="sub-page product-page">
					<div class="area">
					<article class="product-tit-box">
						<p class="product-tit">We will update the Memory Price trend every week and <br>you may check the memory price.</p>
						<p class="product-tit-txt">(Please kindly note that price can be changed at any time)</p>
					</article>

					<!-- 
						카테고리가 있는 게시판 리스트 START 
						기본 게시판과 조금 다릅니다. 확인부탁드려요~!
					-->
					<article class="bbs-list-con product-board-con">
						<div class="bbs-list-tbl">
							<p class="bbs-list-head">
								<span style="width:15.5%;">No</span>
								<span style="width:68%;" class="board-head-title">Subject</span>
								<span style="width:15.5%;"></span>
							</p>
							
<?
	$i=1;


	$table			= "zetyx_board_eng_memory";
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));
	$query		= "select * from $table where 1";
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (name like '%$search_order%' or phone like '%$search_order%' or content like '%$search_order%')";
			}
		}
	$rs				= mysql_query($query);
	$totalList	= mysql_num_rows($rs);

	$query = "select * from $table where 1";
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (name like '%$search_order%' or phone like '%$search_order%' or content like '%$search_order%')";
			}
		}
	$query.="  order by no desc LIMIT $startPage, $listScale";
	$result = mysql_query($query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

?>

	<?
		while($row = mysql_fetch_object($result)){
	?>						   

						   
						   <div class="bbs-list-row bbs-relative-row <? if($i==2){ ?>even-num<? } ?>">
								<div class="column bbs-no-data"><?=$listNo?></div>
								<div class="column bbs-title">
									<a href="<?=$site_url?>/product/trend_view2.php?no=<?=$row->no?>">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><?=$row->subject?></strong>
											<!-- <div class="bbs-subject-icons">
												<span class="new-icon">N</span>
												<span class="bbs-icons" title="파일첨부"><i class="material-icons"></i></span>
												<span class="bbs-icons" title="비밀글"><i class="material-icons"></i></span>
											</div> -->
										</div>
									</a>
								</div>
								<!-- <div class="column bbs-inline" data-label="제품수"><?=$row->hit?></div>
								<div class="column bbs-inline" data-label="등록일"><?=date("Y-m-d",$row->reg_date)?></div> -->
								<div class="column bbs-absolute" data-label="no"><a href="<?=$site_url?>/product/trend_view2.php?no=<?=$row->no?>"><p class="reply-state"><span>Detail View</span></p></a></div>
						   </div>
<? if($i==2){ $i=0; } ?>
<? $i++; $listNo--; } ?>
						   <!-- 
							 ★ 짝수 줄마다 배경색이 들어갑니다. 짝수 행마다 even-num 클래스를 추가해주세요! 
						   -->
						   
						</div>
						<div class="paging">
							<!-- <a href="" class="paging-arrow"><i class="material-icons" title="처음"></i></a>
							<a href="" class="paging-arrow"><i class="material-icons" title="이전"></i></a>
							<a href="" class="cur">1</a>
							<a href="">2</a>
							<a href="">3</a>
							<a href="">4</a>
							<a href="" class="paging-arrow"><i class="material-icons" title="다음"></i></a>
							<a href="" class="paging-arrow"><i class="material-icons" title="마지막"></i></a> -->

			<?
			$pageURL= "search_item=".urlencode($search_item);
			$pageURL.= "&search_order=".urlencode($search_order);

			if( $totalList > $listScale ) {
				if( $startPage+1 > $listScale*$pageScale ) {
					$prePage = $startPage - $listScale * $pageScale;
					echo "<a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$prePage' class='paging-arrow'><i class='material-icons' title='이전'></i></a>";
				}
				for( $j=0; $j<$pageScale; $j++ ) {
					$nextPage = ($totalPage * $pageScale + $j) * $listScale;
					$pageNum = $totalPage * $pageScale + $j+1;
					if( $nextPage < $totalList ) {
						if( $nextPage!= $startPage ) {
							echo "<a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nextPage'>$pageNum</a>";
						} else {
							echo "<a href='javascript:;' class='cur'>$pageNum</a>";
						}
					}
				}
				if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
					$nNextPage = ($totalPage+1) * $listScale * $pageScale;
					echo "<a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nNextPage' class='paging-arrow'><i class='material-icons' title='다음'></i></a>";
				}
			}
			if( $totalList <= $listScale) {
				echo "<a href='javascript:;' class='cur'>1</a>";
			}
			?>

						</div>
					</article>
					<!-- // 카테고리가 있는 게시판 리스트 END -->                   
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

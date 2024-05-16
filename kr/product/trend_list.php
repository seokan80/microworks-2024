<?
$page_num = "03";
$sub_num = "01";
//<!-- !NOTE S : 2024-04 추가 -->
$dep3_num = "01";
//<!-- !NOTE E : 2024-04 추가 -->
$page_section = "product";
//<!-- !NOTE S : 2024-04 변경 -->
$sub_section = "memory-biz";
//<!-- !NOTE E : 2024-04 변경 -->
$page_info = "PRODUCT SEARCH";
//<!-- !NOTE S : 2024-04 변경 -->
$sub_info = "메모리 가격 동향";
//<!-- !NOTE E : 2024-04 변경 -->
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";
$table = "cs_bbs_data";
$listScale = 10;
$pageScale = 8;
if(!$startPage){
	$startPage = 0;
}
$totalPage = floor($startPage / ($listScale * $pageScale));
$query=" where code='trend_list' ";
if($search_order){
	if($search_item){
		$query.=" and $search_item like '%$search_order%'";
	}else{
		$query.=" and subject like '%$search_order%'";
	}
}
$totalList = $db->cnt($table,$query);
$query.="  order by idx desc LIMIT $startPage, $listScale";
$rs = $db->select($table,$query);
if($startPage){
	$listNo = $totalList - $startPage;
} else {
	$listNo = $totalList;
}
$paging_queryString = $page->qs_call($startPage);
$list_index = 1;
?>
<style>
/* css */

</style>
<script>
/* js */

</script>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<!-- !NOTE S : 2024-04 추가 -->
				<article class="sub-page product-page">
						<div class="area">
							<article class="product-tit-box">
								<p class="product-tit">지난 메모리 가격동향 데이터를 확인하실 수 있습니다.</p>
								<p class="product-tit-txt">메모리 가격동향 데이터는 정확한 액수의 표시가 아니며, 지난 데이터에 대한 평균적인 통계자료로 참고만 하시기 바랍니다.</p>
							</article>
							
							<div class="table-wrapper type-trend">
								<article class="bbs-list-con">
									<div class="bbs-list-tbl">
										<div class="bbs-list-head">
											<!-- !NOTE S : 2024-04 변경 -->
											<span style="width:6.155%;">No</span>
											<span style="width:auto;" class="board-head-title">Subject</span>
											<span style="width:16.924%;">Number of products</span>
											<span style="width:12.308%;">Date</span>
											<span style="width:12.308%;"></span>
											<!-- !NOTE E : 2024-04 변경 -->
										</div>
										<?while($row = mysql_fetch_array($rs)){
												$list_index++;
												if($list_index%2==1){
													$even_num = "even_num";
												}else{
													$even_num = "";
												}
												$new_img = $page->bbsNewImg( $row[reg_date], 24, '<span class="new-icon">N</span>');
												$prd_cnt =$db->cnt("cs_excel","where ex_code='$row[ex_code]' and kind='3' ");

											?>
											<div class="bbs-list-row">
												<div class="column bbs-no-data"><?=$listNo?></div>
												<div class="column bbs-title">
													<a href="<?=$site_url?>/product/trend_view.php?idx=<?=$row[idx]?>&returnURL=<?=urlencode($_SERVER[REQUEST_URI])?>">
														<div class="bbs-subject-con">
															<strong class="bbs-subject-txt"><?=$row[subject]?></strong>
															<div class="bbs-subject-icons">
																<?=$new_img?>
															</div>
														</div>
													</a>
												</div>
												<div class="column bbs-inline" data-label="제품수"><?=$prd_cnt?></div>
												<div class="column bbs-inline" data-label="등록일"><?=$tools->strDateCut($row[reg_date],3);?></div>
												<!-- !NOTE S : 2024-04 변경 -->
												<div class="column" data-label="no"><a href="<?=$site_url?>/product/trend_view.php?idx=<?=$row[idx]?>&returnURL=<?=urlencode($_SERVER[REQUEST_URI])?>" class="button type-secondary"><strong>Detail
															View</strong></a>
													</div>
													<!-- !NOTE E : 2024-04 변경 -->
											</div>
											<?$listNo--;
											}?>
										</div>
										<?if(empty($totalList)){?>
											<p class="bbs-no-list">There is no written comment.</p>
										<?}?>
										<div class="paging">
											<? $page->var_Page($totalPage,$totalList, $listScale, $pageScale, $startPage,$paging_queryString);?>
										</div>
									<form name="bbs_search_form" method="get" action="/en/product/trend_list.php" class="pc-only">
										<div class="board-search-box">
											<select name="search_item">
												<option value="subject">Subject</option>
											</select>
											<input placeholder="" type="search" name="search_order" class="search-word" value="">
											<button type="submit" class="bbs-search-btn" title="검색"><i class="material-icons"></i></button>
										</div>
									</form>
									<div class="mo-only more-list">
										<button type="button"><i class="material-icons">&#xe5c5;</i>더보기 (1/20)</button>
									</div>
								</article>
							</div>
						</div>
					</article>
					<!-- !NOTE E : 2024-04 추가 -->
					<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
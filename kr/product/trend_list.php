<?
$page_num = "03";
$sub_num = "01";
$page_section = "product";
$sub_section = "trend";
$page_info = "PRODUCT SEARCH";
$sub_info = "메모리 가격 동향";
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
											<span style="width:6.155%;">No</span>
											<span style="width:auto;" class="board-head-title">Subject</span>
											<span style="width:16.924%;">Number of products</span>
											<span style="width:12.308%;">Date</span>
											<span style="width:12.308%;"></span>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">5</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
														<div class="bbs-subject-icons">
															<span class="new-icon">N</span>
														</div>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">4</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">3</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">2</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">1</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">5</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
														<div class="bbs-subject-icons">
															<span class="new-icon">N</span>
														</div>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">4</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">3</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">2</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
										<div class="bbs-list-row">
											<div class="column bbs-no-data">1</div>
											<div class="column bbs-title">
												<a href="#">
													<div class="bbs-subject-con">
														<p class="bbs-subject-txt">Memory <span class="text-point">Price</span> Trend /3rd week of
															March, 2024</p>
													</div>
												</a>
											</div>
											<div class="column bbs-inline" data-label="제품수">206</div>
											<div class="column bbs-inline" data-label="등록일">2021-08-13</div>
											<div class="column" data-label="no"><a href="#" class="button type-secondary"><strong>Detail
														View</strong></a></div>
										</div>
									</div>
									<div class="paging pc-only">
										<a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xEAC3;</i></a>
										<a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xE314;</i></a>
										<a href="javascript:;" class="cur">1</a>
										<a href="#">2</a> 
										<a href="#">3</a> 
										<a href="#">4</a> 
										<a href="#">5</a> 
										<a href="#">6</a> 
										<a href="#">7</a> 
										<a href="#">8</a>
										<a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xE315;</i></a>
										<a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xEAC9;</i></a>
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
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
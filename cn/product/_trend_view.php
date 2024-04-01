<?
$page_num = "03";
$sub_num = "01";
$page_section = "product";
$sub_section = "trend";
$page_info = "PRODUCT SEARCH";
$sub_info = "Memory trend";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
if($_GET[idx]){
	$idx = $tools->filter($_GET[idx]);
	$row = $db->object("cs_bbs_data","where idx='$idx' ");
	$part1_rs = $db->select("cs_excel","where ex_code='$row->ex_code' and week='$row->week' and years='$row->years' and kind='1' order by idx asc");
}

?>
<style>
/* css */

</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>

/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<article class="sub-page product-page">
					<p class="product-view-top-tit area"><i class="material-icons">&#xe85c</i><?=$row->subject?> </p><!-- list페이지에서 클릭한 글의 제목이 들어갑니다. -->
					<article class="product-view-page"> <!-- 배경있는 항목이 증가할수있습니다.-->
						<h4 class="tit">DRAM</h4>
						<div class="inner area"> 
						<!-- 
							테이블이 증가할수있습니다.
							플러스 표시를 클릭하면 레이어 팝업창이 뜹니다.
						-->
							<div class="product-view-con">
								<p class="con-tit">Graphic DDR</p>
								<div class="custom-scrollbar-wrapper">
									<div class="scroll-object-box">
										<table class="product-view-tbl scroll-object">
											<colgroup>
												<col width="24.16%">
												<col width="23.08%">
												<col width="15.83%">
												<col width="15.83%">
												<col width="12.5%">
												<col width="8.6%">
											</colgroup>
											<thead>
												<tr>
													<th>제품명</th>
													<th>제품번호</th>
													<th>제조사</th>
													<th>수량/가격</th>
													<th>비고</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr onclick="javascript:layerLoad('<?=$site_url?>/product/trend_popup.php'); return false;" >
													<td>GDDR3 128Mx16PC1600</td>
													<td>W632GG6MB-12</td>
													<td>Windbond</td>
													<td>10000 @ call</td>
													<td>Stock HK</td>
													<td class="more-col"><a href="" class="more-btn"><span></span></a></td>
												</tr>
												<tr onclick="javascript:layerLoad('<?=$site_url?>/product/trend_popup.php'); return false;" >
													<td>GDDR3 64Mx16PC1600</td>
													<td>W632GG6MB-12</td>
													<td>Windbond</td>
													<td>10000 @ call</td>
													<td>Stock HK</td>
													<td class="more-col"><a href="" class="more-btn"><span></span></a></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="custom-scrollbar-cover">
										<div class="scroll-cover-txt">
											<i class="material-icons">&#xe913;</i>
											<p>좌우로 드래그 해보세요</p>
										</div>
									</div>
								</div>
							</div>
							<div class="product-view-con">
								<p class="con-tit">Graphic DDR</p>
								<div class="custom-scrollbar-wrapper">
									<div class="scroll-object-box">
										<table class="product-view-tbl scroll-object">
											<colgroup>
												<col width="24.16%">
												<col width="23.08%">
												<col width="15.83%">
												<col width="15.83%">
												<col width="12.5%">
												<col width="8.6%">
											</colgroup>
											<thead>
												<tr>
													<th>제품명</th>
													<th>제품번호</th>
													<th>제조사</th>
													<th>수량/가격</th>
													<th>비고</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr onclick="javascript:layerLoad('<?=$site_url?>/product/trend_popup.php'); return false;" >
													<td>GDDR3 128Mx16PC1600</td>
													<td>W632GG6MB-12</td>
													<td>Windbond</td>
													<td>10000 @ call</td>
													<td>Stock HK</td>
													<td class="more-col"><a href="" class="more-btn"><span></span></a></td>
												</tr>
												<tr onclick="javascript:layerLoad('<?=$site_url?>/product/trend_popup.php'); return false;" >
													<td>GDDR3 64Mx16PC1600</td>
													<td>W632GG6MB-12</td>
													<td>Windbond</td>
													<td>10000 @ call</td>
													<td>Stock HK</td>
													<td class="more-col"><a href="" class="more-btn"><span></span></a></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="custom-scrollbar-cover">
										<div class="scroll-cover-txt">
											<i class="material-icons">&#xe913;</i>
											<p>좌우로 드래그 해보세요</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<div class="area">
						<div class="board-search-box ">
							<select name="">
								<option value="">제목</option>
								<option value="">내용</option>
								<option value="">글쓴이</option>
							</select>
							<input placeholder="검색어를 입력해주세요" type="search" name="" class="search-word">
							<button class="bbs-search-btn" title="검색"><i class="material-icons"></i></button>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

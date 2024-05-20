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
						<?while($part1_row = mysql_fetch_array($part1_rs)){
							$part2_rs = $db->select("cs_excel","where ex_code='$row->ex_code' and week='$row->week' and years='$row->years' and kind='2'  and part_1='$part1_row[part_1]' order by idx asc");
						?>
							<h4 class="tit"><?=$part1_row[part_1]?></h4>
							<div class="inner area"> 
							<!-- 
								테이블이 증가할수있습니다.
								플러스 표시를 클릭하면 레이어 팝업창이 뜹니다.
							-->
								<?while($part2_row = mysql_fetch_array($part2_rs)){
									$prd_rs = $db->select("cs_excel","where ex_code='$row->ex_code' and week='$row->week' and years='$row->years' and kind='3'  and part_1='$part1_row[part_1]' and part_2='$part2_row[part_2]' order by idx asc");
								?>
									<div class="product-view-con">
										<p class="con-tit"><?=$part2_row[part_2]?></p>
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
															<th>产品名称</th>
															<th>产品编号</th>
															<th>制造商</th>
															<th>数量/价格</th>
															<th>备注</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<?while($prd_row = mysql_fetch_array($prd_rs)){?>
														<tr onclick="javascript:layerLoad('<?=$site_url?>/product/trend_popup.php?idx=<?=$row->idx?>&prd_idx=<?=$prd_row[idx]?>'); return false;" >
															<td><?=$prd_row[name]?></td>
															<td><?=$prd_row[no]?></td>
															<td><?=$prd_row[company]?></td>
															<td><?=$prd_row[ea]?> @ <?=$prd_row[price]?></td>
															<td><?=$prd_row[etc]?></td>
															<td class="more-col">
																<a href="javascript:;" class="more-btn"><span></span></a>
															</td>
														</tr>
														<?}?>
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
								<?}?>
							</div>
						<?}?>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
	<div class="cm-btn-controls" style="margin-right:360px;">
		<div class="right-btn-controls">
            <!-- #202405 메인 추가 : 목록 이동 -->
            <a href="#none" onclick="<? echo isset($_GET['returnURL']) ? "window.location.href='" . $_GET['returnURL'] . "'" : "history.go(-1)"; ?>" class="btn-style01">
                List
            </a>
		</div>
	</div>			
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

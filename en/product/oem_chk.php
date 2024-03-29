<?
$page_num = "03";
$sub_num = "03";
$page_section = "product";
$sub_section = "trend";
$page_info = "PRODUCT SEARCH";
$sub_info = "OEM Excess";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";
$bbs_row = $db->object("cs_bbs_data","where code='oem' and lang='$lang' order by ref desc, idx desc limit 1");
?>
<style>
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<?
$table = "cs_excel_b";
$listScale = 10;
$pageScale = 8;
if(!$startPage){
	$startPage = 0;
}
$totalPage = floor($startPage / ($listScale * $pageScale));
$query=" where ex_code='$bbs_row->ex_code' and kind='2' ";
if($search_order){
	$query.="and attr_1 like '%$search_order%' ";
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
$this_index = 0;
?>
				<!-- 컨텐츠 내용 -->
				<article class="sub-page product-page">
					<div class="area">
					<article class="product-tit-box">
						<p class="product-tit">If you want to sell your stock, <br>please contact us and we can sell your stock instead of you.</p>
					</article>
					<!-- 
						view페이지 없습니다! 일반게시판과 내용이 다릅니다.
						부품명 검색시 Part# 이 항목만 검색 될 수 있게 해주세요~! 
					-->
					<article class="bbs-list-con product-board-con product-list-con">
						<div class="top-con-inner clearfix">
							<div class="tel-info-box">
								<ul class="clearfix">
									<!-- <li class="tel01"><a href=""><span><em><i class="material-icons">&#xe862</i>재고문의 : 02-6112-7327</em></span></a></li> -->
									<li class="tel02"><a href=""><span><em><i class="material-icons">&#xe0b0</i>TEL : 82-2-6112-7320</em></span></a></li>
								</ul>
							</div>
							<form action="<?=$_SERVER[PHP_SELF]?>" method="get">
								<div class="board-search-box">
									<input placeholder="" type="search" name="search_order" class="search-word" value="<?=$search_order?>">
									<button class="bbs-search-btn" title="검색"><img src="<?=$site_host?>/images/icon/stock_list_search_icon.png" alt=""></button>
								</div>
							</form>
						</div>

<form method="post" name="form">
<input type="hidden" name="mode" value="write">

						<div class="bbs-list-tbl">
							<p class="bbs-list-head">
								<span style="width:8%;">No</span>
								<span style="width:36%;">Part#</span>
								<span style="width:7%;">Quantity</span>
								<span style="width:33.33%;">MFR</span>
								<span style="width:7.83%;">D/C</span>
								<span style="width:7.84%;">Remark</span>
							</p>
							<?while($row =mysql_fetch_array($rs)){
								$this_index++;
							?>
								<?if($this_index==2){?>
								   <div class="bbs-list-row even-num">
							   <?$this_index = 0;
							   }else{?>
								   <div class="bbs-list-row">
							   <?}?>
									<div class="column bbs-no-data">
									<input type="checkbox" value="<? echo $row[idx] ?>" name="check[]" class="cart-checkbox">
									<span class="num"><?=$listNo?></span>
									</div>
									<div class="column bbs-title">
											<div class="bbs-subject-con">
												<strong class="bbs-subject-txt"><?=$row[attr_1]?></strong>
											</div>
									</div>
									<div class="column bbs-inline" data-label="Quantity"><?=$row[attr_2]?></div>
									<div class="column bbs-inline mer-column" data-label="MFR"><?=$row[attr_3]?></div>
									<div class="column bbs-inline" data-label="D/C"><?=$row[attr_4]?></div>
									<div class="column bbs-inline" data-label="Remark"><?=$row[attr_5]?></div>
							   </div>
						   <?$listNo--;}?>
						   <!-- 
							 ★ 짝수 줄마다 배경색이 들어갑니다. 짝수 행마다 even-num 클래스를 추가해주세요! 
						   -->
						</div>
						</form>
						<?if(empty($totalList)){?>
							<p class="bbs-no-list">There is no written comment.</p>
						<?}?>

						<button class="add-cart-btn" type="button" onclick="send();"><i class="xi-cart"></i>Add to Cart</button>  <!-- 200715 :: 추가된 버튼입니다. -->

						<div class="paging">
							<? $page->var_Page($totalPage,$totalList, $listScale, $pageScale, $startPage,$paging_queryString);?>
						</div>
					</article>
					<!-- // 일반 게시판 리스트 END -->

						<!-- 200715 :: 추가된 버튼입니다. -->
						<div class="request-btn-con">
							<a href="javascript:;" onclick="javascript:layerLoad('<?=$site_url?>/product/cart_popup.php'); return false;" class="request-btn">
								<i class="xi-file-text"></i>Request for quotation
							</a>
						</div>

					</div>
				</article>
				<!-- //컨텐츠 내용 -->

<script language="javascript">
<!--
function send(){

	
		var count=0;
	
		for(var i=0; i<form.elements.length; i++) 
		{ 
			if(form.elements[i].checked == true) 
			{ 
				count++; 
			} 
		} 
		
		if ( count == 0 ) 
		{ 
			   alert('제품을 선택 하세요'); 
			   return; 
		} else {
	
				
				form.target = "ifm";
				form.action = "stock_exe.php";
				form.submit();
			
		}

}
-->
</script>
<iframe src="" name="ifm" style="display:none;"></iframe>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

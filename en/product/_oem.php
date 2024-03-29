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
						<p class="product-tit">고객사가 보유한 재고를 판매하고 있는 공간입니다.</p>
					</article>
					<!-- 
						view페이지 없습니다! 일반게시판과 내용이 다릅니다.
						부품명 검색시 Part# 이 항목만 검색 될 수 있게 해주세요~! 
					-->
					<article class="bbs-list-con product-borad-con product-list-con">
						<div class="top-con-inner clearfix">
							<div class="tel-info-box">
								<ul class="clearfix">
									<li class="tel01"><a href=""><span><em><i class="material-icons">&#xe862</i>재고문의 : 02-6112-7327</em></span></a></li>
									<li class="tel02"><a href=""><span><em><i class="material-icons">&#xe0b0</i>대표전화 : 02-6112-7320</em></span></a></li>
								</ul>
							</div>
							<div class="board-search-box">
								<input placeholder="부품명을 입력하세요." type="search" name="" class="search-word">
								<button class="bbs-search-btn" title="검색"><img src="<?=$site_host?>/images/icon/stock_list_search_icon.png" alt=""></button>
							</div>
						</div>
						<div class="bbs-list-tbl">
							<p class="bbs-list-head">
								<span style="width:6%;">No</span>
								<span style="width:38%;">Part#</span>
								<span style="width:7%;">Quantity</span>
								<span style="width:33.33%;">MFR</span>
								<span style="width:7.83%;">D/C</span>
								<span style="width:7.84%;">Remark</span>
							</p>
						   <div class="bbs-list-row">
								<div class="column bbs-no-data">1</div>
								<div class="column bbs-title">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt">DMP3056LSD-13</strong>
										</div>
								</div>
								<div class="column bbs-inline" data-label="Quantity">39975</div>
								<div class="column bbs-inline mer-column" data-label="MFR">Diodes Incorporated</div>
								<div class="column bbs-inline" data-label="D/C">15+</div>
								<div class="column bbs-inline" data-label="Remark">STOCK</div>
						   </div>
						   <!-- 
							 ★ 짝수 줄마다 배경색이 들어갑니다. 짝수 행마다 even-num 클래스를 추가해주세요! 
						   -->
						    <div class="bbs-list-row even-num">
								<div class="column bbs-no-data">2</div>
								<div class="column bbs-title">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt">TMS320C6455BCTZ</strong>
										</div>
								</div>
								<div class="column bbs-inline" data-label="Quantity">528</div>
								<div class="column bbs-inline mer-column" data-label="MFR">TI</div>
								<div class="column bbs-inline" data-label="D/C">17+</div>
								<div class="column bbs-inline" data-label="Remark">STOCK</div>
						   </div>
						   <div class="bbs-list-row">
								<div class="column bbs-no-data">3</div>
								<div class="column bbs-title">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt">CS8900A-CQ3</strong>
										</div>
								</div>
								<div class="column bbs-inline" data-label="Quantity">20</div>
								<div class="column bbs-inline mer-column" data-label="MFR">Cypress Semiconductor</div>
								<div class="column bbs-inline" data-label="D/C">N/A</div>
								<div class="column bbs-inline" data-label="Remark">STOCK</div>
						   </div>
						</div>
						<p class="bbs-no-list">작성된 글이 없습니다.</p>
						<div class="paging">
							<a href="" class="paging-arrow"><i class="material-icons" title="처음"></i></a>
							<a href="" class="paging-arrow"><i class="material-icons" title="이전"></i></a>
							<a href="" class="cur">1</a>
							<a href="">2</a>
							<a href="">3</a>
							<a href="">4</a>
							<a href="" class="paging-arrow"><i class="material-icons" title="다음"></i></a>
							<a href="" class="paging-arrow"><i class="material-icons" title="마지막"></i></a>
						</div>
					</article>
					<!-- //  게시판 리스트 END -->
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

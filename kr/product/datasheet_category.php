<?
$page_num = "03";
$sub_num = "04";
/* !NOTE S : 2024-04 변경 */
$page_section = "product";
$sub_section = "SPEC 검색";
$page_info = "PRODUCT SEARCH";
$sub_info = "SPEC 검색";
/* !NOTE E : 2024-04 변경 */
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
        <!-- !NOTE S : 2024-04 추가 -->
        <!-- !NOTE : 대치품 검색 전체 페이지 서브메뉴의 대치품검색 li에 on클래스 추가해주세요 -->
				<form name="bbs_search_form" method="get" action="<?=$_SERVER['PHP_SELF'];?>" class="area02">
					<div class="replacement-search-box">
						<div class="replacement-search-select" >
							<a href="javascript:;" class="cur-select">
								<span><em>선택해주세요</em></span>
							</a>
							<ul class="replacement-select-con">
								<li><a href="javascript:search_sel(0);"><span>전체</span></a></li>
								<li><a href="javascript:search_sel(1);"><span>Memory Trend</span></a></li>
								<li><a href="javascript:search_sel(2);"><span>Stock List</span></a></li>
								<li><a href="javascript:search_sel(3);"><span>OEM Excess</span></a></li>
							</ul>
						</div>
						<input placeholder="검색어를 입력해주세요" type="text" name="search_order" class="search-word" onKeypress="if(event.keyCode ==13){search_send();return false;}">
						<button  type="button" class="replacement-search-btn" title="검색" onclick="search_send()">
							<img src="/images/icon/stock_list_search_icon.png" alt="">
						</button>
					</div>
				</form>
				<article class="sub-page product-page pc-only">
					<div class="area02">
            <div class="search-results">
							<div class="search-results-header type-category">
								<p>정확히 일치</p>
							</div>
							<div class="search-results-body">
								<div class="category-matched">
									<img src="/images/content/no-img.svg" alt="">
									<div class="text-wrap">
										<strong class="tit">제품명</strong>
										<div class="info-wrap">
											<p class="desc">제품설명이 들어가는 구역</p>
											<p class="price"><strong>$157,000.000</strong> 박스</p>
										</div>
									</div>
									<div class="button-layout gap-md extra">
										<a href="#" class="button type-secondary size-sm">Detail View</a>
										<a href="#" class="button type-primary size-sm">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="sub-page product-page pc-only">
					<div class="area02">
            <div class="search-results">
							<div class="search-results-header type-category">
								<p>상위검색 결과</p>
							</div>
							<div class="search-results-body">
								<div class="category-list">
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                </div>
							</div>
						</div>
					</div>
				</article>
          <!-- !NOTE E : 2024-04 추가 -->
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

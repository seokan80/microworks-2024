<?
$page_num = "03";
$sub_num = "01";
//<!-- !NOTE S : 2024-04 추가 -->
$dep3_num = "02";
//<!-- !NOTE E : 2024-04 추가 -->
$page_section = "product";
//<!-- !NOTE S : 2024-04 변경 -->
$sub_section = "memory-biz";
//<!-- !NOTE E : 2024-04 변경 -->
$page_info = "PRODUCT SEARCH";
//<!-- !NOTE S : 2024-04 변경 -->
$sub_info = "메모리 대치품 검색";
//<!-- !NOTE E : 2024-04 변경 -->
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";

?>
<style>
/* css */
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<form name="bbs_search_form" method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="pc-only area02">
					<div class="replacement-search-box">
						<!-- <div class="replacement-search-select" >
							<a href="javascript:;" class="cur-select">
								<span><em>선택해주세요</em></span>
							</a>
							<ul class="replacement-select-con">
								<li><a href="javascript:search_sel(0);"><span>모든제품</span></a></li>
							</ul>
						</div> -->
						<input placeholder="검색어를 입력해주세요" type="text" name="search_order" value="cable" class="search-word" onKeypress="if(event.keyCode ==13){search_send();return false;}">
						<button  type="button" class="replacement-search-btn" title="검색" onclick="search_send()">
							<img src="/images/icon/stock_list_search_icon.png" alt="">
						</button>
					</div>
				</form>
				<!-- 컨텐츠 내용 -->
				<article class="sub-page product-page pc-only hide" id="searchArticle">
            <div class="area02">
<!-- !NOTE : 1/3 검색결과 있을 때 -->
              <form action="" class="search-results-form">
                <div class="search-results">
                  <!-- 검색 완료 후 노출 -->
                    <div class="search-results-header">
                    <p class="text-lg" id="searchCategoryNameTop">카테고리명</p>
                    <!-- <button type="button" class="button size-sm type-secondary extra" onclick="search_send()"><strong>검색 다시하기</strong></button> -->
                  </div> 
                  
                  <div class="search-results-body">
                    <div class="search-utility">
                      <div class="search-box">
                        <input placeholder="" type="search" name="" id="includeKeyword" class="input" value="">
                        <button type="button" class="search-button" title="검색" onclick="search_send()"><i
                            class="material-icons">&#xE8B6;</i></button>
                        <span class="result-count text-darken">검색 결과 : <strong
                            class="text-primary" id="searchResultCntTop"></strong></span>
                      </div>
                      <div class="switch-box">
                        <p>검색 기준</p>
                        <div class="switch">
                          <span>
                            <input type="radio" name="switch" id="switch-1" checked>
                            <label for="switch-1">스택</label>
                          </span>
                          <span>
                            <input type="radio" name="switch" id="switch-2">
                            <label for="switch-2">스크롤</label>
                          </span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="search-filters">
                      <!-- 제조업체 필터 -->
                      <div class="filter">
                        <div class="filter-header">제조업체</div>
                        <div class="filter-body">
                          <div class="input-box"><input type="search" name="" id="" placeholder="검색 기준" class="input hight-sm"></div>
                          <ul class="checkable-items" id="manufacturersOptions">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-001">
                              <label for="item-01-001">제조업체1</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- 계열 필터 -->
                      <div class="filter">
                        <div class="filter-header">계열</div>
                        <div class="filter-body">
                          <div class="input-box"><input type="search" name="" id="" placeholder="검색 기준" class="input hight-sm"></div>
                          <ul class="checkable-items" id="seriesOptions">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-001">
                              <label for="item-02-001">계열1</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- 포장 필터 -->
                      <div class="filter">
                        <div class="filter-header">포장</div>
                        <div class="filter-body">
                          <ul class="checkable-items" id="packagingOptions">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-001">
                              <label for="item-03-001">포장1</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- 제품현황 필터 -->
                      <div class="filter">
                        <div class="filter-header">제품현황</div>
                        <div class="filter-body">
                          <ul class="checkable-items" id="statusOptions">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-001">
                              <label for="item-04-001">제품현황1</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- 파라미터 필터 -->
                      <div class="filter">
                        <div class="filter-header">검색조건</div>
                        <div class="filter-body">
                          <div class="input-box"><input type="search" name="" id="" placeholder="검색 기준" class="input hight-sm"></div>
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-001">
                              <label for="item-05-001">검색조건1(10)</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                      <div class="filter-options">
                        <div class="options">
                          <dl class="option">
                            <dt>재고 옵션</dt>
                            <dd>
                              <input type="checkbox" name="searchOptions" value="InStock" id="option-01-01">
                              <label for="option-01-01">재고 있음</label>
                            </dd>
                            <dd>
                              <input type="checkbox" name="searchOptions" value="NormallyStocking" id="option-01-02">
                              <label for="option-01-02">상시 있음</label>
                            </dd>
                            <dd>
                              <input type="checkbox" name="searchOptions" value="NewProduct" id="option-01-03">
                              <label for="option-01-03">신제품</label>
                            </dd>
                          </dl>
                          <dl class="option">
                            <dt>환경 옵션</dt>
                            <dd>
                              <input type="checkbox" name="searchOptions" value="RohsCompliant" id="option-02-01">
                              <label for="option-02-01">RoHS 준수</label>
                            </dd>
                            <dd>
                              <input type="checkbox" name="searchOptions" value="NonRohsCompliant" id="option-02-02">
                              <label for="option-02-02">RoHS 미준수</label>
                            </dd>
                          </dl>
                          <dl class="option">
                            <dt>미디어</dt>
                            <dd>
                              <input type="checkbox" name="searchOptions" value="HasDatasheet" id="option-03-01">
                              <label for="option-03-01">규격서</label>
                            </dd>
                            <dd>
                              <input type="checkbox" name="searchOptions" value="HasProductPhoto" id="option-03-02">
                              <label for="option-03-02">사진</label>
                            </dd>
                            <dd>
                              <input type="checkbox" name="searchOptions" value="HasCadModel" id="option-03-03">
                              <label for="option-03-03">EDA/CAD 모델</label>
                            </dd>
                          </dl>
                          <dl class="option">
                            <dt>MARKETPLACE 제품</dt>
                            <dd>
                              <input type="checkbox" name="marketPlaceFilter" value="ExcludeMarketPlace" id="option-04-01">
                              <label for="option-04-01">제외</label>
                            </dd>
                          </dl>
                        </div>
                        <!-- TODO 용도 확인 후 주석 해제 -->
                          <div class="button-layout align-center">
                          <button type="button" class="button type-point" onclick="search_send()"><strong>Submit</strong></button>
                          <p class="result-count text-rg">검색 결과 : <strong class="text-primary" id="searchResultCntTop2"></strong></p>
                        </div>
                      </div>
                    <? include $_SERVER["DOCUMENT_ROOT"]."/index/include_productSearch.php"; ?>
                    </div>
                  </div>
                </div>
              </form>

              <div class="added-box margin-top-xxl">
                <div class="box-header"><strong id="searchCategoryName">카테고리명</strong></div>
                <div class="box-body" id="searchCategoryDesc">카테고리 설명이 들어갑니다. 예를 들어 이 제품군에 속하는 제품은 정보를 전송 또는 저장에 적합한 형태로 패키징하거나 암호화하고 특정 형태의 변조 공정을 통해 통신 경로의 반대쪽에서 역산을 수행하는 데 사용됩니다. 예로는 디지털 데이터로부터 아날로그 비디오 신호를 생성(또는 아날로그 데이터로부터 데이터 비디오 신호를 생성)하는 장치, 원격 제어 기능을 구현하기 위해 전송 버튼 상태를 암호화하는 장치, 표준 UART를 표준 적외선 트랜시버에 연결할 수 있도록 해 주는 장치가 있습니다.</div>
              </div>
              <!-- !NOTE : 검색결과 없음 -->
              <div class="search-results hide">
                <div class="search-results-header">
                  <p>죄송합니다. <strong class="text-primary">"ASDF"</strong>에 대한 검색 결과가 없습니다.</p>
                </div>
                <div class="search-results-body">
                  <div class="no-result-box">
                    <img src="/images/icon/img-no-result.png" alt="검색 결과 없음 이미지">
                    <p>찾으시는 대치품에 대한 검색결과가 없으신가요?<br/>문의주시면 신속히 도와드리겠습니다!</p>
                    <a href="#" class="button"><strong>문의하기</strong></a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- !NOTE : 3/3 모바일에서 접속 한 경우 -->
					<article class="sub-page product-page mo-only">
						<div class="area02">
							<p class="text-xs text-center text-darken">대치품 검색은 태블릿 기기 또는 PC에서만 가능합니다.</p>
              <div class="quick-search">
                <img src="/images/icon/img-no-result.png" alt="검색 결과 없음 이미지">
                <p>빠른 검색이 필요하시면 문의주세요!</p>
                <a href="#" class="button"><strong>문의하기</strong></a>
              </div>
						</div>
					</article>
		<!-- //컨텐츠 내용 -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
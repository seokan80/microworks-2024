<?
$page_num = "03";
$sub_num = "04";
$page_section = "product";
$sub_section = "대치품 검색";
$page_info = "PRODUCT SEARCH";
$sub_info = "대치품 검색";
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
				<article class="sub-page product-page">
					<div class="area02">
						<div class="search-results">
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
				<article class="sub-page product-page">
						<div class="area02">
							<div class="search-results">
								<div class="search-results-header">
									<p>죄송합니다. 검색을 위해서는 좀 더 정확한 파트명이 필요합니다.</p>
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
					<article class="sub-page product-page">
            <div class="area02">
              <form action="" class="search-results-form">
                <div class="search-results">
                  <div class="search-results-header">
                    <p class="text-lg">카테고리명</p>
                    <button type="button" class="button size-sm type-secondary extra"><strong>검색 다시하기</strong></button>
                  </div>
                  <div class="search-results-body">
                    <div class="search-utility">
                      <div class="search-box">
                        <input placeholder="" type="search" name="search_order" class="input"
                          value="<?=$search_order?>">
                        <button type="submit" class="search-button" title="검색"><i
                            class="material-icons">&#xE8B6;</i></button>
                        <span class="result-count text-darken">검색 결과 : <strong
                            class="text-primary">58,758</strong></span>
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
                      <div class="filter">
                        <div class="filter-header">제조업체</div>
                        <div class="filter-body">
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-001">
                              <label for="item-01-001">제조업체1</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-002" checked>
                              <label for="item-01-002">제조업체2</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-003" disabled>
                              <label for="item-01-003">제조업체3 disabled</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-004">
                              <label for="item-01-004">제조업체4 긴 글 테스트 입니다. 긴 글 테스트 입니다.</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-005">
                              <label for="item-01-005">제조업체5</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-006">
                              <label for="item-01-006">제조업체6</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-007">
                              <label for="item-01-007">제조업체7</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-008">
                              <label for="item-01-008">제조업체8</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-009">
                              <label for="item-01-009">제조업체9</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-010">
                              <label for="item-01-010">제조업10</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-011">
                              <label for="item-01-011">제조업체11</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="filter">
                        <div class="filter-header">계열</div>
                        <div class="filter-body">
                          <div class="input-box"><input type="search" name="" id="" placeholder="검색 기준" class="input hight-sm"></div>
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-001">
                              <label for="item-02-001">계열1</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-002" checked>
                              <label for="item-02-002">계열2</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-003">
                              <label for="item-02-003">계열3</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-004">
                              <label for="item-02-004">계열4</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-005">
                              <label for="item-02-005">계열5</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-006">
                              <label for="item-02-006">계열6</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-007">
                              <label for="item-02-007">계열7</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-008">
                              <label for="item-02-008">계열8</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-009">
                              <label for="item-02-009">계열9</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-010">
                              <label for="item-02-010">계열10</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-011">
                              <label for="item-02-011">계열11</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="filter">
                        <div class="filter-header">포장</div>
                        <div class="filter-body">
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-001">
                              <label for="item-03-001">포장1</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-002" checked>
                              <label for="item-03-002">포장2</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-003">
                              <label for="item-03-003">포장3</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-004">
                              <label for="item-03-004">포장4</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-005">
                              <label for="item-03-005">포장5</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="filter">
                        <div class="filter-header">제품현황</div>
                        <div class="filter-body">
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-001">
                              <label for="item-04-001">제품현황1</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-002" checked>
                              <label for="item-04-002">제품현황2</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-003">
                              <label for="item-04-003">제품현황3</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-004">
                              <label for="item-04-004">제품현황4</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-005">
                              <label for="item-04-005">제품현황5</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="filter">
                        <div class="filter-header">검색조건</div>
                        <div class="filter-body">
                          <div class="input-box"><input type="search" name="" id="" placeholder="검색 기준" class="input hight-sm"></div>
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-001">
                              <label for="item-05-001">검색조건1(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-002" checked>
                              <label for="item-05-002">검색조건2(15)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-003">
                              <label for="item-05-003">검색조건3(8)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-004">
                              <label for="item-05-004">검색조건4(1)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-005">
                              <label for="item-05-005">검색조건5(6)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-006">
                              <label for="item-05-006">검색조건6(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-007">
                              <label for="item-05-007">검색조건7(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-008">
                              <label for="item-05-008">검색조건8(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-009">
                              <label for="item-05-009">검색조건9(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-010">
                              <label for="item-05-010">검색조건10(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-011">
                              <label for="item-05-011">검색조건11(10)</label>
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
                            <input type="checkbox" name="" id="option-01-01">
                            <label for="option-01-01">재고 있음</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-01-02">
                            <label for="option-01-02">상시 있음</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-01-03">
                            <label for="option-01-03">신제품</label>
                          </dd>
                        </dl>
                        <dl class="option">
                          <dt>환경 옵션</dt>
                          <dd>
                            <input type="checkbox" name="" id="option-02-01">
                            <label for="option-02-01">RoHS 준수</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-02-02">
                            <label for="option-02-02">RoHS 미준수</label>
                          </dd>
                        </dl>
                        <dl class="option">
                          <dt>미디어</dt>
                          <dd>
                            <input type="checkbox" name="" id="option-03-01">
                            <label for="option-03-01">규격서</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-03-02">
                            <label for="option-03-02">사진</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-03-03">
                            <label for="option-03-03">EDA/CAD 모델</label>
                          </dd>
                        </dl>
                        <dl class="option">
                          <dt>MARKETPLACE 제품</dt>
                          <dd>
                            <input type="checkbox" name="" id="option-04-01">
                            <label for="option-04-01">제외</label>
                          </dd>
                        </dl>
                      </div>
                      <div class="button-layout align-center">
                        <button type="submit" class="button type-point"><strong>Submit</strong></button>
                        <p class="result-count text-rg">검색 결과 : <strong class="text-primary">58,758</strong></p>
                      </div>
                    </div>
                    
                    <div class="replacement-table-wrap margin-top-xxl">
                      <div class="replacement-table-header">
                        <div class="result-count">
                          <select name="" id="" class="view-select">
                            <option value="" selected>보기 1-25</option>
                            <option value="">보기 1-30</option>
                          </select>
                          <em>/</em>
                          <strong class="text-primary">58,758</strong>
                          <input type="text" class="input" placeholder="가격 수량">
                        </div>
                        <div class="button-layout gap-md extra">
                          <button type="button" class="button type-secondary size-sm"><strong>표 다운로드</strong></button>
                          <button type="button" class="button type-point size-sm"><strong>n개 제품비교</strong></button>
                        </div>
                      </div>
                      <div class="replacement-table">
                        <table>
                          <colgroup>
                            <col width="59px"/>
                            <col width="560px"/>
                            <col width="140px" span="5"/>
                            <col width="180px"/>
                          </colgroup>
                          <thead>
                            <tr>
                              <th>
                                <div class="title">비교</div>
                                <div class="sort-wrap">
                                  <input type="checkbox" name="" id="check-all">
                                </div>
                              </th>
                              <th>
                                <div class="title">제조업체 부품 번호</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">주문 가능 수량</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">가격</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">계열</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">포장</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">제품현황</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">문의하기</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td class="text-right">
                                <strong>106</strong>
                                <p>재고있음</p>
                              </td>
                              <td class="text-right">
                                <strong>1: $157,000.0000</strong>
                                <p>박스</p>
                              </td>
                              <td>
                                <strong>계열</strong>
                              </td>
                              <td>
                                <strong>박스</strong>
                              </td>
                              <td>
                                <strong>활성</strong>
                              </td>
                              <td>
                                <a href="#" class="button type-secondary size-sm">Detail View</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="replacement-table-footer">
                        <div class="result-count">
                          <select name="" id="" class="view-select">
                            <option value="" selected>보기 1-25</option>
                            <option value="">보기 1-30</option>
                          </select>
                          <em>/</em>
                          <strong class="text-primary">58,758</strong>
                          <div class="paging">
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
                        </div>
                        <div class="button-layout gap-md">
                          <button type="button" class="button type-point size-sm"><strong>n개 제품비교</strong></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="added-box margin-top-xxl">
                <div class="box-header"><strong>카테고리명</strong></div>
                <div class="box-body">카테고리 설명이 들어갑니다. 예를 들어 이 제품군에 속하는 제품은 정보를 전송 또는 저장에 적합한 형태로 패키징하거나 암호화하고 특정 형태의 변조 공정을 통해 통신 경로의 반대쪽에서 역산을 수행하는 데 사용됩니다. 예로는 디지털 데이터로부터 아날로그 비디오 신호를 생성(또는 아날로그 데이터로부터 데이터 비디오 신호를 생성)하는 장치, 원격 제어 기능을 구현하기 위해 전송 버튼 상태를 암호화하는 장치, 표준 UART를 표준 적외선 트랜시버에 연결할 수 있도록 해 주는 장치가 있습니다.</div>
              </div>
            </div>
          </article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

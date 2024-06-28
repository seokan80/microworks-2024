<?
$page_num = "03";
$sub_num = "04";
//<!-- !NOTE S : 2024-04 추가 -->
$is_detail = true;
//<!-- !NOTE E : 2024-04 추가 -->
//<!-- !NOTE S : 2024-04 변경 -->
$page_section = "product";
$sub_section = "Search for replacement";
$page_info = "PRODUCT SEARCH";
$sub_info = "Search for replacement";
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
          <article class="sub-page product-page">
						<div class="area02">
							<div class="replacement-detail">
                <div class="info-wrapper">
                  <img src="/images/content/no-img.svg" alt="">
                  <div class="info-list">
                    <dl>
                      <dt>Microworks 제품번호</dt>
                      <dd>102-26523-365623</dd>
                    </dl>
                    <dl>
                      <dt>제조업체</dt>
                      <dd><a href="#">CUI Inc.</a></dd>
                    </dl>
                    <dl>
                      <dt>제조업체 제품 번호</dt>
                      <dd>qwdsdsdf 123154</dd>
                    </dl>
                    <dl>
                      <dt>제조업체 표준 리드 타임</dt>
                      <dd>23주</dd>
                    </dl>
                    <dl>
                      <dt>고객 참조 번호</dt>
                      <dd><input type="text" name="" id="" title="고객 참조 번호"></dd>
                    </dl>
                    <dl>
                      <dt>제품 세부 정보</dt>
                      <dd>외부 월마운트(클래스) 어댑터 고정 블레이드 입력</dd>
                    </dl>
                    <dl>
                      <dt>규격서</dt>
                      <dd><img src="/images/icon/icon-pdf.png" alt="" class="icon"><a href="#">규격서</a></dd>
                    </dl>
                    <dl>
                      <dt>EDA/CAD 모델</dt>
                      <dd><a href="#">SWI3-5-N-MUB 모델</a></dd>
                    </dl>
                  </div>
                </div>
                <hr class="hr">
                <div class="replacement-table-wrap">
                <div class="search-results-header type-category">
                  <p>제품 특성</p>
                </div>
                  <div class="replacement-table type-info">
                    <table>
                      <colgroup>
                        <col width="200px" />
                        <col width="*" />
                      </colgroup>
                      <tbody>
                        <tr>
                          <th>유형</th>
                          <td>제품요약</td>
                        </tr>
                        <tr>
                          <th rowspan="3">종류</th>
                          <td><a href="#">종류</a></td>
                        </tr>
                        <tr>
                          <td><a href="#">종류</a></td>
                        </tr>
                        <tr>
                          <td><a href="#">종류</a></td>
                        </tr>
                        <tr>
                          <th>제조업체</th>
                          <td>제조업체</td>
                        </tr>
                        <tr>
                          <th>계열</th>
                          <td>계열</td>
                        </tr>

                        <tr>
                          <th>포장</th>
                          <td>벌크</td>
                        </tr>
                        <tr>
                          <th>부품 현황</th>
                          <td>활성</td>
                        </tr>
                        <tr>
                          <th>기준 제품 번호</th>
                          <td><a href="#">770-00000</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="replacement-detail-buttons">
                <button type="button" class="button type-secondary size-sm">목록으로</button>
                <button type="button" class="button type-primary size-sm">문의하기</button>
              </div>
						</div>
					</article>
          <!-- !NOTE E : 2024-04 추가 -->
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

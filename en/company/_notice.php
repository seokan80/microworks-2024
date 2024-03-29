<?
$page_num = "01";
$sub_num = "06";
$page_section = "company";
$sub_section = "notice";
$page_info = "COMPANY";
$sub_info = "공지사항";
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
				<!-- 
					일반 리스트에서 상단 카테고리 선택 박스와 제목에 카테고리 영역이 추가 되었습니다.
					뷰페이지는 일반뷰페이지입니다.
				-->
				<article class="notice-page area">
					<article class="bbs-list-con">
						<aside class="bbs-top-list-box clearfix">
							<p class="total-list-con">TOTAL : <b>11</b> </p>
							<div class="top-search-box"> <!-- 카테고리 선택하는 셀렉트 박스 입니다. -->
								<select name="cate" id="topSearchCategory" onchange="">
									<option value=""></option>
								</select>
							</div>
						</aside>
						<div class="bbs-list-tbl">
							<p class="bbs-list-head">
								<span style="width:7%;">번호</span>
								<span style="width:59%;">제목</span>
								<span style="width:12%;">작성자</span>
								<span style="width:12%;">등록일</span>
								<span style="width:10%;">조회수</span>
							</p>
							<div class="bbs-list-row notice-row">
								<div class="column bbs-block" data-label="no"><span class="notice-tit">공지</span></div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=251">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt">공지사항입니다.</strong>
											<div class="bbs-subject-icons">
												<!-- <span class="bbs-icons" title="비밀글"><i class="material-icons">&#xE897;</i></span> -->
											</div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-11</div>
								<div class="column bbs-inline" data-label="조회수">2</div>
							</div>
						<!-- 공지사항 -->
						<!-- bbs loop start -->
							<div class="bbs-list-row">
								<div class="column bbs-no-data">11</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=265">
									<div class="bbs-subject-con">
										<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>홈페이지 많은이용 부탁드립니다.</strong>
										<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-15</div>
								<div class="column bbs-inline" data-label="조회수">1</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">10</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=264">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>이달의 행사안내입니다.</strong>
											<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-15</div>
								<div class="column bbs-inline" data-label="조회수">0</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">9</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=260">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>온라인문의 하시면 전화로 상담해드립니다.</strong>
											<div class="bbs-subject-icons">
												<span class="bbs-icons" title="파일첨부"><i class="material-icons">&#xE149;</i></span>
											</div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-13</div>
								<div class="column bbs-inline" data-label="조회수">22</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">8</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=259">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>고객분들과 함께 이벤트 진행합니다.</strong>
											<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-13</div>
								<div class="column bbs-inline" data-label="조회수">7</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">7</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=258">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>이벤트 응모하고 경품 받아가세요.</strong>
											<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-13</div>
								<div class="column bbs-inline" data-label="조회수">2</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">6</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=257">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>홈페이지에 불편한점이 있으면 고객센터에 글 부탁드립니다.</strong>
											<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-13</div>
								<div class="column bbs-inline" data-label="조회수">0</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">5</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=256">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>새로운 행사를 진행합니다.</strong>
											<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-13</div>
								<div class="column bbs-inline" data-label="조회수">1</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">4</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=255">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>다양한 제품들을 만나보세요!</strong>
											<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-13</div>
								<div class="column bbs-inline" data-label="조회수">0</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">3</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=254">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>홈페이지에 많은 관심 부탁드립니다.</strong>
											<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-13</div>
								<div class="column bbs-inline" data-label="조회수">0</div>
						   </div>
							<div class="bbs-list-row">
								<div class="column bbs-no-data">2</div>
								<div class="column bbs-title">
									<a href="/board/notice.php?bgu=view&idx=253">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt"><span class="category">[카테고리가 들어갑니다]</span>리뉴얼 기념 이벤트를 진행합니다.</strong>
											<div class="bbs-subject-icons"></div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="작성자">관리자</div>
								<div class="column bbs-inline" data-label="등록일">2019-11-11</div>
								<div class="column bbs-inline" data-label="조회수">3</div>
						   </div>
						</div>
						<!-- bbs loop end -->
						<!-- 답변형/공지사항형 종료 -->
						<div class="paging">
							 <a href='javascript:;' class='cur'>1</a>  <a href='/board/notice.php?search_item=&search_order=&skin=L01&startPage=10'>2</a> 
							 </div>
							<form name="bbs_search_form" method="get" action="/board/notice.php">
						<div class="board-search-box">
							<select name="search_item">
								<option value="subject" >제목</option>
								<option value="content" >내용</option>
								<option value="name" >작성자</option>
							</select>
							<input placeholder="검색어를 입력해 주세요." type="search" name="search_order" class="search-word" value="">
							<button type="submit" class="bbs-search-btn" title="검색"><i class="material-icons">&#xE8B6;</i></button>
						</div>
						</form>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

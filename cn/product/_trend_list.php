<?
$page_num = "03";
$sub_num = "01";
$page_section = "product";
$sub_section = "trend";
$page_info = "PRODUCT SEARCH";
$sub_info = "Memory Trend";
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
						<p class="product-tit">지난 메모리가격동향에 대한 데이터를 확인하실 수 있습니다.</p>
						<p class="product-tit-txt">데이터는 정확한 통계의 액수의 표시가 아니며, 지난 데이터에 대한 평균적인 통계자료 입니다.</p>
					</article>

					<!-- 
						카테고리가 있는 게시판 리스트 START 
						기본 게시판과 조금 다릅니다. 확인부탁드려요~!
					-->
					<article class="bbs-list-con product-borad-con">
						<div class="bbs-list-tbl">
							<p class="bbs-list-head">
								<span style="width:15.5%;">글번호</span>
								<span style="width:68%;" class="borad-head-title">제목</span>
								<span style="width:15.5%;">제품수</span>
								<span style="width:15.5%;">등록일</span>
								<span style="width:15.5%;"></span>
							</p>
							
						   <div class="bbs-list-row bbs-relative-row">
								<div class="column bbs-no-data">3</div>
								<div class="column bbs-title">
									<a href="./view.php">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt">1st week of May, 2019</strong>
											<div class="bbs-subject-icons">
												<span class="new-icon">N</span>
												<span class="bbs-icons" title="파일첨부"><i class="material-icons"></i></span>
												<span class="bbs-icons" title="비밀글"><i class="material-icons"></i></span>
											</div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="제품수">250</div>
								<div class="column bbs-inline" data-label="등록일">2017-01-26</div>
								<div class="column bbs-absolute" data-label="no"><a href="<?=$site_url?>/product/trend_view.php"><p class="reply-state"><span>Detail View</span></p></a></div>
						   </div>
						   <!-- 
							 ★ 짝수 줄마다 배경색이 들어갑니다. 짝수 행마다 even-num 클래스를 추가해주세요! 
						   -->
						   <div class="bbs-list-row bbs-relative-row even-num">
								<div class="column bbs-no-data">2</div>
								<div class="column bbs-title">
									<a href="./view.php">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt">5th week of April, 2019</strong>
											<div class="bbs-subject-icons">
												<span class="new-icon">N</span>
												<span class="bbs-icons" title="파일첨부"><i class="material-icons"></i></span>
												<span class="bbs-icons" title="비밀글"><i class="material-icons"></i></span>
											</div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="제품수">270</div>
								<div class="column bbs-inline" data-label="등록일">2017-01-26</div>
								<div class="column bbs-absolute" data-label="no"><a href="<?=$site_url?>/product/trend_view.php"><p class="reply-state"><span>Detail View</span></p></a></div>
						   </div>
						    <div class="bbs-list-row bbs-relative-row"><!-- ★ 답변대기, 답변완료 등 카테고리 아이콘이 들어갈때 bbs-list-row에 bbs-relative-row 클래스 붙여주세요 -->
								<div class="column bbs-no-data">1</div>
								<div class="column bbs-title">
									<a href="./view.php">
										<div class="bbs-subject-con">
											<strong class="bbs-subject-txt">4th week of April, 2019</strong>
											<div class="bbs-subject-icons">
												<span class="new-icon">N</span>
												<span class="bbs-icons" title="파일첨부"><i class="material-icons"></i></span>
												<span class="bbs-icons" title="비밀글"><i class="material-icons"></i></span>
											</div>
										</div>
									</a>
								</div>
								<div class="column bbs-inline" data-label="제품수">320</div>
								<div class="column bbs-inline" data-label="등록일">2017-01-26</div>
								<div class="column bbs-absolute" data-label="no"><a href="<?=$site_url?>/product/trend_view.php"><p class="reply-state"><span>Detail View</span></p></a></div>
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
						<div class="board-search-box">
							<select name="">
								<option value="">제목</option>
								<option value="">내용</option>
								<option value="">글쓴이</option>
							</select>
							<input placeholder="검색어를 입력해주세요" type="search" name="" class="search-word">
							<button class="bbs-search-btn" title="검색"><i class="material-icons"></i></button>
						</div>
					</article>
					<!-- // 카테고리가 있는 게시판 리스트 END -->                   
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

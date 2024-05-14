<?
$mod	= "banner";	
$menu	= "popup";
include('../header.php'); 


	$table			= "cs_popup";
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select * from $table where 1";
	$rs				= mysql_query($query);
	$totalList	= mysql_num_rows($rs);

	$query = "select * from $table where 1";
	$query.="  order by idx desc LIMIT $startPage, $listScale";
	$result = mysql_query($query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

	<!-- !NOTE : 신규 페이지 -->

	<h4 class="page-header">메인 배너 관리</h4>

	<form method="get" name="search_form" class="form-inline" action="<?=$_SERVER['PHP_SELF'];?>" >
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>검색어</th>
		<td>
			<div class="form-group">
				<div class="input-group-btn">
					<select name="search_item" class="form-control input-sm" >
						<option value="">통합검색</option>
						<option value="name" <?if($search_item=="name"){?>selected<?}?>>이름</option>
						<option value="phone" <?if($search_item=="phone"){?>selected<?}?>>휴대폰</option>
						<option value="content" <?if($search_item=="content"){?>selected<?}?>>내용</option>
					</select>
				</div>
			</div>
			<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
		</td>
	</tr>
	<tr>
		<th>구분</th>
		<td>
			<label class="checkbox-inline"><input type="checkbox" name="direction" value="" checked="">전체</label>
			<label class="checkbox-inline"><input type="checkbox" name="direction" value="">좌</label>
			<label class="checkbox-inline"><input type="checkbox" name="direction" value="">우</label>
		</td>
	</tr>
	<tr>
		<th>상태</th>
		<td>
			<label class="checkbox-inline"><input type="checkbox" name="status" value="" checked="">전체</label>
			<label class="checkbox-inline"><input type="checkbox" name="status" value="">사용중</label>
			<label class="checkbox-inline"><input type="checkbox" name="status" value="">종료</label>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="text-center">
			<button type="submit" class="btn btn-primary btn-sm">검색</button>&nbsp;
			<a href="<?=$_SERVER['PHP_SELF']?>" class="btn btn-default btn-sm">초기화</a>
		</td>
	</tr>
	</tbody>
	</table>
	</form>

	<div class="table-responsive">
	<form method="post" name="form">
	<table class="table table-bordered table-hover">
	<colgroup>
	<col width="5%">
	<col width="5%">
	<col width="5%">
	<col width="7%">
	<col width="15%">
	<col width="6%">
	<col width="6%">
	<col width="15%">
	<col width="*">
	<col width="7%">
	<col width="7%">
	</colgroup>
	<thead>
	<tr>
		<td><button type="button" class="btn btn-danger btn-xs btn-block ajax-checkbox" data-table="<?=$table?>" data-name="delete" data-val="">삭제</button></td>
		<td colspan="10"></td>
	</tr>
	<tr>
		<th><input type="checkbox" id="allCheck"></th>
		<th>N O</th>
		<th>구분</th>
		<th>이미지</th>
		<th>제목</th>
		<th>우선순위</th>
		<th>상태</th>
		<th>게시기간</th>
		<th>URL</th>
		<th>등록일</th>
		<th>관리하기</th>
	</tr>
	 </thead>
	 <tbody>
	 	<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">좌</td>
			<td class="text-center"><a href="">이미지</a></td>
			<td>제목</td>
			<td class="text-center">1</td>
			<td class="text-center">사용중</td>
			<td class="text-center">2024-04-23 ~ 2025-04-23</td>
			<td class="text-center">www.microworks.com</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
	</tbody>
	</table>
	</form>
	</div>


	<div class="text-center">
		<ul class="pagination">
			<?
			if( $totalList > $listScale ) {
				if( $startPage+1 > $listScale*$pageScale ) {
					$prePage = $startPage - $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?startPage=$prePage'><span aria-hidden='true'>&laquo;</span></a></li>";
				}
				for( $j=0; $j<$pageScale; $j++ ) {
					$nextPage = ($totalPage * $pageScale + $j) * $listScale;
					$pageNum = $totalPage * $pageScale + $j+1;
					if( $nextPage < $totalList ) {
						if( $nextPage!= $startPage ) {
							echo "<li><a href='$_SERVER[PHP_SELF]?startPage=$nextPage'>$pageNum</a></li>";
						} else {
							echo "<li class='active'><a href='javascript:;'>$pageNum</a></li>";
						}
					}
				}
				if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
					$nNextPage = ($totalPage+1) * $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?startPage=$nNextPage'><span aria-hidden='true'>&raquo;</span></a></li>";
				}
			}
			if( $totalList <= $listScale) {
				echo "<li class='active'><a href='javascript:;' >1</a></li>";
			}
			?>
		</ul>
	</div>


	<table class="table">
		<tr>
			<td class="text-center"><a href="./popup_add.php" class="btn btn-primary">등록하기</a></td>
		</tr>
	</table>
	

<? include('../footer.php');?>
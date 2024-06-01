<?
$mod	= "online";	
$menu	= "sa_inquiry";
include("../header.php");

	$table			= "cs_sa_inquiry";
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));
	$query		= "select * from $table where 1";
    // 검색어
    if($search_order){
        if($search_item == 'name'){
            $query.=" and name like '%$search_order%'";
        } else if($search_item == 'phone'){
            $query.=" and phone like '%$search_order%'";
        } else if($search_item == 'part'){
            $query.=" and part like '%$search_order%'";
        } else if($search_item == 'request_quantity'){
            $query.=" and request_quantity like '%$search_order%'";
        } else{
            $query.=" and (name like '%$search_order%' or phone like '%$search_order%' or part like '%$search_order%' or request_quantity like '%$search_order%' or content like '%$search_order%')";
        }
    }
    //문의내용
    if($search_inquiry_content) {
        $query.=" and inquiry_content = '$search_inquiry_content'";
    }
    // 정품보유여부
    if($genuine_r == 'Y' || $genuine_r == 'N') {
        $query .= " and genuine = '$genuine_r'";
    }

	$rs				= mysql_query($query);
	$totalList	= mysql_num_rows($rs);

	$query = "select * from $table where 1";
    // 검색어
    if($search_order){
        if($search_item == 'name'){
            $query.=" and name like '%$search_order%'";
        } else if($search_item == 'phone'){
            $query.=" and phone like '%$search_order%'";
        } else if($search_item == 'part'){
            $query.=" and part like '%$search_order%'";
        } else if($search_item == 'request_quantity'){
            $query.=" and request_quantity like '%$search_order%'";
        } else{
            $query.=" and (name like '%$search_order%' or phone like '%$search_order%' or part like '%$search_order%' or request_quantity like '%$search_order%' or content like '%$search_order%')";
        }
    }
    //문의내용
    if($search_inquiry_content) {
        $query.=" and inquiry_content = '$search_inquiry_content'";
    }
    // 정품보유여부
    if($genuine_r == 'Y' || $genuine_r == 'N') {
        $query .= " and genuine = '$genuine_r'";
    }
	$query.="  order by idx desc LIMIT $startPage, $listScale";
	$result = mysql_query($query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

	<h4 class="page-header">반도체 분석 신청서</h4>

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
                        <option value="part" <?if($search_item=="part"){?>selected<?}?>>파트명</option>
                        <option value="request_quantity" <?if($search_item=="request_quantity"){?>selected<?}?>>의뢰수량</option>
					</select>
				</div>
			</div>
			<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
		</td>
        <tr>
            <th>문의내용</th>
            <td>
                <div class="form-group">
                    <div class="input-group-btn">
                        <select name="search_inquiry_content" class="form-control input-sm">
                            <option value="">전체</option>
                            <option value="위변조(정품비교분석)" <?if($search_inquiry_content=="위변조(정품비교분석)"){?>selected<?}?>>위변조(정품비교분석)</option>
                            <option value="단품분석" <?if($search_inquiry_content=="단품분석"){?>selected<?}?>>단품분석</option>
                            <option value="불량확인" <?if($search_inquiry_content=="불량확인"){?>selected<?}?>>불량확인</option>
                            <option value="기타" <?if($search_inquiry_content=="기타"){?>selected<?}?>>기타</option>
                        </select>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th>정품보유여부</th>
            <td>
                <input type="hidden" name="genuine_r"/>
                <label class="checkbox-inline"><input type="checkbox" name="genuine" value="" <?if($genuine_r == '') echo 'checked'?> onchange="changeGenuine(0)">전체</label>
                <label class="checkbox-inline"><input type="checkbox" name="genuine" value="Y" <?if($genuine_r == '' || $genuine_r == 'Y') echo 'checked'?> onchange="changeGenuine(1)">예</label>
                <label class="checkbox-inline"><input type="checkbox" name="genuine" value="N" <?if($genuine_r == '' || $genuine_r == 'N') echo 'checked'?> onchange="changeGenuine(2)">아니오</label>
            </td>
        </tr>
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
	<table class="table table-bordered table-hover">
	<colgroup>
	<!-- !NOTE S : 2024-04 변경 -->
        <col width="5%">
        <col width="5%">
        <col width="10%">
        <col width="10%">
        <col width="15%">
        <col width="7%">
        <col width="*">
        <col width="7%">
        <col width="7%">
        <col width="7%">
	<!-- !NOTE E : 2024-04 변경 -->
	</colgroup>
	<thead>
	<tr>
		<td><button type="button" class="btn btn-danger btn-xs btn-block ajax-checkbox" data-table="<?=$table?>" data-name="delete" data-val="">삭제</button></td>
		<!-- !NOTE S : 2024-04 변경 -->
		<td colspan="9"></td>
		<!-- !NOTE E : 2024-04 변경 -->
	</tr>
	<tr>
        <th><input type="checkbox" id="allCheck"></th>
        <th>N O</th>
        <th>이름</th>
        <th>휴대폰</th>
        <th>파트명</th>
        <th>의뢰수량</th>
        <th>문의내용</th>
        <th>정품보유여부</th>
        <th>등록일</th>
        <th>관리하기</th>
	</tr>
	</thead>
	<tbody>
	<?
		$today = date("Y-m-d");
		while($row = mysql_fetch_array($result)){
			$reg_date	= $tools->strDateCut($row[reg_date], 3);

			$content = $tools->strCut_utf($tools->strHtmlNoBr($row[content]), 100);
	?>
	<tr>
		<td class="text-center"><input type="checkbox" name="check_list" value="<? echo $row[idx] ?>"></td>
		<td class="text-center"><?echo $listNo?></td>
		<td class="text-center"><?echo $row[name]?><? if($today==$reg_date){ ?>&nbsp;<span class="label label-danger">New</span><? } ?></td>
		<td class="text-center"><?echo $row[phone]?> </td>
		<!-- !NOTE S : 2024-04 추가 -->
        <td class="text-center"><?echo $row[part]?> </td>
        <td class="text-center"><?echo $row[request_quantity]?> </td>
		<!-- !NOTE E : 2024-04 추가 -->
		<td><?echo $content;?></td>
        <td class="text-center"><?echo $row[genuine]?> </td>
		<td class="text-center"><?echo $reg_date?></td>
		<td class="text-center"><a href="./sa_inquiry_view.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&idx=<?=$row[idx]?>" class="btn btn-default btn-sm">상세보기</a></td>
	</tr>
	<? 
		$listNo--;
		}
	?>
	</tbody>
	</table>
	</div>


	<div class="text-center">
		<ul class="pagination">
			<?
			$pageURL= "search_item=".urlencode($search_item);
			$pageURL.= "&search_order=".urlencode($search_order);
			$pageURL.= "&search_inquiry_content=".urlencode($search_inquiry_content);
			$pageURL.= "&genuine_r=".urlencode($genuine_r);

			if( $totalList > $listScale ) {
				if( $startPage+1 > $listScale*$pageScale ) {
					$prePage = $startPage - $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$prePage'><span aria-hidden='true'>&laquo;</span></a></li>";
				}
				for( $j=0; $j<$pageScale; $j++ ) {
					$nextPage = ($totalPage * $pageScale + $j) * $listScale;
					$pageNum = $totalPage * $pageScale + $j+1;
					if( $nextPage < $totalList ) {
						if( $nextPage!= $startPage ) {
							echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nextPage'>$pageNum</a></li>";
						} else {
							echo "<li class='active'><a href='javascript:;'>$pageNum</a></li>";
						}
					}
				}
				if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
					$nNextPage = ($totalPage+1) * $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nNextPage'><span aria-hidden='true'>&raquo;</span></a></li>";
				}
			}
			if( $totalList <= $listScale) {
				echo "<li class='active'><a href='javascript:;' >1</a></li>";
			}
			?>
		</ul>
	</div>


    <script>
        $(document).ready(function () {
            changeGenuine(1);
        });

        function changeGenuine(index) {
            if(index == 0) {
                $('[name=genuine]').eq(1).prop('checked', $('[name=genuine]').eq(0).is(':checked'));
                $('[name=genuine]').eq(2).prop('checked', $('[name=genuine]').eq(0).is(':checked'));
            } else if(index > 0 && !$('[name=genuine]').eq(1).is(':checked') || !$('[name=genuine]').eq(2).is(':checked')) {
                $('[name=genuine]').eq(0).prop('checked', false);
            } else if(index > 0 && $('[name=genuine]').eq(1).is(':checked') && $('[name=genuine]').eq(2).is(':checked')) {
                $('[name=genuine]').eq(0).prop('checked', true);
            }

            if($('[name=genuine]').eq(0).is(':checked')) {
                $('[name=genuine_r]').val('');
            } else {
                if($('[name=genuine]').eq(1).is(':checked')) {
                    $('[name=genuine_r]').val('Y');
                } else if($('[name=genuine]').eq(2).is(':checked')) {
                    $('[name=genuine_r]').val('N');
                }
            }
        }
    </script>

 <? include('../footer.php');?>

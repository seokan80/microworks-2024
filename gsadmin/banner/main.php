<?
$mod	= "banner";	
$menu	= "main";
include('../header.php'); 
	$table			= "cs_banner_main";
	$listScale		= 10;
	$pageScale	    = 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select * from $table where 1";
    // 검색어
    if($search_order != '') {
        if ($search_item == 'subject') {
            $query .= " and title like '%$search_order%'";
        } else {
            $query .= " and (title like '%$search_order%' or link_url like '%$search_order%')";
        }
    }
    // 좌우위치
    if($direction_r != '') {
        $query .= " and direction = '$direction_r'";
    }
    // 상태
    if($status_r == 'Y') {
        $query .= " and CURDATE() between period_start_date and period_end_date";
    } else if($status_r == 'N') {
        $query .= " and CURDATE() not between period_start_date and period_end_date";
    }

	$rs				= mysql_query($query);
	$totalList	    = mysql_num_rows($rs);

	$query = "select * from $table where 1";
    if($search_order != '') {
        if ($search_item == 'subject') {
            $query .= " and title like '%$search_order%'";
        } else {
            $query .= " and (title like '%$search_order%' or link_url like '%$search_order%')";
        }
    }
    // 좌우위치
    if($direction_r != '') {
        $query .= " and direction = '$direction_r'";
    }
    // 상태
    if($status_r == 'Y') {
        $query .= " and CURDATE() between period_start_date and period_end_date";
    } else if($status_r == 'N') {
        $query .= " and CURDATE() not between period_start_date and period_end_date";
    }

	$query.="  order by idx desc LIMIT $startPage, $listScale";
	$result = mysql_query($query);

    if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

	<h4 class="page-header">메인배너 관리</h4>

    <form method="get" name="search_form" class="form-inline" action="/gsadmin/banner/main.php">
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
                            <select name="search_item" class="form-control input-sm">
                                <option value="">통합검색</option>
                                <option value="subject" <?if($search_item=="subject"){?>selected<?}?>>제목</option>
                            </select>
                        </div>
                    </div>
                    <input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
                </td>
            </tr>
            <tr>
                <th>구분</th>
                <td>
                    <input type="hidden" name="direction_r">
                    <label class="checkbox-inline"><input type="checkbox" name="direction" value="" <?if($direction_r == '') echo 'checked'?> onchange="changeDirection(0)">전체</label>
                    <label class="checkbox-inline"><input type="checkbox" name="direction" value="L" <?if($direction_r == '' || $direction_r == 'L') echo 'checked'?> onchange="changeDirection(1)">좌</label>
                    <label class="checkbox-inline"><input type="checkbox" name="direction" value="R" <?if($direction_r == '' || $direction_r == 'R') echo 'checked'?> onchange="changeDirection(2)">우</label>
                </td>
            </tr>
            <tr>
                <th>상태</th>
                <td>
                    <input type="hidden" name="status_r">
                    <label class="checkbox-inline"><input type="checkbox" name="status" value="" <?if($status_r == '') echo 'checked'?> onchange="changeStatus(0)">전체</label>
                    <label class="checkbox-inline"><input type="checkbox" name="status" value="Y" <?if($status_r == '' || $status_r == 'Y') echo 'checked'?> onchange="changeStatus(1)">사용중</label>
                    <label class="checkbox-inline"><input type="checkbox" name="status" value="N" <?if($status_r == '' || $status_r == 'N') echo 'checked'?> onchange="changeStatus(2)">종료</label>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm">검색</button>&nbsp;
                    <a href="/gsadmin/banner/main.php" class="btn btn-default btn-sm">초기화</a>
                </td>
            </tr>
            </tbody>
        </table>
    </form>

    <div class="table-responsive">
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
            <?
            while($row = mysql_fetch_array($result)){
                //$cate_row = $db->object("cs_cate", "where idx='$row[cate]'");
                $idx		    =		$row[idx];
                $reg_date	    =       $tools->strDateCut($row[reg_date], 3);
                $title			=		$tools->strCut_utf($row[title], 100);
                $direction		=		$row[direction];
                $link_url		=		$row[link_url];
                $first_order	=		$row[first_order];
                $period_yn              =		$row[period_yn];
                $period_start_date      =		$row[period_start_date];
                $period_end_date        =		$row[period_end_date];
                $period_status          =       "-";
                $currentDate = new DateTime();
                $start_date = DateTime::createFromFormat('Y-m-d', $period_start_date);
                $end_date = DateTime::createFromFormat('Y-m-d', $period_end_date);
                if($start_date > $currentDate) {
                    $period_status = "시작전";
                } else if ($currentDate >= $start_date && $currentDate <= $end_date){
                    $period_status = "진행중";
                } else {
                    $period_status = "종료";
                }
            ?>
            <tr>
                <td class="text-center"><input type="checkbox" name="check_list" value="<?=$idx?>"></td>
                <td class="text-center"><?=$listNo ?></td>
                <td class="text-center"><?if($direction == 'R') {echo '우';} else if($direction == 'L') {echo '좌';}?> </td>
                <td class="text-center"><a href="javascript:imagesView( '<?=$idx;?>', '300', '200' );">이미지</a></td>
                <td><?=$title?></td>
                <td class="text-center"><?=$first_order?></td>
                <td class="text-center"><?=$period_status?></td>
                <td class="text-center"><?=$period_start_date."~<br/>".$period_end_date?></td>
                <td class="text-center"><?=$link_url?></td>
                <td class="text-center"><?=$reg_date?></td>
                <td class="text-center"><a href="./main_edit.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&idx=<?=$idx?>"
                                           class="btn btn-default btn-sm">상세보기</a></td>
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
			<td class="text-center"><a href="./main_add.php" class="btn btn-primary">등록하기</a></td>
		</tr>
	</table>
	
    <script>
        $(document).ready(function () {
            changeDirection(1);
            changeStatus(1);
        });

        /*출력이미지*/
        function imagesView( idx, w, h ){
            window.open("main_images_view.php?idx="+idx,"","scrollbars=no,width="+w+",height="+h+",top=200,left=200");
        }

        function changeDirection(index) {
            if(index == 0) {
                $('[name=direction]').eq(1).prop('checked', $('[name=direction]').eq(0).is(':checked'));
                $('[name=direction]').eq(2).prop('checked', $('[name=direction]').eq(0).is(':checked'));
            } else if(index > 0 && !$('[name=direction]').eq(1).is(':checked') || !$('[name=direction]').eq(2).is(':checked')) {
                $('[name=direction]').eq(0).prop('checked', false);
            } else if(index > 0 && $('[name=direction]').eq(1).is(':checked') && $('[name=direction]').eq(2).is(':checked')) {
                $('[name=direction]').eq(0).prop('checked', true);
            }

            if($('[name=direction]').eq(0).is(':checked')) {
                $('[name=direction_r]').val('');
            } else {
                if($('[name=direction]').eq(1).is(':checked')) {
                    $('[name=direction_r]').val('L');
                } else if($('[name=direction]').eq(2).is(':checked')) {
                    $('[name=direction_r]').val('R');
                }
            }
        }

        function changeStatus(index) {
            if(index == 0) {
                $('[name=status]').eq(1).prop('checked', $('[name=status]').eq(0).is(':checked'));
                $('[name=status]').eq(2).prop('checked', $('[name=status]').eq(0).is(':checked'));
            } else if(index > 0 && !$('[name=status]').eq(1).is(':checked') || !$('[name=status]').eq(2).is(':checked')) {
                $('[name=status]').eq(0).prop('checked', false);
            } else if(index > 0 && $('[name=status]').eq(1).is(':checked') && $('[name=status]').eq(2).is(':checked')) {
                $('[name=status]').eq(0).prop('checked', true);
            }

            if($('[name=status]').eq(0).is(':checked')) {
                $('[name=status_r]').val('');
            } else {
                if($('[name=status]').eq(1).is(':checked')) {
                    $('[name=status_r]').val('Y');
                } else if($('[name=status]').eq(2).is(':checked')) {
                    $('[name=status_r]').val('N');
                }
            }
        }
    </script>
<? include('../footer.php');?>

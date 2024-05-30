<?
$mod	= "stat";
$menu	= "buy";
include("../header.php");
if($search_sday == null) {
    $search_sday = date("Y-m-d", strtotime("-7 Day"));
}
if($search_eday == null) {
    $search_eday = date('Y-m-d');
}
$listScale		= 10;
$pageScale	= 10;
if( !$startPage ) { $startPage = 0; }
$totalPage = floor($startPage / ($listScale * $pageScale));
$query = "select t.category, t.idx, t.name, t.phone, t.part_name, t.request_quantity, t.content, t.reg_date";
$query.= " from (select 'online' as category, idx, name, phone, part_name, request_quantity, content, reg_date from cs_online";
$query.= " union all";
$query.= " select 'estimate' as category, idx, name, phone, null as part_name, null as request_quantity, content, reg_date from cs_estimate";
$query.= " union all";
$query.= " select 'product' as category, idx, name, phone, part_name, request_quantity, content, reg_date from cs_online_product";
$query.= " union all";
$query.= " select 'inquiry' as category, idx, name, phone, part as part_name, request_quantity, content, reg_date from cs_sa_inquiry) as t";
$query.= " where 1=1";
$unionquery = $query;

// 기간
$query.= " and t.reg_date between DATE_FORMAT('$search_sday','%Y-%m-%d') and DATE_FORMAT('$search_eday','%Y-%m-%d')";
// 구분
if($category_r){
    $query.= " and '$$category_r' like concat('%', t.category, '%')";
}
$rs				= mysql_query($query);
$totalList	= mysql_num_rows($rs);

$query = $unionquery;
// 기간
$query.= " and t.reg_date between DATE_FORMAT('$search_sday','%Y-%m-%d') and DATE_FORMAT('$search_eday','%Y-%m-%d')";
// 구분
if($category_r){
    $query.= " and '$$category_r' like concat('%', t.category, '%')";
}
$query.="  order by t.reg_date desc LIMIT $startPage, $listScale";
$result = mysql_query($query);

if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

<h4 class="page-header">구매문의 통계</h4>

    <form method="get" name="search_form" class="form-inline" action="/gsadmin/stat/buy_inquery_stat.php">
      <table class="table table-bordered">
        <colgroup>
          <col width="15%">
          <col width="*">
        </colgroup>
        <tbody>
          <tr>
            <th>기간</th>
            <td>
              <div class="input-group datetime">
                <input type="text" name="search_sday" class="form-control input-sm text-center" value="<?=$search_sday?>">
                <span class="input-group-addon">
                  <span class="glyphicon-calendar glyphicon"></span>
                </span>
              </div>
              ~
              <div class="input-group datetime">
                <input type="text" name="search_eday" class="form-control input-sm text-center" value="<?=$search_eday?>">
                <span class="input-group-addon">
                  <span class="glyphicon-calendar glyphicon"></span>
                </span>
              </div>
            </td>
          </tr>
          <tr>
            <th>구분</th>
            <td>
              <input type="hidden" name="category_r" value=""/>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="" <?if($category_r == null || $category_r == '') echo 'checked'?> onchange="changeCategory(0)">전체</label>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="online" <?if(strpos($category_r,'online')) echo 'checked'?> onchange="changeCategory(1)">온라인 신청서</label>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="estimate" <?if(strpos($category_r,'estimate')) echo 'checked'?> onchange="changeCategory(2)">견적 신청서</label>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="product" <?if(strpos($category_r,'product')) echo 'checked'?> onchange="changeCategory(3)">제품문의 신청서</label>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="inquiry" <?if(strpos($category_r,'inquiry')) echo 'checked'?> onchange="changeCategory(4)">반도체 분석 신청서</label>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="text-center">
              <button type="submit" class="btn btn-primary btn-sm">검색</button>&nbsp;
              <a href="/gsadmin/bbs/bbs_list.php?code=notice" class="btn btn-default btn-sm">초기화</a>
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
          <col width="12%">
          <col width="10%">
          <col width="12%">
          <col width="11%">
          <col width="6%">
          <col width="*">
          <col width="10%">
          <col width="7%">
        </colgroup>
        <thead>
          <tr>
            <td colspan="10">
              <span>총 00건</span>
              <div class="btn-toolbar pull-right">
                <a href="/gsadmin/online/online.php" class="btn btn-default btn-xs">
                  온라인 신청서 바로가기
                  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </a>
                <a href="/gsadmin/online/estimate.php" class="btn btn-default btn-xs">
                  견적 신청서 바로가기
                  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </a>
                <a href="/gsadmin/online/online_product.php" class="btn btn-default btn-xs">
                  제품문의 신청서 바로가기
                  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </a>
                <a href="/gsadmin/online/sa_inquiry.php" class="btn btn-default btn-xs">
                  반도체 분석 신청서 바로가기
                  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </a>
                <a href="trade_excel.php?<?=$param_url?>" class="btn btn-primary btn-xs">엑셀 다운로드</a>
              </div>
            </td>
          </tr>
          <tr>
            <th><input type="checkbox" id="allCheck"></th>
            <th>N O</th>
            <th>구분</th>
            <th>이 름</th>
            <th>휴대폰</th>
            <th>부품명</th>
            <th>수량</th>
            <th>내 용</th>
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
            $category_nm = "";
            $detail_link = "";
            if($row[category] == 'online') {
                $category_nm = "온라인 신청서";
                $detail_link = "/gsadmin/online/online_view.php";
            } else if($row[category] == 'estimate') {
                $category_nm = "견적 신청서";
                $detail_link = "/gsadmin/online/estimate_view.php";
            }else if($row[category] == 'product') {
                $category_nm = "제품문의 신청서";
                $detail_link = "/gsadmin/online/online_product_view.php";
            }else if($row[category] == 'inquiry') {
                $category_nm = "반도체 분석  신청서";
                $detail_link = "/gsadmin/online/sa_inquiry_view.php";
            }
            ?>
            <tr>
                <td class="text-center"><input type="checkbox" name="check_list" value="<? echo $row[idx] ?>"></td>
                <td class="text-center"><?echo $listNo?></td>
                <td class="text-center"><?echo $category_nm?></td>
                <td class="text-center"><?echo $row[name]?><? if($today==$reg_date){ ?>&nbsp;<span class="label label-danger">New</span><? } ?></td>
                <td class="text-center"><?echo $row[phone]?> </td>
                <!-- !NOTE S : 2024-04 추가 -->
                <td class="text-center"><?echo $row[part_name]?> </td>
                <td class="text-center"><?echo $row[request_quantity]?> </td>
                <!-- !NOTE E : 2024-04 추가 -->
                <td><?echo $content;?></td>
                <td class="text-center"><?echo $reg_date?></td>
                <td class="text-center"><a href="<?=$detail_link?>?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&idx=<?=$row[idx]?>" class="btn btn-default btn-sm">상세보기</a></td>
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
            $pageURL= "search_sday=".urlencode($search_sday);
            $pageURL.= "&search_eday=".urlencode($search_eday);
            $pageURL.= "&category_r=".urlencode($category_r);

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
    <?if($category_r == null || $category_r == '') {?>
        changeCategory(0);
    <?} else {?>
        changeCategory(1);
    <?}?>
});

function changeCategory(index) {
    if(index == 0) {
        $('[name=category]').eq(1).prop('checked', $('[name=category]').eq(0).is(':checked'));
        $('[name=category]').eq(2).prop('checked', $('[name=category]').eq(0).is(':checked'));
        $('[name=category]').eq(3).prop('checked', $('[name=category]').eq(0).is(':checked'));
        $('[name=category]').eq(4).prop('checked', $('[name=category]').eq(0).is(':checked'));
    } else if(index > 0 && !$('[name=category]').eq(1).is(':checked') || !$('[name=category]').eq(2).is(':checked') || !$('[name=category]').eq(3).is(':checked') || !$('[name=category]').eq(4).is(':checked')) {
        $('[name=category]').eq(0).prop('checked', false);
    } else if(index > 0 && $('[name=category]').eq(1).is(':checked') && $('[name=category]').eq(2).is(':checked') && $('[name=category]').eq(3).is(':checked') && $('[name=category]').eq(4).is(':checked')) {
        $('[name=category]').eq(0).prop('checked', true);
    }

    if($('[name=category]').eq(0).is(':checked')) {
        $('[name=category_r]').val('');
    } else {
        var categoryValue= '';
        for(var i=1;i<=4;i++) {
            if($('[name=category]').eq(i).is(':checked')) {
                categoryValue = categoryValue + ',' +  $('[name=category]').eq(i).val();
            }
        }
        $('[name=category_r]').val(categoryValue);
    }
}
</script>
<? include('../footer.php');?>

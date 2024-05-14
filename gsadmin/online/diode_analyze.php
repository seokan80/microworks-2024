<?
$mod	= "online";	
$menu	= "online";
include("../header.php");

	$table			= "cs_online";
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));
	$query		= "select * from $table where 1";
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (name like '%$search_order%' or phone like '%$search_order%' or content like '%$search_order%')";
			}
		}
	$rs				= mysql_query($query);
	$totalList	= mysql_num_rows($rs);

	$query = "select * from $table where 1";
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (name like '%$search_order%' or phone like '%$search_order%' or content like '%$search_order%')";
			}
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
						<option value="content" <?if($search_item=="content"){?>selected<?}?>>내용</option>
					</select>
				</div>
			</div>
			<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
		</td>
	</tr>
	<tr>
		<th>문의내용</th>
		<td>
			<div class="form-group">
				<div class="input-group-btn">
					<select name="search_item" class="form-control input-sm">
						<option value="">전체</option>
					</select>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<th>정품보유여부</th>
		<td>
			<label class="checkbox-inline"><input type="checkbox" name="genuine" value="" checked="">전체</label>
			<label class="checkbox-inline"><input type="checkbox" name="genuine" value="">예</label>
			<label class="checkbox-inline"><input type="checkbox" name="genuine" value="">아니오</label>
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
	<table class="table table-bordered table-hover">
	<colgroup>
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
	</colgroup>
	<thead>
	<tr>
		<td><button type="button" class="btn btn-danger btn-xs btn-block ajax-checkbox" data-table="<?=$table?>" data-name="delete" data-val="">삭제</button></td>
		<td colspan="9"></td>
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
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
			<td class="text-center">2100</td>
			<td class="text-center">Roberttak&nbsp;<span class="label label-danger">New</span></td>
			<td class="text-center">88413517158 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>Прывітанне, я хацеў даведацца Ваш прайс.</td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-23</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3275"></td>
			<td class="text-center">2099</td>
			<td class="text-center">DonaldBexes</td>
			<td class="text-center">82821992482 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>loli child porn

				==&gt; eit.tw/04G9JV &lt;==

				==&gt; url.epoch.tw/Z4RGq &lt;==</td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-22</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3275"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3274"></td>
			<td class="text-center">2098</td>
			<td class="text-center">Masontak</td>
			<td class="text-center">85213972627 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>Salut, ech wollt Äre Präis wëssen.</td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-21</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3274"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3273"></td>
			<td class="text-center">2097</td>
			<td class="text-center">Masonzef</td>
			<td class="text-center">83974545-89759595-87649172 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>Ciao, volevo sapere il tuo prezzo.</td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-21</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3273"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3272"></td>
			<td class="text-center">2096</td>
			<td class="text-center">Roberttak</td>
			<td class="text-center">85737385279 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>Sawubona, bengifuna ukwazi intengo yakho.</td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-20</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3272"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3271"></td>
			<td class="text-center">2095</td>
			<td class="text-center">Masontak</td>
			<td class="text-center">89818537426 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>Hæ, ég vildi vita verð þitt.</td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-19</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3271"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3270"></td>
			<td class="text-center">2094</td>
			<td class="text-center">Roberttak</td>
			<td class="text-center">81781473544 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>Здравейте, исках да знам цената ви.</td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-19</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3270"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3269"></td>
			<td class="text-center">2093</td>
			<td class="text-center">KitchenAidhsi</td>
			<td class="text-center">82339692675 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td></td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-17</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3269"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3268"></td>
			<td class="text-center">2092</td>
			<td class="text-center">Roberttak</td>
			<td class="text-center">88586378511 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>Hi, kam dashur të di çmimin tuaj</td>
			<td class="text-center">예</td>
			<td class="text-center">2024-04-16</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3268"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="3267"></td>
			<td class="text-center">2091</td>
			<td class="text-center">김민국</td>
			<td class="text-center">010-4163-4091 </td>
			<td>Microworks </td>
			<td class="text-center">45 </td>
			<td>안녕하세요. 세창 김민국 입니다.

				Nand flash XTX (XT27G02ATSIGA) 갱 라이팅이 가능 여부 확인 부탁 드립니다.

				감사합니다. 수고하세요.

				─�...</td>
			<td class="text-center">예</td>
				<td class="text-center">2024-04-16</td>
			<td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3267"
					class="btn btn-default btn-sm">상세보기</a></td>
		</tr>
	</tbody>
	</table>
	</div>


	<div class="text-center">
		<ul class="pagination">
			<?
			$pageURL= "search_item=".urlencode($search_item);
			$pageURL.= "&search_order=".urlencode($search_order);

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


 <? include('../footer.php');?>
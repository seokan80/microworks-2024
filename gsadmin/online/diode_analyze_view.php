<?
$mod	= "online";	
$menu	= "online_product";
include("../header.php");

$row = $db->object("cs_online_product","where idx='$idx'");
?>

<!-- !NOTE : 신규 페이지 -->
	<h4 class="page-header">반도체 분석 신청서</h4>

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>접수일</th>
		<td><?echo $row->reg_date?></td>
	</tr>
	<tr>
		<th>이 름</th>
		<td><?echo $row->name?></td>
	</tr>
	<tr>
		<th>연락처</th>
		<td><?echo $row->phone?></td>
	</tr>
	<tr> 
		<th>회사명</th>
		<td>
			<?echo $row->subject?>
		</td>
	</tr>
	<tr>
		<th>이메일</th>
		<td><?echo $row->email?></td>
	</tr>
	<tr>
		<th>파트명</th>
		<td>파트명</td>
	</tr>
	<tr>
		<th>의뢰수량</th>
		<td>의뢰수량</td>
	</tr>
	<tr>
		<th>문의내용</th>
		<td>문의내용</td>
	</tr>
	<tr>
		<th>정품보유여부</th>
		<td>정품보유여부</td>
	</tr>
	<tr>
		<th>상세내용</th>
		<td>상세내용</td>
	</tr>
	</tbody>
	</table>


	<table class="table">
		<tr>
			<td class="text-center"><a href="<?echo $returnURL? $returnURL:"online_product.php";?>" class="btn btn-default" >목록</a></td>
		</tr>
	</table>

<? include('../footer.php');?>
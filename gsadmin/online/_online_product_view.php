<?
$mod	= "online";
$menu	= "online_product";
include("../header.php");

$row = $db->object("cs_online_product","where idx='$idx'");
?>

	<h4 class="page-header">제품문의 신청서</h4>

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
		<th>내 용</th>
		<td><?echo nl2br($tools->strHtmlNoBr($row->content));?></td>
	</tr>
	</tbody>
	</table>


	<table class="table">
		<tr>
			<td class="text-center"><a href="<?echo $returnURL? $returnURL:"online_product.php";?>" class="btn btn-default" >목록</a></td>
		</tr>
	</table>

<? include('../footer.php');?>

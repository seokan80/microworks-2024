<?
$mod	= "online";	
$menu	= "estimate";
include("../header.php");

$row = $db->object("cs_estimate","where idx='$idx'");
?>

	<h4 class="page-header">견적 신청서</h4>

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
			<?echo $row->company?>
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
	<tr>
		<th>견적내용</th>
		<td>
			<table class="table table-bordered">
			<colgroup>
			<col width="15%">
			<col width="*">
			<col width="15%">
			</colgroup>
			<tbody>
			<tr>
				<th>No</th>
				<th>Part #</th>
				<th>Quantity</th>
			</tr>
			<?
			$i=1;
			$rsp = $db->select("cs_estimate_product","where code='$row->code' order by idx asc");
			while($rowp = mysql_fetch_object($rsp)){
			?>
			<tr>
				<td class="text-center"><?=$i?></td>
				<td><?=$rowp->goods_name?></td>
				<td class="text-center"><?=$rowp->ea?></td>
			</tr>
			<? $i++; } ?>
			</table>
		</td>
	</tr>
	</tbody>
	</table>


	<table class="table">
		<tr>
			<td class="text-center"><a href="<?echo $returnURL? $returnURL:"online.php";?>" class="btn btn-default" >목록</a></td>
		</tr>
	</table>

<? include('../footer.php');?>
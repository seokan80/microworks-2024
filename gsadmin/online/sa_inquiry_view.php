<?
$mod	= "online";	
$menu	= "sa_inquiry";
include("../header.php");

$row = $db->object("cs_sa_inquiry","where idx='$idx'");
?>

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
			<?echo $row->company?>
		</td>
	</tr>
	<tr>
		<th>이메일</th>
		<td><?echo $row->email?></td>
	</tr>
	<!-- !NOTE S : 2024-04 추가 -->
	<tr>
		<th>파트명</th>
        <td><?echo $row->part?></td>
	</tr>
    <tr>
        <th>의뢰수량</th>
        <td><?echo $row->request_quantity?></td>
    </tr>
    <tr>
        <th>문의내용</th>
        <td><?echo $row->inquiry_content?></td>
    </tr>
    <tr>
        <th>정품보유여부</th>
        <td><?echo $row->genuine?></td>
    </tr>
	<!-- !NOTE E : 2024-04 추가 -->
	<tr>
        <th>상세내용</th>
		<td><?echo nl2br($tools->strHtmlNoBr($row->content));?></td>
	</tr>
	</tbody>
	</table>


	<table class="table">
		<tr>
			<td class="text-center"><a href="<?echo $returnURL? $returnURL:"sa_inquiry.php";?>" class="btn btn-default" >목록</a></td>
		</tr>
	</table>

<? include('../footer.php');?>

<?
$mod	= "online";
$menu	= "online";
include("../header.php");

$row = $db->object("cs_online","where idx='$idx'");
?>

<h4 class="page-header">온라인 신청서</h4>

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
        <th>부품명</th>
        <td><?echo $row->part_name?></td>
    </tr>
    <tr>
        <th>필요수량</th>
        <td><?echo $row->request_quantity?></td>
    </tr>
    <tr>
        <th>희망납기</th>
        <td><?echo $row->wish_date?></td>
    </tr>
    <tr>
        <th>목표단가</th>
        <td><?echo $row->goal_price?></td>
    </tr>
    <!-- !NOTE E : 2024-04 추가 -->
    <tr>
        <th>내 용</th>
        <td><?echo nl2br($tools->strHtmlNoBr($row->content));?></td>
    </tr>
    </tbody>
</table>


<table class="table">
    <tr>
        <td class="text-center"><a href="<?echo $returnURL? $returnURL:"online.php";?>" class="btn btn-default" >목록</a></td>
    </tr>
</table>

<? include('../footer.php');?>

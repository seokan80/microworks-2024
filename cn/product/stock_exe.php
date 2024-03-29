<? session_start(); ?>
<? include $_SERVER['DOCUMENT_ROOT']."/common.php"; ?>
<?
for($i=0;$i<count($check);$i++) {

	$row = $db->object("cs_excel_b","where idx='$check[$i]'");

	$db->insert("cs_cart","code='$_SESSION[CART]',goods_idx='$check[$i]',goods_name='$row->attr_1',quan='$row->attr_2',mfr='$row->attr_3',dc='$row->attr_4',remark='$row->attr_5',register=now()");
	
}	
?>
<script>
alert("장바구니에 담았습니다.");
</script>
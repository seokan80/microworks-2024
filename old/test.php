<?
	if(!$connect) $connect = @mysql_connect("nild03.uhost.co.kr","mworksk","tvp5150") or Error("DB 접속시 에러가 발생했습니다");
	@mysql_select_db("mworksk", $connect) or Error("DB Select 에러가 발생했습니다","");


	//$query = "show tables;";
	//$query = "desc zetyx_board_eng_notice";
	$query = "ALTER TABLE zetyx_board_eng_notice CHANGE memo memo LONGTEXT";

	$result = mysql_query($query);
	exit;
	
	while($row=mysql_fetch_array($result)){
			echo "<pre>";
			print_R($row);
			echo "</pre>";
	}
?>


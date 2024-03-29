<?
$page_num = "03";
$sub_num = "01";
$page_section = "product";
$sub_section = "trend";
$page_info = "PRODUCT SEARCH";
$sub_info = "Memory trend";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>

/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<?
$no = $tools->filter($no);
$row = $db->object("zetyx_board_eng_memory","where no='$no'");
$db->update("zetyx_board_eng_memory","hit=hit+1 where no='$no'");

		$content = $row->memo;
		$content = str_replace("<P>","",$content);
		$content = str_replace("</P>","<br/>",$content);
		$content = str_replace("<p>","",$content);
		$content = str_replace("</p>","<br/>",$content);
		$content = $tools->strHtml($content);
?>

				<!-- 컨텐츠 내용 -->
				<article class="media-page">
					<div class="area">


<article class="bbs-view-con">
	<aside class="bbs-view-top">
		<h1 class="bbs-tit"><?=$db->stripSlash($row->subject);?></h1>
		<dl class="bbs-write-info">
			<!-- <dt>작성자</dt>
			<dd><?=$name?></dd> -->
			<dt>작성일</dt>
			<dd><?=date("Y-m-d",$row->reg_date)?></dd>
			<dt>조회수</dt>
			<dd><?=number_format($row->hit)?></dd>
		</dl>
	</aside>
	<div class="bbs-view-content editor">
		<?=$content;?>
	</div>
	


	<div class="cm-btn-controls">
		
		<div class="right-btn-controls">
			<a href="trend_before.php" class="btn-style01">
				목록
			</a>
		</div>
	</div>
				
				</div>
				
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

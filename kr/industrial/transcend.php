<?
$page_num = "04";

$page_section = "industrial";
$sub_section = "industrial";
$page_info = "INDUSTRIAL";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";

if($part1_idx==""){ $part1_idx = 1; }
$row = $db->object("cs_part","where idx='$part1_idx'");

$sub_num = "0".$part1_idx;

$sub_info = $row->part_name;

$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<?
$part1_idx = $tools->filter($part1_idx);
$row = $db->object("cs_part","where idx='$part1_idx'");
$bottom_img = $row->bbs_file3;
?>

	<article class="industrial-content area">
		<article class="industrial-top">
			<span class="logo"><img src="/data/bbsData/<?=$row->bbs_file?>" alt="" /></span>
			<span class="banner-img"><img src="/data/bbsData/<?=$row->bbs_file2?>" alt="" /></span>
		</article>

		<article class="industrial-prd">
			
			<?
			$part1_code = $row->part1_code;
			$rs = $db->select("cs_part","where part_display_check='1' and part1_code='$part1_code' and part_index='2' order by part_ranking asc, idx asc");
			while($row = mysql_fetch_object($rs)){
			?>
			
			<div class="industrial-prd-con">
				<h3 class="tit"><?=$row->part_name?></h3>
				
				<?
				$part2_code = $row->part2_code;
				$rs2cnt = $db->cnt("cs_part","where part_display_check='1' and part1_code='$part1_code' and part2_code='$part2_code' and part_index='3'");
				if($rs2cnt>0){
				$rs2 = $db->select("cs_part","where part_display_check='1' and part1_code='$part1_code' and part2_code='$part2_code' and part_index='3' order by part_ranking asc, idx asc");
				while($row2 = mysql_fetch_object($rs2)){
				?>
				
				<div class="prd-sub-con">
					<strong class="sub-tit"><?=$row2->part_name?></strong>
					<ul class="prd-list clearfix">
						<?
						$part_idx = $row2->idx;
						$rsg = $db->select("cs_goods","where display='1' and part_idx='$part_idx' order by ranking asc, idx asc");
						while($rowg = mysql_fetch_object($rsg)){
						?>
						<li>
							<div class="inner">
								<span class="prd-img"><img src="/data/goodsImages/<?=$rowg->images1?>" alt="" /></span>
							</div>
						</li>
						<? } ?>
					</ul>
				</div>

				<? } ?>

				<? } else { ?>


				<div class="prd-sub-con">
					<ul class="prd-list clearfix">
						<?
						$part_idx = $row->idx;
						$rsg = $db->select("cs_goods","where display='1' and part_idx='$part_idx' order by ranking asc, idx asc");
						while($rowg = mysql_fetch_object($rsg)){
						?>
						<li>
							<div class="inner">
								<span class="prd-img"><img src="/data/goodsImages/<?=$rowg->images1?>" alt="" /></span>
							</div>
						</li>
						<? } ?>
					</ul>
				</div>

				<? } ?>

				
			</div>

			<? } ?>


			
		</article>
        <!-- #202405 industiral 문의하기 추가-->
		<!-- !NOTE S : 2024-04 추가 -->
		<article class="product-page inquiry-page">
            <? include $_SERVER["DOCUMENT_ROOT"]."/common/include_industrial_inquiry.php"; ?>
        </article>
        <!-- !NOTE E : 2024-04 추가 -->

	</article>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

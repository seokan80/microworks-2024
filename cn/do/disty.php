<?
$page_num = "02";
$sub_num = "02";
$page_section = "do";
$sub_section = "disty";
$page_info = "服务项目";
$sub_info = "代理";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
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
				<!-- 컨텐츠 내용 -->
				<article class="do-page disty-page area-box">
					<div class="inner clearfix">
						<div class="bg-con"><img src="<?=$site_host?>/images/content/disty_img.jpg" alt=""></div>
						<div class="txt-con">
							<div class="inner">
								<!-- <p class="tit">
									다양한 브랜드의 정식대리점으로서, <br>
									<span class="red-txt">믿을 수 있는 자재</span>와 빠르고 <br>
									<span class="blue-txt">정확한 유통</span>을 위해서 노력하고 있습니다.
								</p> -->
								<p class="tit">有多种品牌的正式代理, <br><span class="red-txt">为可靠正品</span>产品和<span class="blue-txt">快速,</span><br>准确的流通而努力</p>
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="txt">
									供应代理店认为，<br>准确的产品供给和准确的日程传达是最好的或最好的作用。
								</p>
							</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

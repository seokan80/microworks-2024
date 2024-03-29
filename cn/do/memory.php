<?
$page_num = "02";
$sub_num = "01";
$page_section = "do";
$sub_section = "memory";
$page_info = "服务项目";
$sub_info = "Memory";
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
				<article class="do-page memory-page area-box">
					<div class="inner clearfix">
						<div class="bg-con"><img src="<?=$site_host?>/images/content/memory_img.jpg" alt=""></div>
						<div class="txt-con">
							<div class="inner">
								<p class="tit">
									时刻准备着向在<span class="red-txt">快速的</span><br>市场情况中<span class="blue-txt">准确地对应。</span>
								</p>
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="txt">
									MICROWORKS KOREA 是Memory及IC零组件买卖之专业贸易商. 随时准备确认快速变化的价格变动及对应<br>
									每周发送Memory价格趋势邮件，可看到每周的价格趋势
								</p>
							</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

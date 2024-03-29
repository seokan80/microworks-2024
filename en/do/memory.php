<?
$page_num = "02";
$sub_num = "01";
$page_section = "do";
$sub_section = "memory";
$page_info = "WHAT WE DO";
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
								We are always ready for <br><span class="blue-txt">the action promtply</span><br>
								<span class="red-txt">in fast-changing market.</span> 
									
								</p>
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="txt">
									Microworks Korea Co.,Ltd.  Is specializes in 
									the distribution of <br>
									memory semiconductor electronic components.<br>
									We are trying our best to prepare for the fastest supply <br>
									in the fast changing memory IC market.<br>
									We will update the Memory Price trend every week and<br> you may check the memory price.
								</p>
								<p style="margin-top: 30px;">
									<a href="http://www.microworks.co.kr/en/product/trend_list.php"><img src="http://www.microworks.co.kr/img/btn_memory_en.png" alt=""></a>
								</p>
							</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

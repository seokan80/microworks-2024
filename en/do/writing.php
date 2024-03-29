<?
$page_num = "02";
$sub_num = "04";
$page_section = "do";
$sub_section = "Writing Service";
$page_info = "WHAT WE DO";
$sub_info = "Writing Service";
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
				<article class="do-page writing-page area-box">
					<div class="inner clearfix">
						<div class="bg-con"><img src="<?=$site_host?>/images/content/writing_img.jpg" alt=""></div>
						<div class="txt-con">
							<div class="inner">
								<p class="tit">
									<span class="red-txt">We provide fast and reliable</span><br>
									<span class="blue-txt">Program Writing Service</span><br>
								</p>
									<p class="txt">
										We provide a program lighting service. <br>
										Please contact us for any questions.<br>
									</p>

								<!-- 추가된 내용 -->
								<table class="table_txt" style="margin-top:30px;">
									<tr>
										<th scope="row"><img src="/img/writing_01.png" alt=""></th>
										<td style="line-height:1.5em; color:#fff; padding-left:20px;">
											<strong> ** Memory Writing Service </strong><br>
											- SD Card  <br>
											- Micro SD Card  <br>
											- CF Memory Card  <br>
											- USB Memory  <br>
										</td>
									</tr>
									<tr>
										<th scope="row"><img src="/img/writing_02.png" alt=""></th>
										<td style="line-height:1.5em; color:#fff; padding-left:20px;">
											<strong>** ROM Writing Service </strong><br>
											- MCU, ROM, NAND Flash, Serial Flash. <br>
											- MCU (ATMEL, MICROCHIP, NUVOTON, STM, etc.)
										</td>
									</tr>
								</table>
							</div>
						</div>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

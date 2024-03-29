<?
$page_num = "02";
$sub_num = "04";
$page_section = "do";
$sub_section = "Writing Service";
$page_info = "WHAT WE DO";
$sub_info = " Writing Service";
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
									<span class="red-txt">정확하고 빠른</span><br>
									<span class="blue-txt">Program Writing Service</span>로<br>
									시간과 비용절감을 도와드립니다.
								</p>
									<p class="txt">
										자사에서는 프로그램 라이팅(Program Writing) 서비스를 제공하고 있습니다. <br>
										꼼꼼한 라이팅서비스를 통하여 대량 생산 작업시 발생되는 많은 시간과 비용을 절감할 수 있습니다.
										라이팅작업 관련하여 궁금하신 사항은 연락주시면 상세하게 안내해드리겠습니다.
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
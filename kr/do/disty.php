<?
$page_num = "02";
$sub_num = "02";
$page_section = "do";
$sub_section = "disty";
$page_info = "WHAT WE DO";
$sub_info = "Manufacturing Business";
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
								<p class="tit">
									<span class="red-txt">MANUFACTURING BUSINESS</span><br><span class="blue-txt">PCB ARTWORK, S/W, H/W개발<br>
									MICOM 개발</span><br>
								</p>
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="txt">
									각종 MCU기술력을 기반으로 하는 DID광고판넬, 컨트롤보드, 멀티미디어기기, 일반가전기기등 <br>
									다양한 어플리케이션의 설계 및 생산에 대한 경험을 바탕으로 고객의 요구사항에 맞추어 <br>
									개발에서 생산까지 one stop service system을 갖추고 있습니다.
								</p>
							</div>
						</div>
					</div>
				</article>
				<article class="do-page disty-page area-box">
					<div class="inner clearfix">
						<div class="txt-con">
							<div class="inner">
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="tit">
									<span class="red-txt">ODM 서비스</span><br><span class="white-txt">PCB ARTWORK, <br> S/W부분 MICOM 개발업무</span><br>
								</p>
								<p class="txt">
									당사는 반도체부품 구매,개발,생산부서의 경쟁력을 활용하여 ODM개발을 통하여<br>
									고객사와의 파트너로 동반성장하고자 합니다.
								</p>
								<ul class="txt" style="font-size: 14px; line-height:22px; color:#91ffff; ">
									<li> - 당사 연구소 엔지니어를 통한 기술지원 (기술력) </li>
									<li> - 당사 글로벌소싱팀의 경쟁력 있는 가격 (부품원가 경쟁력) </li>
									<li> - 제품생산을 목적으로 하기에 경쟁력있는 개발비용 </li>
									<li> - 간단한 개발의 경우 개발비없이 개발 후 PCB ASS'Y로 공급 (최소생산수량 협의) </li>
								</ul>

							</div>
						</div>
						<div class="txt-con">
							<div class="inner">
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="tit">
									<span class="red-txt">ODM 제품</span><br><span class="white-txt">다양한 어플리케이션 개발</span><br>
								</p>
								
								<p class="txt">
									멀티미디어 박스, DID광고패널, 키오스크, 온도조절제어장치, 신용카드단말기, 센서, 모듈 외 다양한 어플리케이션 개발 <br>
								</p>
								<br>
								<img src="<?=$site_host?>/images/content/manu_01.png" alt="" class="odm_img">
							</div>
						</div>
					</div>
				</article>

				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

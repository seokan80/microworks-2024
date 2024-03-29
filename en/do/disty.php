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
									<span class="red-txt">MANUFACTURING BUSINESS</span><br><span class="blue-txt">PCB ARTWORK, S/W, H/W R&D<br>
									MICOM Developement</span><br>
								</p>
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="txt">
									We have the experience, capability, and R&D resources to produce DID Panel, Controller Board, Multimedia Application, Commercial Application. <Br>
									We work with your inspired idea at all stages of design and manufacture, from concept to finish.
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
									<span class="red-txt">ODM SERVICE</span><br><span class="white-txt">PCB Artwork, <br> S/W, MICOM Development</span><br>
								</p>
								<p class="txt">
									Microwork Korea is committed to delivering quality solutions to our customers through our OEM/ODM service by capability of international sourcing, R&D experience, and availability of mass production.
								</p>
								<ul class="txt" style="font-size: 14px; line-height:22px; color:#91ffff; ">
									<li> - Esign and development of prototype by Microwork R&D center </li>
									<li> - Worldwide inventory control by our  sourcing team </li>
									<li> - Tageting manafacture cost by  exact definitions of production specification </li>
									<li> - We offer no cost for low level of  mass production (Discussion min. q'ty of ASSEMBLY) </li>
								</ul>

							</div>
						</div>
						<div class="txt-con">
							<div class="inner">
								<p class="icon"><img src="<?=$site_host?>/images/content/do_con_icon.png" alt=""></p>
								<p class="tit">
									<span class="red-txt">ODM Products</span><br><span class="white-txt">Developing Various Applications</span><br>
								</p>
								
								<p class="txt">
									Multimedia Box, DID Panel, Kiosk, Temperature control device, Credit card terminal., Sensor, Module, etc. Applications.  <br>
								</p>
								<br>
								<img src="<?=$site_host?>/images/content/manu_01.png" alt="" class="odm_img">
							</div>
						</div>
					</div>
				</article>

				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

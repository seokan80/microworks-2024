<?
$page_num = "02";
$sub_num = "07";
$page_section = "do";
$sub_section = "program";
$page_info = "WHAT WE DO";
$sub_info = "Vertification Program";
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
				<article class="program-page area">
					<article class="program-top clearfix">
						<div class="img-con"><span class="img-wrap"><img src="<?=$site_host?>/images/content/program_img.png" alt=""></span></div>
						<div class="txt-con">
							<div class="inner">
								<p class="tit">
									<span>마이크로웍스 코리아㈜만의</span>
									<b><span>철저한</span> 밴더검증 시행</b>
								</p>
								<p class="txt">
									정품의 확실한 품질의 자재를 납품하기 위하여 엄격히 검증된 밴더와 교류를 통하여 
									품질관리를 해나가고 있으며, 밴더를 4가지로 구분하여 밴더를 검증, 관리하고 있습니다. <br>
									<br>
								</p>
								<p style="font-size:15px; line-height: 25px;">
									<b>- Preferred Vendor </b> : 반도체 제조본사. 지사 <br>
									<b>- Approved Vendor </b> : 반도체 공식대리점 <br>
									<b>- Conditional Vendor </b> : 오픈마켓 (B2B), 방문하여 검증한 밴더 <br>
									<b>- Unreliable Vendor List </b> : 검증되지 않은 밴더 (단순유통, 브로커) <br>
								</p>
							</div>
						</div>
					</article>
					<article class="program-con">
						<p class="program-con-tit">Vendor Rating</p>
						<ul class="program-con-list clearfix">
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_01.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">01</span>Preferred</p>
										<div class="txt-box">
											<p class="txt">100% 품질신뢰</p>
											<p class="txt">빠른대응</p>
											<p class="txt">합리적인 가치</p>
										</div>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_02.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">02</span>Approved</p>
										<div class="txt-box">
											<p class="txt">품질증명된 밴더</p>
											<p class="txt">한국/해외 대리점</p>
										</div>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_03.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">03</span>Conditional</p>
										<div class="txt-box">
											<p class="txt">품질 증명되지 않음</p>
											<p class="txt">제품출처 확실하지 않음</p>
											<p class="txt">조건부 구매</p>
										</div>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_04.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">04</span> UVL </p>
										<div class="txt-box">
											<p class="txt"> Unreliable Vendor list </p>
											<p class="txt"> 구매금지 업체 </p>
											<p class="txt"> Fake 제품취급 </p>
										</div>
									</dd>
								</dl>
							</li>
						</ul>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

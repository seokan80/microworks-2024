<?
$page_num = "02";
$sub_num = "06";
$page_section = "do";
$sub_section = "program";
$page_info = "WHAT WE DO";
$sub_info = "验证程序";
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
									<span>Microworks Korea Co.,LTD </span>
									<b>本公司<span>严格的</span><br>VENDOR验证标准</b>
								</p>
								<p class="txt">
									为提供给品质好，仅从确认本公司的VENDOR验证的供应商购买 <br>
									减少时间和费用,帮助您更加放心地购买<br>
									<br>
									分类的VENDOR通过持续的交易持续更新评价后进行管理。
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
											<p class="txt">100% 品质信任뢰</p>
											<p class="txt">快速对应</p>
											<p class="txt">合理价值</p>
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
											<p class="txt">品质信任</p>
											<p class="txt">韩国及海外代理店</p>
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
											<p class="txt">品质不好</p>
											<p class="txt">货源不知道</p>
											<p class="txt">条件采购</p>
										</div>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="<?=$site_host?>/images/content/program_icon_04.png" alt=""></dt>
									<dd>
										<p class="tit"><span class="num">04</span>UVL</p>
										<div class="txt-box">
											<p class="txt">Unreliable Vendor list</p>
											<p class="txt">禁止购买</p>
											<!-- <p class="txt">Fake 제품취급</p> -->
										</div>
									</dd>
								</dl>
							</li>
						</ul>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

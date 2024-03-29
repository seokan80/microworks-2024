<?
$page_num = "01";
$sub_num = "01";
$page_section = "company";
$sub_section = "summary";
$page_info = "公司";
$sub_info = "MICROWORKS 简介";
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
				<article class="summary-page">
					<article class="summary-top-box">
						<div class="top-bg clearfix"><img src="<?=$site_host?>/images/content/summary_top_img.jpg" alt=""></div>
						<div class="top-blue-box">
							<div class="inner">
								<span class="top-tit-en">公司简介</span>
								<p class="top-tit-kr"><b>走向世界的坚实</b>企业</p>
								<p class="top-tit-txt">
									MICROWORKS KOREA 成立于2007年，<br>为MEMORY及IC零组件买卖之专业贸易商。
								</p>
							</div>
						</div>
						<div class="top-txt-box">
							<p class="txt">
								目前通过电子元器件交易领域好久积累的丰富经验，尽量努力提供给您品质及价格好。<br>
								MICROWORKS KOREA 随时欢迎客户，将持续不断地改善并提供有关的多样化的信息和服务. 
							</p>
						</div>
					</article>
					<article class="summary-con summary-con01">
						<div class="area">
							<p class="summary-con-tit">经营理念</p>
							<ul class="summary-con-list clearfix">
								<li class="item01">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_01.png" alt=""></span>
											<dl>
												<dt><p class="tit">VISION</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt"><i class="material-icons">&#xe876</i>企业发展</p>
														<p class="txt"><i class="material-icons">&#xe876</i>同伴共成长</p>
														<p class="txt"><i class="material-icons">&#xe876</i>提高产品价格竞争力</p>
													</div>
												</dd>
											</dl>
										</div>
									</div>
								</li>
								<li class="item02">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_02.png" alt=""></span>
											<dl>
												<dt><p class="tit">MISSION</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt"><i class="material-icons">&#xe876</i>实力雄厚的企业</p>
														<p class="txt"><i class="material-icons">&#xe876</i>长寿企业</p>
														<p class="txt"><i class="material-icons">&#xe876</i>信赖家族般的企业</p>
														<p class="txt"><i class="material-icons">&#xe876</i>开创未来的企业</p>
													</div>
												</dd>
											</dl>
										</div>
									</div>
								</li>
								<li class="item03">
									<div class="inner-box">
										<div class="inner">
											<span class="img"><img src="<?=$site_host?>/images/content/summary_icon_03.png" alt=""></span>
											<dl>
												<dt><p class="tit">CORE VALUES</p></dt>
												<dd>
													<div class="txt-box">
														<p class="txt"><i class="material-icons">&#xe876</i>对客户快速的反应能力</p>
														<p class="txt"><i class="material-icons">&#xe876</i>具有竞争力的价格</p>
														<p class="txt"><i class="material-icons">&#xe876</i>企业定制化服务</p>
														<p class="txt"><i class="material-icons">&#xe876</i>品质管理</p>
														<p class="txt"><i class="material-icons">&#xe876</i>新产品推荐</p>
													</div>
												</dd>
											</dl>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</article>
					<article class="summary-con summary-con02">
						<div class="area">
							<div class="inner clearfix">
								<div class="sales-con">
									<dl>
										<dt>
											<span class="icon"><img src="<?=$site_host?>/images/content/summary_icon_04.png" alt=""></span>
											<span class="tit">销售部</span>
										</dt>
										<dd>
											<div class="txt-box">
												<p class="txt">紧急采购</p>
												<p class="txt">订货</p>
												<p class="txt">R&D 支持</p>
												<p class="txt">定做报价</p>
												<p class="txt">交钥匙（Turnkey ）进行</p>
											</div>
										</dd>
									</dl>
								</div>
								<div class="buy-con">
									<dl>
										<dt>
											<span class="icon"><img src="<?=$site_host?>/images/content/summary_icon_05.png" alt=""></span>
											<span class="tit">采购部</span>
										</dt>
										<dd>
											<div class="txt-box">
												<p class="txt">Vendor Verification Program 通过的卖主</p>
												<p class="txt">严格的卖主收集</p>
												<p class="txt">系统化数据库</p>
												<p class="txt">OEM不用库存买入</p>
												<p class="txt">二十年以上的积累丰富的经验</p>
											</div>
										</dd>
									</dl>
								</div>
							</div>
						</div>
					</article>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

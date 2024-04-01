<?
$page_num = "01";
$sub_num = "03";
$page_section = "company";
$sub_section = "org";
$page_info = "公司";
$sub_info = "组织";
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
$(document).ready(function  () {
		/* *********************** 리스트의 높이값 맞추기 ************************ */
		var $autoList = $(".auto-height-list-con .auto-height-item");	// ul > li
		var $autoListInner = $autoList.children(".inner-box");					// ul > li 안에 border가 표시되는 영역
		var heightDiv = ".inner";				// 높이값을 결정하는 영역		
		var listNum = $autoList.length;			
		var resetWidth = 480; // 높이값을 해제하는 구간
			autoHeight();
			$(window).resize(function  () {
				autoHeight();
			}); 

		function  autoHeight(){
			maxHeight = 0;
			for (var i=0; i<listNum; i++) {
				var curHeight = $autoList.eq(i).find(heightDiv).innerHeight();
				if ( curHeight > maxHeight ) {
					maxHeight = curHeight;
				}
			}
			$autoListInner.height(maxHeight);
			
			if ( $(window).innerWidth() < resetWidth + 1 ){
			  $autoListInner.css('height','auto');
			}
		}
	});
</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<article class="org-page">
					<div class="area">
						<p class="org-tit font-martel"><span>M</span>icroworks Korea Co.,Ltd</p>
						<div class="org-con">
							<ul class="org-list clearfix auto-height-list-con">
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_01.png" alt=""></span>
												<span class="tit-en">销售部</span>
												<!-- <span class="tit-kor">국내필드영업</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">R&D 支持</p>
													<p class="txt">OEM 销售</p>
													<p class="txt">订货</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_02.png" alt=""></span>
												<span class="tit-en">內部銷售部</span>
												<!-- <span class="tit-kor">유동/제조사</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">紧急库存采购</p>
													<p class="txt">小批量 </p>
													<p class="txt">技术数据支持</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_03.png" alt=""></span>
												<span class="tit-en">出货部</span>
												<!-- <span class="tit-kor">수출팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">全球出货</p>
													<p class="txt">技术数据支持</p>
													<p class="txt">竞争价格及交期</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_04.png" alt=""></span>
												<span class="tit-en">采购部</span>
												<!-- <span class="tit-kor">CS업무/해외소싱</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">全球特许经营 </p>
													<p class="txt">全球采购专家 </p>
													<p class="txt">热门产品</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_05.png" alt=""></span>
												<span class="tit-en">会计部</span>
												<!-- <span class="tit-kor">경영지원팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">税收支持</p>
													<p class="txt">付款</p>
													<p class="txt">管理</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_06.png" alt=""></span>
												<span class="tit-en">T.O.Q.C</span>
												<!-- <span class="tit-kor">품질관리팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">质量检查 </p>
													<p class="txt">产品检查 </p>
													<p class="txt">RMA支持</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_07.png" alt=""></span>
												<span class="tit-en">B2B 市场营销</span>
												<!-- <span class="tit-kor">B2B 마케팅팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">网站及管理</p>
													<p class="txt">SNS 市场营销</p>
													<p class="txt">B2B 管理</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_08.png" alt=""></span>
												<span class="tit-en">货管理</span>
												<!-- <span class="tit-kor">자재팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">现货管理</p>
													<p class="txt">LOT管理</p>
													<p class="txt">OEM Excess管理</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_09.png" alt=""></span>
												<span class="tit-en">半导体分析中心</span>
												<!-- <span class="tit-kor">자재팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">半导体缺陷分析</p>
													<p class="txt">X-RAY test</p>
													<p class="txt">Electrical test</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
								<li class="auto-height-item">
									<div class="inner-box">
										<dl class="inner">
											<dt>
												<span class="icon"><img src="<?=$site_host?>/images/content/org_icon_10.png" alt=""></span>
												<span class="tit-en">製造團隊</span>
												<!-- <span class="tit-kor">자재팀</span> -->
											</dt>
											<dd>
												<div class="txt-box">
													<p class="txt">ODM產品生產</p>
													<p class="txt">PCB Ass'y</p>
													<p class="txt">JIG, Module, Sensor 開發</p>
												</div>
											</dd>
										</dl>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

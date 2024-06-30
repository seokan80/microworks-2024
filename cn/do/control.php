<?
$page_num = "02";
$sub_num = "05";
$page_section = "do";
$sub_section = "control";
$page_info = "服务项目";
$sub_info = "质量管理";
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
				<!-- !NOTE S : 2024-04 추가 -->
				<article class="do-page control-page area">
						<p class="control-page-tit">我们正在通过运营自己的半导体缺陷分析中心尽一切努力<br><b>质量控制</b>。</p>
						<article class="control-con control-con01">
							<p class="num font-crimson">01</p>
							<div class="control-con-box clearfix">
								<div class="img-con"><img src="/images/content/control_img_01.png" alt=""></div>
								<div class="text-con">
									<dl>
										<dt>
                                            <p class="tit">进出检验</p>
										</dt>
										<dd>
                                            <p class="txt">半导体交易大数据服务器的运行与利用</p>
                                            <p class="txt">检查外部标签、数据表</p>
                                            <p class="txt">条形码/二维码检查</p>
                                            <p class="txt">封装状况检查（ESD、MSL）</p>
                                            <p class="txt">X射线检查</p>
                                            <p class="txt">检查运输标签</p>
										</dd>
									</dl>
								</div>
							</div>
						</article>
						<article class="control-con control-con02">
							<p class="num font-crimson">02</p>
							<div class="control-con-box clearfix">
								<div class="img-con"><img src="/images/content/control_img_02.png" alt=""></div>
								<div class="text-con">
									<dl>
										<dt>
                                            <p class="tit">详细检查</p>
										</dt>
										<dd>
                                            <p class="txt">数码显微镜检查</p>
                                            <p class="txt">顶部标记格式和打印状态检查</p>
                                            <p class="txt">封装表面（物理/化学）检查</p>
                                            <p class="txt">镀铅检查</p>
										</dd>
									</dl>
								</div>
							</div>
							<div class="control-item-list-box">
								<ul class="control-item-list clearfix">
									<li class="item01">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_01.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>Digital Microscope</span></p>
											</dd>
										</dl>
									</li>
									<li class="item02">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_02.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>Constant Temp &<br />Humidity Chamber</span></p>
											</dd>
										</dl>
									</li>
									<li class="item03">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_03.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>X-ray Inspection System</span></p>
											</dd>
										</dl>
									</li>
									<li class="item04">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_04.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>3D V-I Tester</span></p>
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</article>
						<article class="control-con control-con03">
							<p class="num font-crimson">03</p>
							<div class="control-con-box clearfix">
								<div class="img-con"><img src="/images/content/control_img_03.png" alt=""></div>
								<div class="text-con">
									<dl>
										<dt>
                                            <p class="tit">半导体缺陷分析</p>
										</dt>
										<dd>
                                            <p class="txt">X 射线分析（引线框架、DIE）</p>
                                            <p class="txt">解封装分析</p>
                                            <p class="txt">V-I 曲线分析</p>
                                            <p class="txt">自定义分析</p>
                                            <p class="txt">假货分析</p>
                                            <p class="txt">化学、物理分析</p>
										</dd>
									</dl>
								</div>
							</div>
							<div class="control-item-list-box">
								<ul class="control-item-list clearfix">
									<li class="item01">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_05.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>Blacktop (Scrape)</span></p>
											</dd>
										</dl>
									</li>
									<li class="item02">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_06.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>X-ray</span></p>
											</dd>
										</dl>
									</li>
									<li class="item03">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_07.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>Optical Inspection</span></p>
											</dd>
										</dl>
									</li>
									<li class="item04">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_08.png" alt=""></span></dt>
											<dd>
												<p class="item-name"><span>3D V-I Curve</span></p>
											</dd>
										</dl>
									</li>
									<li class="item05">
										<dl>
											<dt><span class="item-img"><img src="/images/content/control_item_img_09.png" alt=""></span></dt>
											<dd>
                                                <p class="item-name"><span>二维码解码分析</span></p>
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</article>
						<div class="button-layout center">
                            <!-- #202405 반도체 분석 문의하기 추가 -->
                            <!-- !NOTE : control_popup.php 팝업 띄워주세요 -->
                            <button type="button" class="button size-lg margin-top-xxl" onclick="javascript:layerLoad('/do/control_popup.php?lang=cn'); return false;"><strong>半导体分析查询</strong></button>
						</div>
					</article>
					<!-- !NOTE S : 2024-04 추가 -->
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

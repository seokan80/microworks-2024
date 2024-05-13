<?
$page_num = "02";
$sub_num = "06";
$page_section = "do";
$sub_section = "control";
$page_info = "WHAT WE DO";
$sub_info = "Quality Control";
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
				<article class="do-page control-page area">
						<p class="control-page-tit">자체 반도체 불량 분석센터 운영으로 <br><b>품질관리</b>에 만전을 기하고 있습니다.</p>
						<article class="control-con control-con01">
							<p class="num font-crimson">01</p>
							<div class="control-con-box clearfix">
								<div class="img-con"><img src="/images/content/control_img_01.png" alt=""></div>
								<div class="text-con">
									<dl>
										<dt>
											<p class="tit">입출고 검사</p>
										</dt>
										<dd>
											<p class="txt">반도체 거래 빅데이터 서버 운영 및 활용</p>
											<p class="txt">외부 라벨, DATA SHEET 확인</p>
											<p class="txt">바코드/QR코드 검사</p>
											<p class="txt">포장 상태 검수(ESD, MSL)</p>
											<p class="txt">엑스레이 검사</p>
											<p class="txt">출고라벨 검수</p>
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
											<p class="tit">세부검사</p>
										</dt>
										<dd>
											<p class="txt">Digital Microscope 정밀검사</p>
											<p class="txt">탑마킹 형식 및 인쇄상태 검사</p>
											<p class="txt">패키지 표면(물리적/화학적) 검사</p>
											<p class="txt">리드 도금 검사</p>
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
											<p class="tit">반도체 불량분석</p>
										</dt>
										<dd>
											<p class="txt">X-ray 분석(리드프레임, DIE)</p>
											<p class="txt">De-capsulation 분석</p>
											<p class="txt">V-I Curve 분석</p>
											<p class="txt">Custom 분석</p>
											<p class="txt">Counterfeit 분석</p>
											<p class="txt">Chemical, Physical 분석</p>
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
								</ul>
							</div>
						</article>
						<div class="button-layout center">
							<button type="button" class="button size-lg margin-top-xxl"><strong>반도체 분석 문의하기</strong></button>
						</div>
					</article>
				<!-- //컨텐츠 내용 -->
				<!-- 모달 레이어팝업 -->
				<!-- S : 2024-04 추가 -->
				<article class="modal-fixed-pop-wrapper inquiry-popup">
					<div class="modal-fixed-pop-inner">
						<!-- <div class="modal-loading"><span class="loading"></span></div> -->
						<div class="modal-inner-box">
							<div class="modal-inner-header">
								<p class="modal-title">반도체 분석 문의</p>
								<a href="javascript:;" class="modal-close-btn" title="팝업 닫기"><i class="material-icons">&#xE14C;</i></a>
							</div>
							<div class="modal-inner-content">
								<article class="contact-form inquiry-page">
									<!-- 문의 폼 시작 -->
									<form action="./inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">
										<section class="bbs-write-con">
											<article class="bbs-inquiry-agree-con">
												<p class="agree-tit">개인정보처리방침</p>
												<div class="inquiry-agreement-con editor">
													<p>개인정보처리방침</p>
												</div>
												<p class="agree-txt">
													<input type="checkbox" id="agree1">
														<label for="agree1">개인정보처리방침에 동의합니다.
													</label>
												</p>
											</article>
											<article class="bbs-write-tbl-box">
												<p class="inquiry-essential-txt"><span class="essential-icon">*</span>표시는 필수 입력 항목입니다.</p>
												<table class="bbs-write-tbl">
													<caption>문의폼입니다.</caption>
													<colgroup>
														<col style="width:25%;">
														<col>
													</colgroup>
													<tbody>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>이름</th>
															<td><input type="text" class="write-input" name="name" required="required"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>이메일</th>
															<td>
																<fieldset class="email-fieldset">
																	<input type="text" class="write-input" name="email1" required="required">
																	<span class="hypen">@</span>
																	<input type="text" class="write-input" name="email2" readonly required="required">
																	<select name="email3" class="write-select" onChange="res();" required="required">
																		<option value="b">메일계정선택</option>
																		<option value="a">직접입력</option>
																		<option value="naver.com">naver.com</option>
																		<option value="nate.com">nate.com</option>
																		<option value="hanmail.net">hanmail.net</option>
																		<option value="gmail.com">gmail.com</option>
																		<option value="hotmail.com">hotmail.com</option>
																		<option value="outlook.com">outlook.com</option>
																		<option value="empal.com">empal.com</option>
																		<option value="dreamwiz.com">dreamwiz.com</option>
																		<option value="lycos.co.kr">lycos.co.kr</option>
																		<option value="yahoo.co.kr">yahoo.co.kr</option>
																		<option value="korea.com">korea.com</option>
																		<option value="paran.com">paran.com</option>
																	</select>
																</fieldset>
															</td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>연락처</th>
															<td>
																<fieldset>
																	<input type="text" class="write-input" name="phone1" title="휴대폰번호 처음" maxlength="8" required="required">
																	<span class="hypen">-</span>
																	<input type="text" class="write-input" name="phone2" title="휴대폰번호 가운데" maxlength="8" required="required">
																	<span class="hypen">-</span>
																	<input type="text" class="write-input"  name="phone3" title="휴대폰번호 마지막" maxlength="8" required="required">
																</fieldset>
															</td>
														</tr>
														<tr>
															<th scope="row"> 회사명</th>
															<td><input type="text" class="write-input width-full" name="company"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>파트명</th>
															<td><input type="text" class="write-input width-full" name="part" required="required"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>의뢰수량</th>
															<td><input type="text" class="write-input" name="request-quantity" required="required"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>문의내용</th>
															<td>
																<select name="inquiry-content" class="write-select" required="required">
																	<option value="">위변조(정품비교분석)</option>
																</select>
															</td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>정품보유여부</th>
															<td>
																<div class="ox-group">
																	<span class="ox">
																		<input type="radio" name="genuine" id="genuine-y">
																		<label for="genuine-y">예</label>
																	</span>
																	<span class="ox">
																		<input type="radio" name="genuine" id="genuine-n">
																		<label for="genuine-n">아니오</label>
																	</span>
																</div>
															</td>
														</tr>
														<tr>
															<th scope="row">상세내용</th>
															<td class="size-full">
																<textarea name="content" class="write-textarea" placeholder="문의내용 (500자 이내로 입력해주세요.)"></textarea>
															</td>
														</tr>
													</tbody>
												</table>
												<dl class="contact">
													<dt>* CONTACT:</dt>
													<dd>이메일 <a href="mailto:info@microworks.co.kr">info@microworks.co.kr</a></dd>
													<dd>문의전화 <a href="tel:02-6112-7328">02-6112-7328</a></dd>
												</dl>
											</article>
											<!--
												기본 : 센터정렬 / 좌측정렬 : cm-btn-align-left / 우측정렬 : cm-btn-align-right / 100% 버튼 : cm-btn-long-controls
											-->
											<div class="button-layout bottom-buttons">
												<button type="button" class="button" onClick="sendit();"><strong>작성완료</strong></button>
												<a href="/" class="button type-secondary"><strong>취소</strong></a>
											</div>
										</section>
									</form>
									<!-- // 문의 폼 끝 -->
								</article>
							</div>
						</div>
					</div>
				</article>
				<!-- E : 2024-04 추가 -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>


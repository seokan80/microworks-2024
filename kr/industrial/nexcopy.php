<?
$page_num = "04";
$sub_num = "03";
$page_section = "industrial";
$sub_section = "nexcopy";
$page_info = "INDUSTRIAL";
$sub_info = "Nexcopy";
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
		<article class="product-page inquiry-page">
						<div class="area">
							<article class="contact-form">
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
													<col style="width:16%;">
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
														<th scope="row">부품명</th>
														<td><input type="text" class="write-input width-full" name="part-name"></td>
													</tr>
													<tr>
														<th scope="row">필요수량</th>
														<td><input type="text" class="write-input width-full" name="request-quantity"></td>
													</tr>
													<tr>
														<th scope="row">희망납기</th>
														<td><input type="text" class="write-input width-full" name="wish-date"></td>
													</tr>
													<tr>
														<th scope="row">목표단가</th>
														<td><input type="text" class="write-input width-full" name="goal-price"></td>
													</tr>
													<tr>
														<th scope="row">상세내용</th>
														<td>
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
					</article>
				<!-- !NOTE E : 2024-04 추가 -->
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
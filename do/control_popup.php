<?
$page_num = "02";
$sub_num = "06";
$page_section = "do";
$sub_section = "control";
$page_info = "WHAT WE DO";
$sub_info = "Quality Control";
include $_SERVER["DOCUMENT_ROOT"] . "/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"] . $site_directory . "/include/dtd.php";
include $_SERVER['DOCUMENT_ROOT'] . "/common.php";
if($_GET[lang] == 'ko') $lang = 1;
if($_GET[lang] == 'en') $lang = 2;
if($_GET[lang] == 'cn') $lang = 3;
if($lang==2){ // 영문
    // 화면 메세지
    $control_txt_name = "Name";
    $control_txt_email = "E-mail";
    $control_txt_email_select_a = "Direct input";
    $control_txt_email_select_b = "Select mail account";
    $control_txt_phone = "Tel";
    $control_txt_company = "Company";
    $control_txt_company_placeholder = "Please enter your company name.";
    $control_txt_agree = "I agree with the privacy policy.";
    $control_txt_content = "Content";
    $control_txt_content_sub1 = "(No more than 100 characters.)";
    $control_txt_privacy = "privacy policy";
    $control_txt_semiconductor_analysis_inquiry = "Semiconductor Analysis Inquiry";
    $control_txt_mark_required = "Marked as required.";
    $control_txt_tel_first = "First mobile phone number";
    $control_txt_tel_middle = "In the middle of mobile phone number";
    $control_txt_tel_last = "last cell phone number";
    $control_txt_partname = "Part name";
    $control_txt_inquiry_content = "Request quantity";
    $control_txt_inquiry_content_sub1 = "Forgery and alteration (comparative analysis of genuine products)";
    $control_txt_inquiry_content_sub2 = "Single item analysis";
    $control_txt_inquiry_content_sub3 = "Defect check";
    $control_txt_inquiry_content_sub4 = "etc";
    $control_txt_genuine = "Whether you have genuine product";
    $control_txt_yes = "yes";
    $control_txt_no = "no";
    $control_txt_detail = "Detail";
    $control_txt_send = "Submit";
    $control_txt_cancel = "cancellation";

    // script 메세지
    $control_txt_err_privay_agree_input = "You do not agree to the privacy policy.";
    $control_txt_err_name_input = "Input your name, please.";
    $control_txt_err_email_input = "Please enter your e-mail.";
    $control_txt_err_phone_input = "Please enter your tel number.";
    $control_txt_err_partname = "Please enter the part name.";
    $control_txt_err_requested_quantity = "Please enter the requested quantity.";
} else if($lang==3){ // 중문
    // 화면 메세지
    $control_txt_name = "姓名";
    $control_txt_email = "电子邮件";
    $control_txt_email_select_a = "直接输入";
    $control_txt_email_select_b = "选择邮件帐户";
    $control_txt_phone = "手机号码";
    $control_txt_company = "公司名称";
    $control_txt_agree = "我接受隐私政策。";
    $control_txt_content = "内容";
    $control_txt_content_sub1 = "(请输入少于100个字符。)";
    $control_txt_privacy = "隐私政策";
    $control_txt_semiconductor_analysis_inquiry = "半导体分析查询";
    $control_txt_mark_required = "Marked as required.";
    $control_txt_tel_first = "按要求标记。";
    $control_txt_tel_middle = "手机号码中间";
    $control_txt_tel_last = "最后的手机号码";
    $control_txt_partname = "零件名称";
    $control_txt_inquiry_content = "请求数量";
    $control_txt_inquiry_content_sub1 = "伪造、变造（正品对比分析）";
    $control_txt_inquiry_content_sub2 = "单项分析";
    $control_txt_inquiry_content_sub3 = "缺陷检查";
    $control_txt_inquiry_content_sub4 = "ETC";
    $control_txt_genuine = "是否有正品";
    $control_txt_yes = "是的";
    $control_txt_no = "不";
    $control_txt_detail = "细节";
    $control_txt_send = "已完成";
    $control_txt_cancel = "消除";

    // script 메세지
    $control_txt_err_privay_agree_input = "您尚未同意隐私政策。";
    $control_txt_err_name_input = "请输入一个名字。";
    $control_txt_err_email_input = "P请输入您的电子邮件。";
    $control_txt_err_phone_input = "请输入联系人。";
    $control_txt_err_partname = "请输入零件名称。";
    $control_txt_err_requested_quantity = "请输入所需数量。";
} else {
    // 화면 메세지
    $control_txt_name = "이름";
    $control_txt_email = "이메일";
    $control_txt_email_select_a = "직접입력";
    $control_txt_email_select_b = "메일계정선택";
    $control_txt_phone = "연락처";
    $control_txt_company = "회사명";
    $control_txt_company_placeholder = "회사명을 입력해주세요.";
    $control_txt_agree = "개인정보처리방침에 동의합니다.";
    $control_txt_content = "문의내용";
    $control_txt_content_sub1 = "(500자 이내로 입력해주세요.)";
    $control_txt_privacy = "개인정보처리방침";
    $control_txt_semiconductor_analysis_inquiry = "반도체 분석 문의";
    $control_txt_mark_required = "표시는 필수 입력 항목입니다.";
    $control_txt_tel_first = "휴대폰번호 처음";
    $control_txt_tel_middle = "휴대폰번호 가운데";
    $control_txt_tel_last = "휴대폰번호 마지막";
    $control_txt_partname = "파트명";
    $control_txt_inquiry_content = "의뢰수량";
    $control_txt_inquiry_content_sub1 = "위변조(정품비교분석)";
    $control_txt_inquiry_content_sub2 = "단품분석";
    $control_txt_inquiry_content_sub3 = "불량확인";
    $control_txt_inquiry_content_sub4 = "기타";
    $control_txt_genuine = "정품보유여부";
    $control_txt_yes = "예";
    $control_txt_no = "아니오";
    $control_txt_detail = "상세내용";
    $control_txt_send = "작성완료";
    $control_txt_cancel = "취소";

    // script 메세지
    $control_txt_err_privay_agree_input = "개인정보처리방침 동의하지 않으셨습니다.";
    $control_txt_err_name_input = "이름을 입력해 주세요.";
    $control_txt_err_email_input = "이메일을 입력해 주세요.";
    $control_txt_err_phone_input = "연락처를 입력해 주세요.";
    $control_txt_err_partname = "파트명을 입력해 주세요.";
    $control_txt_err_requested_quantity = "의뢰수량을 입력해 주세요.";
}
?>
<style>
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"] . $site_directory . "/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<!-- 모달 레이어팝업 -->
				<!-- !NOTE S : 2024-04 추가 -->
				<article class="modal-fixed-pop-wrapper inquiry-popup" style="display: block;">
					<div class="modal-fixed-pop-inner">
						<!-- <div class="modal-loading"><span class="loading"></span></div> -->
						<div class="modal-inner-box">
							<div class="modal-inner-header">
								<p class="modal-title"><?=$control_txt_semiconductor_analysis_inquiry?></p>
								<a href="javascript:;" class="modal-close-btn" title="팝업 닫기"><i class="material-icons">&#xE14C;</i></a>
							</div>
							<div class="modal-inner-content">
								<article class="contact-form inquiry-page">
									<!-- 문의 폼 시작 -->
									<form action="control_popup_ajax.php" name="controlpopform" id="controlpopform" method="post">
                                        <input type="hidden" name="lang" value="<?=$lang?>"/>
										<section class="bbs-write-con">
											<article class="bbs-inquiry-agree-con">
												<p class="agree-tit"><?=$control_txt_privacy?></p>
												<div class="inquiry-agreement-con editor">
													<?
										$page_row = $db->object("cs_page", "where page_index='privacy'");

										$content = $page_row->content;
										$content = str_replace("<p>","",$content);
										$content = str_replace("</p>","<br/>",$content);
										$content = $tools->strHtml($content);
										echo $content;
										?>
												</div>
												<p class="agree-txt">
													<input type="checkbox" id="agree1">
														<label for="agree1"><?=$control_txt_agree?>
													</label>
												</p>
											</article>
											<article class="bbs-write-tbl-box">
												<p class="inquiry-essential-txt"><span class="essential-icon">*</span><?=$control_txt_mark_required?></p>
												<table class="bbs-write-tbl">
													<caption>문의폼입니다.</caption>
													<colgroup>
														<col style="width:25%;">
														<col>
													</colgroup>
													<tbody>
														<tr>
															<th scope="row"><span class="essential-icon">*</span><?=$control_txt_name?></th>
															<td><input type="text" class="write-input" name="name" required="required" maxlength="30"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span><?=$control_txt_email?></th>
															<td>
																<fieldset class="email-fieldset">
																	<input type="text" class="write-input" name="email1" required="required" maxlength="99">
																	<span class="hypen">@</span>
																	<input type="text" class="write-input" name="email2" readonly required="required" maxlength="99">
																	<select name="email3" class="write-select" onChange="controlpop_res();" required="required">
                                                                        <option value="b"><?=$control_txt_email_select_b?></option>
                                                                        <option value="a"><?=$control_txt_email_select_a?></option>
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
															<th scope="row"><span class="essential-icon">*</span><?=$control_txt_phone?></th>
                                                            <input type="hidden" name="phone" value=""/>
															<td>
																<fieldset>
																	<input type="text" class="write-input" name="phone1" title="<?=$control_txt_tel_first?>" maxlength="8" required="required">
																	<span class="hypen">-</span>
																	<input type="text" class="write-input" name="phone2" title="<?=$control_txt_tel_middle?>" maxlength="8" required="required">
																	<span class="hypen">-</span>
																	<input type="text" class="write-input"  name="phone3" title="<?=$control_txt_tel_last?>" maxlength="8" required="required">
																</fieldset>
															</td>
														</tr>
														<tr>
															<th scope="row"> <?=$control_txt_company?></th>
															<td><input type="text" class="write-input width-full" name="company" maxlength="255"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span><?=$control_txt_partname?></th>
															<td><input type="text" class="write-input width-full" name="part" required="required" maxlength="200"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span><?=$control_txt_inquiry_content?></th>
															<td><input type="text" class="write-input" name="request_quantity" required="required"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span><?=$control_txt_content?></th>
															<td>
																<select name="inquiry_content" class="write-select" required="required" style="max-width: 100%">
																	<option value="위변조(정품비교분석)"><?=$control_txt_inquiry_content_sub1?></option>
																	<option value="단품분석"><?=$control_txt_inquiry_content_sub2?></option>
																	<option value="불량확인"><?=$control_txt_inquiry_content_sub3?></option>
																	<option value="기타"><?=$control_txt_inquiry_content_sub4?></option>
																</select>
															</td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span><?=$control_txt_genuine?></th>
															<td>
																<div class="ox-group">
																	<span class="ox">
																		<input type="radio" name="genuine" id="genuine-y" value="Y" checked>
																		<label for="genuine-y"><?=$control_txt_yes?></label>
																	</span>
																	<span class="ox">
																		<input type="radio" name="genuine" id="genuine-n" value="N">
																		<label for="genuine-n"><?=$control_txt_no?></label>
																	</span>
																</div>
															</td>
														</tr>
														<tr>
															<th scope="row"><?=$control_txt_detail?></th>
															<td class="size-full">
																<textarea name="content" class="write-textarea" placeholder="<?=$control_txt_content?> <?=$control_txt_content_sub1?>" maxlength="500"></textarea>
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
												<button type="button" class="button" onClick="controlpop_sendit();"><strong><?=$control_txt_send?></strong></button>
												<a href="javascript:;" onclick="$('.modal-fixed-pop-wrapper').hide();" class="button type-secondary"><strong><?=$control_txt_cancel?></strong></a>
											</div>
										</section>
									</form>
									<!-- // 문의 폼 끝 -->
								</article>
							</div>
						</div>
					</div>
				</article>
				<!-- !NOTE E : 2024-04 추가 -->
<script>
    function controlpop_sendit(){
        var f = document.controlpopform;
        if (f.agree1.checked == false) {
            alert("<?=$control_txt_err_privay_agree_input?>");
            f.agree1.focus();
        } else if (f.name.value == "") {
            alert("<?=$control_txt_err_name_input?>");
            f.name.focus();
        } else if (f.email1.value == "") {
            alert("<?=$control_txt_err_email_input?>");
            f.email1.focus();
        } else if (f.email2.value == "") {
            alert("<?=$control_txt_err_email_input?>");
            f.email2.focus();
        } else if (f.phone1.value == "") {
            alert("<?=$control_txt_err_phone_input?>");
            f.phone1.focus();
        } else if (f.phone2.value == "") {
            alert("<?=$control_txt_err_phone_input?>");
            f.phone2.focus();
        } else if (f.phone3.value == "") {
            alert("<?=$control_txt_err_phone_input?>");
            f.phone3.focus();
        } else if (f.part.value == "") {
            alert("<?=$control_txt_err_partname?>");
            f.part.focus();
        } else if (f.request_quantity.value == "") {
            alert("<?=$control_txt_err_requested_quantity?>");
            f.request_quantity.focus();
        } else {
            f.phone.value = f.phone1.value+'-'+f.phone2.value+'-'+f.phone3.value;

            // 폼 데이터를 수집합니다.
            var formData = $('#controlpopform').serialize();

            // AJAX 요청을 보냅니다.
            $.ajax({
                url: "<?=$returnURL?>/do/ajax_control_popup.php",
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    // 성공적으로 응답을 받았을 때 처리
                    if (response.resultMsg != null) {
                        alert(response.resultMsg);
                    }

                    if (response.result == "success") {
                        location.reload();
                    }
                },
                error: function (xhr, status, error) {
                    // 에러가 발생했을 때 처리
                    console.error('Error:', error);
                }
            });
        }
    }

    function controlpop_res(){
        var f = document.controlpopform;
        if(f.email3.value=="a"){
            f.email2.readOnly= false;
            f.email2.value="";
            f.email2.focus();
        }else if(f.email3.value=="b"){
            f.email2.readOnly= true;
            f.email2.value="";
        }else{
            f.email2.readOnly= true;
            f.email2.value=f.email3.value;
        }
    }
</script>
<? include $_SERVER["DOCUMENT_ROOT"] . $site_directory . "/include/bottom.php"; ?>


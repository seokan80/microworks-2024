<!-- #202405 메인 추가 : 메인 > 문의 -->
<?
    if($lang==2){ // 영문
        // 화면 메세지
        $inquiry_txt_privacy = "privacy policy";
        $inquiry_txt_mark_required = "Marked as required.";
        $inquiry_txt_name = "Name";
        $inquiry_txt_name_placeholder = "Please enter your name.";
        $inquiry_txt_email = "E-mail";
        $inquiry_txt_email_select_a = "Direct input";
        $inquiry_txt_email_select_b = "Select mail account";
        $inquiry_txt_phone = "Tel";
        $inquiry_txt_company = "Company";
        $inquiry_txt_company_placeholder = "Please enter your company name.";
        $inquiry_txt_agree = "I agree with the privacy policy.";
        $inquiry_txt_agree_view = "View Privacy Policy";
        $inquiry_txt_content = "Content";
        $inquiry_txt_content_sub1 = "(No more than 100 characters.)";
        $inquiry_txt_send = "Submit";
        $inquiry_txt_cancel = "cancellation";
        $inquiry_txt_partname = "Part Name";
        $inquiry_txt_partname_placeholder = "Please enter the part name.";
        $inquiry_txt_request_quantity = "Quantity required";
        $inquiry_txt_request_quantity_placeholder = "Please enter the required quantity.";
        $inquiry_txt_quantity_wish_date = "Expected delivery date";
        $inquiry_txt_quantity_wish_date_placeholder = "Please enter your desired delivery date.";
        $inquiry_txt_quantity_goal_price = "Target unit price";
        $inquiry_txt_quantity_goal_price_placeholder = "Please enter the target unit price.";
        $inquiry_txt_detail = "Detail";
        // script 메세지
        $inquiry_txt_err_privay_agree_input = "You do not agree to the privacy policy.";
        $inquiry_txt_err_name_input = "Input your name, please.";
        $inquiry_txt_err_email_input = "Please enter your e-mail.";
        $inquiry_txt_err_phone_input = "Please enter your tel number.";
    } else if($lang==3){ // 중문
        // 화면 메세지
        $inquiry_txt_privacy = "隐私政策";
        $inquiry_txt_mark_required = "Marked as required.";
        $inquiry_txt_name = "姓名";
        $inquiry_txt_name_placeholder = "请输入名字。";
        $inquiry_txt_email = "电子邮件";
        $inquiry_txt_email_select_a = "直接输入";
        $inquiry_txt_email_select_b = "选择邮件帐户";
        $inquiry_txt_phone = "手机号码";
        $inquiry_txt_company = "公司名称";
        $inquiry_txt_company_placeholder = "请输入公司名。";
        $inquiry_txt_agree = "我接受隐私政策。";
        $inquiry_txt_agree_view = "隐私政策";
        $inquiry_txt_content = "内容";
        $inquiry_txt_content_sub1 = "(请输入少于100个字符。)";
        $inquiry_txt_send = "已完成";
        $inquiry_txt_cancel = "消除";
        $inquiry_txt_partname = "零件名称";
        $inquiry_txt_partname_placeholder = "请输入零件名称。";
        $inquiry_txt_request_quantity = "所需数量";
        $inquiry_txt_request_quantity_placeholder = "请输入所需数量。";
        $inquiry_txt_quantity_wish_date = "预计交货日期";
        $inquiry_txt_quantity_wish_date_placeholder = "请输入您想要的交货日期。";
        $inquiry_txt_quantity_goal_price = "目标单价";
        $inquiry_txt_quantity_goal_price_placeholder = "请输入目标单价。";
        $inquiry_txt_detail = "细节";
        // script 메세지
        $inquiry_txt_err_privay_agree_input = "您尚未同意隐私政策。";
        $inquiry_txt_err_name_input = "请输入一个名字。";
        $inquiry_txt_err_email_input = "P请输入您的电子邮件。";
        $inquiry_txt_err_phone_input = "请输入联系人。";
    } else {
        // 화면 메세지
        $inquiry_txt_privacy = "개인정보처리방침";
        $inquiry_txt_mark_required = "표시는 필수 입력 항목입니다.";
        $inquiry_txt_name = "이름";
        $inquiry_txt_name_placeholder = "이름을 입력해주세요.";
        $inquiry_txt_email = "이메일";
        $inquiry_txt_email_select_a = "직접입력";
        $inquiry_txt_email_select_b = "메일계정선택";
        $inquiry_txt_phone = "연락처";
        $inquiry_txt_company = "회사명";
        $inquiry_txt_company_placeholder = "회사명을 입력해주세요.";
        $inquiry_txt_agree = "개인정보처리방침에 동의합니다.";
        $inquiry_txt_agree_view = "개인정보처리방침 보기";
        $inquiry_txt_content = "문의내용";
        $inquiry_txt_content_sub1 = "(500자 이내로 입력해주세요.)";
        $inquiry_txt_send = "작성완료";
        $inquiry_txt_cancel = "취소";
        $inquiry_txt_partname = "부품명";
        $inquiry_txt_partname_placeholder = "부품명을 입력해주세요.";
        $inquiry_txt_request_quantity = "필요수량";
        $inquiry_txt_request_quantity_placeholder = "필요수량을 입력해주세요.";
        $inquiry_txt_quantity_wish_date = "희망납기";
        $inquiry_txt_quantity_wish_date_placeholder = "희망납기를 입력해주세요.";
        $inquiry_txt_quantity_goal_price = "목표단가";
        $inquiry_txt_quantity_goal_price_placeholder = "목표단가를 입력해주세요.";
        $inquiry_txt_detail = "상세";
        // script 메세지
        $inquiry_txt_err_privay_agree_input = "개인정보처리방침 동의하지 않으셨습니다.";
        $inquiry_txt_err_name_input = "이름을 입력해 주세요.";
        $inquiry_txt_err_email_input = "이메일을 입력해 주세요.";
        $inquiry_txt_err_phone_input = "연락처를 입력해 주세요.";
    }

$productNumber = isset($_GET['productNumber']) ? $_GET['productNumber'] : '';
?>
<div class="area">
    <article class="contact-form">
        <!-- 문의 폼 시작 -->
        <form action="<?=$returnURL?>/index/include_inquiry_ok.php" name="inquiryform" id="inquiryform" method="post">
            <input type="hidden" name="lang" value="<?=$lang?>"/>
            <section class="bbs-write-con">
                <article class="bbs-inquiry-agree-con">
                    <p class="agree-tit"><?=$inquiry_txt_privacy?></p>
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
                        <label for="agree1"><?=$inquiry_txt_agree?>
                        </label>
                    </p>
                </article>
                <article class="bbs-write-tbl-box">
                    <p class="inquiry-essential-txt"><span class="essential-icon">*</span><?=$inquiry_txt_mark_required?></p>
                    <table class="bbs-write-tbl">
                        <caption>문의폼입니다.</caption>
                        <colgroup>
                            <col style="width:16%;">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row"><span class="essential-icon">*</span><?=$inquiry_txt_name?></th>
                            <td><input type="text" class="write-input" name="name" required="required" maxlength="30"></td>
                        </tr>
                        <tr>
                            <th scope="row"><span class="essential-icon">*</span><?=$inquiry_txt_email?></th>
                            <td>
                                <fieldset class="email-fieldset">
                                    <input type="text" class="write-input" name="email1" required="required" maxlength="99">
                                    <span class="hypen">@</span>
                                    <input type="text" class="write-input" name="email2" readonly required="required" maxlength="99">
                                    <select name="email3" class="write-select" onChange="inquiry_res();" required="required">
                                        <option value="b"><?=$inquiry_txt_email_select_b?></option>
                                        <option value="a"><?=$inquiry_txt_email_select_a?></option>
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
                            <th scope="row"><span class="essential-icon">*</span><?=$inquiry_txt_phone?></th>
                            <input type="hidden" name="phone" value=""/>
                            <td>
                                <fieldset>
                                    <input type="text" class="write-input" name="phone1" title="<?=$inquiry_txt_tel_first?>" maxlength="8" required="required">
                                    <span class="hypen">-</span>
                                    <input type="text" class="write-input" name="phone2" title="<?=$inquiry_txt_tel_middle?>" maxlength="8" required="required">
                                    <span class="hypen">-</span>
                                    <input type="text" class="write-input"  name="phone3" title="<?=$inquiry_txt_tel_last?>" maxlength="8" required="required">
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> <?=$inquiry_txt_company?></th>
                            <td><input type="text" class="write-input width-full" name="company" maxlength="255"></td>
                        </tr>
                        <tr>
                            <th scope="row"><?=$inquiry_txt_partname?></th>
                            <td><input type="text" class="write-input width-full" name="part_name" maxlength="200" id="part" value="<?=$productNumber?>"></td>
                        </tr>
                        <tr>
                            <th scope="row"><?=$inquiry_txt_request_quantity?></th>
                            <td><input type="text" class="write-input width-full" name="request_quantity" maxlength="100"></td>
                        </tr>
                        <tr>
                            <th scope="row"><?=$inquiry_txt_quantity_wish_date?></th>
                            <td><input type="text" class="write-input width-full" name="wish_date" maxlength="100"></td>
                        </tr>
                        <tr>
                            <th scope="row"><?=$inquiry_txt_quantity_goal_price?></th>
                            <td><input type="text" class="write-input width-full" name="goal_price" maxlength="100"></td>
                        </tr>
                        <tr>
                            <th scope="row"><?=$inquiry_txt_detail?></th>
                            <td>
                                <textarea name="content" class="write-textarea" placeholder="<?=$inquiry_txt_content?> <?=$inquiry_txt_content_sub1?>" maxlength="500"></textarea>
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
                    <button type="button" class="button" onClick="inquiry_sendit();"><strong><?=$inquiry_txt_send?></strong></button>
                    <a href="javascript:void(0);" onclick="inquiry_cancel()" class="button type-secondary"><strong><?=$inquiry_txt_cancel?></strong></a>
                </div>
            </section>
        </form>
        <!-- // 문의 폼 끝 -->
    </article>
</div>
<script type="text/javascript">
    // URL 파라미터를 파싱하여 객체로 반환하는 함수
    // function getUrlParams(p) {
    //     const params = new URLSearchParams(window.location.search);
    //     return params.get(p);
    // }
    //
    // // 페이지 로드 시 URL 파라미터를 콘솔에 출력
    // window.onload = function() {
    //     // 파라미터 값을 HTML 요소에 표시 (선택적)
    //     //document.getElementById('part').value = getUrlParams('part');
    // };
    function inquiry_sendit() {
        var f = document.inquiryform;
        if (f.agree1.checked == false) {
            alert("<?=$inquiry_txt_err_privay_agree_input?>");
            f.agree1.focus();
        } else if (f.name.value == "") {
            alert("<?=$inquiry_txt_err_name_input?>");
            f.name.focus();
        } else if (f.email1.value == "") {
            alert("<?=$inquiry_txt_err_email_input?>");
            f.email1.focus();
        } else if (f.email2.value == "") {
            alert("<?=$inquiry_txt_err_email_input?>");
            f.email2.focus();
        } else if (f.phone1.value == "") {
            alert("<?=$inquiry_txt_err_phone_input?>");
            f.phone1.focus();
        } else if (f.phone2.value == "") {
            alert("<?=$inquiry_txt_err_phone_input?>");
            f.phone2.focus();
        } else if (f.phone3.value == "") {
            alert("<?=$inquiry_txt_err_phone_input?>");
            f.phone3.focus();
        } else {
            f.phone.value = f.phone1.value+'-'+f.phone2.value+'-'+f.phone3.value;

            // 폼 데이터를 수집합니다.
            var formData = $('#inquiryform').serialize();

            // AJAX 요청을 보냅니다.
            $.ajax({
                url: "<?=$returnURL?>/index/ajax_inquiry_ok.php",
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    // 성공적으로 응답을 받았을 때 처리
                    console.log('Success:', response);

                    if(response.result == "success") {
                        location.href = '<?=$_SERVER['PHP_SELF'];?>';
                       // $('#inquiryform')[0].reset();
                       // inquiry_res();
                       // $('.main-textarea-txt').show();
                    }

                    if(response.resultMsg != null) {
                        alert(response.resultMsg);
                    }
                },
                error: function(xhr, status, error) {
                    // 에러가 발생했을 때 처리
                    console.error('Error:', error);
                }
            });
        }
    }


    function inquiry_res(){
        var f = document.inquiryform;
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

    function inquiry_res_phone(num) {
        // 정규 표현식: 숫자 3자리-숫자 4자리-숫자 4자리 패턴을 확인
        const phonePattern = /^\d{3}-\d{4}-\d{4}$/;
        return phonePattern.test(num);
    }


    function inquiry_cancel(){
        // $('#inquiryform')[0].reset();
        // inquiry_res();
        // $('.main-textarea-txt').show();
        location.reload();
    }
</script>



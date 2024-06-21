<!-- #202405 메인 추가 : 메인 > 문의 -->
<?
    if($lang==2){ // 영문
        // 화면 메세지
        $inquiry_txt_inquiry = "Inquiry";
        $inquiry_txt_name = "Name";
        $inquiry_txt_name_placeholder = "Please enter your name.";
        $inquiry_txt_email = "E-mail";
        $inquiry_txt_email_select_a = "Direct input";
        $inquiry_txt_email_select_b = "Select mail account";
        $inquiry_txt_phone = "Tel";
        $inquiry_txt_tel = "Tel";
        $inquiry_txt_company = "Company";
        $inquiry_txt_company_placeholder = "Please enter your company name.";
        $inquiry_txt_agree = "I agree with the privacy policy.";
        $inquiry_txt_agree_view = "View Privacy Policy";
        $inquiry_txt_content = "Content";
        $inquiry_txt_content_sub1 = "(No more than 100 characters.)";
        $inquiry_txt_send = "Submit";
        $inquiry_txt_partname = "Part#";
        $inquiry_txt_partname_placeholder = "Please enter Part#.";
        $inquiry_txt_request_quantity = "Quantity";
        $inquiry_txt_request_quantity_placeholder = "Please enter Quantity.";
        $inquiry_txt_quantity_wish_date = "Request Delivery Date";
        $inquiry_txt_quantity_wish_date_placeholder = "Please enter Request Delivery Date.";
        $inquiry_txt_quantity_goal_price = "Target Price";
        $inquiry_txt_quantity_goal_price_placeholder = "Please enter Target Price.";
        // script 메세지
        $inquiry_txt_err_privay_agree_input = "You do not agree to the privacy policy.";
        $inquiry_txt_err_name_input = "Input your name, please.";
        $inquiry_txt_err_email_input = "Please enter your e-mail.";
        $inquiry_txt_err_phone_input = "Please enter your tel number.";
    } else if($lang==3){ // 중문
        // 화면 메세지
        $inquiry_txt_inquiry = "询问";
        $inquiry_txt_name = "姓名";
        $inquiry_txt_name_placeholder = "请输入名字。";
        $inquiry_txt_email = "电子邮件";
        $inquiry_txt_email_select_a = "直接输入";
        $inquiry_txt_email_select_b = "选择邮件帐户";
        $inquiry_txt_phone = "手机号码";
        $inquiry_txt_tel = "致电询问";
        $inquiry_txt_company = "公司名称";
        $inquiry_txt_company_placeholder = "请输入公司名。";
        $inquiry_txt_agree = "我接受隐私政策。";
        $inquiry_txt_agree_view = "隐私政策";
        $inquiry_txt_content = "内容";
        $inquiry_txt_content_sub1 = "(请输入少于100个字符。)";
        $inquiry_txt_send = "已完成";
        $inquiry_txt_partname = "零件名称";
        $inquiry_txt_partname_placeholder = "请输入零件名称。";
        $inquiry_txt_request_quantity = "所需数量";
        $inquiry_txt_request_quantity_placeholder = "请输入所需数量。";
        $inquiry_txt_quantity_wish_date = "预计交货日期";
        $inquiry_txt_quantity_wish_date_placeholder = "请输入您想要的交货日期。";
        $inquiry_txt_quantity_goal_price = "目标单价";
        $inquiry_txt_quantity_goal_price_placeholder = "请输入目标单价。";
        // script 메세지
        $inquiry_txt_err_privay_agree_input = "您尚未同意隐私政策。";
        $inquiry_txt_err_name_input = "请输入一个名字。";
        $inquiry_txt_err_email_input = "P请输入您的电子邮件。";
        $inquiry_txt_err_phone_input = "请输入联系人。";
    } else {
        // 화면 메세지
        $inquiry_txt_inquiry = "문의";
        $inquiry_txt_name = "이름";
        $inquiry_txt_name_placeholder = "이름을 입력해주세요.";
        $inquiry_txt_email = "이메일";
        $inquiry_txt_email_select_a = "직접입력";
        $inquiry_txt_email_select_b = "메일계정선택";
        $inquiry_txt_phone = "연락처";
        $inquiry_txt_tel = "문의전화";
        $inquiry_txt_company = "회사명";
        $inquiry_txt_company_placeholder = "회사명을 입력해주세요.";
        $inquiry_txt_agree = "개인정보처리방침에 동의합니다.";
        $inquiry_txt_agree_view = "개인정보처리방침 보기";
        $inquiry_txt_content = "문의내용";
        $inquiry_txt_content_sub1 = "(500자 이내로 입력해주세요.)";
        $inquiry_txt_send = "작성완료";
        $inquiry_txt_partname = "부품명";
        $inquiry_txt_partname_placeholder = "부품명을 입력해주세요.";
        $inquiry_txt_request_quantity = "필요수량";
        $inquiry_txt_request_quantity_placeholder = "필요수량을 입력해주세요.";
        $inquiry_txt_quantity_wish_date = "희망납기";
        $inquiry_txt_quantity_wish_date_placeholder = "희망납기를 입력해주세요.";
        $inquiry_txt_quantity_goal_price = "목표단가";
        $inquiry_txt_quantity_goal_price_placeholder = "목표단가를 입력해주세요.";
        // script 메세지
        $inquiry_txt_err_privay_agree_input = "개인정보처리방침 동의하지 않으셨습니다.";
        $inquiry_txt_err_name_input = "이름을 입력해 주세요.";
        $inquiry_txt_err_email_input = "이메일을 입력해 주세요.";
        $inquiry_txt_err_phone_input = "연락처를 입력해 주세요.";
    }
?>

<div class="area02 fade-in-down fade-in-03">
    <form action="<?=$returnURL?>/index/include_inquiry_ok.php" name="inquiryform" id="inquiryform" method="post">
        <input type="hidden" name="return_url" value="<?=$site_url?>"/>
        <input type="hidden" name="lang" value="<?=$lang?>"/>
        <h5 class="text-white"><?=$inquiry_txt_inquiry?></h5>
        <div class="main-inquiry">
            <div class="inquiry-wrapper">
                <div class="forms required">
                    <i class="material-icons">&#xe0e1;</i>
                    <label for="name"><?=$inquiry_txt_name?></label>
                    <input type="text" id="name" placeholder="<?=$inquiry_txt_name_placeholder?>" name="name" required="required" maxlength="30">
                </div>
                <div class="forms required">
                    <i class="material-icons">&#xe0e1;</i>
                    <label for="user-email"><?=$inquiry_txt_email?></label>
                    <fieldset class="email-fieldset">
                        <input type="text" class="write-input" name="email1" required="required">
                        <span class="hypen">@</span>
                        <input type="text" class="write-input" name="email2" readonly required="required">
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
                </div>
                <div class="forms required">
                    <i class="material-icons">&#xe551;</i>
                    <label for="user-contact"><?=$inquiry_txt_phone?></label>
                    <input type="text" id="phone" placeholder="ex)010-1234-5678" name="phone" required="required" maxlength="30"/>
                </div>
                <div class="forms">
                    <i class="material-icons">&#xe8f8;</i>
                    <label for="company"><?=$inquiry_txt_company?></label>
                    <input type="text" id="company" placeholder="<?=$inquiry_txt_company_placeholder?>" name="company">
                </div>
                <?

                ?>
                <div class="extra-info">
                    <div class="form-group">
                        <div class="forms">
                            <label for="part_name"><?=$inquiry_txt_partname?></label>
                            <input type="text" id="part_name" placeholder="<?=$inquiry_txt_partname_placeholder?>" name="part_name" maxlength="200">
                        </div>
                        <div class="forms">
                            <label for="request_quantity"><?=$inquiry_txt_request_quantity?></label>
                            <input type="text" id="request_quantity" placeholder="<?=$inquiry_txt_request_quantity_placeholder?>" name="request_quantity" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="forms">
                            <label for="wish_date"><?=$inquiry_txt_quantity_wish_date?></label>
                            <input type="text" id="wish_date" placeholder="<?=$inquiry_txt_quantity_wish_date_placeholder?>" name="wish_date" maxlength="100">
                        </div>
                        <div class="forms">
                            <label for="goal_price"><?=$inquiry_txt_quantity_goal_price?></label>
                            <input type="text" id="goal_price" placeholder="<?=$inquiry_txt_quantity_goal_price_placeholder?>" name="goal_price" maxlength="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="agreement-wrapper">
                <div class="split-container align-center">
										<span class="ox">
											<input type="checkbox" id="agree1">
											<label for="agree1"><i class="material-icons">&#xe876;</i><?=$inquiry_txt_agree?></label>
										</span>
                    <a href="javascript:;" onclick="javascript:layerLoad('<?=$site_url?>/service/privacy.php'); return false;"
                       class="button type-line size-sm"><strong><?=$inquiry_txt_agree_view?></strong></a>
                </div>
                <div class="text-area">
                    <textarea name="content" class="main-textarea" onchange="$('.main-textarea-txt').hide();"></textarea>
                    <p class="main-textarea-txt"><i class="material-icons">&#xe0b7</i><strong><?=$inquiry_txt_content?></strong> <span><?=$inquiry_txt_content_sub1?></span></p>
                </div>
                <dl class="contact">
                    <dt>* CONTACT:</dt>
                    <dd><?=$inquiry_txt_email?> <a href="mailto:info@microworks.co.kr">info@microworks.co.kr</a></dd>
                    <dd><?=$inquiry_txt_tel?> <a href="tel:02-6112-7328">02-6112-7328</a></dd>
                </dl>
                <a href="javascript:;" onClick="inquiry_sendit();"
                   class="button size-xl type-line fluid main-form-btn"><?=$inquiry_txt_send?></a>
            </div>
        </div>
    </form>
    <script type="text/javascript">
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
            } else if (f.phone.value == "") {
                alert("<?=$inquiry_txt_err_phone_input?>");
                f.phone.focus();
            } else {
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
                           $('#inquiryform')[0].reset();
                           inquiry_res();
                           $('.main-textarea-txt').show();
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
    </script>
</div>



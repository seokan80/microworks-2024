<?
$page_num = "05";
$sub_num = "05";
$page_section = "contact";
$sub_section = "inquiry";
$page_info = "联系方式";
$sub_info = "询价";
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
				<article class="inquiry-page">
					<div class="area">
						<article class="contact-form">
							<!-- 문의 폼 시작 -->
							<form action="./inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">
								<section class="bbs-write-con">
									<article class="bbs-inquiry-agree-con">
										<h3 class="agree-tit">隐私政策</h3>
										<div class="inquiry-agreement-con editor">
										<?
										$page_row = $db->object("cs_page", "where page_index='privacy_cn'");

										$content = $page_row->content;
										$content = str_replace("<p>","",$content);
										$content = str_replace("</p>","<br/>",$content);
										$content = $tools->strHtml($content);
										echo $content;
										?>
										</div>
										<p class="agree-txt">
											<input type="checkbox" id="agree1">
												<label for="agree1">我接受隐私政策。
											</label>
										</p>
									</article>
									<article class="bbs-write-tbl-box">
										<p class="inquiry-essential-txt"><span class="essential-icon">*</span>表示必填项</p>
										<table class="bbs-write-tbl">
											<caption>문의폼입니다.</caption>
											<colgroup>
												<col style="width:20%;">
												<col>
											</colgroup>
											<tbody>
												<tr>
													<th scope="row"><span class="essential-icon">*</span> 名</th>
													<td><input type="text" class="write-input" name="name"></td>
												</tr>
												<tr>
													<th scope="row">电子邮件</th>
													<td>
														<fieldset class="email-fieldset">
															<input type="text" class="write-input width20" name="email1">
															<span class="hypen">@</span>
															<input type="text" class="write-input width20" name="email2" readonly>
															<select name="email3" class="write-select width20" onChange="res();">
																<option value="b">选择邮件帐户</option>
																<option value="a">直接输入</option>
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
													<th scope="row"><span class="essential-icon">*</span> 手机号码</th>
													<td class="tel-row">
														<input type="text" class="write-input" style="max-width:150px;" name="phone1" title="휴대폰번호 처음" maxlength="8">
														<span class="hypen">-</span>
														<input type="text" class="write-input" style="max-width:150px;" name="phone2" title="휴대폰번호 가운데" maxlength="8">
														<span class="hypen">-</span>
														<input type="text" class="write-input" style="max-width:150px;"  name="phone3" title="휴대폰번호 마지막" maxlength="8">
													</td>
												</tr>
												<tr>
													<th scope="row"> 公司名称</th>
													<td><input type="text" class="write-input" name="company"></td>
												</tr>
												<tr>
													<th scope="row">内容</th>
													<td>
														<textarea name="content" class="write-textarea"></textarea>
													</td>
												</tr>
											</tbody>
										</table>
									</article>
									<!--  
										기본 : 센터정렬 / 좌측정렬 : cm-btn-align-left / 우측정렬 : cm-btn-align-right / 100% 버튼 : cm-btn-long-controls
									-->
									<div class="cm-btn-controls">
										<button type="button" class="btn-style01" onClick="sendit();">已完成</button>
										<a href="/" class="btn-style02">取消</a>
									</div>
								</section>
							</form>
							<!-- // 문의 폼 끝 -->
						</article>
					</div>
				</article>
				<!-- //컨텐츠 내용 -->
<script type="text/javascript">
<!--
function sendit() {
	var f=document.form;
	if(f.agree1.checked==false){
		alert("您尚未同意隐私政策。");
		f.agree1.focus();
	}else if(f.name.value=="") {
		alert("请输入一个名字。");
		f.name.focus();
	} else if(f.phone1.value=="") {
		alert("请输入联系人。");
		f.phone1.focus();
	} else if(f.phone2.value=="") {
		alert("请输入联系人。");
		f.phone2.focus();
	} else if(f.phone3.value=="") {
		alert("请输入联系人。");
		f.phone3.focus();
	} else {
		f.submit();
	}
}

function res(){
	var f = document.form;
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
//-->
</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

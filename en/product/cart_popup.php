<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>
<style>
/* css */

</style>
<script>
/* js */
function customScrollY (scrollObject) {
	$(scrollObject).mCustomScrollbar({
		axis:"y",
		theme:"dark"
	});
}

$(document).ready(function  () {
		customScrollY ('.cart-list-data');
	});

</script>
<script type="text/javascript" src="/js/layer_popup.js"></script>

<section id="cartPop" class="footer-modal-content">
	<a href="#none" class="modal-close-btn" title="레이어팝업 닫기"><i class="xi-close-thin"></i></a>
	<div class="cart-pop-inner">
		<h4 class="cart-pop-tit">RFQ</h4>
		<div class="car-pop-con">
			<div class="car-pop-con-inner">
				<div class="inquiry-form-con">
					<article class="contact-form">

<!-- 문의 폼 시작 -->
<form action="./inquiry_ok.php" name="form_2" method="post" enctype="multipart/form-data">

							<section class="bbs-write-con">
										<article class="bbs-inquiry-agree-con">
											<h3 class="agree-tit">Privacy Policy</h3>
											<div class="inquiry-agreement-con editor">
											<?
											$page_row = $db->object("cs_page", "where page_index='privacy'");

											$content = $page_row->content;
											$content = $tools->strHtml($content);

											echo $content;
											?>											
											</div>
											<p class="agree-txt">
												<input type="checkbox" id="agree1" name="agree1">
													<label for="agree1">I agree with the privacy policy.
												</label>
											</p>
										</article>
										<article class="bbs-write-tbl-box">
											<p class="inquiry-essential-txt">Marking<span class="essential-icon">*</span> is mandatory.</p>
											<table class="bbs-write-tbl">
												<caption>문의폼입니다.</caption>
												<colgroup>
													<col style="width:20%;">
													<col>
												</colgroup>
												<tbody>
													<tr>
														<th scope="row"><span class="essential-icon">*</span> Name</th>
														<td><input type="text" class="write-input" name="name"></td>
													</tr>
													<tr>
														<th scope="row">E-mail</th>
														<td>
															<fieldset class="email-fieldset">
																<input type="text" class="write-input width20" name="email1">
																<span class="hypen">@</span>
																<input type="text" class="write-input width20" name="email2" readonly>
																<select name="email3" class="write-select width20" onChange="res();">
																	<option value="b">Select mail account</option>
																	<option value="a">Direct input</option>
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
														<th scope="row"><span class="essential-icon">*</span> TEL</th>
														<td class="tel-row">
															<input type="text" class="write-input" style="max-width:150px;" name="phone1" title=" " maxlength="8">
															<span class="hypen">-</span>
															<input type="text" class="write-input" style="max-width:150px;" name="phone2" title=" " maxlength="8">
															<span class="hypen">-</span>
															<input type="text" class="write-input" style="max-width:150px;"  name="phone3" title=" " maxlength="8">
														</td>
													</tr>
													<tr>
														<th scope="row"> Company Name</th>
														<td><input type="text" class="write-input" name="company"></td>
													</tr>
													<tr>
														<th scope="row">Content</th>
														<td>
															<textarea name="content" class="write-textarea"></textarea>
														</td>
													</tr>
												</tbody>
											</table>
										</article>
							</section>
							<!-- cart list -->
							<div class="cart-list-con">
								<div class="cart-list-wrap">
									<input type="checkbox" id="allCheck">
									<div class="cart-list-subject clearfix">
										<span style="width:15%">No</span>
										<span style="width:65%">Part #</span>
										<span style="width:20%">Quantity</span>
									</div>
									<div class="cart-list-data">
										<ul class="data-list" id="d_list">

										</ul>
									</div>
								</div>
								<a href="#none" class="cart-delete-btn ajax-checkbox" data-table="cs_cart" data-name="delete" data-val="">Delete</a>
							</div>

							<div class="cm-btn-controls">
								<button type="button" class="btn-style01" onClick="sendit();">Submit</button>
								<a href="/" class="btn-style02">Cancel</a>
							</div>

						</form>
						<!-- // 문의 폼 끝 -->

<script type="text/javascript">
<!--
function fLoadData(divID,strUrl){
	$.ajax({
		type: "POST",
		url: strUrl,
		data: "",
		success: function(resultText){
			$(divID).html(resultText);
		},
		error: function() {
			//alert("호출에 실패했습니다.");
		}
	});
}


function test(){
	fLoadData("#d_list","cart_list.php");
}

test();


$(function() {

	$(".ajax-checkbox").click(function() {

		var checkboxVal = [];
		$("input[name='check_list']:checked").each(function(i) {
			checkboxVal.push($(this).val());
		});

		var table	= $(this).attr("data-table");
		var idx		= checkboxVal;
		var name	= $(this).attr("data-name");
		var val		= $(this).attr("data-val");

		var postData = 
			{ 
				"table": table,
				"idx": idx,
				"name": name,
				"val": val
			};

		if(name=="delete"){var msg = "";}
	
		if(  $("input:checkbox[name='check_list']").is(":checked") ){
			ans = confirm("Are you sure you want to delete it?");
			if(ans==true){		
			$.ajax({
				url : "checkbox.php",
				type: "post",
				data: postData,
				success:function(obj){ 
					test();
				}
			});
			}
		}else{
			alert("Please select a product.");
		}
	
	});//.ajax-checkbox



});

 $(function(){
     //전체선택 체크박스 클릭
  $("#allCheck").click(function(){
   //만약 전체 선택 체크박스가 체크된상태일경우
   if($("#allCheck").prop("checked")) {
    //해당화면에 전체 checkbox들을 체크해준다
    $("input[id=chk_list]").prop("checked",true);
   // 전체선택 체크박스가 해제된 경우
   } else {
    //해당화면에 모든 checkbox들의 체크를해제시킨다.
    $("input[id=chk_list]").prop("checked",false);
   }
  })
 })

function sendit() {
	var f=document.form_2;
	if(f.agree1.checked==false){
		alert("Please agree to the privacy policy.");
		f.agree1.focus();
	}else if(f.name.value=="") {
		alert("Please enter your name.");
		f.name.focus();
	} else if(f.phone1.value=="") {
		alert("Please enter your Phone number.");
		f.phone1.focus();
	} else if(f.phone2.value=="") {
		alert("Please enter your Phone number.");
		f.phone2.focus();
	} else if(f.phone3.value=="") {
		alert("Please enter your Phone number.");
		f.phone3.focus();
	} else {
		f.submit();
	}
}

function res(){
	var f = document.form_2;
	if(f.email3.value=="a"){
	f.email2.readOnly= false;
	f.email2.value="";
	f.email2.focus();
	}else if(f.email3.value=="b"){
	f.email2.readOnly= false;
	f.email2.value="";
	}else{
	f.email2.readOnly= false;
	f.email2.value=f.email3.value;
	}
}
-->
</script>

					</article>
				</div>
			</div>
		</div>
	</div>
</section>
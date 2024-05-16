<?
$page_num = "04";

$page_section = "industrial";
$sub_section = "industrial";
$page_info = "特许经营店";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";

if($part1_idx==""){ $part1_idx = 1; }
$row = $db->object("cs_part","where idx='$part1_idx'");

$sub_num = "0".$part1_idx;

$sub_info = $row->part_name;

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

<?
$part1_idx = $tools->filter($part1_idx);
$row = $db->object("cs_part","where idx='$part1_idx'");
$bottom_img = $row->bbs_file3;
?>

	<article class="industrial-content area">
		<article class="industrial-top">
			<span class="logo"><img src="/data/bbsData/<?=$row->bbs_file?>" alt="" /></span>
			<span class="banner-img"><img src="/data/bbsData/<?=$row->bbs_file2?>" alt="" /></span>
		</article>

		<article class="industrial-prd">
			
			<?
			$part1_code = $row->part1_code;
			$rs = $db->select("cs_part","where part_display_check='1' and part1_code='$part1_code' and part_index='2' order by part_ranking asc, idx asc");
			while($row = mysql_fetch_object($rs)){
			?>
			
			<div class="industrial-prd-con">
				<h3 class="tit"><?=$row->part_name?></h3>
				
				<?
				$part2_code = $row->part2_code;
				$rs2cnt = $db->cnt("cs_part","where part_display_check='1' and part1_code='$part1_code' and part2_code='$part2_code' and part_index='3'");
				if($rs2cnt>0){
				$rs2 = $db->select("cs_part","where part_display_check='1' and part1_code='$part1_code' and part2_code='$part2_code' and part_index='3' order by part_ranking asc, idx asc");
				while($row2 = mysql_fetch_object($rs2)){
				?>
				
				<div class="prd-sub-con">
					<strong class="sub-tit"><?=$row2->part_name?></strong>
					<ul class="prd-list clearfix">
						<?
						$part_idx = $row2->idx;
						$rsg = $db->select("cs_goods","where display='1' and part_idx='$part_idx' order by ranking asc, idx asc");
						while($rowg = mysql_fetch_object($rsg)){
						?>
						<li>
							<div class="inner">
								<span class="prd-img"><img src="/data/goodsImages/<?=$rowg->images1?>" alt="" /></span>
							</div>
						</li>
						<? } ?>
					</ul>
				</div>

				<? } ?>

				<? } else { ?>


				<div class="prd-sub-con">
					<ul class="prd-list clearfix">
						<?
						$part_idx = $row->idx;
						$rsg = $db->select("cs_goods","where display='1' and part_idx='$part_idx' order by ranking asc, idx asc");
						while($rowg = mysql_fetch_object($rsg)){
						?>
						<li>
							<div class="inner">
								<span class="prd-img"><img src="/data/goodsImages/<?=$rowg->images1?>" alt="" /></span>
							</div>
						</li>
						<? } ?>
					</ul>
				</div>

				<? } ?>

				
			</div>

			<? } ?>


			
		</article>

		<!-- !NOTE S : 2024-04 추가 -->
		<article class="product-page inquiry-page">
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
													<col style="width:16%;">
													<col>
												</colgroup>
												<tbody>
													<tr>
														<th scope="row"><span class="essential-icon">*</span>名</th>
														<td><input type="text" class="write-input" name="name" required="required"></td>
													</tr>
													<tr>
														<th scope="row"><span class="essential-icon">*</span>电子邮件</th>
														<td>
															<fieldset class="email-fieldset">
																<input type="text" class="write-input" name="email1" required="required">
																<span class="hypen">@</span>
																<input type="text" class="write-input" name="email2" readonly required="required">
																<select name="email3" class="write-select" onChange="res();" required="required">
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
														<th scope="row"><span class="essential-icon">*</span>手机号码</th>
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
														<th scope="row">公司名称</th>
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
														<th scope="row">内容</th>
														<td>
															<textarea name="content" class="write-textarea"></textarea>
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
											<button type="button" class="button" onClick="sendit();"><strong>已完成</strong></button>
											<a href="/" class="button type-secondary"><strong>取消</strong></a>
										</div>
									</section>
								</form>
								<!-- // 문의 폼 끝 -->
							</article>
						</div>
					</article>
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
				<!-- !NOTE E : 2024-04 추가 -->

	</article>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
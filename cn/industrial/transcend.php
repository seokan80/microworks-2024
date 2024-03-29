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

		<article class="industrial-inquiry">
			<? if($bottom_img){ ?>
			<div class="inquiry-banner">
				<span class="banner-img"><img src="/data/bbsData/<?=$bottom_img?>" alt="" /></span>
			</div>
			<? } ?>
			<article class="inquiry-page">
						<article class="contact-form">
							<!-- 문의 폼 시작 -->

<form action="./inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">

								<section class="bbs-write-con">
									<article class="bbs-inquiry-agree-con">
										<h3 class="agree-tit">Privacy Policy</h3>
										<div class="inquiry-agreement-con editor">
										<?
										$page_row = $db->object("cs_page", "where page_index='privacy_en'");

										$content = $page_row->content;
										$content = str_replace("<p>","",$content);
										$content = str_replace("</p>","<br/>",$content);
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
									<!--  
										기본 : 센터정렬 / 좌측정렬 : cm-btn-align-left / 우측정렬 : cm-btn-align-right / 100% 버튼 : cm-btn-long-controls
									-->
									<div class="cm-btn-controls">
										<button type="button" class="btn-style01" onClick="sendit();">Submit</button>
										<a href="/" class="btn-style02">Cancel</a>
									</div>
								</section>

</form>

<script type="text/javascript">
<!--
function sendit() {
	var f=document.form;
	if(f.agree1.checked==false){
		alert("개인정보 처리방침에 동의해 주세요.");
		f.agree1.focus();
	}else if(f.name.value=="") {
		alert("이름을 입력해 주세요.");
		f.name.focus();
	} else if(f.phone1.value=="") {
		alert("휴대폰번호를 입력해 주세요.");
		f.phone1.focus();
	} else if(f.phone2.value=="") {
		alert("휴대폰번호를 입력해 주세요.");
		f.phone2.focus();
	} else if(f.phone3.value=="") {
		alert("휴대폰번호를 입력해 주세요.");
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
	f.email2.readOnly= false;
	f.email2.value="";
	}else{
	f.email2.readOnly= false;
	f.email2.value=f.email3.value;
	}
}
//-->
</script>

							<!-- // 문의 폼 끝 -->
						</article>
			</article>
		</article>

	</article>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
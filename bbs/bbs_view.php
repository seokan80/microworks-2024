<?
if($_GET[idx]){
	$idx = $tools->filter($_GET[idx]);
}
if($_GET[bgu]){
	$bgu = $tools->filter($_GET[bgu]);
}
if($_POST[pwd]){
	$pwd = $tools->filter($_POST[pwd]);
}
if($_POST[bbs_view_secr]){
	$bbs_view_secr = $tools->filter($_POST[bbs_view_secr]);
}
if($lang==1){
	$title_no = "번호";
	$title_subject = "제목";
	$title_date = "등록일";
	$title_notice = "공지사항";
	$title_notice_head = "공지";
	$title_name = "작성자";
	$title_total = "TOTAL";
	$title_ea = "개";
	$title_view = "조회수";
	$title_content = "내용";
	$title_search = "검색어를 입력해주세요.";
	$title_no_list = "작성된 글이 없습니다.";
	$button_list = "목록";
	$title_wrong = "잘못된 접근입니다.";
	$title_login = "회원 전용입니다.로그인을 해주세요";
	$title_passx = "패스워드가 올바르지 않습니다.";
	$title_no_file = "첨부파일이 없습니다.";
	$title_file = "첨부파일";
	$title_delq = "게시글을 삭제하시겠습니까?";
	$title_edit = "수정";
	$title_del = "삭제";
	$title_list = "목록";
	$title_write = "글쓰기";

	$title_secret = "비밀글 설정";
	$title_pwd = "비밀번호";
	$title_pwd_cap = "글수정 및 삭제 시 필요합니다. 꼭! 기억해주세요.";
	$title_cap = '<span class="essential-icon">*</span> 표시는 필수 입력 항목입니다.';
	$title_pu = "공개";
	$title_pri = "비공개";
	$title_submit = "등록";
	$title_cancel = "취소";
	$title_req_1 = "제목을 입력해 주세요.";
	$title_req_2 = "작성자를 입력해 주세요.";
	$title_req_3 = "비밀번호를 입력해 주세요.";
	$title_req_4 = "내용을 입력해 주세요.";
	$title_err = "작성에 실패하였습니다.";
	$title_complete = "등록되었습니다.";

	$title_pass_msg = "해당글은 비밀글입니다. <br><b>글 작성 시 입력하신 비밀번호</b>를 입력해주세요.";
	$title_pwd_insert = "비밀번호 입력";
	$title_ok = "확인";
	$title_req_5 = "비밀번호를 입력해 주세요.";

	$title_state = "상태";
	$title_wait = "접수";
	$title_comp = "답변완료";
}else if($lang==2){
	$title_no = "No";
	$title_subject = "Subject";
	$title_date = "Date";
	$title_notice = "Notice";
	$title_notice_head = "Notice";
	$title_name = "Name";
	$title_total = "TOTAL";
	$title_ea = "EA";
	$title_view = "View";
	$title_content = "Content";
	$title_search = "Please enter your search term.";
	$title_no_list = "There is no written comment.";
	$button_list = "List";
	$title_wrong = "The wrong approach.";
	$title_login = "Members only.Please log in.";
	$title_passx = "The password is incorrect.";
	$title_no_file = "No attachments found.";
	$title_file = "Attach";
	$title_delq = "Are you sure you want to delete this post?";
	$title_edit = "Edit";
	$title_del = "Delete";
	$title_list = "List";
	$title_write = "Write";

	$title_secret = "Secret setting";
	$title_pwd = "password";
	$title_pwd_cap = "This is required when modifying or deleting posts. exactly! Please remember.";
	$title_cap = '<span class="essential-icon">*</span> Is a required field.';
	$title_pu = "Public";
	$title_pri = "Private";
	$title_submit = "Submit";
	$title_cancel = "Cancel";
	$title_req_1 = "Please enter the subject.";
	$title_req_2 = "Please enter the author.";
	$title_req_3 = "Please enter a password.";
	$title_req_4 = "Please enter your details.";
	$title_err = "Creation failed.";
	$title_complete = "Registered.";

	$title_pass_msg = "This article is a secret.<br><b>Please enter the password you entered when writing </b>.";
	$title_pwd_insert = "Enter Password";
	$title_ok = "Confirm";
	$title_req_5 = "Please enter a password.";

	$title_state = "State";
	$title_wait = "Receipt";
	$title_comp = "Answer completed";
}else if($lang==3){
	$title_no = "数";
	$title_subject = "主题";
	$title_date = "注册日期";
	$title_notice = "通知";
	$title_notice_head = "公告";
	$title_name = "作者";
	$title_total = "TOTAL";
	$title_ea = "数";
	$title_view = "查看";
	$title_content = "内容";
	$title_search = "请输入您的搜索字词。";
	$title_no_list = "没有书面评论。";
	$button_list = "名单";
	$title_wrong = "错误的做法。";
	$title_login = "仅限会员。请登录。";
	$title_passx = "密码不正确。";
	$title_no_file = "找不到附件。";
	$title_file = "附件";
	$title_delq = "您确定要删除此帖吗？";
	$title_edit = "水晶";
	$title_del = "删除";
	$title_list = "名单";
	$title_write = "写作";

	$title_secret = "秘密设置";
	$title_pwd = "密码";
	$title_pwd_cap = "修改或删除帖子时需要这样做。通过一切手段！ 请记住。";
	$title_cap = '<span class="essential-icon">*</span> 是必填字段。';
	$title_pu = "发布";
	$title_pri = "私人";
	$title_submit = "注册";
	$title_cancel = "取消";
	$title_req_1 = "제목을 입력해 주세요.";
	$title_req_2 = "请输入作者。";
	$title_req_3 = "请输入您的密码。";
	$title_req_4 = "请输入您的内容。";
	$title_err = "创作失败了。";
	$title_complete = "它已被注册。";

	$title_pass_msg = "这篇文章是个秘密。 <br>请输入您在写作时输入的密码。";
	$title_pwd_insert = "输入密码";
	$title_ok = "确认";
	$title_req_5 = "请输入您的密码。";
}else if($lang==4){
	$title_no = "番号";
	$title_subject = "タイトル";
	$title_date = "登録日";
	$title_notice = "お知らせ";
	$title_notice_head = "お知らせ";
	$title_name = "投稿者";
	$title_total = "TOTAL";
	$title_ea = "本";
	$title_view = "ヒット";
	$title_content = "内容";
	$title_search = "検索用語を入力してください。";
	$title_no_list = "作成された文がありません。";
	$button_list = "リスト";
	$title_wrong = "不適切なアプローチです。";
	$title_login = "会員専用です。ログインをしてください";
	$title_passx = "パスワードが正しくありません。";
	$title_no_file = "添付ファイルがありません。";
	$title_file = "添付ファイル";
	$title_delq = "スレッドを削除しますか?";
	$title_edit = "修正";
	$title_del = "削除";
	$title_list = "リスト";
	$title_write = "書き込み";

	$title_secret = "非公開文の設定";
	$title_pwd = "パスワード";
	$title_pwd_cap = "記事の修正や削除時に必要です。是非！記憶ください。";
	$title_cap = '<span class="essential-icon">*</span> 印は必須入力項目です。';
	$title_pu = "公開";
	$title_pri = "プライベート";
	$title_submit = "登録";
	$title_cancel = "キャンセル";
	$title_req_1 = "タイトルを入力してください。";
	$title_req_2 = "作成者を入力してください。";
	$title_req_3 = "パスワードを入力してください。";
	$title_req_4 = "内容を入力してください。";
	$title_err = "作成に失敗しました。";
	$title_complete = "登録されてい.";

	$title_pass_msg = "この記事は非公開文です。<br><b>記事作成時に入力されたパスワード</b>を入力してください。";
	$title_pwd_insert = "パスワード入力";
	$title_ok = "確認";
	$title_req_5 = "パスワードを入力してください。";
}
//게시판환경
$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_pds, header, footer, bbs_secret");
//게시판정보
$bbs_stat	= $db->object("cs_bbs_data", "where code='$code' and idx='$idx'");
if(!$bbs_stat->idx) { $tools->errMsg($title_wrong);}

// 수정 정보 체크
if( $bbs_view_secr ) {

	$pwd = $tools->openssl($pwd);

	if($bbs_stat->re_level >=1){

		$query="select * from cs_bbs_data where code='$code' and ref='$bbs_stat->ref' and re_level=0 order by idx asc";
		$rs = mysql_query($query);
		$row = mysql_fetch_array($rs);

		if( $bbs_stat->pwd  != $pwd) {
			if($row[pwd]!= $pwd){
				$tools->errMsg($title_passx);
			}
		}

	} else {

		if( $bbs_stat->pwd  != $pwd) {
			$tools->errMsg($title_passx);
		}

	}
}else{
	//비밀글체크
	if($bbs_stat->secret=="y"){
		if($_SESSION['USERID'] && $_SESSION['USERID']==$bbs_stat->userid){
			//pass
		}else{
			if($bbs_stat->pwd != $pwd){
				$tools->errMsg($title_passx);
			}
		}
	}
}


	$db->update("cs_bbs_data", "read_cnt=read_cnt+1 where idx='$idx'");
	$bbs_stat			= $db->object("cs_bbs_data", "where idx='$idx'");
	$bbs_admin_stat	= $db->object("cs_bbs", "where code='$bbs_stat->code'");

	// 게시판 접근 권한 설정
	if( $bbs_admin_stat->bbs_read == 1 ) {
		if( !$_SESSION['LEVEL'] ) { $tools->errMsg($title_login);}
	}

	$name			= $bbs_stat->name;
	$email			= $bbs_stat->email;
	$reg_date		= $tools->strDateCut($bbs_stat->reg_date, 3);
	$subject		= $bbs_stat->subject;
	$read_cnt		= $bbs_stat->read_cnt;

	// 내용 출력 방식

	if($bbs_admin_stat->editor==1){
		$content = $bbs_stat->content;
		$content = str_replace("<P>","",$content);
		$content = str_replace("</P>","<br/>",$content);
		$content = str_replace("<p>","",$content);
		$content = str_replace("</p>","<br/>",$content);
		$content = $tools->strHtml($content);
	} else {
		$content = nl2br($tools->strHtmlNoBr($bbs_stat->content));
	}
	$this_cate = $db->object("cs_cate","where idx='$bbs_stat->cate' and code='$bbs_stat->code' ");
?>
<article class="bbs-view-con">
	<aside class="bbs-view-top">
		<!-- 필요할 경우만 삽입 -->
		<!-- <dl class="event-date"><dt><i class="material-icons">&#xE878;</i> 이벤트기간</dt><dd>2017-07-14 ~ 2017-07-31</dd></dl> -->
		<!-- <p class="reply-state"><span>답변대기</span></p><p class="reply-state reply-state-finish"><span>답변완료</span></p> -->
		<?if($this_cate->idx){?>
			<?if($lang==1){?>
				<span class="bbs-category">[<?=$this_cate->name?>]</span>
			<?}else if($lang==2){?>
				<span class="bbs-category">[<?=$this_cate->name_en?>]</span>
			<?}else if($lang==3){?>
				<span class="bbs-category">[<?=$this_cate->name_ch?>]</span>
			<?}?>
		<?}?>
		<!-- // -->
		<h1 class="bbs-tit"><?=$db->stripSlash($subject);?></h1>
		<dl class="bbs-write-info">
			<dt><?=$title_name?></dt>
			<dd><?=$name?></dd>
			<dt><?=$title_date?></dt>
			<dd><?=$reg_date?></dd>
			<dt><?=$title_view?></dt>
			<dd><?=number_format($read_cnt)?></dd>
		</dl>
	</aside>
	<div class="bbs-view-content editor">
		<?=$content;?>
	</div>
	<?
	if( $bbs_admin_stat->bbs_pds)  {
	?>
	<aside class="bbs-view-file-info-box">
		<?
		for($i=1;$i<=$bbs_admin_stat->bbs_pds_ea;$i++){
			if($i==1){ $bbsf = $bbs_stat->sbbs_file;}
			if($i==2){ $bbsf = $bbs_stat->sbbs_file2;}
			if($i==3){ $bbsf = $bbs_stat->sbbs_file3;}
			if($i==4){ $bbsf = $bbs_stat->sbbs_file4;}
			if($i==5){ $bbsf = $bbs_stat->sbbs_file5;}
		?>
		<dl class="bbs-file-list">
			<dt>
				<?=$title_file?>
				<?if($bbs_admin_stat->bbs_pds_ea>1){
					echo " #".$i;
				}?>
			</dt>
			<dd>
				<?if($bbsf){?>
					<a href="<?=$site_host?>/bbs/bbs_download.php?idx=<?=$bbs_stat->idx?>&download=<?=$i?>">
						<?=$bbsf?>
					</a>
				<?}else{?>
					<?=$title_no_file?>
				<?}?>
			</dd>
		</dl>

		<?}?>
	</aside>
	<?
	}
	?>

	<form method="post" action="" name="form2">
	<input type="hidden" name="code" value="<?=$code;?>">
	<input type="hidden" name="bbs_view_del" value="1">
	<input type="hidden" name="bbs_view_edit" value="1">
	<input type="hidden" name="returnURL" value="<?=$_SERVER['PHP_SELF']?>">
	</form>

	<div class="cm-btn-controls">
		<? if($bbs_admin_stat->bbs_write!=9) {?>
		<div class="left-btn-controls">
			<? if($_SESSION['USERID']){ ?>
				<? if($_SESSION['USERID']==$bbs_stat->userid){ ?>
					<button type="button" class="btn-style02" onClick="modi();">
						<?=$title_edit?>
					</button>
					<button type="button" class="btn-style03" onClick="dele();">
						<?=$title_del?>
					</button>
				<?}?>
			<? } else { ?>
				<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($returnURL);?>&bgu=pass&bbs_view_edit=1&idx=<?=$bbs_stat->idx;?>" class="btn-style02">
					<?=$title_edit?>
				</a>
				<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($returnURL);?>&bgu=pass&bbs_view_del=1&idx=<?=$bbs_stat->idx;?>" class="btn-style03">
					<?=$title_del?>
				</a>
			<? } ?>
		</div>
		<?}?>
		<div class="right-btn-controls">
			<a href="<?echo $returnURL? $returnURL:$_SERVER['PHP_SELF']?>" class="btn-style01">
				<?=$title_list?>
			</a>
		</div>
	</div>

	<? 
	//코멘트
	if($bbs_admin_stat->bbs_coment){ 
		include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_coment.php";
	}
	?>

<script type="text/javascript">
<!--
function dele(){
	ans = confirm("게시글을 삭제하시겠습니까?");
	if (ans==true)
	{
		form2.action = "/bbs/bbs_view_del.php?returnURL=<?=urlencode($returnURL);?>&idx=<?=$idx;?>";
		form2.submit();
	}

}
function modi(){
	form2.action = "<?=$_SERVER[PHP_SELF]?>?returnURL=<?=urlencode($returnURL);?>&bgu=edit&idx=<?=$idx;?>";
	form2.submit();
}
//-->
</script>


</article>
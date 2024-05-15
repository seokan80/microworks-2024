<?
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";

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
	$title_category = "전체보기";

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

	$title_broad = "보도언론사";
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
	$title_search = "";
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
	$title_category = "View all";

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

	$title_broad = "Press";
}else if($lang==3){
	$title_no = "数";
	$title_subject = "主题";
	$title_date = "注册日期";
	$title_notice = "通知";
	$title_notice_head = "公告";
	$title_name = "作者";
	$title_total = "TOTAL";
	$title_ea = "";
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
	$title_category = "查看全部";

	$title_secret = "秘密设置";
	$title_pwd = "密码";
	$title_pwd_cap = "修改或删除帖子时需要这样做。通过一切手段！ 请记住。";
	$title_cap = '<span class="essential-icon">*</span> 是必填字段。';
	$title_pu = "发布";
	$title_pri = "私人";
	$title_submit = "注册";
	$title_cancel = "取消";
	$title_req_1 = "请输入题目。";
	$title_req_2 = "请输入作者。";
	$title_req_3 = "请输入您的密码。";
	$title_req_4 = "请输入您的内容。";
	$title_err = "创作失败了。";
	$title_complete = "它已被注册。";

	$title_pass_msg = "这篇文章是个秘密。 <br>请输入您在写作时输入的密码。";
	$title_pwd_insert = "输入密码";
	$title_ok = "确认";
	$title_req_5 = "请输入您的密码。";

	$title_broad = "按下按";
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

	$title_broad = "プレス報道機関";
}

if($_GET[cate])					{$cate				=	$tools->filter($_GET[cate]);}
if($_GET[startPage])			{$startPage		=	$tools->filter($_GET[startPage]);}
if($_GET[search_item])		{$search_item	=	$tools->filter($_GET[search_item]);}
if($_GET[search_order])	{$search_order	=	$tools->filter($_GET[search_order]);}

$bbs_admin_stat		=	$db->object("cs_bbs", "where code='$code'");
if(!$bbs_admin_stat->idx) { $tools->errMsg($title_wrong);}
// 게시판 접근 권한 설정
if( $bbs_admin_stat->bbs_access == 1 ) {
	if( !$_SESSION[LEVEL] ) { $tools->errMsg($title_login);}
}
?>
<script type="text/javascript">
$(document).ready(function  () {
	$(".faq-list-con .faq-item > dt").click(function  () {
		var $faqCon = $(this).siblings();
		
		if ($faqCon.css("display") == "block") {
			$(this).siblings().slideUp();
			$(".faq-item").removeClass("open");
			
		}else {
			$(".faq-item > dd:visible").slideUp();
			$(".faq-item").removeClass("open");
			$(this).parent("dl").addClass("open");
			$faqCon.slideDown();	
		}
	});
});
</script>
<!-----------------------------------------------------  게시판 리스트 시작 ------------------------------------------------------------------------------------------------------------------------------------->
<? if( $bbs_admin_stat->bbs_type==1 || $bbs_admin_stat->bbs_type==2) {?>

<?
	$table				= "cs_bbs_data";
	// 리스트갯수
	$listScale			=	10;
	// 페이지 갯수
	$pageScale		=	$bbs_admin_stat->list_page;
	// 스타트 페이지
	if( !$startPage ) { $startPage = 0; }
	// 토탈페이지
	$totalPage = floor($startPage / ($listScale * $pageScale));
	
	// 쿼리문 
	$query = "select * from $table where code='$code' and notice < 1 and lang='$lang' ";
    // #202405 공지사항 추가
    if($code == 'notice') {
        $query.= " and CURDATE() between period_start_date and period_end_date ";
    }

		if($cate){$query.=" and cate='$cate'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}

	$rs = mysql_query($query);
	$totalList = mysql_num_rows($rs);

	$query = "select * from $table where code='$code' and notice < 1 and lang='$lang' ";
	// #202405 공지사항 추가
	if($code == 'notice') {
	    $query.= " and CURDATE() between period_start_date and period_end_date ";
	}
		if($cate){$query.=" and cate='$cate'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}
	$query.="  order by ref desc, re_step ASC LIMIT $startPage, $listScale";
	$result = mysql_query($query);
	$rsc = $db->select("cs_cate","where code='$code' order by idx asc");
	// 페이지넘버
	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>
<!-- 답변형/공지사항형 시작 -->
<article class="bbs-list-con">
	<div class="notice-top-box clearfix">
		<p class="total-list-con">TOTAL : <b><?=$totalList?></b> <?=$title_ea?></p>
		<? if($code=="blog"){ } else { ?>
		<div class="top-search-box">
			<select name="cate" id="topSearchCategory"  onchange="location.href='<?=$_SERVER['PHP_SELF']?>?cate='+this.value;">
				<option value=""><?=$title_category?></option>
				<?while($rsc_row = mysql_fetch_array($rsc)){?>
					<option value="<?=$rsc_row[idx]?>" <?if($cate==$rsc_row[idx]){echo "selected";}?>>
						<?if($lang==1){?>
							<?=$rsc_row[name]?>
						<?}else if($lang==2){?>
							<?=$rsc_row[name_en]?>
						<?}else if($lang==3){?>
							<?=$rsc_row[name_ch]?>
						<?}?>
					</option>
				<?}?>
			</select>
		</div>
		<? } ?>
	</div>
	<div class="bbs-list-tbl">
		<p class="bbs-list-head">
			<span style="width:7%;"><?=$title_no?></span>
			<span style="width:59%;"><?=$title_subject?></span>
			<span style="width:12%;"><?=$title_name?></span>
			<span style="width:12%;"><?=$title_date?></span>
			<span style="width:10%;"><?=$title_view?></span>
		</p>
		<?
		$table = "cs_bbs_data";
		$query = "where code='$code' and notice > 0 and lang='$lang'";
		if($code == 'notice') { // #202405 공지사항 추가
            $query.= " and CURDATE() between period_start_date and period_end_date";
        }
        $query.= " order by idx desc";
		$notice_result		= $db->select( $table, $query);
		while( $bbs_row = mysql_fetch_object($notice_result) ) {
			$new_check		=		$bbs_admin_stat->new_check;
			$subject			=		$tools->strCut_utf($db->stripSlash($bbs_row->subject), 150);
			$name				=		$bbs_row->name;
			$read_cnt			=		$bbs_row->read_cnt;
			$reg_date			=		$tools->strDateCut( $bbs_row->reg_date,3);
			$coment_cnt	=		$db->cnt("cs_bbs_coment", "where link=$bbs_row->idx");
			$this_cate = $db->object("cs_cate","where idx='$bbs_row->cate' and code='$bbs_row->code' ");
			if( $new_check ) { $new_img =	$page->bbsNewImg( $bbs_row->reg_date, $bbs_admin_stat->new_mark, '<span class="new-icon">N</span>'); }	
		?>
	   <div class="bbs-list-row notice-row">
			<div class="column bbs-block" data-label="<?=$title_no?>"><span class="notice-tit"><?=$title_notice_head?></span></div>
			<div class="column bbs-title">
				<a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
					<div class="bbs-subject-con">
						<strong class="bbs-subject-txt">
							<?if($this_cate->idx){?>
								<?if($lang==1){?>
									<span class="category">[<?=$this_cate->name?>]</span>
								<?}else if($lang==2){?>
									<span class="category">[<?=$this_cate->name_en?>]</span>
								<?}else if($lang==3){?>
									<span class="category">[<?=$this_cate->name_ch?>]</span>
								<?}?>
							<?}?>
							<?=$db->stripSlash($subject);?>
						</strong>
						<div class="bbs-subject-icons">
							<?=$new_img?>
							<?if($bbs_row->sbbs_file || $bbs_row->sbbs_file2 || $bbs_row->sbbs_file3 || $bbs_row->sbbs_file4 || $bbs_row->sbbs_file5){?>
							<span class="bbs-icons" title="파일첨부"><i class="material-icons">&#xE149;</i></span>
							<?}?>
							<!-- <span class="bbs-icons" title="비밀글"><i class="material-icons">&#xE897;</i></span> -->
						</div>
					</div>
				</a>
			</div>
			<div class="column bbs-inline" data-label="<?=$title_name?>"><?=$name?></div>
			<div class="column bbs-inline" data-label="<?=$title_date?>"><?=$reg_date?></div>
			<div class="column bbs-inline" data-label="<?=$title_view?>"><?=number_format($read_cnt)?></div>
	   </div>
		<?}?>
	<!-- 공지사항 -->

	<!-- bbs loop start -->
	<?
	while($bbs_row = mysql_fetch_object($result)) {
		$new_check			=		$bbs_admin_stat->new_check;
		$subject				=		$tools->strCut_utf($bbs_row->subject, 150);
		$name					=		$bbs_row->name;
		$read_cnt				=		$bbs_row->read_cnt;
		$reg_date				=		$tools->strDateCut( $bbs_row->reg_date,3 );
		$coment_cnt		=		$db->cnt("cs_bbs_coment", "where link=$bbs_row->idx");

		//new IMG
		if( $new_check ) {	$new_img			=		$page->bbsNewImg( $bbs_row->reg_date, $bbs_admin_stat->new_mark, '<span class="new-icon">N</span>' ); }
		// 답변 re image view
		if($bbs_row->re_level > 0) { $wid = 7 * $bbs_row->re_level; $level_img='<span class="reply-icon">└ RE</span> '; } else { $level_img="";}
		$this_cate = $db->object("cs_cate","where idx='$bbs_row->cate' and code='$bbs_row->code' ");
		?>
		<div class="bbs-list-row">
			<div class="column bbs-no-data"><?if($level_img){echo "&nbsp;";}else{echo $listNo;}?></div>
			<div class="column bbs-title">
				<? if($_SESSION['USERID']){ ?>
					<? if($_SESSION['USERID']==$bbs_row->userid){ ?>
						<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&bgu=view&idx=<?=$bbs_row->idx;?>">
					<? } else { ?>
						<? if($bbs_row->secret=="y"){ ?>	
							<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&bgu=pass&bbs_view_secr=1&idx=<?=$bbs_row->idx;?>">
						<? } else { ?>
							<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&bgu=view&idx=<?=$bbs_row->idx;?>">
						<? } ?>
					<? } ?>
				<? } else { ?>
					<? if($bbs_row->secret=="y"){ ?>
						<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&bgu=pass&bbs_view_secr=1&idx=<?=$bbs_row->idx;?>">
					<? } else { ?>
						<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&bgu=view&idx=<?=$bbs_row->idx;?>">
					<? } ?>
				<? } ?>
					<div class="bbs-subject-con">
						<strong class="bbs-subject-txt">
							<?if($this_cate->idx){?>
								<?if($lang==1){?>
									<span class="category">[<?=$this_cate->name?>]</span>
								<?}else if($lang==2){?>
									<span class="category">[<?=$this_cate->name_en?>]</span>
								<?}else if($lang==3){?>
									<span class="category">[<?=$this_cate->name_ch?>]</span>
								<?}?>
							<?}?>
							<?=$level_img?><?=$db->stripSlash($subject);?>
						</strong>
						<div class="bbs-subject-icons">
							<?=$new_img?>
							<?if($bbs_row->sbbs_file || $bbs_row->sbbs_file2 || $bbs_row->sbbs_file3 || $bbs_row->sbbs_file4 || $bbs_row->sbbs_file5){?>
							<span class="bbs-icons" title="파일첨부"><i class="material-icons">&#xE149;</i></span>
							<?}?>
							<?if($bbs_row->secret=="y"){?>
							<span class="bbs-icons" title="비밀글"><i class="material-icons">&#xE897;</i></span>
							<?}?>
						</div>
					</div>
				</a>
			</div>
			<div class="column bbs-inline" data-label="<?=$title_name?>"><?=$name?></div>
			<div class="column bbs-inline" data-label="<?=$title_date?>"><?=$reg_date?></div>
			<div class="column bbs-inline" data-label="<?=$title_view?>"><?=number_format($read_cnt)?></div>
	   </div>
		<? 
		$listNo--;
		}
		?>
	</div>

	<!-- bbs loop end -->
	<?$count = $db->cnt($table,"where code='$code' and lang='$lang' ")?>
	<?if(empty($totalList)){?>
		<p class="bbs-no-list"><?=$title_no_list?></p>
	<?}?>

<!-- 답변형/공지사항형 종료 -->

<?} else if($bbs_admin_stat->bbs_type==3) {?>
<!-- 갤러리형 시작 -->
<?
	$table				= "cs_bbs_data";
	// 리스트갯수
	$listScale			=	$bbs_admin_stat->list_height;
	// 페이지 갯수
	$pageScale		=	$bbs_admin_stat->list_page;
	// 스타트 페이지
	if( !$startPage ) { $startPage = 0; }
	// 토탈페이지
	$totalPage = floor($startPage / ($listScale * $pageScale));

	// 쿼리문 
	$query = "select * from $table where code='$code' and lang='$lang' ";
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}
	if($cate){
		$query.=" and cate='$cate'";
	}
	$rs = mysql_query($query);
	$totalList = mysql_num_rows($rs);

	$query = "select * from $table where code='$code' and lang='$lang' ";
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}
	if($cate){
		$query.=" and cate='$cate'";
	}
	$query.="  order by ref desc, re_step ASC LIMIT $startPage, $listScale";
	$result = mysql_query($query);
	// 페이지넘버
	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
	
	switch($bbs_admin_stat->skin){
		
		case 1:
			include $_SERVER['DOCUMENT_ROOT']."/bbs/skin/gallery/01.php";
		break;

		case 2:
			include $_SERVER['DOCUMENT_ROOT']."/bbs/skin/gallery/02.php";
		break;

		case 3:
			include $_SERVER['DOCUMENT_ROOT']."/bbs/skin/gallery/03.php";
		break;

		case 4:
			include $_SERVER['DOCUMENT_ROOT']."/bbs/skin/gallery/04.php";
		break;

		default:
			include $_SERVER['DOCUMENT_ROOT']."/bbs/skin/gallery/01.php";
		break;

	}

?>
<!-- 갤러리형 종료 -->

<?} else if($bbs_admin_stat->bbs_type==4) {?>

<!-- FAQ형 시작 -->
	<?
	$table				= "cs_bbs_data";
	// 리스트갯수
	$listScale			=  10;
	// 페이지 갯수
	$pageScale		=	$bbs_admin_stat->list_page;
	// 스타트 페이지
	if( !$startPage ) { $startPage = 0; }
	// 토탈페이지
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query = "select * from $table where code='$code' and lang='$lang' ";
	if($cate){$query.=" and cate='$cate'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}

	$rs = mysql_query($query);
	$totalList = mysql_num_rows($rs);

	$query = "select * from $table where code='$code' and lang='$lang' ";
	if($cate){$query.=" and cate='$cate'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}

	$query.="  order by ref desc, re_step ASC LIMIT $startPage, $listScale";
	$result = mysql_query($query);

	// 페이지넘버
	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>
<article class="bbs-faq-list">

	<?if($bbs_admin_stat->bbs_cate==1){?>
	<article class="bbs-faq-list">
		<div class="top-search-box">
			<select name="cate" id="topSearchCategory" onchange="location.href='<?=$_SERVER['PHP_SELF']?>?cate='+this.value;">
				<option value="">전체</option>
				<?
				$rsc = $db->select("cs_cate","where code='$code' order by idx asc");
				while($rowc = mysql_fetch_array($rsc)){
				?>
				<option value="<?=$rowc[idx]?>" <?if($cate==$rowc[idx]){echo "selected";}?>><?=$rowc[name]?></option>
				<?}?>
			</select>
		</div>
	</article>
	<?}?>

	<article class="faq-list-con<?if($bbs_admin_stat->bbs_cate==1){?> faq-category-list-con<?}?>" style="display:<?if(empty($totalList)){?>none<?}?>;">
	<?
	// 루프 시작
	while( $bbs_row = mysql_fetch_object($result)) {
		
		$subject			=		$tools->strCut_utf($bbs_row->subject, 120);
		$name				=		$bbs_row->name;
		$read_cnt			=		$bbs_row->read_cnt;
		$reg_date			=		$tools->strDateCut( $bbs_row->reg_date, 3);

		/*카테고리 노출*/
		if($bbs_admin_stat->bbs_cate==1){	$cate_row = $db->object("cs_cate", "where idx='$bbs_row->cate'");	}

		$content = $bbs_row->content;
		$content = str_replace("<P>","",$content);
		$content = str_replace("</P>","<br>",$content);
		$content = str_replace("<p>","",$content);
		$content = str_replace("</p>","<br>",$content);
		?>
		<dl class="faq-item">
			<dt>
				<div class="faq-subject">
					<span class="question-icon">Q</span>
					<?if($bbs_admin_stat->bbs_cate==1){?>
					<span class="faq-category">[<?=$cate_row->name?>]</span>
					<?}?>
					<strong class="faq-title"><?=$db->stripSlash($subject);?></strong>
					<span class="arrow"><i class="material-icons">&#xE313;</i></span>
				</div>
			</dt>
			<dd>
				<span class="answer-icon">A</span>
				<div class="answer-con">
					<?
					if($bbs_admin_stat->editor==1){
					?>
					<div class="editor"><!-- 에디터로 들어갈 경우 -->
						<?=$content;?>
					</div>
					<?}else{?>
					<div class="answer-txt-con"><!-- 일반 텍스트로 들어갈 경우 -->
						<?=$content;?>
					</div>
					<?
					}
					?>
				</div>
			</dd>
		</dl>
		<? 
		$listNo--;
		}
		?>
	</article>
	<?$count = $db->cnt($table,"where code='$code' and lang='$lang' ")?>
	<?if(empty($totalList)){?>
		<p class="bbs-no-list"><?=$title_no_list?></p>
	<?}?>
</article>
<!-- FAQ형 종료 -->
<?}?>

	<? if($bbs_admin_stat->bbs_write!=9) {?>
	<div class="cm-btn-controls">
		<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&bgu=write" class="btn-style01">
			<?=$title_write?>
		</a>
	</div>
	<? } ?>
				  
	<div class="paging">
		<? $page->bbs($totalPage, $totalList, $listScale, $pageScale, $startPage,$search_item,$search_order,$cate);?>
	</div>

	<? if($bbs_admin_stat->bbs_type!=4) {?>
		<form name="bbs_search_form" method="get" action="<?=$_SERVER['PHP_SELF'];?>">
			<div class="board-search-box">
				<select name="search_item">
					<option value="subject" <?if($search_item=="subject"){echo "selected";}?>><?=$title_subject?></option>
					<option value="content" <?if($search_item=="content"){echo "selected";}?>><?=$title_content?></option>
					<option value="name" <?if($search_item=="name"){echo "selected";}?>><?=$title_name?></option>
				</select>
				<input placeholder="<?=$title_search?>" type="search" name="search_order" class="search-word" value="<?=$search_order?>">
				<button type="submit" class="bbs-search-btn" title="검색"><i class="material-icons">&#xE8B6;</i></button>
			</div>
		</form>
	<?}?>

</article>

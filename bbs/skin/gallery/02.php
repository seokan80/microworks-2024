<article class="bbs-basic-gallery-con02">
	<ul class="gallery-list">
		<?
		$no=0;
		// 루프 시작
		while( $bbs_row = mysql_fetch_object($result)) {
			$subject			=		$tools->strCut_utf($bbs_row->subject, 100);
			$name				=		$bbs_row->name;
			$read_cnt			=		$bbs_row->read_cnt;
			$reg_date			=		$tools->strDateCut( $bbs_row->reg_date, 3);
			$content			=		strip_tags($bbs_row->content);

			$no++;
		?>
        <li class="gal-list-item">
			<?if($code=="profile"){?>
				<?if(!empty($bbs_row->bbs_file)){?>
		            <a href="<?=$site_host?>/data/bbsData/<?=$bbs_row->bbs_file?>" target="_blank">
				<?}?>
			<?}else{?>
	            <a href="<?=$_SERVER['PHP_SELF']?>?idx=<?=$bbs_row->idx;?>&bgu=view">
			<?}?>
                <span class="gal-thum"><img src="<?=$site_host?>/data/bbsData/<?=$bbs_row->sum_file?>" alt=""></span>
                <div class="over-thum"><span>VIEW</span></div>
            </a>
            <strong class="gal-tit"><?=$db->stripSlash($subject);?></strong>
            <div class="gal-info">
                <span class="gal-writer"><i class="material-icons"></i> <?=$name?></span><span class="gal-date"> <i class="material-icons"></i> <?=$reg_date?></span>
            </div>
        </li>
		<?
		if($no==$bbs_admin_stat->list_width){$no=0;}
		}
		?>
	</ul>
	<?if(empty($totalList)){?>
		<p class="bbs-no-list"><?=$title_no_list?></p>
	<?}?>
</article>
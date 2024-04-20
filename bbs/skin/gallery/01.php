	<div class="bbs-basic-gallery-con10">
		<aside class="bbs-top-list-box clearfix">
			<p class="total-list-con">TOTAL : <b><?=$totalList?></b> </p>
			<?  // if($bbs_admin_stat->bbs_cate==1){?>
			<div class="top-search-box">
				<select name="cate" id="topSearchCategory" onchange="location.href='<?=$_SERVER['PHP_SELF']?>?cate='+this.value;">
					<option value=""><?=$title_category?></option>
					<?
					$rsc = $db->select("cs_cate","where code='$code' order by idx asc");
					while($rowc = mysql_fetch_array($rsc)){
					?>
					<option value="<?=$rowc[idx]?>" <?if($cate==$rowc[idx]){echo "selected";}?>>
						<?if($lang==1){?>
							<?=$rowc[name]?>
						<?}else if($lang==2){?>
							<?=$rowc[name_en]?>
						<?}else if($lang==3){?>
							<?=$rowc[name_ch]?>
						<?}?>
					</option>
					<?}?>
				</select>
			</div>
			<? // }?>
		</aside>
		<ul class="clearfix">
			<?
			$no=0;
			while( $bbs_row = mysql_fetch_object($result)) {
			$no++;
				$subject = $tools->strCut_utf($bbs_row->subject, 100);
				$name = $bbs_row->name;
				$read_cnt = $bbs_row->read_cnt;
				$reg_date = $tools->strDateCut( $bbs_row->reg_date, 8);
				$content = strip_tags($bbs_row->content);
				$this_cate = $db->object("cs_cate","where idx='$bbs_row->cate'");
				if($bbs_row->code=="media"&&$bbs_row->link_url!=""){
					$video = $bbs_row->link_url;
					$video = str_replace("https://www.youtube.com/watch?v=","",$video);
					$video = str_replace("https://youtu.be/","",$video);
				}
			?>
			<li class="gallery-over-list-item">
				<?if($code=="media"){?>
					<?if($video!=""){?>
						<a href="javascript:;" onclick="javascript:layerLoad('<?=$site_url?>/media/media_popup.php?video=<?=$video?>'); return false;">
					<?}else{?>
						<a href="javascript:;">
					<?}?>
				<?}else{?>
					<a href="<?=$_SERVER['PHP_SELF']?>?idx=<?=$bbs_row->idx;?>&bgu=view">
				<?}?>
					<div class="gallery-img-box">
						<span class="img-wrap">
							<?if($bbs_row->code=="media"&&$bbs_row->link_url!=""&&$bbs_row->sum_file==""){?>
								<img src="https://img.youtube.com/vi/<?=$video?>/hqdefault.jpg" >
							<?}else{?>
								<img src="<?=$site_host?>/data/bbsData/<?=$bbs_row->sum_file?>" alt="">
							<?}?>
						</span>
						<span class="category">
							<?if($lang==1){?>
								<?=$this_cate->name?>
							<?}else if($lang==2){?>
								<?=$this_cate->name_en?>
							<?}else if($lang==3){?>
								<?=$this_cate->name_ch?>
							<?}?>
						</span>
						<div class="broad-bg"><span></span></div>
						<div class="gallery-btn">
							<span><i class="material-icons"></i></span>
						</div>
					</div>
					<div class="gallery-info">
						<h3 class="gallery-info-tit"><?=$db->stripSlash($subject);?></h3>
						<p><?=$content?></p>
						<span class="gallery-date"><?=$reg_date?></span>
					</div>
				</a>
			</li>
			<?
			if($no==$bbs_admin_stat->list_width){$no=0;}
			}
			?>
		 </ul>
		<?if(empty($totalList)){?>
			<p class="bbs-no-list"><?=$title_no_list?></p>
		<?}?>
	</div>
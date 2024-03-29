								<?
								$rsc = $db->select("cs_part","where part_display_check='1' and part_index='1' order by part_ranking asc, idx asc");
								while($rowc = mysql_fetch_object($rsc)){
								?>
								<li><a href="<?=$site_url?>/industrial/transcend.php?part1_idx=<?=$rowc->idx?>"><span><em><?=$rowc->part_name?></em></span></a></li>
								<? } ?>
								<!-- <li><a href="<?=$site_url?>/industrial/transcend.php" onclick="javascript:alert('준비 중 입니다.'); return false;"><span><em>Transcend</em></span></a></li>
								<li><a href="<?=$site_url?>/industrial/goodram.php" onclick="javascript:alert('준비 중 입니다.'); return false;"><span><em>Goodram</em></span></a></li>
								<li><a href="<?=$site_url?>/industrial/nexcopy.php" onclick="javascript:alert('준비 중 입니다.'); return false;"><span><em>Nexcopy</em></span></a></li>
								<li><a href="<?=$site_url?>/industrial/advantech.php" onclick="javascript:alert('준비 중 입니다.'); return false;"><span><em>Advantech</em></span></a></li>
								<li><a href="<?=$site_url?>/industrial/etc.php" onclick="javascript:alert('준비 중 입니다.'); return false;"><span><em>Etc.</em></span></a></li> -->
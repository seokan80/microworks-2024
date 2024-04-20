<?
//메인 접속정보및 팝업 소스 S//
$db->insert("cs_connect", "ip='$_SERVER[REMOTE_ADDR]', url='$_SERVER[HTTP_REFERER]', register=now()");
//POPUP 창 설정
$popup_result = $db->select("cs_popup", "where kind=2");
$now_time=time();
$left = 80;
while($popup_row=@mysql_fetch_object($popup_result)){?>
	<?if($popup_row->kind==2) {?>
		<?if( $_COOKIE['maindiv'.$popup_row->idx] != 'done' ) {
			if($popup_row->start_day <=$now_time && $popup_row->end_day >= $now_time) {
				$popup_row->height=$popup_row->height+24;?>
				<!-- 모바일팝업 시작-->
				<script language="JavaScript">
				function setcookie<?=$popup_row->idx?>( name, value, expirehours ) {
					var todayDate = new Date();
					todayDate.setHours( todayDate.getHours() + expirehours );
					//alert(todayDate.toGMTString());
					document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
				}

				function closeWin<?=$popup_row->idx?>() {
					<? if($popup_row->live==0) {?>
						setcookie<?=$popup_row->idx?>( "maindiv<?=$popup_row->idx?>", "done" , 24 );
					<?} else if($popup_row->live==1) {?>
						setcookie<?=$popup_row->idx?>( "maindiv<?=$popup_row->idx?>", "done" , 8760 );
					<?}?>	
					$("#mobilePopupCon<?=$popup_row->idx?>").fadeOut();
				}
				function mobilePopClose (i) {
					var id = "#mobilePopupCon"+i;
					$(id).fadeOut();
				}
				</script>
				<div id="divpop<?=$popup_row->idx?>">
					<!--  -->
					<section id="mobilePopupCon<?=$popup_row->idx?>">
						<article class="mobile-fixed-pop-wrapper">
							<div class="mobile-fixed-pop-inner">
								<div class="mobile-fixed-pop-inner-box">
									<div class="mobile-fixed-img-con">
										<span class="mobile-popup-img">
											<? if($popup_row->link_url) {?>
												<a href="http://<?=$popup_row->link_url;?>" target="_blank">
													<img src="<?=$site_host?>/data/designImages/<?=$popup_row->popup_images;?>" alt="" />
												</a>
											<?} else {?>
												<img src="/data/designImages/<?=$popup_row->popup_images;?>" alt="" />
											<?}?>
										</span><!-- 권장사이즈 640 x 680 비율 -->
										<div class="mobile-popup-btn-controls">
											<button type="button" class="today-close-btn" onclick="closeWin<?=$popup_row->idx?>();">
												<? if($popup_row->live==0) {?>오늘 하루 열지 않음<?} else if($popup_row->live==1) {?>다시 열지 않음<?}?>
											</button>
											<button onclick="javascript:mobilePopClose(<?=$popup_row->idx?>);">
												닫기
											</button>
										</div>
									</div>
								</div>
							</div>
						</article>
					</section>
					<!--  -->
				</div>
				<script language="Javascript">
				cookiedata = document.cookie;  
				if ( cookiedata.indexOf("maindiv<?=$popup_row->idx?>=done") < 0 ){    
					document.all['divpop<?=$popup_row->idx?>'].style.visibility = "visible";
				}else {
					document.all['divpop<?=$popup_row->idx?>'].style.visibility = "hidden";
				}
				</script>
				<?$left = $left + $popup_row->width;
			}
		}?>
	<?}
}//메인 접속정보및 팝업 소스 E//?>
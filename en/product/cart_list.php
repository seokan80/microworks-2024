<? session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";
?>
											
											<?
											$i=1;
											$rs = $db->select("cs_cart","where code='$_SESSION[CART]' order by idx asc");
											while($row = mysql_fetch_object($rs)){
											?>
											<li>
												<input type="checkbox" name="check_list" id="chk_list" value="<? echo $row->idx ?>">
												<div class="data-wrap clearfix">
													<span><?=$i?></span>
													<span><?=$row->goods_name?></span>
													<span><input type="text" style="width:150px;text-align:center;" name="ea<?=$row->idx?>" value="1"></span>
												</div>
											</li>
											<? $i++; } ?>
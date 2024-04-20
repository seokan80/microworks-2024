<div class="SNBWrap">
	<h3>Company</h3>
    <ul class="menu">
        <? if ($sg == "1"){?><li class="snb_on"><a href="/kor/company/about.php">회사소개</a></li><? } else { ?><li class="snb_off" onmouseover="this.className='snb_on'" onmouseout="this.className='snb_off'"><a href="/kor/company/about.php">회사소개</a></li><? } ?>
        <? if ($sg == "2"){?><li class="snb_on"><a href="/kor/company/greeting.php">CEO 인사말</a></li><? } else { ?><li class="snb_off" onmouseover="this.className='snb_on'" onmouseout="this.className='snb_off'"><a href="/kor/company/greeting.php">CEO 인사말</a></li><? } ?>
        <? if ($sg == "3"){?><li class="snb_on"><a href="/kor/company/organization.php">조직도</a></li><? } else { ?><li class="snb_off" onmouseover="this.className='snb_on'" onmouseout="this.className='snb_off'"><a href="/kor/company/organization.php">조직도</a></li><? } ?>
        <? if ($sg == "4"){?><li class="snb_on"><a href="/kor/company/milestone.php">연혁</a></li><? } else { ?><li class="snb_off" onmouseover="this.className='snb_on'" onmouseout="this.className='snb_off'"><a href="/kor/company/milestone.php">연혁</a></li><? } ?>      
          <? if ($sg == "5"){?><li class="snb_on"><a href="/kor/company/partners.php">파트너</a></li><? } else { ?><li class="snb_off" onmouseover="this.className='snb_on'" onmouseout="this.className='snb_off'"><a href="/kor/company/partners.php">파트너</a></li><? } ?>      
    </ul>
    <!-- <? include "banner.php"; ?> -->
</div>

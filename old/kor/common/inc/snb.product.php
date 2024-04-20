<div class="SNBWrap">
	<h3>Product</h3>
    <ul class="menu">
        <? if ($sg == "1"){?><li class="snb_on"><a href="/kor/product/distributor.php">대리점라인</a></li><? } else { ?><li class="snb_off" onmouseover="this.className='snb_on'" onmouseout="this.className='snb_off'"><a href="/kor/product/distributor.php">대리점라인</a></li><? } ?>
        <? if ($sg == "2"){?><li class="snb_on"><a href="/kor/product/strong.php">주요취급라인</a></li><? } else { ?><li class="snb_off" onmouseover="this.className='snb_on'" onmouseout="this.className='snb_off'"><a href="/kor/product/strong.php">주요취급라인</a></li><? } ?>
    </ul>
    <!-- <? include "banner.php"; ?> -->
</div>

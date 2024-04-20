<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0"/>

<title>Bluestone Technology</title>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="bullet/main.css" type="text/css">
<link rel="stylesheet" href="bullet/menu.css" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery-relation.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

</head>
<body onLoad="init()" oncontextmenu='return false' ondragstart='return false' onselectstart='return false'>

<div id="wraper">
  <!-- headerWrap -->

  <div id="headerWrap">
<? include "header.php"; ?>
  </div>

  <!--end header -->

  <!--main -->
  <div class="main">
    <div class="vBg bg1"></div>
    <div class="vBg bg2" style="left:100%"></div>
    <div class="vBg bg3" style="left:100%"></div>
      <div class="controller2">
        <div class="BtnD">
          <a href="javascript:" class="rollBtn on"><img src="bullet/btn_rollBtn_on.png" alt="" class="mr5" /></a>
          <a href="javascript:"><img src="bullet/btn_rollBtn.png" alt="" class="mr5" /></a>
          <a href="javascript:"><img src="bullet/btn_rollBtn.png" alt="" class="mr5" /></a>
        </div>
      </div>
  </div>
  <!-- end main -->
  <!-- bannerwrap -->
  <div id="bannerwraper">
   <div id="bannerwrap">
     <div id="bannerall">
      <div id="banner_top"><img src="img/banner_top.png" border="0"></div>
      <div id="banner">
        <ul class="value_list">
          <div id="business"><a href="02/01.htm"><img src="img/banner01.png" border="0"></a></div>
          <div id="product"><a href="02/02.htm"><img src="img/banner02.png" border="0"></a></div>
          <div id="online"><a href="mailto:info@bmselec.co.kr"><img src="img/banner03.jpg" border="0"></a></div>
          <div id="location"><a href="05/02.htm"><img src="img/banner04.jpg" border="0"></a></div>
        </ul>
      </div>
      <script type="text/javascript">
       function pop(){
       var $layerPopupObj = $('.layerpop');
       var top = ( $(window).scrollTop() + ($(window).height() - $layerPopupObj.height()) / 2 );
       $('.layerpop').css("top", top);
       }
       $('.value_list a').hover(function() {
       $(this).animate({
       'opacity' : '0.8'
       }, 200);
       }, function() {
       $(this).animate({
       'opacity' : '1'
       }, 200);
       });
      </script> 
     </div>
   </div>     
  <div id="bannertextwrap">
  <div id="bannertext">
    <div id="textall1">
      <div id="text_top">BUSINESS</div>
      <div id="text_bottom">BMS만의 특화된 기술력과 노하우로<br>최고의 비즈니스를 제안합니다.</div>
    </div>
    <div id="textall2">
      <div id="text_top">APPLICATION</div>
      <div id="text_bottom">최고의 기술력과 최상의 품질로<br>보답하여 드리겠습니다.</div>
    </div>
    <div id="textall3">
      <div id="text_top">ONLINE</div>
      <div id="text_bottom">온라인으로 빠르고 효율적인<br>상담을 받으세요.</div>
    </div>
    <div id="textall4">
      <div id="text_top">LOCATON</div>
      <div id="text_bottom">당사로 오시는 길을 상세히<br>안내해드립니다.</div>
    </div>
  </div>
  </div>
  </div>
  <!-- end bannerwrap -->

  <!-- contactwrap -->
  <div id="contactwrap">
    <div id="contact">
        <div id="ct1"><img src="img/contact1.png"></div>
        <div id="ct2"><a href="mailto:info@bmselec.co.kr"><img src="img/contact2.png"></a></div>
    </div>
  </div>
  <!-- contactwrap end -->
  


<!--header-->
<? include "footer.php"; ?>
<!--haader end-->
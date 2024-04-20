<?
$main = false;
$pg = 5;
$sg = 1;
$SNB = "contact";
include("../head.lib.php");
?>

<div class="titleArea">
  <h3>Contact Us</h3>
  <div class="location"><img src="../images/common/icon_home.gif" alt="home" class="imgC" /> <span>Contact</span> <span>Contact Us</span></div>
</div>
<div class="section contact">
  <div class="engTitle">
    Global sourcing Distributor<br />Microworks Korea Location
  </div>
  <ul class="address">
    <li class="f" style="width:720px"><img src="/english/images/contact/icon_add.gif" alt="add" /><b>ADDRESS</b><br /> #614,  Ace Gwangmyeong Tower, Haan-ro 108, Gwangmyeong-si,<span></span>Gyeonggi-do, Korea 423-050</li>
    <li style="margin-top:15px"><img src="/english/images/contact/icon_tell2.gif" alt="CALL CENTER" /><b>CALL CENTER</b><br />82-2-6112-7320</li>
  </ul>
  
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">
      $(document).ready(function () {
        var mapLatLng = new google.maps.LatLng(37.447765, 126.892115)
        var mapOptions = { 
            zoom: 15, 
            center: mapLatLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP 
        }
        var mapGoogle = new google.maps.Map(document.getElementById('divAddress'), mapOptions);
        var mapMarker = new google.maps.Marker({
            map: mapGoogle,
            position: mapLatLng,
            animation: google.maps.Animation.DROP,
            title: "MicroWorks"
        });
        google.maps.event.addListener(mapMarker, 'click', function () {
            mapGoogle.setCenter(mapMarker.getPosition());
        });
      }); 
      </script>
      <div id="divAddress" style="width:750px; height:335px;"></div>
      <div class="section" style="margin-top:60px">
  <h4>Branch Offices</h4>
  <img src="/english/images/contact/img_location.jpg" alt="Global sourcing Distributor" class="mgT10"/></div>
</div>
<? include "../foot.lib.php"; ?>
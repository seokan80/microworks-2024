/* *******************************************************
 * filename : ie8_popup.js
 * description : 하위버전 익스플로러에서 팝업을 띄울때 사용 JS
 * date : 2018-01-16
******************************************************** */


$(document).ready(function  () {
	function popupOpen(){
		window.open("/kr/service/ie8_popup.php","","width=800, height=600, left=0, top=0, resizable=no, scrollbars=no, status=no;");
	}
	popupOpen();
});
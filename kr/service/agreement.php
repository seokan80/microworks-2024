<script type="text/javascript" src="/js/layer_popup.js"></script>


<section class="footer-modal-content">
	<a href="javascript:;" class="modal-close-btn" title="팝업 닫기"><i class="material-icons">&#xE14C;</i></a>
	<h1>이메일무단수집거부</h1>
	<div class="footer-inner-box">
		<div class="footer-inner editor">
		<?
		include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
		include "../lib/config.php";

		$row = $db->object("cs_page", "where page_index='email'");
		$content = $row->content;
		$content = str_replace("<p>","",$content);
		$content = str_replace("</p>","<br/>",$content);
		$content = $tools->strHtml($content);
		echo $content;
		?>

		</div>
	</div>
</section>
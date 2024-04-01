<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>
<script type="text/javascript" src="/js/layer_popup.js"></script>
<section id="siteMapCon" class="footer-modal-content">
	<a href="#none" class="modal-close-btn" title="레이어팝업 닫기"><i class="material-icons">&#xE14C;</i></a>
	<h1>SITEMAP</h1>
	<article class="sitemap-wrapper"><!-- menu는 기본 5개로 설정 / 메뉴4개(menu4), 메뉴6개(menu6), 메뉴7개(menu7) 클래스를 붙여주세요 / 두줄로 표현해야 할 경우 li 가로값과 높이값 설정 -->
		<ul>
			<li>
				<h2>公司</h2>
				<ul class="sitemap-2dep">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
				</ul>
			</li>
			<li>
				<h2>服务项目</h2>
				<ul class="sitemap-2dep">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_do.php"; ?>
				</ul>
			</li>
			<li>
				<h2> 产品搜索 </h2>
				<ul class="sitemap-2dep">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_product.php"; ?>
				</ul>
			</li>
			<li>
				<h2>媒体</h2>
				<ul class="sitemap-2dep">
					<?  include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_media.php"; ?>
				</ul>
			</li>
			<li>
				<h2>联系方式</h2>
				<ul class="sitemap-2dep">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_contact.php"; ?>
				</ul>
			</li>
		</ul>
	</article>
</section>

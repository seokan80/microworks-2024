<?header("Content-Type: text/html; charset=utf-8")?>
<?
$page_num = "03";
$sub_num = "04";
$page_section = "product";
/* !NOTE S : 2024-04 변경 */
$sub_section = "Search for replacement";
$page_info = "PRODUCT SEARCH";
$sub_info = "Search for replacement";
//<!-- !NOTE E : 2024-04 변경 -->
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include $_SERVER['DOCUMENT_ROOT']."/etc/loading.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";
?>
<style>
    /* css */
    .hide {
        display: none !important;
    }
    .show {
        display: block !important;
    }
</style>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
<?
if($productNumber){
    ?>
    <? include $_SERVER["DOCUMENT_ROOT"]."/index/product/include_view.php"; ?>
    <?
} else {
    ?>
    <!-- <article class="sub-page product-page" id="trend_list_2"> -->
        <!-- 컨텐츠 내용 -->
        <? include $_SERVER["DOCUMENT_ROOT"]."/index/product/none_category_search.php"; ?>
        <? include $_SERVER["DOCUMENT_ROOT"]."/index/product/categoty_search.php"; ?>
        <!-- //컨텐츠 내용 -->
        <? include $_SERVER["DOCUMENT_ROOT"]."/index/product/include_compare.php"; ?>
    <!-- </article> -->
    <?
}
?>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

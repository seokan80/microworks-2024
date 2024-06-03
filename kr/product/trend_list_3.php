<?
$page_num = "03";
$sub_num = "01";
//<!-- !NOTE S : 2024-04 추가 -->
$dep3_num = "03";
//<!-- !NOTE E : 2024-04 추가 -->
$page_section = "product";
//<!-- !NOTE S : 2024-04 변경 -->
$sub_section = "memory-biz";
//<!-- !NOTE E : 2024-04 변경 -->
$page_info = "PRODUCT SEARCH";
//<!-- !NOTE S : 2024-04 변경 -->
$sub_info = "메모리 스탁재고 문의";
//<!-- !NOTE E : 2024-04 변경 -->
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
<!-- 컨텐츠 내용 -->
<!-- !NOTE S : 2024-04 추가 -->
<article class="product-page inquiry-page">
    <div class="area">
        <article class="contact-form">
            <? include $_SERVER["DOCUMENT_ROOT"]."/common/include_inquiry.php"; ?>
        </article>
    </div>
</article>
<!-- !NOTE E : 2024-04 추가 -->
<!-- //컨텐츠 내용 -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>


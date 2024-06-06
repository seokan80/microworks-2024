<?
if($lang==2){ 
    $path="en";
} else if($lang==3){
    $path="cn";
} else {
    $path="kr";
}
?>
<script>
    // 정확히 일치 카드 
    function setExactMatched(ExactMatches) {
        if (ExactMatches.length > 0) {
            $('#exactPhotoUrl').attr('src', ExactMatches[0].PhotoUrl);
            $('#exactPrdNm').text(ExactMatches[0].ManufacturerProductNumber);
            $('#exactPrdDesc').text(ExactMatches[0].Description.ProductDescription);
            $('#exactPrdPrice').text(numberWithCommas(ExactMatches[0].ProductVariations[0].StandardPricing[0].TotalPrice));
        } else {
            // 정확히 일치 카드 숨김 처리
            $('#noneCategorySearh1').addClass('hide');
        }
    }
    // 카테고리 검색 결과
    function setTopCategory(FilterOptions, searchLimit, currentPage, sortby, orderby) {
        var len = FilterOptions.TopCategories.length;
        var html = '';
        for (var i=0; i<len; i++) {
            var categoryId = FilterOptions.TopCategories[i].Category.Id;
            html += '<a href="javascript:;" onclick="search_send('+searchLimit+','+currentPage+','+categoryId+',\''+sortby+'\',\''+orderby+'\')" class="item">' +
                    '<img src="'+FilterOptions.TopCategories[i].ImageUrl+'" alt="">' +
                    '<div class="text-wrap">' +
                        '<p class="tit">'+FilterOptions.TopCategories[i].Category.Name+'</p>' +
                        '<div class="info-wrap">' +
                        '<p>'+FilterOptions.TopCategories[i].RootCategory.Name+'</p>' +
                        '<p>'+numberWithCommas(FilterOptions.TopCategories[i].Category.ProductCount)+' 품목</p>' +
                        '</div>' +
                    '</div>' +
                    '</a>'
                    
        }
        $('#categoryList').html(html);
    }

    function contactUs(part) {
        debugger
        if (part == undefined) {
            part = document.getElementById('search_order').value;
        }
        const url = "/<?=$path?>/contact/inquiry.php?part="+part;
        window.location.href = url;
    }

</script>
<!-- !NOTE : 카테고리 페이지 -->
<article class="sub-page product-page pc-only hide" id="noneCategorySearh1">
    <div class="area02">
        <div class="search-results">
            <div class="search-results-header type-category">
                <p>정확히 일치</p>
            </div>
            <div class="search-results-body">
                <div class="category-matched">
                    <img src="/images/content/img-no-image-large.png" alt="" id="exactPhotoUrl">
                    <div class="text-wrap">
                        <strong class="tit" id="exactPrdNm"></strong>
                        <div class="info-wrap">
                            <p class="desc" id="exactPrdDesc"></p>
                            <p class="price"><strong id="exactPrdPrice"></strong></p>
                        </div>
                    </div>
                    <div class="button-layout gap-md extra">
                        <a href="javascript;" onclick="alert('not ready');return;" class="button type-secondary size-sm">Detail View</a>
                        <a href="javascript:void(0);" onclick="contactUs()" return false;" class="button type-primary size-sm">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<article class="sub-page product-page pc-only hide" id="noneCategorySearh2">
    <div class="area02">
        <div class="search-results">
            <div class="search-results-header type-category">
                <p>상위검색 결과</p>
            </div>
            <div class="search-results-body">
                <div class="category-list" id="categoryList">
                    <a href="#" class="item">
                        <img src="/data/goodsImages/goods1_001.png" alt="">
                        <div class="text-wrap">
                            <p class="tit">카테고리 명</p>
                            <div class="divider-group">
                                <p>케이블, 전선</p>
                                <p>32,000 품목</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>
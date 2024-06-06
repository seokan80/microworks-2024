<?
if($lang==2){ 
    $path="en";
    $searchPlaceholder="Search Keyword";
} else if($lang==3){
    $path="cn";
    $searchPlaceholder="请输入搜索词";
} else {
    $path="kr";
    $searchPlaceholder="검색어를 입력해주세요";
}
?>
<script>
    var selCategoryId = undefined; // 선택한 카테고리
    var manufacturerOptions = []; // 제조사 필터
    var seriesOptions = []; // 계열 필터
    var packagingOptions = []; // 포장 필터
    var statusOptions = []; // 제푼현황 필터
    // search_loading_start(); // 검색 중
    var parametricOptions = [];
    var data = {}
    var search_type = '';
    $(document).ready(function() {
        $('#exactPhotoUrl').on('error', function() {
            $(this).attr('src', '/images/content/img-no-image-large.png');
        });

        if('<?=$search_type?>') {
            var types = '<?=$search_type?>'.split(',');
            search_send(types[0],types[1],types[2],types[3],types[4]);
        } else {
            if('<?=$search_order?>') {
                search_init();
            }
        }
    });
    /* js */
    function option_apply(searchLimit = 10, currentPage = 1) {
        search_send(searchLimit, currentPage, selCategoryId);
    }
    function search_init() {
        if('<?=$search_order?>' == '' || '<?=$search_type?>' != '') {
            location.href = '<?=$_SERVER['PHP_SELF'];?>?search_order=' + $("input[name=search_order]").val();
        }
        search_send(1, 1, undefined);
    }
    function search_send(searchLimit = 1, currentPage = 1, categoryId, sortby = "None", orderby = "Ascending") {
        search_type = searchLimit + ',' + currentPage + ',' + categoryId + ',' + sortby + ',' + orderby;
        if(categoryId != undefined && '<?=$search_type?>' == '') {
            location.href = '<?=$_SERVER['PHP_SELF'];?>?search_order=' + $("input[name=search_order]").val()+'&search_type=' + search_type;
        }
        var isSearchLoading = false;
        var keyword = $("input[name=search_order]").val();
        $('#searchKeywordBottom').text('"'+keyword+'"');
        if (keyword == "") {
            alert("<?=$searchSendErrSearchOrderTxt?>"); // 검색어를 입력해주세요.
            return;
        } else if(isSearchLoading) {
            alert("이전 검색 수행 중입니다.");
            return;
        }

        // 페이징 위한 시작 인덱스
        var offset = (currentPage - 1 ) * searchLimit;

        // 제조 업체 필터
        manufacturerOptions = getCheckedValues("manufacturerOptions");
        // 계열 필터
        seriesOptions = getCheckedValues("seriesOptions");
        // 포장 필터
        packagingOptions = getCheckedValues("packagingOptions");
        // 제푼현황 필터
        statusOptions = getCheckedValues("statusOptions");
        // search_loading_start(); // 검색 중
        parametricOptions = getGroupCheckedValues("parametricOptions");

        data = {
            "Keywords": keyword, //검색어
            "Limit": searchLimit,
            "Offset": offset
        }
        if (categoryId != undefined) {
            data["FilterOptionsRequest"] = {
                "CategoryFilter": [
                    {
                        "Id": categoryId //클릭한 카테고리 아이디
                    }
                ]
            }
        } else {
            // 카테고리 검색 아니면 선택 옵션 초기화
            manufacturerOptions = []
            seriesOptions = []
            packagingOptions = []
            statusOptions = []
        }
        if (manufacturerOptions.length > 0) {
            data["FilterOptionsRequest"]["ManufacturerFilter"] = manufacturerOptions;
        }
        if (seriesOptions.length > 0) {
            data["FilterOptionsRequest"]["SeriesFilter"] = seriesOptions;
        }
        if (packagingOptions.length > 0) {
            data["FilterOptionsRequest"]["PackagingFilter"] = packagingOptions;
        }
        if (statusOptions.length > 0) {
            data["FilterOptionsRequest"]["StatusFilter"] = statusOptions;
        }

        console.log(data);

        $.ajax({
            url: "<?=$returnURL?>/index/product/ajax_digikey_search.php?lang=<?=$lang?>",
            type: "post",
            //async: false, // 비동기 설정 해제
            data: {data: JSON.stringify(data)},
            success: function (data) {
                console.log(data);

                setView(categoryId);
                if (categoryId == undefined) {
                    // 정확히 일치 카드
                    setExactMatched(data.ExactMatches);
                    // 상위카테고리
                    setTopCategory(data.FilterOptions, 10, 1, sortby, orderby);
                } else {

                    selCategoryId = categoryId;

                    setSearchResult(data, searchLimit, currentPage);
                }
            },
            error: function (err) {
            },
            beforeSend: function( xhr ) {
                $('#loading').show();
            },
            complete: function () {
                $('#loading').hide();
            },
        }); // end of ajax

    }

    function getGroupCheckedValues(checkboxName) {
        var groupedObjects = []; // 그룹화된 객체들을 저장할 배열

        // 그룹 ID를 추출하고 초기화
        var groupIds = $('input[name^="parametricOptions-"]:checked').map(function() {
            return $(this).attr('name').split('-')[1];
        }).get().filter(function(value, index, self) {
            return self.indexOf(value) === index; // 중복 제거
        });

        // 각 그룹 ID에 대해 객체 생성
        groupIds.forEach(function(groupId) {
            var values = $('input[name="parametricOptions-' + groupId + '"]:checked').map(function() {
                return {Id: $(this).val()};
            }).get();

            groupedObjects.push({
                ParameterId: groupId,
                FilterValues: values
            });
        });

        console.log(groupedObjects); // 콘솔에 그룹화된 결과 출력
        return groupedObjects; // 그룹화된 객체 배열 반환
    }
    // 선택 체크박스 값 조회
    function getCheckedValues(checkboxName) {
        var checkedValues = $('input[name="'+checkboxName+'"]:checked').map(function() {
            return {Id: this.value}; // 체크된 항목의 value 속성을 가져옵니다.
        }).get(); // .get()을 사용하여 jQuery 객체를 일반 배열로 변환합니다.

        if (checkedValues.length > 0) {
            console.log(checkedValues.toString()); // 콘솔에 출력하여 확인
        }
        return checkedValues; // 필요에 따라 값을 반환
    }

    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }

    function setView(categoryId) {
        if (categoryId == undefined) {
            if ($('#noneCategorySearh1').hasClass('hide')) {
                $('#noneCategorySearh1').removeClass('hide');
            }
            if ($('#noneCategorySearh2').hasClass('hide')) {
                $('#noneCategorySearh2').removeClass('hide');
            }
            if (!$('#categorySearch').hasClass('hide')) {
                $('#categorySearch').addClass('hide');
            }
        } else {
            if (!$('#noneCategorySearh1').hasClass('hide')) {
                $('#noneCategorySearh1').addClass('hide');
            }
            if (!$('#noneCategorySearh2').hasClass('hide')) {
                $('#noneCategorySearh2').addClass('hide');
            }
            if ($('#categorySearch').hasClass('hide')) {
                $('#categorySearch').removeClass('hide');
            }
        }
    }
</script>
<script>
    // 정확히 일치 카드 
    function setExactMatched(ExactMatches) {
        if (ExactMatches.length > 0) {
            $('#exactPhotoUrl').attr('src', ExactMatches[0].PhotoUrl);
            $('#exactPrdNm').text(ExactMatches[0].ManufacturerProductNumber);
            $('#exactPrdDesc').text(ExactMatches[0].Description.ProductDescription);
            $('#exactPrdPrice').text(numberWithCommas(ExactMatches[0].ProductVariations[0].StandardPricing[0].TotalPrice));
            $('#exactDetailView').attr('href','<?=$_SERVER['PHP_SELF'];?>?productNumber=' + ExactMatches[0].ProductVariations[0].DigiKeyProductNumber+'&returnURL='+encodeURIComponent('<?=$_SERVER['PHP_SELF'];?>?search_order=<?=$search_order?>&search_type=<?=$search_type?>'));
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
                        '<p>'+numberWithCommas(FilterOptions.TopCategories[i].Category.ProductCount)+'</p>' +
                        '</div>' +
                    '</div>' +
                    '</a>'
                    
        }
        $('#categoryList').html(html);
    }

    function contactUs(part) {
        if (part == undefined) {
            part = document.getElementById('search_order').value;
        }
        const url = "/<?=$path?>/contact/inquiry.php?productNumber="+part;
        window.location.href = url;
    }

</script>
<!-- !NOTE : 카테고리 페이지 -->
<article class="sub-page product-page" id="noneCategorySearchForm">
<form name="bbs_search_form" method="get" action="<?=$_SERVER['PHP_SELF'];?>" class="pc-only area02">
    <div class="replacement-search-box">
        <!--  디지키 검색은 선택 옵션 없음
<div class="replacement-search-select" >
            <a href="javascript:;" class="cur-select">
                <span><em>선택해주세요</em></span>
            </a>
            <ul class="replacement-select-con">
                <li><a href="javascript:search_sel(0);"><span>전체</span></a></li>
                <li><a href="javascript:search_sel(1);"><span>Memory Trend</span></a></li>
                <li><a href="javascript:search_sel(2);"><span>Stock List</span></a></li>
                <li><a href="javascript:search_sel(3);"><span>OEM Excess</span></a></li>
            </ul>
        </div> -->
        <input placeholder="<?=$searchPlaceholder?>" type="text" name="search_order" id="search_order" value="<?=$search_order?>" class="search-word" onKeypress="if(event.keyCode ==13){search_send();return false;}">
        <button  type="button" class="replacement-search-btn" title="검색" onclick="search_init()">
            <img src="/images/icon/stock_list_search_icon.png" alt="">
        </button>
    </div>
</form>
</article>

<article class="sub-page product-page pc-only hide" id="noneCategorySearh1">
    <div class="area02">
        <div class="search-results">
            <div class="search-results-header type-category">
                <p>ExactMatched</p>
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
                        <a href="javascript;" class="button type-secondary size-sm" id="exactDetailView">Detail View</a href="javascript;">
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
                <p>Top Category</p>
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

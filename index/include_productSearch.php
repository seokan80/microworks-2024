<!-- #202405 메인 추가 -->
<?
if($lang==2){ // 영문
    // 검색 결과 실패 문구
    $no_exist_txt_result_1 = "Sorry. <strong class='text-primary search_order'>\"ASDF\"</strong> No results were found for your search.";
    $no_exist_txt_result_2 = "Are there no search results for the replacement product you are looking for?<br>Please contact us and we will help you quickly!";
    $no_exist_txt_result_3 = "Contact us";

    // 검색 버튼 오류 문구
    $searchSendErrArrTxt = "Please select a search item.";
    $searchSendErrSearchOrderTxt = "Please enter a search term.";

    // 목록 문구
    $total_txt_pre = "total : ";
    $total_txt_post = "EA";
} else if($lang==3){ // 중문
    // 검색 결과 실패 문구
    $no_exist_txt_result_1 = "Sorry. <strong class='text-primary search_order'>\"ASDF\"</strong> No results were found for your search.";
    $no_exist_txt_result_2 = "Are there no search results for the replacement product you are looking for?<br>Please contact us and we will help you quickly!";
    $no_exist_txt_result_3 = "Contact us";

    // 검색 버튼 오류 문구
    $searchSendErrArrTxt = "Please select a search item.";
    $searchSendErrSearchOrderTxt = "Please enter a search term.";

    // 목록 문구
    $total_txt_pre = "total : ";
    $total_txt_post = "";
} else {
    // 검색 결과 실패 문구
    $no_exist_txt_result_1 = "죄송합니다. <strong class='text-primary search_order'>\"ASDF\"</strong>에 대한 검색 결과가 없습니다.";
    $no_exist_txt_result_2 = "찾으시는 대치품에 대한 검색결과가 없으신가요?<br>문의주시면 신속히 도와드리겠습니다!";
    $no_exist_txt_result_3 = "문의하기";

    // 검색 버튼 오류 문구
    $searchSendErrArrTxt = "검색항목을 선택해주세요.";
    $searchSendErrSearchOrderTxt = "검색어를 입력해주세요.";

    // 목록 문구
    $total_txt_pre = "총 ";
    $total_txt_post = "건";
}
?>
<script>
    $(document).ready(function() {
        // Handle change event for both select elements
        $('#searchLimit').on('change', function() {
            var selectedValue = $(this).val();
            $('#searchLimit2').val(selectedValue);
            search_send(selectedValue, 1); // Call search_send function with the selected value
        });
        $('#searchLimit2').on('change', function() {
            var selectedValue = $(this).val();
            $('#searchLimit').val(selectedValue);
            search_send(selectedValue, 1); // Call search_send function with the selected value
        });
        // 제조업체 부품 번호 버튼 클릭 시 send_search 호출
        $('.sort-button').on('click', function() {
            var sortOrder = $(this).data('orderby'); // asc 또는 dsc 값을 가져옴
            var sortBy = $(this).data('sort');; // 제조업체 부품 번호를 기준으로 정렬

            // send_search 함수 호출
            send_search($('#searchLimit').val(selectedValue), 1, sortBy, sortOrder);
        });
        var rohsCompliantCheckbox = document.getElementById('option-02-01');
        var nonRohsCompliantCheckbox = document.getElementById('option-02-02');

        rohsCompliantCheckbox.addEventListener('change', function() {
            if (this.checked) {
                nonRohsCompliantCheckbox.checked = false;
            }
        });

        nonRohsCompliantCheckbox.addEventListener('change', function() {
            if (this.checked) {
                rohsCompliantCheckbox.checked = false;
            }
        });

        $('input[name="minimumQuantityAvailable"]').on('input', function() {
            // 숫자와 제어 키만 허용
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });

    var isSearchLoading = false;

    function search_send(searchLimit = 25, currentPage = 1, sortby = "None", orderby = "Ascending"){
        if ($("input[name=search_order]").val() == "") {
            alert("<?=$searchSendErrSearchOrderTxt?>"); // 검색어를 입력해주세요.
            return;
        } else if(isSearchLoading) {
            alert("이전 검색 수행 중입니다.");
            return;
        }
        // 페이징 위한 시작 인덱스
        var offset = (currentPage - 1 ) * searchLimit;

        // 재고옵션, 환경옵션, 미디어 선택 옵션
        var searchOptionsString = getCheckedValues("searchOptions");
        // 마켓플레이스 제품 선택 옵션
        var marketPlaceFilterCheckbox = $('input[name="marketPlaceFilter"]');
        var marketPlaceFilterValue = marketPlaceFilterCheckbox.is(':checked') ? marketPlaceFilterCheckbox.val() : 'NoFilter';
        // 제조 업체 필터
        var manufacturerOptions = getCheckedValues("manufacturerOptions");
        // 계열 필터
        var seriesOptions = getCheckedValues("seriesOptions");
        // 포장 필터
        var packagingOptions = getCheckedValues("packagingOptions");
        // 제푼현황 필터
        var statusOptions = getCheckedValues("statusOptions");
        // search_loading_start(); // 검색 중
        var parametricOptions = getGroupCheckedValues("parametricOptions");

        var sortOptions = {"Field": sortby, "SortOrder": orderby};

        var search_order = $("input[name=search_order]").val();
        var includeKeyword = $("#includeKeyword").val();
        if (includeKeyword != '') {
            search_order += ","+includeKeyword; 
        }
        var total_cnt = 0;

        $.ajax({
            url: "<?=$returnURL?>/index/ajax_digikey_search.php",
            type: "post",
            //async: false, // 비동기 설정 해제
            data: {
                    search_order: search_order, 
                    search_limit: searchLimit, 
                    offset: offset, searchOptions: 
                    searchOptionsString, 
                    marketPlaceFilter: marketPlaceFilterValue, 
                    manufacturerFilter: manufacturerOptions.toString(),
                    seriesFilter: seriesOptions.toString(),
                    packagingFilter: packagingOptions.toString(),
                    statusFilter: statusOptions.toString(),
                    parametricFilter: JSON.stringify(parametricOptions)
                }
        }).done(function(data) {
            console.log(data);
            // 검색 결과 텍스트 설정
            setSearchResultText(data);
            // 제조업체 필터 추가
            addManuFacturers(data.FilterOptions.Manufacturers, manufacturerOptions);
            // 계열 핕터 추가
            addSeries(data.FilterOptions.Series, seriesOptions);
            // 포장 필터 추가
            addPackaging(data.FilterOptions.Packaging, packagingOptions);
            // 현황 추가
            addStatus(data.FilterOptions.Status, statusOptions);
            // 파라미터 필터 목록 추가
            addParametricFilters(data.FilterOptions.ParametricFilters, parametricOptions);
            // 검색 결과 
            addTableList(data.Products, searchLimit);
            // 페이지네이션 설정
            addPagination(parseInt(data.ProductsCount), searchLimit, currentPage);           
            
            // search_loading_end();
        }); // end of ajax

    }

    function setSearchResultText(data) {
        var productsCount = numberWithCommas(data.ProductsCount);

        // 검색 결과 수 셋팅
        $('#searchResultCntTop').text(productsCount);
        $('#searchResultCntTop2').text(productsCount);
        $('#searchResultCnt').text(productsCount);
        $('#searchResultCnt2').text(productsCount);

        // 상단 카테고리명
        $('#searchCategoryNameTop').text(data.Products[0].Category.Name);
        // 하단 카테고리명, 설명
        $('#searchCategoryName').text(data.Products[0].Category.Name);
        $('#searchCategoryDesc').text(data.Products[0].Category.SeoDescription);

        // 검색 결과 화면 노출
        var $searchArticle = $('#searchArticle');
        if ($searchArticle.hasClass('hide')) {
            $searchArticle.removeClass('hide');
        }
    }
    // 선택 체크박스 값 조회
    function getCheckedValues(checkboxName) {
        var checkedValues = $('input[name="'+checkboxName+'"]:checked').map(function() {
            return this.value; // 체크된 항목의 value 속성을 가져옵니다.
        }).get(); // .get()을 사용하여 jQuery 객체를 일반 배열로 변환합니다.

        if (checkedValues.length > 0) {
            console.log(checkedValues.toString()); // 콘솔에 출력하여 확인
        }
        return checkedValues; // 필요에 따라 값을 반환
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

    function addTableList(products) {
        var prdLen = products.length;
        var html = '';
        for(var i=0; i<prdLen; i++) {
            html += '<tr>'
            html += '    <td><input type="checkbox" name="" id=""></td>'
            html += '    <td class="text-left">'
            html += '    <div class="product-info">'
            html += '        <div class="img-box"><img src="'+products[i].PhotoUrl+'" alt="" height="55" width="55"></div>'
            html += '        <div class="text-wrap">'
            html += '        <strong>'+products[i].ManufacturerProductNumber+'</strong>'
            html += '        <p>'+products[i].Description.ProductDescription+'</p>'
            // html += '        <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>'
            html += '        </div>'
            html += '    </div>'
            html += '    </td>'
            html += '    <td class="text-right">'
            html += '    <strong>'+numberWithCommas(products[i].QuantityAvailable)+'</strong>'
            html += '    <p>'+checkStock(products[i].QuantityAvailable)+'</p>'
            html += '    </td>'
            html += '    <td class="text-right">'
            html += '    <strong>'+numberWithCommas(products[i].ProductVariations[0].StandardPricing[0].BreakQuantity)+':₩'+numberWithCommas(products[i].ProductVariations[0].StandardPricing[0].UnitPrice)+'</strong>'
            html += '    <p>'+products[i].ProductVariations[0].PackageType.Name+'</p>'
            html += '    </td>'
            html += '    <td>'
            html += '    <strong>'+products[i].Series.Name+'</strong>'
            html += '    </td>'
            html += '    <td>'
            html += '    <strong>'+products[i].ProductVariations[0].PackageType.Name+'</strong>'
            html += '    </td>'
            html += '    <td>'
            html += '    <strong>'+products[i].ProductStatus.Status+'</strong>'
            html += '    </td>'
            html += '    <td>'
            html += '    <a href="#" class="button type-secondary size-sm">Detail View</a>'
            html += '    </td>'
            html += '</tr>'
        }
        $("#productSearchResult").html(html);
    }

    function addPagination(totalProducts, searchLimit, currentPage) {

        var pages = Math.ceil(totalProducts / searchLimit);
        var paginationHtml = '';
        var startPage = Math.floor((currentPage - 1) / 10) * 10 + 1;
        var endPage = Math.min(startPage + 9, pages);

        if (startPage > 1) {
            paginationHtml += '<a href="javascript:;" onclick="search_send(' + searchLimit + ', '+1+')" class="paging-arrow"><i class="material-icons">&#xEAC3;</i></a>';
            paginationHtml += '<a href="javascript:;" onclick="search_send(' + searchLimit + ', ' + (startPage - 1) + ')" class="paging-arrow"><i class="material-icons">&#xE314;</i></a>';
        }

        for (var i = startPage; i <= endPage; i++) {
            paginationHtml += '<a href="javascript:;" onclick="search_send(' + searchLimit + ', ' + i + ')" class="paging-link' + (i === currentPage ? ' cur' : '') + '">' + i + '</a> ';
        }
        if (endPage < pages) {
            paginationHtml += '<a href="javascript:;" onclick="search_send(' + searchLimit + ', ' + (endPage + 1) + ')" class="paging-arrow"><i class="material-icons">&#xE315;</i></a>'
            paginationHtml += '<a href="javascript:;" onclick="search_send(' + searchLimit + ', ' + pages + ')" class="paging-arrow"><i class="material-icons">&#xEAC9;</i></a>'
        }

        $('#pagination').html(paginationHtml);
    }

    function addManuFacturers(manufacturers, manufacturerOptions = []) {
        $('.search-filters').empty();

        var filterValuesHtml = '';

        manufacturers.forEach(function(manufacturer) {

            var isChecked = manufacturerOptions.includes(manufacturer.Id.toString()) ? 'checked' : '';

            filterValuesHtml += '<li class="checkable-item">' +
                                '<input type="checkbox" name="manufacturerOptions" id="manufacturer-' + manufacturer.Id + '" value="'+manufacturer.Id+'" ' + isChecked + '>' +
                                '<label for="manufacturer-' + manufacturer.Id + '">' + manufacturer.Value + '</label>' +
                                '</li>';
        });

        var filtersHtml = '<div class="filter">' +
                        '<div class="filter-header">' + '제조업체' + '</div>' +
                        '<div class="filter-body">' +
                        '<ul class="checkable-items">' + filterValuesHtml + '</ul>' +
                        '</div>' +
                        '</div>';

        $('.search-filters').append(filtersHtml);
    }

    function addSeries(series, options = []) {
        var filterValuesHtml = '';

        series.forEach(function(serie) {
            var isChecked = options.includes(serie.Id.toString()) ? 'checked' : '';

            filterValuesHtml += '<li class="checkable-item">' +
                        '<input type="checkbox" name="seriesOptions" id="serie-' + serie.Id + '" value="'+serie.Id+'" ' + isChecked + '>' +
                        '<label for="serie-' + serie.Id + '">' + serie.Value + '</label>' +
                    '</li>';
        });

        var filtersHtml = '<div class="filter">' +
                        '<div class="filter-header">' + '계열' + '</div>' +
                        '<div class="filter-body">' +
                        '<ul class="checkable-items">' + filterValuesHtml + '</ul>' +
                        '</div>' +
                        '</div>';
        $('.search-filters').append(filtersHtml);
        
    }

    function addPackaging(datas, options = []) {
        var filterValuesHtml = '';

        datas.forEach(function(data) {
            var isChecked = options.includes(data.Id.toString()) ? 'checked' : '';

            filterValuesHtml += '<li class="checkable-item">' +
                        '<input type="checkbox" name="packagingOptions" id="packaging-' + data.Id + '"  value="'+data.Id+'" ' + isChecked + '>' +
                        '<label for="packaging-' + data.Id + '">' + data.Value + '</label>' +
                    '</li>';
        });

        var filtersHtml = '<div class="filter">' +
                        '<div class="filter-header">' + '포장' + '</div>' +
                        '<div class="filter-body">' +
                        '<ul class="checkable-items">' + filterValuesHtml + '</ul>' +
                        '</div>' +
                        '</div>';
        $('.search-filters').append(filtersHtml);
        
    }

    function addStatus(datas, options = []) {
        var filterValuesHtml = '';
        datas.forEach(function(data) {
            var isChecked = options.includes(data.Id.toString()) ? 'checked' : '';
            filterValuesHtml += '<li class="checkable-item">' +
                        '<input type="checkbox" name="statusOptions" id="status-' + data.Id + '" value="'+data.Id+'" ' + isChecked + '>' +
                        '<label for="status-' + data.Id + '">' + data.Value + '</label>' +
                    '</li>';
        });

        var filtersHtml = '<div class="filter">' +
                        '<div class="filter-header">' + '제품현황' + '</div>' +
                        '<div class="filter-body">' +
                        '<ul class="checkable-items">' + filterValuesHtml + '</ul>' +
                        '</div>' +
                        '</div>';
        $('.search-filters').append(filtersHtml);
        
    }

    function addParametricFilters(parametricFilters, parametricOptions = []) {
        // parameterId와 그 인덱스를 매핑하는 객체 생성
        var parameterIdIndexMap = {};
        parametricOptions.forEach(function(option, index) {
            parameterIdIndexMap[option.ParameterId] = index;
        });

        parametricFilters.forEach(function(filter) {
            if (filter.FilterValues.length <= 1) return;
            var filterValuesHtml = '';
            
            filter.FilterValues.forEach(function(value) {
                // 응답 필터링 객체에 파라미터id는 요청 검색한 필터가 반드시 포함 되므로 체크박스 활성화
                var isChecked = parameterIdIndexMap.hasOwnProperty(filter.ParameterId) ? 'checked' : '';

                filterValuesHtml += '<li class="checkable-item">' +
                                    '<input type="checkbox" name="parametricOptions-'+filter.ParameterId+'" id="filter-' + value.ValueId + '" value="'+value.ValueId+'" ' + isChecked + '>' +
                                    '<label for="filter-' + value.ValueId + '">' + value.ValueName + '</label>' +
                                    '</li>';
            });

            var filtersHtml = '<div class="filter">' +
                        '<div class="filter-header">' + filter.ParameterName + '</div>' +
                        '<div class="filter-body">' +
                        '<ul class="checkable-items">' + filterValuesHtml + '</ul>' +
                        '</div>' +
                        '</div>';

            $('.search-filters').append(filtersHtml);
        });
        // $('#parametricFiltersContainer').html(filtersHtml);
        // Update other elements as needed
    }

    function search_finished(search_order, total_cnt) {
        search_loading_end(); // 검색 종료
    }

    function search_loading_start() {
        isSearchLoading = true;
    }

    function search_loading_end() {
        isSearchLoading = false;
    }

    function go_url_postsearch(url) {
        location.href = url + searched_order;
    }

    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
    function checkStock(quantity) {
        return quantity > 0 ? '재고있음' : '재고없음';
    }
</script>

<div class="replacement-table-wrap margin-top-xxl">
<div class="replacement-table-header">
<div class="result-count">
    <select name="" id="searchLimit" class="view-select">
        <option value="25" selected>25</option>
        <option value="50">50</option>
    </select>
    <em>/</em>
    <strong class="text-primary" id="searchResultCnt">0</strong>
    <!-- <input type="text" class="input" name="minimumQuantityAvailable" value="" placeholder="수량 기준 가격"> -->
</div>
<div class="button-layout gap-md extra">
    <button type="button" class="button type-secondary size-sm"><strong>표 다운로드</strong></button>
    <button type="button" class="button type-point size-sm"><strong>n개 제품비교</strong></button>
</div>
</div>
<div class="replacement-table">
    <table>
        <colgroup>
        <col width="59px"/>
        <col width="560px"/>
        <col width="140px" span="5"/>
        <col width="180px"/>
        </colgroup>
        <thead>
        <tr>
            <th>
            <div class="title">비교</div>
            <div class="sort-wrap">
                <input type="checkbox" name="" id="check-all">
            </div>
            </th>
            <th>
            <div class="title">제조업체 부품 번호</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button" data-sort="ManufacturerProductNumber" data-orderby="Descending"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button" data-sort="ManufacturerProductNumber" data-orderby="Ascending"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">주문 가능 수량</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button" data-sort="QuantityAvailable" data-orderby="Descending"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button" data-sort="QuantityAvailable" data-orderby="Ascending"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">가격</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button" data-sort="Price" data-orderby="Descending"><i class="material-icons">x</i></button>
                <button type="button" class="sort-button" data-sort="Price" data-orderby="Ascending"><i class="material-icons">x</i></button>
            </div>
            </th>
            <th>
            <div class="title">계열</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button" data-sort="None" data-orderby="Descending"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button" data-sort="None" data-orderby="Ascending"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">포장</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button" data-sort="Packaging" data-orderby="Descending"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button" data-sort="Packaging" data-orderby="Ascending"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">제품현황</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button" data-sort="ProductStatus" data-orderby="Descending"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button" data-sort="ProductStatus" data-orderby="Descending"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">문의하기</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button" data-sort="None" data-orderby="Descending"><i class="material-icons">x</i></button>
                <button type="button" class="sort-button" data-sort="None" data-orderby="Descending"><i class="material-icons">x</i></button>
            </div>
            </th>
        </tr>
        </thead>
        <tbody id="productSearchResult">
        
        </tbody>
    </table>
</div>
<div class="replacement-table-footer">
    <div class="result-count">
        <select name="" id="searchLimit2" class="view-select">
            <option value="25" selected>25</option>
            <option value="50">50</option>
        </select>
        <em>/</em>
        <strong class="text-primary" id="searchResultCnt2">0</strong>
        <div class="paging" id="pagination">
            <a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xEAC3;</i></a>
            <a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xE314;</i></a>
            <a href="javascript:;" class="cur">1</a>
            <a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xE315;</i></a>
            <a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xEAC9;</i></a>
        </div>
    </div>
    <div class="button-layout gap-md">
        <button type="button" class="button type-point size-sm"><strong>n개 제품비교</strong></button>
    </div>
</div>

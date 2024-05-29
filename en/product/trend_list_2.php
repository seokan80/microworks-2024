<?
  $page_num = "03";
  $sub_num = "01";
  //<!-- !NOTE S : 2024-04 추가 -->
  $dep3_num = "02";
  //<!-- !NOTE E : 2024-04 추가 -->
  $page_section = "product";
  //<!-- !NOTE S : 2024-04 변경 -->
  $sub_section = "memory-biz";
  //<!-- !NOTE E : 2024-04 변경 -->
  $page_info = "PRODUCT SEARCH";
  //<!-- !NOTE S : 2024-04 변경 -->
  $sub_info = "Search for memory replacement";
  //<!-- !NOTE E : 2024-04 변경 -->
  include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
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
<script>
// var selCategoryId = undefined;
var selCategoryId = '473';
$(document).ready(function() {
  $('#exactPhotoUrl').on('error', function() {
      $(this).attr('src', '/images/content/img-no-image-large.png');
  });
});
/* js */
function search_send(searchLimit = 1, currentPage = 1, categoryId, sortby = "None", orderby = "Ascending") {
  var isSearchLoading = false;
  var keyword = $("input[name=search_order]").val();
  if (keyword == "") {
      alert("<?=$searchSendErrSearchOrderTxt?>"); // 검색어를 입력해주세요.
      return;
  } else if(isSearchLoading) {
      alert("이전 검색 수행 중입니다.");
      return;
  }
  // 이전에 선택한 카테고리가 있으면 유지
  if (categoryId == undefined && selCategoryId != undefined) {
    categoryId = selCategoryId;
  }
  // 페이징 위한 시작 인덱스
  var offset = (currentPage - 1 ) * searchLimit;

  // 제조 업체 필터
  var manufacturerOptions = getCheckedValues("manufacturerOptions");
  // 계열 필터
  var seriesOptions = getCheckedValues("seriesOptions");
  // 포장 필터
  var packagingOptions = getCheckedValues("packagingOptions");
  // 제푼현황 필터
  var statusOptions = getCheckedValues("statusOptions");
  // search_loading_start(); // 검색 중
  // var parametricOptions = getGroupCheckedValues("parametricOptions");

  var data = {
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
      url: "<?=$returnURL?>/index/product/ajax_digikey_search.php",
      type: "post",
      //async: false, // 비동기 설정 해제
      data: {data: JSON.stringify(data)}
  }).done(function(data) {
      console.log(data);

      setView(categoryId);
      if (categoryId == undefined) {
        // 정확히 일치 카드
        setExactMatched(data.ExactMatches);
        // 상위카테고리 
        setTopCategory(data.FilterOptions, searchLimit, currentPage, sortby, orderby);
      } else {
        selCategoryId = categoryId;
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
        // addParametricFilters(data.FilterOptions.ParametricFilters, parametricOptions);
        // 검색 결과 
        // addTableList(data.Products, searchLimit);
        // 페이지네이션 설정
        // addPagination(parseInt(data.ProductsCount), searchLimit, currentPage);           
      }
      
  //     // search_loading_end();
  }); // end of ajax

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

function addManuFacturers(manufacturers, manufacturerOptions = []) {
  $('.search-filters').empty();

  var filterValuesHtml = '';
  console.log('manufacturerOptions', manufacturerOptions);
  manufacturers.forEach(function(manufacturer) {
      if (manufacturer.Id == 19) {

        console.log('find', manufacturer)
      }
      var isChecked = manufacturerOptions.some(item => {return item.Id == manufacturer.Id}) ? 'checked' : '';
      // var isChecked = manufacturerOptions.includes(manufacturer.Id.toString()) ? 'checked' : '';

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
// 검색 결과 텍스트 설정
function setSearchResultText(data) {
  var productsCount = numberWithCommas(data.ProductsCount);
  
  // 상단 카테고리명
  $('#searchCategoryNameTop').text(data.Products[0].Category.Name);

  // 검색 결과 수 셋팅
  $('#searchResultCntTop').text(productsCount);
  $('#searchResultCntTop2').text(productsCount);
  $('#searchResultCnt').text(productsCount);
  $('#searchResultCnt2').text(productsCount);

  // 하단 카테고리명, 설명
  $('#searchCategoryName').text(data.Products[0].Category.Name);
  $('#searchCategoryDesc').text(data.Products[0].Category.SeoDescription);

  // 검색 결과 화면 노출
  var $searchArticle = $('#searchArticle');
  if ($searchArticle.hasClass('hide')) {
      $searchArticle.removeClass('hide');
  }
}

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

// 정확히 일치 카드 
function setExactMatched(ExactMatches) {

  $('#exactPhotoUrl').attr('src', ExactMatches[0].PhotoUrl);
  $('#exactPrdNm').text(ExactMatches[0].ManufacturerProductNumber);
  $('#exactPrdDesc').text(ExactMatches[0].Description.ProductDescription);
  $('#exactPrdPrice').text(numberWithCommas(ExactMatches[0].ProductVariations[0].StandardPricing[0].TotalPrice));
  
  
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
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
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
						<input placeholder="검색어를 입력해주세요" type="text" name="search_order" value="cable" class="search-word" onKeypress="if(event.keyCode ==13){search_send();return false;}">
						<button  type="button" class="replacement-search-btn" title="검색" onclick="search_send()">
							<img src="/images/icon/stock_list_search_icon.png" alt="">
						</button>
					</div>
				</form>
				<!-- 컨텐츠 내용 -->
        <? include $_SERVER["DOCUMENT_ROOT"]."/index/product/none_category_search.php"; ?>
        <? include $_SERVER["DOCUMENT_ROOT"]."/index/product/categoty_search.php"; ?>
        <!-- //컨텐츠 내용 -->		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

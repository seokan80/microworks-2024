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
       <!-- !NOTE : 카테고리 섹션 입니다. -->
       <article class="sub-page product-page pc-only">
					<div class="area02">
            <div class="search-results">
							<div class="search-results-header type-category">
								<p>정확히 일치</p>
							</div>
							<div class="search-results-body">
								<div class="category-matched">
									<img src="/images/content/img-no-image-large.png" alt="">
									<div class="text-wrap">
										<strong class="tit">제품명</strong>
										<div class="info-wrap">
											<p class="desc">제품설명이 들어가는 구역</p>
											<p class="price"><strong>$157,000.000</strong> 박스</p>
										</div>
									</div>
									<div class="button-layout gap-md extra">
										<a href="#" class="button type-secondary size-sm">Detail View</a>
										<a href="#" class="button type-primary size-sm">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="sub-page product-page pc-only">
					<div class="area02">
            <div class="search-results">
							<div class="search-results-header type-category">
								<p>상위검색 결과</p>
							</div>
							<div class="search-results-body">
								<div class="category-list">
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리 명</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
												<p>케이블, 전선</p>
												<p>32,000 품목</p>
											</div>
										</div>
                  </a>
                  <a href="#" class="item">
										<img src="/data/goodsImages/goods1_001.png" alt="">
										<div class="text-wrap">
											<p class="tit">카테고리</p>
											<div class="info-wrap">
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
				<article class="sub-page product-page pc-only">
            <div class="area02">
<!-- !NOTE : 1/3 검색결과 있을 때 -->
              <form action="" class="search-results-form">
                <div class="search-results">
                  <div class="search-results-header">
                    <p class="text-lg">카테고리명</p>
                    <button type="button" class="button size-sm type-secondary extra"><strong>검색 다시하기</strong></button>
                  </div>
                  <div class="search-results-body">
                    <div class="search-utility">
                      <div class="search-box">
                        <input placeholder="" type="search" name="search_order" class="input"
                          value="<?=$search_order?>">
                        <button type="submit" class="search-button" title="검색"><i
                            class="material-icons">&#xE8B6;</i></button>
                        <span class="result-count text-darken">검색 결과 : <strong
                            class="text-primary">58,758</strong></span>
                      </div>
                      <div class="switch-box">
                        <p>검색 기준</p>
                        <div class="switch">
                          <span>
                            <input type="radio" name="switch" id="switch-1" checked>
                            <label for="switch-1">스택</label>
                          </span>
                          <span>
                            <input type="radio" name="switch" id="switch-2">
                            <label for="switch-2">스크롤</label>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="search-filters">
                      <div class="filter">
                        <div class="filter-header">제조업체</div>
                        <div class="filter-body">
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-001">
                              <label for="item-01-001">제조업체1</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-002" checked>
                              <label for="item-01-002">제조업체2</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-003" disabled>
                              <label for="item-01-003">제조업체3 disabled</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-004">
                              <label for="item-01-004">제조업체4 긴 글 테스트 입니다. 긴 글 테스트 입니다.</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-005">
                              <label for="item-01-005">제조업체5</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-006">
                              <label for="item-01-006">제조업체6</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-007">
                              <label for="item-01-007">제조업체7</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-008">
                              <label for="item-01-008">제조업체8</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-009">
                              <label for="item-01-009">제조업체9</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-010">
                              <label for="item-01-010">제조업10</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-01-011">
                              <label for="item-01-011">제조업체11</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="filter">
                        <div class="filter-header">계열</div>
                        <div class="filter-body">
                          <div class="input-box"><input type="search" name="" id="" placeholder="검색 기준" class="input hight-sm"></div>
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-001">
                              <label for="item-02-001">계열1</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-002" checked>
                              <label for="item-02-002">계열2</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-003">
                              <label for="item-02-003">계열3</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-004">
                              <label for="item-02-004">계열4</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-005">
                              <label for="item-02-005">계열5</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-006">
                              <label for="item-02-006">계열6</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-007">
                              <label for="item-02-007">계열7</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-008">
                              <label for="item-02-008">계열8</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-009">
                              <label for="item-02-009">계열9</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-010">
                              <label for="item-02-010">계열10</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-02-011">
                              <label for="item-02-011">계열11</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="filter">
                        <div class="filter-header">포장</div>
                        <div class="filter-body">
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-001">
                              <label for="item-03-001">포장1</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-002" checked>
                              <label for="item-03-002">포장2</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-003">
                              <label for="item-03-003">포장3</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-004">
                              <label for="item-03-004">포장4</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-03-005">
                              <label for="item-03-005">포장5</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="filter">
                        <div class="filter-header">제품현황</div>
                        <div class="filter-body">
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-001">
                              <label for="item-04-001">제품현황1</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-002" checked>
                              <label for="item-04-002">제품현황2</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-003">
                              <label for="item-04-003">제품현황3</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-004">
                              <label for="item-04-004">제품현황4</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-04-005">
                              <label for="item-04-005">제품현황5</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="filter">
                        <div class="filter-header">검색조건</div>
                        <div class="filter-body">
                          <div class="input-box"><input type="search" name="" id="" placeholder="검색 기준" class="input hight-sm"></div>
                          <ul class="checkable-items">
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-001">
                              <label for="item-05-001">검색조건1(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-002" checked>
                              <label for="item-05-002">검색조건2(15)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-003">
                              <label for="item-05-003">검색조건3(8)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-004">
                              <label for="item-05-004">검색조건4(1)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-005">
                              <label for="item-05-005">검색조건5(6)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-006">
                              <label for="item-05-006">검색조건6(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-007">
                              <label for="item-05-007">검색조건7(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-008">
                              <label for="item-05-008">검색조건8(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-009">
                              <label for="item-05-009">검색조건9(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-010">
                              <label for="item-05-010">검색조건10(10)</label>
                            </li>
                            <li class="checkable-item">
                              <input type="checkbox" name="" id="item-05-011">
                              <label for="item-05-011">검색조건11(10)</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="filter-options">
                      <div class="options">
                        <dl class="option">
                          <dt>재고 옵션</dt>
                          <dd>
                            <input type="checkbox" name="" id="option-01-01">
                            <label for="option-01-01">재고 있음</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-01-02">
                            <label for="option-01-02">상시 있음</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-01-03">
                            <label for="option-01-03">신제품</label>
                          </dd>
                        </dl>
                        <dl class="option">
                          <dt>환경 옵션</dt>
                          <dd>
                            <input type="checkbox" name="" id="option-02-01">
                            <label for="option-02-01">RoHS 준수</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-02-02">
                            <label for="option-02-02">RoHS 미준수</label>
                          </dd>
                        </dl>
                        <dl class="option">
                          <dt>미디어</dt>
                          <dd>
                            <input type="checkbox" name="" id="option-03-01">
                            <label for="option-03-01">규격서</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-03-02">
                            <label for="option-03-02">사진</label>
                          </dd>
                          <dd>
                            <input type="checkbox" name="" id="option-03-03">
                            <label for="option-03-03">EDA/CAD 모델</label>
                          </dd>
                        </dl>
                        <dl class="option">
                          <dt>MARKETPLACE 제품</dt>
                          <dd>
                            <input type="checkbox" name="" id="option-04-01">
                            <label for="option-04-01">제외</label>
                          </dd>
                        </dl>
                      </div>
                      <div class="button-layout align-center">
                        <button type="submit" class="button type-point"><strong>Submit</strong></button>
                        <p class="result-count text-rg">검색 결과 : <strong class="text-primary">58,758</strong></p>
                      </div>
                    </div>
                    
                    <div class="replacement-table-wrap margin-top-xxl">
                      <div class="replacement-table-header">
                        <div class="result-count">
                          <select name="" id="" class="view-select">
                            <option value="" selected>보기 1-25</option>
                            <option value="">보기 1-30</option>
                          </select>
                          <em>/</em>
                          <strong class="text-primary">58,758</strong>
                          <input type="text" class="input" placeholder="가격 수량">
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
                            <col width="260px"/>
                            <col width="120px" span="10"/>
                            <col width="140px"/>
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
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">케이블 유형</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">컨텍터 개수</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">전선 게이지</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">컨텍터 가닥</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">컨텍터 재료</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">재킷(절연) 재료</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">재킷(절연) 지름</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">자제 유형</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">재킷 색상</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">길이</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                              <th>
                                <div class="title">문의하기</div>
                                <div class="sort-wrap">
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                                  <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
                                </div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="" id=""></td>
                              <td class="text-left">
                                <div class="product-info">
                                  <div class="img-box"><img src="" alt=""></div>
                                  <div class="text-wrap">
                                    <strong>제품명</strong>
                                    <p>제품설명</p>
                                    <button type="button" class="delete-button"><i class="material-icons">&#xe5cd;</i></button>
                                  </div>
                                </div>
                              </td>
                              <td><strong>케이블 유형</strong></td>
                              <td><strong>컨텍터 개수</strong></td>
                              <td><strong>전선 게이지</strong></td>
                              <td><strong>컨텍터 가닥</strong></td>
                              <td><strong>컨텍터 재료</strong></td>
                              <td><strong>재킷(절연) 재료</strong></td>
                              <td><strong>재킷(절연) 지름</strong></td>
                              <td><strong>자제 유형</strong></td>
                              <td><strong>재킷 색상</strong></td>
                              <td><strong>길이</strong></td>
                              <td>
                                <div class="button-layout">
                                  <a href="#" class="button type-secondary size-sm">Detail View</a>
                                  <a href="#" class="button type-primary size-sm">문의하기</a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="replacement-table-footer">
                        <div class="result-count">
                          <select name="" id="" class="view-select">
                            <option value="" selected>보기 1-25</option>
                            <option value="">보기 1-30</option>
                          </select>
                          <em>/</em>
                          <strong class="text-primary">58,758</strong>
                          <div class="paging">
                            <a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xEAC3;</i></a>
                            <a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xE314;</i></a>
                            <a href="javascript:;" class="cur">1</a>
                            <a href="#">2</a> 
                            <a href="#">3</a> 
                            <a href="#">4</a> 
                            <a href="#">5</a> 
                            <a href="#">6</a> 
                            <a href="#">7</a> 
                            <a href="#">8</a>
                            <a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xE315;</i></a>
                            <a aref="#" onfocus="this.blur()" class="paging-arrow"><i class="material-icons">&#xEAC9;</i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="added-box margin-top-xxl">
                <div class="box-header"><strong>카테고리명</strong></div>
                <div class="box-body">카테고리 설명이 들어갑니다. 예를 들어 이 제품군에 속하는 제품은 정보를 전송 또는 저장에 적합한 형태로 패키징하거나 암호화하고 특정 형태의 변조 공정을 통해 통신 경로의 반대쪽에서 역산을 수행하는 데 사용됩니다. 예로는 디지털 데이터로부터 아날로그 비디오 신호를 생성(또는 아날로그 데이터로부터 데이터 비디오 신호를 생성)하는 장치, 원격 제어 기능을 구현하기 위해 전송 버튼 상태를 암호화하는 장치, 표준 UART를 표준 적외선 트랜시버에 연결할 수 있도록 해 주는 장치가 있습니다.</div>
              </div>
              <!-- !NOTE : 2/3 검색결과 없음 -->
              <div class="search-results">
                <div class="search-results-header">
                  <p>죄송합니다. <strong class="text-primary">"ASDF"</strong>에 대한 검색 결과가 없습니다.</p>
                </div>
                <div class="search-results-body">
                  <div class="no-result-box">
                    <img src="/images/icon/img-no-result.png" alt="검색 결과 없음 이미지">
                    <p>찾으시는 대치품에 대한 검색결과가 없으신가요?<br/>문의주시면 신속히 도와드리겠습니다!</p>
                    <a href="#" class="button"><strong>문의하기</strong></a>
                  </div>
                </div>
              </div>
            </div>
          </article>
					<!-- !NOTE : 3/3 모바일에서 접속 한 경우 -->
					<article class="sub-page product-page mo-only">
						<div class="area02">
							<p class="text-xs text-center text-darken">대치품 검색은 태블릿 기기 또는 PC에서만 가능합니다.</p>
              <div class="quick-search">
                <img src="/images/icon/img-no-result.png" alt="검색 결과 없음 이미지">
                <p>빠른 검색이 필요하시면 문의주세요!</p>
                <a href="#" class="button"><strong>문의하기</strong></a>
              </div>
						</div>
					</article>
		<!-- //컨텐츠 내용 -->
		
        <!-- //컨텐츠 내용 -->		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

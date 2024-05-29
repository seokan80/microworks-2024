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

  // 페이징 위한 시작 인덱스
  var offset = (currentPage - 1 ) * searchLimit;

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
      }
  //     // // 검색 결과 텍스트 설정
  //     // setSearchResultText(data);
  //     // // 제조업체 필터 추가
  //     // addManuFacturers(data.FilterOptions.Manufacturers, manufacturerOptions);
  //     // // 계열 핕터 추가
  //     // addSeries(data.FilterOptions.Series, seriesOptions);
  //     // // 포장 필터 추가
  //     // addPackaging(data.FilterOptions.Packaging, packagingOptions);
  //     // // 현황 추가
  //     // addStatus(data.FilterOptions.Status, statusOptions);
  //     // // 파라미터 필터 목록 추가
  //     // addParametricFilters(data.FilterOptions.ParametricFilters, parametricOptions);
  //     // // 검색 결과 
  //     // addTableList(data.Products, searchLimit);
  //     // // 페이지네이션 설정
  //     // addPagination(parseInt(data.ProductsCount), searchLimit, currentPage);           
      
  //     // search_loading_end();
  }); // end of ajax

}

function setTopCategory(FilterOptions, searchLimit, currentPage, sortby, orderby) {
  var len = FilterOptions.TopCategories.length;
  var html = '';
  for (var i=0; i<len; i++) {
    var categoryId = FilterOptions.TopCategories[i].Category.Id;
    html += '<a href="javascript:;" onclick="search_send('+searchLimit+','+currentPage+','+categoryId+',\''+sortby+'\',\''+orderby+'\')" class="item">' +
                '<div class="item-inner">' +
                    '<img src="'+FilterOptions.TopCategories[i].ImageUrl+'" alt="" width=214 height=154>' +
                    '<div class="text-wrap">' +
                        '<p class="tit">'+FilterOptions.TopCategories[i].Category.Name+'</p>' +
                        '<div class="divider-group">' +
                            '<span>'+FilterOptions.TopCategories[i].RootCategory.Name+'</span>' +
                            '<span>'+numberWithCommas(FilterOptions.TopCategories[i].Category.ProductCount)+' 품목</span>' +
                        '</div>' +
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

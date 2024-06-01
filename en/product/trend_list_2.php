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
var selCategoryId = undefined; // 선택한 카테고리
var manufacturerOptions = []; // 제조사 필터 
var seriesOptions = []; // 계열 필터
var packagingOptions = []; // 포장 필터
var statusOptions = []; // 제푼현황 필터
// search_loading_start(); // 검색 중
var parametricOptions = [];
var data = {}
$(document).ready(function() {
  $('#exactPhotoUrl').on('error', function() {
      $(this).attr('src', '/images/content/img-no-image-large.png');
  });
});
/* js */
function option_apply(searchLimit = 10, currentPage = 1) {
  search_send(searchLimit, currentPage, selCategoryId);
}
function search_init() {
  search_send(10, 1, 473);
}
function search_send(searchLimit = 1, currentPage = 1, categoryId, sortby = "None", orderby = "Ascending") {
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
        setTopCategory(data.FilterOptions, 10, 1, sortby, orderby);
      } else {

        selCategoryId = categoryId;

        setSearchResult(data, searchLimit, currentPage);
      }
      
  //     // search_loading_end();
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
						<button  type="button" class="replacement-search-btn" title="검색" onclick="search_init()">
							<img src="/images/icon/stock_list_search_icon.png" alt="">
						</button>
					</div>
				</form>
				<!-- 컨텐츠 내용 -->
        <? include $_SERVER["DOCUMENT_ROOT"]."/index/product/none_category_search.php"; ?>
        <? include $_SERVER["DOCUMENT_ROOT"]."/index/product/categoty_search.php"; ?>
        <!-- //컨텐츠 내용 -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

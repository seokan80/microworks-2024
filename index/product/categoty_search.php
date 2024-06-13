<?
if($lang==2){ // 영문
    // 목록 문구
    $total_txt_pre = "total : ";
    $total_txt_post = "EA";
} else if($lang==3){ // 중문
    // 목록 문구
    $total_txt_pre = "total : ";
    $total_txt_post = "";
} else {
    // 목록 문구
    $total_txt_pre = "총 ";
    $total_txt_post = "건";
}
?>

<script>
  // var itemValueMap = {}
  function setSearchResult(data, searchLimit, currentPage) {
    var productsCount = numberWithCommas(data.ProductsCount);
    if (productsCount == 0) {
      if ($('#search-results-none').hasClass('hide')) {
        $('#search-results-none').removeClass('hide')
      }
      if (!$('#categorySearchList').hasClass('hide')) {
        $('#categorySearchList').addClass('hide')
      }
      if (!$('#categorySearchListPag').hasClass('hide')) {
        $('#categorySearchListPag').addClass('hide')
      }
      if (!$('#searchResultCnt').hasClass('hide')) {
        $('#searchResultCnt').addClass('hide')
      }

    } else {
      if (!$('#search-results-none').hasClass('hide')) {
        $('#search-results-none').addClass('hide')
      }
      if ($('#categorySearchList').hasClass('hide')) {
        $('#categorySearchList').removeClass('hide')
      }
      if ($('#categorySearchListPag').hasClass('hide')) {
        $('#categorySearchListPag').removeClass('hide')
      }
      if ($('#searchResultCnt').hasClass('hide')) {
        $('#searchResultCnt').removeClass('hide')
      }

      setSearchResultText(data);
      //제조업체 필터 추가
      addFilter(data.FilterOptions.Manufacturers, manufacturerOptions, "manufacturerOptions", true, "제조업체");
      // 계열 핕터 추가
      addFilter(data.FilterOptions.Series, seriesOptions, "seriesOptions", false, "계열");
      // 포장 필터 추가
      addFilter(data.FilterOptions.Packaging, packagingOptions, "packagingOptions", false, "포장");
      // 현황 추가
      addFilter(data.FilterOptions.Status, statusOptions, "statusOptions", false, "현황");
      // 파라미터 필터 목록 추가
      addParametricFilters(data.FilterOptions.ParametricFilters, parametricOptions);
      // 검색 결과 
      addTableList(data.Products, searchLimit);
      // 페이지네이션 설정
      addPagination(parseInt(data.ProductsCount), searchLimit, currentPage);           
    
      // 필터 검색 상자 이벤트
      $('input[type="search"]').off('input').on('input', function() {
          var searchValue = $(this).val();
          console.log('filter-search', searchValue)
          var $ul = $(this).closest('.input-box').next('ul');
          var inputName = $(this).attr('name');
          // console.log(inputName, itemValueMap[inputName])
          if (searchValue === '') {
              $ul.find('.checkable-item').show();
          } else {
              $ul.find('.checkable-item').each(function() {
                var labelValue = $(this).find('label').text();
                
                if (labelValue.indexOf(searchValue) != -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
              });
          }
      });
    }
  }

  // 검색 결과 텍스트 설정
  function setSearchResultText(data) {
    var productsCount = numberWithCommas(data.ProductsCount);
    
    // 상단 카테고리명
    $('#searchCategoryNameTop').text(data.Products[0].Category.Name);

    // 검색 결과 수 셋팅
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
  function resetSearchFilter(searchName) {
    console.log(searchName)
    $('input[name='+searchName+']').prop('checked', false);
    option_apply();
  }
  function addFilter(filters, selOpts = [], searchName, isFirst = false, headerName = '') {
    if (isFirst) {
      $('.search-filters').empty();
    }
    var filterValuesHtml = '';
    // var valArr = []
    filters.forEach(function(filter) {
      // valArr.push(filter.Value);
        if (filter.Value.includes('Digi')) {
          return;
        }
        var isChecked = ( selOpts.length > 0 && selOpts.some(item => {return item.Id == filter.Id}) )? 'checked' : '';
        filterValuesHtml += '<li class="checkable-item">' +
                            '<input type="checkbox" name="'+searchName+'" id="'+searchName+'-' + filter.Id + '" value="'+filter.Id+'" ' + isChecked + '>' +
                            '<label for="'+searchName+'-' + filter.Id + '">' + filter.Value + '</label>' +
                            '</li>';
    });
    var filtersHtml = '<div class="filter">' +
                    '<div class="filter-header"><p>' + headerName + '</p><button type="button" class="button-reset" onclick="resetSearchFilter(\''+searchName+'\')">초기화</button></div>' +
                    '<div class="filter-body">';
    if (filters.length > 20) {
        filtersHtml += '<div class="input-box"><input type="search" name="'+searchName+'" id="" placeholder="검색 기준" class="input hight-sm"></div>';
    } 
    filtersHtml +=  '<ul class="checkable-items">' + filterValuesHtml + '</ul>' +
                    '</div>' +
                    '</div>';
    // itemValueMap[searchName] = valArr;
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

        var filtersHtml = '<div class="filter">'+
                            '<div class="filter-header"><p>' + filter.ParameterName + '</p><button type="button" class="button-reset">초기화</button></div>' +
                              '<div class="filter-body">';
                if (filter.FilterValues.length > 20) {
                  filtersHtml += '<div class="input-box"><input type="search" name="" id="" placeholder="검색 기준" class="input hight-sm"></div>';
                }  
              filtersHtml += '<ul class="checkable-items">' + filterValuesHtml + '</ul>' +
                    '</div>' +
                    '</div>';

        $('.search-filters').append(filtersHtml);
    });
} 

function addTableList(products) {
  var prdLen = products.length;
  var maxParametersProduct = products.reduce((maxProduct, currentProduct) => {
      return currentProduct.Parameters.length > (maxProduct ? maxProduct.Parameters.length : 0) ? currentProduct : maxProduct;
  }, null);

  var parameters = maxParametersProduct.Parameters;

  const colElement = document.getElementById("paraSpan");
  if (colElement) {
      colElement.setAttribute('span', parameters.length);
  }


  var theadHtml = '<tr>' +
                    '<th>비교</th>' +
                    '<th>제조업체 부품 번호</th>';
  var headerParameters = [];
  for (var i = 0; i < parameters.length; i++) {
      theadHtml += '<th>' + parameters[i].ParameterText + '</th>';
      headerParameters.push(parameters[i].ParameterText);
  }
  theadHtml += '<th>문의하기</th>' +
                  '</tr>';
  $('#productSearchResultHead').html(theadHtml);

  var html = '';
  for(var i=0; i<prdLen; i++) {
      var detailHref = '<?=$_SERVER['PHP_SELF'];?>?lang=<?=$lang?>&productNumber=' + products[i].ProductVariations[0].DigiKeyProductNumber +'&returnURL='+encodeURIComponent('<?=$_SERVER['PHP_SELF'];?>?search_order=<?=$search_order?>&search_type=<?=$search_type?>');
      html += '<tr>';
      html += '    <td><input type="checkbox" name="productCk" onclick="checkProductCk(this)" value="' + products[i].ProductVariations[0].DigiKeyProductNumber + '"></td>'
      html += '    <td class="text-left">'
      html += '    <div class="product-info">'
      html += '        <div class="img-box"><img src="'+products[i].PhotoUrl+'" alt="" height="55" width="55"></div>'
      html += '        <div class="text-wrap">'
      html += '        <strong><a href="'+detailHref+'">'+products[i].ManufacturerProductNumber+'</a></strong>'
      html += '        <p>'+products[i].Description.ProductDescription+'</p>'
      html += '        </div>'
      html += '    </div>'
      html += '    </td>'
      var parameters = products[i].Parameters;
      var parameterMap = {};
      for (var j = 0; j < parameters.length; j++) {
          parameterMap[parameters[j].ParameterText] = parameters[j].ValueText;
      }
      for (var j = 0; j < headerParameters.length; j++) {
          if (parameterMap[headerParameters[j]] !== undefined) {
              html += '<td><strong>' + parameterMap[headerParameters[j]] + '</strong></td>';
          } else {
              html += '<td><strong>-</strong></td>';
          }
      }

      html += '    <td>'
      html += '     <div class="button-layout">'
      html += '       <a href="'+detailHref+'" class="button type-secondary size-sm">Detail View</a>'
      html += '       <a href="javascript:void(0);" onclick="contactUs(\''+products[i].ManufacturerProductNumber+'\')" class="button type-primary size-sm">문의하기</a>'
      html += '     </div>'
      html += '    </td>'
      html += '</tr>'
  }
  $("#productSearchResult").html(html);
}

function checkProductCk() {
      var cnt = 0
      $('[name=productCk]').each(function() {
          if($(this).is(':checked')) {
              cnt++;
          }
      });

      if(cnt > 1) {
          $('#compareProduct').show();
          $('#compareProduct .cnt').text(cnt);
      }
}

function addPagination(totalProducts, searchLimit, currentPage = 1) {

  var pages = Math.ceil(totalProducts / searchLimit);
  var paginationHtml = '';
  var startPage = Math.floor((currentPage - 1) / 10) * 10 + 1;
  var endPage = Math.min(startPage + 9, pages);

  if (startPage > 1) {
      paginationHtml += '<a href="javascript:;" onclick="option_apply(' + searchLimit + ', '+1+')" class="paging-arrow"><i class="material-icons">&#xEAC3;</i></a>';
      paginationHtml += '<a href="javascript:;" onclick="option_apply(' + searchLimit + ', ' + (startPage - 1) + ')" class="paging-arrow"><i class="material-icons">&#xE314;</i></a>';
  }

  for (var i = startPage; i <= endPage; i++) {
      paginationHtml += '<a href="javascript:;" onclick="option_apply(' + searchLimit + ', ' + i + ')" class="paging-link' + (i == currentPage ? ' cur' : '') + '">' + i + '</a> ';
  }
  if (endPage < pages) {
      paginationHtml += '<a href="javascript:;" onclick="option_apply(' + searchLimit + ', ' + (endPage + 1) + ')" class="paging-arrow"><i class="material-icons">&#xE315;</i></a>'
      paginationHtml += '<a href="javascript:;" onclick="option_apply(' + searchLimit + ', ' + pages + ')" class="paging-arrow"><i class="material-icons">&#xEAC9;</i></a>'
  }

  $('#pagination').html(paginationHtml);
}


</script>
<article class="sub-page product-page pc-only hide" id="categorySearch">
  <div class="area02">
    <form action="" class="search-results-form">
      <div class="search-results">
        <div class="search-results-header">
          <p class="text-lg" id="searchCategoryNameTop"></p>
        </div>
        <div class="search-results-body">
          <div class="search-filters">
          
          </div>
          <!--           
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
          </div>
           -->
          <div class="button-layout bottom-buttons">
            <button type="button" class="button type-point" onclick="option_apply();"><strong>적용</strong></button>
          </div>

          <div class="replacement-table-wrap margin-top-xxl">
            <div class="replacement-table-header">
              <div class="result-count">
                <strong><?=$total_txt_pre?><span class="text-primary" id="searchResultCnt"></span><?=$total_txt_post?></strong>
              </div>
              <div class="button-layout gap-md extra">
                  <button type="button" class="button type-point size-sm" id="compareProduct" style="display: none;" onClick="compareProductProc()"><strong><span class="cnt"></span>개 제품비교</strong></button>
              </div>
            </div>
            <div class="replacement-table" id="categorySearchList">
              <table>
                <colgroup>
                  <col width="59px" />
                  <col width="560px" />
                  <col width="120px" span="10" id="paraSpan"/>
                  <col width="140px" />
                </colgroup>
                <thead id="productSearchResultHead">
                  
                </thead>
                <tbody id="productSearchResult">
                  
                </tbody>
              </table>
            </div>
            <div class="replacement-table-footer" id="categorySearchListPag">
              <div class="result-count">
                <div class="paging" id="pagination">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="added-box margin-top-xxl">
      <div class="box-header"><strong id="searchCategoryName"></strong></div>
      <div class="box-body" id="searchCategoryDesc"></div>
    </div>
    <!-- !NOTE : 2/3 검색결과 없음 -->
    <div class="search-results hide" id="search-results-none">
      <div class="search-results-header">
        <p>죄송합니다. <strong class="text-primary" id="searchKeywordBottom"></strong>에 대한 검색 결과가 없습니다.</p>
      </div>
      <div class="search-results-body">
        <div class="no-result-box">
          <img src="/images/icon/img-no-result.png" alt="검색 결과 없음 이미지">
          <p>찾으시는 대치품에 대한 검색결과가 없으신가요?<br />문의주시면 신속히 도와드리겠습니다!</p>
          <a href="javascript:void(0);" onclick="contactUs()" class="button"><strong>문의하기</strong></a>
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
      <a href="javascript:void(0);" onclick="contactUs()" class="button"><strong>문의하기</strong></a>
    </div>
  </div>
</article>

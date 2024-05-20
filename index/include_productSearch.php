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
    var isSearchLoading = false;

    function search_sel(i){
        console.log(i)
    }

    function search_send(){
        if ($("input[name=search_order]").val() == "") {
            alert("<?=$searchSendErrSearchOrderTxt?>"); // 검색어를 입력해주세요.
            return;
        } else if(isSearchLoading) {
            //alert("이전 검색 수행 중입니다.");
            return;
        }

        search_loading_start(); // 검색 중


        var search_order = $("input[name=search_order]").val();
        var total_cnt = 0;
    


        $.ajax({
            url: "<?=$returnURL?>/index/ajax_digikey_search.php",
            type: "post",
            //async: false, // 비동기 설정 해제
            data: {search_order: search_order}
        }).done(function(data) {
            console.log(data)
            // end of data
        }); // end of ajax

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
</script>

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
                <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">주문 가능 수량</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">가격</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">계열</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">포장</div>
            <div class="sort-wrap">
                <button type="button" class="sort-button"><i class="material-icons">&#xe5cf;</i></button>
                <button type="button" class="sort-button"><i class="material-icons">&#xe316;</i></button>
            </div>
            </th>
            <th>
            <div class="title">제품현황</div>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
            <td class="text-right">
            <strong>106</strong>
            <p>재고있음</p>
            </td>
            <td class="text-right">
            <strong>1: $157,000.0000</strong>
            <p>박스</p>
            </td>
            <td>
            <strong>계열</strong>
            </td>
            <td>
            <strong>박스</strong>
            </td>
            <td>
            <strong>활성</strong>
            </td>
            <td>
            <a href="#" class="button type-secondary size-sm">Detail View</a>
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
    <div class="button-layout gap-md">
        <button type="button" class="button type-point size-sm"><strong>n개 제품비교</strong></button>
    </div>
</div>

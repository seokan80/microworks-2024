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
    var searchArr = ['trend_list', 'stock', 'oem'];
    function search_sel(i){
        searchArr = ['trend_list', 'stock', 'oem'];
        if(i==1){
            searchArr = ['trend_list'];
        }else if(i==2){
            searchArr = ['stock'];
        }else if(i==3){
            searchArr = ['oem'];
        }
    }

    var isSearchLoading = false;
    var searched_order = '';

    function search_send(){
        if (searchArr == null) {
            alert("<?=$searchSendErrArrTxt?>"); // 검색항목을 선택해주세요.
            return;
        } else if ($("input[name=search_order]").val() == "") {
            alert("<?=$searchSendErrSearchOrderTxt?>"); // 검색어를 입력해주세요.
            return;
        } else if(isSearchLoading) {
            //alert("이전 검색 수행 중입니다.");
            return;
        }

        search_loading_start(); // 검색 중

        if(searchArr.length == 1) {
            // 전체 검색이 아니면, 전체 결과 정보 삭제
            $("#totalSearchResults .exist .total-results").hide();
        } else {
            // 전체 검색 이면, 전체 결과 정보 노출
            $("#totalSearchResults .exist .total-results").show();
        }

        $('.trend_list_wrap').hide();
        $('.stock_wrap').hide();
        $('.oem_wrap').hide();

        var search_order = $("input[name=search_order]").val();
        var total_cnt = 0;
        var cntArr = [];
        for(var i=0;i<searchArr.length;i++) {
            cntArr.push(-1);
        }

        for(var i=0;i<searchArr.length;i++) {
            (function(index) { // ajax 독립적 호출
                var code = searchArr[i];
                $.ajax({
                    url: "<?=$returnURL?>/index/ajax_search.php",
                    type: "get",
                    //async: false, // 비동기 설정 해제
                    data: {search_order: search_order, code: code, point: i}
                }).done(function(data) {
                    cntArr[data.point] = parseInt(data.count);

                    for(var c=0;c<cntArr.length;c++) {
                        if(cntArr[c] == -1) {
                            break;
                        }

                        // 모든 api 갯수 전달 받았을 시, 검색 종료 처리
                        if(c == cntArr.length - 1) {
                            total_cnt = 0;
                            for(var c=0;c<cntArr.length;c++) {
                                total_cnt += cntArr[c];
                            }
                            search_finished(search_order, total_cnt);
                        }
                    }

                    if(parseInt(data.count) > 0) {
                        $('.'+code+'_wrap').show();
                    }

                    $('#totalSearchResults .'+code+'_cnt').text(data.count);
                    $('#totalSearchResults .'+code+' .bbs-list-row').each(function(){
                        $(this).remove();
                    });
                    if(data.list != null) {
                        var length = data.list.length;

                        for(var i=0; i<data.list.length; i++) {
                            console.log(data.list[i])

                            var html = '';
                            if(code == 'trend_list') {
                                var subject = data.list[i].subject.replace(new RegExp(search_order, "gi"), function(match) {
                                                                                                       return ((match.toLowerCase() === search_order.toLowerCase())? ('<span class="text-point">'+match+'</span>') : match);
                                                                                                       });
                                html += '<div class="bbs-list-row">';
                                html += '    <div class="column bbs-no-data">'+(data.list.length - i)+'</div>';
                                html += '    <div class="column bbs-title">';
                                html += '        <a href="#">';
                                html += '            <div class="bbs-subject-con">';
                                html += '                <p class="bbs-subject-txt">'+subject+'</p>';
                                html += '                <div class="bbs-subject-icons">'+data.list[i].new_img+'</div>';
                                html += '            </div>';
                                html += '        </a>';
                                html += '    </div>';
                                html += '    <div class="column bbs-inline" data-label="제품수">'+data.list[i].prd_cnt+'</div>';
                                html += '    <div class="column bbs-inline" data-label="등록일">'+data.list[i].reg_date+'</div>';
                                html += '    <div class="column" data-label="no"><a href="<?=$site_url?>/product/trend_view.php?idx='+data.list[i].idx+'&returnURL=<?=$site_url?>/product/trend_list.php" class="button type-secondary"><strong>Detail View</strong></a></div>';
                                html += '</div>';
                            } else if(code == 'stock') {
                                var subject = data.list[i].attr_1.replace(new RegExp(search_order, "gi"), function(match) {
                                                                                                   return ((match.toLowerCase() === search_order.toLowerCase())? ('<span class="text-point">'+match+'</span>') : match);
                                                                                                   });
                                html += '<div class="bbs-list-row">';
                                html += '    <div class="column bbs-no-data">'+(data.list.length - i)+'</div>';
                                html += '    <div class="column bbs-title">';
                                html += '        <a href="#">';
                                html += '            <div class="bbs-subject-con">';
                                html += '                <p class="bbs-subject-txt">'+subject+'</p>';
                                html += '            </div>';
                                html += '        </a>';
                                html += '    </div>';
                                html += '    <div class="column bbs-inline" data-label="Quantity">'+data.list[i].attr_2+'</div>';
                                html += '    <div class="column bbs-inline" data-label="MFR">'+data.list[i].attr_3+'</div>';
                                html += '    <div class="column bbs-inline" data-label="D/C">'+data.list[i].attr_4+'</div>';
                                html += '    <div class="column bbs-inline" data-label="Remark">'+data.list[i].attr_5+'</div>';
                                html += '</div>';
                            }else if(code == 'oem') {
                                var subject = data.list[i].attr_1.replace(new RegExp(search_order, "gi"), function(match) {
                                                                                                       return ((match.toLowerCase() === search_order.toLowerCase())? ('<span class="text-point">'+match+'</span>') : match);
                                                                                                       });
                                 html += '<div class="bbs-list-row">';
                                 html += '    <div class="column bbs-no-data">'+(data.list.length - i)+'</div>';
                                 html += '    <div class="column bbs-title">';
                                 html += '        <a href="#">';
                                 html += '            <div class="bbs-subject-con">';
                                 html += '                <p class="bbs-subject-txt">'+subject+'</p>';
                                 html += '            </div>';
                                 html += '        </a>';
                                 html += '    </div>';
                                 html += '    <div class="column bbs-inline" data-label="Quantity">'+data.list[i].attr_2+'</div>';
                                 html += '    <div class="column bbs-inline" data-label="MFR">'+data.list[i].attr_3+'</div>';
                                 html += '    <div class="column bbs-inline" data-label="D/C">'+data.list[i].attr_4+'</div>';
                                 html += '    <div class="column bbs-inline" data-label="Remark">'+data.list[i].attr_5+'</div>';
                                 html += '</div>';
                             }
                            $('#totalSearchResults .' + code).append(html);
                        }// end of data
                    } // end of data.list
                }); // end of ajax
            })(i); // i 값 전달
        } // end of for
    }

    function search_finished(search_order, total_cnt) {
        search_loading_end(); // 검색 종료
        searched_order = search_order;

        if(total_cnt > 0) {
            $("#totalSearchResults .total_cnt").text(total_cnt);
            $("#totalSearchResults .no_exist").hide();
            $("#totalSearchResults .exist").show();
        } else {
            $("#totalSearchResults .search_order").text(search_order);
            $("#totalSearchResults .no_exist").show();
            $("#totalSearchResults .exist").hide();
        }
    }

    function search_loading_start() {
        isSearchLoading = true;
        $("#totalSearchResults .search_ing").show();    // 로딩 이미지 표시
        $("input[name=search_order]").attr('readonly', true);   // 검색 text 비활성화
        $("input[name=search_order]").css('background', '#eee');// 검색 text 비활성화
        $("#totalSearchResults .exist").hide();         // 기존 검색 창 종료
        $("#totalSearchResults .no_exist").hide();      // 기존 검색 창 종료
    }

    function search_loading_end() {
        isSearchLoading = false;
        $("#totalSearchResults .search_ing").hide();
        $("input[name=search_order]").attr('readonly', false);  //  검색 text 활성화
        $("input[name=search_order]").css('background', '#fff');//  검색 text 활성화
    }

    function go_url_postsearch(url) {
        location.href = url + searched_order;
    }
</script>

<div class="area no_exist" style="display: none">
    <!-- 검색 결과 없음 -->
    <div class="total-results">
        <p class="result-count text-normal"><?=$no_exist_txt_result_1?></p>
    </div>
    <div class="no-result-box">
        <img src="/images/icon/img-no-result.png" alt="검색 결과 없음 이미지">
        <p class="no_exist_txt_result_3"><?=$no_exist_txt_result_2?></p>
        <a href="#" class="button"><strong class="class="no_exist_txt_result_4""><?=$no_exist_txt_result_3?></strong></a>
    </div>
</div>
<div class="area search_ing" style="display: none">
    <div class="total-results">
        <p class="result-count text-normal" style="text-align:center;"><img src="<?=$site_host?>/images/common/loading.gif" width="30px"/><br/><small style="color: gray;line-height: 30px;">Searching</small></p>
    </div>
</div>
<div class="area exist" style="display: none">
    <div class="total-results">
        <p class="result-count"><?=$total_txt_pre?><strong class="text-primary total_cnt">00</strong><?=$total_txt_post?></p>
    </div>
    <div class="table-wrapper trend_list_wrap">
        <div class="table-title">
            <p class="title">Memory Trend</p>
            <strong class="result-count"><?=$total_txt_pre?><span class="text-primary trend_list_cnt">00</span><?=$total_txt_post?></strong>
            <div class="extra">
                <a href="#" onclick="go_url_postsearch('./product/trend_list.php?search_item=subject&search_order=')" class="button type-round more-view"></a>
            </div>
        </div>

        <article class="bbs-list-con">
            <div class="bbs-list-tbl trend_list">
                <div class="bbs-list-head">
                    <span style="width:6.155%;">No</span>
                    <span style="width:auto;" class="board-head-title">Subject</span>
                    <span style="width:16.924%;">Number of products</span>
                    <span style="width:12.308%;">Date</span>
                    <span style="width:12.308%;"></span>
                </div>
            </div>
        </article>
    </div>
    <div class="table-wrapper stock_wrap">
        <div class="table-title">
            <p class="title">Stock List</p>
            <strong class="result-count"><?=$total_txt_pre?><span class="text-primary stock_cnt">00</span><?=$total_txt_post?></strong>
            <div class="extra">
                <a href="#" onclick="go_url_postsearch('./product/stock.php?search_order=')" class="button type-round more-view"></a>
            </div>
        </div>

        <article class="bbs-list-con">
            <div class="bbs-list-tbl stock">
                <div class="bbs-list-head">
                    <span style="width:6.155%;">No</span>
                    <span style="width:auto;" class="board-head-title">Part#</span>
                    <span style="width:12.308%;">Quantity</span>
                    <span style="width:12.308%;">MFR</span>
                    <span style="width:12.308%;">D/C</span>
                    <span style="width:12.308%;">Remark</span>
                </div>
            </div>
        </article>
    </div>
    <div class="table-wrapper oem_wrap">
        <div class="table-title">
            <p class="title">OEM Excess</p>
            <strong class="result-count"><?=$total_txt_pre?><span class="text-primary oem_cnt">00</span><?=$total_txt_post?></strong>
            <div class="extra">
                <a href="#" onclick="go_url_postsearch('./product/oem.php?search_order=')" class="button type-round more-view"></a>
            </div>
        </div>

        <article class="bbs-list-con">
            <div class="bbs-list-tbl oem">
                <div class="bbs-list-head">
                    <span style="width:6.155%;">No</span>
                    <span style="width:auto;" class="board-head-title">Part#</span>
                    <span style="width:12.308%;">Quantity</span>
                    <span style="width:12.308%;">MFR</span>
                    <span style="width:12.308%;">D/C</span>
                    <span style="width:12.308%;">Remark</span>
                </div>
            </div>
        </article>
    </div>
</div>

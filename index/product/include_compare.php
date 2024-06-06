<script>
    $(document).ready(function () {
    });


    var compareProductCnt = 0;
    function compareProductDel(num){
        $('#areaCompareTable tbody tr').each(function(index){
            $(this).find('td').eq(num).remove();
        });
        compareProductCnt--;
        $('#areaCompareCnt').text(compareProductCnt);
        compareParoductDelImageCheck();
    }

    function compareParoductDelImageCheck() {
        if(compareProductCnt < 3) {
            $('.compareProductImage .delete-button').hide();
        }
    }

    function compareProductProc() {
        compareProductCnt = 0
        var productAttrArray = new Array();
        $('[name=productCk]').each(function() {
            if($(this).is(':checked')) {
                productAttrArray.push($(this).parents('tr'));
                compareProductCnt++;
            }
        });
        $('#areaCompareCnt').text(compareProductCnt);

        var sameCharacteristicCnt = 0;
        var html = ''
        $("#productSearchResultHead tr th").each(function(index){
            if(index > 0 && index < ($("#productSearchResultHead tr th").length -1)) {
                if(index == 1) {
                    html += '<tr><th>이미지</th>';
                    for(var i=0;i<productAttrArray.length;i++) {
                        var image = $(productAttrArray[i]).find('.product-info img').attr('src');
                        var number = $(productAttrArray[i]).find('.product-info strong').text();
                        var desc = $(productAttrArray[i]).find('.product-info p').text();
                        html += '<td class="compareProductImage"><div class="product-info"><div class="img-box"><img src="'+image+'" alt=""></div>';
                        if(compareProductCnt > 2) {
                            html += '<button type="button" class="delete-button" onclick="compareProductDel('+index+')"><i class="material-icons">&#xe5cd;</i></button>';
                        }

                        html += '</div></td>';
                    }
                    html += '</tr>';

                    html += '<tr><th>제조업체 부품 번호</th>';
                    for(var i=0;i<productAttrArray.length;i++) {
                        var number = $(productAttrArray[i]).find('.product-info strong').text();
                        html += '<td>'+number+'</td>';
                    }
                    html += '</tr>';

                    html += '<tr><th>제품설명</th>';
                    for(var i=0;i<productAttrArray.length;i++) {
                        var desc = $(productAttrArray[i]).find('.product-info p').text();
                        html += '<td>'+desc+'</td>';
                    }
                    html += '</tr>';
                } else {
                    var isSame = false;

                    for(var i=0;i<productAttrArray.length;i++) {
                        if(i > 0) {
                            console.log(($(productAttrArray[i-1]).find('td').eq(index).text()) +", " + ($(productAttrArray[i]).find('td').eq(index).text()) + ", " + ($(productAttrArray[i-1]).find('td').eq(index).text() == $(productAttrArray[i]).find('td').eq(index).text()));
                            if($(productAttrArray[i-1]).find('td').eq(index).text() == $(productAttrArray[i]).find('td').eq(index).text()) {
                                isSame = true;
                            } else {
                                isSame = false;
                                break;
                            }
                        }
                    }

                    if(isSame) {
                        sameCharacteristicCnt++;
                    }

                    html += '<tr '+ ((isSame)?'class="sameCharacteristic"':'') + ' ><th>'+$(this).text()+'</th>';
                    for(var i=0;i<productAttrArray.length;i++) {
                        html += '<td '+ ((isSame)?'style="background-color: #f6f6f6;"':'') + ' >'+$(productAttrArray[i]).find('td').eq(index).text()+'</td>';
                    }
                    html += '</tr>';
                }
            }

        });

        $('#areaCompareTable tbody').html(html);
        $('.sameCharacteristicCnt').text(sameCharacteristicCnt);

        $('#noneCategorySearchForm').addClass('hide');
        $('#categorySearch').addClass('hide');
        $('#areaCompare').removeClass('hide');
    }

    function compareProductCancel() {
        $('#noneCategorySearchForm').removeClass('hide');
        $('#categorySearch').removeClass('hide');
        $('#areaCompare').addClass('hide');
    }

    function sameCharacteristicProc(){
        if($('.sameCharacteristicText').eq(0).text() == '숨기기') {
            $('.sameCharacteristicText').text('보이기');
            $('.sameCharacteristic').hide();
        } else {
            $('.sameCharacteristicText').text('숨기기');
            $('.sameCharacteristic').show();
        }
    }
</script>
<!-- 컨텐츠 내용 -->
<!-- !NOTE S : 2024-04 추가 -->
<div class="hide" id="areaCompare">
    <div class="search-detail">
        <div class="search-detail-header">
            <p onclick="compareProductCancel()"><i class="material-icons">&#xe15e;</i>검색 결과로 돌아가기</p>
        </div>
        <div class="search-detail-body">
            <div class="search-utility">
                <p class="text-xl"><strong class="text-primary" id="areaCompareCnt"></strong>개 제품</p>
                <span type="button" class="button type-secondary size-sm" onclick="sameCharacteristicProc();">공유 특성&nbsp;<span class="sameCharacteristicText">숨기기</span>(<span class="sameCharacteristicCnt"></span>개)</span>
            </div>
            <div class="replacement-table-wrap">
                <div class="replacement-table type-detail">
                    <table id="areaCompareTable">
                        <tbody>
                        <tr>
                            <th>이미지</th>
                            <td>
                                <div class="product-info"><div class="img-box"><img src="" alt=""></div><button type="button" class="delete-button"><i
                                                class="material-icons">&#xe5cd;</i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <th>제조업체 부품 번호</th>
                            <td><strong>부품번호</strong></td>
                        </tr>
                        <tr>
                            <th>제조업체</th>
                            <td><strong>제조업체</strong></td>
                        </tr>
                        <tr>
                            <th>DK 부품 번호</th>
                            <td><strong>DK 부품 번호</strong></td>
                        </tr>
                        <tr>
                            <th>가격</th>
                            <td><strong>가격</strong></td>
                        </tr>
                        <tr>
                            <th>재고</th>
                            <td><strong>재고</strong></td>
                        </tr>
                        <tr>
                            <th>데이터 전송률</th>
                            <td><strong>데이터 전송률</strong></td>
                        </tr>
                        <tr>
                            <th>전류 - 공급</th>
                            <td><strong>전류 - 공급</strong></td>
                        </tr>
                        <tr>
                            <th>규격서</th>
                            <td><button type="button"><img src="/images/icon/icon-pdf.png" alt=""></button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="replacement-table-footer">
                    <span type="button" class="button type-secondary size-sm" onclick="sameCharacteristicProc();">공유 특성&nbsp;<span class="sameCharacteristicText">숨기기</span>(<span class="sameCharacteristicCnt"></span>개)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- !NOTE E : 2024-04 추가 -->
<!-- //컨텐츠 내용 -->

<script>
    $(document).ready(function () {
        $('.area02').hide();

        $.ajax({
            url: "/index/product/ajax_digikey_prduct_detail.php?lang=<?=$lang?>",
            type: "get",
            dataType:"json",
            data: {productNumber: '<?=$productNumber?>'},
            success: function (data) {
                console.log(data);
                $('.area02').show();

                $('#area02Img').attr('src', data.Product.PhotoUrl);
                $('#area02DigiKeyProductNumber').text(data.Product.ProductVariations[0].DigiKeyProductNumber);
                $('#area02Manufacturer').text(data.Product.Manufacturer.Name);
                $('#area02ManufacturerProductNumber').text(data.Product.ManufacturerProductNumber);
                $('#area02ManufacturerLeadWeeks').text(data.Product.ManufacturerLeadWeeks + ' <?=$lang==2? "weeks" : ($lang==3? "周" : "주") ?>');
                $('#area02DatasheetUrl').attr('href', data.Product.DatasheetUrl);
                $('#area02ProductDescription').text(data.Product.Description.ProductDescription);

                var area03Category = data.Product.Category.Name;
                if (data.Product.Category.ChildCategories.length > 0) {
                    for (var i = 0; i < data.Product.Category.ChildCategories.length; i++) {
                        area03Category += '<br/>' + data.Product.Category.ChildCategories[i].Name;
                    }
                }
                $('#area03type').text('<?=$lang==2? "Product Summary" : ($lang==3? "产品概要" : "제품 요약") ?>'); // 제품상세 - 제품요약
                $('#area03Category').html(area03Category); // 제품상세 - 종류
                $('#area03PackageType').text(data.Product.ProductVariations[0].PackageType.Name);
                $('#area03Series').text(data.Product.Series.Name); // 제품상세 - 계열
                $('#area03Supplier').text(data.Product.ProductVariations[0].Supplier.Name); // 제품상세 - 제조업체
                $('#area03ProductStatus').text(data.Product.ProductStatus.Status);

                // 제품상세 파라미터
                if(data.Product.Parameters.length > 0) {
                    for (var i = 0; i < data.Product.Parameters.length; i++) {
                        $('#area03 tbody').append('<tr><th>'+data.Product.Parameters[i].ParameterText+'</th><td>'+data.Product.Parameters[i].ValueText+'</td></tr>');
                    }
                }
                if (!(data.Product.BaseProductNumber == null || data.Product.BaseProductNumber == '')) { // 제품상세 - 기준 제품 번호
                    //$('#area03BaseProductNumber').attr('href', '<?=$_SERVER['PHP_SELF'];?>?productNumber=' + data.Product.BaseProductNumber.Name+'&returnURL=<?=$_SERVER['PHP_SELF'];?>');
                    $('#area03 tbody').append('<tr><th>기준 제품 번호</th><td>'+data.Product.BaseProductNumber.Name+'</td></tr>');
                }
            },
            error: function (err) {
                if(confirm('<?=$lang==2? "Failed to load the screen. Would you like to retry?" : ($lang==3? "加载屏幕失败。您想要重试吗？" : "화면을 불러오지 못했습니다. 재 요청 하시겠습니까?") ?>')) {
                    location.reload();
                } else {
                    history.back();
                }
            },
            beforeSend: function( xhr ) {
                $('#loading').show();
            },
            complete: function () {
                $('#loading').hide();
            },
        });
    });
</script>
<!-- 컨텐츠 내용 -->
<!-- !NOTE S : 2024-04 추가 -->
<article class="sub-page product-page">
    <div class="area02">
        <div class="replacement-detail">
            <div class="info-wrapper">
                <img id="area02Img" src="/images/content/img-no-image-large.png" alt="">
                <div class="info-list">
                    <dl>
                        <dt><?=$lang==2 ? "Microworks Product Number" : ($lang==3? "Microworks 产品编号" : "Microworks 제품번호") ?></dt>
                        <dd id="area02DigiKeyProductNumber"></dd>
                    </dl>
                    <dl>
                        <dt><?=$lang==2? "Manufacturer" : ($lang==3? "制造商" : "제조업체") ?></dt>
                        <dd id="area02Manufacturer"><a href="#"></a></dd>
                    </dl>
                    <dl>
                        <dt><?=$lang==2? "Manufacturer Product Number" : ($lang==3? "制造商产品编号" : "제조업체 제품 번호") ?></dt>
                        <dd id="area02ManufacturerProductNumber"></dd>
                    </dl>
                    <dl>
                        <dt><?=$lang==2? "Manufacturer Standard Lead Time" : ($lang==3? "制造商标准交货时间" : "제조업체 표준 리드 타임") ?></dt>
                        <dd id="area02ManufacturerLeadWeeks"></dd>
                    </dl>
<!--                    <dl>--> <!-- 입력 받은 후 처리 부가 없음 -->
<!--                        <dt>고객 참조 번호</dt>-->
<!--                        <dd><input type="text" name="" id="" title="고객 참조 번호"></dd>-->
<!--                    </dl>-->
                    <dl>
                        <dt><?=$lang==2? "Product Detail" : ($lang==3? "产品详细信息" : "제품 세부 정보") ?></dt>
                        <dd id="area02ProductDescription"></dd>
                    </dl>
                    <dl>
                        <dt><?=$lang==2? "Datasheet" : ($lang==3? "数据表" : "규격서") ?></dt>
                        <dd><img src="/images/icon/icon-pdf.png" alt="" class="icon"><a href="#" id="area02DatasheetUrl" target="_blank"><?=$lang==2? "Datasheet" : ($lang==3? "数据表" : "규격서") ?></a></dd>
                    </dl>
<!--                    <dl>--> <!-- 디지키에 없음 -->
<!--                        <dt>EDA/CAD 모델</dt>-->
<!--                        <dd><a href="#">SWI3-5-N-MUB 모델</a></dd>-->
<!--                    </dl>-->
                </div>
            </div>
            <hr class="hr">
            <div class="replacement-table-wrap">
                <div class="search-results-header type-category">
                    <p><?=$lang==2? "Product Feature" : ($lang==3? "产品特性" : "제품 특성") ?></p>
                </div>
                <div class="replacement-table type-info">
                    <table id="area03">
                        <colgroup>
                            <col width="200px" />
                            <col width="*" />
                        </colgroup>
                        <tbody>
                        <tr>
                            <th><?=$lang==2? "Type" : ($lang==3? "类型" : "유형") ?></th>
                            <td id="area03type"></td>
                        </tr>
                        <tr>
                            <th><?=$lang==2? "Type" : ($lang==3? "类型" : "유형") ?></th>
                            <td id="area03Category"></td> <!-- 카테고리 상세 페이지가 없어서 링크 삭제-->
                        </tr>
                        <tr>
                            <th><?=$lang==2? "Manufacturer" : ($lang==3? "制造商" : "제조업체") ?></th>
                            <td id="area03Supplier"></td>
                        </tr>
                        <tr>
                            <th><?=$lang==2? "Series" : ($lang==3? "系列" : "계열") ?></th>
                            <td id="area03Series"></td>
                        </tr>

                        <tr>
                            <th><?=$lang==2? "Packaging" : ($lang==3? "包装" : "포장") ?></th>
                            <td id="area03PackageType"></td>
                        </tr>
                        <tr>
                            <th><?=$lang==2? "Part Status" : ($lang==3? "部件状态" : "부품 현황") ?></th>
                            <td id="area03ProductStatus"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="replacement-detail-buttons">
            <button type="button" onclick="location.href='<?=$returnURL?>'" class="button type-secondary size-sm"><?=$lang==2? "List" : ($lang==3? "列表" : "목록으로") ?></a>
            <button type="button" onclick="location.href='<?=$site_url?>/contact/inquiry.php?productNumber=<?=$productNumber?>';" class="button type-primary size-sm"><?=$lang==2? "Inquiry" : ($lang==3? "询问" : "문의하기") ?></button>
        </div>
    </div>
</article>
<!-- !NOTE E : 2024-04 추가 -->
<!-- //컨텐츠 내용 -->

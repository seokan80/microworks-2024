<?
$mod	= "banner";
$menu	= "main";
include ("../header.php");
include($ROOT_DIR.'/lib/style_class.php');

$currentDate = date('Y-m-d');
$lastDate = '2099-12-31';
?>

    <!-- !NOTE : 신규 -->
    <h4 class="page-header">매인배너(등록)</h4>

    <form name="tx_editor_form" id="tx_editor_form" action="./main_add_ok.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
            <colgroup>
                <col width="15%">
                <col width="*">
            </colgroup>
            <tbody>
            <tr>
                <th>제목</th>
                <td>
                    <input type="text" name="title" class="form-control" value="" maxlength="200">
                </td>
            </tr>
            <tr>
                <th>구분</th>
                <td>
                    <label class="radio-inline"><input type="radio" name="direction" value="L" checked>좌</label>
                    <label class="radio-inline"><input type="radio" name="direction" value="R">우</label>
                </td>
            </tr>
            <tr>
                <th>우선순위</th>
                <td>
                    <input type="number" name="first_order" class="form-control" value="" style="max-width: 100px;">
                </td>
            </tr>
            <tr>
                <th>게시기간 사용여부</th>
                <td>
                    <input type="hidden" name="period_yn"/>
                    <label class="radio-inline"><input type="radio" name="period" value="Y" onClick="enabledDate();">사용</label>
                    <label class="radio-inline"><input type="radio" name="period" value="N" onClick="disabledDate();" checked>미사용</label>
                </td>
            </tr>
            <tr>
                <th>게시기간</th>
                <td>
                    <div class="input-group datetime" style="display: inline-flex;">
                        <input type="text" name="period_start_date" class="form-control input-sm text-center" readonly/>
                        <span class="input-group-addon" style="display: table;">
                            <span class="glyphicon-calendar glyphicon"></span>
                        </span>
                    </div>
                    ~
                    <div class="input-group datetime" style="display: inline-flex;">
                        <input type="text" name="period_end_date" class="form-control input-sm text-center" readonly/>
                        <span class="input-group-addon" style="display: table;">
                            <span class="glyphicon-calendar glyphicon"></span>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>URL</th>
                <td>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <colgroup>
                            <col width="50">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td>
                                http://
                            </td>
                            <td>
                                <input type="text" name="link_url" class="form-control" value="" maxlength="200">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th>이미지</th>
                <td>
                    <input type="file" name="images_file">
                </td>
            </tr>
            <tr>
                <td colspan="2">※ 이미지 업로드 시 링크URL을 입력하시면 이미지를 클릭할 경우 해당페이지로 이동시킵니다.</td>
            </tr>
            </tbody>
        </table>
    </form>

    <p class="popup_images" style="display:none;">※ 이미지 업로드시 URL 을 입력하시면 이미지를 클릭할 경우 해당페이지로 이동시킵니다. </p>

    <table class="table">
        <tr>
            <td class="text-center">
                <button type="button" class="btn btn-primary" onClick="sendit();">등록</button>
                <a href="./main.php" class="btn btn-default">목록</a>
            </td>
        </tr>
    </table>


    <script language="JavaScript">
        $(document).ready(function () {
            disabledDate();
        });

        /*폼체크*/
        function sendit() {
            if (document.tx_editor_form.title.value == '') {
                alert('제목을 입력해 주세요.');
                document.tx_editor_form.title.focus();
                return false;
            }
            if (document.tx_editor_form.first_order.value == '') {
                alert('우선순위를 입력해 주세요.');
                document.tx_editor_form.first_order.focus();
                return false;
            }
            if (document.tx_editor_form.images_file.value == null) {
                alert('이미지 파일을 등록해 주세요.');
                document.tx_editor_form.images_file.focus();
                return false;
            }

            if(confirm("[등록] 하시겠습니까?")){
                document.tx_editor_form.period_start_date.disabled = false;
                document.tx_editor_form.period_end_date.disabled = false;
                document.tx_editor_form.submit();
            }
        }

        function disabledDate() {
            document.tx_editor_form.period_yn.value = 'N';
            document.tx_editor_form.period_start_date.value='<?=$currentDate?>';
            document.tx_editor_form.period_end_date.value='<?=$lastDate?>';
            document.tx_editor_form.period_start_date.disabled = true;
            document.tx_editor_form.period_end_date.disabled = true;
            document.tx_editor_form.period_start_date.style = 'background:#eee';
            document.tx_editor_form.period_end_date.style = 'background:#eee';
        }
        function enabledDate() {
            document.tx_editor_form.period_yn.value = 'Y';
            document.tx_editor_form.period_start_date.disabled = false;
            document.tx_editor_form.period_end_date.disabled = false;
            document.tx_editor_form.period_start_date.style = 'background:#fff';
            document.tx_editor_form.period_end_date.style = 'background:#fff';
        }
    </script>


<? include('../footer.php');?>

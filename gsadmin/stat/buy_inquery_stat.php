<!-- !NOTE : 신규 페이지 -->

<h4 class="page-header">구매문의 통계</h4>

    <form method="get" name="search_form" class="form-inline" action="/gsadmin/online/online.php">
      <table class="table table-bordered">
        <colgroup>
          <col width="15%">
          <col width="*">
        </colgroup>
        <tbody>
          <tr>
            <th>기간</th>
            <td>
              <div class="input-group datetime">
                <input type="text" name="search_sday" class="form-control input-sm text-center" value="">
                <span class="input-group-addon">
                  <span class="glyphicon-calendar glyphicon"></span>
                </span>
              </div>
              ~
              <div class="input-group datetime">
                <input type="text" name="search_eday" class="form-control input-sm text-center" value="2024-04-22">
                <span class="input-group-addon">
                  <span class="glyphicon-calendar glyphicon"></span>
                </span>
              </div>
            </td>
          </tr>
          <tr>
            <th>구분</th>
            <td>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="" checked="">전체</label>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="">온라인 신청서</label>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="">견적 신청서</label>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="">제품문의 신청서</label>
              <label class="checkbox-inline"><input type="checkbox" name="category" value="">반도체 분석 신청서</label>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="text-center">
              <button type="submit" class="btn btn-primary btn-sm">검색</button>&nbsp;
              <a href="/gsadmin/bbs/bbs_list.php?code=notice" class="btn btn-default btn-sm">초기화</a>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <colgroup>
          <col width="5%">
          <col width="5%">
          <col width="5%">
          <col width="7%">
          <col width="15%">
          <col width="6%">
          <col width="6%">
          <col width="15%">
          <col width="*">
          <col width="7%">
          <col width="7%">
        </colgroup>
        <thead>
          <tr>
            <td colspan="11">
              <span>총 00건</span>
              <div class="btn-toolbar pull-right">
                <a href="#" class="btn btn-default btn-xs">
                  온라인 신청서 바로가기
                  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </a>
                <a href="#" class="btn btn-default btn-xs">
                  견적 신청서 바로가기
                  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </a>
                <a href="#" class="btn btn-default btn-xs">
                  제품문의 신청서 바로가기
                  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </a>
                <a href="#" class="btn btn-default btn-xs">
                  반도체 분석 신청서 바로가기
                  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </a>
                <button type="button" class="btn btn-primary btn-xs active" style="margin-left: 30px;">엑셀 다운로드</button>
              </div>
            </td>
          </tr>
          <tr>
            <th><input type="checkbox" id="allCheck"></th>
            <th>N O</th>
            <th>구분</th>
            <th>이미지</th>
            <th>제목</th>
            <th>우선순위</th>
            <th>상태</th>
            <th>게시기간</th>
            <th>URL</th>
            <th>등록일</th>
            <th>관리하기</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
          <tr>
            <td class="text-center"><input type="checkbox" name="check_list" value="3276"></td>
            <td class="text-center">2100</td>
            <td class="text-center">좌</td>
            <td class="text-center"><a href="">이미지</a></td>
            <td>제목</td>
            <td class="text-center">1</td>
            <td class="text-center">사용중</td>
            <td class="text-center">2024-04-23 ~ 2025-04-23</td>
            <td class="text-center">www.microworks.com</td>
            <td class="text-center">2024-04-23</td>
            <td class="text-center"><a href="./online_view.php?returnURL=%2Fgsadmin%2Fonline%2Fonline.php&amp;idx=3276"
                class="btn btn-default btn-sm">상세보기</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="text-center">
      <ul class="pagination">
        <li class="active"><a href="javascript:;">1</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=10">2</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=20">3</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=30">4</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=40">5</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=50">6</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=60">7</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=70">8</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=80">9</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=90">10</a></li>
        <li><a href="/gsadmin/online/online.php?search_item=&amp;search_order=&amp;startPage=100"><span
              aria-hidden="true">»</span></a></li>
      </ul>
    </div>

    <table class="table">
      <tbody>
        <tr>
          <td class="text-center"><a
              href="./bbs_write.php?returnURL=%2Fgsadmin%2Fbbs%2Fbbs_list.php%3Fcode%3Dnotice&amp;code=notice"
              class="btn btn-primary">등록하기</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <footer>
      <p>© 마이크로웍스 코리아(주)</p>
    </footer>
  </div>
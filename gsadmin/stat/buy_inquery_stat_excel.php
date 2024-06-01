<?php
include $_SERVER['DOCUMENT_ROOT']."/common.php";
# 엑셀 생성되는 디비명
$path = "trade";
Header("Content-type: application/vnd.ms-excel");
header('Cache-control: private');
header('Expires: -1');
header( "Content-Disposition: attachment; filename = 접속통계_".date('Ymd').".xls" );
Header("Content-Description: PHP4 Generated Data");
Header("Pragma: no-cache");

echo "<?xml version='1.0' encoding='UTF-8'?>";
?>
<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
          xmlns:o="urn:schemas-microsoft-com:office:office"
          xmlns:x="urn:schemas-microsoft-com:office:excel"
          xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
          xmlns:html="http://www.w3.org/TR/REC-html40">

<Styles> 
  <Style ss:ID='s1'> 
  <Alignment ss:Horizontal='Center' ss:Vertical='Center' ss:WrapText='1'/>
  <Borders>
    <Border ss:Position='Bottom' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Left' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Right' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Top' ss:LineStyle='Continuous' ss:Weight='1'/>
  </Borders> 
  <Interior ss:Color='#FFFF99' ss:Pattern='Solid'/>
  <Font x:Family="Swiss" ss:Size="10" ss:Bold="1"/>
  </Style> 

  <Style ss:ID='s2'> 
  <Alignment ss:Horizontal='Center' ss:Vertical='Center' ss:WrapText='1'/>
  <Borders>
    <Border ss:Position='Bottom' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Left' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Right' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Top' ss:LineStyle='Continuous' ss:Weight='1'/>
  </Borders>
    <Font x:Family="Swiss" ss:Size="8"/>
  </Style>
</Styles>

 <Worksheet ss:Name="stat">
  <Table>

    <Column ss:Width='10'/>
    <Column ss:Width='50'/>
    <Column ss:Width='100'/>
    <Column ss:Width='100'/>
    <Column ss:Width='100'/>
    <Column ss:Width='100'/>
    <Column ss:Width='100'/>
    <Column ss:Width='200'/>
    <Column ss:Width='100'/>
    <Column ss:Width='100'/>
    <Column ss:Width='100'/>

    <Row>
        <Cell></Cell>
    </Row>

    <Row ss:Height="20">
        <Cell></Cell>
        <Cell ss:StyleID='s1'><Data ss:Type="String">기간</Data></Cell>
        <Cell ss:StyleID='s2'><Data ss:Type="String"><?=$search_sday?></Data></Cell>
        <Cell ss:StyleID='s2'><Data ss:Type="String">-</Data></Cell>
        <Cell ss:StyleID='s2'><Data ss:Type="String"><?=$search_eday?></Data></Cell>
    </Row>

    <Row>
      <Cell></Cell>
    </Row>



	<Row ss:Height="20"> 
    <Cell></Cell>
    <Cell ss:StyleID='s1'><Data ss:Type="String">No</Data></Cell>
    <Cell ss:StyleID='s1'><Data ss:Type="String">구분</Data></Cell>
    <Cell ss:StyleID='s1'><Data ss:Type="String">이름</Data></Cell>
    <Cell ss:StyleID='s1'><Data ss:Type="String">휴대폰</Data></Cell>
    <Cell ss:StyleID='s1'><Data ss:Type="String">부품명</Data></Cell>
    <Cell ss:StyleID='s1'><Data ss:Type="String">수량</Data></Cell>
    <Cell ss:StyleID='s1'><Data ss:Type="String">내용</Data></Cell>
    <Cell ss:StyleID='s1'><Data ss:Type="String">등록일</Data></Cell>
    </Row>
<?
	# 해당 Query 및 데이터 처리 부분을 넣으시면됩니다
    $query = "select t.category, t.idx, t.name, t.phone, t.part_name, t.request_quantity, t.content, t.reg_date";
    $query.= " from (select 'online' as category, idx, name, phone, part_name, request_quantity, content, reg_date from cs_online where reg_date between DATE_FORMAT('$search_sday','%Y-%m-%d') and DATE_FORMAT('$search_eday','%Y-%m-%d')";
    $query.= " union all";
    $query.= " select 'estimate' as category, idx, name, phone, null as part_name, null as request_quantity, content, reg_date from cs_estimate where reg_date between DATE_FORMAT('$search_sday','%Y-%m-%d') and DATE_FORMAT('$search_eday','%Y-%m-%d')";
    $query.= " union all";
    $query.= " select 'product' as category, idx, name, phone, part_name, request_quantity, content, reg_date from cs_online_product where reg_date between DATE_FORMAT('$search_sday','%Y-%m-%d') and DATE_FORMAT('$search_eday','%Y-%m-%d')";
    $query.= " union all";
    $query.= " select 'inquiry' as category, idx, name, phone, part as part_name, request_quantity, content, reg_date from cs_sa_inquiry where reg_date between DATE_FORMAT('$search_sday','%Y-%m-%d') and DATE_FORMAT('$search_eday','%Y-%m-%d')) as t";
    $unionquery = $query;
    $query.= " where 1=1";

    // 구분
    if($category_r){
        $query.= " and '$$category_r' like concat('%', t.category, '%')";
    }
    $query.="  order by t.reg_date desc";
	$rs = mysql_query($query);
	$intN = 1;
	while( $row = mysql_fetch_array( $rs ) ) {
		$tmpN = str_pad( $intN, 5, "0", STR_PAD_LEFT );

        $reg_date	= $tools->strDateCut($row[reg_date], 3);

        $content = $tools->strCut_utf($tools->strHtmlNoBr($row[content]), 100);
        $category_nm = "";
        // 구분
        if($row[category] == 'online') {
            $category_nm = "온라인 신청서";
        } else if($row[category] == 'estimate') {
            $category_nm = "견적 신청서";
        }else if($row[category] == 'product') {
            $category_nm = "제품문의 신청서";
        }else if($row[category] == 'inquiry') {
            $category_nm = "반도체 분석  신청서";
        }

?>
<Row ss:Height="20">
    <Cell></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $intN?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $category_nm?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $row[name]?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $row[phone]?> </Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $row[part_name]?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $row[request_quantity]?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $content;?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $reg_date?></Data></Cell>
</Row>
<?		
	$intN++;
	}
	mysql_free_result( $rs );
?>
</Table> 
 </Worksheet> 
</Workbook>

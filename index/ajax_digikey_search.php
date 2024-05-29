<?php

$curl = curl_init();
$search_order = isset($_POST['search_order']) ? $_POST['search_order'] : '';
$manufacturerFilter = isset($_POST['manufacturerFilter']) ? $_POST['manufacturerFilter'] : '';
$search_limit = isset($_POST['search_limit']) ? $_POST['search_limit'] : '';
$offset = isset($_POST['offset']) ? $_POST['offset'] : '0';
$search_offset = isset($_POST['search_offset']) ? $_POST['search_offset'] : '0';
$searchOptions = isset($_POST['searchOptions']) ? $_POST['searchOptions'] : '';
$marketPlaceFilter = isset($_POST['marketPlaceFilter']) ? $_POST['marketPlaceFilter'] : '';
$seriesFilter = isset($_POST['seriesFilter']) ? $_POST['seriesFilter'] : '';
$packagingFilter = isset($_POST['packagingFilter']) ? $_POST['packagingFilter'] : '';
$statusFilter = isset($_POST['statusFilter']) ? $_POST['statusFilter'] : '';
$minimumQuantityAvailable = isset($_POST['minimumQuantityAvailable']) ? $_POST['minimumQuantityAvailable'] : '0';
$parametricFilter = isset($_POST['parametricFilter']) ? $_POST['parametricFilter'] : '';

$clientId = 'ofjMzGnDR9yLp2Wmnl9X1h5udsrL4sIu';
$clientSecret = 'ygj6j0C81gyMpHca';
$accessToken = 'MAXwewWTMVIAlaTe463qq4lNUto6';

// 검색 옵션 콤마 스필릿 후 배열로 변경
$searchOptionsArray = $searchOptions ? explode(',', $searchOptions) : array();
$searchOptionsJson = json_encode($searchOptionsArray);

$manufacturerArray = $manufacturer ? explode(',', $manufacturer) : array();
$manufacturerJson = json_encode($manufacturerArray);

$postData = '{
  "Keywords": "' . addslashes($search_order) . '",
  "Limit": "' . $search_limit . '",
  "Offset": "' . $offset . '",
  "FilterOptionsRequest": {
      "CategoryFilter": [{
          "Id": "473"
      }],
      "MarketPlaceFilter": "' . $marketPlaceFilter . '",
      "SearchOptions": ' . $searchOptionsJson . ',
      "MinimumQuantityAvailable": ' . $minimumQuantityAvailable . ',
      "ManufacturerFilter": '. createJsonArray($manufacturerFilter) .',
      "SeriesFilter": '. createJsonArray($seriesFilter) .',
      "packagingFilter": '. createJsonArray($packagingFilter) .',
      "statusFilter": '. createJsonArray($statusFilter) .',
      "ParameterFilterRequest": {
        "CategoryFilter": {
          "Id": "473"
        },
        "ParameterFilters": '.$parametricFilter.'
      },
      "SortOptions": {
        "Field": "None",
        "SortOrder": "Ascending"
      }
  }
}';

function createJsonArray(&$reqStr) {
  // 콤마로 구분된 문자열을 배열로 변환
  $splitArray = explode(',', $reqStr);

  // 배열의 각 요소를 연관 배열로 변환
  $sendArray = array();
  foreach ($splitArray as $index => $val) {
      $tgt = trim($val);
      if (empty($tgt)) {
        continue;
      }
      $sendArray[] = array('Id' => $tgt);
  }

  // 연관 배열을 JSON 문자열로 변환
  $sendJson = json_encode($sendArray);

  return $sendJson;
}

// 토근 갱신 함수
function refreshToken() {

  $url = 'http://domfamcompany.inames.kr/index/ajax_digikey_auth.php';
  $result = get($url);
  $responseJson = json_decode($result,true);
  return $responseJson['access_token'];
}

function get($url){

	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($ch);
	if(curl_errno($ch)){
		throw new Exception(curl_error($ch));
	}

	curl_close($ch);
	return $result;

}

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.digikey.com/products/v4/search/keyword',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $postData,
  CURLOPT_HTTPHEADER => array(
    'X-DIGIKEY-Client-Id: '. $clientId,
    'X-DIGIKEY-Locale-Site: KR',
    'X-DIGIKEY-Locale-Language: ko',
    'X-DIGIKEY-Locale-Currency: KRW',
    'X-DIGIKEY-Customer-Id: 0',
    'Content-Type: application/json',
    'Accept: application/json',
    'Authorization: Bearer '. $accessToken
  ),
));

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
if ($httpcode == 401) { 
  // 토큰 만료 시 토큰 재발급
  $accessToken = refreshToken(); // Refresh the token and update the refresh token

  header('Content-Type: application/json');

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.digikey.com/products/v4/search/keyword',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_HTTPHEADER => array(
      'X-DIGIKEY-Client-Id: '. $clientId,
      'X-DIGIKEY-Locale-Site: KR',
      'X-DIGIKEY-Locale-Language: ko',
      'X-DIGIKEY-Locale-Currency: KRW',
      'X-DIGIKEY-Customer-Id: 0',
      'Content-Type: application/json',
      'Accept: application/json',
      'Authorization: Bearer '. $accessToken
    ),
  ));

  $response = curl_exec($curl); // Execute the request again
}

curl_close($curl);

header('Content-Type: application/json');
echo $response;
// echo $postData;
?>

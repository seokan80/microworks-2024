<?php

$curl = curl_init();
$lang = isset($_GET['lang']) ? $_GET['lang'] : '';
$data = isset($_POST['data']) ? $_POST['data'] : '';
$site="KR";
$locale="ko";
$currency="KRW";
if($lang==2){ 
  $site="EN";
  $locale="en";
  $currency="USD";
} else if($lang==3){
  $site="CN";
  $locale="zhs";
  $currency="CNY";
}
// $json = file_get_contents('php://input');

// JSON 데이터를 디코드하여 PHP 배열로 변환합니다.
// $data = json_decode($json, true);

$clientId = 'ofjMzGnDR9yLp2Wmnl9X1h5udsrL4sIu';
$accessToken = 'MAXwewWTMVIAlaTe463qq4lNUto6';

// 토근 갱신 함수
function refreshToken() {

  $url = 'http://domfamcompany.inames.kr/index/product/ajax_digikey_auth.php';
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
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    'X-DIGIKEY-Client-Id: '. $clientId,
    'X-DIGIKEY-Locale-Site: '. $site,
    'X-DIGIKEY-Locale-Language: '. $locale,
    'X-DIGIKEY-Locale-Currency: '. $currency,
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
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
      'X-DIGIKEY-Client-Id: '. $clientId,
      'X-DIGIKEY-Locale-Site: '. $site,
      'X-DIGIKEY-Locale-Language: '. $locale,
      'X-DIGIKEY-Locale-Currency: '. $currency,
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
?>

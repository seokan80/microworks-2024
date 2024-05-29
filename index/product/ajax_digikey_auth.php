<?php

$curl = curl_init();

$clientId = 'ofjMzGnDR9yLp2Wmnl9X1h5udsrL4sIu';
$clientSecret = 'ygj6j0C81gyMpHca';

$reqData = 'grant_type=client_credentials&client_id='. $clientId .'&client_secret='. $clientSecret;

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.digikey.com/v1/oauth2/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $reqData,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo 'Curl error: ' . $err;
} else {
  header('Content-Type: application/json');
  echo $response;
}
?>

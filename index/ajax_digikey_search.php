<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox-api.digikey.com/products/v4/search/keyword',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "Keywords": "AK-1394-18",
  "Limit": 10,
  "Offset": 0,
  "FilterOptionsRequest": {
    "ManufacturerFilter": [
      {
        "Id": ""
      }
    ],
    "CategoryFilter": [
      {
        "Id": ""
      }
    ],
    "StatusFilter": [
      {
        "Id": ""
      }
    ],
    "PackagingFilter": [
      {
        "Id": ""
      }
    ],
    "MarketPlaceFilter": "NoFilter",
    "SeriesFilter": [
      {
        "Id": ""
      }
    ],
    "MinimumQuantityAvailable": 0,
    "SearchOptions": [
      "InStock"
    ]
  },
  "SortOptions": {
    "Field": "None",
    "SortOrder": "Ascending"
  }
}',
  CURLOPT_HTTPHEADER => array(
    'X-DIGIKEY-Client-Id: cM9o4h5zRqvlc1h9qtauOPEyJKFAFtRo',
    'X-DIGIKEY-Locale-Site: KR',
    'X-DIGIKEY-Locale-Language: ko',
    'X-DIGIKEY-Locale-Currency: KRW',
    'X-DIGIKEY-Customer-Id: 0',
    'Content-Type: application/json',
    'Accept: application/json',
    'Authorization: Bearer ckIa9KhZal0dCY3jQXt2YpE6cRGA'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

header('Content-Type: application/json');
echo $response;
?>

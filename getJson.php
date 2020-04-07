<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://eu5.fusionsolar.huawei.com/thirdData/getDevRealKpi",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\n\"devIds\": \"160188615046621\",\n\"devTypeId\":\"38\"\n}",
  CURLOPT_HTTPHEADER => array(
    "XSRF-TOKEN: --- SEM POTREBUJEM TOKEN Z LOGINU --- ",
    "Content-Type: application/json",
    "Cookie: web-auth=true; XSRF-TOKEN= --- SEM POTREBUJEM TOKEN Z LOGINU --- ; JSESSIONID=98c14975-4baf-4cd9-93a9-d1d18f887dd9"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

<?php

function formating_post($string)
{
    // убираем спец символы
    $string = htmlspecialchars($string);
    // декодирует любые кодирования
    $string = urldecode($string);
    // убираем отступы вначале и конце
    $string = trim($string);

    return $string;
}

$name = formating_post($_POST['name']);
$surname = formating_post($_POST['surname']);
$email = formating_post($_POST['email']);
$phone = formating_post($_POST['phone']);

function auth()
{
    //curl --request POST \
//  --url https://mtco.match-trade.com/proxy/auth/oauth/token \
//  --header 'Authorization: Basic bGl2ZU10cjFDbGllbnQ6TU9USUI2ckRxbjNDenlNdDV2N2VHVmNhcWZqeDNlNWN1ZmlObG5uVFZHWVkzak5uRDJiWXJQS0JPTGRKMXVCRHpPWURTa1NVa1BObkxJdHd5bXRMZzlDUklLTmdIVW54MVlmdQ==' \
//  --header 'Content-Type: application/x-www-form-urlencoded' \
//  --cookie JSESSIONID=3B5F7D9683C9927E80D2DF933427E9AA \
//  --data grant_type=password \
//  --data username=admint@borealiscap.com \
//  --data password=VUYgv688vfh \

//    $https_user = "admint@borealiscap.com";
//    $https_password = "VUYgv688vfh";

    $url = 'https://mtco.match-trade.com/proxy/auth/oauth/token';

    $data = array('grant_type' => 'password',
        'username' => 'admint@borealiscap.com',
        'password' => 'VUYgv688vfh'
    );

// use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
//            "Authorization: Basic ".base64_encode("$https_user:$https_password")."rn",
                "Authorization: Basic bGl2ZU10cjFDbGllbnQ6TU9USUI2ckRxbjNDenlNdDV2N2VHVmNhcWZqeDNlNWN1ZmlObG5uVFZHWVkzak5uRDJiWXJQS0JPTGRKMXVCRHpPWURTa1NVa1BObkxJdHd5bXRMZzlDUklLTmdIVW54MVlmdQ==",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { /* Handle error */
        $result = 'error';
    } else {
        $result = json_decode($result);
    }

//object(stdClass)[1]
//  public 'access_token' => string 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtYW5hZ2VyX3Njb3BlIjoiZmJhOWI1YzctZGI4ZS00YzczLWE5ZTMtYThmOTYwY2EyYjk1IiwidXNlcl9uYW1lIjoiYWRtaW50QGJvcmVhbGlzY2FwLmNvbToxMjciLCJzY29wZSI6W10sInBhcnRuZXJJZCI6MTI3LCJleHAiOjE2MzM5NzU5NTcsImF1dGhvcml0aWVzIjpbIlJPTEVfQURNSU4iLCJBRE1JTiIsIkNPTlRBQ1RfSU5GT19SRUFEIl0sImp0aSI6IjkxOTM3OTMzLTg2MmItNGZkYi05ZjcyLTA5MGYxMDlmMTdiMSIsImVtYWlsIjoiYWRtaW50QGJvcmVhbGlzY2FwLmNvbSIsImNsaWVudF9pZCI6ImxpdmVNdHIxQ2xpZW50In0.xF3wcIPMfXJwELe33VbH-FcYn7Gs-gc0ez1oHjcpbcQ' (length=488)
//  public 'token_type' => string 'bearer' (length=6)
//  public 'refresh_token' => string 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtYW5hZ2VyX3Njb3BlIjoiZmJhOWI1YzctZGI4ZS00YzczLWE5ZTMtYThmOTYwY2EyYjk1IiwidXNlcl9uYW1lIjoiYWRtaW50QGJvcmVhbGlzY2FwLmNvbToxMjciLCJzY29wZSI6W10sImF0aSI6IjkxOTM3OTMzLTg2MmItNGZkYi05ZjcyLTA5MGYxMDlmMTdiMSIsInBhcnRuZXJJZCI6MTI3LCJleHAiOjE2MzY2NTA3NTcsImF1dGhvcml0aWVzIjpbIlJPTEVfQURNSU4iLCJBRE1JTiIsIkNPTlRBQ1RfSU5GT19SRUFEIl0sImp0aSI6IjY0M2E4MDNiLWMxMjYtNDM1Zi1hYmFhLTE1MDM4YTYzMzg5MyIsImVtYWlsIjoiYWRtaW50QGJvcmVhbGlzY2FwLmNvbSIsImNsaWVudF9pZCI6ImxpdmVNdHIxQ2xpZW50In0.Do_ZyhZ'... (length=548)
//  public 'expires_in' => int 3599
//  public 'manager_scope' => string 'fba9b5c7-db8e-4c73-a9e3-a8f960ca2b95' (length=36)
//  public 'partnerId' => int 127
//  public 'email' => string 'admint@borealiscap.com' (length=22)
//  public 'jti' => string '91937933-862b-4fdb-9f72-090f109f17b1' (length=36)
    return ($result);
}

$auth = auth();
$access_token = auth()->access_token;
//var_dump($access_token);
$partnerId = auth()->partnerId;

function register_a()
{


//GET https://mtco.match-trade.com/proxy/configuration/api/register-fields?partnerId=0&demo=true
//Accept: application/json
//Content-Type: application/json
//Authorization: Bearer {access_token_from_token_response}

    $url = 'https://mtco.match-trade.com/proxy/configuration/api/register-fields?partnerId=' . auth()->partnerId . '&demo=false';

//    $data = array('grant_type' => 'password',
//        'password' => 'VUYgv688vfh'
//    );

// use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header' =>
                "Accept: application/json\r\n" .
                "Authorization: Bearer " . auth()->access_token . "\r\n",
//                "Authorization: Bearer " . "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtYW5hZ2VyX3Njb3BlIjoiZmJhOWI1YzctZGI4ZS00YzczLWE5ZTMtYThmOTYwY2EyYjk1IiwidXNlcl9uYW1lIjoiYWRtaW50QGJvcmVhbGlzY2FwLmNvbToxMjciLCJzY29wZSI6W10sInBhcnRuZXJJZCI6MTI3LCJleHAiOjE2MzM5Nzc0OTcsImF1dGhvcml0aWVzIjpbIlJPTEVfQURNSU4iLCJBRE1JTiIsIkNPTlRBQ1RfSU5GT19SRUFEIl0sImp0aSI6IjZlYzhhZThkLTc0NDktNDUyYi04YTFlLThiMmYzN2I2ODZhNCIsImVtYWlsIjoiYWRtaW50QGJvcmVhbGlzY2FwLmNvbSIsImNsaWVudF9pZCI6ImxpdmVNdHIxQ2xpZW50In0.L60zcngJattOq4KzSJacN2F-iWpkpasofGfKCdKX3fY" . "\r\n",
            "Content-Type: application/json",
            'method' => 'GET',
//            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { /* Handle error */
        $result = 'error register_a';
    } else {
        $result = json_decode($result);
    }

//    array (size=9)
//  0 =>
//    object(stdClass)[2]
//      public 'uuid' => string '9534f576-bb5c-4cd9-b5f5-5a29340ad2c7' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.002Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.002Z' (length=24)
//      public 'type' => string 'FIRST_NAME' (length=10)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true
//  1 =>
//    object(stdClass)[3]
//      public 'uuid' => string 'cbabdc99-8f08-43ed-8da9-d11c29a7cfff' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.002Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.002Z' (length=24)
//      public 'type' => string 'LAST_NAME' (length=9)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true
//  2 =>
//    object(stdClass)[4]
//      public 'uuid' => string 'ebcbdaf2-667e-4bc6-a53b-d91cd24f2a31' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'type' => string 'BIRTH_DATE' (length=10)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true
//  3 =>
//    object(stdClass)[5]
//      public 'uuid' => string 'bc149638-782f-437f-b964-850d84461312' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'type' => string 'PHONE' (length=5)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true
//  4 =>
//    object(stdClass)[6]
//      public 'uuid' => string 'e70a9218-ff5b-4710-b43a-1370dbbd06d2' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'type' => string 'COUNTRY' (length=7)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true
//  5 =>
//    object(stdClass)[7]
//      public 'uuid' => string '0de58ba0-749b-441a-96cb-c8c512c8c673' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'type' => string 'STATE' (length=5)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true
//  6 =>
//    object(stdClass)[8]
//      public 'uuid' => string 'a05c6e70-965e-454a-84a6-46a949b51f5f' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'type' => string 'CITY' (length=4)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true
//  7 =>
//    object(stdClass)[9]
//      public 'uuid' => string 'a79e27ac-0a93-42ad-8915-e6020073cdd0' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'type' => string 'ZIP_CODE' (length=8)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true
//  8 =>
//    object(stdClass)[10]
//      public 'uuid' => string 'a12707ae-0a66-4ef0-9945-4fbd69a18443' (length=36)
//      public 'partnerId' => int 127
//      public 'created' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'updated' => string '2021-09-27T11:43:02.003Z' (length=24)
//      public 'type' => string 'STREET' (length=6)
//      public 'active' => boolean true
//      public 'demo' => boolean false
//      public 'required' => boolean true

    return ($result);
}

$url = 'https://mtco.match-trade.com/proxy/processing/api/accounts';

$headers = [
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Bearer ' . $access_token
]; // заголовки нашего запроса

$post_data = array(
    'offerUuid' => '',
    "account" => array(
        "partnerId" => $partnerId,
        "email" => $email,
        "name" => $name,
        "surname" => $surname,
        "phone" => $phone,
        "country" => "US",
        "password" => "string123",
//            "dateOfBirth" => "2020-07-31T13:53:09.156Z",
//            "state" => "string",
//            "city" => "string",
//            "postCode" => "string",
//            "address" => "string",
//            "bankAddress" => "string",
//            "bankSwiftCode" => "string",
//            "bankAccount" => "string",
//            "bankName" => "string",
//            "parentTradingAccountUuid" => "c5c0ecfc-bced-4d2b-a567-2c5739456c8b",

//            "accountManagerUuid" => "c5c0ecfc-bced-4d2b-a567-2c5739456c8b"
    )

);

$data_json = json_encode($post_data); // переводим поля в формат JSON

$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);

$result = curl_exec($curl); // результат POST запроса

//var_dump($result);

echo "<h1>Your data has been sent successfully.</h1>"
?>
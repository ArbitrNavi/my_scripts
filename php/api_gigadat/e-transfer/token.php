<?php

//
//Campaign Token(ID) Testing (Gigadat)
//da7606c1adbec22a3b29189f4c6f7abc
//
//Campaign Token(ID) Production (Gigadat)
//bc23b94e436202b3e4aeca7ae87c1587

//Campaign Token(ID) Testing (Gigadat)
$campaignID_test = 'da7606c1adbec22a3b29189f4c6f7abc';

//Campaign Token(ID) Production (Gigadat)
$campaignID_prod = 'bc23b94e436202b3e4aeca7ae87c1587';

$campaignId = $campaignID_prod;

$account_kyle = array(
    'email' => 'kyle@gigadatsolutions.com',
    'pass' => '30Test1234',
//    'access_token'=>'52d28ee8-0198-4a66-8481-49b1de445ac3',
//    'security_token'=>'76106b0c-ea6c-4134-8904-75ab45c77c6a',
    'access_token' => 'e923e277-2d21-445a-ac1e-784361c79a65',
    'security_token' => 'fc1e8858-980e-4aff-b222-303e383acca7',
);

$url = 'https://interac.express-connect.com/api/payment-token/' . $campaignId;
//print_r($url);

$headers = [
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Basic ' . base64_encode(sprintf('%s:%s', $account_kyle['access_token'], $account_kyle['security_token']))
]; // заголовки нашего запроса


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

$this_data_U = date('U');

$userId = substr($this_data_U,4);
$transactionId = 'trid' . $userId;
$name = formating_post($_POST['name']);
$email = formating_post($_POST['email']);
$mobile = formating_post($_POST['mobile']);
$amount = formating_post($_POST['amount']);
$userIp = $_SERVER['HTTP_CF_CONNECTING_IP'];

//$userId = substr($this_data_U,4);
//$transactionId = 'trid' . $userId;
//$name = 'test';
//$email = 'test@mail.com';
//$mobile = '1111111111';
//$amount = '111';
//$userIp = '192.168.0.1';


$post_data = array(
    'userId' => $userId,
    'transactionId' => $transactionId, // merchant defined value
    'name' => $name,
    'email' => $email,
    'site' => 'https://borealiscap.com',
    'userIp' => $userIp,
    'mobile' => $mobile,
    'currency' => 'CAD',
    'language' => 'en',
    'amount' => $amount,
    'type' => 'ETO',
    'sandbox' => true,  // set this to false or remove it from request when in production
);

$data_json = json_encode($post_data); // переводим поля в формат JSON

$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);

$token = curl_exec($curl); // результат POST запроса
//$token = json_decode($token);
echo $token;
//$oneTimeToken = json_decode($result)->oneTimeToken;
//print_r($token);

?>

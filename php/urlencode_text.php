<?php
//файл для теста
//https://www.forza.ba/en/apply/?code=true
//&fb_auth=true
//&state=%22utm_source%3Dforzakredit.ba%26utm_campaign%3Dgoogle%26utm_medium%3Dnone%22
//&loan_days=30
//&RepaymentDMY=22.7.2021
//&AmountToPay=600
//&GuarantorFee=0
//&loan_amount=600
//&_ga=2.69742032.1562267439.1624282590-1314847973.1621242377


$sourse_code = '!utm_source=test'
    . '&utm source=forzakredit.ba'
    . '&utm_campaign=google'
    . '&utm_medium=none';

var_dump($sourse_code);

$sourse_code = urlencode($sourse_code);
//$sourse_code = '%27' . $sourse_code .'%27';

var_dump($_REQUEST);
echo '$sourse_code';
var_dump($sourse_code);

echo '$decode_sourse_code';
var_dump(urldecode('%27utm_medium%3Dnone%26t2%3Dt2%27'));

parse_str($decode_sourse_code, $states);

echo '$states';
var_dump($states);
?>
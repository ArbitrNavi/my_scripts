<?php
//log

$razdelitel = '--------------------------------------------'.PHP_EOL . date("Y-m-d H:i:s") .PHP_EOL.PHP_EOL;

$data_REQUEST = '$_REQUEST: ' . print_r($_REQUEST, true).PHP_EOL;
$data_POST = '$_POST: ' . print_r($_POST, true).PHP_EOL;
$data_GET = '$_GET: ' . print_r($_GET, true).PHP_EOL;

$data_all = $razdelitel . $data_REQUEST . $data_POST . $data_GET;

if (!is_dir('log')){
    mkdir('log','777');
}

//помесячное создание
$name_txt = 'log/log_' . date('m.Y'); //12.2021

//Запись в файл
file_put_contents($name_txt, $data_all, FILE_APPEND);
?>
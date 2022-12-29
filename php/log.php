<?php
//log

$razdelitel = '--------------------------------------------'.PHP_EOL . date("Y-m-d H:i:s") .PHP_EOL.PHP_EOL;

$data_REQUEST = '$_REQUEST: ' . print_r($_REQUEST, true).PHP_EOL;
$data_POST = '$_POST: ' . print_r($_POST, true).PHP_EOL;
$data_GET = '$_GET: ' . print_r($_GET, true).PHP_EOL;

$data_all = $razdelitel . $data_REQUEST . $data_POST . $data_GET;

//создание каталогов, не везде срабатывает как надо, поэтому отключаем
//if (!is_dir(__DIR__ .'/log')){
//    mkdir(__DIR__ .'/log','655');
//}

//помесячное создание
$name_txt = __DIR__ . '/log_' . date('m.Y') . '.txt'; //log_12.2021.txt


//изменяем права, что б нельзя было читать извне
$chmod = '0244';
chmod($name_txt, $chmod);  // восьмеричное, верный способ

//Запись в файл
file_put_contents($name_txt, $data_all, FILE_APPEND);
//var_dump($name_txt, $chmod);




//еще один вариант записи логов
$thisDate = date('d.m.Y H:i:s');

//write to file
$req_dump = PHP_EOL . PHP_EOL . "------------" . PHP_EOL . $thisDate . PHP_EOL . print_r($_REQUEST, true);
$fp = fopen('request.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);
?>
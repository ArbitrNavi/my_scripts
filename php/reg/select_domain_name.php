<?php 
// Получаем доменное имя в данном примере это mysite.ru

$str = "http://www.subdomain.mysite.ru/page/file.php?variable=value";
$domain = parse_url($str);
preg_match_all("/(\w+)/i", $domain["host"], $arr, PREG_PATTERN_ORDER);
$res = array_reverse($arr[0]);
echo "{$res[1]}.{$res[0]}";
 ?>
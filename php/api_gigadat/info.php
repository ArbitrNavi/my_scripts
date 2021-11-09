<?php
print_r($_REQUEST);
echo '$_POST
';
print_r($_POST);
echo '$_GET
';
print_r($_GET);

echo "ip = " . $_SERVER['HTTP_CF_CONNECTING_IP'];
echo "test";
var_dump(substr(date('U'),4));
?>
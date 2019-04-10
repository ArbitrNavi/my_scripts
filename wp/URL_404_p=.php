<?php 
// отдает 404 ответ на url типа https://site.ru/?p=123
if(isset($_GET['p'])) 
{ 
    header("HTTP/1.0 404 Not Found"); 
    header("HTTP/1.1 404 Not Found"); 
    include '404.php'; 
    exit(); 
} ?>
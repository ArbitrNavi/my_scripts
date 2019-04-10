<?php 
// отдает 404 ответ на url типа: 
// https://site.ru/?p=123 //урлы записей по ID
// https://site.ru/?С=Hiu23oiuhUO //какая то шляпа непонятная
if(isset($_GET['p']) || isset($_GET['C'])) 
{ 
    header("HTTP/1.0 404 Not Found"); 
    header("HTTP/1.1 404 Not Found"); 
    include '404.php'; 
    exit(); 
};
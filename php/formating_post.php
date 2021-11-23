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

var_dump($_POST['name']);  // '   sadfa Писаренко    !""^^^  ' (length=39)
var_dump(formating_post($_POST['name'])); // 'sadfa Писаренко    !&quot;&quot;^^^' (length=44)
?>


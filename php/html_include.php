<?php
//Получить выводимые данные

//ob_get_contents() - Возвращает содержимое буфера вывода
//ob_end_clean() - Очищает (стирает) буфер вывода и отключает буферизацию вывода
//ob_end_flush() - Сброс (отправка) буфера вывода и отключение буферизации вывода
//ob_implicit_flush() - Функция включает/выключает неявный сброс
//ob_gzhandler() - callback-функция, используемая для gzip-сжатия буфера вывода при вызове ob_start
//ob_iconv_handler() - Преобразует символы из текущей кодировки в кодировку выходного буфера
//mb_output_handler() - Callback-функция, преобразующая кодировку символов в выходном буфере
//ob_tidyhandler() - Функция обратного вызова ob_start для восстановление буфера


$string_html = "none";

// Пример функции с выводом через вставку html
function include_html(){?>
<h2>Test h2</h2>
<?php };


//пример функции с выводом через echo
function echo_html(){
    echo "<h3>Любой текст через echo </h3>";
}

ob_start();

//мои функции вывода
echo_html();
include_html();

$string_html = ob_get_contents();//получить все, что выводится
ob_end_clean();
?>

<?php

var_dump($string_html);

?>

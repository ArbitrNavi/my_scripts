<?php
//фильтрация элементов
//"<=DATE_ACTIVE_FROM" => array(false, ConvertTimeStamp(false, "FULL")),
// ">=DATE_ACTIVE_TO"   => array(false, ConvertTimeStamp(false, "FULL")),
//">DATE_ACTIVE_FROM" => $now->modify('-1 day')->format('Y-m-d H:i:s'),//дата активности начиная с вчерашнего дня
//PROPERTY_DATE - дата создания элемента
//DATE_CREATE - дата создания
//PROPERTY_NEWPRODUCT - Новинка (значение указывается по ID значения списка внутри настройки этого свойства

$now = new DateTime();
var_dump($now->modify('-1 day')->format('Y-m-d H:i:s'));
global $arrFilterNews;
$arrFilterNews = array(
     "PROPERTY_NEWPRODUCT" => 1,
);

//Пример фильтра с логикой ИЛИ
$arrFilterNews = array(
    array(
        "LOGIC" => "OR",
        array("PROPERTY_NEWPRODUCT" => 1 ),
        array(">=DATE_ACTIVE_FROM" => $now->modify('-1 day')->format('Y-m-d H:i:s')),
    ),
);

//Битрикс $arFilter — как использовать подзапросы
//Ситуация следующая — у нас есть каталог с оптовыми ценами, и есть товары с торговыми предложениями. Используем подзапросы при помощи CIBlockElement::SubQuery:

$arSubQuery = Array('IBLOCK_ID' => 33, '>CATALOG_PRICE_3' => 0);

$arSort = Array('SHOW_COUNTER' => 'DESC');
$arFilter = Array(
    'SECTION_ID' => $arResult['ID'],
    'INCLUDE_SUBSECTIONS' => 'Y',
    'PROPERTY_SALELEADER_VALUE' => 'да',
    'ACTIVE' => 'Y',
    array(
        "LOGIC" => "OR",
        array('>CATALOG_QUANTITY' => 0),
        array('PROPERTY_PRODAZA_VALUE' => 'Да'),
    ),
    array (
        "LOGIC" => "OR",
        array('>CATALOG_PRICE_3' => 0, 'IBLOCK_ID' => 6),
        array('ID' => CIBlockElement::SubQuery('PROPERTY_CML2_LINK', $arSubQuery)),
    )
);
?>
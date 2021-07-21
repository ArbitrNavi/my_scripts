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


//"Дата создания элемента"

//Значение данной даты понятно по названию. Она имеет следующий вид отображения (записи) DD.MM.YYYY HH:MI:SS, где DD - день месяца, MM - месяц, YYYY - год, HH - час (в формате 24), MI - минуты, SS - секунды. Или в php имеют формат 'd.m.Y H:i:s'.

//Соответственно для фильтрации по дате создания, надо указывать дату согласно данному формату.

//Например
$arFilter['>=DATE_CREATE'] = '19.11.2018 09:00:00';
//или
$arFilter['>=DATE_CREATE'] = date('d.m.Y H:i:s');

//Если нам надо указать диапазон даты (с 01.11.2018 00:00:00 по 19.11.2018 23:59:59)
$arFilter['>=DATE_CREATE'] = '01.11.2018 00:00:00';
$arFilter['<=DATE_CREATE'] = '19.11.2018 23:59:59';

//Или еще распространенный вариант вывести записи не старше 7 дней от сегодня.
$now = new DateTime();
$arFilter = array(">DATE_CREATE" => $now->modify('-7 day')->format('d.m.Y H:i:s'));

//"Дата активности"

//В инфоблоке у элемента предусмотрены дата начала активности "DATE_ACTIVE_FROM" и дата окончания активности "DATE_ACTIVE_TO". Т.е. элемент может быть создан в любую дату, но отображаться на сайте будет только начиная с даты начала активности и прекратит показываться после даты окончания активности (если она конечно выбрана)

//Данные даты имеют такой же формат 'd.m.Y H:i:s' и следовательно примеры выше подходят и для них.

//Например
$arFilter['>=DATE_ACTIVE_FROM'] = '19.11.2018 09:00:00';
//или
$arFilter['>=DATE_ACTIVE_FROM'] = date('d.m.Y H:i:s');

//Свойство элемента инфоблока "Дата" или "Дата/время"

//Данное свойство уже содержит другой формат даты, а именно YYYY-MM-DD HH:MI:SS или 'Y-m-d H:i:s'. Теперь рассмотрим примеры с данным свойством. Назовем его например "PROPERTY_DATE".
$arFilter['>=PROPERTY_DATE'] = '2018-11-19 09:00:00';
//или
$arFilter['>=PROPERTY_DATE'] = date('Y-m-d H:i:s');

//Если нам надо указать диапазон даты (с 01.11.2018 00:00:00 по 19.11.2018 23:59:59)
$arFilter['>=PROPERTY_DATE'] = '2018-11-01 00:00:00';
$arFilter['<=PROPERTY_DATE'] = '2018-11-19 23:59:59';
//Или еще распространенный вариант вывести записи не старше 7 дней от сегодня.
$now = new DateTime();
$arFilter = array(">PROPERTY_DATE" => $now->modify('-7 day')->format('Y-m-d H:i:s'));
?>
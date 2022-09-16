<?php
//preg_replace example
function phone_format($phone_string) {
	$pattern = '/\D/i';
	$replacement = '';
	$phone = preg_replace($pattern, $replacement, $phone_string);
	$resoult = (substr($phone, 0, 1) == "7") ? "+" . $phone : $phone;
	return $resoult; //89055063506 || +79055063506
}

//echo phone_format(' +7 (905) 506-3-506');

//Вытащить цифры из стороки
//echo preg_replace('/[^0-9]/', ' 8 (905) 506-3-506', $str);

//Обернуть найденное совпадение
$tablepress__header_tag = 'div';
$tablepress__header_class = 'tablepress__header';
$tablepress__header_start = '<' . $tablepress__header_tag . ' class="' . $tablepress__header_class . '">';
$tablepress__header_end = '1312223</' . $tablepress__header_tag . '>';

//исходный текст можно выдергивать $0 или ${0}, где цифра это номер совпадения
$table = '<h3 id="tablepress-2-name" class="tablepress-table-name tablepress-table-name-id-2">Услуги и цены</h3> <span id="tablepress-2-description" class="tablepress-table-description tablepress-table-description-id-2">любой екст</span> <table id="tablepress-2" class="tablepress tablepress-id-2" aria-labelledby="tablepress-2-name" aria-describedby="tablepress-2-description"> <caption style="caption-side:bottom;text-align:left;border:none;background:none;margin:0;padding:0;"><a href="https://tz-video.loc/wp-admin/admin.php?page=tablepress&amp;action=edit&amp;table_id=2" rel="nofollow">Изменить</a></caption> <thead> <tr class="row-1 odd"> 	<th colspan="4" class="column-1"><h3>Цены на услуги видеосъемки</h3></th> </tr> </thead> <tbody class="row-hover"> <tr class="row-2 even"> 	<td class="column-1">Услуга</td><td class="column-2">Стоимость</td><td class="column-3">Оплата</td><td class="column-4">Качество</td> </tr> <tr class="row-3 odd"> 	<td class="column-1">Видеосъёмка в формате FullHD</td><td class="column-2">1.800 руб./час (минимум 2 часа)</td><td class="column-3">В день съемки </td><td class="column-4">1920 × 1080 (FullHD)</td> </tr> <tr class="row-4 even"> 	<td class="column-1">Съёмка с воздуха</td><td class="column-2">5.000 руб./час</td><td class="column-3">После съёмки</td><td class="column-4">4096 × 3072 (4К)</td> </tr> <tr class="row-5 odd"> 	<td class="column-1">Видеосъёмка в формате 4К</td><td class="column-2">2.500 руб./час (минимум 2 часа)</td><td class="column-3">В день съемки</td><td class="column-4">4096 × 3072 (4К)</td> </tr> <tr class="row-6 even"> 	<td class="column-1">Работа над сценарием</td><td class="column-2">от 3.000 руб.</td><td class="column-3">Предоплата</td><td class="column-4">Согласно технического задания</td> </tr> <tr class="row-7 odd"> 	<td class="column-1">Фотосъёмка </td><td class="column-2">1.800 руб./час</td><td class="column-3">В день съемки</td><td class="column-4">22 Мп</td> </tr> <tr class="row-8 even"> 	<td class="column-1">Свадьбы</td><td class="column-2">14.400 руб. / 8 часов</td><td class="column-3">В день съемки</td><td class="column-4">4096 × 3072 (4К)</td> </tr> <tr class="row-9 odd"> 	<td class="column-1">Корпоративы</td><td class="column-2">14.400 руб. / 8 часов</td><td class="column-3">В день съемки</td><td class="column-4">4096 × 3072 (4К)</td> </tr> <tr class="row-10 even"> 	<td class="column-1">Детские мероприятия</td><td class="column-2">7.200 руб. / 4 часа</td><td class="column-3">В день съемки</td><td class="column-4">4096 × 3072 (4К)</td> </tr> <tr class="row-11 odd"> 	<td class="column-1">Съемка клипов</td><td class="column-2">7.200 руб. / 4 часа</td><td class="column-3">После съёмки</td><td class="column-4">4096 × 3072 (4К)</td> </tr> <tr class="row-12 even"> 	<td class="column-1">Монтаж-склейка</td><td class="column-2">От 3000 р.</td><td class="column-3">Предоплата</td><td class="column-4">Premiere PRO</td> </tr> </tbody> </table>';
$pattern = '/^[\W\w]*?<\/span>/i';
$replacement = $tablepress__header_start . '${0}' . $tablepress__header_end;
$subject = $table;
$resoult = preg_replace($pattern, $replacement, $subject);
echo $resoult;

?>
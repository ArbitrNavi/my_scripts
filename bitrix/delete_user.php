<?
// Удаление пользователей по ID
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test_admin");
?>

<?
echo "delete User last login";
?>
<hr>

<?
$i = 235; // Сколько дней назад зарегистрировался пользователей
$i2 = 135; // Сколько дней назад зарегистрировался пользователей

$s1 = strtotime("-$i day");
$s2 = strtotime("-$i2 day");
// $s2 = strtotime("today");

// echo("от " . date('d.m.Y  H:i:s', $s1)."\n");
// echo("до " . date('d.m.Y  H:i:s', $s2)."\n");

$filter = array(
	// фильтр по дате регистрации
   // "DATE_REGISTER_1" => date('d.m.Y H:i:s', $s1),
   // "DATE_REGISTER_2" => date('d.m.Y H:i:s', $s2),

	// фильтр по дате активности
	"LAST_LOGIN_1" => '01.04.2018',
	"LAST_LOGIN_2" => '23.04.2019',

   "ACTIVE" => 'Y',
);

// ограничение результатов
$arParams["NAV_PARAMS"] = array('nTopCount' => 500);


// получение списка с сортировкой по дате крайней авторизации
$elementsResult = CUser::GetList(($by="last_login"), ($order="ASC"), $filter, $arParams);

// начало нумерации
$N=1;

// перебор результатов
while ($rsUser = $elementsResult->Fetch()) 
{
	// ID пользователя
	$Uid = IntVal($rsUser["ID"]);

	// увеличивает счетчик
	    echo $N++ .') ';
	    // удаляем пользователя
if (CUser::Delete($Uid))
{
	// если удаление успешно
    echo "delete ";
}
//если не успешно - написать причину 
// else
// {
//    global $APPLICATION;
//     echo "False " . $Uid;
//     var_dump($APPLICATION->LAST_ERROR);
// }
// информация о выбранном пользователе
    echo $rsUser["LOGIN"] . " - " . $rsUser["ID"] . " - " . $rsUser["DATE_REGISTER"] . "\n <br>";
       
};

// перезагружаем страницу
echo "<script>window.location.reload();</script>";

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
?>
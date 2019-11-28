<table class="allusers">
<thead><th width="60"></th><th>Пользователь</th><th>Имя Фамилия</th><th>ID пользователя</th></thead>
<?
$filter = Array
(
"GROUPS_ID"=> Array(5)
);
$rsUsers = CUser::GetList(($by="id"), ($order="desc"), $filter);
while($arItem = $rsUsers->GetNext())
{
$FotoUser = CFile::ShowImage($arItem["PERSONAL_PHOTO"], 100, 100, "border=0", "", true);
echo "<tr><td>".$FotoUser."</td><td>".$arItem['LOGIN']."</td><td>".$arItem['NAME']."&nbsp".$arItem['LAST_NAME']."</td><td>".$arItem['ID']."</td></tr>";
}
//print_r ($rsUsers); - Раскомментировать, что бы увидеть все доступные поля
?>
</table>
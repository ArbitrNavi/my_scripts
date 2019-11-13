<?
// Автор текущего элемента
// $this_user
$arSelectFields = Array("CREATED_BY");
$res = CIBlockElement::GetList(Array(), false, false, false, $arSelectFields);

if($ar_res = $res->GetNext()) { 
        $rsUser = CUser::GetByID($ar_res["CREATED_BY"]);
        $arUser = $rsUser->Fetch();
        $this_user = $arUser;//массив с данными пользователя
    }

?>
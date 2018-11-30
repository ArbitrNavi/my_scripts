<?php
// работа с JSON строкой
if ($_GET["country"]==1) {
	echo json_encode(array('1' => "Вашингтон", "2" => "Сиэтл" ));
}elseif ($_GET["country"]==2) {
	echo json_encode(array('3' => "Париж", "4"=> "Марсель"));
}
 ?>
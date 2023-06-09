<?php
// пример тернарного оператора
$min = ($foo < $bar) ? $foo : $bar;


$code = 0;

// следующий код на первый взгляд должен выводить 'Успешно'
// однако, он выведет 'Предупреждение'
// происходит это потому что тернарное выражение вычисляется слева направо

// разберем почему так происходит
// ($code == 0 ? 'Успешно' : $code == 1 ) ? 'Предупреждение' : 'Ошибка';


// Первое выражение (то что выделено скобками) возвращает строку 'Успешно',
// далее эта строка преобразуется в булево значение - true и вычисляется второе выражение
// т.е. вычисляется уже (true) ? 'Предупреждение' : 'Ошибка';
// таким образом возвращается значение 'Предупреждение' второго (вложенного) выражения

echo $msg;

// чтобы предыдущий код работал корректно, нужно пользоваться скобками
// перепишем пример так, чтобы работал как задумано
$msg = ($code == 0) ? 'Успешно' : (($code == 1) ? 'Предупреждение' : 'Ошибка');

echo "<br>$msg<br>";


//Если переменная истина - возвращает его, если нет, то заранее переданное значение
$a1 = 'text5';
echo (($a1) ?: 10);
echo "</br>line33 <hr>";

//	Если переменная существует(isset) выводить ее, если нет, то условие
echo($a21 ?? 'anonymous');// anonymous
echo "<hr>";

echo __LINE__ . '<br>';
//	Выводит только истину
echo($a1 ? 'Выводит только истину' : null);//

echo "<hr>";
echo __LINE__ . '<br>';

//	Если $b существует = то прибавляем 1, если нет, то ставим значение 1
//	$b=1;
echo(($b) ? ++$b : 1);

echo "<hr>";
//
//function ternar($arrayTest = []){
//	var_dump($arrayTest);
//}
//
//ternar();
$arrOptions=false;
$arrOptions = ($arrOptions) ?: ['value' => 'null', 'label' => 'Выбрать'];

var_dump($arrOptions);
?>
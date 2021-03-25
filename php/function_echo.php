<?php
//тест вставки кода напрямую черзе функцию, а потом через echo

function out_code(){
    ?>

<tr>Произвольный текст вставленный напрямую</tr>

<?php
};


//out_code();
//echo "test";

$i = 0;
while ($i <= 3) {
    out_code();
    echo "test<hr>";
    $i++;
}

//for($i=0;$i<10; $i++){
//    out_code();
//    echo "test";
//};
?>
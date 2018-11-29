console.log('скрипт ajax.js'); //проверка подключения скрипта
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery

// -------------------------

    // функция которая выполняется до ответа
    function funcBefore(){
        $('#information').text('Ожидание данных...');
    }

    // функция которая выполняется после ответа
    function funcSuccess(data){
        $('#information').text(data);
    }

    $('#load').bind('click', function() {
        var admin = "Admin"; //тестовая переменная
        
        $.ajax({
            url: 'content.php', //путь до php файла
            type: 'POST', //тип отправки GET или POST
            data: ({ name: admin, number: 5 }), //какие данные будут передаваться
            dataType: 'html', //формат передаваемых данных text или html
            beforeSend: funcBefore, // функция которая будет выполнятся до того, как придет ответ
            success: funcSuccess //функция которая выполняется после ответа
        }) //ajax	
    }); //click


// ---------------------


    $('#done').bind('click', function() {
        var_name=$('#name').val();//переменная, которую передаем

        $.ajax({
            url: "check.php", //путь до php файла
            type: 'POST', //тип отправки GET || POST
            data: ({ name: var_name }), //какие данные будут передаваться
            dataType: 'html', //формат передаваемых данных html || text
            beforeSend: function() {
                $('#information').text('Ожидание данных...');
            }, //функция перед ответом
            success: function(data) {//вставляем ответ в функцию
                if (data === "Fail") {//Равно ли слову Fail
                    alert('Имя занято');
                } else {//если не равно слову Fail
                    $('#information').text(data)
                }
            } //фнукция выполняемая после ответа
        }) //ajax
    }); //click

}); //ready
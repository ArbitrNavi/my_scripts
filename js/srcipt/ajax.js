console.log('скрипт ajax.js'); //проверка подключения скрипта
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery


    $('#done').bind('click', function() {
        event.preventDefault();//убираем стандартное поведение

        // передаваемые данные
        var_name = $('input[name="name"').val(); //переменная, которую передаем
        var_phone = $('input[name="phone"').val(); //переменная, которую передаем
        var_email = $('input[name="email"').val(); //переменная, которую передаем

        // аякс
        $.ajax({
            url: "check.php", //путь до php файла
            type: 'POST', //тип отправки GET || POST
            data: ({ 
                name: var_name,
                phone: var_phone,
                email: var_email 
                }), //какие данные будут передаваться
            dataType: 'html', //формат передаваемых данных html || text
            beforeSend: function() {
                $('#information').text('Ожидание данных...');
            }, //функция перед ответом
            success: function(data) { //вставляем ответ в функцию
                if (data === "Fail") { //Равно ли слову Fail
                    alert('Имя занято');
                } else { //если не равно слову Fail
                    $('#information').text(data)
                }
            } //фнукция выполняемая после ответа
        }) //ajax
    }); //click

}); //ready
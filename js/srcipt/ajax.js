console.log('скрипт ajax.js'); //проверка подключения скрипта
//info Ajax
// async — асинхронность запроса, по умолчанию true
// cache — вкл/выкл кэширование данных браузером, по умолчанию true
// contentType — по умолчанию «application/x-www-form-urlencoded»
// data — передаваемые данные — строка иль объект
// dataFilter — фильтр для входных данных
// dataType — тип данных возвращаемых в callback функцию (xml, html, script, json, text, _default)
// global — тригер — отвечает за использование глобальных AJAX Event'ов, по умолчанию true
// ifModified — тригер — проверяет были ли изменения в ответе сервера, дабы не слать еще запрос, по умолчанию false
// jsonp — переустановить имя callback функции для работы с JSONP (по умолчанию генерируется на лету)
// processData — по умолчанию отправляемые данный заворачиваются в объект, и отправляются как «application/x-www-form-urlencoded», если надо иначе — отключаем
// scriptCharset — кодировочка — актуально для JSONP и подгрузки JavaScript'ов
// timeout — время таймаут в миллисекундах
// type — GET либо POST
// url — url запрашиваемой страницы
//
// Локальные AJAX Event'ы:
// beforeSend — срабатывает перед отправкой запроса
// error — если произошла ошибка
// success — если ошибок не возникло
// complete — срабатывает по окончанию запроса
//
// Для организации HTTP авторизации (О_о):
// username — логин
// password — пароль

jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery


    $('#done').bind('click', function(event) {
        event.preventDefault();//убираем стандартное поведение

        // передаваемые данные
        var_name = $('input[name="name"]').val(); //переменная, которую передаем
        var_phone = $('input[name="phone"]').val(); //переменная, которую передаем
        var_email = $('input[name="email"]').val(); //переменная, которую передаем

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
                console.log('Ожидание данных...');
            }, //функция перед ответом
            success: function(data) { //вставляем ответ в функцию
                    alert(data);
            } //фнукция выполняемая после ответа
        }) //ajax
    }); //click

}); //ready
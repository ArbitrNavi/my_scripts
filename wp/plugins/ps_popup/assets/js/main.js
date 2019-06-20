// custom scripts
// console.log('скрипт подключен'); //проверка подключения скрипта
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    // console.log($); //проверка работоспособности JQuery
    // console.log(jQuery.fn.jquery); //узнать версию JQuery

    if ($(document).width() > 1000) {
        // console.log('больше 1000px экран');
        // отображение попапа через 8 секунд
        pz = $('#popup_zvuk');
        pz_close = $('#popup_zvuk_close');

        pz_close.click(function() {
            pz.slideUp();

            // Проход по всем элементам с классом daily-person-id
            // с помощью jQuery each.
            $(".pz_video iframe").each(function(index, el) {
                // Для каждого элемента сохраняем значение в personsIdsArray,
                // если значение есть.
                $(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');


            });

            $("#pz_button").slideDown();

        });

        $("#pz_button").click(function() {
            pz.slideDown();
        })

        // срабатывание функции через некоторое время, один раз за сессию

        function func_pz() {
            pz.slideDown();
            // console.log('сработало через некоторое время');
            sessionStorage.setItem('pz', true); //метка о выполнении в текущей сессии
        };

        if (!sessionStorage.getItem('pz')) { //проверка выполнения в текущей сессии
            setTimeout(func_pz, 8000); //время через которое сработает
        };
    }; //ширина экрана 1000px
}); //конец ready
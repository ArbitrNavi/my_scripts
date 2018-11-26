jQuery(document).ready(function($) {


    // срабатывание функции через некоторое время, один раз за сессию

    function func_zatemnenie() {
        window.location = window.location.origin + window.location.pathname + '#zatemnenie'; // добавление хеш тега в адресную строку
        // console.log('сработало через некоторое время')
        sessionStorage.setItem('zatemnenie', true); //метка о выполнении в текущей сессии
    };

    if (!sessionStorage.getItem('zatemnenie')) { //проверка выполнения в текущей сессии
        setTimeout(func_zatemnenie, 300000); //время через которое сработает
    };

});
// custom scripts
console.log('скрипт подключен'); //проверка подключения скрипта
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery
    console.log(jQuery.fn.jquery); //узнать версию JQuery


    // $('#iframe_ohota_na_tunca')
    function lazy_iframe(id, src) {
        setTimeout(function() {
            document.getElementById(id).src = src;
        }, 4000)
        // console.log(id);
    };

    lazy_iframe('iframe_ohota_na_tunca','https://www.youtube.com/embed/t3lkR4iNw94?controls=1&showinfo=0&rel=0');
    lazy_iframe('iframe_priklushenie_1','https://www.youtube.com/embed/t3lkR4iNw94?controls=1&showinfo=0&rel=0');
    lazy_iframe('iframe_priklushenie_2','https://www.youtube.com/embed/t3lkR4iNw94?controls=1&showinfo=0&rel=0');
    lazy_iframe('iframe_footer_maps','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6597319.057859022!2d-5.35975!3d36.158105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x37c06d793e231de0!2sAlcaidesa+Marina!5e0!3m2!1sru!2sus!4v1554308443525!5m2!1sru!2sus');
    
        setTimeout(function() {
            document.getElementById('iframe_front_bg_video').src = 'https://www.youtube.com/embed/c0-ioAXCCUo?controls=0&showinfo=0&rel=0&autoplay=1&mute=1&loop=1&playlist=c0-ioAXCCUo';
        }, 1000)
		// console.log('iframe_front_bg_video');

    // console.log('iframe');

}); //конец ready
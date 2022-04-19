jQuery(document).ready(function ($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    $('body').prepend('<div id="fb-root"></div>');

    // всплывашка поделиться
    $(document).on('click', '.ivan_share img, .ivan_share span, .button-share, .button-to-click', function (event) {
        event.preventDefault();

        $(this).parent().find('.wrap-window-share').slideToggle(200);
    });
}); //конец ready


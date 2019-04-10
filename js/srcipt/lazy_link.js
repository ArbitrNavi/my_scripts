jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках

// Задержка 5 секунд перед открытием ссылки
    $('.sidebar_dogovor_menu a').click(function(e) {
        e.preventDefault();

		$('.sidebar_dogovor_menu').slideUp();//что то скрываем
		$('.sidebar_dogovor_popup').slideDown();//что то отображаем

        var url = $(this).attr('href');
        setInterval(function() {
            window.location = url;
        }, 5000);//время задержки
    });

});
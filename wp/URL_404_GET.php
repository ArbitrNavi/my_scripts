<?php 
// отдает 404 ответ на url типа: 
// https://site.ru/?p=123 //урлы записей по ID
// https://site.ru/?С=Hiu23oiuhUO //какая то шляпа непонятная
// можно использовать URI страницы, кгда нужно отдавать 404 на ненужные страницы
// $_SERVER['REQUEST_URI']=== '/elementor-popup/uznat-stoimost/'

if ( !is_user_logged_in() ) {//если не авторизован

	if(isset($_GET['p']) || isset($_GET['C'])) //существования GET запросов
	{ 
		wp_redirect( home_url( '/404/' ) );
	    exit(); 
	};
};

// 404 на страницы поиска - кроме админки
if( !is_admin() ){//если в разделе админки

    if(isset($_GET['s'])) //существования GET запросов
    {
        wp_redirect( home_url( '/404/' ) );
        exit();
    };

};
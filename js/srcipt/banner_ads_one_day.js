jQuery(document).ready(function($){

// рекламный банер
// Баннер должен прятаться с Fade-out эффектом при нажатии на .banner-close
// Баннер должен появляться не сразу, а только если пользователь начинает скроллить вниз (scrollTop == 400). Появляться с эффектом Fade-in

// Дополнительные условия:

// Если пользователь закрыл баннер, он не появляется снова в процессе текущей сессии. (т.е. если он допустим вернулся с внутренней страницы обратно на главную)
// Если пользователь закрыл баннер, он не должен ему отображаться в течении дня (24 часов), на следующий день снова появляться



ifclick=true;//было ли нажатие
Data = new Date();//текущая дата
Day = Data.getDate();//текущий день

// условие отвечал раньше или нет
// есть ли данные в сессии
if (!sessionStorage.getItem('banner_front_page')) {

// console.log(sessionStorage.getItem('banner_front_page'));
// console.log(ifclick);


// close
	$('.banner-close').click(function(){//клик по кнопке закрытия
		$('.homepage-banner').fadeOut();//скрыть модальные блок
		// console.log('click')
		sessionStorage.setItem('banner_front_page', true);//добавить данные в сессию
		ifclick=false;//кнопка нажалась

		localStorage.setItem('banner_front_page_data', Day);//добавить данные в локал стораж(не стирается после переоткрытия браузера)
		// localStorage.setItem('banner_front_page_data', '22');

	});//.клик по кнопке закрытия

// scroll
	    $(window).scroll(function(){//прокручивание
	        if(
	        	$(this).scrollTop()>400//прокрутка экрана
	        	&&ifclick//было ли закрыто ранее
	        	&&!sessionStorage.getItem('banner_front_page')//если нет записи в сессии
	        	||localStorage.getItem('banner_front_page_data')<Day// ИЛИ есть запись в локал сторадж меньше чем текущий день
	        ){//условие при котором отображается модальный блок
	            $('.homepage-banner').fadeIn();//отображение модального блоко
	        };
	    });//.прокручивание
};
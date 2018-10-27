jQuery(document).ready(function($){

// рекламный банер
// Баннер должен прятаться с Fade-out эффектом при нажатии на .banner-close
// Баннер должен появляться не сразу, а только если пользователь начинает скроллить вниз (scrollTop == 400). Появляться с эффектом Fade-in

// Дополнительные условия:

// Если пользователь закрыл баннер, он не появляется снова в процессе текущей сессии. (т.е. если он допустим вернулся с внутренней страницы обратно на главную)
// Если пользователь закрыл баннер, он не должен ему отображаться в течении дня (24 часов), на следующий день снова появляться



ifclick=true;
Data = new Date();
Day = Data.getDate();

// условие отвечал раньше или нет
if (!sessionStorage.getItem('banner_front_page')) {

// console.log(sessionStorage.getItem('banner_front_page'));
// console.log(ifclick);


// close
	$('.banner-close').click(function(){
		$('.homepage-banner').fadeOut();
		// console.log('click')
		sessionStorage.setItem('banner_front_page', true);
		ifclick=false;

		localStorage.setItem('banner_front_page_data', Day);
		// localStorage.setItem('banner_front_page_data', '22');

	});

// scroll
	    $(window).scroll(function(){
	        if($(this).scrollTop()>400&&ifclick&&!localStorage.getItem('banner_front_page_data')||localStorage.getItem('banner_front_page_data')<Day){
	            $('.homepage-banner').fadeIn();
	        };
	    });
};
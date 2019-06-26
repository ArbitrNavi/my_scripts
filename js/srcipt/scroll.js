jQuery(document).ready(function($){
// скролл документа
// scroll
	    $(window).scroll(function(){
	        if($(this).scrollTop()>400){
	        	// тут код писать...
	        };
	    });
// .scroll

// скролл вверх по нажатию
$('#toTop').click(function(e) {
	e.preventDefault();
 	$('body,html').animate({scrollTop:0},800);
});


// разрешение экрана:
width=screen.width; // ширина  
height=screen.height; // высота

// размер клиентской части окна браузера:
// ширина  
width=document.body.clientWidth; 
$(window).width()

// высота
height=document.body.clientHeight; 
$(window).height()

};
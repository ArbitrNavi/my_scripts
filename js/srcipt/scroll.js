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
$('#toTop').click(function() {
 	$('body,html').animate({scrollTop:0},800);
});

};
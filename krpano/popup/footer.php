    <script>
   	
		$(document).ready(function() {
		    $(".owl-carousel").owlCarousel({
		        items:1,
		        nav:false,
		        dots:false,
		        autoplay: true,
		        autoplayTimeout:3000,
		        loop:true,
		        responsive:{
		        0:{
		            items:1,
		        },
		        600:{
		            items:1,
		        },
		        1000:{
		            items:1,
		            
		        }
		    }
		    });

	    $('.popup_img')
		    .wrap('<span style="display:inline-block"></span>')
		    .css('display', 'block')
		    .parent()
		    .zoom();

		});

		$('#btn_left').click(function(){
		    $('.owl-prev').trigger('click');
		});

		$('#btn_right').click(function(){
		    $('.owl-next').trigger('click');
		});

		  
		  // document.getElementById('player').play();

		$('body').mouseleave(function(){
		  // document.getElementById('player').pause();
		  // document.getElementById('player2').pause();
		  // console.log('Вышел за границы');
		});
    </script>

</body>

</html>
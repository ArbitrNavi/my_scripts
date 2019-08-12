// развертывание на весь экран
$('#krpanoSWFObject div div ').on("click","div:eq(127)",(function(){   
        console.log('full screen');
	$(this).addClass('fullscreen');

	if (document.fullscreenElement) {
    document.exitFullscreen();
   } else {
    document.documentElement.requestFullscreen();
   }
}));
(function($) {
    $(".youtube").each(function() {
        $(this).css('background-image', 'url(https://i.ytimg.com/vi/' + this.id + '/hqdefault.jpg)'); //фоновое изображение из видео ролика

        //кнопка плей
        $(this).append('<div class="play"><svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#212121" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg></div>');


        $(document).delegate('#' + this.id, 'click', function() {
            var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
            if ($(this).data('params')) iframe_url += '&' + $(this).data('params');

            var iframe = $('<iframe/>', { 'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })

            $(this).replaceWith(iframe); //заменяем содержимое
        });
    });

})(jQuery)
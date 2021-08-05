<?php include ('header.php'); ?>
<script>
            
            $(function() {
          $('a.js-fullscreen').click(function(e) {
            e.preventDefault();
            $('.spritespin').spritespin('api').requestFullscreen();
          });
          $('.spritespin').spritespin({
            source: SpriteSpin.sourceArray('<?php echo dirname($_SERVER['PHP_SELF']) ?>/img/{frame}.jpg', { frame: [31,33], digits: 1 }),
            width: 540,
            height: 410,
            sense: -1,
            animate: true,
            frameTime:200,
          });
        
});
</script>
    <div class="content">
        <div class="content_left">
            <p class="cl_title">Нож гитлерюгенда</p>
            <div class="content_slider">
<div class="cs_container_img">

<div class="spritespin"></div>

</div>
            </div>
               <div class="cl_logo">
                    <p>ГБОУ Школа №491</p>
                </div>
        </div>
        <div class="content_right">
            <div class="content_text">
                <p>Холодное оружие особой конструкции и внешней формы, вручавшееся членам юношеских подразделений организации гитлерюгенд в качестве знака отличия за усердие в учёбе и с целью подчеркнуть привилегированность и принадлежность их владельцев к определённой военизированной элитной группе. Символ воспитания культа войны в немецком обществе.</p>
                <p><img src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/img/156.jpg" alt=""></p>
            </div>
            <div class="content_audio" >
                <audio id="player" controls autoplay>
                    <source src="audio/3.wav" type="audio/mpeg">
                    Тег audio не поддерживается вашим браузером.
                </audio>
                <img class="popup_logo" src="img/m491.png">
            </div>
        </div>
    </div>

<?php include ('footer.php'); ?>
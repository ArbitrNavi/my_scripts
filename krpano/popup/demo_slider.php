<?php include ('header.php'); ?>

    <div class="content">
        <div class="content_left wrap_slider ">
            <p class="cl_title">Входная группа музея</p>
            <div class="content_slider">
                <div class="cs_container_img">
                    
                    <div class="owl-carousel">
                        <div><img src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/img/1.jpg" alt=""></div>
                        <div><img src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/img/2.jpg" alt=""></div>
                        <div><img src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/img/3.jpg" alt=""></div>
                    </div>

                </div>
                <div class="cs_control">
                    <div id="btn_left" class="cs_btn btn_left"></div>

                    <div id="btn_right" class="cs_btn btn_right"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="content_audio" style="display: none;">
        <audio id="player" controls autoplay loop>
            <source src="audio/more.mp3" type="audio/mpeg">
            Тег audio не поддерживается вашим браузером.
        </audio>
    </div> -->

<?php include ('footer.php'); ?>
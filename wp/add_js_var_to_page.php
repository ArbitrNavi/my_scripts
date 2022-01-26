<?php
//Добавить переменную js на фронт
add_action( 'wp_enqueue_scripts', 'my_js_data', 99 );
function my_js_data(){
    wp_localize_script( 'jquery', 'my_js_data', array(
        'post_type' => get_post_type(),
    ) );
} ?>
<?php
// Обрабатывает шорткод в произвольном поле

 echo apply_filters( 'the_content', get_sub_field('text', $postid) ); ?>
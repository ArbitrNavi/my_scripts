<?php
/**
 * отключает переход на ssl, после отключения в админке - можно удалить эту часть кода
 * Remove clearfy redirect from http to https
 */
add_filter( 'clearfy_redirect_from_http_to_https', '__return_false' );

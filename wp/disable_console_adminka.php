<?php 
 // Отключаем админ панель для всех, кроме администраторов. 
if (!current_user_can('administrator'))
  show_admin_bar(false);
endif;

// Отключаем консоль
add_action('admin_init', function() {
  if (current_user_can('subscriber')) {
      wp_redirect(site_url());
      die();
  }
});
?>
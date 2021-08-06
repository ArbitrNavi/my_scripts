<?php
// сократить описание в админ панеле для категорий до 150 символов

add_action('admin_head-edit-tags.php', 'admin_pravka_tegov');
function admin_pravka_tegov() {
    add_filter('get_terms', 'admin_obrezka_opisanii_rubrik', 10, 2);
}
function admin_obrezka_opisanii_rubrik($termini, $taxonomiya) {
    if ('category' != $taxonomiya[0]) :
        return $termini;
    endif;
    foreach ($termini as $key => $termin) :
        if (!empty($termini[$key]->description)) :
          $termini[$key]->description = substr($termin->description, 0, 150) . '[...]';
        endif;
    endforeach;
    return $termini;
}
?>
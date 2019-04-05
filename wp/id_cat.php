<?php 
// id текущей категории
    $queried_object = get_queried_object();
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id;

// id категории к которой принадлежит текущая запись
    $infocat = get_the_category();
    $catID = $infocat[0]->cat_ID;
    var_dump($catID);
 ?>
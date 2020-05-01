<?php 
// Шорткод p3d
function p3d_func( $atts ){

$i=1;
$elem = $atts['ids'];

$elem_arr = explode(",", $elem);
foreach ($elem_arr as  $key => $value) {
    $elem_arr[$key] = 'id' . $value . '.id';
}

$elem = implode(',',$elem_arr);

// $selectRows = get_field('p3d','option')[$elem];
$elem_one="";
if (array_key_exists('width',$atts)) {
    if ($atts['width'] === '100') {
        $elem_one = "style = 'width:auto;'";
    }
};
if ($atts['ids']==='all') {
    $elem_all=false;
}else{
    $elem_all=true;
}


// check if the repeater field has rows of data
if( have_rows('p3d','option') ):

$resoult = '
<div class="portfolio-3d">
    <!-- <p class="p3d_title">Наше портфолио</p>' . count($elem) . '-->
    <div class="p3d_container">';

    // loop through the rows of data
    while ( have_rows('p3d','option') ) : the_row();
// var_dump($elem);
// var_dump($i);
// var_dump($elem_all);



if (strpos($elem,'id' . $i . '.id')===false && $elem_all) {
    
    }else{

        $title = get_sub_field('title');
        $link = get_sub_field('link');
        $img = get_sub_field('img');

        // <div class="p3d_item">
        $resoult .= '<!-- p3d_item -->
        <div class="p3d_item" ' . $elem_one . '>
            <div class="p3d_container_img">
                <img src="'. $img["sizes"]["480x241"] . '" class="p3d_img" alt="'. $title.'" title="'. $title.'">
            </div>
            <a href="'. $link .'" target="_blank" class="p3d_item_title">' . $title . '</a>
        </div>
        <!-- .p3d_item -->';
        }
$i++;
    endwhile;


$resoult .= '
    </div>
    <!-- .p3d_container -->
</div>';

else :

    // no rows found

endif;

    return $resoult;
};

add_shortcode('p3d', 'p3d_func'); ?>
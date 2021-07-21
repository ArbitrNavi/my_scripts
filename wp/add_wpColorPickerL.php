<?
//исправление ошибки wpColorPickerL10n is not defined
//в файл functions.php вашей темы добавьте этот код,
if( is_admin() ){ add_action( 'wp_default_scripts', 'wpmm_custom_scripts' ); function wpmm_custom_scripts( $scripts ){ $scripts->add( 'wp-color-picker', "/wp-admin/js/color-picker-suffix.js", array( 'iris' ), false, 1 ); did_action( 'init' ) && $scripts->localize( 'wp-color-picker', 'wpColorPickerL10n', array( 'clear' => __( 'Clear' ), 'clearAriaLabel' => __( 'Clear color' ), 'defaultString' => __( 'Default' ), 'defaultAriaLabel' => __( 'Select default color' ), 'pick' => __( 'Select Color' ), 'defaultLabel' => __( 'Color value' ), ) ); } }
?>

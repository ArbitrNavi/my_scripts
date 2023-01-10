<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="wrap">
		<div class="header__info">
			<p class="header__title">Header</p>
		</div>
		<?php
		wp_nav_menu([
				'theme_location'  => 'header_1',
				'container_class' => 'header__menu', // css-класс блока div
				'menu_class'      => 'header__menu-ul',
				'depth'           => 1, // количество уровней вложенности
		]);
		?>
	</div>
</header>

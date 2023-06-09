<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>Мобильное меню v1</title>
</head>
<body style="background: green">
<!--icon close-->
<!--<svg viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">&lt;!&ndash;! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. &ndash;&gt;-->
<!--	<path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>-->
<!--</svg>-->


<!--icon-->
<div class="menu__burger_wrap_img" id="burger-menu">
	<svg class="menu__burger_img-open" alt="меню" title="меню" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
		<path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/>
	</svg>
	<svg class="menu__burger_img-close" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">&lt;!&ndash;! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. &ndash;&gt;
		<path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
	</svg>
</div>


<!--menu-->
<div class="my_mobile_menu" id="my_mobile_menu">
	<ul>
		<li><a href="#">Цены</a></li>
		<li><a href="#">Обучение</a></li>
		<li><a href="#">Секции</a></li>
		<li><a href="#">Контакты</a></li>
		<li><a href="#">Акции</a></li>
		<li><a href="#">О нас</a></li>
	</ul>
</div>


<?php
//for wp

// This theme uses wp_nav_menu() in one location.
//register_nav_menus(
//		array(
//				'mobile' => 'Мобильное меню',
//		)
//);
//
//for wp
//wp_nav_menu([
//		'container_class' => 'my_mobile_menu',
//		'container_id' => 'my_mobile_menu',
//		'theme_location' => 'mobile',
//		'depth'          => 0, // количество уровней вложенности
//		'items_wrap'     => '<ul class="mobile__menu__list">%3$s</ul>'
//]);
?>

<style>
	:root {
		--mm-btn-bg: none;
		--mm-btn-color: rgb(255, 255, 255);

		--mm-bg: rgba(0, 0, 0, 0.6);
		--mm-color: #ffffff;
		--mm-color-hover: rgba(2, 2, 2, 0.46);
		--mm-font-size: 27px;
	}

	.menu__burger_wrap_img {
		position: relative;
		display: none;
		background: var(--mm-btn-bg);
		cursor: pointer;
		width: 50px;
		height: 50px;
	}

	.menu__burger_wrap_img svg {
		fill: #ffffff;
		width: 100%;
		height: 100%;
		object-fit: contain;
		object-position: center;
	}

	.menu__burger_wrap_img svg {
		fill: var(--mm-btn-color);
	}

	.menu__burger_img-close {
		display: none;
	}

	.menu__burger_img-open {
		display: block;
	}

	.menu__burger_wrap_img.close .menu__burger_img-open {
		display: none;
	}

	.menu__burger_wrap_img.close .menu__burger_img-close {
		display: block;
	}

	.my_mobile_menu {
		position: fixed;
		z-index: 10;
		top: 62px;
		left: 0;
		display: none;
		visibility: hidden;
		min-width: 100%;
		height: 0;
		min-height: 100%;
		padding-top: 20px;
		transition: all 0.3s ease-in-out;
		text-align: center;
		opacity: 0;
	}

	.my_mobile_menu ul {
		display: flex;
		align-items: flex-end;
		flex-direction: column;
		justify-content: flex-start;
		margin-left: auto;
		padding-right: 20px;
		padding-left: 0;
		list-style: none;
		width: 100%;
		box-sizing: border-box;
	}

	.my_mobile_menu li:not(:last-child) {
		margin: 0 0 10px;
	}

	.my_mobile_menu.overlay {
		visibility: visible;
		padding-top: 30px;
		opacity: 1;
		background: rgba(0, 0, 0, 0.8);
	}

	.my_mobile_menu.overlay a {
		font-size: var(--mm-font-size);
		text-decoration: none;
		color: #ffffff;
	}

	.my_mobile_menu a:focus,
	.my_mobile_menu a:hover {
		color: var(--mm-color-hover);
	}

	@media only screen and (max-width: 1720px) {
		.menu__burger_wrap_img {
			display: block;
		}

		.my_mobile_menu {
			display: block;
		}

	}
</style>

<script>
	var burgerMenu = document.getElementById('burger-menu');
	var overlay = document.getElementById('my_mobile_menu');
	burgerMenu.addEventListener('click', function () {
		this.classList.toggle("close");
		overlay.classList.toggle("overlay");
	});
</script>
</body>
</html>
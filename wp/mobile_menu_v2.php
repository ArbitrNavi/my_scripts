<?php
//add fot functions.php
register_nav_menus(array(
		'mobile' => 'Мобильное меню',
));
?>

<div class="mobile-header">
	<div class="mobile-header__wrap">
		<div class="mobile-header__logo">
			<img src="URL_LOGO" alt="Логотип" title="Логотип">
		</div>
		<div class="mobile-header__name">
			<p class="mobile-header__title">ТАМАРА</p>
			<p class="mobile-header__description">РЕКЛАМНОЕ АГЕНСТВО</p>
		</div>
		<div class="menu-header__info">
			<a href="tel:88006005079" class="menu-header__tel">8-800-600-50-79</a>
			<a href="mailto:topzvuk2010@gmail.com" class="menu-header__email">topzvuk2010@gmail.com</a>
		</div>
		<div class="menu-header__btn">
			<div class="menu-header__icons" id="burger-menu">
				<svg class="menu-header__icons-open" alt="меню" title="меню" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
					<path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/>
				</svg>
				<svg class="menu-header__icons-close" alt="меню" title="меню" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">&lt;!&ndash;! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. &ndash;&gt;
					<path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
				</svg>
			</div>
		</div>
	</div>
</div>
<div class="mobile-block" id="mobile-block">
	<div class="mobile-block__wrap">
		<?php
		wp_nav_menu([
				'container_class' => 'mobile-block__menu',
				//		'container_id'    => '',
				'theme_location'  => 'mobile',
				'depth'           => 1, // количество уровней вложенности.mobile-block
				'items_wrap'      => '<ul class="mobile-block__list">%3$s</ul>'
		]);
		?>
		<div class="mobile-block__info">
			<p class="mobile-block__text">Рекламное агентство<br>полного цикла</p>
			<p class="mobile-block__text">Россия г.Москва<br>ул. 3-я Владимировская д.6</p>
			<p class="mobile-block__text">
				<a href="tel:88006005079" class="mobile-block__tel">8-800-600-50-79</a>
				<a href="mailto:topzvuk2010@gmail.com" class="mobile-block__email">topzvuk2010@gmail.com</a>
			</p>
		</div>
	</div>
</div>
<style>

	/*mobile-header*/
	:root {
		--mobile-padding: 10px;

		--mh-height: 60px;
		--mh-bg: #308ceb;
		--mh-color: #ffffff;

		--mh__logo-width: 50px;
		--mh__title-fontsize: 26px;
		--mh__description-fontsize: 10px;
		--mh__tel-fontsize: 18px;
		--mh__email-fontsize: 12px;

		/* mobile-block */
		--mb__icon-bg: #308ceb;
		--mb__icon-color: rgb(255, 255, 255);

		--mb-color: #ffffff;
		--mb-color-hover: rgba(2, 2, 2, 0.46);
		--mb-fontsize: 16px;

		--mb__text-fontsize: 14px;
		--mb__email-fontsize: 12px;
	}

	.mobile-header *,
	.mobile-block * {
		margin: 0;
		padding: 0;
	}

	.mobile-header {
		display: none;
		position: fixed;
		z-index: 10;
		top: 0;
		left: 0;
		box-sizing: border-box;
		width: 100%;
		height: var(--mh-height);
		color: var(--mh-color);
		background-color: var(--mh-bg);
	}

	.mobile-header__wrap {
		display: flex;
		justify-content: space-between;
		padding: var(--mobile-padding);
		width: 100%;
		height: 100%;
		margin: 0 auto;
		box-sizing: border-box;
	}

	.mobile-header__wrap > div {
	}

	.mobile-header__logo {
		width: var(--mh__logo-width);
		height: 100%;
		margin-right: 10px;
	}

	.mobile-header__logo img {
		width: 100%;
		height: 100%;
		vertical-align: baseline;
		object-fit: contain;
		object-position: center;
	}

	.mobile-header__title {
		font-size: var(--mh__title-fontsize);
		font-weight: bold;
		line-height: var(--mh__title-fontsize);
	}

	.mobile-header__description {
		font-size: var(--mh__description-fontsize);
		line-height: var(--mh__description-fontsize);
	}

	.mobile-header__name {
		display: flex;
		flex-direction: column;
		justify-content: space-around;
	}

	.menu-header__info {
		margin-right: 10px;
		display: flex;
		margin-left: auto;
		flex-direction: column;
		justify-content: space-between;
	}

	.menu-header__info a {
		display: block;
		color: var(--mh-color);
	}

	.menu-header__tel {
		font-size: var(--mh__tel-fontsize);
		line-height: var(--mh__tel-fontsize);
		text-decoration: none;
	}

	.menu-header__email {
		font-size: var(--mh__email-fontsize);
		font-weight: 100;
		line-height: var(--mh__email-fontsize);
	}

	.menu-header__icons {
		position: relative;
		width: 40px;
		height: 100%;
		cursor: pointer;
		background: none;
	}

	.menu-header__icons svg {
		width: 100%;
		height: 100%;
		fill: #ffffff;
		object-fit: contain;
		object-position: center;
	}

	.menu-header__icons svg {
		fill: var(--mb__icon-color);
	}

	.menu-header__icons-close {
		display: none;
	}

	.menu-header__icons-open {
		display: block;
	}

	.menu-header__icons.close .menu-header__icons-open {
		display: none;
	}

	.menu-header__icons.close .menu-header__icons-close {
		display: block;
	}

	/* block visible menu */
	.mobile-block {
		position: fixed;
		display: none;
		z-index: 10;
		top: var(--mh-height);
		right: 0;
		visibility: hidden;
		width: 300px;
		transition: all 0.3s ease-in-out;
		opacity: 0;
	}

	.mobile-block__wrap {
		width: 100%;
		padding-bottom: var(--mobile-padding);
	}

	.mobile-block__list {
		margin-left: auto;
		padding-left: 0;
		list-style: none;
		width: 100%;
		box-sizing: border-box;

	}

	.mobile-block__list li {
		list-style: none;
		text-align: left;
	}

	.mobile-block li a {
		display: block;
		padding: var(--mobile-padding);
		font-size: var(--mb-fontsize);
		text-decoration: none;
		color: #ffffff;
		border-bottom: 2px solid;
	}


	.mobile-block__info {
		padding: 0 var(--mobile-padding);
	}

	.mobile-block__text {
		text-align: left;
		color: var(--mb-color);
		margin-top: var(--mobile-padding);
		font-size: var(--mb__text-fontsize);
	}

	.mobile-block__text a {
		color: var(--mb-color);
		display: block;
		text-decoration: none;
	}

	.mobile-block__tel {
	}

	.mobile-block__email {
		font-size: var(--mb__email-fontsize);
	}

	.mobile-block.mobile-block_active {
		visibility: visible;
		opacity: 1;
		max-height: calc(100% - var(--mh-height));
		overflow-y: auto;
		background: var(--mb__icon-bg);
	}

	.mobile-block.mobile-block_active li a:hover,
	.mobile-block a:focus,
	.mobile-block a:hover {
		color: var(--mb-color-hover);
	}

	@media only screen and (max-width: 1200px) {
		.mobile-header,
		.mobile-block {
			display: block;
		}
	}
</style>

<script>
	var burgerMenu = document.getElementById('burger-menu');
	var overlay = document.getElementById('mobile-block');
	burgerMenu.addEventListener('click', function () {
		this.classList.toggle("close");
		overlay.classList.toggle("mobile-block_active");
	});
</script>
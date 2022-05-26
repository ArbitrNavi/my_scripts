<style>
/* sub-menu */
	.menu__list .menu-item-has-children {
		position: relative;
	}

	.menu__list .menu-item-has-children:hover .sub-menu {
		display: flex;
	}

	.menu__list .sub-menu {
		position: absolute;
		z-index: 10;
		top: 20px;
		left: 0;
		/*display: flex;*/
		display: none;
		flex-wrap: wrap;
		justify-content: space-between;
		box-sizing: border-box;
		width: 600px;
		padding: 20px;
		background: #ffffff;
	}

	.menu__list .sub-menu li {
		width: calc(50% - 4px);
		margin: 2px;
	}

	.menu__list .sub-menu li a {
		font-size: 14px;
		display: block;
		box-sizing: border-box;
		padding: 5px;
		text-transform: none;
	}

	.menu__list .sub-menu li a:hover {
		background: #e3e3e3;
	}

	@media (max-width: 1320px) {
		.menu__list .sub-menu {
			right: 0;
			left: auto;
		}
	}

	@media (max-width: 1080px) {
		.menu__list .menu-item-has-children:hover .sub-menu {
			display: none;
		}
	}.
</style>
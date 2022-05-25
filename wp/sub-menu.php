<style>
	.menu-item-has-children {
		position: relative;
	}

	.menu-item-has-children:hover .sub-menu {
		display: flex;
	}

	.menu_header_ul .sub-menu {
		position: absolute;
		top: 17px;
		left: 0;
		display: none;
		flex-wrap: wrap;
		justify-content: space-between;
		box-sizing: border-box;
		width: 600px;
		padding: 20px;
		background: silver;
	}

	.menu_header_ul .sub-menu li {
		width: calc(50% - 10px);
		margin-top: 10px;
	}

	.menu_header_ul .sub-menu li a {
		font-size: 14px;
		display: block;
		box-sizing: border-box;
	}
</style>
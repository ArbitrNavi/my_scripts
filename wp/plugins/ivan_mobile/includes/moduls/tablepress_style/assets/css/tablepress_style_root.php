<style>
	:root {
		--tb-table-color: <?php echo (get_field('tb-table-color', 'options'))?: "#000000"; ?>;
		--tb-border-color: <?php echo (get_field('tb-border-color', 'options'))?: "rgba(0, 0, 0, 0.2)"; ?>;
		--tb-border-radius: <?php echo (get_field('tb-border-radius', 'options'))?: "20"; ?>px;

		--tb-table-mt: <?php echo (get_field('tb-table-mt', 'options'))?: "20"; ?>px;
		--tb-table-mb: <?php echo (get_field('tb-table-mb', 'options'))?: "20"; ?>px;
		--tb-table-name-bg: <?php echo (get_field('tb-table-name-bg', 'options'))?: "#308CEB"; ?>;
		--tb-table-name-color: <?php echo (get_field('tb-table-name-color', 'options'))?: "#ffffff"; ?>;
		--tb-table-name-size: <?php echo (get_field('tb-table-name-size', 'options'))?: "24"; ?>px;
		--tb-table-description-size: <?php echo (get_field('tb-table-description-size', 'options'))?: "16"; ?>px;

		--tb-header-bg: <?php echo (get_field('tb-header-bg', 'options'))?: "#eaf3fa"; ?>;
		--tb-header-color: <?php echo (get_field('tb-header-color', 'options'))?: "#000000"; ?>;

		--tb-tr-bg: <?php echo (get_field('tb-tr-bg', 'options'))?: "rgba(0, 0, 0, 0)"; ?>;
		--tb-tr-odd-bg: <?php echo (get_field('tb-tr-odd-bg', 'options'))?: "rgba(255, 255, 255, 0.05)"; ?>;
		--tb-tr-bg-hover: <?php echo (get_field('tb-tr-bg-hover', 'options'))?: "rgba(255, 193, 7, 0.3)"; ?>;

		--tb-img-fire: url("data:image/png;base64,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");
	}

	<?php if (get_field('tb-td_is-icon', 'options')) { ?>
	.tablepress td span {
		position: absolute;
		right: 0;
		bottom: 0;
		display: block;
		width: 39px;
		height: 36px;
		content: '';
		background: var(--tb-img-fire) no-repeat center top / contain;
	}
	<?php } ?>
</style>

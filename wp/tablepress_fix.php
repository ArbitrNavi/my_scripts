<?php
//fix tablepress

?>


<style>
	/* убрать закругленные края у таблицы */
	.tablepress thead tr th:not(:first-child, :last-child) {
		border-radius: 0 !important;
	}

	.tablepress thead tr th:first-child {
		border-radius: 20px 0 0 0 !important;
	}

	.tablepress thead tr th:last-child {
		border-radius: 0 20px 0 0 !important;
	}

	.tablepress thead p {
		text-indent: 0;
	}

</style>

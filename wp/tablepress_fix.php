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


	/*адаптация таблицы*/
	/*добавить закругления в других ячеек */
	.tablepress-id-1 .column-3,
	.tablepress-id-1 .column-4 {
		display: none;
	}

	.tablepress-id-1 thead tr th.column-2 {
		border-radius: 0 20px 0 0 !important;
	}

	.tablepress tbody tr:last-child .column-2 {
		border-radius: 0 0 10px 0;
	}

</style>

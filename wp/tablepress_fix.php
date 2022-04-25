<?php
//fix tablepress

// фильтр для заголовков таблицы
add_filter('tablepress_print_name_html_tag', 'tablepress_print_name_html_tag_function', 10, 1);
function tablepress_print_name_html_tag_function($str) {
	$str = 'h3';
	return $str;
}

?>


<style>
	:root {
		--my-tablepress-radius: 20px;
	}

	/* убрать закругленные края у таблицы */
	.tablepress thead tr th:not(:first-child, :last-child) {
		border-radius: 0 !important;
	}

	.tablepress thead tr th:first-child {
		border-radius: var(--my-tablepress-radius) 0 0 0 !important;
	}

	.tablepress thead tr th:last-child {
		border-radius: 0 var(--my-tablepress-radius) 0 0 !important;
	}

	.tablepress thead p {
		text-indent: 0;
	}

	/*правка для colspan */
	.tablepress th[colspan]:not([colspan='1']) {
		border-radius: var(--my-tablepress-radius) var(--my-tablepress-radius) 0 0 !important;
	}


	/* @media */
	/*адаптация таблицы*/
	/*добавить закругления для первых двух ячеек, другие ячейки скрыть*/
	.tablepress th:not(.column-1):not(.column-2),
	.tablepress td:not(.column-1):not(.column-2) {
		display: none !important;
	}

	.tablepress{
		word-break: break-all;
	}

	.tablepress thead tr th.column-2 {
		border-radius: 0 var(--my-tablepress-radius) 0 0 !important;
	}

	.tablepress tbody tr:last-child .column-2 {
		border-radius: 0 0 var(--my-tablepress-radius) 0;
	}

</style>

<?php
if ( ! class_exists( 'WP_List_Table' ) ) :
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
endif;
// расширять класс нужно после или во время admin_init
// класс удобнее поместить в отдельный файл.

class Example_List_Table extends WP_List_Table {

	function __construct() {
		parent::__construct( array(
				'singular' => 'log',
				'plural'   => 'logs',
				'ajax'     => false,
		) );

		$this->bulk_action_handler();

		// screen option
		add_screen_option( 'per_page', array(
				'label'   => 'Показывать на странице',
				'default' => 20,
				'option'  => 'logs_per_page',
		) );

		$this->prepare_items();

		add_action( 'wp_print_scripts', [ __CLASS__, '_list_table_css' ] );
	}

	// создает элементы таблицы
	function prepare_items() {
		global $wpdb;

		// пагинация
		$per_page = get_user_meta( get_current_user_id(), get_current_screen()->get_option( 'per_page', 'option' ), true ) ?: 20;

		$this->set_pagination_args( array(
				'total_items' => 3,
				'per_page'    => $per_page,
		) );
		$cur_page = (int) $this->get_pagenum(); // желательно после set_pagination_args()

		$this->items = workBd::getDataAdmin();
		//				array(
		//				(object) array(
		//						'post_title'    => "<a href=\"#\">Запись</a>",
		//						'post_like'   => '34',
		//						'post_dislike'  => '12',
		//				),
		//
		//		);

	}

	// колонки таблицы
	function get_columns() {
		return array(
				'cb'           => '<input type="checkbox" />',
				'post_title'   => 'Post',
				'post_like'    => 'Количество лайков',
				'post_dislike' => 'Количество дизлайков',

		);
	}

	// сортируемые колонки
	function get_sortable_columns() {
		return array(
				'customer_name' => array( 'name', 'desc' ),
		);
	}

	protected function get_bulk_actions() {
		return array(
				'delete' => 'Delete',
		);
	}

	// Элементы управления таблицей. Расположены между групповыми действиями и панагией.
	function extra_tablenav( $which ) {
		echo '<div class="alignleft actions">Информация по лайкам</div>';
	}

	// вывод каждой ячейки таблицы -------------

	static function _list_table_css() {
		?>
		<!--		<style>--><!--			table.logs .column-id {--><!--				width: 2em;--><!--			}--><!----><!--			table.logs .column-license_key {--><!--				width: 8em;--><!--			}--><!----><!--			table.logs .column-customer_name {--><!--				width: 33%;--><!--			}--><!--		</style>-->
		<?php
	}

	// вывод каждой ячейки таблицы...
	function column_default( $item, $colname ) {

		if ( $colname === 'customer_name' ) {
			// ссылки действия над элементом
			$actions         = array();
			$actions['edit'] = sprintf( '<a href="%s">%s</a>', '#', __( 'edit', 'hb-users' ) );

			return esc_html( $item->name ) . $this->row_actions( $actions );
		} else {
			return isset( $item->$colname ) ? $item->$colname : print_r( $item, 1 );
		}

	}

	// заполнение колонки cb
	function column_cb( $item ) {
		echo '<input type="checkbox" name="licids[]" id="cb-select-' . $item->id . '" value="' . $item->id . '" />';
	}

	// остальные методы, в частности вывод каждой ячейки таблицы...

	// helpers -------------

	private function bulk_action_handler() {
		if ( empty( $_POST['licids'] ) || empty( $_POST['_wpnonce'] ) ) {
			return;
		}

		if ( ! $action = $this->current_action() ) {
			return;
		}

		if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'bulk-' . $this->_args['plural'] ) ) {
			wp_die( 'nonce error' );
		}

		// делает что-то...
		die( $action ); // delete
		die( print_r( $_POST['licids'] ) );

	}

}


// WP 5.4.2. Cохранение опции экрана per_page. Нужно вызывать до события 'admin_menu'
add_filter( 'set_screen_option_' . 'lisense_table_per_page', function ( $status, $option, $value ) {
	return (int) $value;
}, 10, 3 );


// создаем страницу в меню, куда выводим таблицу
add_action( 'admin_menu', function () {
	$hook = add_menu_page( 'Лайки', 'Количество лайков', 'edit_posts', 'page-slug', 'example_table_page', 'dashicons-products', 100 );

	add_action( "load-$hook", 'example_table_page_load' );
} );

function example_table_page_load() {
	//	require_once __DIR__ . '/class-Example_List_Table.php'; // тут находится класс Example_List_Table...

	// создаем экземпляр и сохраним его дальше выведем
	$GLOBALS['Example_List_Table'] = new Example_List_Table();
}

function example_table_page() {
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>

		<?php
		// выводим таблицу на экран где нужно
		echo '<form action="" method="POST">';
		$GLOBALS['Example_List_Table']->display();
		echo '</form>';
		?>

	</div>
	<?php
}
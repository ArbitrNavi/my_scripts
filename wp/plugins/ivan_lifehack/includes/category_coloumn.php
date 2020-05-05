<?php
 function add_columns($columns) {
	$column_id = array( 'id' => 'ID' );
	$columns = array_slice( $columns, 0, 1, true ) + $column_id + array_slice( $columns, 1, NULL, true );
	return $columns;
}
 
add_filter("manage_edit-category_columns", 'add_columns');
add_filter("manage_edit-post_tag_columns", 'add_columns');
 
 
function fill_columns($out, $column_name, $id) {
	switch ($column_name) {
		case 'id':
			$out .= $id; 
 			break;
		default:
			break;
	}
	return $out;	
}
 
add_filter("manage_category_custom_column", 'fill_columns', 10, 3);
add_filter("manage_post_tag_custom_column", 'fill_columns', 10, 3); 
?>
<?php
// для полей массива $fields
//стандартное значение тут wp-includes/comment-template.php:2363
//add_filter('comment_form_default_fields', 'filter_function_name_3090');
//function filter_function_name_3090($fields) {
//	$fields = array(
//		'author' => '<p class="comment-form-author">' . '<input id="author" name="author" type="text" placeholder="Ваше Имя" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245"' . $html_req . ' /></p>',
//		'email'  => '<p class="comment-form-email">' . '<input id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' placeholder="Email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $html_req . ' /></p>',
//		'url'    => '<p class="comment-form-url"><label for="url">' . __('Website') . '</label> ' .
//			'<input id="url" name="url" ' . ($html5 ? 'type="url"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_url']) . '" size="30" maxlength="200" /></p>',
//		//		'comment_field' => '<p class="comment-form-comment 12"><label for="comment">' . _x('Comment', 'noun') . '</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
//	);
//
//	return $fields;
//}

//изменение какого то одного значения в массиве $defaults
//add_filter('comment_form_field_comment', 'truemisha_change_comment_label', 25);
//
//function truemisha_change_comment_label($field) {
//	$p = '<p class="comment-form-comment">%s %s</p>';
//	$label = '<label for="comment">%s%s</label>';
//	$textarea = '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525"' . $required_attribute . '></textarea>';
//	//	$field = sprintf($p, sprintf($label, _x('Comment', 'noun'), $required_indicator), $textarea);
//	$field = sprintf($p, '', $textarea);
//	return $field;
//
//}

//Изменение формы комментирования для всех полей,
// стандартное значение тут wp-includes/comment-template.php:2441
//https://misha.agency/wordpress/comment_form.html#comment_form_default_fields
add_filter('comment_form_defaults', 'comment_form_defaults_custom', 25);

function comment_form_defaults_custom($args) {
	$p = '<p class="comment-form-comment">%s %s</p>';
	$textarea = '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525"' . $required_attribute . '></textarea>';

	$args = array(
		'fields'             => array(
			'author' => '<p class="comment-form-author">' . '<input id="author" name="author" type="text" placeholder="Ваше Имя" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245"' . $html_req . ' /></p>',
			'email'  => '<p class="comment-form-email">' . '<input id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' placeholder="Email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $html_req . ' /></p>',
		),
		'title_reply_before' => '',
		'title_reply'        => '',
		'title_reply_after'  => '',
		'comment_field'      => sprintf($p, '', $textarea),//textarea
	);

	return $args;
}

//Вставить вначале формы
add_action('comment_form_top', 'action_function_name_3068');
function action_function_name_3068() {
	echo '<div class="fc_wrap"><div class="fc_item fc_comment">';
}


//Вставить в конец формы
add_action('comment_form', 'action_function_name_2375');
function action_function_name_2375($post_id) {
	echo '</div></div>';
}


?>
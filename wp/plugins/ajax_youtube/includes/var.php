<?php
function ay_var($var_name, $attrs) {
	$resoult = '';

	switch ($var_name) {
		case 'style_margin':

			if (isset($attrs) && array_key_exists('margin_top', $attrs)) {
				$margin_top = 'margin-top:' . $attrs['margin_top'] . 'px;';
			} else {
				$margin_top = (get_field("margin-top", "option")) ? 'margin-top: ' . get_field("margin-top", "option") . 'px;' : '';
			}

			if (isset($attrs) && array_key_exists('margin_bottom', $attrs)) {
				$margin_bottom = 'margin-bottom: ' . $attrs['margin_bottom'] . 'px;';
			} else {
				$margin_bottom = (get_field("margin-bottom", "option")) ? 'margin-bottom: ' . get_field("margin-bottom", "option") . 'px;' : '';
			}

			$style_margin = '' . $margin_top . $margin_bottom;

			$resoult = $style_margin;
			break;

		case 'style_border_radius':
			$style_border_radius = 'border-radius: ' . get_field("ay-border_radius", "option") . 'px;';

			$resoult = $style_border_radius;
			break;

		default:
			$resoult = '';
			break;
	}

	return $resoult;
}

?>
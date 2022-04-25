<?php
function phone_format($phone_string) {
	$pattern = '/\D/i';
	$replacement = '';
	$resoult = preg_replace($pattern, $replacement, $phone_string);
	return $resoult;
}

echo phone_format(' 8 (905) 506-3-506')
?>
<?php
use \WebPExpress\AlterHtmlHelper;

class WebpExpressExtended
{
	public static function background($imgId, $imgSize = 'full')
	{
		$img = wp_get_attachment_image_src($imgId, $imgSize)[0];
		if (!$imgId || !$img) {
			return false;
		}
		return AlterHtmlHelper::getWebPUrl($img, null);
	}
}

echo WebpExpressExtended::background(3223, 'full');
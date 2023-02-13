<?php
function UR_exists($url){
	$headers=get_headers($url);
	return stripos($headers[0],"200 OK")?true:false;
}

$filename = 'http://realty.loc/wp-content/webp-express/webp-images/uploads/2023/01/Frame-12.png.webp';
/* You can test a URL like this (sample) */
if(UR_exists($filename)){
	echo "This page exists";}
else {
	echo "This page does not exist";
}

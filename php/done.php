<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Сверстанные страницы</title>
</head>
<body>
<?php

$dir = getcwd();
$files = scandir($dir);
$phpArray = array();

foreach ($files as $file) {
	if (substr($file, -4) == ".php" && $file !== basename(__FILE__)) {
		$phpArray[] = $file;
	}
}

var_dump($phpArray);

?>

<h1>Список сверстанных старниц</h1>
<ol>
	<?php foreach ($phpArray as $link) { ?>
		<li>
			<a href="<?php echo $link; ?>" target="_blank"><?php echo $link; ?></a>
		</li>
	<?php } ?>
</ol>
</body>
</html>
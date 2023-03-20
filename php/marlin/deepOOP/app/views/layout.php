<html>
<head>
	<title><?=$this->e($title)?></title>
</head>
<body>
<h2>начало сайта</h2>
<p>Это страница: <?=$this->e($type)?></p>

<?=$this->section('content')?>

<h2>конец сайта</h2>
</body>
</html>
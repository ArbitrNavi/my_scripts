<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<h1>test page</h1>
<div class="rotate">
	<div class="rotate__item">Lorem ipsum dolor.</div>
	<div class="rotate__lang">
		<a href="#">RU</a>
		|
		<a href="#">EN</a>
	</div>
</div>

<style>
	.rotate {
		display: flex;
		outline: 1px solid red;
		justify-content: space-between;
	}

	.rotate div {
		outline: 1px solid green;
	}

	.rotate__lang {
		/*transform: rotate(90deg);*/
		display: flex;
		writing-mode: vertical-lr;
	}

	a {
		padding: 3px;
		display: block;

	}

	a:hover {
		background-color: green;
	}
</style>
</body>
</html>

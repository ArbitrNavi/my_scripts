<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- Тест отправки формы при пустом action -->
<?php var_dump($_REQUEST); ?>

<form action="" type="POST">
    <input type="text" name="action_empty">
    <input type="submit">
</form>

</body>
</html>
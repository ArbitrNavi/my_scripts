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
<?php var_dump((bool)$_REQUEST["MarkAgree"]); ?>

<form action="" type="POST">

    <div class="chk-container bump-bottom-sm">

        <input type="checkbox" class="form-check-input" id="MarkAgree" name="MarkAgree" value="true">
        <input type="text" id="MarkAgree_hidden" value='MarkAgree_hidden'>
    </div>

    <input type="text" name="action_empty2">
    <input type="submit">
</form>

</body>
</html>
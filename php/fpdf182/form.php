<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>form</title>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
	<form action="post.php" method="post" target="_blank" id="id_form">
		<input type="text" name="nickname" value="">
		<!-- <input type="file" name="f"> -->
		<input type="text" name="other-fields" id="other-fields">
		<input type="submit" value="Отправить">
	</form>
<script>
	console.log('скрипт подключен'); //проверка подключения скрипта
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery
    console.log(jQuery.fn.jquery); //узнать версию JQuery


$('#id_form').submit(function (e) {
	  // e.preventDefault();
    // var $form = $(this);
    // $form.submit();
    // console.log($form);
    $('#other-fields').val('Какой то скрытый текст');
});


});
</script>
</body>
</html>
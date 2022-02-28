<?php
//first_as_label - первый элемент в качестве placeholder


?>

<script>

	//события при не успешной отправке, ни все поля введены
	$('.wpcf7').not('.pum .wpcf7').each(function () {
		console.log($(this)[0]);
		$(this)[0].addEventListener('wpcf7invalid', function (event) {
			console.log('error cf7');
			PUM.open('114');
		}, false);
	})
</script>

<p class="form_title">Поиск кружка, занятия</p><p class="form_text">Навигация по кружкам Москвы</p>
<div class="form_block">
	[select* menu-724 class:trade__piece "По району" "По району 1" "По району 2" "По району 3"]
	[select* menu-726 include_blank "По цене" "По цене 1" "По цене 2" "По цене 3"]
	[select* menu-725 class:trade__piece "По категории" "По категории 1" "По категории 2" "По категории 3"]
	[select* your-browser ":Firefox" "Safari" "Opera" "Lynx"]
	[select* Test first_as_label "Placeholder" "Option 1" "Option 2"]
	[submit "СОРТИРОВКА"]
</div>
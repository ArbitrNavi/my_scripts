<!-- Информация по плагину мультиязычности qTranslate-X -->
<!-- ?lang=ru перейти на нужный язык -->
<a href="?lang=ru" class="active">Ru</a>
<?php 

// Получим текущий язык
$currentLang = qtranxf_getLanguage();
if ($currentLang == 'ru'){ ?>
					<a href="?lang=ru" class="active">Ru</a>
					<a href="?lang=en">En</a>
<?php } elseif ($currentLang == 'en'){ ?>
					<a href="?lang=ru" >Ru</a>
					<a href="?lang=en" class="active">En</a>
<?php }
 ?>
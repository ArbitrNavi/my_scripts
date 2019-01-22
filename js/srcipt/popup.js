	// popup функция
	// 1 значение id ссылки по которой нужно нажать для отображение блока
	// 2 значение id блока который должен быть отображен/скрыт (этому блоку лучше сразу присвоить дисплей нон в html)
	
	function popup_block(id_link,id_block){
		console.log('popup_block:' + id_link + ', ' + id_block)
		$('#' + id_link).click(function(){
			console.log('click #' + id_link);
			$('#' + id_block).fadeIn();
		});

		$('#' + id_block).click(function(){
			$(this).fadeOut();
		});

	};

	popup_block('sa_link','sa_modal');
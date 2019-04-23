// пауза и воспроизведение ютуб роликов
// клил по кнопке с классом .play
$(document).on('click', '.play', function(){ 
// при добавлении видео на страниыу добавить параметр enablejsapi=1

// <iframe src="https://www.youtube.com/embed/NCA1NngjiAw?autoplay=0&enablejsapi=1&amp;autohide=1" frameborder="0" id="test1"></iframe>


// Обязательно надо, что б в выборке один элемент был, а не массив, то есть после выборки добавить [0]
// пауза
	$('#test1')[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');

// плей
	$('#test1')[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');

});
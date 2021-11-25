//Отслеживание изменения размера экрана resize

function resize()
{
    window.status = 'Ширина экрана: ' + document.body.clientWidth + 'px';
    console.log('Ширина экрана: ' + document.body.clientWidth + 'px');
}
window.onresize = resize;
//Отслеживание изменения размера экрана resize

document.addEventListener("DOMContentLoaded", function(event)
{
    window.onresize = function() {
        resize_info();
    };
});

function resize_info()
{
    // resize data
}
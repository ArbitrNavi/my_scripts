// Задержка выполнения в цикле
var i = 0; //счетчик
i_max = 100;
time = 5000; //за какое время выполнить
time_1_procent = time / i_max; //за какое время выполнить одну итерацию цикла

var timer = setInterval(function() {
    // что выполнить
    $('#sam_procent').text(i)
    $('.sa_loading_line').css({ 'background-image': 'linear-gradient(to right, rgb(75, 162, 206)' + i + '%, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 100%, rgb(75, 162, 206) 100%)' });

    // увеличиваем счетчик
    i++;

    // задержка
    if (i > i_max) clearInterval(timer);
}, time_1_procent);

// какое то выполнение после таймера
var url = $(this).attr('href');
setTimeout(function() {
    window.open(url, '_blank').focus();
    $('.sidebar_dogovor_popup').fadeOut(10000);
}, time);
// таймер обратного отсчета

// Необходимо разместить на сайте скрипт обратного отсчета.

// Решение:
// Для этого необходимо указать следующий html код:
// <span class="deal-end-date" style="display:none;">2017-05-31</span> 
// <div id="deal-countdown" class="countdown"></div>


// И добавить код скрипта:
// set the date we're counting down to     
var deal_end_date = document.querySelector(".deal-end-date").textContent;     
var target_date = new Date( deal_end_date ).getTime();      
// variables for time units     
var days, hours, minutes, seconds;      
// get tag element     
var countdown = document.getElementById( 'deal-countdown' );      
// update the tag with id "countdown" every 1 second     
setInterval( function () {          
// find the amount of "seconds" between now and target         
var current_date = new Date().getTime();         
var seconds_left = (target_date - current_date) / 1000;          
// do some time calculations         
days = parseInt(seconds_left / 86400);         
seconds_left = seconds_left % 86400;          
hours = parseInt(seconds_left / 3600);         
seconds_left = seconds_left % 3600;          
minutes = parseInt(seconds_left / 60);         
seconds = parseInt(seconds_left % 60);          
// format countdown string + set tag value         
countdown.innerHTML = '' + days +  'Days' + hours + 'Hours'   + minutes + 'Mins' + seconds + 'Secs';      }, 1000 );
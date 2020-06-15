<<<<<<< HEAD
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
=======
// Функция таймера

// преобразует число в двузначное и выбирает какой знак выводить
function time_my(value, number){
	// value = исходное значение
	// какое число выводить (первое || второе)

	value="" + value;
	// 123
	if (value.length > 2) {
		value = value.substr(-2)
	};

// 1
	if (value.length == 1) {
		value="0" + value;
	};

// 12

if(number==1){
	value = value.charAt(0); //1
}else{
	value = value.substr(1); //2
};

return value;
};

// счетчик
// var deal_end_date = "2020-06-03";     //дата до которой производится отсчет
// var target_date = new Date( deal_end_date ).getTime();


// прибавить месяц к текущей дате:
// getDate день
// getMonth месяц
// getFullYear год

var target_date = new Date();
target_date.setMonth( target_date.getMonth() + 1);
  
target_date = target_date.getTime();

>>>>>>> 3f0a008d8f20a1461e85e15f0f5361be6014baa1
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
<<<<<<< HEAD
countdown.innerHTML = '' + days +  'Days' + hours + 'Hours'   + minutes + 'Mins' + seconds + 'Secs';      }, 1000 );
=======
// countdown.innerHTML = '' + days +  'Days' + hours + 'Hours'   + minutes + 'Mins' + seconds + 'Secs';      

	$('.time_val_day_1').text(time_my(days,1));
	$('.time_val_day_2').text(time_my(days,2));
	$('.time_val_hours_1').text(time_my(hours,1));
	$('.time_val_hours_2').text(time_my(hours,2));
	$('.time_val_min_1').text(time_my(minutes,1));
	$('.time_val_min_2').text(time_my(minutes,2));
	$('.time_val_sec_1').text(time_my(seconds,1));
	$('.time_val_sec_2').text(time_my(seconds,2));

}, 1000 );

// html
/*<div class="ttc_2">
	<span class="time_number time_val_day_1">1</span>
	<span class="time_number time_val_day_2">2</span>
	<span class="time_number_razdelitel"></span>
	<span class="time_number time_val_hours_1">3</span>
	<span class="time_number time_val_hours_2">4</span>
	<span class="time_number_razdelitel"></span>
	<span class="time_number time_val_min_1">5</span>
	<span class="time_number time_val_min_2">6</span>
	<span class="time_number_razdelitel"></span>
	<span class="time_number time_val_sec_1">5</span>
	<span class="time_number time_val_sec_2">6</span>
</div>*/
>>>>>>> 3f0a008d8f20a1461e85e15f0f5361be6014baa1

;(function ($) {
	$(document).ready(function () {

		// Пример вывода календаря или дята на русском
		$.datetimepicker.setLocale('ru'); //поставить русский язык 
		function get_todate(){
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			if(dd<10) {
				dd = '0'+dd
			} 
			if(mm<10) {
				mm = '0'+mm
			} 
			today = yyyy + '-' + mm + '-' + dd;
			return today;//сегодня
		}
		
		function get_tomorrow(){
			var tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
			var dd = tomorrow.getDate()
			var mm = tomorrow.getMonth() + 1
			var yyyy = tomorrow.getFullYear()
			if(dd<10) {
				dd = '0'+dd
			} 
			if(mm<10) {
				mm = '0'+mm
			} 
			tomorrow = yyyy + '-' + mm + '-' + dd;
			return tomorrow;//завтра
		}
		
		//Время
		$('.walcf7-datetimepicker').each(function(index, element) {
			var todate = get_todate();
			var tomorrow = get_tomorrow();
			$(this).datetimepicker({
				dayOfWeekStart : 1,
				yearStart: '1900',
				format:'Y-m-d H:i',
				formatDate:'Y-m-d',
				formatTime:'H:i',
				defaultTime:'10:00',
				//disabledDates:[todate],
				startDate:tomorrow,

				onGenerate: function( ct, $input ){
					$input.prop('readonly', true);
					var $this = $(this);
					$this.find('.xdsoft_date').removeClass('xdsoft_disabled');
					$this.find('.xdsoft_time').removeClass('xdsoft_disabled');
				}						
			});
		});
		
		//Дата
		$('.walcf7-datepicker').each(function(index, element) {
			var todate = get_todate();
			var tomorrow = get_tomorrow();
			$(this).datetimepicker({
				dayOfWeekStart : 1,
				yearStart: '1900',
				timepicker:false,
				minDate:0,
				format:'d-m-Y',
				formatDate:'d-m-Y',
				// disabledDates:[todate],
				startDate:tomorrow,

				//чтоб можно было выбирать прошлые даты
				// onGenerate: function( ct, $input ){
					// $input.prop('readonly', true);
					// var $this = $(this);
					// $this.find('.xdsoft_date').removeClass('xdsoft_disabled');
					// $this.find('.xdsoft_time').removeClass('xdsoft_disabled');
				// }						
			});
		});
		
		//Дата и время
		$('.walcf7-timepicker').each(function(index, element) {
			$(this).datetimepicker({
				datepicker:false,
				ignoreReadonly: true,
				allowInputToggle: true,							
				format:'H:i',
				defaultTime:'10:00',
				step:15,
				onGenerate: function( ct, $input ){
					$input.prop('readonly', true);
					var $this = $(this);
					$this.find('.xdsoft_date').removeClass('xdsoft_disabled');
					$this.find('.xdsoft_time').removeClass('xdsoft_disabled');
				}
			});
		});
		
	});
}(jQuery));
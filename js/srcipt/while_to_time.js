//Циклическое выполнение с задержкой, пока не будет выполнено условие
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках

    var timeID = setInterval(function() {

        if ($('#loanamount_text').val() == '3 000') {
            // 	console.log('start setInvertal if');
            slideramount.noUiSlider.set(5000);
            sliderterm.noUiSlider.set(30);

            clearInterval(timeID); // отменить периодическое выполнение кода
        } else {
            console.log($('#loanamount_text').val());
        }; //end if

    }, 1000); //timeID

}); //конец ready
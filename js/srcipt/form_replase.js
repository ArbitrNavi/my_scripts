// подстановка значений в другие поля, необходимо, если нужно натянуть верстку, а функционал плагина не позволяет изменять исходящую верстку
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках

    $('#fp input').change(function() { //отслеживание изменений
        $('#mailpoet_form_1 .mailpoet_text[type="text"]').val($('#fp_name').val()); //подставновка значений в нужные поля
        $('#mailpoet_form_1 .mailpoet_text[type="email"]').val($('#fp_email').val()); //подставновка значений в нужные поля
    });


    // отправление
    $("#fp").submit(function(event) { // задаем функцию при срабатывании события "submit" на элементе <form>
        event.preventDefault(); // действие события по умолчанию не будет срабатывать
        // console.log('Нажал отправить на верстанной форме');
        $('#mailpoet_form_1 input[type="submit"]').trigger('click'); //имитация нажатия на нужную кнопку отправить
        alert('Проверьте ваш почтовый ящик или спам, чтобы подтвердить свою подписку.'); //выходит сообщение мол все здорово, можно подставить все что угодно
    });


}); //конец ready
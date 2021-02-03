// Выборка jq

// <select id="town">
//     <option value="Moscow">Москва</option>
//     <option value="St. Petersburg">Санкт-Петербург</option>
//     <option value="Sochi">Сочи</option>
//     <option value="Novosibirsk" selected>Новосибирск</option>
//     <option value="Kazan">Казань</option>
// </select>
// Получим значение value, выбранной опции:
    $("#town").val(); // Novosibirsk
// Получим текст выбранной опции:
    $("#town option:selected").text(); // Новосибирск
// Сделать <select> недоступным:
$("#town").attr("disabled", "disabled");
// Разблокировать <select>
$("#town").attr("disabled","");
// Удалить выбранный элемент:
    $("#town :selected").remove(); // будет удален Новосибирск
// Удалить первый элемент:
    $("#town :first").remove(); // будет удалена Москва
// Удалить последний элемент:
    $("#town :last").remove(); // будет удалена Казань
// Удалить элемент, у которого value=’Sochi’:
$("#town option[value='Sochi']").remove();
$("#town [value='Sochi']").remove(); // сокращенно
// Очистить весь список <select>
$("#town").empty();
// Перебрать все элементы списка <select> и вывести в блок с id=«result»:
var result = "";
$('#town option').each(function(){
    result = result + this.text + "<br/>";
});
$('div#result').html(result);
// Сделать выбранным последний элемент:
    $("#town :last").attr("selected", "selected"); // будет выбрана Казань
// Сделать выбранным второй элемент:
    $("#town :nth-child(2)").attr("selected", "selected"); // будет выбран Санкт-Петербург
// Сделать выбранным элемент, содержащий текст ‘Новосибирск’:
// Первый вариант
$("#town :contains('Новосибирск')").attr("selected", "selected");

// Второй вариант
$("#town").find("option:contains('Новосибирск')").attr("selected", "selected");

// Третий вариант (не зависит от регистра)
var opt = $('option');
opt.each(function(indx, element){
    if ( $(this).text().toLowerCase() == 'Новосибирск'.toLowerCase() ) {$(this).attr("selected", "selected");}
});
// В первом и втором вариантах используем селектор по тексту :contains(text), который чувствителен к регистру. Третий вариант от регистра не зависит.

    // Сделать выбранным элемент, value которого = St. Petersburg:
$("#town option[value='St. Petersburg']").attr("selected", "selected");
// Добавить элемент в начало списка <select>:
$("#town").prepend('<option value="Ryazan">Рязань</option>');
// Добавить элемент в конец списка <select>:
$("#twon").append('<option value="Samara">Самара</option>');
// Добавить новый элемент после третьего:
    $("#town option:nth-child(3)").after('<option value="Voronezh">Воронеж</option>');
// Добавить несколько элементов option в список <select> из массива:
    var newOptions = {
        "Ryaza": "Рязань",
        "Samara": "Самара"
    };

$.each(newOptions, function(key, value) {
    $('#town').append($("", {
        value: key,
        text: value
    }));
});
// Количество элементов option в списке <select>:
$("select[id=town] option").size();
// Проверяем, выбран ли элемент в списке <select>:
if ( $("#town").val() ) {...}
// Сделать все элементы в списке <select> не выбранными:
    $('#town option:selected').each(function(){
        this.selected=false;
    });
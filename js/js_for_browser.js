//шаблон js для закладки, вместо URL ввести
javascript:(function () {

})();
void (0);


// Подсветить тег
javascript:(function () {
    custom_select_tag_active = localStorage.getItem('custom_select_tag') || "a";
    custom_select_tag = prompt('Что подсветить?(Выборка jq)', custom_select_tag_active);
    localStorage.setItem('custom_select_tag', custom_select_tag);
    const custom_select_tag_query = document.querySelectorAll(custom_select_tag);
    for (var i = 0, length = custom_select_tag_query.length; i < length; i++) {
        custom_select_tag_query[i].style.outline = '1px solid red';
    }

})();
void (0);

//подсветить заголовки
javascript: (function () {
    var style = document.getElementById('bstrongemhighlight');
    if (style) {
        style.remove();
    } else {
        var bStngEm = document.createElement('style');
        bStngEm.setAttribute('type', 'text/css');
        bStngEm.setAttribute('id', 'bstrongemhighlight');
        bStngEm.innerHTML = 'strong:before {content: \u0022stng - \u0022 !important;} b:before {content: \u0022b - \u0022 !important;} em:before {content: \u0022em - \u0022 !important;} strong {background-color: #690 !important; border: solid !important; padding: 2px !important; color: black !important;} b {background-color: #77D7FF !important; border: solid !important; padding: 2px !important; color: black !important;} em {background-color: #b798f5 !important; border: solid !important; padding: 2px !important; color: black !important;} h1:before {content: \u0022H1 - \u0022 !important;} h2:before {content: \u0022H2 - \u0022 !important;} h3:before {content: \u0022H3 - \u0022 !important;} h4:before {content: \u0022H4 - \u0022 !important;} h5:before {content: \u0022H5 - \u0022 !important;} h6:before {content: \u0022H6 - \u0022 !important;} h1 {background-color: pink !important; border: solid !important; padding: 2px !important; color: black !important;} h2 {background-color: orange !important; border: solid !important; padding: 2px !important; color: black !important;} h3 {background-color: yellow !important; border: solid !important; padding: 2px !important; color: black !important;} h4 {background-color: aquamarine !important; border: solid !important; padding: 2px !important; color: black !important;} h5 {background-color: lightskyblue !important; border: solid !important; padding: 2px !important; color: black !important;} h6 {background-color: plum !important; border: solid !important; padding: 2px !important; color: black !important;}';
        document.getElementsByTagName('body')[0].appendChild(bStngEm);
    }
})();
void (0);

//скрыть и отобразить админ панель
javascript:(function () {
    document.getElementById('wpadminbar').style.display = (document.getElementById('wpadminbar').style.display == 'none') ? '' : 'none';
})();
void (0);





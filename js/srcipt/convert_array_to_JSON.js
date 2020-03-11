// добавляет возможность конвертирования в JSON ассоциативных массивов JS
// Modify JSON.stringify to allow recursive and single-level arrays
(function(){
    // Convert array to object
    var convArrToObj = function(array){
        var thisEleObj = new Object();
        if(typeof array == "object"){
            for(var i in array){
                var thisEle = convArrToObj(array[i]);
                thisEleObj[i] = thisEle;
            }
        }else {
            thisEleObj = array;
        }
        return thisEleObj;
    };
    var oldJSONStringify = JSON.stringify;
    JSON.stringify = function(input){
        return oldJSONStringify(convArrToObj(input));
    };
})();

// data_arr
// info: [shablon: "Интернет магазин", korporativnie: 0, skidka: "", name_project: "", rekvizity: "", …]
// work: (6) [Array(4), Array(4), Array(4), Array(4), Array(4), Array(4)]

// Пример конвертирования
data_arr = JSON.stringify(data_arr);

// результат 
// {"info":{"shablon":"Интернет магазин","korporativnie":0,"skidka":"","name_project":"","rekvizity":"","dop_text":"","raschet_stoimosti":"","itog_summa":"86000","itog_skidka_summa":"86000"},"work":{"0":{"0":"Копирайтинг","1":8000,"2":1,"3":""},"1":{"0":"SEO","1":15000,"2":1,"3":"Продвижение по Яндексу и Google"},"2":{"0":"Затраты на хостинг и домен","1":8000,"2":1,"3":""},"3":{"0":"Бэкэнд","1":25000,"2":1,"3":""},"4":{"0":"Фронтенд","1":15000,"2":1,"3":""},"5":{"0":"Дизайнер","1":15000,"2":1,"3":""}}}

// Теперь кодируем кирилицу и прочие символы, которые нет возможности передать через URL
data_arr = encodeURIComponent(data_arr);
// результат
// %7B%22info%22%3A%7B%22shablon%22%3A%22%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%22%2C%22korporativnie%22%3A0%2C%22skidka%22%3A%22%22%2C%22name_project%22%3A%22%22%2C%22rekvizity%22%3A%22%22%2C%22dop_text%22%3A%22%22%2C%22raschet_stoimosti%22%3A%22%22%2C%22itog_summa%22%3A%2286000%22%2C%22itog_skidka_summa%22%3A%2286000%22%7D%2C%22work%22%3A%7B%220%22%3A%7B%220%22%3A%22%D0%9A%D0%BE%D0%BF%D0%B8%D1%80%D0%B0%D0%B9%D1%82%D0%B8%D0%BD%D0%B3%22%2C%221%22%3A8000%2C%222%22%3A1%2C%223%22%3A%22%22%7D%2C%221%22%3A%7B%220%22%3A%22SEO%22%2C%221%22%3A15000%2C%222%22%3A1%2C%223%22%3A%22%D0%9F%D1%80%D0%BE%D0%B4%D0%B2%D0%B8%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%20%D0%AF%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%D1%83%20%D0%B8%20Google%22%7D%2C%222%22%3A%7B%220%22%3A%22%D0%97%D0%B0%D1%82%D1%80%D0%B0%D1%82%D1%8B%20%D0%BD%D0%B0%20%D1%85%D0%BE%D1%81%D1%82%D0%B8%D0%BD%D0%B3%20%D0%B8%20%D0%B4%D0%BE%D0%BC%D0%B5%D0%BD%22%2C%221%22%3A8000%2C%222%22%3A1%2C%223%22%3A%22%22%7D%2C%223%22%3A%7B%220%22%3A%22%D0%91%D1%8D%D0%BA%D1%8D%D0%BD%D0%B4%22%2C%221%22%3A25000%2C%222%22%3A1%2C%223%22%3A%22%22%7D%2C%224%22%3A%7B%220%22%3A%22%D0%A4%D1%80%D0%BE%D0%BD%D1%82%D0%B5%D0%BD%D0%B4%22%2C%221%22%3A15000%2C%222%22%3A1%2C%223%22%3A%22%22%7D%2C%225%22%3A%7B%220%22%3A%22%D0%94%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%D0%B5%D1%80%22%2C%221%22%3A15000%2C%222%22%3A1%2C%223%22%3A%22%22%7D%7D%7D

// если необходимо на стороне сервера php можно преобразовать в нужную кодировку
// iconv("UTF-8", "cp1251",$data_arr['info']['name_project'])
// Метод forEach перебор массива
var a = ["a", "b", "c"];
a.forEach(function(entry) {
    console.log(entry);
});


// forEach
// Метод «arr.forEach(callback[, thisArg])» используется для перебора массива.
//
//     Он для каждого элемента массива вызывает функцию callback.
//
//     Этой функции он передаёт три параметра callback(item, i, arr):
//
// item – очередной элемент массива.
//     i – его номер.
//     arr – массив, который перебирается.
var arr = ["Яблоко", "Апельсин", "Груша"];

arr.forEach(function(item, i, arr) {
    alert( i + ": " + item + " (массив:" + arr + ")" );
});


//filter
// Метод «arr.filter(callback[, thisArg])» используется для фильтрации массива через функцию.
//
// Он создаёт новый массив, в который войдут только те элементы arr, для которых вызов callback(item, i, arr) возвратит true.
//
// Например:

var arr = [1, -1, 2, -2, 3];

var positiveArr = arr.filter(function(number) {
    return number > 0;
});

alert( positiveArr ); // 1,2,3

// https://learn.javascript.ru/array-iteration
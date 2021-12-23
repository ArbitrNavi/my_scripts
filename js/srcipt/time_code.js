//счетчик времени операции
var start = new Date; // засекли время

// что-то сделать
for (var i = 0; i < 1000000; i++) {
    var doSomething = i * i * i;
}

var end = new Date; // конец измерения

console.log( "Код занял " + (end - start) + " ms" );
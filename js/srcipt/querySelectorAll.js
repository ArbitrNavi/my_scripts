// querySelectorAll

// var allinputs = document.querySelectorAll('input[value][type="text"]:not([value=""])');
var allinputs = document.querySelectorAll('input');//выбрать нужные элементы
var myLength = allinputs.length;//длина массива

for (var i = 0; i < myLength; ++i) {//перебор элементов
    allinputs[i].addEventListener("keyup", function (e) {//событие нажатия на элемент
        if (this.value) {//если у поля что то введено
            this.style.removeProperty("backgroundColor");// удалить стиль
        } else {// если поле пустое
            this.style.backgroundColor = "lime"; //добавить нужный стиль
        }
        console.log(this) //вывести информацию о элементе на который срабатывает событие
    });
}


// .attributes['name'].value


<?php
//ООП 5 приветные аттрибуты


// Объект - это сущность, одновременно содержащая данные и поведения
//объект - определяется 2 компонентами:
//Аттрибутами(размер, цвет, скорость, ...)
//Поведениями(бегать, прыгать, читать, ...)

class Car
{
    public $color;
    public $year;
    public $manufacturer;

//    действия / методы к объекту

    public function __construct($color, $year, $izgotovitel)
    {
        $this->color = $color;
        $this->year = $year;
        $this->year = $izgotovitel;
    }

    public function startEngine()
    {
        //    большой кусок сода завода мотора
    }

    public function changeColor($color)
    {
        $this->color = $color;
    }
//действие КОНСТРУКТОР - выполняется без явного вызова
}

$myCar = new Car('red', 2017, 'Mersees'); // конкретный объект - создать новый экземпляр машины на основе чертежа Car. Теперь это экземляр машины

$myCar->changeColor('blue');

echo $myCar->color;


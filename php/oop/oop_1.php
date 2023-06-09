<?php
//ООП

// Объект - это сущность, одновременно содержащая данные и поведения
//объект - определяется 2 компонентами:
//Аттрибутами(размер, цвет, скорость, ...)
//Поведениями(бегать, прыгать, читать, ...)

//class Car
//{
//	public $color;
//	public $year;
//	public $manufacturer;
//
//	//    функции в объекте называют действия/методы
//
//	public function go() {
//		//    реализация езды
//	}
//
//}
//
//$myCar = new Car;//Создать новый экземляр машины на основе чертежа Car,
//// теперь переменная $myCar это объект машины, не имеет конкретных данных
//
//$myCar->color = 'red';
//$myCar->year = 2017;
//$myCar->manufacturer = 'Mersedes';


//жизненный цикл - сценарий который постоянно повторяется
//1. открыть двери - openDoors()
//2. закрывать двери - closeDoors()
//3. завести мотор - startEngine()
//4. ехать - go()
//5. поворачивать - turnLeft(), turnRight()
//6. останавливается - stop()
//7. открыть двери - openDoors()
//8. закрыть двери - closeDoors()

//ООП 4
// класс - (план) чертеж по которому будет создан объект
// объект - конкретно построенный авто

//Класс Car - состоит из свойств (чертеж)
class Car
{
	public $color;
	public $year;
	public $manufacturer;

	//    действия / методы к объекту

	public function __construct($color, $year, $izgotovitel) {
		$this->color = $color;
		$this->year = $year;
		$this->manufacturer = $izgotovitel;
	}

	public function startEngine() {
		//    большой кусок кода завода мотора
		echo 'Завели машину<br>';
	}

	public function changeColor($color) {
		$this->color = $color;
		echo 'изменили цвет на ' . $color . '<br>';
	}

	public function go() {
		//    реализация езды
		echo 'Машина поехала<br>';
	}

	//действие КОНСТРУКТОР - выполняется без явного вызова
}

$myCar = new Car('red',2022,'lada'); // конкретный объект - создать новый экземпляр машины на основе чертежа Car. Теперь это экземляр машины
$myCar->changeColor('Green');
//$myCar->color = 'red';
//$myCar->year = 2017;
//$myCar->manufacturer = 'Mersedes';
//
$myCar->startEngine();//заводим машину
$myCar->go();//едем

var_dump($myCar);

//каждый объект имеет один экземляр класса Car
//$myCar2 = new Car;
//$myCar3 = new Car;

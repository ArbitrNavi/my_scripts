<?php


interface EngineInterface
{
	public function on();

	public function off();
}

class Car
{
	private $color;
	private $year;
	private $manufacturer;
	private $engine;
	private $arrowLight;


	//Engine $newEngine - указали, что ожидаем исключительно объект типа Engine
	// Engine $newEngine - объект $newEngine должен быть класса типа Engine
	// EngineInterface $newEngine у объекта должен быть данный интерфейс
	function __construct($color, $year, $izgotovitel, EngineInterface $newEngine, arrowLight $arrowLight) {

		$this->changeColor($color);
		$this->year = $year;
		$this->manufacturer = $izgotovitel;

		$this->engine = $newEngine;

		$this->arrowLight = $arrowLight;
	}

	//изменить цвет
	public function changeColor($color) {
		if (is_string($color)) {
			$this->color = $color;
		} else {
			die('цвет должен быть строкой');
		}
	}


	//	поворотники
	public function arrowLight($course) {
		//		left
		//		right
		$this->arrowLight->course($course);

	}

	public function changeLight($arrowLight) {
		$this->arrowLight = $arrowLight;
	}

	//Запустили двигатель
	public function startEngine() {
		$this->engine->on();
	}

	// Заглушили двигатель
	// setter
	public function stopEngine() {
		$this->engine->off();
	}

	// getter
	public function displayColor() {
		return $this->color;
	}

}

// Свет
class arrowLight
{
	private $color;

	function __construct($color) {
		$this->color = $color;
	}

	public function course($course) {
		echo strtoupper($course) . " arrow signal " . strtoupper($this->color) . " (arrowLight)<br>";
	}

}


//Мотор
class Engine implements EngineInterface
{
	public function on() {
		echo "on(class Engine) <br>";
	}

	public function off() {
		echo "off(class Engine) <br>";
	}
}


class anotherEngine implements EngineInterface
{
	public function on() {
		//		code
	}

	public function off() {
		//		code
	}
}

//изготавливаем мотор
$engine = new Engine();
$anotherEngine = new anotherEngine();
//создаем нужные свет
$lightWhite = new arrowLight('white');
$lightYellow = new arrowLight('yellow');
$lightRed = new arrowLight('red');

$myCar = new Car('red', 2017, 'Merseder', $engine, $lightWhite);
//$myNewCar = new Car('silver', 2021, 'Audi', 456);
$myCar->changeLight($lightRed);
echo "<pre>";
var_dump($myCar);
$myCar->changeColor("blue");
echo $myCar->displayColor();
echo "<hr>";
$myCar->startEngine();
$myCar->arrowLight("right");
$myCar->stopEngine();


echo "</pre>";

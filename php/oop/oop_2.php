<?php
//ООП 5 приветные аттрибуты


// Объект - это сущность, одновременно содержащая данные и поведения
//объект - определяется 2 компонентами:
//Аттрибутами(размер, цвет, скорость, ...)
//Поведениями(бегать, прыгать, читать, ...)
//Инкапсуляция - скрытие реализации кода от пользователя, переменные и методы приватные


//метод setter (сеттер) изменение аттрибутов с помощью обращения к специальной функции в классе
//метод getter (getter) что-то получить, показать

//со стороны разработки это методы, со стороны пользователя - интерфейс
//элементы интерфейса являются только публичные аттрибуты и методы
//мы можем выставить уровень доступа и для метода, тем самым сделав их элементами интерфейса
//так же можно назвать эти методы точками соприкосновениями с пользователями - машина может заводиться, ехать
//тогда все остальные методы, которые не являются непосредственными точками соприкосновениями с пользователями - выставляем приватными

class Car
{
	private $color;
	private $year;
	private $manufacturer;

	//    действия / методы к объекту
	public function __construct($color, $year, $izgotovitel) {
		$this->changeColor($color);
		$this->year = $year;
		$this->manufacturer = $izgotovitel;
	}

	public function changeColor($color) {
		if (is_string($color)) {
			$this->color = $color;
			echo 'Изменили цвет на ' . $color . '<br>';
		} else {
			die('Цвет должен быть строкой!');
		}
	}

	//замена цвета
	//setter

	public function startEngine() {
		//    большой кусок сода завода мотора
	}

	//getter

	public function displayColor() {
		return $this->color;
	}
	//действие КОНСТРУКТОР - выполняется без явного вызова
}

$myCar = new Car('red', 2017, 'Mersees'); // конкретный объект - создать новый экземпляр машины на основе чертежа Car. Теперь это экземляр машины

$myCar->changeColor('blue');

var_dump($myCar);

echo $myCar->displayColor();

//банк
class BankAccount
{
	private $name;
	private $balance;
	private $registeredDate;

	public function showName() {
		#code
	}

	public function showBalance() {
		#code
	}

	public function withdraw() {
		//еще код...

		$this->checkBalance();

		//еще код
	}

	private function checkBalance() {
		//реализация
	}
}

$myBankUser = new BankAccount();
var_dump($myBankUser);
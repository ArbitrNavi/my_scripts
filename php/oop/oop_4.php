<?php
//трейты - инструмент позволяющий скопипастить код и подключать к другим классам
//использование трейта - для улучшения читабельности

//создали трейт
trait myGreetings
{
	public function sayHi() {
		echo 'Hi';
	}

	public function greet($person) {
		echo 'Greetings ' . $person;
		$this; //будет обращаться к тому классу, к которому этот трейт подключен, трейт экономит место в теле класса
	}

}

//создали класс и подключили его
class Person
{
	//подключили трейт, который расширил наш класс на 2 метода, подключая код, который ведет так,  как бы подключен был в текущем классе
	use myGreetings;

	//Приоритетность
	//Элементы из текущего класса переопределяют методы в трейте, которые в свою очередь переопределяют унаследованные методы в случае, если это дочерний класс

	//перезаписан метод в трейте
	public function sayHi() {
		echo 'Hello';
	}
}

$man1 = new Person();
$man1->sayHi();
$man1->greet("Ivan");
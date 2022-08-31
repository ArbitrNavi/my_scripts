<?php

class Person
{
	const ID = 10;
	public $name;
	public $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	public function sayHello() {
		return 'Hi I am ' . $this->name . ' and I am ' . $this->sayAge() . "<br>";
	}

	public function sayAge() {
		return $this->age; //14
	}

	public function setName($name) {
		$this->name = $name; //Rahim
	}

	public function setAge($age) {
		$this->age = $age;
	}
}

$myPerson = new Person('Rahim', 14);
$myPerson2 = new Person('Alisa', 10);

$myPerson->setAge('14');
$myPerson2->setName('Rahim');

echo $myPerson->sayHello();

echo $myPerson::ID;
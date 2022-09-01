<?php
// типизация
// каждый класс это свой тип данных
// line: 45 принимает только объект класса Person

class Person
{
	const ID = 5;
	public $name;
	public $age;

	public function __construct($name, int $age) {
		$this->name = $name;
		$this->age = $age;
	}

	public static function saySomething() {}

	public function sayHello() {
		return 'Hi I am ' . $this->name . ' and I am ' . $this->sayAge();
	}

	public function sayAge() {
		return $this->age; //14
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setAge($age) {
		$this->age = $age;
	}
}

class Student
{
	public $name = 'I am Student';
}

class University
{
	public $students;

	public function addStudent(Person $student) {
		echo $student->name;
	}

	//	public function __construct(array $students){
	//		var_dump($students);
	//	}
}

$univer = new University();

$student = new Person('Rahim', 20);

$univer->addStudent($student);

$student2 = new Student();

$univer->addStudent($student2);
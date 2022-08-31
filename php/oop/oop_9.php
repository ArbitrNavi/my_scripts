<?php

//Абстрактный метод
// нельзя создавать объект на его основе
// Минимум абстрактный метод
// Дочерние классы обязаны реализовать абстрактный метод

// Полиморфизм

abstract class Animal
{
	public abstract function makeSound();
}

class Cat extends Animal
{
	public function makeSound() {
		echo 'Meow<hr>';
	}

}

class Dog extends Animal
{
	public function makeSound() {
		echo 'Gav gav<hr>';
	}
}

class ХозяинЖивотных{
	public function проситьПодатьЗвук(Animal  $animal){
		echo "Хозяин животных - ";
		return $animal->makeSound();
	}
}


$cat = new Cat;
$dog = new Dog;

$dog->makeSound();

$я = new ХозяинЖивотных;
$я->проситьПодатьЗвук($cat);
$я->проситьПодатьЗвук($dog);

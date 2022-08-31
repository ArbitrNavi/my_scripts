<?php

//Абстрактный метод
// нельзя создавать объект на его основе
// Минимум абстрактный метод
// Дочерние классы обязаны реализовать абстрактный метод

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

$cat = new Cat;
$dog = new Dog;

$cat->makeSound();
$dog->makeSound();

//$animal = new Animal;
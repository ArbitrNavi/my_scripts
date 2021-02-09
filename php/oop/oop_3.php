<?php
//Наследование - позволяет строить дерево, кластер из объектов. Все что есть в текущем объекте будет доступно в унаследованном
//Родительские и дочерние классы

//protected (защищенный) - доступен для всех объектов находящихся в дереве наследования данного класса данного объекта
//public - открыть для всех объектов
//private - скрыт для всех объектов


class Animal{
    protected $name;
    public $color;
    public $age;

    public function makeSound(){
        //
    }

    public function move(){
        //
    }

}

//дочерний элемент класса Cat
class Cat extends Animal{

    public function move()
    {
        //реализация #2
    }
}

$myCat = new Cat;
$myCat->name;
$myCat->move(); //реализация #2
<?php
//Наследование - позволяет строить дерево, кластер из объектов. Все что есть в текущем объекте будет доступно в унаследованном


class Animal{
    public $name;
    public $color;

    public function makeSound(){
        //
    }

    public function move(){
        //
    }

}

class Cat extends Animal{

}

$myCat = new Cat;


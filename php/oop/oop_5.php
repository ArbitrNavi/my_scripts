<?php

class Car
{
    private $color;
    private $year;
    private $manufacturer;
    private $engine;


    //Engine $newEngine - указали, что ожидаем исключительно объект типа Engine
    function construct($color, $year, $izgotovitel,Engine $newEngine)
    {
        $this->color = $color;
        $this->year = $year;
        $this->manufacturer = $izgotovitel;

        $this->engine = $newEngine;
    }



    //Завели двигатель
    public function startEngine()
    {
        $this->engine->on();
    }

    //Заглушили двигатель
    public function stopEngine()
    {
        $this->engine->off();
    }

}

//Мотор
class Engine
{
    public function on()
    {
        echo "on";
    }

    public function off()
    {
        echo "off";
    }
}

//изготавливаем мотор
$engine = new Engine();

//$myCar = new Car('red', 2017, 'Merseder', $engine);
$myCar = new Car('red', 2017, 'Merseder', 123);
$myNewCar = new Car('silver', 2021, 'Audi', 456);

echo "<pre>";
var_dump($myCar);
$myNewCar->on;
echo "</pre>";

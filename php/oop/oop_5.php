<?php

class Car
{
    private $color;
    private $year;
    private $manufacturer;
    private $engine;

    function construct($color, $year, $izgotovitel, $newEngine)
    {
        $this->color = $color;
        $this->year = $year;
        $this->manufacturer = $izgotovitel;

        $this->engine = $newEngine;
    }

    public function startEngine()
    {
        $this->engine->on();
    }

    public function stopEngine()
    {
        $this->engine->off();
    }
}

class Engine
{
    public function on()
    {

    }

    public function off()
    {

    }
}

;

//изготавливаем мотор
$engine = new Engine();


$myCar = new Car('red', 2017, 'Merseder', $engine);

var_dump($myCar);
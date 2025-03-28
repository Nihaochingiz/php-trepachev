<?php

class Car
{
    public $color;
    public $fuel;

    public function go()
    {
        // Some code
    }

    public function turn()
    {
        // Some code
    }

    public function stop()
    {
        // Some code
    }

}

$BMW = new Car;

$BMW->color = 'orange';

$BMW->fuel = 150;


$BMW->go();

$BMW->turn();

$BMW->stop();
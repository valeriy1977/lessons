<?php

// чертёж будущих автомобилей (объектов)
class Auto
{
    public $name;
    public $brand;
    public $model;
    public $type;
    public $color;
    public $speed;
    public $year;
    public $engine;

    public function __construct($n,$b,$m,$t,$c,$s,$y,$e)
    {
        $this->name = $n;
        $this->brand = $b;
        $this->model = $m;
        $this->type = $t;
        $this->color = $c;
        $this->speed = $s;
        $this->year = $y;
        $this->engine = $e;

        $this->info();
    }

    public function info()
    {
        echo "Автомобиль<br>";
        echo "Принадлежит: ".$this->name." <br>";
        echo "Производитель: ".$this->brand." <br>";
        echo "Модель: ".$this->model."<br>";
        echo "Кузов: ".$this->type." <br>";
        echo "Цвет: ".$this->color."<br>";
        echo "Год выпуска: ".$this->year."<br>";
        echo "Скорость: ".$this->speed."<br>";
        echo "Объём двигателя: ".$this->engine."<br><br>";
    }
}
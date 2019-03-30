<?php

// чертёж будущих автомобилей (объектов)
class Auto
{
    public static $col; // статическое свойство, принадлежит не объекту, а классу
    public $label = "Автомобиль";
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
        static::$col++; // увеличиваем свойство на 1 у конкретного класса (позднее статическое связывание)

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
        echo "<br>{$this->label}<br>";
        echo "Принадлежит: ".$this->name." <br>";
        echo "Производитель: ".$this->brand." <br>";
        echo "Модель: ".$this->model."<br>";
        echo "Кузов: ".$this->type." <br>";
        echo "Цвет: ".$this->color."<br>";
        echo "Год выпуска: ".$this->year."<br>";
        echo "Скорость: ".$this->speed."<br>";
        echo "Объём двигателя: ".$this->engine."<br>";
    }
}

class Truck extends Auto
{
    public static $col;
    public $label = "Грузовик";
    public $cargo;

    public function info()
    {
        parent::info(); // вызываем родительський метод info
        echo "Грузоподъёмность: ".$this->cargo." тонн<br>";

    }

    // переопределяем родительский конструктор
    public function __construct($cg,$n, $b, $m, $t, $c, $s, $y, $e)
    {
        $this->cargo = $cg;
        parent::__construct($n, $b, $m, $t, $c, $s, $y, $e);// вызываем родительський конструктор
    }


}

class Bus extends Auto
{
    public static $col;
    public $label = "Автобус";
    public $seats;

    public function info()
    {
        parent::info(); // вызываем родительський метод info
        echo "Мест: ".$this->seats." мест<br>";

    }

    // переопределяем родительский конструктор
    public function __construct($st,$n, $b, $m, $t, $c, $s, $y, $e)
    {
        $this->seats = $st;
        parent::__construct($n, $b, $m, $t, $c, $s, $y, $e);// вызываем родительський конструктор
    }
}
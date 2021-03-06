<?php
/*namespace app\classes;*/

spl_autoload_register(function ($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
});

// создали новый объект (экземпляр класса Auto)
$valeriy_car = new app\classes\Auto("физ.лицу","Ford","Focus","седан","синий",180,2019,2);
$dfs = new app\cc\Auto();
//
//// создали второй объект (экземпляр класса Auto)
//$friend_car = new Auto("юр.лицу","Opel","Astra","седан","белый",160,2017,1.8);
//$wife_car = new Auto("физ.лицу","Kia","Picanto","хэтчбек","красный",120,2015,1);
//
//// создаём грузовик
//$work_car = new Truck(8,"юр.лицу","Man","x23","крупногабарит","красный",180,2017,5);
//
//// создаём автобус
//$work_car = new Bus(60,"юр.лицу","Scania","Irizar","пассажирский","красный",180,2017,5);
//
//echo "<br>Количество автомобилей: ".Auto::$col;
//echo "<br>Количество грузовиков: ".Truck::$col;
//echo "<br>Количество автобусов: ".Bus::$col;
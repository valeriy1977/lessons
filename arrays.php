<?php

$fruits["Яблоки"] = array("белый налив"=>9,"антоновка"=>7,"голден"=>3);
$fruits["Апельсины"] =  array("Африка"=>4,"Турция"=>9);
$fruits["Мандарины"] = 7;
$fruits["Бананы"] = 6;
$fruits["Ананасы"] =  5;
$fruits["Груши"] =  4;

foreach($fruits as $x => $a)
{

    echo $x;
    if (!is_array($a))
    {
        echo " - ".$a." кг.<br>";
    }
    else
    {
        echo "<br>";
        foreach ($a as $x1=>$a1)
        {
            echo "сорт: ".$x1." - ".$a1." кг.<br>";
        }
        echo "<br> <br>";
    }




}
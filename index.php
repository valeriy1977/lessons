<?php
require_once "lib/functions.php";
$data = db("SELECT menu_name,content FROM pages");

foreach ($data as $v)
{
    foreach ($v as $k1=>$v1)
    {
        echo "<br>".$k1." - ".$v1;
    }
}

summa(3,5);
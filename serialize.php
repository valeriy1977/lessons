<?php
$aaa = [1, 18, 'ok'];
$text = serialize($aaa);

echo $text;

$ddd = unserialize($text);
var_export($ddd);

<?php
$a = 2019;

var_dump($a) ;

echo '<br>';

define("NAME", "Юра" );

$age = 28;

echo 'Меня зовут: ' . NAME . '<br>';
echo 'Мой возраст ' . $age . ' лет' . '<br>';

$age = NULL;

var_dump($age);
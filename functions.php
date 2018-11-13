<?php

// функции
function name_of_functions()
{
    echo 'Привет Ворлд!';
}


// Функции с параметрами
function hello($name = 'Сеня') {
    echo 'Привет '.$name.'!';
}


// Хорошая практика
function hello2($name = 'Сеня') {
    $string = 'Привет '.$name.'!';
    return $string;
}
//echo $name; // Переменная существует только внутри функций

//$string = hello2();
//echo $string;




// Рекурсивные функции

function fibonaci() {
    fibonaci();
}


//recursion(5);
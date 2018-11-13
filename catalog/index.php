<?php

// объявил класс
class Student
{
    // Свойства класса
    public $name = '';
    public $family = '';
    public $faculty = 'Исторический факультет';

    //Вызывается при создании
    function __construct()
    {
        $this->faculty = 'Информационные системы';
    }

}

// Создаем студента

$student = new Student(); //конструктор
echo $student->faculty; 


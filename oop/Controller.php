<?php

class Controller
{

    public static function listAnimal()
    {
        include 'data.php';
        include 'view/list.php';
    }

    public static function detailAnimal()
    {
        include 'data.php';
        $object = '';
        foreach ($animals as $animal) {
            if ($_GET['name'] == $animal['name']) {
                $object = $animal;
            }
        }
        include 'view/detail.php';
    }

}
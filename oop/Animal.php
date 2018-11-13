<?php

//include 'functions.php';

class Animal
{
    public $type;
    public $color;
    public $name;
    public $age;
    public $place;
    public $speed;
    public $word = 'мяу';

    public function __construct($data)
    {

        foreach ($data as $key => $value) {
            $this->$key = $value;
        }

        $this->say();
    }

    protected function say()
    {
        echo $this->word;
    }


    public function run($time = 1)
    {
        echo 'переместился на '.$this->speed*$time.' метров';
    }


    /**
     * Метод создает несколько объектов собак
     * @param $count - число нужных объектов
     * @return array - массив с объектами
     */
    public static function getManyDogs($count)
    {
        $dogs = [];
        for($i =0; $i<$count; $i++) {
            $data_dog = ['name' => 'jon', 'type' => 'dog', 'color' => 'black', 'age' => 10, 'speed' => 2];
            $name = 'dog'.$i;
            $$name = new Dog($data_dog);
            $dogs[] = $$name;
        }

        return $dogs;
    }


}
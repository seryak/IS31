<?php

include 'Animal.php';
include 'Controller.php';
include 'Dog.php';
include 'functions.php';


$operation = $_GET['operation'];
Controller::$operation();



<?php
session_start();
//var_dump($_SESSION);

if (isset($_GET['fav'])) {
    $_SESSION['favs'][] = $_GET['fav'];
    header('Location: http://fenix.web/IS31/catalog/category.php');
}
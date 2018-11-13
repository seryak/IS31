<?php
session_start();
include 'data.php';
include 'functions.php';

$category_list = get_categories($restaurants);

?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Список ресторанов</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col col-3">
            <ul>
                <?php
                foreach($category_list as $category) {
                    echo '<li><a href="http://fenix.web/IS31/catalog/category.php?category='.$category.'">'.$category.'</a></li>';
                }
                ?>
            </ul>

            <h3>Избранное</h3>
            <?php
//            var_dump($_SESSION);
            if (isset($_SESSION['favs'])) {
                foreach ($_SESSION['favs'] as $fav) {
                    echo '<h5>'.$fav.'</h5>';
                }
            }
            ?>

        </div>
        <div class="col col-9">
            <?php
            if (isset($_GET['category'])) {
                $name = $_GET['category'];
                $restaurants = filter_restaurants($restaurants, $name);
                echo '<h1>'.$name.'</h1>';
            }
            ?>

            <ul>

                <?php
                foreach($restaurants as $restaurant) {
                    echo '<div class="row"><div class="col col-3"><img src="'.$restaurant['logo'].'"></div>
<div class="col col-3">'.$restaurant['title'].'</div> 
<div class="col col-3"><a href="favourite.php?fav='.$restaurant['title'].'">Добавить в избранное</a></div>

</div>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>



</body>
</html>

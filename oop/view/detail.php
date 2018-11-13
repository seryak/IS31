<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Животное <?php echo $object['name']; ?></title>
</head>
<body>

<h1><?php echo $object['name']; ?></h1>
    <ul>
        <?php foreach($object as $key => $value): ?>
            <li><?php echo $key.': '.$value; ?></li>
        <?php endforeach; ?>
    </ul>

<h5><a href="http://fenix.web/IS31/oop/index.php?operation=listAnimal">Назад к списку животных</a></h5>

</body>
</html>
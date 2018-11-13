<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список животных</title>
</head>
<body>
<style>
    table {
        border: 1px solid #000;

    }
    table td {
        padding: 10px;
        border: 1px solid #000;
        text-align: center;
    }
</style>
    <table>
        <thead>
            <tr>
                <td>Имя</td>
                <td>Вид животного</td>
                <td>Цвет</td>
                <td>Возраст</td>
                <td>Скорость</td>
                <td>подробнее</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($animals as $animal): ?>
            <tr>
                <td><?php echo $animal['name']; ?></td>
                <td><?php echo $animal['type']; ?></td>
                <td><?php echo $animal['color']; ?></td>
                <td><?php echo $animal['age']; ?></td>
                <td><?php echo $animal['speed']; ?> м. с.</td>
                <td><a href="http://fenix.web/IS31/oop/index.php?operation=detailAnimal&name=<?php echo $animal['name']; ?>"> Подробнее </a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
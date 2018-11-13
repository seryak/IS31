<html>
<head></head>
<body>
<form action="1.php" method="POST">
    <input type="text" name="day">
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php
$day = $_POST['day'];
if ($day == 'Среда') {
    echo 'Расписание на среду';
}


?>



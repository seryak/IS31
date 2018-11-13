<?php
session_start();
var_dump($_COOKIE);
setcookie('pol', 'woman');
?>

<form action="" method="POST">
    <input name="student[fio]" type="text" value="<?php echo $_POST['student']['fio'] ?>">
    <select name="student[pol]">
        <option value="w">девочка</option>
        <option value="m">мальчик</option>
    </select>
    <button> отправить </button>
</form>


<?php
session_start();

$_SESSION['user'] = ['fio' => $_GET['fio']];
unset($_SESSION['cart']); //Удалять

?>


<form action="session.php" method="GET">
    <input name="fio" type="text" value="">
    <select name="pol">
        <option value="девочка">девочка</option>
        <option value="мальчик">мальчик</option>
    </select>
    <button> отправить </button>
</form>

<?php
//echo $_GET['fio'].'<br>';
//echo $_GET['pol'];
//echo $_COOKIE['user_fio'];
var_dump($_SESSION);
?>
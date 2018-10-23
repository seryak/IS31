<?php
if (isset($_GET['fio'])) {
    setcookie('user_fio', $_GET['fio']);
}
?>


<form action="cookie.php" method="GET">
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
echo $_COOKIE['user_fio'];
?>
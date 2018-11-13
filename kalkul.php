<?php
$login = 'Macsym';
$pass = '0123';
if ($_COOKIE['logincook']==$login && $_COOKIE['passcook']==$pass) {
	header('location: http://fenix.web/IS31/XXweb.php');
}elseif ($login == $_POST['login'] && $pass == $_POST['pass']) {
	setcookie('logincook', $_POST['login']);
	setcookie('passcook', $_POST['pass']);
	header('location: http://fenix.web/IS31/XXweb.php');
}else{echo "Что то неверно";}
?>

<form method="POST" action="">
<input type="text" name="login"><br>
<input type="password" name="pass"><br>
<input type="submit" name="sub1">
</form>


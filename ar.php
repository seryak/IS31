<?php
$log = 'login';
$pass = '1234';
?>

<?php 
if(($_GET["login"]==$log and $_GET["password"]==$pass) or (isset($_COOKIE["logg"]) and isset($_COOKIE["pas"]))) {
	setcookie('logg', $_GET["login"]);
	setcookie('pas', $_GET["password"]);
	header('Location: '.'http://google.com');
}

?>

<?php if(($_GET["login"]==$log and $_GET["password"]==$pass) or (isset($_COOKIE["logg"]) and isset($_COOKIE["pas"]))): ?>
<?php setcookie('logg', $_GET["login"]); ?>
<?php setcookie('pas', $_GET["password"]); ?>
<form action=" " method="GET" name="dr">
<input type="submit" name="kn" value="zachem">
</form>
<?php else: ?>
	<form action=" " method="GET" name="vxod">
<input type="text" name="login"><br>
<input type="password" name="password"><br>
<input type="submit" name="enter">
</form>
<?php endif; ?>
<?php print_r( $_GET); ?>
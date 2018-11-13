<?php

setcookie('cook', $_POST['den']);
	switch ($_COOKIE['cook']) {
		case 'pon':
			echo 'MDK(i)'."<br>";
			echo 'MDK(b)'."<br>";
			echo 'MDK(b)'."<br>";
			break;
		case 'vt':
			echo 'mat.log'."<br>";
			echo 'MDK(ser)'."<br>";
			echo 'MDK(sem)'."<br>";
			break;
		case 'sr':
			echo 'english'."<br>";
			echo 'fizra'."<br>";
			echo 'MDK(i)'."<br>";
			break;
		case 'chet':
			echo 'MDK(i)'."<br>";
			echo 'MDK(i)'."<br>";
			echo 'MDK(i)'."<br>";
			break;
		case 'pt':
			echo 'MDK(ser)'."<br>";
			echo 'MDK(ser)'."<br>";
			echo 'MDK(ser)'."<br>";
			break;
		case 'sub':
			echo 'MDK(sem)'."<br>";
			echo 'MDK(sem)'."<br>";
			echo 'MDK(sem)'."<br>";
			break;
	}
}
?>

<form  method="POST" action="">
<select name="den">
	<option value="pon">Понедельник</option>
	<option value="vt">Вторник</option>
	<option value="sr">Среда</option>
	<option value="chet">Четверг</option>
	<option value="pt">Пятница</option>
	<option value="sub">Суббота</option>
</select><br>
<input type="submit" name="sub2" value="Priniat">
</form>

<?php
if ($_POST['sub2']) {
	switch ($_POST['den']) {
		case 'pon':
			echo 'MDK(i)'."<br>";
			echo 'MDK(b)'."<br>";
			echo 'MDK(b)'."<br>";
			break;
		case 'vt':
			echo 'mat.log'."<br>";
			echo 'MDK(ser)'."<br>";
			echo 'MDK(sem)'."<br>";
			break;
		case 'sr':
			echo 'english'."<br>";
			echo 'fizra'."<br>";
			echo 'MDK(i)'."<br>";
			break;
		case 'chet':
			echo 'MDK(i)'."<br>";
			echo 'MDK(i)'."<br>";
			echo 'MDK(i)'."<br>";
			break;
		case 'pt':
			echo 'MDK(ser)'."<br>";
			echo 'MDK(ser)'."<br>";
			echo 'MDK(ser)'."<br>";
			break;
		case 'sub':
			echo 'MDK(sem)'."<br>";
			echo 'MDK(sem)'."<br>";
			echo 'MDK(sem)'."<br>";
			break;
	}
}
?>
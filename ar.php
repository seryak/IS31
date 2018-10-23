<form action=" " name="kalk" method="get">
<input type="text" name="value1">
<select name="op">
<option name="sum" value="+">+</option>
<option name="raz" value="-">-</option>
<option name="mul" value="*">*</option>
<option name="del" value="/">/</option>
</select>
<input type="text" name="value2"><br>
<input type="submit" name="buttonkal" value="вычислить">
</form>
<?php
var_dump($_GET);
if ($_GET['buttonkal'] = "вычислить") {
    if($_GET['op']= '+') {
        echo 'плюс';
        $r=$_GET['value1'] + $_GET['value2'];
        echo $r;
    }
    elseif($_GET['op']='-'){
        echo 'минус';
        $r=$_GET['value1'] - $_GET['value2'];
        echo $r;
    }
    elseif($_GET['op']="*") {
        echo 'умножить';
        $r=$_GET['value1'] * $_GET['value2'];
        echo $r;
    }
}
?>
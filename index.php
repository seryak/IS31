<html>
<head>
    <title>PHP</title>
</head>
<body>
<h1>проверка связи</h1>
<?php
    $a = '0';
    define('GRUPPA', 'IS31');
    $b = 9;
    $c = 5;
    $a = 32;
    define('GRUPPA', 'IS32');
    echo GRUPPA;
    // int = целое число ()
    // float = число с плавающей точкой(8.08)
    // str = 'строка'
    // bool = true\false - типа да или нет \
    // array = array() - неправильно.
    // Правильно так - [ 3, 4, 5 ]
    // [3, 'прривет', '89']
    // [3, [3,4,5], 87]
    # операторы
    function privetGrupper() {
        // echo 'Группа №'.$nomer.' привет!'; // Плохо
        return 'Группа № IS31 привет!'; // Хорошо
        // после return код выполняться не будет
        echo 'Код ниже';
    }
    // echo $s; //нифига
    // echo summ(3, 5);  // 8
    // echo privetGrupper('IS31');
?>
<table>
<tr>
<td>2</td>
<td>2</td>
<td>4</td>
</tr>
<tr>
<td>2</td>
<td>3</td>
<td>6</td>
</tr>
<tr>
<td>2</td>
<td>4</td>
<td>8</td>
</tr>
</table>
<?php




    // echo - печатать значение
    // +, -, *, .
    # Логические операторы
    // <, >, <=, >=, ==, ===

    echo '<br>';

    if ('строка') {
        echo $c.' больше трех';
    } else {
        echo $c. 'меньше или равно 3';
    }

?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя работа #1</title>
</head>
<body>
<h1>Домашняя работа #1</h1>
1. Вебинар про GIT изучен.
<br><br>
2. Установлен следующий софт:<br>
<ul>
    <li>
        Open server
    </li>
    <li>
        JetBrain PHPStorm
    </li>
    <li>
        GIT for Windows
    </li>
</ul>

3. Результатом выполнения оператора присваивания является само присвоенное значение<br>
3.1. Таким образом, результатом выражения <b>$a = 2</b> будет: <b>
<?php
echo ($a = 2)
?></b>
<br>
3.2. В выражении <b>$x = ($y = 12) - 8; echo $x;</b> кроме выполнения арифметических операций происходит присваивание
значения переменной <b>$y</b>, и оператор присваивания возвращает присвоенное значание для дальнейшего вычисления.
Результат:<b>
<?php
$x = ($y = 12) - 8; echo $x;
?></b>
<br>
<br>
4. Выражение <b>$x = true xor true</b> вопреки ожиданиям вернет <b>
    <?php
    $x = true xor true;
    var_dump($x);
    ?>
</b>. Это происходит по причине того, что
побитовые логические операции имеют более низкий приоритет, чем операция присваивания. И значение записывается в
переменную до вычисления выражения.<br>
Нужно лишь верно расставить приоритеты. Вот так все будет верно: <b>$x = (true xor true)</b>. Результат:
<?php
$x = (true xor true);
var_dump($x);
?>
<br><br>
5.1 Для того, чтобы в консоли команда  php заработала, необходимо добавить путь до php.exe в переменную окружения PATH.
<br>
5.2 Выражение <b>(int)((0.1+0.7)*10);</b> в консоли возвращает 7, ожидаем 8. Причина в том, что некоторые рациональные
числа не могут быть представлены в качестве числа с плавающей точкой с основанием 2 без потери точности, и результат
выражения будет не точно 8, а значение, хоть и незначительно, но меньше 8. При явном приведении к int дробная часть
отбрасывается, и получается 7. Вот, что <a href="http://php.net/manual/ru/language.types.float.php">написано</a> по
этому поводу в мануале на php.net:
<blockquote><i>рациональные числа, которые могут быть точно представлены в виде чисел с плавающей точкой с основанием 10,
    например, 0.1 или 0.7, не имеют точного внутреннего представления в качестве чисел с плавающей точкой с
    основанием 2, вне зависимости от размера мантиссы. Поэтому они и не могут быть преобразованы в их внутреннюю
    двоичную форму без небольшой потери точности. Это может привести к неожиданным результатам: например,
    floor((0.1+0.7)*10) скорее всего вернет 7 вместо ожидаемого 8, так как результат внутреннего представления
    будет чем-то вроде 7.9999999999999991118....</i></blockquote>

<br>
6. оператор '%' - остаток от деления. Псевдослучайные числа полученные с помощью линейного конгруэтного метода ($Xn+1 = (a*$Xn + c) % m;):
<br>
<?php
const a = 7;
const c = 7;
const m = 10;
$Xn = 7;
//Цикл убираю, хотя, ИМХО, при известном заранее количестве итераций, for - отличное решение
/*for ($i = 1; $i <= 10; $i++){
    echo $Xn . '; ';
    $Xn = (a*$Xn + c) % m;
}*/
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';
$Xn = (a*$Xn + c) % m;
echo $Xn . '; ';


?>
</body>
</html>
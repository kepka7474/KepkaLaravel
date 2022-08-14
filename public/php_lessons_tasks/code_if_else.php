Конструкция if-else в PHP
<br>
<?php
$test = 3;

if ($test == 3) {
    echo '+';
}   else {
    echo '-';
}
?>

<br>
<?php
$test1 = 0;
$test2 = 2;
if ($test1 != $test2) {
    echo '+';
}   else {
    echo '-';
}
?>


<br>
<?php
if ('3' === 3) {
    echo '+';
} else {
    echo '-'; // сработает это, тк значения не равны по типу
}
?>

<br>
Типы данных и конструкция if-else в PHP
<br>
<?php
$test = 'abc';
if ($test == 'abc') {
    echo '+';
}   else {
    echo '-';
}
?>

<br>
Неравенство по значению и типу
<br>
<?php
$test1 = 3;
$test2 = '3';

if ($test1 !== $test2) {
    echo '+';
}   else {
    echo '-';
}
?>

<br>
Нюансы
<br>
<?php
if (0 == '') {
    echo '+'; // сработает это
} else {
    echo '-';
}
?>

<br>
Сложные условия в if-else в PHP
<br>
<?php
$num1 = -5;
if ($num1 > 0 and $num1 < 10) {
    echo 'охуел верно';
}   else {
    echo  'охуел неверно';
}
?>

<br>
<?php
$num1 = 10;
$num2 = -5;

if ($num1 > 0 or $num2 > 0) {
    echo '+'; // сработает это
} else {
    echo '-';
}
?>

<br>
Приоритет операций сравнения
Операция and имеет приоритет над or
<br>
Инвертирование высказываний в if-else
<br>
<?php
$num = -1;
if ( !($num > 0 and $num < 5) ) {
    echo '+';
}   else {
    echo '-';
}
?>

<br>
Конструкция if-else и булевы значения
<br>
<?php
$test = true;

if ($test === true) {
    echo '+';
}   else {
    echo '-';
}
?>

<br>
<?php
var_dump($test); // выведет null и ворнинг
?>

<br>
Элементы массивов
С помощью isset можно проверить существование элемента массива:
<br>
<?php
$arr = ['a', 'b', 'c'];

if (isset($arr['5'])) {
    echo $arr['5'];
} else {
    echo 'element does not exist';
}
?>

<br>
Команда empty в PHP
В PHP переменная будет пустая, если она равна 0, '', '0', false или null.
<br>
<?php
$test = '';

if (empty($test)) {
    echo 'empty +';
} else {
    echo 'empty -';
}
?>

<br>
<?php
$test = false;

if (!empty($test)) {
    echo 'false +';
}   else {
    echo 'false -';
}
?>

<br>
Комбинации конструкций if-else в PHP
<br>
<?php
$day = 24;

if ($day > 0 and $day < 11) {
   echo 'первая декада';
}
if ($day > 10 and $day < 21) {
    echo 'вторая декада';
}
else {
    echo 'третья декада';
}
?>

<br>
<?php
$arr23 = [1,2,3];

if (count($arr23) == 3) {
    echo 'sum = ', $arr23[0] + $arr23[1] + $arr23[2];
} else {
    echo 'newer';
}
?>
<br>
Практика на условия if-else в PHP
<br>
<?php
echo 'look at ', 5 % 3;
?>

<br>
<?php
$num = 12345;
$num = strval($num);
if ($num[0] == 1) {
    echo 'true';
}
if ($num[0] == 2) {
    echo 'false';
}
if ($num[0] == 3) {
    echo 'false';
}
?>

<br>
Конструкция switch-case в PHP
<br>
<?php
$num = 4;

switch ($num) {
    case 1:
        echo 'winter';
    break;
    case 2:
        echo 'spring';
    break;
    case 3:
        echo 'summer';
    break;
    case 4:
        echo 'autumn';
    break;
    default:
        echo 'not season data';
    break;
}

?>

<br>
Тернарный оператор в PHP
<br>
<?php
    $age = 17;
    var_dump($age >= 18 ? true : false);

?>

<br>
<?php
    $numm = -2;
    $result = $numm >= 0 ? "0 or +":"-";
    var_dump($result, $num);
?>

Оператор объединения с null в PHP
<br>
<?php
$user = ['name' => 'john', 'age' => 30];
$name = $user['name'] ?? 'unknown';
echo 'KTO HE3HAET HAIIIEFO ', $name
?>

<br>
<?php
$user = ['name1' => 'Micha', 'surname' => 'Gogovin'];
//if (isset($user['name'])) {
//    $result = $user['name'];
//} elseif (isset($user['surname'])) {
//    $result = $user['surname'];
//} else {
//    $result = '';
//}
$result = $user['name'] ?? $user['surname'] ?? '';
echo $result;
?>
<br>
Логические операции в PHP
<br>
<?php
$fox = 24;
$rat = 0.57;
var_dump($fox==$rat);
echo '<br>' . ($fox!=$rat) . '</br>';
?>

<br>
<?php
$a = 5 * (7 - 4);
$b = 1 + 2 + 7;
var_dump($a>$b);
?>


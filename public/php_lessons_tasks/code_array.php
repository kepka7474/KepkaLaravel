Изменение элементов массива в PHP
<br>
<?php
    $arr = [2,5,3,9];
    $result = $arr[0]*$arr[1] + $arr[2]*$arr[3];
    echo $result
?>

<br>
<?php
$arr = [1 =>'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб', 'fox' => 'вс'];
echo $arr['fox'];
?>

<br>
<?php
$arr = [1 =>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];

echo $arr[1]; // выведет 'пн'
echo $arr[2]; // выведет 'вт'
echo $arr[3]; // выведет 'ср'
?>

<br>
<?php
$arr = ['Yura' => 34, 'Vasya' => 42, 'Saska' => 33, "Gosha" => 34, 1 => 0];
var_dump($arr);
echo '<br>' . $arr['Saska'] . '</br>';
?>

<br>
<?php
$date = ['year' => 1990, 'month' => 12, 'day' => 5];
echo '0' . $date['day'] . '.' . $date['month'] . '.' . $date['year'];
?>

<br>
<?php
$arr = ['re' => 'ko', 'go' => 'go-go-go', 1 => 3];
$arr2 = ['a', 'b', 'c', 'd', 'e'];
echo $arr2[count($arr2)- 1]
?>

<br>
<?php
    $arr = ['a', 'b', 'c'];
    $arr[2] .= 'GGG';
    $arr[0] .= 'BMW';
    var_dump($arr);
?>

<br>
    Инкремент и декремент
<br>
<?php
    $arr = ['a' => 1, 'b' => 2];
    $arr['a']++;
    var_dump($arr);
?>

<br>
<?php
    $arr = [];
    $arr[] = 'a';
    var_dump($arr);
    $arr[] = 'bd';
    var_dump($arr);
    $arr[] = 'ssdfsrc';
    var_dump($arr);
?>

<br>
<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$key = 'b';
echo $arr[$key];
?>

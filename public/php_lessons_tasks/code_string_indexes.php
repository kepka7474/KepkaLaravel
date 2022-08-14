<h1>Получение символов строки на PHP</h1>

<?php
$str = 'abcde';
echo '<br>' . $str[0] . '</br>';
echo '<br>' . $str[3] . '</br>';
echo '<br>' . $str[4] . '</br>';
$str[0] = 'f';
echo '<br>' . $str;
?>

<br>
<?php
$str = 'abcde';
$num = 2; // номер символа в переменной
echo $str[$num]; // выведет 'd'
?>

<br>
<h2>Последний символ строки</h2>
<?php
$str = 'abcde';
echo $str[strlen($str) - 2]; // выведет 'e'
?>

<br>
<h2>Цифры в строке</h2>
<?php
$str = '12345';
echo $str[0] + $str[1]; // выведет 3
?>

<br>
<h2>Числа</h2>
<?php
$num = 12345;
$str = (string) $num;
$str[0] = 5;
$str[1] = 4;
$str[2] = 3;
$str[3] = 2;
$str[4] = 1;
echo $str[0]+$str[1]+$str[2]+$str[3]+$str[4];
echo '<br>' . $str . '</br>';
?>

<br>
<?php
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;
echo $num;
?>

<br>
<?php
$str = 'a';
$str .= 'b';
$str .= 'c';
$str2 = $str . $str . $str;
echo $str;
echo '<br>' . $str2 . '</br>';
?>

<br>
Операции инкремента и декремента в PHP
<?php
$num = 0;
$num--;    // прибавляем к переменной a число 1
echo '<br>' . $num . '</br>'; // выведет 1
?>

<br>
Префиксный и постфиксный тип
<br>
<?php
$num1 = 0;
$num2 = $num1++; // в переменную $num2 запишется 0
echo $num2;      // выведет 0
echo $num1;      // выведет 1 - переменная $num1 поменялась после записи
?>

<br>
<?php
$num1 = 3;
$num2 = ++$num1;
echo $num1;
echo $num2;
?>

<br>
<?php
$num1 = 3;
$num1++;
$num2 = $num1--;
echo '<br>' . $num1++ . '</br>';
echo '<br>' . --$num2 . '</br>';
?>

<br>
<?php
$arr = [2,5,3,9];
$result = $arr[0]*$arr[1] + $arr[2]*$arr[3];
echo $result
?>



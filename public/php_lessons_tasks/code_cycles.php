Цикл while в PHP
<br>
<?php
$i = 1; // задаем какую-нибудь переменную

while ($i <= 9) {
    echo '<br>' . $i; // выводим содержимое $i в консоль
    $i+=2;    // увеличиваем $i на единицу при каждом проходе цикла
}
?>
<br>
<?php
//$i = 10;
//
//while ($i > 0) {
//    echo ' ', $i;
//    $i--;
//}
?>
<br>
<?php
//$i = 10;
//
//while ($i >= 0) {
//    echo '<br>' . $i;
//    $i--;
//}
?>
<br>
Цикл for в PHP
<?php
/*
    В начале цикла $i будет равно нулю,
    цикл будет выполнятся пока $i <= 9,
    после каждого прохода к $i прибавляется единица:
*/
for ($i = 5; $i >= 0; $i--) {
    echo '<br>' . $i; // выведет 1, 2... 9
}
?><br>

<!--Накопление результата в цикле PHP<br>-->

<?php
//$result = 0;
//
//for ($i = 1; $i <= 99; $i+=2) {
//    $result = $result + $i;
//    echo '<br>' . $result;
//}

//echo $result; // искомая сумма
?><br>

Цикл foreach в PHP<br>
<?php
//$arr = ['a', 'b', 'c', 'd', 'e'];
//foreach ($arr as $elem) {
//    echo $elem . '<br>';
//}
?>

<?php
$summa = 0;

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $elem) {
    $summa += $elem;


}
echo $summa . '<br>';
echo $summa/count($arr);
?><br>

Получение ключей в цикле foreach в PHP<br>
<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e'
=> 5];

foreach ($arr as $key => $elem) {
    echo $key.'-'.$elem; // выведет: 'a-1', 'b-2', 'c-3' и так

	}
?><br>

<?php
$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
foreach ($arr as $key => $elem) {
    echo $key.'-'.$elem."<br>";
}
?>
Перебор массива и if в PHP<br>
<?php
$arr = ['пн', "вт", "ср", "чт", "пт", "сб", "вс"];

foreach ($arr as $elem) {
    if ($elem == "вс" or  $elem == "сб") {
        echo '<b>'.$elem.'</b>'.'<br>';
    } else {
        echo $elem.'<br>';
    }
}
?><br>

<?php
for ($i = 0, $j = 0; $i <= 9; $i++, $j += 2) {
    echo $i . ' ' . $j . '<br>';
}
?><br>

Инструкция break в PHP<br>
<?php
$count = 100;
$num = 0;
$arr = [1,2,3,4,5,6,8,9,10,11,12,13,14,15,16,17,18,19];
foreach ($arr as $elem) {
    if ($count<=0) {
        break;
    } else {
        echo '|' . $count . ' ' . $elem;
        $count -=$elem;
        $num += 1;
    }
}
echo '<br>' . $count, ' ' . $num;
?><br>

Работа с флагами в PHP<br>
<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = false;
foreach ($arr as $elem) {
    if($elem === 'c') {
        $flag = true;
        break;
    }
}
if ($flag === true) {
    echo 'есть';
}   else {
    echo 'нет';
}
?><br>

Нахождение простых чисел на PHP<br>

<?php
$num  = 31;   // некоторое число
$flag = true; // начальное значение флага
for ($i = 2; $i < $num; $i++) {
    if ($num%$i===0) {
        $flag=false;
        break;
    }
}
var_dump($flag);
?><br>

Циклы без заданного количества итераций в PHP<br>
<?php
$num = 2;
$count = 0;
while ($num <= 1000) {
    $num *= 3;
    $count += 1;
}
echo $num . '<br>';
echo $count;
?><br>
<?php
    for ($num = 2, $count = 0; $num < 1000; $num*=3, $count++);
    echo $num . ' ' . $count;
?><br>

Формирование строк через циклы в PHP<br>
<?php
$str = ''; // начальное значение - пустые кавычки

for ($i = 1; $i <= 9; $i++) {
    $str = $str . $i . '-';
}

echo $str; // выведет 'xxxxxxxxxx'
?><br>

Вложенные циклы в PHP<br>
<?php
for ($i = 1; $i <=7; $i++) {
    echo '|';
    for ($j = 1; $j <=7; $j++) {
        echo $i . $j . '|';
    }
    echo '<br>';
}?><br>

Заполнение массивов через цикл в PHP<br>
<?php
$arr = [];

for ($i = 0; $i <= 99; $i++) {
    if ($i % 2 != 0) {
        $arr[] = $i;
    }

}

var_dump($arr);
echo '<br>' . $arr[49];
?><br>

Цикл for для массивов в PHP<br>
<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$length = count($arr);
for ($i = 0; $i < $length-1; $i++) {
    echo $arr[$i] . '<br>';
}
?><br>
<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = (count($arr))/2;
echo '<br>' . (count($arr))/2 . '<br>';
for ($i = 0; $i < $length; $i++) {
    echo $arr[$i];
}
?><br>
<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$sum = 0;
$length = count($arr);
for ($i = 1; $i < $length; $i++) {
    $sum += $arr[$i];
}

echo $sum;
?><br>

Изменение массива в цикле PHP<br>
<?php
$arr = [11,22,33,44,55,66,77,88];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $arr[$i]+=10;
    echo $arr[$i].'<br>';

}
var_dump($arr);
?><br>

Практика на массивы в цикле в PHP<br>
<?php
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];

foreach ($arr as $key => $value) {
    if ($value>400) {
        $arr[$key] = $value + (($value/100)*10);
        echo $arr[$key];
    }
}
var_dump($arr);
?><br>
<?php
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$keys = 0;
$values = 0;
foreach ($arr as $key => $value) {
    $keys += $key;
    $values += $value;

}
echo '----' . $keys/$values;
?><br>

<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e'
=> 5];
$arr_keys = [];
$arr_values = [];
foreach ($arr as $key=>$value) {
    $arr_keys[] = $key;
    $arr_values[] = $value;
}
var_dump($arr_keys);
echo '<br>';
var_dump($arr_values);
?><br>

<?php
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$arr_2 =[];
foreach ($arr as $key => $value) {
    if (strval($value)[0] === '1' or strval($value)[0] === '2') {
        $arr_2[] = $value;
    }
}
var_dump($arr_2);
?>
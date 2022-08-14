Получение соседей элементов в массиве PHP<br>
<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$length = count($arr);

for ($i = 1; $i < ($length - 1); $i++) {

    echo ($arr[$i + 1] + $arr[$i - 1] + $arr[$i])  . '<br>';

}
?><br>

<?php
$one = 0;
$two = 1;
$three = 2;
for ($i = 1; $i <=9; $i++) {
    $current = $one  + $two + $three;
    $one = $two;
    $two = $three;
    $three = $current;

    echo  $current . '<br>';
}
?><br>

<?php
$arr = [];
for ($i = 1; $i <= 6; $i++) {

        $str_null = '';
        for ($j = 1; $j <= 3; $j++) {

            $str_null .= $i;
        }
        $arr[] = $str_null;

}
var_dump($arr);
?><br>

Отработка циклов PHP<br>
<?php
$arr = [];
for ($i = -3; $i <=10; $i++) {
    if ($i > 0 and $i < 10) {
        $arr[]=$i;
        echo $i.'<br>';
    }
}
var_dump($arr);
?><br>
<?php
$flag = false;
$arr = [2,3,4,2,5,9,0];
foreach ($arr as $elem) {
    if ($elem === 5) {

        $flag = true;
    }


}
if ($flag === true) {
    echo "есть 5";
} else {
    echo "нет 5";
}
?><br>

<?php
$num = 6;
$fact = 1;
for ($i = 1; $i<=$num; $i++) {
    $fact *=$i;
}
echo 'FACTORIAL'. $fact;
?><br>

Многомерные массивы в PHP.<br>
<?php
$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];
echo $arr[3][2];
echo $arr[1][1];
echo $arr[2][0];
echo $arr[0][0];
?><br>
Трехмерный массив<br>
<?php
	$arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];
$sum = 0;
foreach ($arr as $elem) {
    foreach ($elem as $elem_2) {
        foreach ($elem_2 as $elem_3) {
            $sum += $elem_3;
        }
    }
}
echo $sum;
?><br>
<?php
$arr = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];
$count = 0;
foreach ($arr as $elem) {
    foreach ($elem as $elem_1) {
        foreach ($elem_1 as $elem_2) {
            $count +=$elem_2;
            echo $elem_2. '-'.$count . '<br>';
        }
    }
}
echo $count;
?><br>

<?php
$arr = [
    'group1'  => ['user11', 'user12', 'user13', 'user43'],
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];
foreach ($arr as $key => $value) {
    foreach ($value as $elem) {
        echo $key. ' - '.$elem.'<br>';
    }

}
?><br>
Заполнение многомерных массивов PHP<br>
<?php
$arr = [];
for ($i = 1; $i<=3; $i++) {
    $st2 ='';
    for ($j = 0; $j<=4; $j++) {
        $arr[$i][$j]='x';
        echo "x".'<br>';
        $st2 .= ' x';
    }
    echo $st2.'<br>';
}
var_dump($arr);
?><br>
HHHHH<br>
<?php
$arr = [];
for ($i = 0; $i<=2; $i++) {

    for ($j=0; $j<=1; $j++) {
        $st = '';
        for ($k=0; $k<=4; $k++) {
            $arr[$i][$j][$k] = $k+1;
            $st .= ($k+1);
        }
        echo $st.'<br>';
    }
    echo '<br>';
}
var_dump($arr);
?><br>
Заполнение числами по порядку<br>
<?php
$arr = [];


for ($i = 0, $k = 1; $i <3; $i++) {
    for ($j = 0; $j <3; $j++, $k++) {
        $arr[$i][$j] = $k;
    }
}
var_dump($arr);
?><br>
<?php
$arr = [];
for ($i = 0, $k = 1; $i<4; $i++) {
    for ($j = 0; $j<2; $j++, $k++) {
        $arr[$i][$j]=$k;
    }
}
var_dump($arr);
?><br>
<?php
$str = 'aaa';
echo 'xxx'.$str.'xxx'.'<br>';

echo "xxx $str xxx";

<?php
//    echo 123;//coment
//    var_dump('12345');
//    $num = 123;
//    echo $num;
    /*
    dfggh dfgh hhh
    dffdf
    fgh
    */

//$a = '290';
//echo $a;
?>

Саша

<?php
//    $string_1 = '10';
//    $string_2 = 'ass';
//    $sum_string = $string_1 .' '. $string_2 . ' foo';
//    echo $sum_string;

?>
<br>
<?php
    echo strlen('abcde');
?>
<br>
<?php
    $string_1 = 'ghost';
    echo strlen($string_1);
?>
<br>
<?php
    $string_1 = '<br>приедем';
    echo mb_strlen($string_1);
    echo $string_1;
?>
<?php
echo '<br><b>жирный</b>';
?>

<?php
echo '<a href="../index.php">ссылка</a>';
?>
<br>
<?php
$href = 'index.php';
$text = 'ссылка';

echo '<a href="' . $href . '">' . $text . '</a>';
?>
<br>
<?php
    echo '<img src="../scree.png" width="300" height="400">';
?>

<br>
<?php
    echo '<p><b>Ваше имя:</b><br>
   <input type="text" size="90">
   </p>';
?>

<br>
<?php
echo '<p><b>Ваше мнение:</b><br><p><textarea rows="10" cols="90" name="text">Писька</textarea></p>';
?>

<?php
$isAdult = true;
var_dump($isAdult); // выведет true
echo '<br>' . true . '</br>';
echo '<br>' . false . '</br>';
?>

<?php
var_dump('Моя писька'); // выведет true
?>

<br>
<?php
$test = null;
var_dump($test); // выведет null
echo $test;
?>

<br>
<?php
$three = 3;
$nine  = '9';
echo "<br>" . ('1' + 90 + $three + $nine) . "</br>"; // выведет 3
echo 1 . '3';
?>

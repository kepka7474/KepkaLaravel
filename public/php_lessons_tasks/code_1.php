<h1>Принудительное преобразование типов в PHP</h1>

<?php
$test = (int) '1';
var_dump($test); // выведет 1 - число
?>

<?php
var_dump((int) '1');
?>

<?php
$test = '1';
var_dump((int) $test);
?>

<br>
<?php
$test = '12345';
var_dump($test);
var_dump((int) $test);
?>

<br>
<?php
$test = '1.2';
var_dump($test);
?>

<br>
<?php
$test = (float) '1.2';
var_dump($test); // выведет 1.2
?>

<br>
<?php
$test = '12.345';
var_dump((int) $test);
?>

<br>
<h2>Преобразование к строке</h2>

<?php
$test = (string) 12.3;
var_dump($test); // выведет '123'
?>
<?php
$id = $_GET['id'];

$v_connect = mysqli_connect('db', 'mysql','test45','laravel');
$query = "SELECT * FROM herb_types_products_list WHERE id =".$id;
$my_result = mysqli_query($v_connect, $query);
$type = mysqli_fetch_row($my_result);


$query_type = "SELECT * FROM herb_categories_products_list WHERE type_id =".$id;
$my_result_type = mysqli_query($v_connect, $query_type);
$categores = mysqli_fetch_all($my_result_type);
//print_r($categores[1]);
//$query_type = "SELECT * FROM herb_products_position_list WHERE product_name_id =".$categores[1][0];
//$my_result_type = mysqli_query($v_connect, $query_type);
//$categores = mysqli_fetch_all($my_result_type);


mysqli_close($v_connect);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Type</title>
</head>
<body>
<h3>тип</h3>
    <a href="index.php">GO HOME</a>
<?php

    echo '<h2>'. mb_strtoupper($type[3]) . '</h2>';
    echo "<img src='$type[2]' height='200'>".'<br>';

foreach ($categores as $key => $category){
    echo '<br>'.'<a href="category.php?id='.$category[0].'">'.$category[4].'</a>'.'<br>';
}
?>
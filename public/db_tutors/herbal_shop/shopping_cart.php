<?php
$position_id = $_POST['id'];
$count = $_POST['count'];
if($count<=0){
    $count=1;
}
$v_connect = mysqli_connect('db', 'mysql','test45','laravel');
$query = 'SELECT * FROM herb_all_products_position_table WHERE id ='.$position_id;
$my_result = mysqli_query($v_connect, $query);
$position = mysqli_fetch_row($my_result);


$query1 = 'SELECT * FROM herb_all_products_name_table WHERE id ='.$position[5];;
$my_result1 = mysqli_query($v_connect, $query1);
$product_name= mysqli_fetch_row($my_result1);

$query2 = 'SELECT * FROM herb_units WHERE id ='.$position[3];
$my_result2 = mysqli_query($v_connect, $query2);
$unit= mysqli_fetch_row($my_result2);

$query_insert = "INSERT INTO herb_orders (position_id, count) VALUES ('$position[0]', '$count')";
$my_result2 = mysqli_query($v_connect, $query_insert);


mysqli_close($v_connect);
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Ordering</title>
</head>
<body>
<h3>ВАША ПОКУПКА</h3>
<?php
$sum = $count * $position[4];
?>
<h1> <?php echo "$product_name[1]  $position[2]  $unit[1] $position[4]руб ----- $count шт на сумму: $sum" ?></h1>
<?php
//echo '<a href="position.php?id='.$position[0].'">GO BACK</a>';
//echo $position[0];
?>
<meta http-equiv="refresh" content="2; url=position.php?id=<?php echo $position[0];?>">
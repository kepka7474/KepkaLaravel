<?php

$id = $_GET['id'];

$v_connect = mysqli_connect('db', 'mysql','test45','laravel');
$query = 'SELECT * FROM herb_all_products_position_table WHERE id ='.$id;
$my_result = mysqli_query($v_connect, $query);
$position = mysqli_fetch_row($my_result);
$product_name_id = $position[5];

$query = 'SELECT * FROM herb_all_products_name_table WHERE id ='.$product_name_id;
$my_result1 = mysqli_query($v_connect, $query);
$product_name= mysqli_fetch_row($my_result1);

$query = 'SELECT * FROM herb_units WHERE id ='.$position[3];
$my_result2 = mysqli_query($v_connect, $query);
$unit= mysqli_fetch_row($my_result2);
mysqli_close($v_connect);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Position</title>
</head>
<body>

<h1> <?php echo $product_name[1] ?></h1>
<?php
    echo '<a href="category.php?id='.$product_name[4].'">GO BACK</a>';

?>

<?php
echo "<img src='$product_name[5]' height='180'>";
    echo '<br>'.'<br>'.'<b>'. '<p>'. "$product_name[1]  $position[2] $unit[1]".'</p>'.'</b>';
    echo '<h3>'."цена - $position[4] руб.".'</h3>';
    echo '<b>'.'ОПИСАНИЕ:'.'</b>'.'<br>';
    echo '<text>'.$product_name[3].'</text>';
    echo '<br><br><br>';
    echo "укажите колличество:
        <form action='shopping_cart.php' method='post' enctype='multipart/form-data'>
            <input type='hidden' name='id' value='$position[0]'>
            <input type='number' name='count'>
            <input type='submit' value='КУПИТЬ'>
            
        
        </form>
    ";


?>


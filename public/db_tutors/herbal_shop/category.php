<?php
$id = $_GET['id'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel');
$query = "SELECT * FROM herb_categories_products_list WHERE id =".$id;
$my_result = mysqli_query($v_connect, $query);
$category = mysqli_fetch_row($my_result);
//print_r($category);
//$query = 'SELECT * FROM herb_all_product_name_table WHERE category_id ='.$id;

//    $my_result1 = mysqli_query($v_connect, $query);
$my_result1 = mysqli_query($v_connect, 'SELECT * FROM herb_all_products_name_table WHERE category_id ='.$id);
$product_name = mysqli_fetch_all($my_result1);

foreach ($product_name as $key => $product) {

    $my_result1 = mysqli_query($v_connect, 'SELECT * FROM herb_all_products_position_table WHERE product_name_id ='.$product[0]);
    $position = mysqli_fetch_all($my_result1);
    $product_name[$key]['position'] = $position;

    foreach ($position as $value) {

        $my_result1 = mysqli_query($v_connect, 'SELECT * FROM herb_units WHERE id ='.$value[3]);
        $unit = mysqli_fetch_all($my_result1);

//        $product_name[$key]['position']['unit'] = $unit;
//        print_r($unit[0][1].'<br>');
    }
}

mysqli_close($v_connect);

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Category</title>
</head>
<body>
<h3>категория</h3>
<?php
    echo "<img src='$category[3]' height='200'>";
    echo '<h2>'. mb_strtoupper($category[4]) . '</h2>';
?>
<a href="index.php">GO HOME</a>
<?php
if ($product_name[1]){
    foreach ($product_name as $key => $value) {
    //    print_r($value);
        echo '<ul><b>'.''.'</b>';
        foreach ($value['position'] as $position){
            $img =  "<img src='$value[5]' height='45'>";
            echo '<li>'.$img.'<a href="position.php?id='.$position[0].'">'.$value[1].' '. $position[2].' '.$unit[0][1].' - '. $position[4].' руб </a></li>';
    //        echo $position[0];
        }
        echo "</ul>";


    }
} else {
    echo '<br>'.'<p>'.'нет товаров в данной категории'.'</p>';
}
?>


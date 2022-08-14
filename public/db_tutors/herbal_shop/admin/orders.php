
<a href="/db_tutors/herbal_shop/admin/index.php">GO BACK</a>

<br><b>ЗАКАЗЫ:<br></b>

<?php
$v_connect = mysqli_connect('db', 'mysql','test45','laravel');

$query = 'SELECT * FROM herb_orders';
$my_result1 = mysqli_query($v_connect, $query);
$orders = mysqli_fetch_all($my_result1);


foreach ($orders as $order) {
    $query2 = 'SELECT * FROM herb_all_products_position_table WHERE id='.$order[2];
    $my_result2 = mysqli_query($v_connect, $query2);
    $order_position = mysqli_fetch_row($my_result2);


    $query3 = 'SELECT * FROM herb_all_products_name_table WHERE id='.$order_position[5];
    $my_result3 = mysqli_query($v_connect, $query3);
    $product = mysqli_fetch_row($my_result3);
//    print_r($order_position[5]);


    $query4 = 'SELECT * FROM herb_units WHERE id='.$order_position[3];
    $my_result4 = mysqli_query($v_connect, $query4);
    $unit = mysqli_fetch_row($my_result4);


    echo '<br>'.'Заказ номер'.' '.$order[0].' '.'от'.' '.$order[6].' - '.$product[1].' '.$order_position[2].' '.$unit[1].' - '.'заказано'.' 
    '. $order[3].' '.'позиций'.' '.'на сумму'.' '. $order_position[4]*$order[3].' '.'руб';
//    print_r($product[0]);
    echo '<br>';







}




mysqli_close($v_connect);

?>
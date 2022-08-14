<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>CALCULATIONS</title>
</head>
<body>
<h1>
    CALCULATIONS
</h1>

<a href="/db_tutors/herbal_shop/admin/index.php">GO BACK</a>

<?php
$v_connect = mysqli_connect('db', 'mysql','test45','laravel');


$query = 'SELECT * FROM herb_orders';
$my_result1 = mysqli_query($v_connect, $query);
$orders1 = mysqli_fetch_all($my_result1);
$all_orders_sum = 0;

foreach ($orders1 as $order) {
    $all_orders_sum += 1;
}

echo '<br><br> общее число заказов - '.$all_orders_sum;


$query = 'SELECT * FROM herb_orders WHERE datetime1 >= (NOW() - INTERVAL 1 DAY + INTERVAL 7 HOUR)';
$my_result1 = mysqli_query($v_connect, $query);
$orders = mysqli_fetch_all($my_result1);

$all_orders_sum = 0;
$orders_today = 0;

foreach ($orders as $order) {


    $query2 = 'SELECT * FROM herb_all_products_position_table WHERE id='.$order[2];
    $my_result2 = mysqli_query($v_connect, $query2);
    $position = mysqli_fetch_row($my_result2);
    $orders_today += 1;
    $all_orders_sum += $position[4]*$order[3];
}
echo '<br>'.'заказов за сегодня - '.$orders_today;
echo '<br> cумма заказов за сегодня: '.$all_orders_sum.'.руб';


$query = "SELECT * FROM herb_orders WHERE datetime1 >= (NOW() - INTERVAL 1 DAY  + INTERVAL 22 HOUR)";
$my_result1 = mysqli_query($v_connect, $query);
$orders = mysqli_fetch_all($my_result1);
$orders_today = 0;

foreach ($orders as $order) {
    $orders_today+=1;
}
echo '<br>'.'заказов за последние 2 часа - '.$orders_today;


//------best_selling_position
$query_q = "SELECT * FROM herb_all_products_position_table";

$query = "SELECT * FROM herb_all_products_position_table";
$my_result1 = mysqli_query($v_connect, $query);
$positions = mysqli_fetch_all($my_result1);
$sum_positions = [];

foreach ($positions as $position) {


    $query = 'SELECT * FROM herb_orders WHERE position_id='.$position[0];
    $my_result1 = mysqli_query($v_connect, $query);
    $orders1 = mysqli_fetch_all($my_result1);
    $sum_orders = 0;

    if($orders1) {
        foreach ($orders1 as $order){

            $sum_orders += $order[3]*$position[4];

        }
    }
    $sum_positions["$position[0]"] = $sum_orders;
}
$sum_positions_max = 0;
$sum_positions_key = 0;
foreach ($sum_positions as $key => $sum_position)

    if($sum_positions_max<$sum_position){
        $sum_positions_max = $sum_position;
        $sum_positions_key = $key;
    }

$query = 'SELECT * FROM herb_all_products_position_table WHERE id='.$sum_positions_key;
$my_result1 = mysqli_query($v_connect, $query);
$best_selling_position_row = mysqli_fetch_row($my_result1);


$query = 'SELECT * FROM herb_all_products_name_table WHERE id='.$best_selling_position_row[5];
$my_result1 = mysqli_query($v_connect, $query);
$best_selling_position_prod_row = mysqli_fetch_row($my_result1);


$query = 'SELECT * FROM herb_units WHERE id='.$best_selling_position_row[3];
$my_result1 = mysqli_query($v_connect, $query);
$best_selling_position_units_row = mysqli_fetch_row($my_result1);


$query = 'SELECT count FROM herb_orders WHERE position_id='.$sum_positions_key;
$my_result1 = mysqli_query($v_connect, $query);
$orders_by_position_id = mysqli_fetch_all($my_result1);


$position_count_sum = 0;
foreach ($orders_by_position_id as $key => $count) {
    $position_count_sum += $count[0];
}

echo "<br><a href='/db_tutors/herbal_shop/position.php?id=$sum_positions_key'> Позиция $best_selling_position_prod_row[1] 
    $best_selling_position_row[2] $best_selling_position_units_row[1] принесла самую большую прибыль, всего было продано
    $position_count_sum позиций на сумму: $sum_positions_max руб</a>";


//----best_selling_position_end

//----best_selling_product


$query = 'SELECT id FROM herb_all_products_name_table';
$my_result1 = mysqli_query($v_connect, $query);
$products_ids = mysqli_fetch_all($my_result1);


$all_products_profits = [];
$max_product_profit = 0;
$max_product_profit_id = 0;
$num = 0;

foreach ($products_ids as $key => $prod_id){

    $query = 'SELECT price, id FROM herb_all_products_position_table WHERE product_name_id='.$prod_id[0];
    $my_result1 = mysqli_query($v_connect, $query);
    $prod_positions_price_id = mysqli_fetch_all($my_result1);
    $product_profit = 0;

    foreach ($prod_positions_price_id as $position){
        $query = 'SELECT count FROM herb_orders WHERE position_id='.$position[1];
        $my_result1 = mysqli_query($v_connect, $query);
        $herb_orders_counts = mysqli_fetch_all($my_result1);
        $position_sell_count = 0;

        foreach ($herb_orders_counts as $order_count) {

            $position_sell_count += $order_count[0];
        }
        $position_profit = $position_sell_count * $position[0];
        $product_profit+=$position_profit;

    }

    $all_products_profits[$prod_id[0]] = $product_profit;
}

foreach ($all_products_profits as $key => $all_products_profit) {
    if ($max_product_profit<$all_products_profit) {
        $max_product_profit = $all_products_profit;
        $max_product_profit_id = $key;
    }
}

$query = 'SELECT name FROM herb_all_products_name_table WHERE id='.$max_product_profit_id;
$my_result1 = mysqli_query($v_connect, $query);
$profit_product_name = mysqli_fetch_row($my_result1);
echo '<br> Самый продаваемый продукт - '.$profit_product_name[0].' продажи на сумму: '.$max_product_profit.'.руб';



//----best_selling_product_end

//----3_orders



$orders = 3;
echo "<h3>Последние заказы</h3>";


$query_3_orders = "SELECT * FROM (SELECT * FROM herb_orders ORDER BY id DESC LIMIT $orders) t ORDER BY id";
$my_result_3o = mysqli_query($v_connect, $query_3_orders);
$result_3_orders  = mysqli_fetch_all($my_result_3o);

foreach ($result_3_orders as $key => $order) {


    $query_p = 'SELECT amount, units_id, price, product_name_id FROM herb_all_products_position_table WHERE id='.$order[2];
    $my_result_3o = mysqli_query($v_connect, $query_p);
    $from_position  = mysqli_fetch_row($my_result_3o);


    $query_pro = "SELECT name FROM herb_all_products_name_table WHERE id=".$from_position[3];
    $my_result_3o = mysqli_query($v_connect, $query_pro);
    $product_name  = mysqli_fetch_row($my_result_3o);


    $query_u = "SELECT unit_type FROM herb_units WHERE id=".$from_position[1];
    $my_result_3o = mysqli_query($v_connect, $query_u);
    $unit  = mysqli_fetch_row($my_result_3o);

    $order_sum = $order[3]*$from_position[2];

    echo '<br>';
    echo " $order[6] $product_name[0] $from_position[0] $unit[0] $order[3] шт на сумму $order_sum";
    echo '<br>';


//    echo '<br>'.$position_id;
}
?>



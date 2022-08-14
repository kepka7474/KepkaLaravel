<?php
$new_position = $_POST;
//print_r($new_position);
$barcode = $_POST['barcode'];
$amount = $_POST['amount'];
$units_id = $_POST['units_id'];
$price = $_POST['price'];
$product_name_id = $_POST['product_name_id'];
//echo $barcode. ' ' .$product_name_id;
$v_connect = mysqli_connect('db', 'mysql','test45','laravel');
//$query = "INSERT INTO herb_all_products_position_table (barcode, amount, units_id) VALUES ('$barcode', '$amount','$units_id')";
$query = "INSERT INTO herb_all_products_position_table (barcode, amount, units_id, price, product_name_id) VALUES ('$barcode', '$amount','$units_id','$price','$product_name_id')";
$my_result = mysqli_query($v_connect, $query);
mysqli_close($v_connect);

?>
<meta http-equiv="refresh" content="1; url=index.php">

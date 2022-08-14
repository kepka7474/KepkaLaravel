<?php
$id = $_POST['id'];
$barcode = $_POST['barcode'];
$amount = $_POST['amount'];
$units_id = $_POST['units_id'];
$price = $_POST['price'];
$product_name_id = $_POST['product_name_id'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');

$query = 'UPDATE herb_all_products_position_table SET barcode = "'.$barcode.'", amount = "'.$amount.'", units_id = "'.$units_id.'", 
price = "'.$price.'", product_name_id = "'.$product_name_id.'" WHERE id ='.$id;

$result = mysqli_query($v_connect, $query);

mysqli_close($v_connect);
?>
<meta http-equiv="refresh" content="1; url=index.php">

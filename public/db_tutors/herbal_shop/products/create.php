<?php
$new_position = $_POST;
//print_r($new_position);
$name = $_POST['name'];
$short_description = $_POST['short_description'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$image_url = $_POST['image_url'];
print_r($units_id);
$v_connect = mysqli_connect('db', 'mysql','test45','laravel');
//$query = "INSERT INTO herb_all_products_position_table (barcode, amount, units_id) VALUES ('$barcode', '$amount','$units_id')";
$query = "INSERT INTO herb_all_products_name_table (name, short_description, description, category_id, image_url) VALUES ('$name', '$short_description','$description','$category_id','$image_url')";
$my_result = mysqli_query($v_connect, $query);
mysqli_close($v_connect);

?>
<meta http-equiv="refresh" content="1; url=index.php">

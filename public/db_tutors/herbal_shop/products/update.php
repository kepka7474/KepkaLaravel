<?php
$id = $_POST['id'];
$name = $_POST['name'];
$short_description = $_POST['short_description'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$image_url = $_POST['image_url'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');

$query = 'UPDATE herb_all_products_position_table SET name = "'.$name.'", short_description = "'.$short_description.'", description = "'.$description.'", 
category_id = "'.$category_id.'", image_url = "'.$image_url.'" WHERE id ='.$id;

$result = mysqli_query($v_connect, $query);

mysqli_close($v_connect);
?>
<meta http-equiv="refresh" content="1; url=index.php">

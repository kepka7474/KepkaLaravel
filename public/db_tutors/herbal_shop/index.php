<?php
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = "SELECT * FROM herb_types_products_list";
$my_result = mysqli_query($v_connect, $query);
$types = mysqli_fetch_all($my_result);

foreach ($types  as $key => $type) {
//    echo $type[1] . '<br>';
    $query = "SELECT * FROM herb_categories_products_list WHERE type_id=" . $type[0];

    $my_result = mysqli_query($v_connect, $query);
    $categories = mysqli_fetch_all($my_result);
    $types[$key]['herb_categories_products_list'] = $categories;
}

//print_r($users[0]);
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p><img src="/db_tutors/herbal_shop/img/lugovye_01.jpg" width="400" height="255"
        alt="альтернативный текст"></p>
<h1>HERBAL SHOP</h1>
<a href="/db_tutors/herbal_shop/login.php">LOG IN</a>
<?php
foreach ($types as $key => $value) {
//    echo '<h3>'.mb_strtoupper($value[1]) .'</h3>';
    echo '<ul><b><a href="/db_tutors/herbal_shop/type.php?id='.$value[0].'"> '.mb_strtoupper($value[3]).'</a></b>';

    foreach ($value['herb_categories_products_list'] as $book){
        echo '<li><a href="/db_tutors/herbal_shop/category.php?id='.$book[0].'">'.$book[4].'</a></li>';
//        echo $book[0];
    }
    echo "</ul>";

//

}

?>


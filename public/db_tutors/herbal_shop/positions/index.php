<?php
$connect = mysqli_connect('db', 'mysql','test45','laravel');

$query = "SELECT * FROM herb_all_products_position_table";
$result = mysqli_query($connect, $query);
$users = mysqli_fetch_all($result);

$query1 = "SELECT * FROM herb_all_products_name_table";
$result1 = mysqli_query($connect, $query1);
$products = mysqli_fetch_all($result1);

$query2 = "SELECT * FROM herb_units";
$result2 = mysqli_query($connect, $query2);
$units = mysqli_fetch_all($result2);

mysqli_close($connect);
?>

<!DOCTYPE html>
<a href="/db_tutors/herbal_shop/admin/index.php">Назад</a>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>POSITIONS INDEX</title>
</head>
<body>
<h3>ALL POSITIONS</h3>
<?php
foreach ($users as $key => $user){
    foreach ($products as $key2=>$product) {
        if ($product[0] == $user[5]){
//            $this_unit = $units[$user[3]][1];
            foreach ($units as $key3=>$unit){
                if ($unit[0] == $user[3]){
                    echo $user[0];
                    echo "<a href='edit.php?id=$user[0]'> $product[1] $user[2] $unit[1] $user[4] </a>".'<br>';
                }
            }


        }
    }

}
?>
<br>
<form action="create.php" method="post">
    <label for="barcode">barcode</label>
    <input type="text" name="barcode"><br><br>

    <label for="amount">amount</label>
    <input type="text" name="amount"><br><br>

<!--    <label for="units_id">units_id</label>-->
<!--    <input type="text" name="units_id"><br><br>-->
    <label for="units_id">units_id</label>
    <select name="units_id">
        <?php
            foreach ($units as $key=>$unit){
                echo "<option value='$unit[0]'>$unit[1]</option>";
            }
        ?>
    </select><br><br>

    <label for="price">price</label>
    <input type="text" name="price"><br><br>

<!--    <label for="product_name_id">product_name_id</label>-->
<!--    <input type="text" name="product_name_id"><br><br>-->
    <label for="product_name_id">product_name_id</label>
    <select name="product_name_id">
        <?php
        foreach ($products as $key1=>$product){
            echo "<option value='$product[0]'>$product[1]</option>";
        }
        ?>
    </select><br><br>

    <input type="submit" value="CREATE">
</form>
</body>
</html>
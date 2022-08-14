<?php
$id = $_GET['id'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');

$query = "SELECT * FROM herb_all_products_position_table WHERE id = '$id'";
$my_result = mysqli_query($v_connect, $query);
$position = mysqli_fetch_row($my_result);


$query1 = "SELECT * FROM herb_all_products_name_table WHERE id = '$position[5]'";
$result1 = mysqli_query($v_connect, $query1);
$product= mysqli_fetch_row($result1);


$query2 = "SELECT * FROM herb_units WHERE id = '$position[3]'";
$result2 = mysqli_query($v_connect, $query2);
$unit = mysqli_fetch_row($result2);


$query3 = "SELECT * FROM herb_all_products_name_table";
$result3 = mysqli_query($v_connect, $query3);
$products= mysqli_fetch_all($result3);


$query4 = "SELECT * FROM herb_units";
$result4 = mysqli_query($v_connect, $query4);
$units = mysqli_fetch_all($result4);

mysqli_close($v_connect);
//print_r($users);
?>

    <!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>EDIT POSITION</title>
    </head>
    <body>
    <a href="index.php">Назад</a>
    <h3>EDIT POSITION</h3>
    <h1>
        <?php
        echo "$product[1]- $position[2] - $unit[1] цена $position[4] руб";
        ?>
    </h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $position[0]?>">

        <br><label for="barcode">barcode</label>
        <br><input type="text" name="barcode" value="<?php echo $position[1]?>">

        <br><label for="amount">amount</label>
        <br><input type="text" name="amount" value="<?php echo $position[2]?>">

        <br><label for="units_id">units_id</label>
        <select name="units_id">
            <?php
            foreach ($units as $key=>$unit){
                echo "<option value='$unit[0]'>$unit[1]</option>";
            }
            ?>
        </select><br><br>

        <br><label for="price">price</label>
        <br><input type="text" name="price" value="<?php echo $position[4]?>">

        <br><label for="product_name_id">product_name_id</label>
        <select name="product_name_id">
            <?php
            foreach ($products as $key=>$product){
                echo "<option value='$product[0]'>$product[1]</option>";
            }
            ?>
        </select><br><br>

        <br><input type="submit" value="update">
    </form>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $position[0]?>">
        <input type="submit" value="delete">
    </form>
    <!--<meta http-equiv="refresh" content="1; url=index.php">-->
    </body>
    </html>
<?php

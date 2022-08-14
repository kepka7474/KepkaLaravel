<?php
$connect = mysqli_connect('db', 'mysql','test45','laravel');

$query = "SELECT * FROM herb_all_products_name_table";
$result = mysqli_query($connect, $query);
$users = mysqli_fetch_all($result);

$query1 = "SELECT * FROM herb_categories_products_list";
$result1 = mysqli_query($connect, $query1);
$categories = mysqli_fetch_all($result1);

mysqli_close($connect);
?>

<!DOCTYPE html>
<a href="/db_tutors/herbal_shop/admin/index.php">Назад</a>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>PRODUCTS</title>
</head>
<body>
<h3>ALL PRODUCTS LIST</h3>
<?php
foreach ($users as $key => $user){
    echo "<a href='edit.php?id=$user[0]'>$user[1]</a>".'<br>';
}
?>
<br>
<form action="create.php" method="post">

    <label for="name">name</label>
    <input type="text" name="name"><br><br>

    <label for="short_description">short_description</label>
<!--    <input type="text" name="short_description"><br><br>-->
    <textarea name="short_description" cols="35" rows="3"></textarea><br><br>

    <label for="description">description</label>
<!--    <input type="text" name="description"><br><br>-->
    <textarea name="description"  cols="50" rows="7"></textarea><br><br>

    <label for="category_id">category_id</label>
<!--    <input type="text" name="category_id"><br><br>-->

    <select name="category_id">
        <?php
        foreach ($categories as $key=>$category){
            echo "<option value='$category[0]'>$category[4]</option>";
        }
        ?>
    </select><br><br>

    <label for="image_url">image_url</label>
    <input type="text" name="image_url"><br><br>

    <input type="submit" value="CREATE PRODUCT">
</form>

</body>
</html>
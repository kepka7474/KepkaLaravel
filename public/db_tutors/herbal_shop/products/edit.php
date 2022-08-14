<?php


$id = $_GET['id'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = "SELECT * FROM herb_all_products_name_table WHERE id = '$id'";
$my_result = mysqli_query($v_connect, $query);
$users = mysqli_fetch_row($my_result);
mysqli_close($v_connect);
//print_r($users);
?>

    <!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>EDIT POSITIONS</title>
    </head>
    <body>
    <a href="index.php">Назад</a>
    <h1>
        <?php
        echo "$users[1] - $users[2] - $users[4]";
        ?>
    </h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $users[0]?>">

        <br><label for="name">name</label>
        <br><input type="text" name="name" value="<?php echo $users[1]?>">

        <br><label for="short_description">short_description</label>
        <br><textarea name="description" cols="35" rows="4" placeholder="<?php echo $users[2]?>"></textarea>

        <br><label for="description">description</label>
        <br><textarea name="description" cols="50" rows="7" placeholder="<?php echo $users[3]?>"></textarea>


        <br><label for="category_id">category_id</label>
        <br><input type="text" name="category_id" value="<?php echo $users[4]?>">

        <br><label for="image_url">image_url</label>
        <br><input type="text" name="image_url" value="<?php echo $users[5]?>">

        <br><input type="submit" value="update">
    </form>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $users[0]?>">
        <input type="submit" value="delete">
    </form>
    <!--<meta http-equiv="refresh" content="1; url=index.php">-->
    </body>
    </html>
<?php

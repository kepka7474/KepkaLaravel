<?php
include "../../../../php_oop_mvc/App/Database2222.php";
$database = new Database;

$id = $_GET['id'];

$query = "SELECT * FROM herb_users WHERE id = '$id'";

$user = $database->first($query);

//print_r($users);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="index.php">Назад</a>
<h1>
    <?php
    echo "$users[3] $users[4]";
    ?>
</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $users[0]?>">

    <br><label for="login">login</label>
    <br><input type="text" name="login" value="<?php echo $users[1]?>">

    <br><label for="password">password</label>
    <br><input type="text" name="password" value="<?php echo $users[2]?>">

    <br><label for="user_name">user_name</label>
    <br><input type="text" name="user_name" value="<?php echo $users[3]?>">

    <br><label for="user_lastname">user_lastname</label>
    <br><input type="text" name="user_lastname" value="<?php echo $users[4]?>">

    <br><label for="status_id">status_id</label>
    <br><input type="text" name="status_id" value="<?php echo $users[5]?>">

    <br><input type="submit" value="update">
</form>
<form action="delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $users[0]?>">
    <input type="submit" value="delete">
</form>
<!--<meta http-equiv="refresh" content="1; url=index.php">-->
</body>
</html>

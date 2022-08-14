<?php
session_start();
if($_SESSION['admin']){
include "../../../php_oop_mvc/App/Database2222.php";
$database = new Database;

$id = $_GET['id'];

$query = "SELECT * FROM users_1 WHERE id = '$id'";
$user = $database->first($query);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    <?php
    echo "$users[1] $users[2]";
    ?>
</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $users[0]?>">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="text" name="login">
    <input type="text" name="password">
    <input type="submit" value="update">
</form>
<form action="delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $users[0]?>">
    <input type="submit" value="delete">
</form>
<!--<meta http-equiv="refresh" content="1; url=index.php">-->
</body>
</html>
<?php
}
    ?>


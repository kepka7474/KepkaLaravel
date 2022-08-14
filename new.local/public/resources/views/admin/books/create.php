<?php
session_start();
$name = $_POST['name'];
$user_id = $_POST['user_id'];
$description = $_POST['description'];


$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = "INSERT INTO books (name, user_id, description) VALUES ('$name', '$user_id', '$description')";
$my_result = mysqli_query($v_connect, $query);
//$users = mysqli_fetch_all($my_result);
mysqli_close($v_connect);
?>

<meta http-equiv="refresh" content="1; url=index.php">

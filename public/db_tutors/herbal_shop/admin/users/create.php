<?php
include "../../../../php_oop_mvc/App/Database2222.php";
$database = new Database;

$login = $_POST['login'];
$password = $_POST['password'];
$user_name = $_POST['user_name'];
$user_lastname = $_POST['user_lastname'];
$status_id = $_POST['status_id'];


$query = "INSERT INTO herb_users (login, password, user_name, user_lastname, status_id) VALUES ('$login', '".crypt($password)."', '$user_name', '$user_lastname', '$status_id')";

$user = $database->first($query);



?>
<meta http-equiv="refresh" content="1; url=index.php">

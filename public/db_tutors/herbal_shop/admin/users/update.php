<?php
include "../../../../php_oop_mvc/App/Database2222.php";
$database = new Database;

$id = $_POST['id'];
$login = $_POST['login'];
$password = $_POST['password'];
$user_name = $_POST['user_name'];
$user_lastname = $_POST['user_lastname'];
$status_id = $_POST['status_id'];


$query = 'UPDATE users SET login = "'.$login.'", password = "'.crypt($password).'", user_name = "'.$user_name.'", 
user_lastname = "'.$user_lastname.'", status_id = "'.$status_id.'" WHERE id ='.$id;

$result = $database->first($query);


?>
<meta http-equiv="refresh" content="1; url=index.php">

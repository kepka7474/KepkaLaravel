<?php
session_start();
if($_SESSION['admin']) {
    include "../../../php_oop_mvc/App/Database2222.php";
    $database = new Database;

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $login = $_POST['login'];
    $password = $_POST['password'];


    $query = "INSERT INTO users_1 (firstname, lastname, login, password) VALUES ('$firstname', '$lastname', '$login', '" . crypt($password) . "')";
    $user = $database->create($query);
}
?>

<meta http-equiv="refresh" content="1; url=index.php">

<?php
session_start();
if($_SESSION['admin']){
    
include "../../../php_oop_mvc/App/Database2222.php";
$database = new Database;

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$login = $_POST['login'];
$password = $_POST['password'];


$query = 'UPDATE users_1 SET firstname="'.$firstname.'", lastname="'.$lastname.'", login = "'.$login.'", password = "'.crypt($password).'" WHERE id ='.$id;
$user = $database->delete($query);
?>
<meta http-equiv="refresh" content="1; url=index.php">
<?php
}
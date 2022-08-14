<?php
include "../../../../php_oop_mvc/App/Database2222.php";
$database = new Database;
$id_del = $_POST['id'];

$query = 'DELETE FROM herb_users WHERE id =' . $id_del;

$user = $database->first($query);
//header("Location: http://localhost",true);
?>
<meta http-equiv="refresh" content="1; url=index.php">
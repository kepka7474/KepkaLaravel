<?php
session_start();
if($_SESSION['admin']) {
    include "../../../php_oop_mvc/App/Database2222.php";
    $database = new Database;
    $id_del = $_POST['id'];

    $query = 'DELETE FROM users_1 WHERE id =' . $id_del;
    $user = $database->delete($query);
}
?>
<meta http-equiv="refresh" content="1; url=index.php">

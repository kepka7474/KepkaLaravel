<?php
session_start();
//print_r($_POST)
$id_del = $_POST['id'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = 'DELETE FROM books WHERE id =' . $id_del;
$my_result = mysqli_query($v_connect, $query);

mysqli_close($v_connect);
//header("Location: http://localhost",true);
?>
<meta http-equiv="refresh" content="1; url=index.php">

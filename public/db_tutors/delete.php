<?php
//print_r($_POST)
$id_del = $_POST['id'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = 'DELETE FROM users_1 WHERE id =' . $id_del;
$my_result = mysqli_query($v_connect, $query);

mysqli_close($v_connect);
header("Location: http://mysite.local",true);
?>
<?php
//print_r($_POST)
$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$login = $_POST['login'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = 'UPDATE users_1 SET name = "'.$name.'", lastname = "'.$lastname.'", password = "'.$password.'", login = "'.$login.'" WHERE id =' . $id;
$my_result = mysqli_query($v_connect, $query);

mysqli_close($v_connect);
header("Location: http://mysite.local",true);
?>


<?php
//print_r($_POST)
$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
//echo $firstname . $lastname
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = "INSERT INTO users_1 (name, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
$my_result = mysqli_query($v_connect, $query);

mysqli_close($v_connect);

header("Location: http://mysite.local",true);
?>

<!--<meta HTTP-EQUIV="refresh" content="0;URL==index.php">-->
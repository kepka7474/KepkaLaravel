<?php
session_start();
if($_SESSION['admin']){
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = "SELECT * FROM users_1";
$my_result = mysqli_query($v_connect, $query);
$users = mysqli_fetch_all($my_result);
mysqli_close($v_connect);

echo
'<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Имена</h1>
<a href="/index.php">GO BACK</a><br>';

foreach ($users as $key => $user){
    echo "<a href='edit.php?id=$user[0]'>$user[1] $user[2]</a><br>";
}
echo
'<form action="/admin/create/user" method="post">
    <label for="firstname">NAME</label>
    <input type="text" name="firstname"><br><br>

    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname"><br><br>

    <label for="login">LOGIN</label>
    <input type="text" name="login"><br><br>

    <label for="password">PASSWORD</label>
    <input type="text" name="password"><br><br>

    <input type="submit" value="CREATE">

</form>
</body>
</html>';

}
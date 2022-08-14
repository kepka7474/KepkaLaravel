<?php
$connect = mysqli_connect('db', 'mysql','test45','laravel');

$query = "SELECT * FROM herb_users";

$result = mysqli_query($connect, $query);

$users = mysqli_fetch_all($result);

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>USAR INDEX</title>
</head>
<body>
<h3>EDIT USERS</h3>
<a href="/db_tutors/herbal_shop/admin/index.php">Назад</a><br><br>
<?php
foreach ($users as $key => $user){
    echo "<a href='edit.php?id=$user[0]'>$user[3] $user[4]</a>".'<br>';
}
?>
<br>
<form action="create.php" method="post">
    <label for="login">login</label>
    <input type="text" name="login"><br><br>

    <label for="password">password</label>
    <input type="text" name="password"><br><br>

    <label for="user_name">user_name</label>
    <input type="text" name="user_name"><br><br>

    <label for="user_lastname">user_lastname</label>
    <input type="text" name="user_lastname"><br><br>

    <label for="status_id">status_id</label>
    <input type="text" name="status_id"><br><br>

    <input type="submit" value="CREATE">
</form>
</body>
</html>
<?php
$id = $_GET['id'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = "SELECT * FROM users_1 WHERE id = $id";
$my_result = mysqli_query($v_connect, $query);
$users = mysqli_fetch_row($my_result);
mysqli_close($v_connect);
//print_r($users);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    <?php
    echo "$users[1] $users[2]";
    ?>
</h1>
<form action="/db_tutors/update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $users[0]?>">
    <input type="text" name="name">
    <input type="text" name="lastname">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="submit" name="update">
</form>
</body>
</html>

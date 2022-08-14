<?php
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
$query = "SELECT * FROM users";
$my_result = mysqli_query($v_connect, $query);
$users = mysqli_fetch_all($my_result);

foreach ($users as $key => $user) {
    $query = "SELECT * FROM books WHERE user_id=" . $user[0];
    $my_result = mysqli_query($v_connect, $query);
    $books = mysqli_fetch_all($my_result);
    $users[$key]['books'] = $books;
}
mysqli_close($v_connect);
//print_r($users[0]);
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Авторы</h1>
<?php
foreach ($users as $key => $value) {
//    print_r($value);
    echo '<a href="db_tutors/edit.php?id='.$value[0].'">'.$value[1]. ' '.$value[2] .'</a>
        <form action="/db_tutors/delete.php" method="post">
            <input type="hidden" name="id" value="'.$value[0].'">
 
            <input type="submit" value="delete">
        </form><br>';


}
?>

<form action="db_tutors/insert.php" method="post">
    <input type="text" name="name">
    <input type="text" name="lastname">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="submit" value="create">
</form>
</body>
</html>
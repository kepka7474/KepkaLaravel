<?php
$id = $_GET['id'];

$v_connect = mysqli_connect('db', 'mysql', 'test45', 'laravel', '3306');
$query = "SELECT * FROM users_1 WHERE id =" . $id;
$my_result = mysqli_query($v_connect, $query);
$user = mysqli_fetch_row($my_result);

$query = "SELECT * FROM books WHERE user_id =" . $id;
$my_result = mysqli_query($v_connect, $query);
$books = mysqli_fetch_all($my_result);

mysqli_close($v_connect);

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
    echo "$user[1] $user[2]";
    ?>
</h1>
<?php

    echo "<ul>";
    foreach ($books as $book){
        echo "<li><a href='book.php?id=$book[0]'>$book[1]</a> </li>";
    }
    echo "</ul>";

?>


</body>
</html>

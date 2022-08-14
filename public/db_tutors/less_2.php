<?php
include "App/Database2222.php";

$database = new Database('test');
print_r($database->body);

$query = 'SELECT * FROM users_1';
$users = $database->get($query);



foreach ($users as $key => $user) {
    $query = "SELECT * FROM books WHERE user_id=" . $user[0].' ORDER BY name DESC';

    $books = $database->get($query);
    $users[$key]['books'] = $books;
}

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
<a href="/db_tutors/admin/login.php">LOG IN</a>
<?php
foreach ($users as $key => $value) {
//    print_r($value);
    echo '<ul><b><a href="/db_tutors/less_2_nasledie/author.php?id='.$value[0].'">'.$value[1]. ' '.$value[2] .'</a></b>';
    foreach ($value['books'] as $book){
        echo '<li><a href="/db_tutors/less_2_nasledie/book.php?id='.$book[0].'">'.$book[1].'</a></li>';
//        echo $book[0];
    }
    echo "</ul>";


}
?>


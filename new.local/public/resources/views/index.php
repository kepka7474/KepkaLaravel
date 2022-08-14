<?php
//include "php_oop_mvc/App/Database2222.php";
//
use App\Models\User2222;
use App\Models\Book2222;


$usersObject = new User2222();
$booksObject = new Book2222();


$users = $usersObject->get();
//$books = $booksObject->get();

foreach ($users as $key => $user) {
    $users[$key]['books'] = $booksObject->whereAll('user_id', $user[0]);
}



echo
'    <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title111</title>
</head>
<body>
<h1>Авторы</h1>
<a href="/admin/login">LOG IN</a>';

foreach ($users as $key => $value) {
//    print_r($value);
    echo '<ul><b><a href="/db_tutors/less_2_nasledie/author.php?id='.$value[0].'">'.$value[1]. ' '.$value[2] .'</a></b>';
    foreach ($value['books'] as $book){
        echo '<li><a href="/db_tutors/less_2_nasledie/book.php?id='.$book[0].'">'.$book[1].'</a></li>';
//        echo $book[0];
    }
    echo "</ul>";


}

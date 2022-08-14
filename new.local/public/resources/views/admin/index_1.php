<?php
session_start();



if($_SESSION['admin']){
    $user = $_SESSION['admin'];

    echo
    '<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
    <h1>Привет</h1>
    <a href="users/index">USERS</a>
    <a href="books/index">BOOKS</a><br>

    <a href="logout.php">LOGOUT</a>

    </body>
    </html>';
}
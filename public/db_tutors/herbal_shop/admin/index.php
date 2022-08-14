<?php
session_start();

//print_r($_SESSION['admin']);
if($_SESSION['admin']){
    $user = $_SESSION['admin'];
    ?>
    <!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>hi user</title>
    </head>
    <body>
    <h1>
        Привет <?php echo "$user[3] $user[4]" ?>
    </h1>
    <a href="/db_tutors/herbal_shop/positions/index.php">CREATE POSITION</a><br>
    <a href="/db_tutors/herbal_shop/products/index.php">CREATE PRODUCT</a><br>
    <a href="/db_tutors/herbal_shop/admin/users/index.php">CREATE USERS</a><br>
    <a href="/db_tutors/herbal_shop/admin/orders.php">ALL ORDERS</a><br>
    <a href="/db_tutors/herbal_shop/admin/calculations.php">CALCULATIONS</a><br>
    <a href="logout.php">LOGOUT</a><br>


    <?php
}
<?php
session_start();
if($_SESSION['admin']) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];


    $v_connect = mysqli_connect('db', 'mysql', 'test45', 'laravel', '3306');
    $query = 'UPDATE users_1 SET name="' . $name . '", description="' . $description . '" WHERE id =' . $id;
    $my_result = mysqli_query($v_connect, $query);
    mysqli_close($v_connect);
}
?>
<meta http-equiv="refresh" content="1; url=index.php">
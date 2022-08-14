<?php
$id = $_GET['id'];

$v_connect = mysqli_connect('db', 'mysql', 'test45', 'laravel', '3306');

//print_r($id);
$query = "SELECT * FROM books WHERE id=". $id;
$my_result = mysqli_query($v_connect, $query);



$books = mysqli_fetch_row($my_result);

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
    echo "$books[1]";
    ?>
</h1>
<?php

echo "<p>$books[3]</p>";

?>


</body>
</html>


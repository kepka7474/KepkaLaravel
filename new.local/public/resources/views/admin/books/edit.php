<?php
session_start();

$id = $_GET['id'];
$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');

$query = "SELECT * FROM books WHERE id = '$id'";
$book = mysqli_query($v_connect, $query);

$query = "SELECT * FROM users_1";
$users = mysqli_query($v_connect, $query);

mysqli_close($v_connect);

$book = mysqli_fetch_row($book);
$users = mysqli_fetch_all($users);


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
    echo "$book[1]";
    ?>
</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $book[0]?>">
    <label for="name">NAME</label>
    <input type="text" name="name" value="<?php echo $book[1]?>"><br>

    <label for="description">DESCRIPTION</label>
    <p><textarea name="description" cols="40" rows="5"><?php echo $book[3]?></textarea></p>

    <select name="user_id">
        <?php
        foreach ($users as $key => $user){
            if($user[0] == $book[2]){
                echo "<option value='$user[0]' selected>$user[1] $user[2]</option>";
            }
            else{
                echo "<option value='$user[0]'>$user[1] $user[2]</option>";
            }
        }

        ?>
    </select>


    <input type="submit" value="update">
</form>
<form action="delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $book[0]?>">
    <input type="submit" value="delete">
</form>
<!--<meta http-equiv="refresh" content="1; url=index.php">-->
</body>
</html>

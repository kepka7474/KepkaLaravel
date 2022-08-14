<?php
session_start();

use App\Models\Book2222;
use App\Models\User2222;

$userObject = new User2222();
$bookObject = new Book2222();

$users = $userObject->get();
$books = $bookObject->get();

if($_SESSION['admin']){



//$v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
//$query = "SELECT * FROM books";
//$my_result = mysqli_query($v_connect, $query);
//$books = mysqli_fetch_all($my_result);
//$query_1 = "SELECT * FROM users_1";
//$users_1 = mysqli_query($v_connect, $query_1);
//$users = mysqli_fetch_all($users_1);
//mysqli_close($v_connect);

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Имена</h1>
<a href="/db_tutors/admin/login.php">GO BACK</a><br>
<?php
foreach ($books as $key => $book){
    echo "<a href='edit.php?id=$book[0]'>$book[1] $book[3]</a><br>";
}
?>


<form action="/admin/create/book" method="post">
    <label for="name">BOOK NAME</label>
    <input type="text" name="name"><br><br>

<!--    <label for="description">DESCRIPTION</label>-->
<!--    <input type="text" name="description"><br><br>-->

    <label for="description">DESCRIPTION</label>
<!--    <input type="text" name="description"><br><br>-->
    <p><textarea name="description" cols="40" rows="5"></textarea></p>

    <label for="user_id">AUTHOR</label>
    <select name="user_id">
        <?php
        foreach ($users as $key => $user){
            echo "<option value='$user[0]'>$user[1] $user[2]</option>";
        }

        ?>
    </select>

    <input type="submit" value="CREATE">


</form>
</body>
</html>
<?php
}

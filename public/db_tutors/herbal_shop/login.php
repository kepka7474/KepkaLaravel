<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
Логин
</h1>
<form action="login.php" method="post">
    <label for="login">LOGIN</label>
    <input type="text" name="login">
    <label for="password">PASSWORD</label>
    <input type="password" name="password">
    <input type="submit" value="login">
</form>


</body>
</html>

<?php
//print_r($_POST);
if($_POST){
    $login = $_POST['login'];
    $password = $_POST['password'];
//    $pass = crypt($password);
//    print_r($pass);
    if(!$login){
        echo "нет логина";
        die;
    }
    if(!$password){
        echo "нет пароля";
        die;
    }



    $v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
    $query = "SELECT * FROM herb_users WHERE login='$login'";
//    $query = "SELECT * FROM herb_users";
    $result = mysqli_query($v_connect, $query);
    $user = mysqli_fetch_row($result);

    mysqli_close($v_connect);
//    print_r($user);

    if (!$user){
        echo 'таких не знаем';
        die;
    }

    $pass = $user[2];

    if(crypt($password, $pass) == $pass){
        echo 'пароль верен';
        $_SESSION['admin'] = $user;
        echo '<meta http-equiv="refresh" content="1; url=/db_tutors/herbal_shop/admin/index.php">';
    } else{
        echo 'пароль не верен';
    }
//    print_r($pass);
}

if ($_SESSION['admin']){
    $login = $_SESSION['admin']['login'];
    $password = $_SESSION['admin']['password'];
    $v_connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
    $query = "SELECT * FROM herb_users WHERE login='$login'";
//    $query = "SELECT * FROM herb_users";
    $result = mysqli_query($v_connect, $query);
    $user = mysqli_fetch_row($result);

    mysqli_close($v_connect);
//    print_r($user);

    if (!$user){
        echo 'таких не знаем';
        die;
    }

    $pass = $user[2];

    if($password == $pass){
        echo 'АВТОРИЗАЦИЯ ...';
        $_SESSION['admin'] = $user;
        echo '<meta http-equiv="refresh" content="1; url=/db_tutors/herbal_shop/admin/index.php">';
    } else{
        echo 'пароль не верен';
    }
}
?>

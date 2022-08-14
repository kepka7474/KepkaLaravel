<?php

//$id = $_GET['id'];

$connect = mysqli_connect('db', 'mysql', 'test45', 'laravel', '3306');


$query = "SELECT * FROM goods";
$result = mysqli_query($connect, $query);
$goods = mysqli_fetch_all($result);
foreach ($goods as $key =>$product){
    $query = "SELECT * FROM files WHERE goods_id =".$product[0];
    $result = mysqli_query($connect, $query);
    $files = mysqli_fetch_all($result);
    $goods[$key]['files'] = $files;

}
mysqli_close($connect);

//print_r($goods);

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
Ебать АЛИЭКСПРЕСС
</h1>
<h2>Купи бери - сюда смотри</h2>
<?php

    foreach ($goods as $key =>$product){
        echo "<h3>$product[1]</h3>";
        foreach ($product['files'] as $keyFile => $file){
            if($file[3] == 1) {
                echo "<img src='/storage/$file[1]' height='100'>";
            }

        }
        echo "
            <form action='/db_tutors/less_3_Foreing_key/create_file.php' method='post' enctype='multipart/form-data'>
            <input type='hidden' name='goods_id' value='$product[0]'>
            <input type='file' name='file'>
            <input type='submit' value='Добавил'>
            </form>
            ";
    }

?>


</body>
</html>
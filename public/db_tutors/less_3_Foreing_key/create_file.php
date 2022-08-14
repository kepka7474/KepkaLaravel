<?php

$file = $_FILES['file'];
if($file['tmp_name'] !== ''){
    return print_r($file);
    $filename = $file['name'];
    $name = explode('.', $filename);
    $uniq = uniqid();
    $filename = $uniq.'.'.$name[count($name)-1];
//print_r($filename);

    $goods_id = $_POST['goods_id'];
    move_uploaded_file($file['tmp_name'], '/var/www/mysite.local/public/storage/'.$filename);

    $connect = mysqli_connect('db', 'mysql', 'test45', 'laravel', '3306');


    $query = "INSERT INTO files (name, goods_id, enabled) VALUES ('$filename','$goods_id', 1)";
    $result = mysqli_query($connect, $query);


    mysqli_close($connect);
}
else{
    echo 'No image';
}


?>
<?php
//header("Location: http://localhost/",true);
?>
<meta http-equiv="refresh" content="1; url='http://localhost/'">



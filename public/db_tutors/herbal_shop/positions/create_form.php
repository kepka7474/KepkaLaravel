<?php
echo '<h2>'.'Создать новую позицию:'.'</h2>';
echo "
      <form action='create.php' method='post' enctype='multipart/form-data'>
            <br><label for='barcode'>Штрихкод</label>
            <br><input type='text' name='barcode'>
            <br><label for='amount'>Колличество</label>
            <br><input type='text' name='amount'>
            <br><label for='units_id'>Тип единиц измерения</label>
            <br><input type='text' name='units_id'>
            <br><label for='price'>Цена</label>
            <br><input type='text' name='price'>
            <br><label for='product_id_name'>Вид продукта</label>
            <br><input type='text' name='product_id_name'>
            <br><input type='submit' value='Создать'>
      </form>
     ";
//$v_connect = mysqli_connect('db', 'mysql','test45','laravel');
//$query = 'SELECT * FROM herb_all_products_position_table';
//$my_result = mysqli_query($v_connect, $query);
//$position = mysqli_fetch_all($my_result);

?>

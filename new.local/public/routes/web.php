<?php


use App\Route2222;

Route2222::get('/', 'SiteController@index');
Route2222::get('/admin/login', 'AuthController@index');
Route2222::post('/admin/login', 'AuthController@login');
Route2222::post('/admin/create/book', 'BookController@create');




//if(!in_array($_SERVER['REQUEST_URI'], Route2222::$routes)){
//    echo '404 ошибка';
//}

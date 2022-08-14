<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/type/{search}', function ($search){
    dd(explode('/', $search));
    return response()->json([

        "type_id" => $type,
        "category_id" => $category,

    ]);
})->where('search', '.*');

//Route::get('/type/{type}/category/{category?}', function (int $type, ?int $category = null){
//    return response()->json([
//
//        "type_id" => $type,
//        "category_id" => $category,
//
//    ]);
//});



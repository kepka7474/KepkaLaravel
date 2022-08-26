<?php

//use App\Http\Controllers\Api;

//use App\Http\Controllers\Api\CountryIndexController;

use App\Services\Routes\Providers\Api\ApiRoutesProvider;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/api/countries', \App\Http\Controllers\Api\Countries\CountryIndexController::class)
//    ->name('api.countries.index');
//
//Route::get(
//    '/api/countries/{country}',
//    \App\Http\Controllers\Api\Countries\CountryShowController::class
//)
//    ->where('country', '\d+')
//    ->name('api.countries.show');
//
//Route::get('/countries', function () {
//    return view('index');
//});
//
//Route::view('/', 'cities');
//Route::get('/r',fn() => 'Hello');
//
//
//require __DIR__.'/auth.php';

app(ApiRoutesProvider::class)->registerRoutes();

Route::fallback(fn() => 'Sorry');

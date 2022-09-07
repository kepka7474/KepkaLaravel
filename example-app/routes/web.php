<?php

//use App\Http\Controllers\Api;

//use App\Http\Controllers\Api\CountryIndexController;

use App\Http\Controllers\Cities\CitiesController;
use App\Http\Controllers\CmsCitiesController;
use App\Http\Controllers\StartController;
use App\Services\Routes\Providers\Api\ApiRoutesProvider;
use App\Services\Routes\Providers\CMS\CMSRoutesProvider;
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

Route::resources([
    'cities' => CmsCitiesController::class,
    'categories' => \App\Http\Controllers\Cms\Categories\CmsCategoriesController::class,
]);

Route::get('/test', function (){
    return view('test.test');
});

Route::get('/foreach', function (){
    return view('test.foreach');
});


//Route::get('/hello', function (){
//    return 'Hello world';
//});
//
//$cmsRoutesProvider = app(CMSRoutesProvider::class);
//$cmsRoutesProvider->registerRoutes();
//
//
//Route::get('/api/cities', [
//    CitiesController::class,
//    'index']);
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/', [StartController::class, 'index']);
//Route::get('/companies', [StartController::class, 'companies']);
//
//Route::get('/categories', [StartController::class, 'categories']);


//Route::view('/api/countries', '/api/countries/index');

//Route::get('/api/cities', function (){
//    return view('cities');
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

//app(ApiRoutesProvider::class)->registerRoutes();
//
//Route::fallback(fn() => 'Sorry');

<?php

namespace App\Services\Routes\Providers\CMS;


use App\Http\Controllers\Api\Continents\ApiContinentController;
use App\Http\Controllers\Cms\Continents\CmsContinentsController;
use App\Http\Controllers\Cms\Countries\CmsCountriesController;
use App\Http\Controllers\Cms\Countries\CmsCountriesIndexController;
use Database\Seeders\CitiesTableSeeder;
use Illuminate\Support\Facades\Route;

final class CMSRoutesProvider
{
    public function __construct(){

    }

    public function registerRoutes()
    {
        Route::group([
            'prefix' => '/cms',
            'as' => 'cms.',
            'middleware' => 'auth.basic',
        ], function(){
            Route::resources([
                'countries' => CmsCountriesController::class,
//                'cities' => CitiesController::class,
//                'companies' => CmsCompaniesController::class,

            ]);

            Route::get('countries', CmsCountriesIndexController::class)->name('countries.index');

            Route::resource('continents', CmsContinentsController::class, [
//                'except' => 'destroy',
                'only' => [
                    'index'
                ],
            ]);
        });

        Route::apiResource('continents', ApiContinentController::class);

    }
}

<?php

namespace App\Services\Routes\Providers\Api;

use Illuminate\Support\Facades\Route;

class ApiRoutesProvider
{
    public function registerRoutes(): void
    {
        Route::group([
            'prefix' => 'api',
        ], function (){

            Route::get('countries', \App\Http\Controllers\Api\Countries\CountryIndexController::class)
                ->name(ApiRoutes::COUNTRIES_INDEX);

            Route::get(
                'countries/{country}',
                \App\Http\Controllers\Api\Countries\CountryShowController::class
                )
                ->where('country', '\d+')
                ->name(ApiRoutes::COUNTRIES_SHOW);

            Route::post('countries', \App\Http\Controllers\Api\Countries\CountryStoreController::class)
                ->name(ApiRoutes::COUNTRIES_STORE);

            Route::put('countries/{country}', \App\Http\Controllers\Api\Countries\CountryUpdateController::class)
                ->name(ApiRoutes::COUNTRIES_UPDATE)
                ->where('country', '\d+');

        });
    }

    public static function countries(): string
    {
        return route(ApiRoutes::COUNTRIES_INDEX);
    }

    public static function countriesShow($id): string
    {
        return route(ApiRoutes::COUNTRIES_SHOW, [
            'country' => $id,
        ]);
    }

    public static function countriesStore($id): string
    {
        return route(ApiRoutes::COUNTRIES_STORE, [
            'country' => $id,
        ]);
    }

    public static function countriesUpdate(int $id): string
    {
        return route(ApiRoutes::COUNTRIES_UPDATE, [
            'country' => $id,
        ]);
    }
}

<?php
namespace App\Http\Controllers\Api\Countries;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\JsonResponse;

class CountryShowController extends Controller
{
//    public function __invoke(int $id): JsonResponse
    public function __invoke(Country $country): JsonResponse
    {

//        $country = Country::findOrFail($id);
        return response()->json(
            $country
        );
    }
}

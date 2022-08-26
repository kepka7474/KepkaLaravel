<?php
namespace App\Http\Controllers\Api\Countries;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\JsonResponse;

class CountryIndexController extends Controller
{
    public function __invoke(string $modifiers = null): JsonResponse
    {
        return response()->json(
            Country::all(),
        );
    }
}

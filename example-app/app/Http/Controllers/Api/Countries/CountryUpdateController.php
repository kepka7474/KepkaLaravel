<?php
namespace App\Http\Controllers\Api\Countries;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CountryUpdateController extends Controller
{
    public function __invoke(Request $request, int $id): JsonResponse
    {

        $country = Country::findOrFail($id);
        $country->update($request->all());
        return response()->json(
            $country
        );
    }
}

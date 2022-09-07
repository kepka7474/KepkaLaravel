<?php

namespace App\Http\Controllers\Cms\Continents;

use App\Services\Continents\ContinentsService;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Continent;
use Illuminate\Http\Request;

class CmsContinentsController extends Controller
{
    private function getContinentsService(): ContinentsService
    {
        app(ContinentsService::class);
    }
    public function index()
    {
        View::share([
            'continents' => $this->getContinentsService()->getContinents(),
        ]);

        return view('cms.continents.index');
    }


    public function create()
    {
        return view('cms.continents.create');
    }


    public function store(Request $request)
    {
        $this->getContinentsService()->createContinent($request->all());
        return redirect()->route(
            'cms.continents.index',
        );
    }


//    public function show(Continent $continent)
//    {
//        //
//    }


    public function edit(Continent $continent)
    {
        View::share([
            'continents' => $continent,
        ]);

        return view('cms.continents.edit');
    }


    public function update(Request $request, Continent $continent)
    {
        $continent->update($request->all());
        return redirect()->route(
            'cms.continents.index',
        );
    }


//    public function destroy(Continent $continent)
//    {
//        //
//    }
}

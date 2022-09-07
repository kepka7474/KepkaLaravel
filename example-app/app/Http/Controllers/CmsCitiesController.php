<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CmsCitiesController extends Controller
{

    public function index()
    {
        return view('cmsCities.cmsCityIndex');


    }


    public function create()
    {
        return view('cmsCities.cmsCityCreate');
//        echo '<form method="post" action="/cities">';
//        echo 'Введите название города: <input name="name" value="" type="text">';
//        echo '<input type="submit" value="сохранить">';
//        echo '</form>';
    }


    public function store(Request $request)
    {
//        dd($request->name);
        $newCity = new City();
        $newCity->name = $request->name;
        $newCity->country_id = $request->country_id;
        $newCity->save();
        return view('cmsCities.cmsCityIndex');
    }


    public function show($id)
    {
        return view('cmsCities.cmsCityShow', ['id'=>$id]);
//        $city = City::findOrFail($id) ;
//        print_r($city->name);
    }


    public function edit($id)
    {
        return view('cmsCities.cmsCityEdit', ['id'=>$id]);
//        echo '<b> edit </b> <br>';
//        $city = City::findOrFail($id);
//        echo 'Правим город: '.$city->name.'<br>';
//        echo '<form method="post" action="/cities/'.$id.'">';
//        echo '<input name="_method" type="hidden" value="PUT">';
//        echo 'Введите новое название города: <input name="name" value="" type="text">';
//        echo '<br> Введите новый id страны: <input name="country_id" value="" type="text">';
//        echo '<input type="submit" value="сохранить">';
//        echo '</form>';
//        echo '<br> Удалить нахуй';
//        echo '<form method="post" action="/cities/'.$id.'">';
//        echo '<input name="_method" type="hidden" value="DELETE">';
//        echo '<input type="submit" value="delete">';
//        echo '</form>';
    }


    public function update(Request $request, $id)
    {
        echo 'pizda42';
        $city = City::findOrFail($id);

        $city->update([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);
        return view('cmsCities.cmsCityShow', ['id'=>$id]);
//        return response()->json(
//            $city
//        );
    }


    public function destroy($id)
    {
        echo 'pizda_delete';
        City::destroy($id);
        return view('cmsCities.cmsCityIndex');

//        $city->delete;
    }
}

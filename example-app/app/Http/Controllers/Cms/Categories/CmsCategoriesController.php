<?php

namespace App\Http\Controllers\Cms\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CmsCategoriesController extends Controller
{

    public function index()
    {
        $categories= Category::all();

        foreach ($categories as $key => $category){
            echo $category->name.'<br>';
        };
    }


    public function create()
    {
        echo '<form method="post" action="/categories">';
        echo 'Введите название новой категории: <input name="name" value="" type="text">';
        echo '<input type="submit" value="сохранить">';
        echo '</form>';
    }


    public function store(Request $request)
    {
        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->save();
    }


    public function show($id)
    {
        $category = Category::findOrFail($id) ;
        echo $category->name;
    }


    public function edit($id)
    {
        echo '<b> edit </b> <br>';
        $category = Category::findOrFail($id);
        echo 'Правим категорию: '.$category->name.'<br>';
        echo '<form method="post" action="/categories/'.$id.'">';
        echo '<input name="_method" type="hidden" value="PUT">';
        echo 'Введите новое название категории: <input name="name" type="text">';
        echo '<input type="submit" value="сохранить">';
        echo '</form>';
        echo '<br> Удалить категорию нахуй';
        echo '<form method="post" action="/categories/'.$id.'">';
        echo '<input name="_method" type="hidden" value="DELETE">';
        echo '<input type="submit" value="delete">';
        echo '</form>';
    }


    public function update(Request $request, $id)
    {
        echo 'pizda42';
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
        ]);
    }


    public function destroy($id)
    {
        echo 'pizda_delete';
        Category::destroy($id);
    }
}

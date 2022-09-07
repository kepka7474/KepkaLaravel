<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        $cities = City::with('companies')->get();
//        dd($cities);
        return view('index', ['cities' => $cities]);

    }

    public function companies(){
        $companies = Company::with('city')->get();
        dd($companies);
    }

    public function categories(){
        $categories = Category::with('companies')->get();
        dd($categories);
    }

//    public function index(){
//        $users = User::with('books')->get();
//        dd($users);
//        return view('index', ['users' => $users]);
//    }
}


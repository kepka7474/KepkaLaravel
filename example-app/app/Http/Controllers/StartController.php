<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        $users = User::with('books')->get();
        dd($users);
        return view('index', ['users' => $users]);
    }
}


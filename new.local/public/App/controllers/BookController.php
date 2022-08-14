<?php

namespace App\controllers;

use App\Models\Book2222;

class BookController extends Controller{

    public function create(){
        $bookObject = new Book2222();
        $bookObject->create($_POST);
        header('Location: /admin/books/index');
    }
}
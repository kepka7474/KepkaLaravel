<?php

namespace App\controllers;

use App\Models\User2222;
use App\Models\Book2222;

class SiteController extends Controller{

    public $template = 'resources/views/';


    public function index(){
        $usersObject = new User2222();
        $booksObject = new Book2222();


        $users = $usersObject->get();


        foreach ($users as $key => $user) {
            $users[$key]['books'] = $booksObject->whereAll('user_id', $user[0]);
        }
        include $this->template.'index.php';
    }

}
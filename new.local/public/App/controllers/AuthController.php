<?php

namespace App\controllers;

use App\Models\User2222;

use App\Helpers\AuthHelper;

class AuthController extends Controller{

    public $template ='';

    public function index(){
        $userObject = new User2222();
        AuthHelper::sessionLogin($userObject);
        include $this->template.'admin/login.php';

    }
    public function login(){
        $userObject = new User2222();
        $login = $_POST['login'];
        $password = $_POST['password'];
        AuthHelper::login($login, $password, $userObject);



    }

    public function logout(){
        session_start();
        unset($_SESSION['admin']);
        header('Location: /');
    }
}

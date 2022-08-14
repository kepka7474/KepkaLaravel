<?php
namespace App\Helpers;

class AuthHelper{

    static public function login($login, $password, $userObject){
    session_start();
        if(!$login){
            echo 'no login';
            die;
        }
        if(!$password){
            echo 'no password';
            die;
        }


        $user = $userObject->where('login', $login);


        if(!$user){
            echo 'No user in this base';
            die;
        }

        $pass = $user[4];
        if(crypt($password, $pass) == $pass){
            echo 'password is good';
            $_SESSION['admin'] = $user;
            header('Location: /admin');
        } else {
            echo 'password not good';
        }

    }


    static public function sessionLogin($userObject)
    {
        session_start();
        $login = $_SESSION['admin'][3];
        $password = $_SESSION['admin'][4];


        $user = $userObject->where('login', $login);


        $pass = $user[4];

        if ($password == $pass) {
            $_SESSION['admin'] = $user;
            header('Location: /admin');

        }
    }
}
<?php


namespace app\controllers;


use app\models\User;

class UserController extends AppController
{
    public  function  signupAction() {
        if(!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if(!$user->checkUnique()) {
                $user->errors[][] = 'Error';
            }else {
                if($user->save('users')){
                    $_SESSION['success'] = 'you are registered';
                } else {
                    $_SESSION['error'] = "Error";
                }
            }
            redirect();
        }
    }

    public  function  loginAction() {
        if (!empty($_POST)) {
            $user = new User();
            if($user->login()){
            } else {
                $_SESSION['error'] = "You can't log in";
            }
            redirect();
        }
    }

    public  function  logoutAction() {
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect();
    }
}
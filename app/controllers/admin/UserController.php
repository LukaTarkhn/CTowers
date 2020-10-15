<?php


namespace app\controllers\admin;


use app\models\User;

class UserController extends AppController
{
    public function loginAdminAction() {
        if(!empty($_POST)) {
            $user = new User();
            if($user->login(true)) {
                $_SESSION['success'] = 'You are logged in';
            } else {
                $_SESSION['error'] = "Username and password incorrect";
            }
            if (User::isAdmin()) {
                redirect(ADMIN);
            } else {
                redirect();
            }
        }
        $this->layout = "login";
    }
}
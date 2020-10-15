<?php


namespace app\models;


class User extends AppModel
{
    public  $attributes = [
        'username' => '',
        'password' => ''
];

    public function checkUnique() {
        $user = \R::findOne('users', 'username = ?', [$this->attributes['username']]);
        if($user) {
            if($user->username == $this->attributes['username']){
                $this->errors['unique'][] = 'Username already use';
            }
            return false;
        }
        return true;
    }

    public function login($isAdmin = false) {
        $username = !empty(trim($_POST['username'])) ? trim($_POST['username']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if($username && $password){
            if($isAdmin) {
                $user = \R::findOne('users', "username = ? AND password = ? AND role = 'admin'", [$username, $password]);
            }else {
                $user = \R::findOne('users', "username = ? AND password = ?", [$username, $password]);
            }
            if($user) {
                    foreach ($user as $k => $v) {
                        if($k != 'password') $_SESSION['user'][$k] = $v;
                    }
                    return true;
            }
            return false;
        }
    }

    public  static  function checkAuth() {
        return isset($_SESSION['user']);
    }

    public  static  function isAdmin() {
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin');
    }
}
<?php


namespace app\controllers;

use app\models\admin\Armor;
use ibuild\App;


class ArmoresController extends AppController
{
    public function addAction()
    {
        if (!empty($_POST)) {
            $armor = new Armor();
            $data = $_POST;
            $armor->load($data);
            if ($id = $armor->save('armores')) {
                $apartment = $_POST["apartment"];
                $user_email = $_POST["email"];
                $person = $_POST["person"];
                $mobile = $_POST["mobile"];
                if($_POST['duration'] == 1):
                    $duration = '2-5 დღე 300 $';
                    $durationENG = '2-5 Day 300 $';
                    $durationRUS = '2-5 Дня 300 $';
                elseif ($_POST['duration'] == 2):
                    $duration = '6-14 დღე 500 $';
                    $durationENG = '6-14 Day 500 $';
                    $durationRUS = '6-14 Дня 500 $';
                else:
                    $duration = '15-25 დღე 1000 $';
                    $durationENG = '15-25 Day 1000 $';
                    $durationRUS = '15-25 Дня 1000 $';
                endif;
                Armor::mailOrder($apartment, $user_email, $person, $mobile, $duration, $durationENG, $durationRUS);
                $_SESSION['success'] = "armor added";
            }
            redirect();
        }
    }
}
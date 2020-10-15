<?php


namespace app\models\admin;


use app\models\AppModel;

class Apartments extends  AppModel
{
    public $attributes = [
        'sellprice' => '',
        'status' => ''
    ];
}
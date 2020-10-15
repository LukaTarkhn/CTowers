<?php


namespace app\models\admin;


use app\models\AppModel;

class Aboutus extends  AppModel
{
    public $attributes = [
        'content_geo' => '',
        'content_eng' => '',
        'content_rus' => ''
    ];
}
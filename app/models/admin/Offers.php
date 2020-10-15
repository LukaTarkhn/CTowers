<?php


namespace app\models\admin;


use app\models\AppModel;

class Offers extends  AppModel
{
    public $attributes = [
        'title' => '',
        'title_eng' => '',
        'title_rus' => '',
        'sale' => '',
        'text' => '',
        'text_eng' => '',
        'text_rus' => '',
    ];
}
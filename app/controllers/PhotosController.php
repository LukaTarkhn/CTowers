<?php


namespace app\controllers;


class PhotosController extends AppController
{
    public function  indexAction() {
        $lang = \ibuild\App::$app->getProperty('language');
        $media = \R::find('media');

        $this->setMeta(
            'Calligraphy Towers media',
            'utf-8',
            'Calligraphy Towers media, photos',
            'BST, Calligraphy Towers',
            'lukatarkhnishvili.com'
        );
    
        $this->set(compact('media'));

    }
}
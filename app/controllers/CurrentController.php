<?php


namespace app\controllers;


class mediaController extends AppController
{
    public function  viewAction() {
        $alias = $this->route['id'];
        $media = \R::findOne('media', 'id = ?', [$alias]);
        if(!$media) {
            throw  new \Exception('Page not found', 404);
        }
        $this->set(compact('media'));
    }
}
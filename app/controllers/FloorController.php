<?php


namespace app\controllers;


class FloorController extends AppController
{
    public function  viewAction() {
        $alias = $this->route['id'];
        $floor = \R::findOne('floors', 'id = ?', [$alias]);
        $apartments = \R::find('apartments2');
        if(!$floor) {
            throw  new \Exception('Page not found', 404);
        }

        $this->setMeta('Grand Maison  Calligraphy Towers', 'utf-8','Floors', $floor->floor, 'lukatarkhnishvili.com');
        $this->set(compact('floor', 'apartments'));
    }
}
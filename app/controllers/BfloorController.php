<?php


namespace app\controllers;


class BfloorController extends AppController
{
    public function  viewAction() {
        $alias = $this->route['id'];
        $floor = \R::findOne('bfloors', 'id = ?', [$alias]);
        $apartments = \R::find('bapartments');
        if(!$floor) {
            throw  new \Exception('Page not found', 404);
        }

        $this->setMeta('Grand Maison  Calligraphy Towers', 'utf-8','Floors', $floor->floor, 'lukatarkhnishvili.com');
        $this->set(compact('floor', 'apartments'));
    }
}
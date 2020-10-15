<?php


namespace app\controllers;


class BapartmentController extends AppController
{
    public function  viewAction() {
        $alias = $this->route['id'];
        $apartment = \R::findOne('bapartments', 'id = ?', [$alias]);
        if(!$apartment) {
            throw  new \Exception('Page not found', 404);
        }

        $lang = \ibuild\App::$app->getProperty('language');
        if ($lang['code'] === 'RU') {
            $this->setMeta('Grand Maison  Calligraphy Towers апартаменти', 'utf-8', $apartment->kvmeter, $apartment->kvmeter, 'lukatarkhnishvili.com');
        } elseif ($lang['code'] === 'EN') {
            $this->setMeta('Grand Maison  Calligraphy Towers Apartments', 'utf-8', $apartment->kvmeter, $apartment->kvmeter, 'lukatarkhnishvili.com');
        } else {
            $this->setMeta('Grand Maison  Calligraphy Towers აპარტამენტები', 'utf-8', $apartment->kvmeter, $apartment->kvmeter, 'lukatarkhnishvili.com');
        }

        $this->set(compact('apartment'));
    }
}
<?php


namespace app\controllers\admin;


class MainController extends AppController
{
    public function indexAction() {

        $this->setMeta(
            'Admin panel',
            'utf-8',
            'for admin',
            'admin panel',
            'lukatarkhnishvili.com'
        );
    }
}
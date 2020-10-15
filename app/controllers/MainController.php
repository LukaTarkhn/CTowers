<?php

namespace app\controllers;

use ibuild\Cache;

class MainController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('aboutus');
        $finishedProjects = \R::find('finished');
        $currentWorks = \R::find('current', 'ORDER BY id DESC LIMIT 8');
        $floors = \R::find('floors');
        $offers = \R::find('offers');
        $lang = \ibuild\App::$app->getProperty('language');

        if ($lang['code'] === 'RU') {
            redirect('/ru');
        } elseif ($lang['code'] === 'EN') {
            redirect('/en');
        } elseif ($lang['code'] === 'GE') {
            redirect('/ka');
        }


        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'offers'));

    }
}
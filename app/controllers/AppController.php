<?php

namespace app\controllers;

use app\widgets\languages\Languages;
use ibuild\App;
use ibuild\base\Controller;
use app\models\AppModel;

class AppController extends Controller {
    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
        App::$app->setProperty('languages', Languages::getLanguages());
        App::$app->setProperty('language', Languages::getLanguage(App::$app->getProperty('languages')));
    }
}

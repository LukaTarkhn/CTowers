<?php


namespace app\widgets\languages;


use ibuild\App;

class Languages {
    protected  $tpl;
    protected  $languages;
    protected  $language;

    public  function  __construct() {
        $this->tpl = __DIR__ . '/languages_tpl/languages.php';
        $this->run();
    }

    protected  function  run(){
        $this->languages = App::$app->getProperty('languages');
        $this->language = App::$app->getProperty('language');
        echo $this->getHtml();
    }

    public static  function  getLanguages() {
        return \R::getAssoc("SELECT code, lang, base FROM languages ORDER BY base DESC");
    }

    public static  function  getLanguage($languages) {
        if (isset($_COOKIE['languages']) && array_key_exists($_COOKIE['languages'], $languages)) {
            $key = $_COOKIE['languages'];
        } else {
            $key = key($languages);
        }
        $language = $languages[$key];
        $language['code'] = $key;

        return $language;
    }

    public function  getHtml() {
        ob_start();
        require_once $this-> tpl;
        return ob_get_clean();
    }
}
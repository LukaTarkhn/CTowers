<?php

namespace ibuild\base;

class View {

    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta =[];

    public function __construct($route, $layout = '', $view = '', $meta) {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render ($data) {
        if(is_array($data)) extract($data);
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        $viewFileNoBack = str_replace('\\', '/', $viewFile);
        if(is_file($viewFileNoBack)) {
            ob_start();
            require_once $viewFileNoBack;
            $content = ob_get_clean();
        } else {
            throw new \Exception("{$viewFileNoBack} not found", 500);
        }
        if($this->layout !== false) {
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($layoutFile)) {
                require_once $layoutFile;
            } else {
                throw new \Exception("template {$this->layout} not found", 500);
            }
        }
    }

    public function getMeta() {
        $output = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
        $output .= '<meta http-equiv="Content-Type" content="text/html" charset="' . $this->meta['charset'] . '">' . PHP_EOL;
        $output .= '<meta name="description" content="' . $this->meta['desc'] . '">' . PHP_EOL;
        $output .= '<meta name="keywords" content="' . $this->meta['keywords'] . '">' . PHP_EOL;
        $output .= '<meta name="developer" content="' . $this->meta['developer'] . '">' . PHP_EOL;
        return $output;
    }

}
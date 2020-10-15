<?php


namespace app\controllers\admin;


use app\models\admin\aboutus;
use ibuild\App;

class AboutusController extends AppController
{
    public function indexAction() {
        $aboutus = \R::findAll('aboutus');
        $this->setMeta('aboutus works list');
        $this->set(compact('aboutus'));
    }


    public function editAction() {
        if(!empty($_POST)) {
            $id = $this->getRequestID(false);
            $aboutus = new Aboutus();
            $data = $_POST;
            $aboutus->load($data);
            if($aboutus->update('aboutus', $id)) {
                $aboutus = \R::load('aboutus', $id);
                \R::store($aboutus);
                $_SESSION['success'] = "Edit saved";
                redirect();
            }
        }
        $id = $this->getRequestID();
        $aboutus = \R::load("aboutus", $id);
        $this->setMeta("aboutus work {$aboutus->title_geo}");
        $this->set(compact('aboutus'));
    }

}
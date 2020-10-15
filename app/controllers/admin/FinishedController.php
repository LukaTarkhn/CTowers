<?php


namespace app\controllers\admin;


use app\models\admin\finished;
use ibuild\App;

class FinishedController extends AppController
{
    public function indexAction() {
        $finisheds = \R::findAll('finished');
        $this->setMeta('finished works list');
        $this->set(compact('finisheds'));
    }

    public function addImageAction() {
        if(isset($_GET['upload'])) {
            if($_POST['name'] == 'single'){
                $wmax = App::$app->getProperty('finishedimg_width');
                $hmax = App::$app->getProperty('finishedimg_height');
            }
            $name = $_POST['name'];
            $finished = new finished();
            $finished->uploadImg($name, $wmax, $hmax);
        }
    }

    public function editAction() {
        if(!empty($_POST)) {
            $id = $this->getRequestID(false);
            $finished = new finished();
            $data = $_POST;
            $finished->load($data);
            $finished->getImg();
            if($finished->update('finished', $id)) {
                $finished = \R::load('finished', $id);
                \R::store($finished);
                $_SESSION['success'] = "Edit saved";
                redirect();
            }
        }
        $id = $this->getRequestID();
        $finished = \R::load("finished", $id);
        $this->setMeta("finished work {$finished->title_geo}");
        $this->set(compact('finished'));
    }

    public function deleteAction(){
        $id = $this->getRequestID();
        \R::exec("DELETE FROM finished WHERE id = ?", [$id]);
        redirect();
    }

    public function addAction() {
        if(!empty($_POST)) {
            $finished = new Finished();
            $data = $_POST;
            $finished->load($data);
            $finished->getImg();
            if($id = $finished->save('finished')) {
                $_SESSION['success'] = "finished work added";
            }
            redirect();
        }

        $this->setMeta('New finished work');
    }
}
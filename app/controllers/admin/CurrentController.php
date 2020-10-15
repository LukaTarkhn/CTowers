<?php


namespace app\controllers\admin;


use app\models\admin\Current;
use ibuild\App;

class CurrentController extends AppController
{
    public function indexAction() {
        $medias = \R::findAll('media');
        $this->setMeta('Media list');
        $this->set(compact('medias'));
    }

    public function addImageAction() {
        if(isset($_GET['upload'])) {
            if($_POST['name'] == 'single'){
                $wmax = App::$app->getProperty('currentimg_width');
                $hmax = App::$app->getProperty('currentimg_height');
            }
            $name = $_POST['name'];
            $media = new Current();
            $media->uploadImg($name, $wmax, $hmax);
        }
    }

    public function editAction() {
        if(!empty($_POST)) {
            $id = $this->getRequestID(false);
            $media = new Current();
            $data = $_POST;
            $media->load($data);
            $media->getImg();
            if($media->update('media', $id)) {
                $media = \R::load('media', $id);
                \R::store($media);
                $_SESSION['success'] = "Edit saved";
                redirect();
            }
        }
        $id = $this->getRequestID();
        $media = \R::load("media", $id);
        $this->setMeta("media {$media->image}");
        $this->set(compact('media'));
    }

    public function deleteAction(){
        $id = $this->getRequestID();
        \R::exec("DELETE FROM media WHERE id = ?", [$id]);
        redirect();
    }

    public function addAction() {
        if(!empty($_POST)) {
            $current = new Current();
            $data = $_POST;
            $current->load($data);
            $current->getImg();
            if($id = $current->save('media')) {
                $_SESSION['success'] = "media added";
            }
            redirect();
        }

        $this->setMeta('New media');
    }
}
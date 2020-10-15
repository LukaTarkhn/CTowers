<?php


namespace app\controllers\admin;

use app\models\admin\Armor;
use ibuild\App;


class ArmoresController extends AppController
{
    public function indexAction() {
        $armores = \R::findAll('armores');
        $this->setMeta('Armores');
        $this->set(compact('armores'));
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $armor = new Armor();
            $data = $_POST;
            $armor->load($data);
            if ($armor->update('armores', $id)) {
                $offer = \R::load('armores', $id);
                \R::store($offer);
                $_SESSION['success'] = "Edit saved";
                redirect();
            }
        }
        $id = $this->getRequestID();
        $armor = \R::load("armores", $id);
        $this->setMeta("Armor");
        $this->set(compact('armor'));
    }

    public function deleteAction()
    {
        $id = $this->getRequestID();
        \R::exec("DELETE FROM armores WHERE id = ?", [$id]);
        redirect();
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $armor = new Armor();
            $data = $_POST;
            $armor->load($data);
            if ($id = $armor->save('armores')) {
                $_SESSION['success'] = "armor added";
            }
            redirect();
        }

        $this->setMeta('New Armor');
    }
}
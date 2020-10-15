<?php


namespace app\controllers\admin;


use app\models\admin\Bapartments;
use ibuild\App;

class BapartmentController extends AppController
{
    public function indexAction() {
        $apartments = \R::findAll('bapartments');
        $this->setMeta('Apartments');
        $this->set(compact('apartments'));
    }

    public function soldAction() {
        $apartments = \R::findAll('bapartments', 'status = 1');
        $this->setMeta('Apartments');
        $this->set(compact('apartments'));
    }

    public function bookedAction() {
        $apartments = \R::findAll('bapartments', 'status = 2');
        $this->setMeta('Apartments');
        $this->set(compact('apartments'));
    }

    public function editAction() {
        if(!empty($_POST)) {
            $id = $this->getRequestID(false);
            $apartments = new Bapartments();
            $data = $_POST;
            $apartments->load($data);
            if($apartments->update('bapartments', $id)) {
                $apartments = \R::load('bapartments', $id);
                \R::store($apartments);
                $_SESSION['success'] = "Edit saved";
                redirect('/admin/bapartment');
            }
        }
        $id = $this->getRequestID();
        $apartments = \R::load("bapartments", $id);
        $this->setMeta("apartment {$apartments->kvmeter} kv");
        $this->set(compact('apartments'));
    }
}
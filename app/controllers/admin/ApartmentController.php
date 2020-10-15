<?php


namespace app\controllers\admin;


use app\models\admin\Apartments;
use ibuild\App;

class ApartmentController extends AppController
{
    public function indexAction() {
        $apartments = \R::findAll('apartments2');
        $this->setMeta('Apartments');
        $this->set(compact('apartments'));
    }

    public function soldAction() {
        $apartments = \R::findAll('apartments2', 'status = 1');
        $this->setMeta('Apartments');
        $this->set(compact('apartments'));
    }

    public function bookedAction() {
        $apartments = \R::findAll('apartments2', 'status = 2');
        $this->setMeta('Apartments');
        $this->set(compact('apartments'));
    }

    public function editAction() {
        if(!empty($_POST)) {
            $id = $this->getRequestID(false);
            $apartments = new Apartments();
            $data = $_POST;
            $apartments->load($data);
            if($apartments->update('apartments2', $id)) {
                $apartments = \R::load('apartments2', $id);
                \R::store($apartments);
                $_SESSION['success'] = "Edit saved";
                redirect('/admin/apartment');
            }
        }
        $id = $this->getRequestID();
        $apartments = \R::load("apartments2", $id);
        $this->setMeta("apartment {$apartments->kvmeter} kv");
        $this->set(compact('apartments'));
    }
}
<?php


namespace app\controllers\admin;

use app\models\admin\Offers;
use ibuild\App;

class OffersController extends AppController
{
    public function indexAction() {
        $offers = \R::findAll('offers');
        $this->setMeta('Special Offers');
        $this->set(compact('offers'));
    }

    public function editAction() {
        if(!empty($_POST)) {
            $id = $this->getRequestID(false);
            $offer = new Offers();
            $data = $_POST;
            $offer->load($data);
            if($offer->update('offers', $id)) {
                $offer = \R::load('offers', $id);
                \R::store($offer);
                $_SESSION['success'] = "Edit saved";
                redirect();
            }
        }
        $id = $this->getRequestID();
        $offer = \R::load("offers", $id);
        $this->setMeta("Offers {$offer->title}");
        $this->set(compact('offer'));
    }

    public function deleteAction(){
        $id = $this->getRequestID();
        \R::exec("DELETE FROM offers WHERE id = ?", [$id]);
        redirect();
    }

    public function addAction() {
        if(!empty($_POST)) {
            $offer = new Offers();
            $data = $_POST;
            $offer->load($data);
            if($id = $offer->save('offers')) {
                $_SESSION['success'] = "Offers added";
            }
            redirect();
        }

        $this->setMeta('New Offers');
    }
}
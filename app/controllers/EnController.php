<?php

namespace app\controllers;

use ibuild\Cache;

class EnController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('aboutus');
        $finishedProjects = \R::find('finished');
        $currentWorks = \R::find('current', 'ORDER BY id DESC LIMIT 8');
        $floors = \R::find('floors');
        $bfloors = \R::find('bfloors');
        $offers = \R::find('offers');
        $media = \R::find('media');
        $apartments = \R::findAll('apartments2');
        $bapartments = \R::findAll('bapartments');

        $this->setMeta(
            'Calligraphy Towers – Construction company',
            'utf-8',
            'Calligraphy Towers - Grand Maison  is the largest construction company in Georgia. It was founded in 1989 and shortly moved to the leading position in the construction sector of the country, currently maintaining this position with dignity. ',
            'Calligraphy Towers, construction, constructor, investment,Georgia, sakartvelo, vila, villa, cottage,buildings, building, hotel, hotels, industrial, individual, residential, leader, leader of the branch, mechanisation, mechanization, Technic, construction site, concrete, project, project design, quality, quality control, technology, construction materials, Caucasus, post soviet, post-soviet, postsoviet, Tbilisi, Batumi, multi-store, multi-store building, reinforced concrete, carcass, monolith, monolithic, finishing, facade, transport, modern',
            'lukatarkhnishvili.com'
        );

        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'bfloors', 'offers', 'bapartments', 'apartments', 'media'));

        setcookie('languages', 'EN', time() + 3600 * 24, '/');
    }

    public function  photosAction() {
        $this->setMeta(
            'Calligraphy Towers media',
            'utf-8',
            'Calligraphy Towers media, photos',
            'BST, Calligraphy Towers',
            'lukatarkhnishvili.com'
        );}

}
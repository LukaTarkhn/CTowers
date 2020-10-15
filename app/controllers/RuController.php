<?php

namespace app\controllers;

use ibuild\Cache;

class RuController extends AppController {
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
            'Calligraphy Towers – жилой комплекс в Батуми',
            'utf-8',
            'Calligraphy Towers - новый высотный жилой комплекс премиум-класса в центре Батуми. В продаже недорогие квартиры и апартаменты от застройщика Real Palace',
            'Calligraphy Towers, Calligraphy Towers batumi,black sea tower,Calligraphy Towers батуми,апартаменты в Calligraphy Towers batumi,Calligraphy Towers,недвижимость батуми,real palace,новостройки батуми, батуми апартамент,батуми квартира купить,стадион в батуми, строительство, строитель, инвестиции, Грузия, отель, сакартвело, вила, вилла, коттедж, здания, здания, гостиницы, гостиницы, промышленные, индивидуальные, жилые, лидер, лидер отрасли, механизация, механизация, техника, строительная площадка, бетон, дизайн, качество, контроль качества, технологии, строительные материалы, Кавказ, постсоветский, постсоветский, постсоветский, Тбилиси, Батуми, многоквартирный магазин, многоквартирный дом, железобетон, каркас, монолит, монолитный, отделочный, фасад, транспорт, современный, REAL PALACE, realpalace.ge',
            'lukatarkhnishvili.com'
        );

        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'bfloors', 'offers', 'bapartments', 'apartments', 'media'));

        setcookie('languages', 'RU', time() + 3600 * 24, '/');
    }

    public function  photosAction() {
        $this->setMeta(
            'Calligraphy Towers media',
            'utf-8',
            'Calligraphy Towers media, photos',
            'BST, Calligraphy Towers',
            'lukatarkhnishvili.com'
        ); 
    }

}
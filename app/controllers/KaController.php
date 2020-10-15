<?php

namespace app\controllers;

use ibuild\Cache;

class KaController extends AppController {
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
            'Calligraphy Towers - უმაღლესი კლასის აპარტამენტები ბათუმში',
            'utf-8',
            'Calligraphy Towers - პრემიუმ კლასის მაღალსართულიანი საცხოვრებელი კორპუსი ბათუმში, ზღვის ხედით, კომპანიისგან REAL PALACE',
            'Calligraphy Towers, BST, მშენებლობა, mshenebloba, მშენებელი, mshenebeli, ინვესტიცია, investicia, საქართველო, sakartvelo, saqartvelo, სამშენებლო, samsheneblo, ვილა, vila, კოტეჯი, koteji, შენობები, shenobebi, შენობა, shenoba, ნაგებობა, nageboba, რემონტი, remonti, სასტუმრო, sastumro, სამრეწველო, samretsvelo, samrewvelo, ინდივიდუალური, individualuri,  საცხოვრებელი, sacxovrebeli, satsxovrebeli, დარგის ლიდერი, dargis lideri,  მექანიზაცია, mekanizatsia, mekanizacia, mekanisatsia, mekanisacia,  meqanizatsia, meqanizacia, meqanisatsia, meqanisacia,  ტექნიკა, teqnika, texnika, ბეტონი, betoni, საპროექტო, saproeqto, saproekto, ხარისხი, xarisxi, ტექნოლოგია, teqnologia, teknologia, საშენი მასალები, sasheni masalebi, კავკასია, kavkasia, პოსტსაბჭოთა, postsabchota, თბილისი, tbilisi, ბათუმი, batumi, მრავალსართულიანი, mravalsartuliani,  რკინაბეტონი, rkinabetoni, კონსტრუქცია, konstruqcia, konstruqtsia, კარკასი, karkasi, მონოლითი, monoliti, მონოლითური, monolituri, მოპირკეთება, mopirketeba, ტრანსპორტი, transporti, თანამედროვე, tanamedrove',
            'lukatarkhnishvili.com'
        );
        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'bfloors', 'offers', 'bapartments', 'apartments', 'media'));

        setcookie('languages', 'GE', time() + 3600 * 24, '/');
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
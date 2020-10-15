<?php


namespace app\controllers;


class ProjectController extends AppController
{
    public function  viewAction() {
        $alias = $this->route['id'];
        $project = \R::findOne('finished', 'id = ?', [$alias]);
        if(!$project) {
            throw  new \Exception('Page not found', 404);
        }
        $lang = \ibuild\App::$app->getProperty('language');
        if ($lang['code'] === 'RU') {
            $this->setMeta(
                $project->title_rus,
                'utf-8',
                $project->title_rus,
                $project->title_rus,
                'lukatarkhnishvili.com'
            );
        } elseif ($lang['code'] === 'EN') {
            $this->setMeta(
                $project->title_eng,
                'utf-8',
                $project->title_eng,
                $project->title_eng,
                'lukatarkhnishvili.com'
            );
        } else {
            $this->setMeta(
                $project->title_geo,
                'utf-8',
                $project->title_geo,
                $project->title_geo,
                'lukatarkhnishvili.com'
            );
        }

        $this->set(compact('project'));
    }
}
<?php


namespace app\controllers;

use RedBeanPHP\R;

class MainController extends AppController
{
    public function indexAction()
    {
        $posts = R::findAll('test');
        $this->setMeta('TITLE','Описание...', 'Ключевые слова...');
        $name ='John';
        $age = 30;
        $this->setData(compact('name', 'age', 'posts'));
    }
}

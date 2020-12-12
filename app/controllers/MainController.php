<?php


namespace app\controllers;


class MainController extends AppController
{
    public function indexAction()
    {
//        $this->layout = null;
        $this->setMeta('TITLE','Описание...', 'Ключевые слова...');
        $name ='John';
        $age = 30;
        $this->setData(compact('name', 'age'));
    }
}

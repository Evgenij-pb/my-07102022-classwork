<?php


namespace controllers;


use core\AbstractController;
use core\View;
use models\ArticleModel;

class Admin extends AbstractController
{
    public function __construct()
    {
        $this->view = new  View('admin');
    }

    public function index()
    {
        //TODO debug of model
        $model = new ArticleModel();
        $res = $model->add(['title' =>'trest', 'text'=>'test text']);

        var_dump($res);
        //$this->view->render('admin_index');
    }
}
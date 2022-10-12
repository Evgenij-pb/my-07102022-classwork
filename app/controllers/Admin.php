<?php


namespace controllers;


use core\AbstractController;
use core\Route;
use core\View;
use models\ArticleModel;

class Admin extends AbstractController
{
    protected $model;

    public function __construct()
    {
        $this->view = new  View('admin');
        $this->model = new ArticleModel();
    }

    public function index()
    {
        //TODO debug of model
        /*$model = new ArticleModel();
        $res = $model->add(['title' =>'trest', 'text'=>'test text']);

        var_dump($res);*/
        $articles = $this->model->all();
        $this->view->render('admin_index',[
            'articles'=>$articles
        ]);
    }

    public function create(){
        $this->view->render('admin_create');
    }

    public function store(){
        $request=filter_input_array(INPUT_POST);
        //TODO validate
        $article=[
            'title'=>$request['title'],
            'text'=>$request['text'],

        ];
        $this->model->add($article);
        Route::redirect(Route::url('admin','index'));
    }
}
<?php


namespace controllers;


use core\AbstractController;
use core\View;
use models\ArticleModel;

class Index extends AbstractController
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new ArticleModel();
    }

    public function index(){

        $articles = $this->model->all();
        $this->view->render('index_index',[
            'articles' => $articles
        ]);
    }

    public function article($articleId){

        $article = $this->model->oneArticleById($articleId);
        $this->view->render('index_article', [
            'article' => $article
        ]);

    }
}
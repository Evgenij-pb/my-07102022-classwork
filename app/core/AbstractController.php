<?php


namespace core;


use models\ArticleModel;

abstract class AbstractController implements controllerInterface
{
    /**
     * @var View view object for rendering page
     */
    protected $view;
    protected $model;

    public function __construct()
    {
        $this->view = new View();
    }


}
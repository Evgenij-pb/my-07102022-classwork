<?php


namespace core;


class View
{
    const VIEW_DIR = 'app/source/views';
    protected $template = 'index_template';

    public function __construct(string $template = null)
    {
        if (!empty($template)) {
            $this->template = $template;
        }
    }

    public function render(string $page, array $options = [])
    {
        extract($options);
        include_once self::VIEWS_DIR . '/templates' . $this->template . '.php';
    }
}
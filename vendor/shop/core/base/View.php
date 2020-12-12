<?php


namespace shop\base;


abstract class View
{
    protected array $route;
    protected string $controller;
    protected string $model;
    protected string $view;
    protected string $prefix;
    protected ?string $layout;
    protected array $data = [];
    protected array $meta = [];

    public function __construct(array $route, array $meta, ?string $layout = '', string $view = '')
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if (is_null($layout)) {
            $this->layout = $layout ?: LAYOUT;
        }
    }
}

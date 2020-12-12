<?php


namespace shop\base;


abstract class View
{
    protected array $route;
    protected string $controller;
    protected string $model;
    protected string $view;
    protected string $prefix;
    protected array $data = [];
    protected array $meta = [];

    public function __construct(array $route, array $meta, string $layout = '', string $view = '')
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }
}

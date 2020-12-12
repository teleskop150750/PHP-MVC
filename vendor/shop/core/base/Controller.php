<?php


namespace shop\base;


abstract class Controller
{
    protected array $route;
    protected string $controller;
    protected string $model;
    protected string $view;
    protected string $prefix;
    protected array $data = [];
    protected array $meta = [];

    public function __construct(array $route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }

    /**
     * задать данные
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * задать метаданные
     * @param string $title
     * @param string $description
     * @param string $keywords
     */
    public function setMeta(string $title = '', string $description = '', string $keywords = ''): void
    {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;
    }
}

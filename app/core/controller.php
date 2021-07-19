<?php 

abstract class Controller 
{
    public $layout = 'main';

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function renderView($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
<?php 

class Router
{
    public $routes = [];
    public $request;

    public function __construct($request) 
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? false;

        // undefined path or route
        if ($callback === false) {
            return $this->renderView('404');
        }

        // get method
        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        if (is_array($callback)) {
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }

        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $params = [])
    {
        $layout = $this->layout();
        $content = $this->renderContent($view, $params);

        return str_replace('{{content}}', $content, $layout);
    }

    private function layout()
    {
        $layout = Application::$app->controller->layout ?? 'main';
        ob_start();
        include Application::$app::$ROOT_PATH."/views/$layout.php";
        return ob_get_clean();
    }

    private function renderContent($view, $params = [])
    {
        ob_start();
        include Application::$app::$ROOT_PATH."/views/$view.php";
        return ob_get_clean();
    }
}
<?php

class Application
{
    public static $ROOT_PATH;
    public $database;
    public $request;
    public $router;
    public $controller;
    public $session;
    public static $app;

    public function __construct($rootPath,$config)
    {
        self::$ROOT_PATH = $rootPath;
        $this->session = new Session();
        

        $this->database = new Database($config);
        
        $this->request = new Request();
        $this->router = new Router($this->request);
        self::$app = $this;
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
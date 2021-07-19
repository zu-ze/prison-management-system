<?php 

class Request 
{
    public function getData()
    {
        $data = $_REQUEST;
        return $data;
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getPath()
    {
        return $_SERVER['PATH_INFO'] ?? '/';
    }
}
<?php

class AuthController extends Controller 
{
    public function index()
    {
        return $this->renderView('login');
    }

    public function login($request) 
    {
        var_dump($request);
        exit;
    }
}
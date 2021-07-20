<?php

class HomeController extends Controller
{
    public function index()
    {
        return $this->renderView('home');
    }

    public function visitRequest()
    {
        return $this->renderView('visitor');
    }

    public function visitSelect($request)
    {
        return $this->renderView('select');
    }
}
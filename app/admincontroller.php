<?php

class AdminController extends Controller 
{
    public function __construct()
    {
        $this->layout = 'admin';
    }
    public function index()
    {
        return $this->renderView('dashboard');
    }

    public function prisoners()
    {
        return $this->renderView('prisoners');
    }

    public function staff()
    {
        return $this->renderView('staff');
    }

    public function visitors()
    {
        return $this->renderView('visitors');
    }

    public function equipment()
    {
        return $this->renderView('equipment');
    }

    public function help()
    {
        return $this->renderView('help');
    }
}
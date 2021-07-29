<?php

class AuthController extends Controller 
{
    public function index()
    {
        return $this->renderView('login');
    }

    public function login($request) 
    {
        $data = $request->getData();

        $query = "SELECT * FROM `system-users` WHERE `email` ='". $data['email']."' AND `password` ='". $data['password']."'";

        $user = Application::$app->database->getOne($query);

        if($user) {
            Application::$app->session->setUser($user['email'], $user['role']);
            Application::$app->session->setFlash('success', 'Login was successfull!');

            header('Location: /admin');
        } else {
            header('Location: /login');
        }
    }

    public function logout()
    {
        Application::$app->session->userLogout();

        header('Location: /');
    }
}
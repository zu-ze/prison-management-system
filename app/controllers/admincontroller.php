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
        $prisoners = Application::$app->database->getAll("SELECT * FROM prisoner;");
        $params = [
            'prisoners' => $prisoners
        ];

        return $this->renderView('prisoners', $params);
    }

    public function addPrisoner($request)
    {
        $data = $request->getData();

        $query = "INSERT INTO `prisoner`(`firstname`,`surname`,`national-id`,`gender`,"
            ."`DOB`,`eviction-date`) VALUES ('".$data['firstname']."','"
            .$data['surname']."','".$data['national-id']."','"
            .$data['gender']."','".$data['DOB']."','"
            .$data['eviction-date']."');";

        $result = Application::$app->database->query($query);

        if($result) {
            Application::$app->session->setFlash('success', 'Created new prisoner record successfully!');
            header('Location: /admin/prisoners');
        } else {
            Application::$app->session->setFlash('failed', 'Failed to create new record!');
            header('Location: /admin/prisoners');
        }
    }

    public function prisonerProfile($request) {
        $data = $request->getData();

        $prisoner = Application::$app->database->getAll("SELECT * FROM prisoner WHERE id=".(int)$data['id'].";");

        $params = [
            'prisoner' => $prisoner[0]
        ];
        return $this->renderView('profile', $params);
    }

    public function staff()
    {
        return $this->renderView('staff');
    }

    // public

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
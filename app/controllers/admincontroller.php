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

    public function postStaff($request)
    {
        $data = $request->getData();

        $query= "INSERT INTO `employee`(`national_id`,`firstname`,"
            ."`lastname`,`gender`,`marital_status`,`DOB`, `job_desc`)"
            ." VALUES ('".$data['national_id']."','".$data['firstname']."','".$data['lastname']
            ."','".$data['gender']."','".$data['marital_status']."','".$data['DOB']."','".$data['job_desc']."');";
    
        $result = Application::$app->database->query($query);

        if($result) {
            Application::$app->session->setFlash('success', 'Create the record successfully!');
            header('Location: /admin/staff');
        } else {
            Application::$app->session->setFlash('failed', 'Failed to create the record!');
            header('Location: /admin/staff');
        }
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
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

    public function showPrisoners()
    {
        $prisoners = Application::$app->database->getAll("SELECT * FROM prisoner;");
        $params = [
            'prisoners' => $prisoners
        ];

        return $this->renderView('showprisoners', $params);
    }

    public function indexPrisoner()
    {
        $prisoner = new Prisoner();
        
        return $this->renderView('addprisoner', [
            'model' => $prisoner
        ]);
    }

    public function createPrisoner($request)
    {
        $prisoner = new Prisoner();
        $prisoner->loadData($request->getData());

        if($prisoner->validate() && $prisoner->save()) {
            Application::$app->session->setFlash('success', 'Created new prisoner record successfully!');
            header('Location: /admin/showprisoners');
        } else {
            Application::$app->session->setFlash('failed', 'Failed to create new record!');
            return $this->renderView('addprisoner', [
                'model' => $prisoner,
            ]);
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
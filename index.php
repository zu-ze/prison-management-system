<?php
    require_once './app/core/loader.php';

    $config = [
        'dsn' => 'mysql:host=localhost;dbname=prison-management',
        'user' => 'root',
        'pword' => ''
    ];

    $loader = new AutoLoader([
        './app/controllers',
        './app/core'
    ]);
    $loader->loadClasses();
    
    $app =  new Application(__DIR__,$config);
    
    $user = Application::$app->session->getUser();
    
    $app->router->get('/', [HomeController::class, 'index']);
    $app->router->get('/visitor', [HomeController::class, 'visitRequest']);
    $app->router->post('/visitor/select', [HomeController::class, 'visitSelect']);
    
    $app->router->get('/login', [AuthController::class, 'index']);
    $app->router->post('/login', [AuthController::class, 'login']);
    $app->router->get('/logout', [AuthController::class, 'logout']);
    
    if($user) {
        $app->router->get('/admin', [AdminController::class, 'index']);
        $app->router->get('/admin/prisoners', [AdminController::class, 'prisoners']);
        $app->router->get('/admin/staff', [AdminController::class, 'staff']);
        $app->router->post('/admin/staff', [AdminController::class, 'postStaff']);
        $app->router->get('/admin/visitors', [AdminController::class, 'visitors']);
        $app->router->get('/admin/equipment', [AdminController::class, 'equipment']);
        $app->router->get('/admin/help', [AdminController::class, 'help']);
    }    

    $app->run();
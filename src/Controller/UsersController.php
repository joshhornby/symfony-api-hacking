<?php

namespace App\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class UsersController extends FOSRestController
{
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UsersController.php',
        ]);
    }
}

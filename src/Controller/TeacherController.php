<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TeacherController.php',
        ]);
    }
 
    #[Route('/showteacher/{name}',name:'app_showTeacher')]
    public function showTeacher($name){
           return new Response("Bonjour"." ".$name);
    }

    
    #[Route('/redirectionIndex', name: 'app_redirectionIndex')]
    public function redirection(): Response
    {
        return $this->forward('App\Controller\StudentController::index');
       


}
}

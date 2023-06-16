<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    #[Route('/', name: 'app_to_do_list')]
    public function index()
    {
        return $this->render('index.html.twig');
    }
}

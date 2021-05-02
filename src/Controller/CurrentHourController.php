<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CurrentHourController extends AbstractController
{
    /**
      * @Route("/controller")
     * @Route("/current/hour/{nom}", name="current_hour")
     */
    public function index(Request $_request)
    { $nom=$_request->get('nom');
        return $this->render('current_hour/index.html.twig', [
            'controller_name' => $nom,
        ]);
    }
}

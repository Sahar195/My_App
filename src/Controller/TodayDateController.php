<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodayDateController extends AbstractController
{use Symfony\Component\Routing\Annotation\Route;
    /**
    
     * @Route("/")
     * @Route("/current/hour/",name="current-hour")
     * @Route("/today/date", name="today_date")
     */
    public function index(): Response
    {
        return $this->render('today_date/index.html.twig', [
            'controller_name' => 'TodayDateController',
        ]);
    }
}

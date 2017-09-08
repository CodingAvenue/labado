<?php

namespace CodingAvenue\LabadoSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DetermineLabadoerController extends Controller
{
    /**
     * @Route("/api/determine/labadoer")
     */
    public function indexAction()
    {
        return $this->render('CodingAvenueLabadoSystemBundle:DetermineLabadoer:index.html.twig', array(
            // ...
        ));
    }

}

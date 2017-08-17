<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CodingAvenueLabadoBundle:Default:index.html.twig');
    }

    /**
     * @Route("/show_details")
     */
    public function showDetailsAction()
    {
        return $this->render('CodingAvenueLabadoBundle:Default:showDetails.html.twig');
    }
}

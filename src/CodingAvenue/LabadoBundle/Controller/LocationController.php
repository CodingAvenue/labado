<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LocationController extends Controller
{
    /**
     * @Route("/search", name="search")
     */
    public function searchAction()
    {
        return $this->render('CodingAvenueLabadoBundle:Location:search.html.twig', array(
            // ...
        ));
    }

}

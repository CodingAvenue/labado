<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BookingRequestController extends Controller
{
    /**
     * @Route("/bookingrequest")
     */
    public function storeAction()
    {
        return $this->render('CodingAvenueLabadoBundle:BookingRequest:store.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/bookingrequest/{id}/status")
     */
    public function checkStatusAction($id)
    {
        return $this->render('CodingAvenueLabadoBundle:BookingRequest:check_status.html.twig', array(
            // ...
        ));
    }

}

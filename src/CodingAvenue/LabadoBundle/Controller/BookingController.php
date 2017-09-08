<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Entity\LaundryShop;
use CodingAvenue\LabadoSystemBundle\Service\LabadoerFinder;

class BookingController extends Controller
{
    /**
     * @Route("/laundryshop/{id}/book", name="booking")
     */
    public function indexAction(LaundryShop $shop)
    {
        $finder = new LabadoerFinder(); 
        $finder->findNearby(1,2);

        $labadoer = $finder->getLabadoer();
        dump($labadoer);
        return $this->render('CodingAvenueLabadoBundle:Booking:index.html.twig', array(
        ));
    }

}
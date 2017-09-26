<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\BookingRequest;
use Eo\JobQueueBundle\Document\Job;

class BookingRequestController extends Controller
{
    /**
     * @Route("/bookingrequest", name="bookingRequest")
     */
    public function storeAction()
        {
        $job = new Job('book', []);

        $br = new BookingRequest();

        $br->setUser($this->container->get('security.token_storage')->getToken()->getUser());

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->flush();

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

<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\BookingRequest;
use Eo\JobQueueBundle\Document\Job;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class BookingRequestController extends Controller
{
    public function storeAction($booking_request_id)
    {
        $job = new Job('book', [$booking_request_id]);

        $em = $this->get('doctrine_mongodb')->getManager();
        $em->persist($job);
        $em->flush();
        
        return $this->render('CodingAvenueLabadoBundle:BookingRequest:check_status.html.twig', [ 
            "booking_request_id" => $booking_request_id,
        ]);
    }

    /**
     * @Route("/bookingrequest/{id}/status")
     */
    public function checkStatusAction(BookingRequest $booking_request)
    {
        $response = new JsonResponse(['status' => $booking_request->getStatus()]);

        return $response;
    }
}

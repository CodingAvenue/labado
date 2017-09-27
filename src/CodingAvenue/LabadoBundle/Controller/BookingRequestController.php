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
    /**
     * @Route("/bookingrequest", name="bookingRequest")
     */
    public function storeAction(Request $request)
    {
        $id = $request->query->get('bookingRequestId');
        $job = new Job('book', [$id]);
        
        return $this->render('CodingAvenueLabadoBundle:BookingRequest:store.html.twig', [ 
            "BookingRequestId" => $id,
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

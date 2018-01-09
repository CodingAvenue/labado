<?php

namespace CodingAvenue\LabadoSystemBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\BookingRequest;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BookingRequestController extends FOSRestController
{
    /**
     * @Rest\Post("/bookingrequest")
     */
    public function indexAction(Request $request, $booking_request_id)
    {

    }

    /**
     * @Rest\Get("/bookingrequest/{id}/status")
     */
    public function checkStatusAction(BookingRequest $booking_request)
    {
        return $booking_request->getStatus();
    }
}

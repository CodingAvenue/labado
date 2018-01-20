<?php

namespace CodingAvenue\LabadoSystemBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\Booking;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends FOSRestController
{
    /**
     * @Rest\Get("/booking/{id}")
     */
    public function indexAction(Booking $booking)
    {
        return $booking;
    }
}

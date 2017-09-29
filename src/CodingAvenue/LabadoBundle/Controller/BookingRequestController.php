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
    public function storeAction($booking_request)
    {
        $em = $this->get('doctrine_mongodb')->getManager();

        $job = new Job('book', [$booking_request->getId()]);
        // this doesn't work
        // $job->addRelatedDocument($booking_request);
        $em->persist($job);

        $booking_request->setJobId($job->getId());

        $em->flush();
        
        return $this->render('CodingAvenueLabadoBundle:BookingRequest:check_status.html.twig', [ 
            "booking_request" => $booking_request,
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

    /**
     * @Route("/bookingrequest/{id}/cancel")
     */
    public function cancelRequestAction(BookingRequest $booking_request)
    {
        if ($booking_request->getStatus() != BookingRequest::STATUS_PENDING) { 
            $response = new JsonResponse(['status' => $booking_request->getStatus()]);
            return $response;
        }

        $dm = $this->get('doctrine_mongodb')->getManager();

        $job = $dm->getRepository('EoJobQueueBundle:Job')->find($booking_request->getJobId());
        $job->setState(Job::STATE_CANCELED);

        $booking_request->setStatus(BookingRequest::STATUS_CANCELLED);

        $dm->flush();
        
        $response = new JsonResponse(['status' => $booking_request->getStatus()]);
        return $response;
        
    }
}

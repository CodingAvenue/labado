<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\Booking;
use CodingAvenue\LabadoSystemBundle\Document\Labadoer;
use CodingAvenue\LabadoSystemBundle\Repository\BookingRepository;
class BookingController extends Controller
{
    /**
     * @Route("/booking/current")
     */
    public function showCurrentAction()
    {
        $em = $this->get('doctrine_mongodb')->getManager();
        $repository = $em->getRepository(Booking::class);

        $booking = $repository->findOneCurrent($this->getUser());

        if (! $booking) {
            return $this->redirectToRoute('search');
        }

        return $this->render('CodingAvenueLabadoBundle:Booking:show_current.html.twig', [
            'Labadoer' => $booking->getLabadoer(),
            'User'     => $booking->getUser(),
        ]);
    }

}

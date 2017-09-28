<?php

namespace CodingAvenue\LabadoSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\LaundryShop;
use CodingAvenue\LabadoSystemBundle\Document\Labadoer;
use CodingAvenue\LabadoSystemBundle\Document\Booking;
use CodingAvenue\LabadoSystemBundle\Document\Coordinates;
use CodingAvenue\LabadoSystemBundle\Document\StandardServiceMatrix;

class DefaultController extends Controller
{
    /**
     * @Route("/sample")
     */
    public function indexAction()
    {
        $em = $this->get('doctrine_mongodb')->getManager();
        
        // $laundry_shop = $em->getRepository(LaundryShop::class)->find('59ca3dffa2d6425dd64c9891');

        $coords = new Coordinates();
        $coords->setX(10.0);
        $coords->setY(123.5);

        $user = $this->getUser();
        $user->setCoordinates($coords);

        // $labadoer = new Labadoer();
        // $labadoer->setFirstName("Leonel");
        // $labadoer->setCoordinates($coords);
        // $labadoer->setLastName("Tomes");
        // $labadoer->setPhoneNumber("09123456789");
        // $labadoer->setStatus("Online");
        // $labadoer->setPhoto("leonel.jpg");
        // $booking = new Booking();
        // $booking->setUser($this->getUser());
        // $booking->setLaundryShop($laundry_shop);
        // $booking->setLabadoer($labadoer);
        // $booking->setStatus(Booking::STATUS_IN_PROGRESS);
        // $booking->setBookedAt(new \DateTime());
        // foreach ($laundry_shop->getServices() as $service) {
        //     $ssm = new StandardServiceMatrix();
        //     $ssm->setService($service);
        //     $ssm->setWeight(1);
        
        //     $booking->addStandardServiceMatrix($ssm);
        // }
        
        // $em->persist($booking);
        // $em->persist($labadoer);
        $em->flush();
        
        // dump($booking->getId());
        
        return $this->render('CodingAvenueLabadoSystemBundle:Default:index.html.twig');
    }
}

<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\User;
use CodingAvenue\LabadoSystemBundle\Document\Labadoer;
use CodingAvenue\LabadoSystemBundle\Document\Coordinates;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        if ($this->getUser() instanceOf User) {
            return $this->redirectToRoute('search');
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
     
    }

    /**
     * @Route("/mrsl")
     */
    public function msrlAction()
    {
        $mongo_em = $this->get('doctrine_mongodb')->getManager();
        $coords = new Coordinates();
        $coords->setY(10.0);
        $coords->setX(123.5);
        $labadoer = new Labadoer();
        $labadoer->setFirstName("Leonel");
        $labadoer->setCoordinates($coords);
        $labadoer->setLastName("Tomes");
        $labadoer->setPhoneNumber("09123456789");
        $labadoer->setStatus("Online");
        $labadoer->setPhoto("leonel.jpg");
        $mongo_em->persist($labadoer);
        $mongo_em->flush();
        return $this->render('CodingAvenueLabadoBundle:Default:index.html.twig');
    }
}

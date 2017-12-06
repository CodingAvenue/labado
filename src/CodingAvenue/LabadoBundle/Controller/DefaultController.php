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
}

<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListController extends Controller
{
    /**
     * @Route("laundryshop", name="laundryshop")
     */
    public function indexAction()
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->render('CodingAvenueLabadoBundle:List:index.html.twig');
        } else {
            return $this->redirectToRoute('fos_user_security_login', [ "error" => "You Need to Login" ]);
        } 

    }
}

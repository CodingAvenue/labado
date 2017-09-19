<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Entity\LaundryShop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DetailsController extends Controller
{
    /**
     * @Route("laundryshop/{placeId}/details", name="laundryDetails")
     */
    public function indexAction(LaundryShop $laundry_shop)
    {
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->render('CodingAvenueLabadoBundle:Details:index.html.twig', [
            'laundry_shop' => $laundry_shop,
            ]);
        } else {
            return $this->redirectToRoute('fos_user_security_login', [ "error" => "You Need to Login" ]);
        }
        
    }
}

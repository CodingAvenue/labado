<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Entity\LaundryShop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DetailsController extends Controller
{
    /**
     * @Route("laundryshop/{id}/details", name="laundryDetails")
     */
    public function indexAction(LaundryShop $laundry_shop)
    {
        return $this->render('CodingAvenueLabadoBundle:Details:details.html.twig',[
            'laundry_shop' => $laundry_shop,
        ]);
    }
}

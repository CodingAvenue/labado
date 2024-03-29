<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\LaundryShop;

class DetailsController extends Controller
{
    /**
     * @Route("laundryshop/{placeId}/details", name="laundryDetails")
     */
    public function indexAction(LaundryShop $laundry_shop)
    {
        return $this->render('CodingAvenueLabadoBundle:Details:index.html.twig', [
            'laundry_shop' => $laundry_shop,
        ]);
    }
}

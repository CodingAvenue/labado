<?php

namespace CodingAvenue\LabadoSystemBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\LaundryShop;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LaundryShopController extends FOSRestController
{
    /**
     * @Rest\Get("/laundryshop/{placeId}")
     */
    public function indexAction(LaundryShop $laundry_shop)
    {
        return $laundry_shop;
    }
}

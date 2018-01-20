<?php

namespace CodingAvenue\LabadoSystemBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\Labadoer;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LabadoerController extends FOSRestController
{
    /**
     * @Rest\Get("/labadoer/{id}")
     */
    public function indexAction(Labadoer $labadoer)
    {
        return $labadoer;
    }
}

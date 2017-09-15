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
       return $this->render('CodingAvenueLabadoBundle:List:index.html.twig');
    }
}

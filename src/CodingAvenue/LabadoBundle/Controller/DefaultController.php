<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Form\EstimateType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $form = $this->createForm(EstimateType::class);

        if ($form->isSubmitted() && $form->isValid()) {

        }
        return $this->render('CodingAvenueLabadoBundle:Default:index.html.twig',[ "form" => $form->createView() ]);
    }
}

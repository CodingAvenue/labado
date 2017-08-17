<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Form\EstimateType;
use CodingAvenue\LabadoBundle\Entity\LaundryShop;

class UserInteractionControllerController extends Controller
{
    /**
     * @Route("/{id}/estimate")
     */
    public function inputEstimateAction($id)
    { 
        //rate is temporary; the value should come from the 
        $rate = 29; 
        $form = $this->createForm(EstimateType::class);
        if ($form->isSubmitted() && $form->isValid()) {
        

        }
        return $this->render('CodingAvenueLabadoBundle:UserInteractionController:input_estimate.html.twig',[ "form" => $form->createView(),"rate" =>$rate]);
       
    }

}

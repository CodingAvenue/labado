<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Form\EstimateType;
use CodingAvenue\LabadoBundle\Entity\LaundryShop;
use CodingAvenue\LabadoBundle\Entity\LaundryServices;


class InputEstimateController extends Controller
{
    /**
     * @Route("/{id}/inputEstimate")
     */
    public function inputEstimateAction(LaundryShop $shop)
    {
        //fetching from the Laundry Services Entity        
        $data= $shop->getServices();
        $services = []; 
        foreach($data as $index=>$service){
            $services[$index] = $service;
        }

        $form = $this->createForm(EstimateType::class,null, ['services' => $services]);

        return $this->render('CodingAvenueLabadoBundle:InputEstimate:input_estimate.html.twig',[ "form" => $form->createView(),"services"=>$services]);
       

    }

}

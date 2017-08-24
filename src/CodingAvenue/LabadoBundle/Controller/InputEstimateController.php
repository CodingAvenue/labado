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
     * @Route("laundry/{id}/estimate")
     */
    public function inputEstimateAction(LaundryShop $shop)
    {
        $form = $this->createForm(EstimateType::class,null, ['services' => $shop->getServices()]);
        return $this->render('CodingAvenueLabadoBundle:InputEstimate:input_estimate.html.twig',[ "form" => $form->createView(),"shop"=>$shop]);
    }

}

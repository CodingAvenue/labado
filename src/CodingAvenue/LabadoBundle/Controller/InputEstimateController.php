<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Form\EstimateType;
use CodingAvenue\LabadoSystemBundle\Document\LaundryShop;
use Symfony\Component\HttpFoundation\Request;

class InputEstimateController extends Controller
{
    /**
     * @Route("/laundryshop/{id}/estimate", name="inputEstimate")
     */
    public function inputEstimateAction(LaundryShop $shop, Request $request)
    {
        $form = $this->createForm(EstimateType::class,null, ['services' => $shop->getServices()]);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            return $this->redirectToRoute('bookingRequest');
        }
        return $this->render('CodingAvenueLabadoBundle:InputEstimate:input_estimate.html.twig', ["form" => $form->createView() ,"shop" => $shop]);
    }
}

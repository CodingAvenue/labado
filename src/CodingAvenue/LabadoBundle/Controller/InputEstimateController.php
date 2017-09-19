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
     * @Route("/laundryshop/{id}/estimate", name="inputEstimate")
     */
    public function inputEstimateAction(LaundryShop $shop)
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $form = $this->createForm(EstimateType::class,null, ['services' => $shop->getServices()]);
            return $this->render('CodingAvenueLabadoBundle:InputEstimate:input_estimate.html.twig', ["form" => $form->createView() ,"shop" => $shop]);
        } else {
            return $this->redirectToRoute('fos_user_security_login', [ "error" => "You Need to Login" ]);
        }
    }
}

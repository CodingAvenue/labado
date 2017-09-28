<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Form\EstimateType;
use CodingAvenue\LabadoSystemBundle\Document\LaundryShop;
use CodingAvenue\LabadoSystemBundle\Document\BookingRequest;
use CodingAvenue\LabadoSystemBundle\Document\StandardServiceMatrix;
use Symfony\Component\HttpFoundation\Request;

class InputEstimateController extends Controller
{
    /**
     * @Route("/laundryshop/{id}/estimate", name="inputEstimate")
     */
    public function inputEstimateAction(LaundryShop $shop, Request $request)
    {
        $form = $this->createForm(EstimateType::class, null, ['services' => $shop->getServices()]);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $br = new BookingRequest();
            $br->setUser($this->getUser());
            // $br->setUser($this->container->get('security.token_storage')->getToken()->getUser());
            $br->setLaundryShop($shop);

            foreach ($form->getData() as $key=>$data) {
                $service = new StandardServiceMatrix();
                $service->setService($shop->getServices()[(int)substr($key, -1)]);
                $service->setQuantity(0);
                $service->setWeight($form->getData()[$key]);
                $br->addStandardServiceMatrix($service);
            }
            
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($br);
            $dm->flush();
            return $this->redirectToRoute('bookingRequest', ["bookingRequestId"=>$br->getId()]);
        }
        return $this->render('CodingAvenueLabadoBundle:InputEstimate:input_estimate.html.twig', ["form" => $form->createView() ,"shop" => $shop]);
    }
}

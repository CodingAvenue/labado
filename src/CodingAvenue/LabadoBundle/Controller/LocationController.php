<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use CodingAvenue\LabadoSystemBundle\Document\Coordinates;
use CodingAvenue\LabadoSystemBundle\Document\User;

class LocationController extends Controller
{
    /**
     * @Route("/search", name="search")
     */
    public function searchAction()
    {
        return $this->render('CodingAvenueLabadoBundle:Location:search.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/location", name="store")
     * @Method("POST")
     */
    public function storeAction(Request $request)
    {
        $user = $this->container->get("security.token_storage")->getToken()->getUser();

        $coords = new Coordinates();
        $coords->setX($request->get("x"));
        $coords->setY($request->get("y"));

        $user->setCoordinates($coords);

        $mongo_em = $this->get('doctrine_mongodb')->getManager();
        $mongo_em->flush();

        $response = new JsonResponse($user->getCoordinates());
        return $response;
    }
}
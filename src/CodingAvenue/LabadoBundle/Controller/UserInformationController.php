<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoSystemBundle\Document\User;
use CodingAvenue\LabadoBundle\Form\InformationType;
use Symfony\Component\HttpFoundation\Request;

class UserInformationController extends Controller
{
    /**
     * @Route("/register/confirmed", name="firstTimeSetup")
     * @Route("/profile/info/edit", name="userInfoEdit")
     */
    public function editAction(Request $request)
    {
        $em = $this->get('doctrine_mongodb')->getManager();

        $user = $this->getUser();

        $form = $this->createForm(InformationType::class, $user); 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $user->setAddress($data->getAddress());
            $user->setLandmark($data->getLandmark());
            $user->setMobileNumber($data->getmobileNumber());
            $em->flush();
            
            if ($request->get('_route') === 'firstTimeSetup') {
                return $this->redirectToRoute('homepage');
            }

            return $this->redirectToRoute('fos_user_profile_show');
        }
        return $this->render('CodingAvenueLabadoBundle:UserInformation:edit.html.twig', [ 
           "form" => $form->createView(), 
           "user" => $user, 
        ]);
    }

}

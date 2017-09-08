<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodingAvenue\LabadoBundle\Entity\User;
use CodingAvenue\LabadoBundle\Form\InformationType;
use Symfony\Component\HttpFoundation\Request;

class UserInformationController extends Controller
{
    /**
     * @Route("/register/confirmed", name="first_time_setup")
     * @Route("/profile/info/edit", name="user_info_edit")
     */
    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user = $em->getRepository(User::class)->find($user);

        $form = $this->createForm(InformationType::class,$user ); 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $user->setAddress($data->getAddress());
            $user->setLandmark($data->getLandmark());
            $user->setContactNumber($data->getContactNumber());
            $em->flush();

            return $this->redirectToRoute('fos_user_profile_show');
        }
        return $this->render('CodingAvenueLabadoBundle:UserInformation:edit.html.twig', [ 
           "form" => $form->createView(), "user" => $user, 
        ]);
    }

}

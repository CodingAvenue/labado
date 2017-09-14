<?php

namespace CodingAvenue\LabadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use CodingAvenue\LabadoBundle\Entity\User;

class RegistrationErrorDetectorController extends Controller
{
    /**
     * @Route("/registration/exist/email")
     */
    public function existEmailAction(Request $request)
    {
        $response = new Response();
        $email = $request->getContent();
        $email = $email;
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findByEmail($email);
        $response->setContent(
            json_encode(['status' => (bool) $user ])
        );

        return $response;
    }

    /**
     * @Route("/registration/exist/username")
     */
    public function existUsernameAction(Request $request)
    {
        $response = new Response();
        $email = $request->getContent();
        $email = $email;
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findByUsername($email);
        $response->setContent(
            json_encode(['status' => (bool) $user ])
        );

        return $response;
    }
}

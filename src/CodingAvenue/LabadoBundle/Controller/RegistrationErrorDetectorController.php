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
     * @Route("/registration/exist/email", name="check_email")
     * @Route("/registration/exist/username", name="chec_username")
     */
    public function existEmailAction(Request $request)
    {
        $data = $request->getContent();

        if ($request->get('_route') === 'check_email') {
            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->findByEmail($data);
        } else {
            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->findByUsername($data);
        }

        $response = new Response();
        $response->setContent(
            json_encode(['status' => (bool) $user ])
        );

        return $response;
    }

}

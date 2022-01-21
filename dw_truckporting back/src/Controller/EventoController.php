<?php

namespace App\Controller;

use App\Entity\Evento;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventoController extends AbstractController
{
    /**
     * @Route("/evento", name="evento")
     */
    public function index(): Response
    {
       $evento = $this->getDoctrine()->getRepository(Evento::class)->findAll();
        return $this->json([
           json_encode($evento)
        ]);
    }
}

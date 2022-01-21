<?php

namespace App\Controller;

use App\Entity\Vehiculo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculoController extends AbstractController
{
    /**
     * @Route("/vehiculo", name="vehiculo")
     */
    public function index(): Response
    {
       $vehiculos = $this->getDoctrine()->getRepository(Vehiculo::class)->findAll();
       $jsonEncode = new JsonEncoder();
       $jsonEncode
        return $this->json(

        );
    }
}

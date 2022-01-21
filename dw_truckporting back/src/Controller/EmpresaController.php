<?php

namespace App\Controller;

use App\Entity\Empresa;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmpresaController extends AbstractController
{
    /**
     * @Route("/emrpesa", name="empresa")
     */
    public function index(): Response
    {
       $empresa = $this->getDoctrine()->getRepository(Empresa::class)->findAll();
        return $this->json([
           json_encode($empresa)
        ]);
    }
}

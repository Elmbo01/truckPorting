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
       $eventos = $this->getDoctrine()->getRepository(Evento::class)->findAll();
       $data = [];
        foreach ($eventos as $evento){
            $empresas = [];
            foreach ($evento->getContratos() as $contrato){
                if(!in_array($contrato->getEmpresa(),$empresas)){
                    $empresas[] = $contrato->getEmpresa();
                }
            }
            $evt =['id'=>$evento->getId(),
                'nombre'=>$evento->getNombre(),
                'lugar'=>$evento->getLugar(),
                'fechaInicio'=>$evento->getFechaInicio(),
                'fechaFinal'=>$evento->getFechaFinal(),
                'imagen'=>$evento->getImagen(),
                'empresas'=>$empresas,
            ];
            $data[] = $evt;
        }
        return $this->json([
        $data
        ]);
    }
    /**
     * @Route("/evento/{id}", name="eventoGetById")
     */
    public function eventoGetById($id){
        $evento = $this->getDoctrine()->getRepository(Evento::class)->find($id);
        $empresas = [];
        foreach ($evento->getContratos() as $contrato){
            if(!in_array($contrato->getEmpresa(),$empresas)){
                $empresas[] = $contrato->getEmpresa();
            }
        }
        $data =['id'=>$evento->getId(),
            'nombre'=>$evento->getNombre(),
            'lugar'=>$evento->getLugar(),
            'fechaInicio'=>$evento->getFechaInicio(),
            'fechaFinal'=>$evento->getFechaFinal(),
            'imagen'=>$evento->getImagen(),
            'empresas'=>$empresas,
        ];
        return $this->json([
            $data
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Contrato;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/contrato")
 */
class ContratoController extends AbstractController
{
    /**
     * @Route("/new", name="new contrato", methods={"POST"})
     */
    public function index(Request $request): Response
    {

        $dotrine =  $this->getDoctrine()->getManager();


        $contrato = new Contrato();

        $data = (json_decode($request->getContent()));

        $contrato->setEmpresa($data->empresa);
        $contrato->setEvento($data->evento);
        $contrato->setFecha($data->fecha);
        $contrato->setPrecio($data->precio);

        $dotrine->persist($contrato);
        $dotrine->flush();

        return $this->json([
            'message' => 'Contrato creado',
        ]);
    }

    /**
     * @Route ("/{id}", methods={"GET"})
     */
    public function contratoGetById($id){
        $doctrine = $this->getDoctrine()->getManager();

        $contrato = $doctrine->getRepository(Contrato::class)->find($id);

        $data= [
            'id'=>$id,
            'empresa'=>$contrato->getEmpresa(),
            'evento'=>$contrato->getEvento(),
            'fecha'=>$contrato->getFecha(),
            'precio'=>$contrato->getPrecio(),

        ];

        return $this->json([
            $data
        ]);
    }
}

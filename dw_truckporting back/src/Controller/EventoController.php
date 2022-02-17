<?php

namespace App\Controller;

use App\Entity\Evento;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/evento")
 */
class EventoController extends AbstractController
{
    /**
     * @Route("/", name="evento")
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
     * @Route ("/new", name="eventoNew")
     * @Method({"POST"})
     */
    public function eventoNew(Request $request): Response{
      $dotrine =  $this->getDoctrine()->getManager();

      $evento = new Evento();

      $evento->setNombre($request->get("nombre"));
      $evento->setLugar($request->get("lugar"));
      $evento->setFechaInicio($request->get("fechaInicio"));
      $evento->setFechaFinal($request->get("fechaFinal"));
      $evento->setImagen($request->get("imagen"));

      $dotrine->persist($evento);
      $dotrine->flush();

      return $this->json([
          "message" => "Evento Añadido"
      ]);


    }

    /**
     * @Route ("/{id}", name="eventoDelete")
     * @Method ({"DELETE"})
     */
    public function eventoDelete($id):Response{

        $doctrine = $this->getDoctrine()->getManager();

        $evento = $doctrine->getRepository(Evento::class)->find($id);

        $doctrine->remove($evento);
        $doctrine->flush();

        return $this->json([
            "message"=> "Evento Eliminado"
        ]);
    }

    /**
     * @Route ("/{id}",name = "eventoUpdate")
     * @Method  ({"PUT"})
     */
    public function evnetoUpdate($id,Request $request):Response{
        $doctrine = $this->getDoctrine()->getManager();



        $evento = $doctrine->getRepository(Evento::class)->find($request->get("id"));
        if ($evento == null){
            return $this->json([
                "message"=> "Evento no existe"
            ]);
        }


        $evento->setNombre($request->get("nombre"));
        $evento->setLugar($request->get("lugar"));
        $evento->setFechaInicio($request->get("fechaInicio"));
        $evento->setFechaFinal($request->get("fechaFinal"));
        $evento->setImagen($request->get("imagen"));

        $doctrine->persist($evento);
        $doctrine->flush();

        return $this->json([
            "message"=> "Evento Actualizado"
        ]);
    }

    /**
     * @Route("/{id}", name="eventoGetById", methods={"GET"})
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

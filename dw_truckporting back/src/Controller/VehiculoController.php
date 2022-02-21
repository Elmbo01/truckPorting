<?php

namespace App\Controller;

use App\Entity\Vehiculo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/vehiculo")
 */
class VehiculoController extends AbstractController
{
    /**
     * @Route("/", name="vehiculo")
     */
    public function index(): Response
    {
       $vehiculos = $this->getDoctrine()->getRepository(Vehiculo::class)->findAll();
       $data = [];

        return $this->json([
        $data
        ]);
    }
    /**
     * @Route ("/new", name="vehiculoNew", methods={"POST"})
     */
    public function vehiculoNew(Request $request): Response{
      $dotrine =  $this->getDoctrine()->getManager();

      $vehiculo = new Vehiculo();

      $vehiculo->setMatricula($request->get("matricula"));
      $vehiculo->setDisponibilidad($request->get("disponibilidad"));
      $vehiculo->setTipo($request->get("tipo"));
      $vehiculo->setCapacidad($request->get("capacidad"));
      $vehiculo->setCosto($request->get("costo"));
      $vehiculo->setPersonal($request->get("personal"));
      $vehiculo->setImagen($request->get("imagen"));

      $dotrine->persist($vehiculo);
      $dotrine->flush();

      return $this->json([
          "message" => "Vehiculo Añadido"
      ]);


    }

    /**
     * @Route ("/{id}", name="vehiculoDelete", methods={"DELETE"})
     */
    public function vehiculoDelete($id):Response{

        $doctrine = $this->getDoctrine()->getManager();

        $vehiculo = $doctrine->getRepository(Vehiculo::class)->find($id);

        $doctrine->remove($vehiculo);
        $doctrine->flush();

        return $this->json([
            "message"=> "Vehículo Eliminado"
        ]);
    }

    /**
     * @Route ("/{id}",name = "vehiculoUpdate", methods={"PUT"})
     */
    public function vehiculoUpdate($id,Request $request):Response{
        $doctrine = $this->getDoctrine()->getManager();

        $vehiculo = $doctrine->getRepository(Vehiculo::class)->find($request->get("id"));
        if ($vehiculo == null){
            return $this->json([
                "message"=> "Vehiculo no existe"
            ]);
        }

        $vehiculo->setMatricula($request->get("matricula"));
        $vehiculo->setDisponibilidad($request->get("disponibilidad"));
        $vehiculo->setTipo($request->get("tipo"));
        $vehiculo->setCapacidad($request->get("capacidad"));
        $vehiculo->setCosto($request->get("costo"));
        $vehiculo->setPersonal($request->get("personal"));
        $vehiculo->setImagen($request->get("imagen"));

        $doctrine->persist($vehiculo);
        $doctrine->flush();

        return $this->json([
            "message"=> "Vehiculo Actualizado"
        ]);
    }

    /**
     * @Route("/{id}", name="vehiculoGetById", methods={"GET"})
     */
    public function vehiculoGetById($id){
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($id);
        $vehiculos = [];

        $data =['id'=>$vehiculoId(),
            'matricula'=>$vehiculo->getMatricula(),
            'disponibilidad'=>$vehiculo->getDisponibilidad(),
            'tipo'=>$vehiculo->getTipo(),
            'capacidad'=>$vehiculo->getCapacidad(),
            'costo'=>$vehiculo->getCosto(),
            'personal'=>$vehiculo->getPersonal(),
            'imagen'=>$vehiculo->getImagen(),
        ];
        return $this->json([
            $data
        ]);
    }


}

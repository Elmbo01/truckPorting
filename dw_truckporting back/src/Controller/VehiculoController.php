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
       $data = [];
       foreach ($vehiculos as $vehiculo){
           $tmp = [
               "id"=>$vehiculo->getId(),
               "matricula"=>$vehiculo->getMatricula(),
               "disponibilidad"=>$vehiculo->getDisponibilidad(),
               "tipo"=>$vehiculo->getTipo(),
               "capacidad"=>$vehiculo->getCapacidad(),
               "costo"=>$vehiculo->getCosto(),
               "personal"=>$vehiculo->getPersonal(),
               'imagen'=>$vehiculo->getImagen(),
           ];
          $data[] = $tmp;
        }
        return $this->json(
            $data
        );
    }
    /**
     * @Route("/vehiculo/{id}", name="vehiculoGetById")
     */
    public function vehiculoGetById($id){
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($id);
        $data = [
            "id"=>$vehiculo->getId(),
            "matricula"=>$vehiculo->getMatricula(),
            "disponibilidad"=>$vehiculo->getDisponibilidad(),
            "tipo"=>$vehiculo->getTipo(),
            "capacidad"=>$vehiculo->getCapacidad(),
            "costo"=>$vehiculo->getCosto(),
            "personal"=>$vehiculo->getPersonal(),
            'imagen'=>$vehiculo->getImagen(),
        ];
        return $this->json(
            $data
        );
    }
}

<?php

namespace App\Controller;

use App\Entity\Empresa;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/empresa")
 */
class EmpresaController extends AbstractController
{
    /**
     * @Route("/", name="empresa", methods={"GET"})
     */
    public function index(): Response
    {
       $empresas = $this->getDoctrine()->getRepository(Empresa::class)->findAll();
       $data = [];
       foreach ($empresas as $empresa){
           $emp =[ 'id'=> $empresa->getId(),
               'nombre'=> $empresa->getNombre(),
               'tipo'=> $empresa->getTipo(),
               'contraseña'=> $empresa->getContrasena(),
               'telefono'=> $empresa->getTelefono(),
               'cif'=> $empresa->getCif(),
               'imagen'=>$empresa->getImagen(),
               'contrato'=>$empresa->getContratos(),
           ];
           $data[] = $emp;
       }
       return $this->json([
           $data
        ]);
    }

    /**
     * @Route ("/new", name="EmpresaNew", methods={"GET", "POST"})
     */
    public function empresaNew(Request $request, EntityManagerInterface $entityManager){
        $empresa = new Empresa();

    }

    /**
     * @Route("/find/{id}", name="getById")
     */
    public function empresaGetById($id){

        $empresa = $this->getDoctrine()->getRepository(Empresa::class)->find($id);
        $data = [
            'id'=> $empresa->getId(),
            'nombre'=> $empresa->getNombre(),
            'tipo'=> $empresa->getTipo(),
            'contraseña'=> $empresa->getContrasena(),
            'telefono'=> $empresa->getTelefono(),
            'cif'=> $empresa->getCif(),
            'imagen'=>$empresa->getImagen(),
        ];
        return $this->json([
            $data
        ]);


    }
    /**
     * @Route ("/maxId", name="EmpresaMaxId")
     */
    public function empresaMaxId(){
        $empresas = $this->getDoctrine()->getRepository(Empresa::class)->findAll();
        $empresaIdMax = array_search(max($empresas),$empresas);
        return $this->json([
            $empresaIdMax
        ]);
    }


}
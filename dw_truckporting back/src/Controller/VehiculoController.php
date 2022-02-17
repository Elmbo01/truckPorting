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

     /**
     * @Route("/", name="vehiculo_index", methods={"GET"})
     */
    public function index(vehiculoRepository $vehiculoRepository): Response
    {
        return $this->json(
            $data
        );
    }

    /**
     * @Route("/new", name="vehiculo_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vehiculo= new Vehiculo();
        $form = $this->createForm(VehiculoType::class, $vehiculo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($vehiculo);
            $entityManager->flush();

            return $this->redirectToRoute('vehiculo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->json(
            $data
        );
    }

    /**
     * @Route("/{id}", name="empresa_show", methods={"GET"})
     */
    public function show(Vehiculo $vehiculo): Response
    {
        return $this->json(
            $data
        );
    }

    /**
     * @Route("/{id}/edit", name="vehiculo_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Vehiculo $vehiculo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VehiculoType::class, $vehiculo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('vehiculo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->json(
            $data
        );
    }

    /**
     * @Route("/{id}", name="vehiculo_delete", methods={"POST"})
     */
    public function delete(Request $request, Vehiculo$vehiculo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehiculo->getId(), $request->request->get('_token'))) {
            $entityManager->remove($empresa);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vehiculo_index', [], Response::HTTP_SEE_OTHER);
    }
}

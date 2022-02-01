<?php

namespace App\Entity;

use App\Repository\VehiculoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculoRepository::class)
 */
class Vehiculo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricula;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibilidad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tipo;

    /**
     * @ORM\Column(type="integer")
     */
    private $capacidad;

    /**
     * @ORM\Column(type="integer")
     */
    private $costo;

    /**
     * @ORM\Column(type="integer")
     */
    private $personal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricula(): ?string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getDisponibilidad(): ?bool
    {
        return $this->disponibilidad;
    }

    public function setDisponibilidad(bool $disponibilidad): self
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCapacidad(): ?int
    {
        return $this->capacidad;
    }

    public function setCapacidad(int $capacidad): self
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    public function getCosto(): ?int
    {
        return $this->costo;
    }

    public function setCosto(int $costo): self
    {
        $this->costo = $costo;

        return $this;
    }

    public function getPersonal(): ?int
    {
        return $this->personal;
    }

    public function setPersonal(int $personal): self
    {
        $this->personal = $personal;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }
}

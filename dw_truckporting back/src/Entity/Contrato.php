<?php

namespace App\Entity;

use App\Repository\ContratoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContratoRepository::class)
 */
class Contrato
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Empresa::class, inversedBy="contratos")
     */
    private $empresa;

    /**
     * @ORM\ManyToOne(targetEntity=Evento::class, inversedBy="contratos")
     */
    private $Evento;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToMany(targetEntity=Vehiculo::class, inversedBy="contratos")
     */
    private $Vehiculos;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    public function __construct()
    {
        $this->Vehiculos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpresa(): ?Empresa
    {
        return $this->empresa;
    }

    public function setEmpresa(?Empresa $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getEvento(): ?Evento
    {
        return $this->Evento;
    }

    public function setEvento(?Evento $Evento): self
    {
        $this->Evento = $Evento;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * @return Collection|Vehiculo[]
     */
    public function getVehiculos(): Collection
    {
        return $this->Vehiculos;
    }

    public function addVehiculo(Vehiculo $vehiculo): self
    {
        if (!$this->Vehiculos->contains($vehiculo)) {
            $this->Vehiculos[] = $vehiculo;
        }

        return $this;
    }

    public function removeVehiculo(Vehiculo $vehiculo): self
    {
        $this->Vehiculos->removeElement($vehiculo);

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}

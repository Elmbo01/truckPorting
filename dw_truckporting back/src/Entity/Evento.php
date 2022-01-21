<?php

namespace App\Entity;

use App\Repository\EventoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventoRepository::class)
 */
class Evento
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lugar;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaInicio;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaFinal;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getLugar(): ?string
    {
        return $this->lugar;
    }

    public function setLugar(string $lugar): self
    {
        $this->lugar = $lugar;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(\DateTimeInterface $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaFinal(): ?\DateTimeInterface
    {
        return $this->fechaFinal;
    }

    public function setFechaFinal(\DateTimeInterface $fechaFinal): self
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }


}

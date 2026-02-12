<?php

namespace App\Entity;

use App\Repository\FleetVehicleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FleetVehicleRepository::class)]
class FleetVehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $number = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column]
    private ?float $capacity = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column]
    private ?float $mileage = null;

    #[ORM\Column]
    private ?bool $gps_enabled = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): static
    {
        $this->number = $number;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getCapacity(): ?float
    {
        return $this->capacity;
    }

    public function setCapacity(float $capacity): static
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getMileage(): ?float
    {
        return $this->mileage;
    }

    public function setMileage(float $mileage): static
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function isGpsEnabled(): ?bool
    {
        return $this->gps_enabled;
    }

    public function setGpsEnabled(bool $gps_enabled): static
    {
        $this->gps_enabled = $gps_enabled;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\TankRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TankRepository::class)]
class Tank
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $station_id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $fuel_type_id = null;

    #[ORM\Column]
    private ?float $capacity_liters = null;

    #[ORM\Column]
    private ?float $current_volume = null;

    #[ORM\Column]
    private ?float $min_threshold = null;

    #[ORM\Column]
    private ?float $max_threshold = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getStationId(): ?int
    {
        return $this->station_id;
    }

    public function setStationId(int $station_id): static
    {
        $this->station_id = $station_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFuelTypeId(): ?int
    {
        return $this->fuel_type_id;
    }

    public function setFuelTypeId(int $fuel_type_id): static
    {
        $this->fuel_type_id = $fuel_type_id;

        return $this;
    }

    public function getCapacityLiters(): ?float
    {
        return $this->capacity_liters;
    }

    public function setCapacityLiters(float $capacity_liters): static
    {
        $this->capacity_liters = $capacity_liters;

        return $this;
    }

    public function getCurrentVolume(): ?float
    {
        return $this->current_volume;
    }

    public function setCurrentVolume(float $current_volume): static
    {
        $this->current_volume = $current_volume;

        return $this;
    }

    public function getMinThreshold(): ?float
    {
        return $this->min_threshold;
    }

    public function setMinThreshold(float $min_threshold): static
    {
        $this->min_threshold = $min_threshold;

        return $this;
    }

    public function getMaxThreshold(): ?float
    {
        return $this->max_threshold;
    }

    public function setMaxThreshold(float $max_threshold): static
    {
        $this->max_threshold = $max_threshold;

        return $this;
    }
}

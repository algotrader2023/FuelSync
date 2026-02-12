<?php

namespace App\Entity;

use App\Enum\VehicleType;
use App\Repository\VehicleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $plate_number = null;

    #[ORM\Column]
    private ?float $capacity = null;

    #[ORM\Column(enumType: VehicleType::class)]
    private ?VehicleType $type = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column]
    private ?\DateTime $insurance_expiry = null;

    #[ORM\Column]
    private ?\DateTime $calibration_expiry = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Transporter $transporter_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getPlateNumber(): ?string
    {
        return $this->plate_number;
    }

    public function setPlateNumber(string $plate_number): static
    {
        $this->plate_number = $plate_number;

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

    public function getType(): ?VehicleType
    {
        return $this->type;
    }

    public function setType(VehicleType $type): static
    {
        $this->type = $type;

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

    public function getInsuranceExpiry(): ?\DateTime
    {
        return $this->insurance_expiry;
    }

    public function setInsuranceExpiry(\DateTime $insurance_expiry): static
    {
        $this->insurance_expiry = $insurance_expiry;

        return $this;
    }

    public function getCalibrationExpiry(): ?\DateTime
    {
        return $this->calibration_expiry;
    }

    public function setCalibrationExpiry(\DateTime $calibration_expiry): static
    {
        $this->calibration_expiry = $calibration_expiry;

        return $this;
    }

    public function getTransporterId(): ?Transporter
    {
        return $this->transporter_id;
    }

    public function setTransporterId(?Transporter $transporter_id): static
    {
        $this->transporter_id = $transporter_id;

        return $this;
    }
}

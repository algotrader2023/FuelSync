<?php

namespace App\Entity;

use App\Repository\FuelingRecordRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FuelingRecordRepository::class)]
class FuelingRecord
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $vehicle_name = null;

    #[ORM\Column(length: 255)]
    private ?string $operator_name = null;

    #[ORM\Column]
    private ?float $quantity = null;

    #[ORM\Column]
    private ?float $start_index = null;

    #[ORM\Column]
    private ?float $end_index = null;

    #[ORM\Column]
    private ?float $variance = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Station $station_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FuelType $fuel_type_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Voucher $voucher_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $created_by = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getVehicleName(): ?string
    {
        return $this->vehicle_name;
    }

    public function setVehicleName(string $vehicle_name): static
    {
        $this->vehicle_name = $vehicle_name;

        return $this;
    }

    public function getOperatorName(): ?string
    {
        return $this->operator_name;
    }

    public function setOperatorName(string $operator_name): static
    {
        $this->operator_name = $operator_name;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getStartIndex(): ?float
    {
        return $this->start_index;
    }

    public function setStartIndex(float $start_index): static
    {
        $this->start_index = $start_index;

        return $this;
    }

    public function getEndIndex(): ?float
    {
        return $this->end_index;
    }

    public function setEndIndex(float $end_index): static
    {
        $this->end_index = $end_index;

        return $this;
    }

    public function getVariance(): ?float
    {
        return $this->variance;
    }

    public function setVariance(float $variance): static
    {
        $this->variance = $variance;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getStationId(): ?Station
    {
        return $this->station_id;
    }

    public function setStationId(?Station $station_id): static
    {
        $this->station_id = $station_id;

        return $this;
    }

    public function getFuelTypeId(): ?FuelType
    {
        return $this->fuel_type_id;
    }

    public function setFuelTypeId(?FuelType $fuel_type_id): static
    {
        $this->fuel_type_id = $fuel_type_id;

        return $this;
    }

    public function getVoucherId(): ?Voucher
    {
        return $this->voucher_id;
    }

    public function setVoucherId(?Voucher $voucher_id): static
    {
        $this->voucher_id = $voucher_id;

        return $this;
    }

    public function getCreatedBy(): ?User
    {
        return $this->created_by;
    }

    public function setCreatedBy(?User $created_by): static
    {
        $this->created_by = $created_by;

        return $this;
    }
}

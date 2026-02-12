<?php

namespace App\Entity;

use App\Enum\VoucherStatus;
use App\Repository\VoucherRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoucherRepository::class)]
class Voucher
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    private ?string $beneficiary = null;

    #[ORM\Column(length: 255)]
    private ?string $department = null;

    #[ORM\Column]
    private ?float $requested_quantity = null;

    #[ORM\Column]
    private ?float $start_index = null;

    #[ORM\Column]
    private ?float $end_index = null;

    #[ORM\Column]
    private ?float $calculated_consumption = null;

    #[ORM\Column]
    private ?float $variance = null;

    #[ORM\Column(enumType: VoucherStatus::class)]
    private ?VoucherStatus $status = null;

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
    private ?User $approved_by = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

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

    public function getFuelTypeId(): ?int
    {
        return $this->fuel_type_id;
    }

    public function setFuelTypeId(int $fuel_type_id): static
    {
        $this->fuel_type_id = $fuel_type_id;

        return $this;
    }

    public function getBeneficiary(): ?string
    {
        return $this->beneficiary;
    }

    public function setBeneficiary(string $beneficiary): static
    {
        $this->beneficiary = $beneficiary;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(string $department): static
    {
        $this->department = $department;

        return $this;
    }

    public function getRequestedQuantity(): ?float
    {
        return $this->requested_quantity;
    }

    public function setRequestedQuantity(float $requested_quantity): static
    {
        $this->requested_quantity = $requested_quantity;

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

    public function getCalculatedConsumption(): ?float
    {
        return $this->calculated_consumption;
    }

    public function setCalculatedConsumption(float $calculated_consumption): static
    {
        $this->calculated_consumption = $calculated_consumption;

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

    public function getStatus(): ?VoucherStatus
    {
        return $this->status;
    }

    public function setStatus(VoucherStatus $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getApprovedBy(): ?string
    {
        return $this->approved_by;
    }

    public function setApprovedBy(string $approved_by): static
    {
        $this->approved_by = $approved_by;

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
}

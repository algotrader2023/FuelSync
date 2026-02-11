<?php

namespace App\Entity;

use App\Enum\ReferenceType;
use App\Enum\StockMovementType;
use App\Repository\StockMovementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockMovementRepository::class)]
class StockMovement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $station_id = null;

    #[ORM\Column]
    private ?int $tank_id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $json = null;

    #[ORM\Column(enumType: StockMovementType::class)]
    private ?StockMovementType $mov_type = null;

    #[ORM\Column(enumType: ReferenceType::class)]
    private ?ReferenceType $reference_type = null;

    #[ORM\Column]
    private ?int $reference_id = null;

    #[ORM\Column]
    private ?float $quantity = null;

    #[ORM\Column]
    private ?float $variance = null;

    #[ORM\Column(length: 255)]
    private ?string $created_by = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

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

    public function getTankId(): ?int
    {
        return $this->tank_id;
    }

    public function setTankId(int $tank_id): static
    {
        $this->tank_id = $tank_id;

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

    public function getJson(): ?string
    {
        return $this->json;
    }

    public function setJson(string $json): static
    {
        $this->json = $json;

        return $this;
    }

    public function getMovType(): ?StockMovementType
    {
        return $this->mov_type;
    }

    public function setMovType(StockMovementType $mov_type): static
    {
        $this->mov_type = $mov_type;

        return $this;
    }

    public function getReferenceType(): ?ReferenceType
    {
        return $this->reference_type;
    }

    public function setReferenceType(ReferenceType $reference_type): static
    {
        $this->reference_type = $reference_type;

        return $this;
    }

    public function getReferenceId(): ?int
    {
        return $this->reference_id;
    }

    public function setReferenceId(int $reference_id): static
    {
        $this->reference_id = $reference_id;

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

    public function getVariance(): ?float
    {
        return $this->variance;
    }

    public function setVariance(float $variance): static
    {
        $this->variance = $variance;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->created_by;
    }

    public function setCreatedBy(string $created_by): static
    {
        $this->created_by = $created_by;

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

<?php

namespace App\Entity;

use App\Repository\DispatchUnloadingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DispatchUnloadingRepository::class)]
class DispatchUnloading
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $dispatch_id = null;

    #[ORM\Column]
    private ?float $empty_weight = null;

    #[ORM\Column]
    private ?float $loaded_weight = null;

    #[ORM\Column]
    private ?float $net_weight = null;

    #[ORM\Column]
    private ?float $real_quantity = null;

    #[ORM\Column]
    private ?float $variance = null;

    #[ORM\Column(length: 255)]
    private ?string $declaration_number = null;

    #[ORM\Column(length: 255)]
    private ?string $liquidation_number = null;

    #[ORM\Column(length: 255)]
    private ?string $driver_name = null;

    #[ORM\Column(length: 255)]
    private ?string $validated_by = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $validated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getDispatchId(): ?int
    {
        return $this->dispatch_id;
    }

    public function setDispatchId(int $dispatch_id): static
    {
        $this->dispatch_id = $dispatch_id;

        return $this;
    }

    public function getEmptyWeight(): ?float
    {
        return $this->empty_weight;
    }

    public function setEmptyWeight(float $empty_weight): static
    {
        $this->empty_weight = $empty_weight;

        return $this;
    }

    public function getLoadedWeight(): ?float
    {
        return $this->loaded_weight;
    }

    public function setLoadedWeight(float $loaded_weight): static
    {
        $this->loaded_weight = $loaded_weight;

        return $this;
    }

    public function getNetWeight(): ?float
    {
        return $this->net_weight;
    }

    public function setNetWeight(float $net_weight): static
    {
        $this->net_weight = $net_weight;

        return $this;
    }

    public function getRealQuantity(): ?float
    {
        return $this->real_quantity;
    }

    public function setRealQuantity(float $real_quantity): static
    {
        $this->real_quantity = $real_quantity;

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

    public function getDeclarationNumber(): ?string
    {
        return $this->declaration_number;
    }

    public function setDeclarationNumber(string $declaration_number): static
    {
        $this->declaration_number = $declaration_number;

        return $this;
    }

    public function getLiquidationNumber(): ?string
    {
        return $this->liquidation_number;
    }

    public function setLiquidationNumber(string $liquidation_number): static
    {
        $this->liquidation_number = $liquidation_number;

        return $this;
    }

    public function getDriverName(): ?string
    {
        return $this->driver_name;
    }

    public function setDriverName(string $driver_name): static
    {
        $this->driver_name = $driver_name;

        return $this;
    }

    public function getValidatedBy(): ?string
    {
        return $this->validated_by;
    }

    public function setValidatedBy(string $validated_by): static
    {
        $this->validated_by = $validated_by;

        return $this;
    }

    public function getValidatedAt(): ?\DateTimeImmutable
    {
        return $this->validated_at;
    }

    public function setValidatedAt(\DateTimeImmutable $validated_at): static
    {
        $this->validated_at = $validated_at;

        return $this;
    }
}

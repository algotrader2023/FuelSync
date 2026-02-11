<?php

namespace App\Entity;

use App\Enum\DispatchStatus;
use App\Repository\DispatchRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DispatchRepository::class)]
class Dispatch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $station_id = null;

    #[ORM\Column]
    private ?int $supplier_id = null;

    #[ORM\Column]
    private ?int $transporter_id = null;

    #[ORM\Column]
    private ?int $vehicle_id = null;

    #[ORM\Column]
    private ?float $planned_volume = null;

    #[ORM\Column]
    private ?float $approved_volume = null;

    #[ORM\Column]
    private ?float $float = null;

    #[ORM\Column]
    private ?float $delivered_volume = null;

    #[ORM\Column]
    private ?float $density = null;

    #[ORM\Column]
    private ?float $variance = null;

    #[ORM\Column(enumType: DispatchStatus::class)]
    private ?DispatchStatus $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $scheduled_at = null;

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

    public function getSupplierId(): ?int
    {
        return $this->supplier_id;
    }

    public function setSupplierId(int $supplier_id): static
    {
        $this->supplier_id = $supplier_id;

        return $this;
    }

    public function getTransporterId(): ?int
    {
        return $this->transporter_id;
    }

    public function setTransporterId(int $transporter_id): static
    {
        $this->transporter_id = $transporter_id;

        return $this;
    }

    public function getVehicleId(): ?int
    {
        return $this->vehicle_id;
    }

    public function setVehicleId(int $vehicle_id): static
    {
        $this->vehicle_id = $vehicle_id;

        return $this;
    }

    public function getPlannedVolume(): ?float
    {
        return $this->planned_volume;
    }

    public function setPlannedVolume(float $planned_volume): static
    {
        $this->planned_volume = $planned_volume;

        return $this;
    }

    public function getApprovedVolume(): ?float
    {
        return $this->approved_volume;
    }

    public function setApprovedVolume(float $approved_volume): static
    {
        $this->approved_volume = $approved_volume;

        return $this;
    }

    public function getFloat(): ?float
    {
        return $this->float;
    }

    public function setFloat(float $float): static
    {
        $this->float = $float;

        return $this;
    }

    public function getDeliveredVolume(): ?float
    {
        return $this->delivered_volume;
    }

    public function setDeliveredVolume(float $delivered_volume): static
    {
        $this->delivered_volume = $delivered_volume;

        return $this;
    }

    public function getDensity(): ?float
    {
        return $this->density;
    }

    public function setDensity(float $density): static
    {
        $this->density = $density;

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

    public function getStatus(): ?DispatchStatus
    {
        return $this->status;
    }

    public function setStatus(DispatchStatus $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getScheduledAt(): ?\DateTimeImmutable
    {
        return $this->scheduled_at;
    }

    public function setScheduledAt(\DateTimeImmutable $scheduled_at): static
    {
        $this->scheduled_at = $scheduled_at;

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

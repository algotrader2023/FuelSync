<?php

namespace App\Entity;

use App\Repository\TransferRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransferRepository::class)]
class Transfer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $volume_declared = null;

    #[ORM\Column]
    private ?float $volume_received = null;

    #[ORM\Column]
    private ?float $variance = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Station $source_station_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Station $destination_station_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicle $vehicle_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getSourceStationId(): ?int
    {
        return $this->source_station_id;
    }

    public function setSourceStationId(int $source_station_id): static
    {
        $this->source_station_id = $source_station_id;

        return $this;
    }

    public function getDestinationStationId(): ?int
    {
        return $this->destination_station_id;
    }

    public function setDestinationStationId(int $destination_station_id): static
    {
        $this->destination_station_id = $destination_station_id;

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

    public function getVolumeDeclared(): ?float
    {
        return $this->volume_declared;
    }

    public function setVolumeDeclared(float $volume_declared): static
    {
        $this->volume_declared = $volume_declared;

        return $this;
    }

    public function getVolumeReceived(): ?float
    {
        return $this->volume_received;
    }

    public function setVolumeReceived(float $volume_received): static
    {
        $this->volume_received = $volume_received;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

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

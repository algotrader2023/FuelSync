<?php

namespace App\Entity;

use App\Repository\MissionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MissionRepository::class)]
class Mission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $planned_volume = null;

    #[ORM\Column]
    private ?\DateTime $departure_time = null;

    #[ORM\Column]
    private ?\DateTime $arrival_time = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FleetVehicle $fleet_vehicle_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Station $origin_station_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Station $destination_station_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $driver_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

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

    public function getDepartureTime(): ?\DateTime
    {
        return $this->departure_time;
    }

    public function setDepartureTime(\DateTime $departure_time): static
    {
        $this->departure_time = $departure_time;

        return $this;
    }

    public function getArrivalTime(): ?\DateTime
    {
        return $this->arrival_time;
    }

    public function setArrivalTime(\DateTime $arrival_time): static
    {
        $this->arrival_time = $arrival_time;

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

    public function getFleetVehicleId(): ?FleetVehicle
    {
        return $this->fleet_vehicle_id;
    }

    public function setFleetVehicleId(?FleetVehicle $fleet_vehicle_id): static
    {
        $this->fleet_vehicle_id = $fleet_vehicle_id;

        return $this;
    }

    public function getOriginStationId(): ?Station
    {
        return $this->origin_station_id;
    }

    public function setOriginStationId(?Station $origin_station_id): static
    {
        $this->origin_station_id = $origin_station_id;

        return $this;
    }

    public function getDestinationStationId(): ?Station
    {
        return $this->destination_station_id;
    }

    public function setDestinationStationId(?Station $destination_station_id): static
    {
        $this->destination_station_id = $destination_station_id;

        return $this;
    }

    public function getDriverId(): ?User
    {
        return $this->driver_id;
    }

    public function setDriverId(?User $driver_id): static
    {
        $this->driver_id = $driver_id;

        return $this;
    }
}

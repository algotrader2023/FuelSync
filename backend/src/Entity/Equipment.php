<?php

namespace App\Entity;

use App\Enum\EquipmentType;
use App\Repository\EquipmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipmentRepository::class)]
class Equipment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(enumType: EquipmentType::class)]
    private ?EquipmentType $type = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $installation_date = null;

    #[ORM\Column]
    private ?int $expected_lifetime = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Station $station_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

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

    public function getType(): ?EquipmentType
    {
        return $this->type;
    }

    public function setType(EquipmentType $type): static
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

    public function getInstallationDate(): ?string
    {
        return $this->installation_date;
    }

    public function setInstallationDate(string $installation_date): static
    {
        $this->installation_date = $installation_date;

        return $this;
    }

    public function getExpectedLifetime(): ?int
    {
        return $this->expected_lifetime;
    }

    public function setExpectedLifetime(int $expected_lifetime): static
    {
        $this->expected_lifetime = $expected_lifetime;

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
}

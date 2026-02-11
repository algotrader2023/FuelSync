<?php

namespace App\Entity;

use App\Enum\SeverityType;
use App\Enum\StationAlertType;
use App\Repository\StationAlertRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StationAlertRepository::class)]
class StationAlert
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $station_id = null;

    #[ORM\Column(enumType: StationAlertType::class)]
    private ?StationAlertType $type = null;

    #[ORM\Column(enumType: SeverityType::class)]
    private ?SeverityType $severity = null;

    #[ORM\Column(length: 255)]
    private ?string $message = null;

    #[ORM\Column]
    private ?bool $resolved = null;

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

    public function getType(): ?StationAlertType
    {
        return $this->type;
    }

    public function setType(StationAlertType $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getSeverity(): ?SeverityType
    {
        return $this->severity;
    }

    public function setSeverity(SeverityType $severity): static
    {
        $this->severity = $severity;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function isResolved(): ?bool
    {
        return $this->resolved;
    }

    public function setResolved(bool $resolved): static
    {
        $this->resolved = $resolved;

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
